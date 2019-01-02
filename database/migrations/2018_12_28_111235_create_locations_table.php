<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('locations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->index();
			$table->string('slug');
			$table->enum('type', ['country', 'region', 'city', 'district', 'metro']);

			//$table->json('declensions')->nullable();

			$table->nestedSet();
			$table->timestamps();
			//$table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
