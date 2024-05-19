<?php

namespace app\models;

use app\entity\Users;
use app\repository\UsersRepository;
use yii\base\Model;

class ChangePasswordModel extends Model
{
    public $password;
    public $old_password;
    public function rules()
    {
        return [
            [['password', 'old_password'], 'required'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'avatar' => 'Аватар профиля',
            'password' => 'Пароль',
            'Image' => 'Фото',
            'passwordRepeat' => 'Повторённый пароль',
        ];
    }
}