<?php

namespace app\models;

use app\repository\UsersRepository;
use yii\base\Model;

class ChangeLoginModel extends Model
{
    public $login;

    public function rules()
    {
        return [
            [['login'], 'required'],
            ['login', 'validateLogin'],

        ];
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UsersRepository::getUserByLogin($this->login);
            if ($user) {
                $this->addError($attribute, 'такое имя пользователя уже занято');
            }
        }
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