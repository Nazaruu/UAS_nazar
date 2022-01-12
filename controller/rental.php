<?php

include '../database.php';
include '../model/rental_model.php';
class rental {
public $model;

    function __construct()
    {
        $db =new database();
        $conn = $db->dbconnect();
        $model = new rental_model($conn);
        $this->model = new rental_model($conn); 
    }

    function index()
    {
        session_start();
        if(!empty($_SESSION)){
        $hasil = $this->model->tampil_data();
        return $hasil;
        }else{
            header("Location:login.php");
        }
    }

    function getData($id)
    {   
        $hasil = $this->model->getData($id);
        return $hasil;
    }

    function getJenisData()
    {   
    $jenis_rental = $this->model->getJenisData();
    echo json_encode($jenis_rental);
    }

    function updateData($data, $id){
        $setPart =array();
        foreach ($data as $param  => $value) 
        {

            $setPart[]=$key . "=". $key;
        }
            $sql="UPDATE tbl_rentalps SET " . implode(',', $setPart)." WHERE no_billing = :no_billing";
            $row = $this->db->prepare($sql);

            $row->binValue(':no_billing', $id);
            foreach ($data as $param => $val){
                $row->binValue($param, $val);
            }

                return $row->execute();
    }


    function hapusSurat($id){
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $result = $this ->model->hapusSurat($id);

            if($result){
                header("Location:index.php?pesan=succes&frm=add");
            }else{
                header("Location:index.php?pesan=gagal&frm=add");
            
  
            }
        }
    }

    function simpanRental(){
        if (isset($_POST['submit'])) {
            $nama_penyewa = $_POST['nama_penyewa'];
            $alamat = $_POST['alamat'];
            $tanggal = $_POST['tanggal'];
            $lama_peminjaman = $_POST['lama_peminjaman'];
            $jaminan = $_POST['jaminan'];
            $harga = $_POST['lama_peminjaman']*50000;

            $data[] =array (
                'nama_penyewa' =>$nama_penyewa,
                'alamat' =>$alamat,
                'tanggal'   => $tanggal,
                'lama_peminjaman'   =>$lama_peminjaman,
                'jaminan'=>$jaminan,
                'lama_peminjaman' =>$lama_peminjaman
            );
          $result = $this->model->simpanData($data);

          if($result){
              header("Location:content.php?pesan=succes&frm=add");
          }else{
              header("Location:content.php?pesan=gagal&frm=add");
          

            }

        }

    }

    function logout(){
        if(isset($_POST['logout'])){
            session_start();
            session_destroy();
            header("Location:login.php");
        }
    }
}
?>