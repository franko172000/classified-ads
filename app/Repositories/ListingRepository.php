<?php
namespace App\Repositories;

use App\Models\Listings;

class ListingRepository extends BaseRepository{

    public function __construct(Listings $model)
    {
        $this->model = $model;
    }
}