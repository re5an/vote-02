<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoiceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice_user', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')
                ->onDelete('cascade');

            $table->unsignedBigInteger('poll_id');
            $table->foreign('poll_id')->references('id')->on('polls')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions')
                ->onDelete('cascade');

            $table->unsignedBigInteger('choice_id');
            $table->foreign('choice_id')->references('id')->on('choices')
                ->onDelete('cascade');

            $table->string('answer')->nullable();
            $table->string('extra')->nullable();

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
        Schema::table('choice_user', function (Blueprint $table) {
            //
        });
    }
}
