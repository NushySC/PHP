<?php



class Auth
{
    protected static $users = []; // list of users
    
    public static function addUser($user)
    {
        static::$users[] = $user;
    }

    public static function getUsers()
    {
        return static::$users;
    }

    protected static function getCurrentUserId()
    {
        if (!empty($_SESSION['user_id'])) {
            return $_SESSION['user_id'];
        } else {
            return null;
        }
    }

    public static function getCurrentUser()
    {
        $user_id = static::getCurrentUserId();

        foreach(static::$users as $user) {
            if($user_id == $user['user_id']) {
                return $user;
            } 
        }
        return null;
    }
}

