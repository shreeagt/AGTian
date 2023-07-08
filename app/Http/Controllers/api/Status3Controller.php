<?php

namespace App\Http\Controllers\api;

use App\Models\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Status3Controller extends Controller
{
    public function statusapprove(Request $request, $id, $authorityid)
    {
        // Retrieve the video based on the provided $id
        $video = DB::table('video')->where('id', $id)->first();
    
        // Check if the video exists
        if (!$video) {
            return response()->json(['error' => 'Video not found'], 404);
        }
    
        // Update the video status
        DB::table('video')->where('id', $id)->update(['status3' => 'Approved']);
    
        // Update the authorityid1 in the video table
        DB::table('video')->where('id', $id)->update(['authorityid3' => $authorityid]);
    
        // Return a success response
        return response()->json(['message' => 'Video status and authorityid3 updated successfully']);
    }
    
       
    
    public function statusreject(Request $request, $id, $authorityid)
    {
        // Retrieve the video based on the provided $id
        $video = DB::table('video')->where('id', $id)->first();
    
        // Check if the video exists
        if (!$video) {
            return response()->json(['error' => 'Video not found'], 404);
        }
    
        // Update the video status
        DB::table('video')->where('id', $id)->update(['status3' => 'Reject']);
    
        // Update the authorityid1 in the video table
        DB::table('video')->where('id', $id)->update(['authorityid3' => $authorityid]);
    
        // Return a success response
        return response()->json(['message' => 'Video status and authorityid3 updated successfully']);
    }
}
