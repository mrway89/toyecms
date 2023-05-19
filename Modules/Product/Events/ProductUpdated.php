<?php

namespace Modules\Product\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Product\Entities\Post;

class PostUpdated
{
    use SerializesModels;

    public $product;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Post $product)
    {
        $this->post = $product;
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
