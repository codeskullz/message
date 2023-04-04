<?php namespace NielsVanDenDries\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesMessageNotitications2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_message_notitications', function($table)
        {
            $table->dropColumn('dismissing');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_message_notitications', function($table)
        {
            $table->string('dismissing', 255)->nullable();
        });
    }
}
