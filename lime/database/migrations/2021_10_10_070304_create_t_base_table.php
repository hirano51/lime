<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_base', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id");
            $table->string("top_img");
            $table->string("bg_img");
            $table->string("comment");
            $table->integer("inuse");
            $table->integer("editing");
            $table->string("edit_end_date");
            $table->string("edit_end_time");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("t_base");
    }
}
