<?php namespace App\Services;

use App\Portfolio;

class PortfolioService extends Service
{
    public function __construct(Portfolio $portfolio) {
        $this->model = $portfolio;
    }

    public function getPorfolio($number = 0) {
        if ($number) return $this->updateImgPath($this->getNumberOf($number, 'last'));
        return $this->updateImgPath($this->getAll());
    }

    public function getPorfolioWithFilters() {
        return $this->updateImgPath($this->getAllWith('filters'));
    }

    private function updateImgPath($portfolios) {
        if (!$portfolios) return null;

        $portfolios->transform(function($item, $key){
            $item->image = config('settings.portfolio_img_dir') . '/' . $item->image;
            return $item; 
        });
        return $portfolios;
    }
}