<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLecturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lecturers', function (Blueprint $table) {
            $table->renameColumn('lecturer_name', 'name')->change();
            $table->renameColumn('lecturer_email', 'email')->change();
            $table->renameColumn('lecturer_password', 'password')->change();
        });
        
        Schema::table('lecturers', function (Blueprint $table){
            $table->longText('password')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
