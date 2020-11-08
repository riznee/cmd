<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositries\FileRepository;
 
class FileController extends Controller
{
    // public $permissonName='upload';

    public $permissonName='files';

    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }



    public function index()
    {
        $pages = $this->repository->getPages();
        return view('files.index', compact('pages'));
    }
    
    public function create()
    {
        $pages = $this->repository->pageList();
        return view('files.create', compact('pages'));
    }
    
    // public function store(StorePageRequest $request)
    // {
    //     try{
    //         $data = $this->repository->store($request);
    //         return redirect()->route('pages.index')->with('success','New Page is created');
    //     }
    //     catch (\Exception $exeption)
    //     {
    //         return redirect()->route('pages.create')
    //             ->withError($exeption->getMessage())
    //             ->withInput();
    //     }
    // }

    // public function show($id)
    // {
    //     $page =  $this->repository->getItem($id);
    //     $pages = $this->repository->pageList();
    //     return view('pages.create',compact('page', 'pages'));   
    // }
    
    // public function update(UpdatePageRequest $request, $id)
    // {
    //     $page =  $this->repository->findOrFail($id);

    //     try
    //     {
    //         $this->repository->updateUniquefeild($page,$request);
    //         return redirect()->route('pages.index')->with('success', 'Page information is updated Successfull');
    //     }
    //     catch (\Exception $exeption)
    //     {
    //         return redirect()->route('pages.create')
    //             ->withError($exeption->getMessage())
    //             ->withInput();
    //     }

    // }
    
    public function destroy($id)
    {
        try{
            $this->repository->destroy($id);
            return redirect()->route('files.index')->with('success','A Page is deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('files.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
   
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            // $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}