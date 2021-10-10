<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_menu', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("base_id");
            $table->integer("category_id");
            $table->string("name");
            $table->integer("price");
            $table->integer("cal");
            $table->string("comment");
            $table->string("img");
            $table->integer("allergies_1");
            $table->integer("allergies_2");
            $table->integer("allergies_3");
            $table->integer("allergies_4");
            $table->integer("allergies_5");
            $table->integer("allergies_6");
            $table->integer("allergies_7");
            $table->integer("allergies_8");
            $table->integer("allergies_9");
            $table->integer("allergies_10");
            $table->integer("allergies_11");
            $table->integer("allergies_12");
            $table->integer("allergies_13");
            $table->integer("allergies_14");
            $table->integer("allergies_15");
            $table->integer("allergies_16");
            $table->integer("allergies_17");
            $table->integer("allergies_18");
            $table->integer("allergies_19");
            $table->integer("allergies_20");
            $table->integer("allergies_21");
            $table->integer("allergies_22");
            $table->integer("allergies_23");
            $table->integer("allergies_24");
            $table->integer("allergies_25");
            $table->integer("allergies_26");
            $table->integer("allergies_27");
            $table->integer("allergies_28");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("t_menu");
    }
}
