<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans2".
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
class Trans2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strid'], 'required'],
            [['strid'], 'string', 'max' => 32],
            [['str_ru'], 'string', 'max' => 762],
            [['src_file'], 'string', 'max' => 76],
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
