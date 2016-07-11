<?php
/**
 * Created by Gustavo.
 * Realiza o login e cria a sessão com a ID do usuario;
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{
    public $login;
    public $id_user;
    public $senha;
    public function __construct()
    {

        $this->load->library('session');
        $this->load->database();
        parent:: __construct();
    }


    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    /**
     * @return boolean
     */
    public function login(){

        $query = $this->db->select()->from('login')->where(array('login'=>$this->login,'senha'=> $this->senha))->get();
        if($query->num_rows() != 0 ){
            $this->setIdUser($query->result()[0]->id_user);

            return true;
        }else{
            return false;
        }

    }
    public function are_logged(){
        if($this->session->id != null){
            return true;
        }else{
            return false;
        }
    }
    public function logout(){
        $this->session->unset_userdata('id_user');
        $this->session->sess_destroy();
    }
    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->session->id = $id_user;
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }
}