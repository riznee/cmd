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
        $pages = $this->model->with('children')->whereNull('parent_id')->orderBy('depth', 'asc')->get();
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
 }