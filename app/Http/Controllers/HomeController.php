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
       
        return view('frontend.register');
    }
}
