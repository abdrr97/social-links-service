<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Link $link)
    {
        $user_ip_found = $link->visits()->where('user_ip', $request->ip())->first();

        if ($user_ip_found)
        {
            return $link->visits()->create([
                'user_agent' => $request->userAgent(),
                'user_ip' => $request->ip()
            ]);
        }
        return response()->json(['User IP already Regitred'], 500);
    }
}
