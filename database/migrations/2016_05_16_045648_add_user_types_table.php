<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserTypesTable extends Migration
{
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
           // $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('user_types');
    }
}