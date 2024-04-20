<?php

namespace app\controllers;


use app\entity\Basket;
use app\entity\Price;
use app\models\BasketForm;
use app\models\DelPriceForm;
use app\models\PriceForm;
use app\repository\JobRepository;
use app\repository\UsersRepository;
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
        return $this->render('index', ['price' => JobRepository::getPrices()]);
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
                $model->prices,
                $model->last,
            );
            return $this->redirect('/job/price');
        }
        return $this->render("createPrice", [
            'model' => $model
        ]);
    }

    public function actionDeletePrice($id)
    {
        $model = JobRepository::getPriceById($id);
        if (!empty($model)){
            $model->delete();
            $this->redirect('/job/price');
        }
        return $this->render('deletePrice', ['model' => $model]);
    }

    public function actionBasket()
    {
        $user_id = Yii::$app->user->id;
        $price = Basket::find()->where(['user_id' => $user_id])->one();
        return $this->render('basket', ['user' => Yii::$app->user->id, 'price' => $price]);
    }

    public function actionCreateBasket($id)
    {
        $model = new BasketForm();
        if (!empty($model)) {
            JobRepository::createBasket(
                $model->price_id = $id,
                $model->user_id = Yii::$app->user->id
            );
            return $this->redirect('/job/basket');
        }
        return $this->render('createBasket', ['model' => $model]);
    }
}