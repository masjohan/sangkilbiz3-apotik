<?php

namespace biz\master\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use biz\master\models\Orgn as OrgnModel;

/**
 * Orgn represents the model behind the search form about `biz\master\models\Orgn`.
 */
class Orgn extends OrgnModel
{
    public function rules()
    {
        return [
            [['id_orgn', 'create_by', 'update_by'], 'integer'],
            [['cd_orgn', 'nm_orgn', 'create_at', 'update_at'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OrgnModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_orgn' => $this->id_orgn,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'cd_orgn', $this->cd_orgn])
            ->andFilterWhere(['like', 'nm_orgn', $this->nm_orgn])
            ->andFilterWhere(['like', 'create_at', $this->create_at])
            ->andFilterWhere(['like', 'update_at', $this->update_at]);

        return $dataProvider;
    }
}
