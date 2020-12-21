<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function create()
    {
        $videos = Video::all()->take(8);

        return view('lobby.home', compact('videos'));
    }
}
