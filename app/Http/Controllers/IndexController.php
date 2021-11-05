<?php

namespace App\Http\Controllers;

use App\AboutAvard;
use App\AboutComment;
use App\AboutHeader;
use App\AboutService;
use App\Brand;
use App\ContactUs;
use App\Currency;
use App\Group;
use App\HomeInfo;
use App\HomeSlider;
use App\OneCategory;
use App\Post;
use App\Reclame;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\Faquestion;
use App\Ordering;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\OrderingProduct;
use App\QuestionsImage;
use Session;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //        $cookie_name = "customer";
        //        $cookie_value = Str::random(12);
        //        setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day
        $questions = QuestionsImage::all();
        $blog_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $reclames = Reclame::all();
        $home_slider = HomeSlider::where('id', 7)->firstOrFail();
        $about_services = AboutService::inRandomOrder()->take(3)->get();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $about_partners = AboutAvard::all();
        $about_comments = AboutComment::all();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        $home_infos = HomeInfo::all();
        $products = Product::inRandomOrder()->take(10)->get();
        $one_categories = OneCategory::where('id', '>', 0)->get();
        $brands = Brand::all();
        $about_header = AboutHeader::where('id', 1)->firstOrFail();
        $faquestion = Faquestion::where('id', 6)->firstOrFail();
        $teachers = Brand::orderBy('created_at', 'desc')->take(4)->get();

        return view('youcan.index')->with([

            'home_infos' => $home_infos,
            'about_kids' => $about_kids,
            'about_partners' => $about_partners,
            'contact_us' => $contact_us,
            'home_slider' => $home_slider,
            'about_comments' => $about_comments,
            'about_header' => $about_header,
            'one_categories' => $one_categories,
            'brands' => $brands,
            'about_services' => $about_services,
            'reclames' => $reclames,
            'blog_posts' => $blog_posts,
            'questions' => $questions,
            'products' => $products,
            'faquestion' => $faquestion,
            'teachers' => $teachers,
        ]);
    }
}
