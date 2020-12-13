<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Serials;

/**
 * SerialsSearch represents the model behind the search form of `app\modules\admin\models\Serials`.
 */
class SerialsSearch extends Serials
{

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'skeeks\yii2\slug\SlugBehavior',
                'slugAttribute' => 'slug',                      //The attribute to be generated
                'attribute' => 'title',                          //The attribute from which will be generated
                // optional params
                'maxLength' => 64,                              //Maximum length of attribute slug
                'minLength' => 3,                               //Min length of attribute slug
                'ensureUnique' => true,
                'slugifyOptions' => [
                    'lowercase' => true,
                    'separator' => '-',
                    'trim' => true
                    //'regexp' => '/([^A-Za-z0-9]|-)+/',
                    //'rulesets' => ['russian'],
                    //@see all options https://github.com/cocur/slugify
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent_id'], 'integer'],
            [['title', 'original_title', 'slug', 'description', 'content', 'keywords', 'original_url_video', 'proxy_url_video', 'poster_img', 'year', 'publish_date', 'tagline', 'producer', 'views', 'world_premiere', 'release_date_in_russia', 'duration'], 'safe'],
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
        $query = Serials::find();

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
            'parent_id' => $this->parent_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'original_title', $this->original_title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'original_url_video', $this->original_url_video])
            ->andFilterWhere(['like', 'proxy_url_video', $this->proxy_url_video])
            ->andFilterWhere(['like', 'poster_img', $this->poster_img])
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'publish_date', $this->publish_date])
            ->andFilterWhere(['like', 'tagline', $this->tagline])
            ->andFilterWhere(['like', 'producer', $this->producer])
            ->andFilterWhere(['like', 'views', $this->views])
            ->andFilterWhere(['like', 'world_premiere', $this->world_premiere])
            ->andFilterWhere(['like', 'release_date_in_russia', $this->release_date_in_russia])
            ->andFilterWhere(['like', 'duration', $this->duration]);

        return $dataProvider;
    }
}
