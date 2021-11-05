<?php

namespace App\Http\Controllers;

use App\AboutHeader;
use App\Brand;
use App\ContactUs;
use App\Currency;
use App\Group;
use App\OneCategory;
use App\Post;
use App\Product;
use App\QuestionsImage;
use App\Reclame;
use App\Subcategory;
use Illuminate\Http\Request;
use App\OrderingProduct;
use Session;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reclames = Reclame::all();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $popular_posts = Post::inRandomOrder()->take(3)->get();
        $blog_images = QuestionsImage::all();
        $posts = Post::paginate(6);
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();

        $one_categories = OneCategory::all();
        $brands = Brand::all();

        return view('youcan.blog')->with([
            'posts' => $posts,
            'about_kids' => $about_kids,
            'popular_posts' => $popular_posts,
            'blog_images' => $blog_images,
            'contact_us' => $contact_us,
            'blog_post' => $blog_post,
            'one_categories' => $one_categories,
            'brands' => $brands,
            'reclames' => $reclames,
        ]);
    }

    public function show($slug)
    {
        $popular_posts = Post::inRandomOrder()->take(3)->get();
        $blog_images = QuestionsImage::all();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $post = Post::where('slug', $slug)->firstOrFail();
        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $photos = Product::orderBy('created_at', 'desc')->take(9)->get();
        return view('youcan.single_blog')->with([

            'post' => $post,
            'about_kids' => $about_kids,
            'popular_posts' => $popular_posts,
            'blog_images' => $blog_images,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,
            'brands' => $brands,
            'blog_posts' => $blog_posts,
            'photos' => $photos,
        ]);
    }
}
