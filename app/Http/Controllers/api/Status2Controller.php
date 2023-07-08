<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Status2Controller extends Controller
{
    public function approvevideo(Request $request, $id, $authorityid)
{
    // Retrieve the video based on the provided $id
    $video = DB::table('video')->where('id', $id)->first();

    // Check if the video exists
    if (!$video) {
        return response()->json(['error' => 'Video not found'], 404);
    }

    // Update the video status
    DB::table('video')->where('id', $id)->update(['status2' => 'Approved']);

    // Update the authorityid1 in the video table
    DB::table('video')->where('id', $id)->update(['authorityid2' => $authorityid]);

    // Return a success response
    return response()->json(['message' => 'Video status and authorityid2 updated successfully']);
}

   

public function rejectvideo(Request $request, $id, $authorityid)
{
    // Retrieve the video based on the provided $id
    $video = DB::table('video')->where('id', $id)->first();

    // Check if the video exists
    if (!$video) {
        return response()->json(['error' => 'Video not found'], 404);
    }

    // Update the video status
    DB::table('video')->where('id', $id)->update(['status2' => 'Reject']);

    // Update the authorityid1 in the video table
    DB::table('video')->where('id', $id)->update(['authorityid2' => $authorityid]);

    // Return a success response
    return response()->json(['message' => 'Video status and authorityid2 updated successfully']);
}
}
