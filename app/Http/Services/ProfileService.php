<?php
namespace App\Http\Services;

use App\Models\Profile;

class ProfileService extends BaseService
{
    public function __construct(Profile $profile)
    {
        parent::__construct($profile);
    }

}
