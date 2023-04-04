<?php namespace NielsVanDenDries\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesMessageList extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_message_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('subject');
            $table->text('message');
            $table->string('sender_id')->nullable();
            $table->boolean('is_read')->default(false);
            $table->string('messagelist_id')->nullable();
            $table->timestamp('recipient_id')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_message_list');
    }
}
