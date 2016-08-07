<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trans;

/**
 * TransSearch represents the model behind the search form about `app\models\Trans`.
 */
class TransSearch extends Trans
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strid', 'str_ru', 'str_en', 'str_de', 'str_tr', 'str_pl', 'str_pt', 'str_es', 'src_file'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Trans::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'sort'=> ['defaultOrder' => ['src_file'=>SORT_ASC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'strid', $this->strid])
            ->andFilterWhere(['like', 'str_ru', $this->str_ru])
            ->andFilterWhere(['like', 'str_en', $this->str_en])
            ->andFilterWhere(['like', 'str_de', $this->str_de])
            ->andFilterWhere(['like', 'str_tr', $this->str_tr])
            ->andFilterWhere(['like', 'str_pl', $this->str_pl])
            ->andFilterWhere(['like', 'str_pt', $this->str_pt])
            ->andFilterWhere(['like', 'str_es', $this->str_es])
            ->andFilterWhere(['like', 'src_file', $this->src_file])
			//->orderBy('src_file')
			;

        return $dataProvider;
    }
}
