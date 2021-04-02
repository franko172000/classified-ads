<?php
namespace App\Services;

use App\Repositories\ListingRepository;

class ListingService {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $repository;
    
    public function __construct(ListingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getListings(int $limit=10){
        return $this->repository->findAll($limit);
    }
}