<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->boolean('hasText')->default(0);
            $table->string('textTitle')->nullable();
            $table->boolean('multiple')->default(0);
            $table->unsignedInteger('sort')->default(0);
            $table->string('status')->default('active');
            $table->string('extra')->nullable();
            $table->unsignedBigInteger('poll_id');
            $table->foreign('poll_id')->references('id')
                ->on('polls')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
