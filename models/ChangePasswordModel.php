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
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if ($this->password == $this->old_password) {
                $this->addError($attribute, 'Новый пароль не должаен совпадать со старым');
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
            'old_password' => 'Старый пароль'
        ];
    }
}