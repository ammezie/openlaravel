<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminProjectsController extends Controller
{
    public function index()
    {
    	return view('layouts.dashboard');
    }
}