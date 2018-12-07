<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function filters() {
        return $this->belongsToMany('App\Filter','portfolio_filter');
    }
}
