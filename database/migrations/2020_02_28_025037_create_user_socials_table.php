<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_socials', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->Integer('user_id')->unsigned();
            $table->String('social_network');
            $table->String('social_id');
            $table->String('social_email');
            $table->String('social_avatar');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('social_email')->references('email')->on('users');

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
        Schema::table('user_socials', function (Blueprint $table){
            $table->dropForeign('user_socials_user_id_foreign');
            $table->dropForeign('user_socials_user_social_email_foreign');
        })
        Schema::dropIfExists('user_socials');
    }
}
