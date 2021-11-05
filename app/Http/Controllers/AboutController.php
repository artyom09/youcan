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
use App\Product;
use App\Folower;
use App\QuestionsImage;
use App\Subcategory;
use Illuminate\Http\Request;
use App\OrderingProduct;
use Session;


class AboutController extends Controller
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

        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('youcan.about')->with([
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

        ]);
    }

    public function follow(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required|email',
        ]);


        $data = $request->all();
        $follow = new Folower();
        $follow->email = $request->email;
        //        if($message->save()){
        //            Mail::to('artyom1996a@gmail.com')->send(new Contact($data));
        //            $requestMessage = 'Request have been sent';
        //            return redirect()->back();
        //        }
        if ($follow->save()) {
            return redirect()->back();
        }
    }

    public function gallery()
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
        $images = Product::where('id', '>', '0')->paginate(12);

        $one_categories = OneCategory::all();
        $brands = Brand::all();
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('youcan.gallery')->with([
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
            'images' => $images,

            'one_categories' => $one_categories,
            'brands' => $brands,

        ]);
    }

    public function teachers()
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
        $teachers = Brand::where('id', '>', '0')->paginate(12);

        $one_categories = OneCategory::all();
        $blog_post = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('youcan.staff')->with([
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
            'teachers' => $teachers,

            'one_categories' => $one_categories,

        ]);
    }
}
