<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property int $location_id
 * @property string|null $zipp_code
 * @property string|null $city
 * @property string|null $province
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['zipp_code'], 'string', 'max' => 20],
            [['city', 'province'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'zipp_code' => 'Zipp Code',
            'city' => 'City',
            'province' => 'Province',
        ];
    }
}
