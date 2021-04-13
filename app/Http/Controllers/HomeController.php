<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    function index(){
      $agent = new Agent();
      return view('home', ['agent' => $agent]);
    }

    function nft(){
      $agent = new Agent();
      return view('nft', ['agent' => $agent]);
    }
}
