<?php

namespace App\Http\Controllers;

use App\Services\SiteDataService;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();
        $products = SiteDataService::getProducts();

        return view('products', compact('siteInfo', 'products'));
    }
}
