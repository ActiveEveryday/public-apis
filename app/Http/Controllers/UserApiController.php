<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forRecycler()
    {
        return DB::table('users')->select('name','mobile_number','profile_picture')->get();
    }
}
