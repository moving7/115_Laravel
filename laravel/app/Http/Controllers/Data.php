<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
//use App\User;

class Data
{
    public function index()
    {
        $result = ['code'=>200,'msg'=>array('Laravel',1,56465)];
        $data = $_GET['laravel'];
        echo $data.'('.json_encode($result).')';
    }

    public function test($user = '') {
        echo $user;
//        $user = \App\User::findOrFail('张三');
//        $this->dispatch(new SendReminderEmail($user));
    }
}