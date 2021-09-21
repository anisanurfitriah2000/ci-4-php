<?php
namespace App\Controllers;

use App\models\ProductModel; //Menggunakan file model yang bernama ProductModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class Product extends BaseController // class product merupakan varian dari BaseController
{
    protected $product;
    function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index() //membuat fungsi index dengan sifat public
    {
        //membuat object model $product
        $product = new ProductModel();

        /*
        menyiapkan data untuk dikirim ke view dengan nama $productx
        dengan ketentuan yang mempunyai status published pada data yang ada di database
        */
//    $data['productx'] = $product->where('status', 'published')->findAll();
        $data['productx'] = $product->findAll();
        //mengirim data ke view
        echo view('product', $data);
    }
    
    public function add() //membuat fungsi add dengan sifat public
    {
      $product = new ProductModel();
	    $data['productx'] = $product->findAll();
        return view('product-add', $data);
    }

    public function save() //membuat fungsi save dengan sifat public
    {
        if (!$this->validate([
            'id_barang' => [
                'rules' => 'required|is_unique[tb_product.id_barang]',
                'errors' => [
                    'required' => 'ID Barang harus diisi!',
	        		'is_unique' => 'sudah ada {field} yang sama'
                ]
            ],
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama Barang harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    $this->product->insert([
        'id_barang' => $this->request->getVar('id_barang'),
        'nama_barang' => $this->request->getVar('nama_barang'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data product berhasil ditambahkan !');
        return redirect()->to('/product');
    }

    function edit($id)
    {
        $dataProduct = $this->product->find($id);
        if (empty($dataProduct)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data product tidak ditemukan !');
        }

        $data['product'] = $dataProduct;
        return view('product-edit', $data);
    }

    public function saveEdit($id)
    {
        if (!$this->validate([
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama Barang harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back();
    }

    $this->product->update($id, [
        'nama_barang' => $this->request->getVar('nama_barang'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data product berhasil diperbaikin !');
        return redirect()->to('/product');
    }

    function delete($id)
    {
         $dataProduct = $this->product->find($id);
        if (empty($dataProduct)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data product tidak ditemukan !');
        }

        $this->product->delete($id);
        session()->setFlashdata('message', 'Berhasil menghapus data product !');
        return redirect()->to('/product');
    }
}


