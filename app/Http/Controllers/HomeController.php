<?php

namespace App\Http\Controllers;

use App\Services\SiteDataService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();
        $products = array_slice(SiteDataService::getProducts(), 0, 3);

        return view('welcome', compact('siteInfo', 'products'));
    }
}
