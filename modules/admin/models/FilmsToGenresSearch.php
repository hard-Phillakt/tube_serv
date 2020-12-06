<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\FilmsToGenres;

/**
 * FilmsToGenresSearch represents the model behind the search form of `app\modules\admin\models\FilmsToGenres`.
 */
class FilmsToGenresSearch extends FilmsToGenres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'films_id', 'genres_id'], 'integer'],
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
        $query = FilmsToGenres::find();

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
            'id' => $this->id,
            'films_id' => $this->films_id,
            'genres_id' => $this->genres_id,
        ]);

        return $dataProvider;
    }
}
