<?php

namespace App\Listeners;

use App\Events\Pv;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\Common\Article;
class AddPvNum
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Pv  $event
     * @return void
     */
    public function handle(Pv $event)
    {
        Article::where('id',$event->id)->increment('pv');
    }
}
