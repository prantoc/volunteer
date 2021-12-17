<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VolunteerStory;
use App\Models\Partner;
use App\Models\District;
use App\Models\VolunteerMember;
use TCG\Voyager\Models\Post;
use Carbon\Carbon;
use Share;
use File;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{

    public function index()
    {

        $data['volunteerStories'] = VolunteerStory::whereStatus('PUBLISHED')->orderBy('id','desc')->take(6)->get();

        $data['posts'] = Post::whereStatus('PUBLISHED')->orderBy('id','desc')->take(8)->get();

        $date = Carbon::now();

        $data['upcevents'] = Post::whereStatus('PUBLISHED')->orderBy('id','desc')->where('event_date', '>', $date)->take(2)->get();
        $data['gallaries'] = Post::whereStatus('PUBLISHED')->orderBy('id','desc')->take(16)->get();

        $data['partners'] = Partner::orderBy('id','desc')->get();



        $data['totalVolunteers'] = VolunteerMember::count();
        $data['totalEvents'] = Post::count();
        $data['totalVStories'] = VolunteerStory::count();
        $data['totalDistrict'] = District::count();
       
        return view('frontend.home', $data);
    }
    public function news()
    {

        $data['news'] = 1;
        $data['volunteer'] = 0;
        $data['search'] = 0;
        
        $data['posts'] = Post::whereStatus('PUBLISHED')->orderBy('id','desc')->get();

        return view('frontend.news',$data);
    }
   
    public function volunteerStory()
    {
        $data['volunteer'] = 1;
        $data['news'] = 0;
        $data['search'] = 0;
        $data['posts'] = VolunteerStory::whereStatus('PUBLISHED')->orderBy('id','desc')->get();
       
        return view('frontend.news',$data);
    }
    public function singleNews($slug, Request $request)
    {
        $gvid = VolunteerStory::whereSlug($slug)->first();
        
        $geid = Post::whereSlug($slug)->first();
        
        $domain = $request->fullUrl();

        if ($gvid) {
            $sharetitle = $gvid->title;
            $data['singlePost'] = VolunteerStory::findorfail($gvid->id);
            $post = VolunteerStory::findorfail($gvid->id);
            $data['news'] = 0;
            $data['volunteer'] = 1;

            $post['hit'] = $post->hit + 1;
            $post->save(); 

            $data['socialshare'] = Share::page($domain, $sharetitle)
            ->facebook()
            ->twitter()
            ->linkedin()->getRawLinks();


            }
        else{
            $sharetitle = $geid->title;
            $data['singlePost'] = Post::findorfail($geid->id);
            $post = Post::findorfail($geid->id);
            $data['news'] = 1;
            $data['volunteer'] = 0;

            $post['hit'] = $post->hit + 1;
            $post->save(); 

            $data['socialshare'] = Share::page($domain, $sharetitle)
            ->facebook()
            ->twitter()
            ->linkedin()->getRawLinks();
        }



        return view('frontend.single-news',$data);
    }

    public function search(Request $request){

        $data['search'] = 1;
        $data['news'] = 0;
        $data['volunteer'] = 0;
        // Get the search value from the request
        $search = $request->input('search');
        $searchName = $request->input('searchName');

        // Search in the title and body columns from the posts table

        if ($search != '') {
            if ($searchName == 0) {
                $data['posts'] = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('body', 'LIKE', "%{$search}%")->get();
            }else{

                $data['posts'] = VolunteerStory::query()->where('title', 'LIKE', "%{$search}%")->orWhere('body', 'LIKE', "%{$search}%")->get();
            }
        }
        // Return the search view with the resluts compacted
        return view('frontend.news', $data);
    } 



    public function volunteer()
    {

        $data['districts'] = District::orderBy('id','desc')->get();
           
        return view('frontend.volunteer',$data);
    }

    public function volunteerMembers($slug)
    {

        $gvmid = District::whereSlug($slug)->first();

        $data['volunteers'] = VolunteerMember::whereDisId($gvmid->id)->orderBy('id','desc')->get();
       
        return view('frontend.volunteer-members',$data);
    }
    public function volunteerProfile($slug)
    {

        $data['volunteerProfile'] = VolunteerMember::whereSlug($slug)->first();

       
        return view('frontend.volunteer-profile',$data);
    }
    public function register()
    {
       $data['districts'] = District::orderBy('id','desc')->get();
        return view('frontend.register',$data);
    }


    public function volunteerRegister(Request $request)
    {
        $messages = [
         
            'image.max' => 'You mustbe upload maximum (5mb) image file!',
        ];
       $this->Validate($request, [
            'name' => 'required|string|max:35|min:5',
            'email' => 'required|string|email|max:255|unique:volunteer_members',
            'phone' => 'required|numeric|digits:11|regex:/^([0-9\s\-\+\(\)]*)$/', 
            'dis_id' => 'required|numeric',
            'blood' => 'required',         
            'gender' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:500000',
        
        ],$messages);

        $name = preg_replace('!\s+!', ' ', $request->name);

        $name = str_replace(' ', '-', $name);
        $name = strtolower($name);
        $slug = $name;

        $count = 0;
        $tcount = 1;

        while ($count < 1) {
            $hasSlug = VolunteerMember::whereSlug($slug)->first();

            if ($hasSlug) {
             $newtitle =$name.'-'.$tcount; 
             $slug = $newtitle; 
             $tcount++;
            }else{
                $count++;
            }
        }

        if ($request->image) {

        $imgname = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);

        $imgname = preg_replace('!\s+!', ' ', $imgname);
        $imgname = str_replace(' ', '-', $imgname);
        $imgname = strtolower($imgname);

        $date = Carbon::now();
        $getDate = date('FY',strtotime($date));

        $path = "volunteer-members".'/'.$getDate;
        $img = $path .'/'.$imgname . '.' . $request->image->getClientOriginalExtension();

        $count = 0;
        $imgcount = 1;

        while ($count < 1) {
            $hasImg = VolunteerMember::whereImage($img)->first();
            if ($hasImg) {
                $newimgname = $imgname . '_' . $imgcount;
                $img = $newimgname . '.' . $request->image->getClientOriginalExtension();
                $imgcount++;
            } else {
                $count++;
            }
        }

        $request->image->move(storage_path('/app/public/volunteer-members/'.$getDate), $img);


        $regVolunteer['image'] = $img;
    }

        $regVolunteer['slug'] = $slug;
        $regVolunteer['name'] = $request->name;
        $regVolunteer['email'] = $request->email;
        $regVolunteer['phone'] = $request->phone;
        $regVolunteer['dis_id'] = $request->dis_id;
        $regVolunteer['blood'] = $request->blood;
        $regVolunteer['gender'] = $request->gender;

        VolunteerMember::create($regVolunteer);
        session()->flash('message', 'Registration successful!');
        Session::flash('type', 'success');
        return redirect()->back();
    }
}
