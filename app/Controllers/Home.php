<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_model;


class Home extends BaseController
{
    public function index()

     {
       	echo view('partial/header');
    	echo view('login');
    	echo view('partial/footer');
     
}
	public function dashboard()
   {
        if(session()->get('id')>0) {
        echo view('partial/header');
        echo view('partial/side_menu');
        echo view('dasboard');
        echo view('partial/footer');
        }else{
        return redirect()->to('/Home');
        }
    }
     public function pelanggan()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('pelanggan');

        $id=session()->get('id');
        $where=array('id_pelanggan'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('pelanggan',$diva);
        echo view('partial/footer');
    }
    public function tambah_pelanggan()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('pelanggan');

        $id=session()->get('id');
        $where=array('id_pelanggan'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('tambah_pelanggan',$diva);
        echo view('partial/footer');
        
    }
     public function aksi_tambah_pelanggan()
    {
     
     $model=new M_model();
    $nama_pelanggan=$this->request->getPost('nama_pelanggan');
    $alamat=$this->request->getPost('alamat');
    $no_tlp=$this->request->getPost('no_tlp');
  
    $data=array(
      
        'nama_pelanggan'=>$nama_pelanggan,
        'alamat'=>$alamat,
        'no_tlp'=>$no_tlp,
      
    );
    $model->simpan('pelanggan',$data);
    return redirect()->to('/home/pelanggan');
    }
    public function edit_pelanggan($id)
    {
        $model=new M_model();
        $where=array('id_pelanggan'=>$id);
        $diva['octa']=$model->getWhere('pelanggan', $where);

        $id=session()->get('id');
        $where=array('id_pelanggan'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('edit_pelanggan',$diva);
        echo view('partial/footer');
    }
     public function aksi_edit_pelanggan()
    {
        $model=new M_model();
    $id=$this->request->getPost('id');
    $nama_pelanggan=$this->request->getPost('nama_pelanggan');
     $alamat=$this->request->getPost('alamat');
    $no_tlp=$this->request->getPost('no_tlp');
      
    $data=array(
       
        'nama_pelanggan'=>$nama_pelanggan,
         'alamat'=>$alamat,
        'no_tlp'=>$no_tlp
        
    );
    $where=array('id_pelanggan'=>$id);
    $model->qedit('pelanggan',$data,$where);
    return redirect()->to('/home/pelanggan');

    }
     public function delete_pelanggan($id)
    {
        $model=new M_model();
        $where=array('id_pelanggan'=>$id);
        $model->hapus('pelanggan',$where);
        return redirect()->to('/home/pelanggan');
    }
      public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('pswd');
        $model= new M_model();
        $data=array(
            'username'=>$u,
            'password'=>$p
        );
        $cek=$model->getWhere2('user', $data);
        if ($cek > 0) {
        session()->set('id', $cek['id_user']);
        session()->set('username', $cek['username']);
        session()->set('level', $cek['level']);
        return redirect()->to('/home/dashboard');
        }else {
            return redirect()->to('/Home');
        }
    }
      public function log_out()
    {
        

         session()->destroy();
         return redirect()->to('/');

   
    }
    public function produk()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('produk');

        $id=session()->get('id');
        $where=array('id_produk'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('produk',$diva);
        echo view('partial/footer');
    }
      public function tambah_produk()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('produk');

        $id=session()->get('id');
        $where=array('id_produk'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('tambah_produk',$diva);
        echo view('partial/footer');
        
    }
     public function aksi_tambah_produk()
    {
     
     $model=new M_model();
    $namapro=$this->request->getPost('namapro');
    $harga=$this->request->getPost('harga');
    $stok=$this->request->getPost('stok');
  
    $data=array(
      
        'namapro'=>$namapro,
        'harga'=>$harga,
        'stok'=>$stok,
      
    );
    $model->simpan('produk',$data);
    return redirect()->to('/home/produk');
    }
    public function edit_produk($id)
    {
        $model=new M_model();
        $where=array('id_produk'=>$id);
        $diva['octa']=$model->getWhere('produk', $where);

        $id=session()->get('id');
        $where=array('id_produk'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('edit_produk',$diva);
        echo view('partial/footer');
    }
     public function aksi_edit_produk()
    {
        $model=new M_model();
    $id=$this->request->getPost('id');
    $namapro=$this->request->getPost('namapro');
     $harga=$this->request->getPost('harga');
    $stok=$this->request->getPost('stok');
      
    $data=array(
       
        'namapro'=>$namapro,
         'harga'=>$harga,
        'stok'=>$stok
        
    );
    $where=array('id_produk'=>$id);
    $model->qedit('produk',$data,$where);
    return redirect()->to('/home/produk');

    }
     public function delete_produk($id)
    {
        $model=new M_model();
        $where=array('id_produk'=>$id);
        $model->hapus('produk',$where);
        return redirect()->to('/home/produk');
    }
     public function penjualan()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('penjualan');

        $id=session()->get('id');
        $where=array('id_penjualan'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('penjualan',$diva);
        echo view('partial/footer');
    }
    public function tambah_penjualan()
    {
       
         $model=new M_model();
        $diva['octa']=$model->tampil('penjualan');

        $id=session()->get('id');
        $where=array('id_penjualan'=>$id);

        echo view('partial/header',$diva);
        echo view('partial/side_menu',$diva);
        echo view('tambah_penjualan',$diva);
        echo view('partial/footer');
        
    }
     public function aksi_tambah_penjualan()
    {
     
     $model=new M_model();
    $tglpenjualan=$this->request->getPost('tglpenjualan');
    $ttlharga=$this->request->getPost('ttlharga');
 
    $data=array(
      
        'tglpenjualan'=>$tglpenjualan,
        'ttlharga'=>$ttlharga,
       
      
    );
    $model->simpan('penjualan',$data);
    return redirect()->to('/home/penjualan');
    }


 



}
