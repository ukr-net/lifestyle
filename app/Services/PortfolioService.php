<?php namespace App\Services;

use App\Portfolio;

class PortfolioService extends Service
{
    public function __construct(Portfolio $portfolio) {
        $this->model = $portfolio;
    }

    public function getPorfolio($limit = 0) {
        $portfolios = $this->get(['limit' => $limit, 'order' => 'desc']);
        return $this->updateImgPath($portfolios);
    }

    public function getPorfolioWithFilters() {
        $portfolios = $this->get(['withs' => ['filters']]);
        return $this->updateImgPath($portfolios);
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