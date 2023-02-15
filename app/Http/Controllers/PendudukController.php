<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PendudukController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
    }
}
