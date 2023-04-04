<?php namespace Nielsvandendries\Message\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Message\Models\Notifications;

/**
 * Alerts Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Alerts extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Notifications',
            'description' => 'Displays Alert Notifications'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->item = Notifications::get()->toArray();
    }
}
