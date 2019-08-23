<?php
/**
 * Created by PhpStorm.
 * User: shasin
 * Date: 23/8/19
 * Time: 3:54 PM
 */

class Setting
{
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function appInstalled()
    {
        try {
            $sql = 'update website_settings set value="1" where name="INSTALL_STATUS"';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            die("wrong");
        }
    }
}