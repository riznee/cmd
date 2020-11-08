<?php
 
 namespace App\Repositries;

 use App\Models\Setting;

 class SettingRepository extends BaseRepository {


    public function __construct(Setting $setting)
    {
        parent::__construct($setting);
    }
    
 }