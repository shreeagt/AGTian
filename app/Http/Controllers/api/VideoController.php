<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Index;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller {
    public function show($empid) {
        // Retrieve 10 records from the Index model that are related to the employee ID
        $videos = Index::where('empid', $empid)->get();

        // Check if the videos collection is empty
        if ($videos->isEmpty()) {
            return response()->json(['message' => 'No video found','status' => false], 404);
        }

        // You can return a response with the videos data if needed
        return response()->json(['data' => $videos, 'message' => 'Videos found','status' => true]);
    }

    public function approve(Request $request, $id, $authorityid) {
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

   

    public function reject(Request $request, $id, $authorityid) {
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