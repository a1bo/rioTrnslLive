<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\UploadedFile;
// use garyjl\simplehtmldom;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
   public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),

                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ], [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Crawls data from riotzone.net/info/news/
     *
     * @param integer $id
     * @return mixed
     */
    public function actionCrawl()
    {
		// // link to single news feed
		// $url='http://en.riotzone.net/info/news/?show=news&id=';
		// // last news article id
		// // will start by it and go down $i--
		// $i=311;
		// while($i>=0){ 
			// // get html file 
			// $html  = \garyjl\simplehtmldom\SimpleHtmlDom::file_get_html($url.$i); 
			// // get content html container
			// $mod = $html->find('div[class=content]',0);
			// // check if theres any content
			// if(count($mod)!=0){
				// //download images and replace src to local
				// foreach($mod->find('img') as $img){
		// $localpath='news/img/';
		// $remoteurl = $img->src;
		// $name = basename($remoteurl);
		// @file_put_contents("news/img/$name", @file_get_contents("http://en.riotzone.net/info/pictures/image/$name"));
		// $img->src =  "news/img/$name";

				// }
				// // new news model
				// $model = new News();
				// // assign data to model
				// // date
				// $model->date=Html::decode(Html::decode($mod->find('h2',0)->children(1)->plaintext));
				// // id from counter
				// $model->id=$i;
				// // title
				// $model->title=Html::encode($mod->find('h2',0)->children(0)->plaintext);
				// // body
				// $model->body=$mod->children(1)->innertext;
				
				// // $model->body=preg_replace('/^(http:\/\/www.riotzone.net\/)/', '', $mod->children(1)->find('img',0)->src);
				// // $mod->children(1)->find('img',0)->src;
				// $model->save();
				
			// };
			// $i--;
		// }
		
			$searchModel = new NewsSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
	}

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
