<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('about_title')->default('About');
            $table->text('about_body')->nullable();
            $table->string('privacy_title')->default('Security &amp; Privacy Policy');
            $table->text('privacy_body')->nullable();
            $table->string('returns_title')->default('Returns Policy');
            $table->text('returns_body')->nullable();
            $table->string('terms_title')->default('Terms &amp; Conditions');
            $table->text('terms_body')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
