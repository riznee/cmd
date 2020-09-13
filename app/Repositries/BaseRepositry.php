<?php
 
 namespace App\Repositries;

 use Illuminate\Foundation\Validation\ValidatesRequests;

 class BaseRepositry {

    use ValidatesRequests;
    protected $model;
    protected $validations;

    public $perpage = 15;

    public function __construct($model)
    {
        $this->model= $model;
        
    }

    public function getall()
    {
        return $this->model->latest()->paginate($this->perpage);
    }
    
    public function store($request)
    {
        return  $this->model->create($request->all());  
    }

    public function getitem($id)
    {
        return $this->model->find($id);
    }
    
    public function update($request, $id)
    {
       return $this->mode->find($id)->update($request->all());
    }
    
    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function updateUniquefeild($data, $request)
    {
        $data = $data->update($request->all());
        return $data;
    }

    
    
    
    
    
 }

