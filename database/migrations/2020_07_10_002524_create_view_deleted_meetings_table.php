<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewDeletedMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_meetings AS
            (
                SELECT
                    meetings.id,
                    meetings.name,
                    meetings.version,
                    meetings.client,
                    areas.name as area_name,
                    meetings.created_at

                FROM `meetings`
                    JOIN areas ON areas.id = meetings.area_id

                WHERE meetings.deleted_at IS NOT NULL
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
        DB::statement('DROP VIEW IF EXISTS view_deleted_meetings');
    }
}
