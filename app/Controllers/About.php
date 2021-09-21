<?php
namespace App\Controllers;

use App\models\AboutModel; //Menggunakan file model yang bernama AboutModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class About extends BaseController // class about merupakan varian dari BaseController
{
    public function index() //membuat fungsi index dengan sifat public
    {
        //membuat object model $about
        $about = new AboutModel();

        /*
        menyiapkan data untuk dikirim ke view dengan nama $aboutx
        dengan ketentuan yang mempunyai status published pada data yang ada di database
        */
        $data['aboutx'] = $about->findAll();

        //mengirim data ke view
        echo view('about', $data);
    }
}