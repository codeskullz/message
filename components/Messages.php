<?php namespace Nielsvandendries\Message\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Nielsvandendries\Message\Models\Messagelist;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class Messages extends ComponentBase
{
    public $item;
    
    public function componentDetails()
    {
        return [
            'name' => 'Berichten Inbox',
            'description' => 'Displays a list of messages for the currently logged in user.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        // Get the user ID of the currently logged in user
        $userId = Auth::getUser()->id;

        // Retrieve the messages for the user
        $this->item = Messagelist::where('recipient_id', $userId)->get()->toArray();

        $messages = Messagelist::where('sender_id', $userId)->orderBy('created_at', 'desc')->get();
        $latestMessage = $messages->first();

        if ($latestMessage && $latestMessage->created_at > session('last_message_check')) {
            session()->flash('success', 'U heeft een nieuw bericht ontvangen!');
        }

        session(['last_message_check' => now()]);
        $this->item = $messages->toArray();
    }

    public function onMarkAsRead()
{
    $message_id = post('message_id');
    $result = $this->messagelist->markAsRead($message_id);

    if ($result) {
        Flash::success('Bericht gemarkeerd als gelezen.');
    } else {
        Flash::error('Kon bericht niet markeren als gelezen.');
    }

    return [
        '#messages' => $this->renderMessages(),
    ];
}


}