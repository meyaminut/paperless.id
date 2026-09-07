<?php

namespace App\Http\Controllers;

use App\Services\SiteDataService;
use Illuminate\View\View;

class PageController extends Controller
{
    public function contact(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();

        return view('contact', compact('siteInfo'));
    }

    public function privacy(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();

        return view('privacy', compact('siteInfo'));
    }

    public function terms(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();

        return view('terms', compact('siteInfo'));
    }
}
