<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Service;


class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
       return redirect()->to('/categories');
    }

    public function getCategories()
    {
        $categories = Category::where('show','=',true, 'and', 'action', '=', true)->get();
        return view('home')->with('action', 'categories')->with('data', $categories);
    }

    public function getServices()
    {
        $services = Service::all();
        return view('home')->with('action', 'services')->with('data', $services);
    }
}
