<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Naux\Mail\SendCloudTemplate;
use Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function send(ContactRequest $request)
    {
        $data = array_except($request->all(), ['_token','template-contactform-submit','captcha']);
        $template = new SendCloudTemplate('yijuzhe_consultation', $data);

        Mail::raw($template, function ($message) {
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->to(config('mail.from.address'));
        });

        return back()->withSuccess('邮件已经发送成功，会尽快给你回复！');
    }
}
