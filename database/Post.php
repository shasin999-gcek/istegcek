<?php
/**
 * Created by PhpStorm.
 * User: shasin
 * Date: 15/8/19
 * Time: 5:43 PM
 */

class Post
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


}