<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenkinsController extends Controller
{
    public function index()
    {
        return view('jenkins.index');
    }
}
