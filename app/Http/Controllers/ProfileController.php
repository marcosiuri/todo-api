<?php

namespace App\Http\Controllers;

use App\Http\Services\ProfileService;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        // $profiles = $this->service->index();
        // return response()->json($profiles);
        return response()->json(Profile::all());
    }
    
}