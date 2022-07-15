<?php
class CustomerModel extends Model
{
  public function getUsers()
  {
    $sql = "select * from $this->table";
    $user = $this->db->getAll($sql);
    return $user;
  }

  public function getUser($username)
  {
    $sql = "select * from $this->table where username = " . '"' . "$username" . '"';
    $user = $this->db->getRow($sql);
    return $user;
  }
}