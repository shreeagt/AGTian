<?php

namespace App\Http\Controllers;

use App\Models\Index;
use DB;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index()
    {
        return view('agtiansindex');
    }
    public function participate()
    {
        return view ('participate');
    }
    public function insertvideo(request $request)
    {
        $ivideo = new Index;
        $ivideo->name = $request->input('name');
        $ivideo->city = $request->input('city');
        $ivideo->empid = $request->input('empid');

         // Validate the file
    $request->validate([
        'video_path' => 'required|mimetypes:video/mp4,video/avi,video/quicktime|max:5242880', // Maximum file size is 5MB
    ]);

    //dd($request);// Create the videos/gallery folder if it doesn't exist
    $folderPath = public_path('videos/gallery');
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0777, true);
    }

    $extension = $request->file('video_path')->getClientOriginalExtension();

    $ivideo->video_path = uniqid().'.'.$extension;//$request->file('video_path')->getClientOriginalName(); // Store the original filename in the 'video_path' field
    $request->file('video_path')->move($folderPath, $ivideo->video_path); // Save the video to the public/videos/gallery folder

    $ivideo->save();

    return redirect()->route('thankyou')->with('success', 'Video uploaded successfully');
}
    public function updatevideo(request $id)
    {
        // echo $id->id;// dd($id);//DB::connection()->enableQueryLog();
        DB::table('video')->where('id', $id->id)->update(array('status' => 'Approved'));
        return redirect()->route('videoList');
        //$queries = \DB::getQueryLog();// dd($queries);
    }
    public function rject(request $id){
       // echo $id->id;// dd($id);//DB::connection()->enableQueryLog();
        DB::table('video')->where('id', $id->id)->update(array('status' => 'rject'));
        return redirect()->route('videoList');
        //$queries = \DB::getQueryLog();// dd($queries);
    }
    public function winner()
    {
        return view('winner');
    }
    public function thankyou()
    {
        return view('thank');
    }
}
