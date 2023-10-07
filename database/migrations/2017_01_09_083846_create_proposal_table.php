<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->engine= 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('CompanyName');
            $table->string('CompanyEmail');
            $table->string('HQAddress');
            $table->text('Vision');
            $table->string('ImagePath');
            $table->string('fname');
            $table->string('lname');
            $table->integer('card');
            $table->string('cv');
            $table->integer('phone_number');
            $table->integer('country_code');
            $table->string('authy_id')->nullable();
            $table->boolean('verified')->default(false);
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
        Schema::dropIfExists('proposals');
    }
}
