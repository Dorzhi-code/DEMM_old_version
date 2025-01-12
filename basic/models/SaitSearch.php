<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sait;

/**
 * SaitSearch represents the model behind the search form of `app\models\Sait`.
 */
class SaitSearch extends Sait
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sait_id', 'sait_lecture', 'sait_lecture_type', 'sait_tenor'], 'integer'],
            [['sait_surname', 'sait_name', 'sait_patronymic', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_position', 'sait_status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Sait::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sait_id' => $this->sait_id,
            'sait_lecture' => $this->sait_lecture,
            'sait_lecture_type' => $this->sait_lecture_type,
            'sait_tenor' => $this->sait_tenor,
        ]);

        $query->andFilterWhere(['like', 'sait_surname', $this->sait_surname])
            ->andFilterWhere(['like', 'sait_name', $this->sait_name])
            ->andFilterWhere(['like', 'sait_patronymic', $this->sait_patronymic])
            ->andFilterWhere(['like', 'sait_surname_latn', $this->sait_surname_latn])
            ->andFilterWhere(['like', 'sait_name_latn', $this->sait_name_latn])
            ->andFilterWhere(['like', 'sait_work', $this->sait_work])
            ->andFilterWhere(['like', 'sait_position', $this->sait_position])
            ->andFilterWhere(['like', 'sait_status', $this->sait_status]);

        return $dataProvider;
    }
}
