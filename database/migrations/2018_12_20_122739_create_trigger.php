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
      CREATE TRIGGER order66 AFTER INSERT ON `products` FOR EACH ROW
          BEGIN
              INSERT INTO product_details (`product_id`, `created_at`, `updated_at`)
              VALUES (NEW.id, now(), now());
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
      DB::unprepared('DROP TRIGGER `order66`');

    }
}
