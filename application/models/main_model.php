<?php

class Main_model extends CI_Model{
  public function test_main(){
    echo 'this is model function';
  }

  function insert_data($data)
  {
    $this->db->insert("tb_user", $data);

  }

  function fetch_data()
  {
    $query = $this->db->get("tb_user");
    //select * from tb_user
    return $query;
  }

  function delete_data($id)
  {
    $this->db->where("id",$id);
    $this->db->delete("tb_user");
    //DELETE FROM tb_user WHERE id=$id
  }

  function fetch_single_data($id)
  {
    $this->db->where("id",$id);
    $query = $this->db->get("tb_user");
    return $query;
    //SELECT * FROM tb_user WHERE id = '$id'
  }

  function update_data($data, $id)
  {
    $this->db->where("id", $id);
    $this->db->update("tb_user", $data);
    //UPDATE tb user SET first_name = '$first_name', last_name='$last_name' WHERE id='$id'
  }


}

?>
