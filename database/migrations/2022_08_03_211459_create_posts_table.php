<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2022_08_02_215307_create_posts_table.php
            $table->bigIncrements('id');

            $table->bigIncrements("user_id")->unsigned()->nullable();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('image')->nullable();

            $table->text('body');
            $table->string('iframe')->nullable();

=======
            $table->id();
>>>>>>> b3676b9a82fd4bd82cc48730e28c404b08bc31b8:database/migrations/2022_08_03_211459_create_posts_table.php
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
