<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function contact()
  {
    return view("contact");
  }

  public function index()
  {
    return view('welcome');
  }
}
