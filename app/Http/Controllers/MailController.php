<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SendMail;

class MailController extends Controller
{
    public function index(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $email = $request->input('email');
        $mailData = [
            'name' => $name,
            'phone' => $phone,
            'message' => $message
        ];
        
        Mail::to($email)->send(new DemoMail($mailData));
        // dd('Email đã gửi thành công');
        // webfw@pmk.io.vn
        $sendMail = new SendMail();
        $sendMail->name = $name;
        $sendMail->email = $email;
        $sendMail->content = $message;
        $sendMail->phone = $phone;
        if ($sendMail->save()) {
            return redirect()->back()->withSuccess('You have successfully send mail');
        } else {
            return redirect()->back()->withSuccess('You have failed to send mail');
        }

    }
}
