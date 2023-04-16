<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
class ViewStoryController extends Controller
{
    public function home()
    {
        $newstory =  Story::first();
        $story =  Story::all();
        return view('story.home' , compact('story' , 'newstory') );

    }


    
}
