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
        $videos = Video::all();

        /*$videos = DB::table('users')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->select('users.name', 'users.lastname', 'videos.*');*/

        return view('lobby.home', compact('videos'));
    }
}
