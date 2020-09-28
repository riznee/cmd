<?php
 
 namespace App\Repositries;

 use App\Models\Page;


 class PageRepositry extends BaseRepositry {

    public function __construct(Page $page )
    {
        parent::__construct($page );
        $this->perpage = 5;
    }

    public function getPages()
    {
        $pages = $this->model
        ->with('parent')
        ->orderBy('depth', 'asc')
        ->paginate();
        return $pages;
    }

    public function latest()
    {
        $pages = $this->model->latest()->paginate($this->perpage);
        return $pages;
    }

    public function pageList()
    {
        $pages = $this->model->all();
        return $pages;
    }

    public function homeMenuPages()
    {
        $pages = $this->model
        ->with('children')
        ->whereNull('parent_id')
        ->orderBy('depth', 'asc')
        ->paginate();
        return $pages;
    }

    public function slugPages($slug)
    {
        $page = $this->model
            ->with('children')
            ->where('slug','=',$slug)
            ->first();
        return $page;
    }
 }