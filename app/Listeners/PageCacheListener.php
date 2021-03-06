<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use cache;

use App\Repositries\PageRepository;

class PageCacheListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->repository = $pageRepository;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $homeMenuPages = $this->repository->homeMenuPages();
        cache()->forever('homeMenuPages', $homeMenuPages);
    }
}
