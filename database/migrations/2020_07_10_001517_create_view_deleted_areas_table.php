<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewDeletedAreasTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_areas AS
            (
                SELECT
                    areas.id,
                    areas.name,
                    areas.created_at

                FROM `areas`
                WHERE areas.deleted_at IS NOT NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_deleted_areas');
    }
}
