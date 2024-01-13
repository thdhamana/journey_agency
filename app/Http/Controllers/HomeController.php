<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("backend.home");
    }

    public function connecter() {
        return view("backend.pages.connecter");
    }

    // error404
    public function error404()
    {
        return view("backend.pages.error404");
    }

    // blank page
    public function blankpage()
    {
        return view("backend.pages.blankpage");
    }

    // login page
    public function loginpage()
    {
        return view("backend.pages.auth.loginpage");
    }

    // forgotpassword page
    public function forgotpasswordpage()
    {
        return view("backend.pages.auth.forgotpasswordpage");
    }

    // register page
    public function registerpage()
    {
        return view("backend.pages.auth.registerpage");
    }

    // account page
    public function account()
    {
        return view("backend.pages.infos.account");
    }

    // lockscreen page
    public function lockscreen()
    {
        return view("backend.pages.infos.lockscreen");
    }

    // support page
    public function support()
    {
        return view("backend.pages.infos.support");
    }
}
