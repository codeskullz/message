<?php namespace NielsVanDenDries\Message;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Nielsvandendries\Message\Components\Messages' => 'Messages',
            'Nielsvandendries\Message\Components\Alerts' => 'Alerts'
        ];
    }

    public function registerSettings()
    {
    }
}
