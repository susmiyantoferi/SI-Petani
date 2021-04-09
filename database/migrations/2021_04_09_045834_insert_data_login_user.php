<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertDataLoginUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("

insert into users (name, email, email_verified_at, password, remember_token, created_at, updated_at)
values
('Feri Susmiyanto', 'admin@admin.com', null, '$2y$10$7esGDBjvTRVW6OgsbuAH1.j1OUHRKkKCjt8P6vb4wG9OgqHjyUAT.',
null, '2021-04-09 05:00:42', '2021-04-09 05:00:42' );
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
