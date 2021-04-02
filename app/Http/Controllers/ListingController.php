<?php

namespace App\Http\Controllers;

use App\Services\ListingService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    use ResponseTrait;

    private $listingService;

    public function __construct(ListingService $listingService)
    {
        $this->listingService = $listingService;
    }

    public function index(Request $request){
        $listing = $this->listingService->getListings();
        print_r($listing);exit;
        return $this->responseOk($listing);
    }
}
