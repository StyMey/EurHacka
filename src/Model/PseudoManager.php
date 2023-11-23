<?php

namespace App\Model;

use PDO;
use App\Model\AbstractManager;

class PseudoManager extends AbstractManager
{
    public const TABLE = 'user';

    public function insert(array $user): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`pseudo`) 
        VALUES (:pseudo)");
        $statement->bindValue('pseudo', $user['pseudo'], PDO::PARAM_STR);

        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }
}
