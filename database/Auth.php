<?php
/**
 * Created by PhpStorm.
 * User: shasin
 * Date: 15/8/19
 * Time: 5:44 PM
 */

class Auth
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create_user($user)
    {
        try {
            $sql_query = 'insert into users (login_user_id, password) values (:username, :password)';
            $stmt = $this->pdo->prepare($sql_query);
            $stmt->execute(
                array(
                    ':username' => $user['username'],
                    ':password' => password_hash($user['password']), PASSWORD_DEFAULT)
            );
        } catch (PDOException $e) {
            die("Some thing wrong");
        }

    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function get_user($username)
    {
        try {
            $sql_query = 'select * from users where login_user_id = ?';
            $stmt = $this->pdo->prepare($sql_query);
            $stmt->execute(array($username));
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Cant fetch user");
        }
    }

}