<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('student_name', 'name')->change();
            $table->renameColumn('student_email', 'email')->change();
            $table->renameColumn('student_password', 'password')->change();
        });
        
        Schema::table('students', function (Blueprint $table){
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
        Schema::table('UpdateStudent', function (Blueprint $table) {
            //
        });
    }
}
