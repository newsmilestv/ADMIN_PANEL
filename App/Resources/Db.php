<?php 

namespace App\Resources;

use App\Exceptions\DbConnectEx;
use App\Exceptions\SqlException;
use App\Traits\Singleton;
use PDO;

class Db
{
    use Singleton;

    protected $dbh;

    public function __construct()
    {
        try {
            $config = require __DIR__ . '/config.php';
            $this->dbh = new PDO($config['dsn'], $config['user'], $config['password']);
        } catch (\Exception $ex) {
            throw new DbConnectEx('Ошибка подключения к БД!!!', 2);
        }
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function query($class, string $sql, array $data = [])
    {
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($data);
            $res = $sth->fetchAll(PDO::FETCH_CLASS, $class);
            return $res;
        } catch (\Exception $ex) {
            throw new SqlException($sql, 'Ошибка SQL запроса!!!', 1);
        }
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}