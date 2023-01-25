<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $created_date
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['created_date'], 'safe'],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_date' => 'Created Date',
        ];
    }
}
