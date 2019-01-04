<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('last_name')->default('');
            $table->string('first_name')->default('');
			$table->string('patronymic')->default('');

            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();

			$table->string('role', 16);

			$table->string('email')->default('');
			//$table->boolean('email_verified')->default(false);
			$table->string('email_verify_token')->nullable()->unique();

			$table->string('phone')->unique();
			//$table->boolean('phone_verified')->default(false);
			$table->text('phone_token')->nullable();

			$table->enum('gender', ['male', 'female'])->nullable();

			$table->integer('location_id')->nullable();

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
        Schema::dropIfExists('users');
    }
}
