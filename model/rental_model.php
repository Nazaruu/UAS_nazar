<?php

class rental_model{
    protected $db;
    function __construct($db){
        $this->db =$db;
    }
    function tampil_data()
    {

        $row = $this->db->prepare(" SELECT * FROM tbl_rentalps"); 
        
        $row->execute();
        return $hasil = $row->fetchAll();
        
    }
    function getData($id)
    {

        $row = $this->db->prepare(" SELECT * FROM tbl_rentalps WHERE no_billing =$id"); 
        
        $row->execute();
        return $hasil = $row->fetch();
        
    }
    function getJenisdata()
    {

        $row = $this->db->prepare("SELECT * FROM tbl_jaminan"); 
        
        $row->execute();
        return $hasil = $row->fetchAll();
        
    }
    function simpanData($data)
    {

        $rowsSQL = array();
        $toBind = array();
        $columnNames = array_keys($data[0]);
        foreach($data as $arrayIndex => $row){
            $params = array();
            foreach($row as $columnName => $columnValue){
                $param = ":" . $columnName . $arrayIndex;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }

            $rowsSQL[]= "(" . implode(", ", $params) . ")";
        
        }
        $sql = "INSERT INTO tbl_rentalps(" . implode(",",$columnNames).")
        VALUES " . implode (", ", $rowsSQL);
        $row = $this->db->prepare($sql);

        foreach ($toBind as $param => $val){
            $row->bindValue($param, $val);
        }
        return $row->execute();
    }

    
        function updateData($data, $id){
        $setPart =array();
        foreach ($data as $param  => $value) 
        {

            $setPart[]=$key . "=". $key;
        }
            $sql="UPDATE tbl_rentalps SET " . implode(',', $setPart)." WHERE id = :id";
            $row = $this->db->prepare($sql);

            $row->binValue(':id', $id);
            foreach ($data as $param => $val){
                $row->binValue($param, $val);
            }

                return $row->execute();
    }

    function hapusData($id){
        $sql = "DELETE tbl_rentalps WHERE id = ?";
        $row = $this  -> db->prepare($sql);
        return $row -> execute(array($id));
    }
}

?>