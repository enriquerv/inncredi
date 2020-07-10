<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('version');
            $table->integer('area_id');
            $table->integer('contact_fsr_id');
            $table->string('client');
            $table->longText('assistants_client')->nullable();
            $table->longText('topics')->nullable();
            $table->longText('commitments_fsr')->nullable();
            $table->longText('commitments_client')->nullable();
            $table->longText('pending_fsr')->nullable();
            $table->longText('pending_client')->nullable();
            $table->longText('extra_comments')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
