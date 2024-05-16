<?php

namespace app\controllers;


use app\entity\Basket;
use app\entity\Price;
use app\models\BasketForm;
use app\models\DelPriceForm;
use app\models\NewsForm;
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
        if (!empty($model)) {
            $model->delete();
            $this->redirect('/job/price');
        }
        return $this->render('deletePrice', ['model' => $model]);
    }

    public function actionBasket()
    {
        $user_id = Yii::$app->user->id;
        $price = JobRepository::getBasketUsId($user_id);
//        var_dump($price);
        $cart = [];
        foreach ($price as $item){
            $cart[] = JobRepository::getPriceByPriceId($item->price_id);
        }



        return $this->render('basket', ['cart' => $cart, 'price' => $price]);
    }

    public function actionCreateBasket($id)
    {
        JobRepository::createBasket(
            $id,
            Yii::$app->user->id
        );
        return $this->redirect('/job/basket');
    }

    public function actionDeleteBasket($id)
    {
        $model = JobRepository::getBasketById($id);
        if (!empty($model)) {
            $model->delete();
            $this->redirect('/job/basket');
        }
        return $this->render('deleteBasket', ['model' => $model]);
    }

    public function actionAbout()
    {
        $this->view->title = 'О нас';
        return $this->render('about');
    }

    public function actionMessage($user_id)
    {
        $model = new NewsForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            JobRepository::createMessage(
                $model->user_id = $user_id,
                $model->message
            );
            return $this->redirect('/job/news');
        }

        return $this->render('message', ['model' => $model]);
    }

    public function actionNews()
    {
        $news = JobRepository::getNews();
        foreach ($news as $item){
            $user = UsersRepository::getUserById($item->user_id);
        }


        return $this->render('news', ['news' => $news, 'user' => $user]);
    }

    public function actionDeleteMessage($id)
    {
        $model = JobRepository::getNewsById($id);
        if (!empty($model)) {
            $model->delete();
            $this->redirect('/job/news');
        }
        return $this->render('deleteMessage', ['model' => $model]);
    }

    public function actionMusic()
    {
        return $this->render('music');
    }
}