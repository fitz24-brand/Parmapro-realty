<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Property;

use App\Models\Agent;

use App\Models\Blog;

use App\Models\Testmony;

use App\Models\Message;

use Notification;

use App\Notifications\SendmailNotification;

class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
              return view('admin.add_property');  
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }

        
    }

     public function upload(Request $request)
    {

        $property=new property;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('propertyimage',$imagename);

        $property->image=$imagename;

        $property->location=$request->location;

        $property->price=$request->number;

        $property->status=$request->status;

        $property->description=$request->description;

        $property->size=$request->size;

        $property->save();

        return redirect()->back()->with('message','Property Added Successfully');
    }

    public function loadview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
             return view('admin.add_agent');   
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
        
    }

    public function load(Request $request)
    {

         $agent=new agent;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('agentimage',$imagename);

        $agent->image=$imagename;

        $agent->name=$request->name;

        $agent->phone=$request->number;

        $agent->email=$request->email;


        $agent->save();

        return redirect()->back()->with('message',('Agent Added Successfully'));
    }

    public function blogview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
              return view('admin.add_blog');  
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
        
    }

    public function post(Request $request)
    {

        $blog=new blog;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('blogimage',$imagename);

        $blog->image=$imagename;

        $blog->caption=$request->caption;

        $blog->name=$request->name;

        $blog->save();

        return redirect()->back()->with('message','Blog Added Successfully');  
    }

    public function testmonyview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
               return view('admin.add_testmony'); 
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
        
    }

    public function add(Request $request)
    {

        $testmony=new testmony;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('clientimage',$imagename);

        $testmony->image=$imagename;

        $testmony->name=$request->name;

        $testmony->caption=$request->caption;

        $testmony->save();

        return redirect()->back()->with('message','Added Successfully');
    }

    public function all_messages()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $message = message::all();


                return view('admin.all_message',compact('message')); 
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function emailview($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=message::find($id);
        
                return view('admin.send_mail',compact('data')); 
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function sendemail(Request $request,$id)
    {
        $data = message::find($id);

        $details=[
            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendmailNotification($details));

        return redirect()->back()->with('message','Mail Sent Successfully');
    }

     public function deletemessage($id)
    {
        $message=message::find($id);

        $message->delete();

        return redirect()->back();
    }

    public function showproperty()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
               $property = property::all();

                return view('admin.showproperty',compact('property'));  
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function deleteproperty($id)
    {
        $property=property::find($id);

        $property->delete();

        return redirect()->back();
    }

    public function showagent()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
               $agent = agent::all();

                return view('admin.showagent',compact('agent'));  
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

     public function deleteagent($id)
    {
        $agent=agent::find($id);

        $agent->delete();

        return redirect()->back();
    }

    public function showblog()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $blog = blog::all();

                return view('admin.showblog',compact('blog')); 
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

     public function deleteblog($id)
    {
        $blog=blog::find($id);

        $blog->delete();

        return redirect()->back();
    }

    public function showtestmony()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
               $testmony = testmony::all();


               return view('admin.showtestmonial',compact('testmony'));  
            }

            else
            {
                return redirect()->back();
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

     public function deletetestmony($id)
    {
        $testmony=testmony::find($id);

        $testmony->delete();

        return redirect()->back();
    }
}
