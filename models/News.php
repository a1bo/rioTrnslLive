<?php

namespace app\models;
use Yii;
use yii\filters\AccessControl;
/**
* This is the model class for table "News".
*
 
*/
class News extends \yii\db\ActiveRecord
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
       ]; 
   }    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['body'], 'string'],
            [['date'], 'string', 'max' => 45],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
