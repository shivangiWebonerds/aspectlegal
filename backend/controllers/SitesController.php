<?php

namespace backend\controllers;

use Yii;
use common\models\Sites;
use common\models\SitesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SitesController implements the CRUD actions for Sites model.
 */
class SitesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sites models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SitesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sites model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sites model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sites();

        if ($model->load(Yii::$app->request->post()) ) {
           $imageName = "site_logo_image_".rand();
               $model->logo_image = UploadedFile::getInstance($model,'logo_image');
               
                if(!empty($model->logo_image))
                {
                    
                       $model->logo_image->saveAs('../../public_html/images/sites/'.$imageName.'.'.$model->logo_image->extension);
                       $model->logo_image = $imageName.'.'.$model->logo_image->extension;     
                       $model->save();

                    return $this->redirect(['view', 'id' => $model->id]); 
                }
                else
                {
                       
                     $model->logo_image = 'default_site_logo.png';                            
                     $model->save();
                    return $this->redirect(['view', 'id' => $model->id]); 
               } 
           }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sites model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = $model['logo_image'];
        
        if ($model->load(Yii::$app->request->post())) {

            $imageName = "site_logo_image_".rand();
           $model->logo_image = UploadedFile::getInstance($model,'logo_image');

           if(!empty($model->logo_image)){
                $model->logo_image->saveAs('../../public_html/images/sites/'.$imageName.'.'.$model->logo_image->extension);
                  echo $imageName.'.'.$model->logo_image->extension;
                   $model->logo_image = $imageName.'.'.$model->logo_image->extension;
                   $model->save();
            }else{
                

                $model->logo_image = $image;
                $model->save();
            }
             return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sites model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sites model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Sites the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sites::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
