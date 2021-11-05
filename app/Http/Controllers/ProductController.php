<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.04.2020
 * Time: 19:50
 */

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
use App\PriceTable;
use App\QuestionsImage;
use App\Subcategory;
use App\Translation;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Ordering;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\OrderingProduct;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function categories($slug)
    {
        $category = OneCategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('category', $category->id)->paginate(16);

        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();
        $one_categories = OneCategory::all();
        $home_infos = HomeInfo::all();
        $home_sliders = HomeSlider::all();
        $about_youcan = QuestionsImage::where('id', 1)->firstOrFail();
        $about_partners = AboutAvard::all();
        $about_services = AboutService::inRandomOrder()->take(3)->get();
        $about_comments = AboutComment::all();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        return view('youcan.product')->with([
            'home_infos' => $home_infos,
            'home_sliders' => $home_sliders,
            'about_youcan' => $about_youcan,
            'about_services' => $about_services,
            'about_partners' => $about_partners,
            'about_comments' => $about_comments,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,

            'category' => $category,
            'products' => $products,
            'blog_post' => $blog_post,
        ]);
    }

    public function productcat($slug)
    {
        $category = OneCategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('category', $category->id)->paginate(16);

        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();
        $one_categories = OneCategory::all();
        $home_infos = HomeInfo::all();
        $home_sliders = HomeSlider::all();
        $about_youcan = QuestionsImage::where('id', 1)->firstOrFail();
        $about_partners = AboutAvard::all();
        $about_services = AboutService::inRandomOrder()->take(3)->get();
        $about_comments = AboutComment::all();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();

        return view('youcan.product')->with([
            'home_infos' => $home_infos,
            'home_sliders' => $home_sliders,
            'about_youcan' => $about_youcan,
            'about_services' => $about_services,
            'about_partners' => $about_partners,
            'about_comments' => $about_comments,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,

            'category' => $category,
            'products' => $products,
            'blog_post' => $blog_post,
        ]);
    }

    public function pricelist()
    {
        $prices = PriceTable::all();

        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();
        $one_categories = OneCategory::all();
        $home_infos = HomeInfo::all();
        $home_sliders = HomeSlider::all();
        $about_youcan = QuestionsImage::where('id', 1)->firstOrFail();
        $about_partners = AboutAvard::all();
        $about_services = AboutService::inRandomOrder()->take(3)->get();
        $about_comments = AboutComment::all();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();

        return view('youcan.pricelist')->with([
            'home_infos' => $home_infos,
            'home_sliders' => $home_sliders,
            'about_youcan' => $about_youcan,
            'about_services' => $about_services,
            'about_partners' => $about_partners,
            'about_comments' => $about_comments,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,
            'blog_post' => $blog_post,
            'prices' => $prices,

        ]);
    }
}
