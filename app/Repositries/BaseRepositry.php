<?php
 
 namespace App\Repositries;

 use Validator;

 class BaseRepositry {

    protected $model;
    protected $validations;

    public $perpage = 15;

    public function __construct($model,$validations )
    {
        $this->model= $model;
        $this->validations = $validations;
        
    }


    public function getall()
    {
        $data = $this->model->latest()->paginate($this->perpage);
        return $data;
    }
    
    public function store($request)
    {
        $this->validate($request,$this->validatator($this->validations->createValidation));
        $this->model->create($request->all());
    
    }

    public function getitem($id)
    {
        $data =  $this->model->find($id);
        return $data;
    }
    
    public function update($request, $id)
    {
        $this->validate($request,$this->validatator($this->validations->updateValidation));
        $this->mode->find($id)->update($request->all());
     

    }
    
    public function destroy($id)
    {
        $this->model->find($id)->delete();
    }
    
    protected function validatator($validation)
    {
        return $validation;

    }
    
 }

