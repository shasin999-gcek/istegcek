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
            $sql_query = 'insert into users (login_user_id, user_type, password) values (:username, :user_type, :password)';
            $stmt = $this->pdo->prepare($sql_query);
            $stmt->execute([
                ':username' => $user['username'],
                ':user_type' => 'ADMIN',
                ':password' => password_hash($user['password'], PASSWORD_DEFAULT)
            ]);
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

    public function authenticate($username, $password)
    {
        try {
            $sql_query = 'select * from users where login_user_id = ?';
            $stmt = $this->pdo->prepare($sql_query);
            $stmt->execute(array($username));
            if($stmt->rowCount() > 0) {
               $user = $stmt->fetch(PDO::FETCH_ASSOC);
               $hashed_password = $user['password'];
               if(password_verify($password, $hashed_password)) {
                   return true;
               }
               else {
                   return false;
               }
            }
            else {
                return false;
            }
        }
        catch (PDOException $e) {

        }
    }

}