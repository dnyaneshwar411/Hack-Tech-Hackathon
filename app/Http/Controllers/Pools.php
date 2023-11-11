<?php

namespace App\Http\Controllers;

use App\Models\created_pools;
use App\Models\request_pools;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pools extends Controller
{
    public function AddPool(Request $req){
        $pool = new created_pools();
        $pool->created_by_user_id = Auth::user()->id;
        $pool->travellers_already_in_pool = $req['travellers_already_in_pool'];
        $pool->total_travellers_required = $req['total_travellers_required'];
        $pool->city_travelling = $req['city_travelling'];
        $pool->areas_travelling = $req['areas_travelling'];
        $pool->starting_journey_from = $req['starting_journey_from'];
        $pool->contribution = $req['contribution'];
        $pool->vehicle = $req['vehicle'];
        $pool->starting_journey_at = $req['starting_journey_at'];
        $pool->save();
        return redirect('pools/join');
    }
    public function ListPool(){
        $pools = created_pools::all();
        return view('Application/join')->with(compact('pools'));
    }
    public function JoinPool(Request $req){
        $pool = request_pools::where('pool_id','=',$req['pool_id'])->where('user_request_id', '=', Auth::user()->id)->get();
        if($pool->count() >= 1 ){
            return redirect()->back();
        }
        $request_pool = new request_pools();
        $request_pool->pool_id = $req['pool_id'];
        $request_pool->user_posted_id = $req['user_posted_id'];
        $request_pool->user_request_id  = Auth::user()->id;
        $request_pool->save();
        return redirect()->back();
    }
    public function ShowRequests(){
        $requested_pools = request_pools::where('user_posted_id', '=', Auth::user()->id)->where('status', '=', 'pending')->get();
        return view('Application/requests')->with(compact('requested_pools'));
    }
    public function AcceptRequests(Request $req){
        $request_pools = request_pools::find($req['pool_id']);
        $request_pools->status = 'approved';
        $request_pools->update();
        return redirect()->back();
    }
    public function ShowAcceptedRequests(){
        $accepted_pools = request_pools::where('user_request_id', '=', Auth::user()->id)->where('status', '=', 'approved')->get();
        return view('Application/accepted-requests')->with(compact('accepted_pools'));
    }
}
