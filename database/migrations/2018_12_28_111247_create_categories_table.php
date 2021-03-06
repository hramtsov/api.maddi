<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->index();
			$table->string('slug')->unique();

			// $table->string('seo_title')->default('');
			// $table->string('seo_description')->default('');
			// $table->text('seo_content')->nullable();
			// $table->json('declensions')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
