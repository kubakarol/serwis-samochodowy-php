<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zgloszenia;


class AdminController extends Controller
{
    public function index()
    {
        
        $zgloszenie = Zgloszenia::all();
        return view('admin', compact('zgloszenie'));
    }

}
