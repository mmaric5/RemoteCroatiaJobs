<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('conditions', 255);
            $table->string('whatDoWeOffer', 255);
            $table->string('typeOfWork', 255);
            $table->string('linkForApplication', 100);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedBigInteger('qualification_id');
            $table->foreign('qualification_id')->references('id')->on('qualifications'); 
            $table->unsignedBigInteger('drivingLicense_id');
            $table->foreign('drivingLicense_id')->references('id')->on('driving_license'); 
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages'); 
            $table->unsignedBigInteger('typeOfWorks_id');
            $table->foreign('typeOfWorks_id')->references('id')->on('typeOfWorks'); 
            $table->boolean('WorkFromHome');		
            $table->string('description', 255)->nullable();
            $table->string('category', 50);
            $table->unsignedBigInteger('companies_id');
            $table->foreign('companies_id')->references('id')->on('companies'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
