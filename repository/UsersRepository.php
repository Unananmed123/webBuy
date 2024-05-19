<?php

namespace app\repository;



use app\entity\Users;
use Yii;

class UsersRepository
{

    public static function getUserById($id)
    {
        return Users::find()->where(['id' => $id])->one();
    }
    public static function getUserByLogin($login)
    {
        return Users::find()->where(['login' => $login])->one();
    }

    public static function createUser($login, $password)
    {
        $user = new Users();
        $user->login = $login;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->save();
        return $user->id;
    }

    public static function getUsers()
    {
        return Users::find()->all();
    }

    public static function createNewAdmin($id)
    {
        $user = Users::find()->where(['id' => $id])->one();
        $user->admin = 1;
        return $user->update();
    }
    public static function deleteAdmin($id)
    {
        $user = Users::find()->where(['id' => $id])->one();
        $user->admin = 0;
        return $user->update();
    }

    public static function changeLogin($id, $login)
    {
        $user = Users::find()->where(['id' => $id])->one();
        $user->login = $login;
        return $user->update();
    }

    public static function changePassword($id, $password)
    {
        $user = Users::find()->where(['id' => $id])->one();
        $user->validatePassword($password);
        if ($password != $user->password){
            $user->password = password_hash($password, PASSWORD_DEFAULT);
        }
        return $user->update();
    }


}