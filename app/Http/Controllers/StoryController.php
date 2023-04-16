<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $story = Story::all();
        return view('dashBord.story.home' , compact('story'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashBord.story.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title'=>'required',
            'pictuer' =>'required|Image',
            'cost' =>'required',
            'price' =>'required',
            'old_price' =>'required',
            'description' => 'required',
            'create_story'=>'required',
           ]); 
    
    
           $image = $request->pictuer;
           $new_Image = time().$image->getClientOriginalName();
           $image->move('uploade/story/' , $new_Image); 
    
    
           $story =  new  Story();
           $story->title  = $request->title;
           $story->pictuer = 'uploade/story/'.$new_Image;
           $story->cost  = $request->cost;
           $story->price = $request->price;
           $story->old_price = $request->old_price;
           $story->description = $request->description;
           $story->create_story = $request->create_story;
    
        //    dd($request->all());

        $story->save();
        return redirect()->back()->with("Don Create  Story ...!");


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $story = Stroy::find($id);
        return view('dsahBord.story.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $story = Story::find($id);
        return view('dashBord.story.edit' , compact('story'));
        
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $story = Story::find($id);
        $this->validate($request , [
            'title'=>'required',
            // 'pictuer' =>'required',
            'cost' =>'required',
            'price' =>'required',
            'old_price' =>'required',
            'description' => 'required',
            'create_story' => 'required',
           ]); 
    
    
           if($request->hasFile('pictuer')){
           $image = $request->pictuer;
           $new_Image = time().$image->getClientOriginalName();
           $image->move('uploade/story/' , $new_Image);
           $story->image = 'uploade/story/'.$new_Image;
        } 
    
    
       
           $story->title  = $request->title;
           $story->cost  = $request->cost;
           $story->price = $request->price;
           $story->old_price = $request->old_price;
           $story->description = $request->description;
           $story->create_story = $request->create_story;
    
           $story->save();
           return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();
        return redirect()->back();
    }


    public function trashed(){
        $story = Story::onlyTrashed()->get();
        return view('dashBord.story.trashed' , compact('story'));

    }

    public function resTore($id){
        $story = Story::withTrashed()->where('id' , $id)->first();
        $story->restore();
        return redirect()->back();

    }

    public function  deleteEnd($id){
        $story = Story::withTrashed()->where('id' , $id)->first();
        $story->forceDelete();
        return redirect()->back();
    }
}
