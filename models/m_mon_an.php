<?php
require_once "database.php";

class M_mon_an
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function docMonAn()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM mon_an");

        $stmt->execute();

        $mon_ans = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $mon_ans;
    }
}
