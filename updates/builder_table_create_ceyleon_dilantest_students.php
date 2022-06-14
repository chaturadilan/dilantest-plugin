<?php namespace Ceyleon\Dilantest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeyleonDilantestStudents extends Migration
{
    public function up()
    {
        Schema::create('ceyleon_dilantest_students', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceyleon_dilantest_students');
    }
}
