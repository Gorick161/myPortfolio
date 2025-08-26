<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function projects()
    {
        return view('portfolio.projects');
    }

    public function resume()
    {
        return view('portfolio.resume');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }
}
