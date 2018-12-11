<?php namespace App\Services;

use App\Filter as PortfolioFilter;

class FilterService extends Service {
    public function __construct(PortfolioFilter $portfolioFilter) {
        $this->model = $portfolioFilter;
    }

    public function getFilters() {
        return $this->getAll();
    }
}