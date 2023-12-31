<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->id('editor_id');
            $table->string('editor_name', 100);
            $table->string('email', 200)->unique();
            $table->string('password', 200);
            $table->string('address', 500)->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['M', 'F', 'O'])->nullable();
            $table->string('phone', 11)->nullable();
            $table->enum('status', ['approved', 'rejected', 'pending'])->default('pending');
            //approved_by
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
        Schema::dropIfExists('editors');
    }
}
