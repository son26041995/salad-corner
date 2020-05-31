<?php
namespace App\Services;

use DB;

class ProductServices
{
    public function getProduct()
    {
        list('min' => $startYear, 'max' => $endYear) = $this->industryStatisticRepository->getMinAndMaxYear();
        return [
            'start_year' => $startYear,
            'end_year' => $endYear,
        ];
    }
}