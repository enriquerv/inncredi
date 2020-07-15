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

use App\User;
use App\ViewMeeting;
use App\MeetingAttendee;

use PDF;
use TCPDF_FONTS;

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

        public function sendMailMeeting(Request $request)
        {
            $meeting = ViewMeeting::find($request->meeting_id);
            $mailTo = [];
            foreach ($request->users as $user) {
                $userInfo = User::find($user);
                $mailTo[] = [
                    'email' => $userInfo->email,
                    'name' => $userInfo->first_name." ".$userInfo->last_name,
                ];
            }
            $assMeet = MeetingAttendee::where('meeting_id', $meeting->id);
            $attendeesArr = [];
            foreach ($assMeet->get() as $attendee) {
                $user = User::find($attendee->user_id);
                $attendeesArr[] = $user->first_name." ".$user->last_name;
            }
            $attendees = implode(', ', $attendeesArr);


            // $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
            // PDF::SetCreator(PDF_CREATOR);
            PDF::SetAuthor(env("APP_NAME"));
            PDF::SetTitle("Minuta ".date('Y-m-d H:i:s'));

            PDF::setHeaderCallback(function($pdf) {
                // Logo
                // $image_file = K_PATH_IMAGES.'logo.png';
                $image_file = K_PATH_IMAGES.'header.jpg';
                $pdf->Image($image_file, 0, 0, 210, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
                // Logo 2
                $image_file = K_PATH_IMAGES.'logo2.png';
                $pdf->Image($image_file, 90, 15, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
            });

            PDF::setFooterCallback(function($pdf) use ($meeting) {
                $date = $meeting->created_at;

                $image_file = K_PATH_IMAGES.'footer.jpg';
                $pdf->Image($image_file, 0, 286.5, 210, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

                // Position at 15 mm from bottom
                $pdf->SetY(-8);
                // Set font
                $pdf->SetFont('helvetica', 'I', 8);
                $pdf->SetTextColor(255,255,255);

                $pdf->Cell(0, 5, 'Formato de Minuta | Fábrica de Soluciones Rak', 0, false, 'T', 0, '', 0, false, 'T', 'M');
                $pdf->Cell(0, 5, ucfirst(strftime("%B", strtotime($date))).", ".strftime("%Y", strtotime($date)), 0, false, 'R', 0, '', 0, false, 'T', 'M');

                $pdf->SetY(-8);
                $pdf->SetX(105);
                $pdf->Cell(0, 5, 'www.fabricadesoluciones.com/', 0, false, 'T', 0, '', 0, false, 'T', 'M');
            });

            PDF::setPrintHeader(true);
            PDF::setPrintFooter(true);
            PDF::SetMargins(20, 25, 20, false);
            PDF::SetAutoPageBreak(true, 20);
            // PDF::SetFont("hknovamedium", 'I', 8);
            PDF::addPage();

            $css = "border: 1px solid #FFF; text-align: left; ";
            $textorange = "color: #de6421; font-size:20px; margin: 0!important; ";
            $textgray = "color: #8a8987; ";
            $bgbluehard = "color: #FFF; background-color: #2f5496;";
            $bgbluelight = "background-color: #d9e2f3;";
            $content = '';
          $content .= '
                <table style="'.$css.'" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th style="'.$css.'"></th>
                            <th style="'.$css.'"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="'.$css.$textorange.'">
                                <strong>Detalles</strong>
                            </td>
                            <td style="'.$css.$textorange.'">
                                <strong>Asistentes</strong>
                            </td>
                        </tr>
                        <tr>
                            <td style="'.$css.'">
                                <p>Fecha: '.$meeting->created_at->format('d-m-Y').'</p>
                                <p>ID Minuta: '.$meeting->id.'</p>
                                <p>Versión: '.$meeting->version.'</p>
                                <p>Área: '.$meeting->area_name.'</p>
                                <p>Contacto FSR: '.$meeting->contact_fsr_name.'</p>
                            </td>
                            <td style="'.$css.'">
                                <p>Cliente: '.$meeting->client.'</p>
                                <p>Asistentes Cliente: '.$meeting->assistants_client.'</p>
                                <p>Asistentes FSR: '.$attendees.'</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <table style="'.$css.'" cellspacing="0" cellpadding="4">
                    <thead>
                        <tr>
                            <th colspan="2" style="'.$css.$textorange.'"><strong>Agenda</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="30%" style="'.$textgray.'"><strong>1. Temas tratados</strong> <br></td>
                            <td width="70%">'.$meeting->topics.' <br></td>
                        </tr>
                        <tr>
                            <td width="30%" style="'.$textgray.'"><strong>2. Compromisos Fábrica de Soluciones</strong> <br></td>
                            <td width="70%">'.$meeting->commitments_fsr.' <br></td>
                        </tr>';

                        $prev_set = 0;
                        if( isset($meeting->commitments_client) && !empty($meeting->commitments_client) && $meeting->commitments_client!="<p></p>" && $meeting->commitments_client!="<p> </p>" ) {
                            $content .= '
                                    <tr>
                                        <td width="30%" style="'.$textgray.'"><strong>3. Compromisos Cliente</strong> <br></td>
                                        <td width="70%">'.$meeting->commitments_client.' <br></td>
                                    </tr>';
                            $prev_set++;
                        }

                        if( isset($meeting->pending_fsr) && !empty($meeting->pending_fsr) && $meeting->pending_fsr!="<p></p>" && $meeting->pending_fsr!="<p> </p>" ) {
                            $content .= '
                                    <tr>
                                        <td width="30%" style="'.$textgray.'"><strong>'.($prev_set==1 ? 4 : 3).'. Pendientes Fábrica de Soluciones</strong> <br></td>
                                        <td width="70%">'.$meeting->pending_fsr.' <br></td>
                                    </tr>';
                            $prev_set++;
                        }

                        if( isset($meeting->pending_client) && !empty($meeting->pending_client) && $meeting->pending_client!="<p></p>" && $meeting->pending_client!="<p> </p>" ) {
                            $content .= '
                                    <tr>
                                        <td width="30%" style="'.$textgray.'"><strong>'.($prev_set==2 ? 5 : ($prev_set==1 ? 4 : 3)).'. Pendientes Cliente</strong> <br></td>
                                        <td width="70%">'.$meeting->pending_client.' <br></td>
                                    </tr>';
                            $prev_set++;
                        }

            $content .= '
                    </tbody>
                </table>';

                if( isset($meeting->extra_comments) && !empty($meeting->extra_comments) && $meeting->extra_comments!="<p></p>" && $meeting->extra_comments!="<p> </p>" ) {
                    $content .= '
                            <br>
                            <table style="'.$css.'" cellspacing="0" cellpadding="4">
                                <thead>
                                    <tr>
                                        <th style="'.$textorange.'"><strong>Comentarios Extra</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.$meeting->extra_comments.'</td>
                                    </tr>
                                </tbody>
                            </table>
                    ';
                    $prev_set++;
                }

            PDF::writeHTML($content, true, 0, true, 0);
            PDF::SetAutoPageBreak(true);

            $id = $meeting->id < 10 ? "0".$meeting->id : $meeting->id;
            $fileName = "FMI-ID".$id."-RAK.pdf";
            $pdfpath = public_path()."/assets/pdf/".$fileName;

            PDF::Output($pdfpath, 'F');

            $mail = SendMail::createMailMeeting($pdfpath, $request->subject, $request->body, $mailTo);
            if($mail) return 1;
            else return 0;
        }

}
