<?php
    // MyVendor\Contactform\src\Http\Controllers\ContactFormController.php
    namespace TechnoHive\Sms\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use TechnoHive\Sms\Models\TechnoHiveSms;

    class TechnoHiveSmsController extends Controller {

        public function index()
        {
           return view('Sms::technohivesms');
        }

        public function sendSms(Request $request)
        {
            // Send sms here
            $sms= new TechnoHiveSms;
            $sms->phone_number=$request->phone_number;
            $sms->receiver_name=$request->name;
            $sms->message=$request->message;
            $sms->senderid='TechnoHive';/// config.senderid

            $sms->save();


        }


    }