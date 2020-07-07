<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Redirect;
use Sentinel;
use Session;
use App\Product;
use App\ViewProduct;
use App\ViewService;
use App\ProductModule;
use App\Status;
use App\Contact;
use App\SendMail;

class FrontEndController extends Controller
{
    public function __construct()
    {

        $this->compact = ['active'];

        //Catalogs
        $this->catalog_country_id = DB::table('countries')->pluck('name', 'id');
        $this->catalog_state_id = DB::table('states')->pluck('name', 'id');
        $this->catalog_city_id = DB::table('cities')->pluck('name', 'id');
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';

    	return view('index', compact($this->compact));
    }

    public function getContact(){
        $active = 'contact';

        return view('website.contact', compact($this->compact));
    }

    public function postContact(Request $request){
        $item = Contact::create($request->all());

        if($item){
            // Send mails.
            SendMail::createMailContact($request);
            SendMail::createMailContactAdmin($request);

            Session::flash("thanks_ready",true);
            return Redirect::to("thanks")->with($this->compact);
        }

        return Redirect::back()->with('error', trans('contact.send_mail.error'));
    }

    public function thanks() {
        $active = 'thanks';

        if( Session::get("thanks_ready") )
            return view("thanks", compact($this->compact));
        else
            return Redirect::to("/")->with($this->compact);
    }
}
