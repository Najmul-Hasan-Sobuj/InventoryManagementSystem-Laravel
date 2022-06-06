<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 120)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('address', 220)->nullable();
            $table->string('type', 50)->nullable();
            $table->text('photo')->nullable();
            $table->string('shop', 100)->nullable();
            $table->string('account_holder', 100)->nullable();
            $table->string('account_number', 100)->nullable();
            $table->string('bank_name', 100)->nullable();
            $table->string('branch_name', 200)->nullable();
            $table->string('city', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
