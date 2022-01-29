<?php

namespace App\Http\Controllers;

use App\AboutAvard;
use App\AboutExperience;
use App\AboutHeader;
use App\AboutService;
use App\Brand;
use App\ContactUs;
use App\Currency;
use App\Faquestion;
use App\Group;
use App\OneCategory;
use App\Post;
use App\Service;
use App\Product;
use App\Folower;
use App\QuestionsImage;
use App\Subcategory;
use Illuminate\Http\Request;
use App\OrderingProduct;
use Session;

class ServiceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about_faquestions = Faquestion::all();
        $about_partners = AboutAvard::all();
        $about_service1 = AboutService::where('id', 1)->firstOrFail();
        $about_service2 = AboutService::where('id', 2)->firstOrFail();
        $about_service3 = AboutService::where('id', 3)->firstOrFail();
        $about_service4 = AboutService::where('id', 4)->firstOrFail();
        $about_header = AboutHeader::where('id', 1)->firstOrFail();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        $services = Service::all();
        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('youcan.service')->with([
            'about_service1' => $about_service1,
            'about_service2' => $about_service2,
            'about_service3' => $about_service3,
            'about_service4' => $about_service4,
            'about_faquestions' => $about_faquestions,
            'about_partners' => $about_partners,
            'about_header' => $about_header,
            'contact_us' => $contact_us,
            'about_kids' => $about_kids,
            'blog_post' => $blog_post,

            'one_categories' => $one_categories,
            'brands' => $brands,
            'services' => $services,
        ]);
    }

    public function show($slug)
    {
        $popular_posts = Post::inRandomOrder()->take(3)->get();
        $blog_images = QuestionsImage::all();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $services = Service::where('slug', $slug)->firstOrFail();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_services = Service::orderBy('created_at', 'desc')->take(3)->get();
        $photos = Product::orderBy('created_at', 'desc')->take(9)->get();
        return view('youcan.single_service')->with([

            'services' => $services,
            'about_kids' => $about_kids,
            'popular_posts' => $popular_posts,
            'blog_images' => $blog_images,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,
            'brands' => $brands,
            'blog_services' => $blog_services,
            'photos' => $photos,
        ]);
    }
}
