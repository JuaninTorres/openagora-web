<?php

namespace App\Events;

use App\Contact;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactFormHasSent extends Event
{
    use SerializesModels;
    /**
     * @var Contact
     */
    private $contact;

    /**
     * Create a new event instance.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}
