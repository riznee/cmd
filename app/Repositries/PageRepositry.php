<?php
 
 namespace App\Repositries;

 use App\Models\Page;
 use App\Validators\PageValidator;

 class PageRepositry extends BaseRepositry {

    public function __construct(Page $page,PageValidator $pagevalidator )
    {
        parent::__construct($page, $pagevalidator );
    }

    public function getPages()
    {
        $pages = $this->model->with('children')->whereNull('parent_id')->orderBy('depth', 'asc')->get();
        return $pages;
    }

    public function latest()
    {
        $pages = Page::latest()->paginate($this->perpage);
        return $pages;
    }
 }