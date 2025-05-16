<?php
namespace App\Http\Services;

use App\Models\Profile;

class ProfileService
{
    public function index()
    {
        return Profile::all();
    }
}