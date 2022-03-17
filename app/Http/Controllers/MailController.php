<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {

        $mailData = [
            'title' => 'Mail from NeoSoft',
            'body' => 'This is for testing email using smtp.'
        ];
         
       \Mail::to('pooja.sharma@neosoftmail.com')->send(new DemoMail($mailData));
           
         //dd("Email is sent successfully.");
    }
}

