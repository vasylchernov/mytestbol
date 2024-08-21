<?php

namespace App\Listeners;

use App\Events\ProductAdded;
use App\Http\Controllers\MailController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminOfNewProductListener
{
    /**
     * Create the event listener.
     */
//    public function __construct(ProductAdded $event)
//    {
//        (new MailController())->mySendMail('product added title', 'product added content event - ' . $event->product->name);
//    }

    /**
     * Handle the event.
     */
    public function handle(ProductAdded $event): void
    {
        (new MailController())->mySendMail('product added title', 'product added content event - ' . $event->product->name);
    }
}
