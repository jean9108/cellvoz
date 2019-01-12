<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datosclien;

/**
 * DatosclienSearch represents the model behind the search form of `app\models\Datosclien`.
 */
class DatosclienSearch extends Datosclien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcliente', 'edad', 'saldo'], 'integer'],
            [['area'], 'safe'],
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
        $query = Datosclien::find();

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
            'idcliente' => $this->idcliente,
            'edad' => $this->edad,
            'saldo' => $this->saldo,
        ]);

        $query->andFilterWhere(['like', 'area', $this->area]);

        return $dataProvider;
    }
}
