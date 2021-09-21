<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\AboutModel;

class Anisa extends BaseController
{
	public function about()
	{
	
        $about = new AboutModel();

       
        $data['about'] = $about->where('aktif', '1')->findAll();
        
		echo view("about",$data);
	}
	public function product()
	{
		echo view("product");
	}
	public function history()
	{
		echo view( "history");
	}

}



