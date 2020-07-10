<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meeting as MasterModel;
use App\ViewMeeting as MasterViewModel;
use App\Area;
use App\User;
use App\MeetingAttendee;
use Sentinel;
use Redirect;
use Storage;
use Illuminate\Support\Facades\DB;

use App\SendMail;

use PDF;
use TCPDF_FONTS;

class MeetingsController extends Controller
{

    public function __construct() {
        // $this->middleware('permissionsMeeting');

        $this->active = "meetings";
        $this->model = "Meeting";
        $this->select = [
            'id',
            'name',
            'client',
            'version',
            'created_at'
        ];
        // 1 = all
        // 2 = only
        // 3 = exeptions
        $this->request_whit = 1;
        $this->only = [
        ];
        $this->exeptions = [
        ];
        $this->compact = ['word', 'word1', 'active', 'model', 'view', 'columns', 'select', 'actions'];

    }

    public function columns()
    {
        $columns = [
            trans('validation.attributes.id'),
            trans('validation.attributes.name'),
            trans('validation.attributes.client'),
            trans('validation.attributes.version'),
            trans('validation.attributes.created_at'),
            trans('validation.attributes.actions'),
        ];

        return $columns;
    }


    public function index()
    {
        $active = $this->active;
        $model = $this->model;
        $view = 'index';
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = null;
        $columns = $this->columns();
        $select = $this->select;
        // 1 = (show, edit, delete)
        // 2 = (show, edit)
        // 3 = (show, delete)
        // 4 = (edit, delete)
        // 5 = (show)
        // 6 = (edit)
        // 7 = (delete)
        $actions = 1;

        $users = User::select(DB::raw("CONCAT(first_name,' ',last_name) AS name"),'id')->pluck('name', 'id');

        return view('admin.index', compact($this->compact, 'users'));
    }


    public function create()
    {
        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $word1 = trans('module_'.$this->active.'.module_title_s');
        $view = 'create';
        $actions = 1;

        $next = MasterModel::orderBy('id', 'DESC')->first();
        $next = $next ? $next->id + 1 : 1;

        // Catalogs
        $areas = Area::pluck('name', 'id');
        $users = User::select(DB::raw("CONCAT(first_name,' ',last_name) AS name"),'id')->pluck('name', 'id');

        return view('admin.create', compact($this->compact, 'areas', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$meetings = $request->all();

    	unset($meetings['_token']);
    	unset($meetings['id']);
    	unset($meetings['attendees']);
    	unset($meetings['created_at']);

    	$item = MasterModel::create($meetings);

    	foreach ($request->attendees as $attendee) {
    		MeetingAttendee::create([
    			'meeting_id' => $item->id,
    			'user_id' => $attendee
    		]);
    	}


        if($item){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.create.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.create.error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = MasterViewModel::find($id);

        $attendees = MeetingAttendee::where('meeting_id', $id)->get();
        $attendees_names = [];
        foreach ($attendees as $attendee) {
        	$user = User::withTrashed()->find($attendee->user_id);
        	$attendees_names[] = $user->first_name." ".$user->last_name;
        }

        $model = $this->model;
        $view = 'show';
        $active = $this->active;
        $columns = $this->columns();
        $select = $this->select;
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = trans('module_'.$this->active.'.module_title_s');
        $actions = 1;

        $users = User::select(DB::raw("CONCAT(first_name,' ',last_name) AS name"),'id')->pluck('name', 'id');

        return view('admin.show', compact($this->compact, 'item', 'attendees_names', 'users', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = MasterModel::find($id);

        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = trans('module_'.$this->active.'.module_title_s');
        $view = 'edit';
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;

        $meetingAttendees = MeetingAttendee::select('user_id')->where('meeting_id', $id)->get();
        $attendees = [];
        foreach ($meetingAttendees as $attendee) {
        	$attendees[] = $attendee->user_id;
        }


        // Catalogs
        $areas = Area::pluck('name', 'id');
        $users = User::select(DB::raw("CONCAT(first_name,' ',last_name) AS name"),'id')->pluck('name', 'id');

        return view('admin.edit', compact($this->compact, 'item', 'areas', 'users', 'attendees'));
    }



    public function update(Request $request, $id)
    {
        $item = MasterModel::find($id);

        $meetings = $request->all();

        unset($meetings['_token']);
        unset($meetings['id']);
        unset($meetings['attendees']);
        unset($meetings['created_at']);

        $item->fill($meetings);

        MeetingAttendee::where('meeting_id', $id)->delete();

        foreach ($request->attendees as $attendee) {
        	MeetingAttendee::create([
        		'meeting_id' => $id,
        		'user_id' => $attendee
        	]);
        }

        if($item->save()){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.update.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.update.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(MasterModel::destroy($request->id)){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.delete.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestore()
    {
        $active = $this->active;
        $model = $this->model;
        $view = 'delete';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;
        $word1 = trans('module_'.$this->active.'.module_title_s');

        return view('admin.deleted', compact($this->compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postRestore(Request $request)
    {
        $item = MasterModel::onlyTrashed()->find($request->id);

        if($item->restore()){
            return Redirect::route($this->active.'.deleted')->with('success', trans('module_'.$this->active.'.crud.restore.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.restore.error'));
        }
    }
}
