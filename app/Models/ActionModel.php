<?php

namespace App\Models;

use CodeIgniter\Model;

class ActionModel extends Model
{
    public function cek_username($username)
    {
        $query = "SELECT * from user where username ='".$username."' LIMIT 1";
        $db = db_connect();
        $result = $db->query($query);
        return $result->getResultArray();
    }

}