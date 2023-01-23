<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $company_id
 * @property string|null $company_name
 * @property string|null $company_email
 * @property string|null $company_address
 * @property string|null $company_created_date
 * @property string|null $company_start_date
 * @property string|null $logo
 *
 * @property Branches[] $branches
 * @property Departments[] $departments
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_created_date', 'company_start_date'], 'safe'],
            [['company_name', 'company_email'], 'string', 'max' => 100],
            [['company_address'], 'string', 'max' => 255],
            [['logo'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_address' => 'Company Address',
            'company_created_date' => 'Company Created Date',
            'company_start_date' => 'Company Start Date',
            'logo' => 'Logo',
        ];
    }

    /**
     * Gets query for [[Branches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBranches()
    {
        return $this->hasMany(Branches::class, ['companies_company_id' => 'company_id']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::class, ['companies_company_id' => 'company_id']);
    }
}
