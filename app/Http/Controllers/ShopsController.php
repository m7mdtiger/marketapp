<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index() {
        return view('shops.index');
    }

    public function add() {
        return view('shops.add');
    }

    public function view() {
        return view('shops.view');
    }

    public function edit() {
        return view('shops.edit');
    }
}
