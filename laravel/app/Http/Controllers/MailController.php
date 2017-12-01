<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Jobs\SendReminderEmail;

class MailController extends Controller
{
    public function sendReminderEmail(Request $request,$id){
        $user = \App\User::findOrFail($id);
        $this->dispatch(new SendReminderEmail($user));
    }
}