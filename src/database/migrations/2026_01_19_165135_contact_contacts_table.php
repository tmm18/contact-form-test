<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('contacts',function(Blueprint $table)
    {
    $table->id();
        $table->string('category_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->tinyInteger('gender');
        $table->string('email');
        $table->string('tel');
        $table->string('address');
        $table->string('building');
        $table->text('detail');
        $table->timestamp('created_at');
        $table->timestamp('updated_at');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};