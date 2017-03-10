<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\EntryForm;

class EntryController extends Controller
{
    // ...现存的代码...

    public function actionEntry()
    {
        $model = new EntryForm;
        return $this->render('entry', ['model' => $model]);
    }

    public function actionData()
    {
        $model = new EntryForm;
        /**
         * if (isset($_POST['FormName'])) {
         *     $model->attributes = $_POST['FormName'];
         *     if ($model->save()) {
         *         // handle success
         *     }
         * }
         */
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据

            // 做些有意义的事 ...

            return $this->render('entry-confirm', ['model' => $model]);
        }
    }


}