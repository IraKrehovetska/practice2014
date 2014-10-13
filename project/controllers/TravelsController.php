<?php

namespace app\controllers;

use Yii;
use app\models\Travel;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TravelsController implements the CRUD actions for Travel model.
 */
class TravelsController extends Controller
{
    public $layout='layout';
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Travel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Travel::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Travel model.
     * @param integer $travel_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionView($travel_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($travel_id, $user_id),
        ]);
    }

    /**
     * Creates a new Travel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Travel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'travel_id' => $model->travel_id, 'user_id' => $model->user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Travel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $travel_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionUpdate($travel_id, $user_id)
    {
        $model = $this->findModel($travel_id, $user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'travel_id' => $model->travel_id, 'user_id' => $model->user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Travel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $travel_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionDelete($travel_id, $user_id)
    {
        $this->findModel($travel_id, $user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Travel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $travel_id
     * @param integer $user_id
     * @return Travel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($travel_id, $user_id)
    {
        if (($model = Travel::findOne(['travel_id' => $travel_id, 'user_id' => $user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
