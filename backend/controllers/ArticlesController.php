<?php 
namespace backend\controllers;


use yii\rest\ActiveController;

class ArticlesController extends ActiveController
{
    public $modelClass = 'backend\models\Articles';

    public function behaviors()
    {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::className(),
                'only' => ['index', 'view'],
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
    }


}




?>