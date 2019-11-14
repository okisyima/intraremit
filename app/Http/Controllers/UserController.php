<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function jsonMessage()
    {
        return view('user.host.jsonMessage');
    }

    public function dataBalance()
    {
        return view('user.host.dataBalance');
    }

    public function dataInquiry()
    {
        return view('user.host.dataInquiry');
    }

    public function dataTransactionTwo()
    {
        return view('user.host.dataTransactionTwo');
    }

    public function dataCheck()
    {
        return view('user.host.dataCheck');
    }

    public function balance()
    {
        return view('user.account.balance');
    }

    public function history()
    {
        return view('user.account.history');
    }

    public function invoice()
    {
        return view('user.account.invoice');
    }

    public function login()
    {
        return view('login.login');
    }

    public function login2()
    {
        return view('login.login2');
    }

    public function forbidden()
    {
        return view('login.forbidden');
    }

}
