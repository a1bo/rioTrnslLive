<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_info_de".
 *
 * @property integer $id
 * @property string $date
 * @property string $title
 * @property string $body
 */
class TransInfoDe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_info_de';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['date', 'title', 'body'], 'string'],
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
