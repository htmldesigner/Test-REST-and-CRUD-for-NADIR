<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use api\modules\v1\models\Book;
use api\modules\v1\models\Author;

/**
 * Book Controller API
 *
 */
class BookController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Author';

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        unset($actions['view']);
        unset($actions['index']);
        return $actions;
    }

    protected function verbs(){
        return [
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH','POST'],
            'delete' => ['DELETE'],
            'view' => ['GET'],
            'index'=>['GET'],
        ];
    }

    public function actionIndex()
    {
        $result = $this->modelClass::find()
            ->with(['book'])->asArray()
            ->all();
        return $result;
    }

    public function actionView($id)
    {
        $result = Book::find()
            ->where(['id' => $id])
            ->with('author')->asArray()
            ->all();
        return $result;
    }

    public function actionUpdate($id)
    {
        $model = Book::findOne($id);
        $model->load(Yii::$app->request->post());
        if ($model->validate()) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
            return Yii::$app->response->statusCode = 200;
        } else {
            return $model->errors;
        }

    }

    public function actionDelete($id)
    {
        Book::findOne($id)->delete();
        return Yii::$app->response->statusCode = 200;
    }

}
