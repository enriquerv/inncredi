<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_meetings AS
            (
                SELECT
                    meetings.id,
                    meetings.name,
                    meetings.version,
                    meetings.client,
                    meetings.assistants_client,
                    areas.name as area_name,
                    CONCAT(users.first_name,' ',users.last_name) as contact_fsr_name,
                    meetings.topics,
                    meetings.commitments_fsr,
                    meetings.commitments_client,
                    meetings.pending_fsr,
                    meetings.pending_client,
                    meetings.extra_comments,
                    meetings.created_at

                FROM `meetings`
                    JOIN areas ON areas.id = meetings.area_id
                    JOIN users ON users.id = meetings.contact_fsr_id

                WHERE meetings.deleted_at IS NULL
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
        DB::statement('DROP VIEW IF EXISTS view_meetings');
    }
}
