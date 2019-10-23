<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUser extends Migration
{
	protected $table = 'tb_users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		 Schema::create('tb_users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('user_name');
			$table->string('user_gender');
            $table->string('user_email');
			$table->string('user_mobile');
            $table->string('user_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		 Schema::dropIfExists('tb_users');
    }
}
