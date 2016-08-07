<?php

namespace app\controllers;

use Yii;
use app\models\TransInfoEn;
use app\models\TransInfoDe;
use app\models\TransInfoTr;
use app\models\TransInfoPl;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Html;
use yii\filters\VerbFilter;

/**
 * TransInfoController implements the CRUD actions for TransInfoDe model.
 */
class TransInfoController extends Controller
{
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
     * crawls rz info pages into db.
     * @return mixed
     */	
	
 public function actionCrawl()
    {
		// // link to single news feed
		// $url='http://tr.riotzone.net/info/info/index.php?obj=cat&id=';
		// // last news article id
		// // will start by it and go down $i--
		// $i=80;
		// while($i>=0){ 
			// // get html file 
			// $html = \garyjl\simplehtmldom\SimpleHtmlDom::file_get_html($url.$i); 
			// // get content html container
			// $mod = $html->find("div.column-right-pad",0);
			// // check if theres any content
			// if(strlen($mod->find('div.page-content',0)->find('table',0))>2){
				// //download images and replace src to local
				// // foreach($mod->find('img') as $img){
					// // $localpath='news/img/';
					// // $remoteurl = $img->src;
					// // $name = basename($remoteurl);
					// // @file_put_contents("news/img/$name", @file_get_contents("http://en.riotzone.net/info/pictures/image/$name"));
					// // $img->src =  "news/img/$name";
				// // }
				// // new news model
				 // $model = new TransInfoTr();
				// // assign data to model
				// // id from counter
				// $model->id=$i;
				// // title
				// $model->title = $mod->find('div.page-title',0)->plaintext;
				// // body
				// $model->body = Html::decode($mod->find('div.page-content',0)->find('table',0)->innertext);

				// $model->save();
			// };
			
			// $i--;
		// }
	
		
        // $dataProvider = new ActiveDataProvider([
            // 'query' => TransInfoTr::find(),
        // ]);

        // return $this->render('index', [
            // 'dataProvider' => $dataProvider,
        // ]);
	}
	
    /**
     * Lists all TransInfoDe models.
     * @return mixed
     */
    // public function actionIndex()
    // {
        // $dataProvider = new ActiveDataProvider([
            // 'query' => TransInfoDe::find(),
        // ]);

        // return $this->render('index', [
            // 'dataProvider' => $dataProvider,
        // ]);
    // }    
	public function actionIndex($lng='En')
    {	
		
		$m0del = 'app\models\TransInfo'.$lng;
		// $m0del = 'app\models\TransInfoDe';
		$m0del = new $m0del;
        $dataProvider = new ActiveDataProvider([
            'query' => $m0del::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransInfoDe model.
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
     * Creates a new TransInfoDe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TransInfoDe();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TransInfoDe model.
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
     * Deletes an existing TransInfoDe model.
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
     * Finds the TransInfoDe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TransInfoDe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TransInfoDe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
