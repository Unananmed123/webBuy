<?php

namespace app\repository;

use Yii;

class RoleRepository
{
    public static function newAdmin($userId)
    {
        $auth = Yii::$app->authManager;
        if (Yii::$app->user->can('owner')) {
            $auth->assign($auth->getRole('admin'), $userId);
        }
    }

    public static function deleteRoleAdmin($userId)
    {
        $auth = Yii::$app->authManager;
        if (Yii::$app->user->can('owner')) {
            $auth->revoke($auth->getRole('admin'), $userId);
        }

    }
}