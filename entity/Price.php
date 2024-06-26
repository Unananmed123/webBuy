<?php

namespace app\entity;

use app\repository\JobRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Price extends ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return new static(JobRepository::getPriceById($id));
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey(){}
    public static function findIdentityByAccessToken($token, $type = null){}
    public function validateAuthKey($authKey){}
}