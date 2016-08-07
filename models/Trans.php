<?php

namespace app\models;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**
 * This is the model class for table "trans".
 *
 * @property string $strid
 * @property string $str_ru
 * @property string $str_en
 * @property string $str_de
 * @property string $str_tr
 * @property string $str_pl
 * @property string $str_pt
 * @property string $str_es
 * @property string $src_file
 */
class Trans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

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
    public static function tableName()
    {
        return 'trans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strid'], 'required'],
            [['strid'], 'string', 'max' => 32],
            [['str_ru', 'str_en', 'str_de', 'str_tr', 'str_pl', 'str_pt', 'str_es'], 'string', 'max' => 762],
            [['src_file'], 'string', 'max' => 76]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'strid' => 'Strid',
            'str_ru' => 'Str Ru',
            'str_en' => 'Str En',
            'str_de' => 'Str De',
            'str_tr' => 'Str Tr',
            'str_pl' => 'Str Pl',
            'str_pt' => 'Str Pt',
            'str_es' => 'Str Es',
            'src_file' => 'Src File',
        ];
    }
}
