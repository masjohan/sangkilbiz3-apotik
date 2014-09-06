<?php

namespace ext\sales\models;

use Yii;

/**
 * This is the model class for table "ext_sales".
 *
 * @property integer $id_sales
 * @property string $dokter
 * @property string $resep
 * @property string $extra1
 */
class ExtSales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ext_sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id_sales'], 'required'],
            [['id_sales'], 'integer'],
            [['dokter', 'resep', 'extra1'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sales' => 'Id Sales',
            'dokter' => 'Dokter',
            'resep' => 'Resep',
            'extra1' => 'Extra1',
        ];
    }
}
