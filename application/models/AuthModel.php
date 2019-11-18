<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    public function login($username, $password){

        $set_table = $this->db->get('user');
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        //$query = $this->db->query ("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

        if($query->num_rows()>0){
            foreach ($query->result() as $x){
                $sess = array(
                    "nama_user" => $x->nama_lengkap_user,
                    "no_telp" => $x->no_tlp_user,
                    "id_user" => $x->id_user,
                    "username" => $x->username,
                    "alamat" => $x->alamat_user,
                    "role" => $x->role,
                    "status" => "login",
                );
                $role = $x->role;

            }
            $this->session->set_userdata($sess);

            //login level by controller
            if($role == "kps"){
                redirect('kps');
            }else if($role=="mahasiswa"){
                redirect('mahasiswa');
            }else if ($role=="dosen") {
                redirect('dosen');
            }
            // else if($level == "admin"){
            //     redirect("admin");
            // }else if($level == "service advisor"){
            //     redirect("service_advisor");
            // }else if($level == "teknisi"){
            //     redirect("teknisi");
            // }else if($level == "ptm"){
            //     redirect("ptm");
            // }elseif($level == "qc"){
            //     redirect("qc");
            // }elseif($level == 'pimpinan'){
            //     redirect('pimpinan');
            // }

           // redirect('partsman');
        }else{
           $this->session->set_flashdata('info', 'Username dan Password Anda Salah !');
            redirect('auth');
        }
    }


}
