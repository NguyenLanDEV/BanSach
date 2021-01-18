<?php

namespace App\Services;

use App\Repositories\SanPhamRepository;

class HomeService
{
    private $sanPhamRepository;
    function __construct(SanPhamRepository $sanPhamRepository)
    {
        $this->sanPhamRepository = $sanPhamRepository;
    }

    function getNewProducs()
    {
        $with = ['avatar'];
        return  $this->sanPhamRepository->getNewProducs($with);
    }
}
