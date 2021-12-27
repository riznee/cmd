<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{

    public function __construct(HomeController $homeController)
    {
        $this->homeController = $homeController;
        parent::__construct();
    }

    public function conctactCaptcaValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);
        unset($request['captcha']);
        return $this->homeController->contactSend($request);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
