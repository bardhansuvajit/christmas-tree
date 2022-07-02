<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\BannerInterface;

class HomeController extends Controller
{
    private BannerInterface $bannerRepository;

    public function __construct(BannerInterface $bannerRepository) 
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function index(Request $request)
    {
        $banners = $this->bannerRepository->listFrontend();
        return view('front.index', compact('banners'));
    }
}
