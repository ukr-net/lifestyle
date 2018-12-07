<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_filter', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('portfolio_id');
            $table->unsignedInteger('filter_id');

            $table->foreign('portfolio_id')->references('id')->on('portfolios');
            $table->foreign('filter_id')->references('id')->on('filters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_filter');
    }
}
