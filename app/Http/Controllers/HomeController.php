<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Property;

use App\Models\Agent;

use App\Models\Blog;

use App\Models\Message;

use App\Models\Testmony;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('user.home');
            }

            else
            {
                return view('admin.home');
            }


        }

        else
        {
            return redirect('login');
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            
           return view('home');    
        }

        else
        {
           $property = property::all();

            $blog = blog::all();

            $testmony = testmony::all();


            return view('user.home',compact('property'),compact('blog'),compact('testmony'));  
        }

       
    }
   
    public function property()
    {
        $property = property::all();

        return view('user.property',compact('property'));
    }

    public function agent()
    {
        $agent = agent::all();


        return view('user.agent',compact('agent'));
    }

    public function about()
    {
        $testmony = testmony::all();


        return view('user.about',compact('testmony'));
    }

    public function blog()
    {
        $blog = blog::all();


        return view('user.blog',compact('blog'));
    }

    public function contact()
    {
        return view('user.contact');
    }

     public function message(Request $request)
    {

        $data = new message;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->subject=$request->subject;

        $data->message=$request->message;

        $data->status='Delivered';

        $data->save();

        return redirect()->back()->with('message','Thanks for contacting us, we will get back to you soon');



    }
}
