<?php

namespace app\controllers;

use app\models\ChangeLoginForm;
use app\models\UsernameModel;
use app\repository\RoleRepository;
use app\repository\UsersRepository;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::class,
              'only' => ['admin'],
              'rules' => [
                  [
                      'actions' => ['admin'],
                      'allow' => true,
                      'roles' => ['admin', 'owner'],
                  ],
              ]
          ]
        ];
    }
    public function actionAdmin()
    {
        $users = UsersRepository::getUsers();
        $userModel = new UsersRepository();
        return $this->render('admin', ['users' => $users, 'userModel' => $userModel]);
    }

    public function actionDeleteUser($id)
    {
        $model = UsersRepository::getUserById($id);
        if (!empty($model)) {
            $model->delete();
            $this->redirect('/admin/admin');
        }
        return $this->render('deleteUser');
    }

    public function actionNewAdmin($id)
    {
        $model = UsersRepository::createNewAdmin($id);
        $role = RoleRepository::newAdmin($id);
        if (!empty($model)) {
            return $this->redirect('/admin/admin');

        }
        return $this->render('newAdmin', ['model' => $model]);
    }

    public function actionDeleteAdmin($id)
    {
        $model = UsersRepository::deleteAdmin($id);
        $role = RoleRepository::deleteRoleAdmin($id);

        if (!empty($model)) {
            return $this->redirect('/admin/admin');

        }
        return $this->render('deleteAdmin', ['model' => $model]);
    }

    public function actionUsername($id)
    {
        $model = new UsernameModel();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = UsersRepository::changeLogin($id, $model->login);
            $this->redirect('/admin/admin');
        }
        return $this->render('username', ['model' => $model, 'user' => $user]);
    }
}