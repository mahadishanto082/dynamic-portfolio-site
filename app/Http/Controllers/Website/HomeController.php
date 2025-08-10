<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\WelcomeText;
use App\Models\Slider;
use App\Models\User;
use App\Services\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Brand;

use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    private HomeService $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }
    public function index()
    {
       
    
        return view('website.home');
    }
    
  
}
