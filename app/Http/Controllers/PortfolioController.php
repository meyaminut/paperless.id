<?php

namespace App\Http\Controllers;

use App\Services\SiteDataService;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $siteInfo = SiteDataService::getSiteInfo();
        $portfolioItems = SiteDataService::getPortfolio();

        return view('portfolio', compact('siteInfo', 'portfolioItems'));
    }
}
