<?php namespace NielsVanDenDries\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesMessageNotitications extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_message_notitications', function($table)
        {
            $table->string('dismissing')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_message_notitications', function($table)
        {
            $table->dropColumn('dismissing');
        });
    }
}
