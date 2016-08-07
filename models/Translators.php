<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "translators".
 *
 * @property integer $id
 * @property string $src
 * @property string $dst
 *
 * @property User $id0
 */
class Translators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'src', 'dst'], 'required'],
            [['id'], 'integer'],
            [['src', 'dst'], 'string', 'max' => 2],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'dst' => 'Dst',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
