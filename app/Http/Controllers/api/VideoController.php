<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Index;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function show($id)
{
    // Retrieve 10 records from the Index model that are related to the employee ID
    $videos = Index::where('empid', $id)->take(10)->get();

    // Check if the videos collection is empty
    if ($videos->isEmpty()) {
        return response()->json(['error' => 'No videos found'], 404);
    }

    // Create an array to store the video HTML elements
    $videoElements = [];

    foreach ($videos as $video) {
        // Access video properties
        $videoname = $video->name;
        $videocity = $video->city;
        $videopath = $video->video_path;

        // Generate the video HTML code
        $videoElement = '<video controls>
                            <source src="'.asset('videos/gallery/' . $videopath).'" type="video/mp4">
                        </video>';

        // Add the video HTML element to the array
        $videoElements[] = $videoElement;

        // Perform operations on each video
        // ...
    }

    // You can return a response with the videos data if needed
    return response()->json(['videos' => $videos, 'videoElements' => $videoElements]);
}
public function approve(Request $request, $id, $authorityid)
{
    // Retrieve the video based on the provided $id
    $video = DB::table('video')->where('id', $id)->first();

    // Check if the video exists
    if (!$video) {
        return response()->json(['error' => 'Video not found'], 404);
    }

    // Update the video status
    DB::table('video')->where('id', $id)->update(['status' => 'Approved']);

    // Update the authorityid1 in the video table
    DB::table('video')->where('id', $id)->update(['authorityid1' => $authorityid]);

    // Return a success response
    return response()->json(['message' => 'Video status and authorityid1 updated successfully']);
}

   

public function reject(Request $request, $id, $authorityid)
{
    // Retrieve the video based on the provided $id
    $video = DB::table('video')->where('id', $id)->first();

    // Check if the video exists
    if (!$video) {
        return response()->json(['error' => 'Video not found'], 404);
    }

    // Update the video status
    DB::table('video')->where('id', $id)->update(['status' => 'Reject']);

    // Update the authorityid1 in the video table
    DB::table('video')->where('id', $id)->update(['authorityid1' => $authorityid]);

    // Return a success response
    return response()->json(['message' => 'Video status and authorityid1 updated successfully']);
}
}

