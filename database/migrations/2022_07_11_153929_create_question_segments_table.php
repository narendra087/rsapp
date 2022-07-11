<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_segments', function (Blueprint $table) {
            $table->unsignedBigInteger('form_id');
            $table->bigIncrements('question_segment_id');
            $table->string('question_segment');
            $table->string('question_segment_desc');
            $table->string('question_segment_status');
            $table->index('question_segment_id');
            $table->foreign('form_id')
                ->references('form_id')
                ->on('forms_table')
                ->onDelete('cascade');
            $table->primary(['form_id','question_segment_id']);
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
        Schema::dropIfExists('question_segments');
    }
}
