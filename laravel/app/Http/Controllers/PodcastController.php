<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PodcastController extends Controller
{
    /**
     * 保存.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // 创建

        dispatch(new ProcessPodcast($podcast));
    }
}