<?php namespace NielsVanDenDries\Message;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Nielsvandendries\Message\Components\Messages' => 'Messages',
            'Nielsvandendries\Message\Components\Notifications' => 'Notifications'
        ];
    }

    public function registerSettings()
    {
    }
}
