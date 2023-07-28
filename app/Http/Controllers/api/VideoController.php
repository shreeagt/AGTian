<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Index;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller {
    public function show($empid) {
        // Check if the user is a Regional Sales Manager (RSM)
        $user = User::where('email', $empid)->first();
    
        // Check if the user exists and is an RSM
        if (in_array($user->designer, ['REGIONAL SALES MANAGER', 'SR. REGIONAL SALES MANAGER'])) {
            DB::connection()->enableQueryLog();
            $queries = DB::getQueryLog();

            $videos = DB::table('video')
            ->select('video.*')
            ->join('users', function ($join) use ($user) {
                $join->on('users.email', '=', 'video.empid');
            })
            ->where('users.rsmid', '=', $user->email)
            ->get();
            return response()->json(['data' => $videos, 'message' => 'Videos found', 'status' => true]);
        }
        else{
            return response()->json(['message' => 'User not found or not an RSM', 'status' => false], 404);
        }
    
        // Retrieve videos whose empid matches the RSM's email and rsmid is the given $empid
       
    
        // Check if the videos collection is empty
        // if ($videos->isEmpty()) {
        //     return response()->json(['message' => 'No video found', 'status' => false], 404);
        // }
    
        // Return a response with the videos data
        
    }
    
// Retrieve videos based on the user's role and city
    //if ($user->designer === 'REGIONAL SALES MANAGER') {
      //  $videos = Index::where('city', $user->headquarter)->get();
    //} else {
     //   $videos = Index::where('empid', $empid)->get();
    //}

    public function approve(Request $request, $id, $authorityid) {
        // Retrieve the video based on the provided $id
        $video = DB::table('video')->where('id', $id)->first();
        // Check if the video exists
        if (!$video) {
            return response()->json(['message' => 'Video not found','status'=> false], 404);
        }
        // Update the video status
        DB::table('video')->where('id', $id)->update(['status' => 'Approved']);
        // Update the authorityid1 in the video table
        DB::table('video')->where('id', $id)->update(['authorityid1' => $authorityid]);
        // Return a success response
        return response()->json(['message' => 'Video status and authorityid1 updated successfully','status' => true,'data'=> $video]);
    }

    public function reject(Request $request, $id, $authorityid) {
        // Retrieve the video based on the provided $id
        $video = DB::table('video')->where('id', $id)->first();
        // Check if the video exists
        if (!$video) {
            return response()->json(['message' => 'Video not found','status' => false], 404);
        }
        // Update the video status
        DB::table('video')->where('id', $id)->update(['status' => 'Reject']);
        // Update the authorityid1 in the video table
        DB::table('video')->where('id', $id)->update(['authorityid1' => $authorityid]);
        // Return a success response
        return response()->json(['message' => 'Video status rejected and authorityid1 updated successfully','status' => false,'data'=> $video]);
    }
}


