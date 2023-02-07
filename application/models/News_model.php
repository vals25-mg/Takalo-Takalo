<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
  public function get_info(){
    return array('auteur' => 'Rado Fanomezana',
                  'date' => '24/08/12',
                  'email' => 'email@ndd.fr');
  }

  public function getin_table($table){
    $query = "SELECT prenom,email,password,tel,img,est_admin FROM %s";
    $sql = sprintf($query,$table);
    $result = $this->db->query($sql);
    $table = array();
    $i = 0;
    foreach ($result->result_array() as $row) {
        $lists = array('prenom' => $row['prenom'],
                        'pwd' => $row['password'],
                        'email' => $row['email'],
                        'tel' => $row['tel'],
                        'img' => $row['img'],
                        'admin' => $row['est_admin']);
        $table[$i] = $lists;
        $i++;
    }
    return $table;
  }
  public function inscription($table,$nom,$prenom,$email,$password,$tel,$img,$est_admin,$date_inscription){
    $query = "INSERT INTO %s (nom,prenom,email,password,tel,img,est_admin,date_inscription) values (%s,%s,%s,%s,%s,%s,%d,%s)";
    $sql = sprintf($query,$table,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email),$this->db->escape($password),$this->db->escape($tel),$this->db->escape($img),$this->db->escape($est_admin),$this->db->escape($date_inscription));
    $this->db->query($sql);
  }
}