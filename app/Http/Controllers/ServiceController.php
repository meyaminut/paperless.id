<?php

namespace App\Http\Controllers;

use App\Services\SiteDataService;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();
        $services = SiteDataService::getServices();
        $priceListCategories = SiteDataService::getPriceListCategories();

        return view('services', compact('siteInfo', 'services', 'priceListCategories'));
    }
}
