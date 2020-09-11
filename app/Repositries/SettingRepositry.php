<?php
 
 namespace App\Repositries;

 use App\Models\Setting;

 class SettingRepositry extends BaseRepositry {


    public function __construct(Setting $setting)
    {
        parent::__construct($setting);
    }
    
 }