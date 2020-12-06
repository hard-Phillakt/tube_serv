<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Film;

/**
 * FilmSearch represents the model behind the search form of `app\modules\admin\models\Film`.
 */
class FilmSearch extends Film
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'publishDate', 'parent_id'], 'integer'],
            [['title', 'name', 'slug', 'description', 'content', 'keywords', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg', 'date'], 'safe'],
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
        $query = Film::find();

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
            'date' => $this->date,
            'publishDate' => $this->publishDate,
            'parent_id' => $this->parent_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'sourceVideo', $this->sourceVideo])
            ->andFilterWhere(['like', 'proxyServerUrlVideo', $this->proxyServerUrlVideo])
            ->andFilterWhere(['like', 'posterImg', $this->posterImg]);

        return $dataProvider;
    }
}
