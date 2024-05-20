<?php

namespace app\controllers;

use app\entity\Users;
use app\models\ChangeLoginModel;
use app\models\ChangePasswordModel;
use app\models\RegistrationModel;

use app\models\LoginModel;

use app\repository\UsersRepository;
use Yii;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;

class UserController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['profile', 'login', 'registration'],
                'rules' => [
                    [
                        'actions' => ['profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?']
                    ],
                    [
                        'actions' => ['profile'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['registration'],
                        'allow' => true,
                        'roles' => ['?']
                    ],
                ]
            ]
        ];
    }
    public function actionLogin()
    {
        $this->view->title = 'Авторизация';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginModel();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();

        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRegistration()
    {
        $this->view->title = "Регистрация";
        $model = new RegistrationModel();
        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->validate()) {
                $userId = UsersRepository::createUser(
                    $model->login,
                    $model->password,
                );
                if (!empty($model->file)) {
                    $file = $userId . '.' . 'png';
                    $model->file->saveAs('uploads/' . $file);
                }
                if ($userId) {
                    Yii::$app->user->login(Users::findIdentity($userId));
                    return $this->goHome();
                }
            }

        }
        return $this->render('registration', ['model' => $model]);
    }

    public function actionProfile()
    {
        $this->view->title = 'Профиль';
        $model = new LoginModel();
        return $this->render('profile', ['model' => $model]);
    }

    public function actionDeleteUser($id)
    {
        $model = UsersRepository::getUserById($id);
        if (!empty($model)) {
            $model->delete();
            Yii::$app->user->logout();
            $this->redirect('/user/registration');
        }
        return $this->render('deleteUser', ['model' => $model]);
    }

    public function actionChangeLogin($id)
    {
        $model = new ChangeLoginModel();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $loginChange = UsersRepository::changeLogin($id, $model->login);
            if (!empty($loginChange)) {
                return $this->redirect('/user/profile');
            }
        }
        return $this->render('changeLogin', ['model' => $model]);
    }

    public function actionChangePassword($id)
    {
        $model = new ChangePasswordModel();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $passwordChange = UsersRepository::changePassword($id, $model->password);
            if (!empty($passwordChange)){
                return $this->redirect('/user/profile');
            }
        }
        return $this->render('changePassword', ['model' => $model]);
    }
}