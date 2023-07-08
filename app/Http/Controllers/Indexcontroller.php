<?php

namespace App\Http\Controllers;

use App\Models\Index;
use DB;
use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Storage;

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
    public function insertvideo(Request $request)
{
    $ivideo = new Index;
    $ivideo->name = $request->input('name');
    $ivideo->city = $request->input('city');
    $ivideo->empid = $request->input('empid');

    // Validate the file
    $request->validate([
        'video_path' => 'required|mimetypes:video/mp4,video/avi,video/quicktime|max:5242880', // Maximum file size is 5MB
    ]);

    // Specify the S3 bucket and folder where you want to store the video
    $bucket = env('AWS_BUCKET');
    $folder = 'ajanta/agtians/videos/gallery';

    // Generate a unique filename for the video
    $filename = uniqid().'.'.$request->file('video_path')->getClientOriginalExtension();

    // Store the video in Amazon S3
    $filePath = $folder.'/'.$filename;
    Storage::disk('s3')->put($filePath, file_get_contents($request->file('video_path')));

    // Set the video path to the S3 URL
    $videoPath = env('AWS_URL').'/'.'/'.$filePath;
    $ivideo->video_path = $videoPath;

    // Save the video to the database
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
