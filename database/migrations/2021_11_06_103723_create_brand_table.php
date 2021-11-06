<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            //
            // $table->foreign('proid')
            // ->references('id')->on('shoe')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            $table->string('brand_id');
            $table->string('name');
            $table->string('state');
            $table->timestamps();
        });

        Schema::table('brands', function (Blueprint $table) {
            //
            $table->primary('brand_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
