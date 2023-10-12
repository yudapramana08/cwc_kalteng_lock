<?php

class M_akun extends CI_Model
{


    function user()
    {
        if ($_SESSION['akses']=='1') {
            return $this->db->get('db_user');
        }else{
            $username = $_SESSION['username'];
            return $this->db->query("SELECT * FROM db_user WHERE username='$username'");
        }
        
    }

    function updateuser($id, $data)
    {
        $hasil = $this->db->update('db_user', $data, 'id=' . $id);

        return $hasil;
    }

    function hapususer($id)
    {
        $hasil = $this->db->query("DELETE from db_user where id='$id'");

        return $hasil;
    }
}

?>
