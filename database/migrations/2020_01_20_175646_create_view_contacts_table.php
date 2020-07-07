<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_contacts AS
            (
                SELECT
                    contacts.id,
                    contacts.name,
                    contacts.email,
                    contacts.phone,
                    contacts.message,
                    contacts.created_at

                FROM `contacts`

                WHERE contacts.deleted_at IS NULL
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
        Schema::dropIfExists('view_contacts');
    }
}
