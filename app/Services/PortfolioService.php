<?php namespace App\Services;

use App\Portfolio;

class PortfolioService extends Service
{
    public function __construct(Portfolio $portfolio) {
        $this->model = $portfolio;
    }

    public function getPorfolio($limit = 0) {
        $portfolios = $this->get(['limit' => $limit, 'order' => ['id' => 'desc']]);
        return $this->updateImgPath($portfolios, config('settings.portfolio_img_dir'));
    }

    public function getPorfolioWithFilters() {
        $portfolios = $this->get(['withs' => ['filters']]);
        return $this->updateImgPath($portfolios, config('settings.portfolio_img_dir'));
    }
}