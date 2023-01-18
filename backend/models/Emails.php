<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property int $id
 * @property string|null $receiver_name
 * @property string|null $receiver_email
 * @property string|null $content
 * @property string|null $attachment
 * @property string|null $subject
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['receiver_name'], 'string', 'max' => 50],
            [['receiver_email'], 'string', 'max' => 200],
            [['attachment', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receiver_name' => 'Receiver Name',
            'receiver_email' => 'Receiver Email',
            'content' => 'Content',
            'attachment' => 'Attachment',
            'subject' => 'Subject',
        ];
    }
}
