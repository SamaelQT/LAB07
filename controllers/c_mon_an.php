<?php
require_once "../models/m_mon_an.php";
require_once "../models/database.php";

$pdo = new PDO('mysql:host=localhost;dbname=ql_nha_hang', 'root', '');

$m_mon_an = new M_mon_an($pdo);

class C_mon_an
{
    public function Hien_thi_mon_an()
    {
        global $m_mon_an; 
        $mon_ans = $m_mon_an->docMonAn();
        return $mon_ans;
    }
    
}
?>
