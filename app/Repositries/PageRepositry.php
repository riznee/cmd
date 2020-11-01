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
        $pages = Cache::remember('homePage', 60, function () {
            return $this->model
            ->with('children')
            ->whereNull('parent_id')
            ->where('visible', true)
            ->orderBy('depth', 'asc')
            ->get();            
        });
        return $pages;

    }

    public function findGrandParents($slug)
    {
        $pages = Cache::remember(''.$slug.'', 60, function () use($slug) {
            $i=0;            
            $data = $this->slugPages($slug);
            $pageNames[''.$i.'']= $data;
            $i= $i+1;
            $test = true;
            while( $test == true)
            {
                if($data->parent_id !=null) {
                    $data = $this->slugPages( $data->parent->slug);
                    $pageNames[''.$i.'']= $data;
                    $i= $i+1;
                    $test = true;
                } else {
                    $test = false; 
                }
            }
            return $pageNames;
        });
        return $pages;
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