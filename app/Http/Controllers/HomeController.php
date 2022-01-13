<?php

namespace App\Http\Controllers;


use App\Http\Middleware\Authenticate;
use App\Models\Category;
use App\Models\Faq;
use App\Models\House;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public static function countreview($id)
    {
        return Review::where('house_id',$id)->count();
    }


    public function index()
    {
        $setting = Setting::first();
        $slider = House::select('id','title','status','image','price','address','description','slug')->limit(4)->get();
        $daily = House::select('id','title','status','image','price','address','description','slug')->limit(4)->inRandomOrder()->get();
        $last = House::select('id','title','status','image','price','address','description','slug')->limit(4)->orderByDesc('id')->get();
        $picked = House::select('id','title','status','image','price','address','description','slug')->limit(4)->inRandomOrder()->get();

        #print_r($last);
        #exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'page'=>'home'

        ];

        return view('home.index',$data );
    }

    public  function house($id,$slug)
    {
        $data = House::find($id);
        $datalist = Image::where('house_id', $id)->get();
        $reviews = Review::where('house_id',$id)->get();
        return view('home.house_detail',['data'=>$data, 'datalist'=>$datalist, 'reviews'=>$reviews]);
    }

    public  function gethouse(Request $request )
    {
        $search = $request->input('search');
        $count =  House::where('title', 'like', '%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data = House::where('title', 'like','%'.$search.'%')->first();
            return redirect()->route('house', ['id' => $data->id, 'slug' => $data->slug]);
        }
        else
        {
            return redirect()->route('houselist',['search'=>$search]);
        }
    }

    public  function houselist($search)
    {
        $datalist = House::where('title','like','%'.$search.'%')->get();
        return view( 'home.search_houses',['search'=>$search,'datalist'=>$datalist]);
    }

    public  function addtofav($id)
    {
        echo "Favorilerinize Eklendi.<br>";
        $data = House::find($id);
        print_r($data);
        exit();
    }

    public  function categoryhouses($id,$slug)
    {

        $datalist = House::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_houses', ['data'=>$data,'datalist'=>$datalist]);
    }

    public  function aboutus()
    {
        $setting= Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }
    public  function references()
    {
        $setting= Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }

    public  function contact()
    {
        $setting= Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }
    public  function sendmessage(Request $request)
    {
        $data= new Message();
        $data->name = $request ->input('name');
        $data->email = $request ->input('email');
        $data->phone = $request ->input('phone');
        $data->subject = $request ->input('subject');
        $data->message = $request ->input('message');
        $data->note = $request ->input('note');
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız kaydedildi, Teşekkürler.');
    }
    public  function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist'=>$datalist]);
    }
    public  function blankpage()
    {
        return view('home.blank');
    }

    public  function login()
    {
        return view('admin.login');
    }

    public  function logincheck(Request $request)
    {
        if ($request->isMethod('post')){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records.']);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout (Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
