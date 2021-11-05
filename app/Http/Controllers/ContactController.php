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
use App\Subcategory;
use Illuminate\Http\Request;
use App\OrderingProduct;
use Session;
use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;


class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $contact_us = ContactUs::where('id', 1)->firstOrFail();
        $about_kids = QuestionsImage::where('id', 1)->firstOrFail();
        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('youcan.contact')->with([
            'about_kids' => $about_kids,
            'contact_us' => $contact_us,
            'one_categories' => $one_categories,
            'blog_post' => $blog_post,
            'brands' => $brands,

        ]);
    }

    public function message(Request $request)
    {


        $data = $request->all();
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;

        $message->subject = $request->subject;
        $message->message = $request->message;
        //        if($message->save()){
        //            Mail::to('artyom1996a@gmail.com')->send(new Contact($data));
        //            $requestMessage = 'Request have been sent';
        //            return redirect()->back();
        //        }
        if ($message->save()) {
            return redirect()->back();
        }
    }
}
