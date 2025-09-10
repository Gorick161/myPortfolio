<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index() { return view('portfolio.index'); }
    public function projects() { return view('portfolio.projects'); }
    public function experience() { return view('portfolio.experience'); }
    public function contact() { return view('portfolio.contact'); }
    public function resume() { return view('portfolio.resume'); }
}
