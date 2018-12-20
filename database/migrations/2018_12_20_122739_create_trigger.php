<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::unprepared('
      CREATE TRIGGER no_normie AFTER INSERT ON `users` FOR EACH ROW
          BEGIN
              IF NEW.id > 99 THEN
              SIGNAL SQLSTATE "45000"
              SET MESSAGE_TEXT = "normie get out";
              END IF;
          END
      ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::unprepared('DROP TRIGGER `no_normie`');

    }
}
