<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
