<?php namespace NielsVanDenDries\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesMessageList extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('messagelist_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('messagelist_id');
        });
    }
}
