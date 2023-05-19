<?php

namespace Modules\Bgimage\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Bgimage\Entities\Post;

class PostViewed
{
    use SerializesModels;

    public $bgimage;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Post $bgimage)
    {
        $this->post = $bgimage;
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
}
