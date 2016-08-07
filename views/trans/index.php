<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			
			'str_'.\Yii::$app->user->identity->dst,
			'str_'.\Yii::$app->user->identity->src,
						
            //'strid',
            // 'str_ru',
            //'str_en',
            //'str_de',
            //'str_tr',
            // 'str_pl',
            // 'str_pt',
            // 'str_es',
             'src_file',

		['class' => \yii\grid\ActionColumn::className(),
	'template'=>'{view}  {update}',
					  'buttons' => [
					'view' => function ($url, $model) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
									'title' => Yii::t('app', 'view'),
										
									  'format' => 'raw','target'=>'_blank'
						]);
					},
					'update' => function ($url, $model) {
						return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
									'title' => Yii::t('app', 'update'),
										
									  'format' => 'raw','target'=>'_blank'
						]);
					}
				  ],
           'urlCreator'=>function($action, $model, $key, $index){
                  $url=($action=='view')?$url=[$action,'id'=>$model['strid']]
                       :$url=['/trans/update', 'id' => $key ];
					   return $url;
               },
           'template'=>'{view}  {update}',
       ]
		// ['class' => \yii\grid\ActionColumn::className(),
	// 'template'=>'{view}  {update}',
           // 'urlCreator'=>function($action, $model, $key, $index){
                   // return ($action=='view')?[$action,'id'=>$model['strid'], ['target'=>'_blank']]
                       // :['/trans/update', 'id' => $key, "index" => $index , ['target'=>'_blank']];
               // },
           // 'template'=>'{view}  {update}',
       // ]
			
			
			
        ],
    ]); ?>

</div>
