<?php

namespace app\controllers;


use app\models\PriceForm;
use app\repository\JobRepository;
use Yii;
use yii\web\Controller;

class JobController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionIndex()
    {
        $this->view->title = 'Главная страница';
        return $this->render('index');
    }

    public function actionPrice()
    {
        $this->view->title = 'Price';
        return $this->render('price', ['price' => JobRepository::getPrices()]);
    }

    public function actionCreatePrice()
    {
        $model = new PriceForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            JobRepository::createPrice(
                $model->title,
                $model->description,
                $model->price,
            );
            return $this->goHome();
        }
        return $this->render("createPrice", [
            'model' => $model
        ]);
    }


}