<?php
 
 namespace App\Repositries;

 use App\Models\Page;
 use Illuminate\Support\Facades\Cache;
use PhpParser\Node\Stmt\While_;

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
            ->where('visible', true)
            ->orderBy('depth', 'asc')
            ->get();            
        return $pages;

    }

    public function findGrandParents($slug)
    {
        $i=0;
        $parent = Cache::remember(''.$slug.'', 60, function () use ($slug,$i ){            
            $newPage = $this->slugPages($slug);
            $pageNames[''.$i.'']=$newPage;  
            $i=$i+1; 
            do {     
                $newPage = $this->model->findOrFail($newPage['parent_id']);
                $pageNames[''.$i.'']=$newPage;
            } while ($newPage['parent_id'] != null) ;
            return $pageNames;
        });
              
        return $parent;
    }

    public function slugPages($slug)
    {
        $page = $this->model
            ->with('children')
            ->with('parent')
            ->where('slug','=',$slug)    
            ->first();
        return $page;
    }

    public function enable($id)
    {
        $page=$this->model->findOrFail($id);
        $page->update(array(
            'visible' => true
        ));
        return $page;
    }

    public function disable($id)
    {
        $page=$this->model->findOrFail($id);
        $page->update(array(
            'visible' => false
        ));
        return $page;
    }

  



 }