<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $category
 * @property string|null $name
 * @property string|null $Description
 * @property string|null $Link
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $statsu
 */
class Products extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'name', 'Description', 'Link', 'start_date', 'end_date', 'statsu'], 'string', 'max' => 10000],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['Name','Last_Name','Email'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'name' => 'Name',
            'Description' => 'Description',
            'Link' => 'Link',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'statsu' => 'Statsu',
        ];
    }
}
