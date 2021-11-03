<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Categories".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $descriptipn
 * @property string|null $status
 * @property string|null $date_create
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create'], 'safe'],
            [['name', 'descriptipn', 'status'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descriptipn' => 'Descriptipn',
            'status' => 'Status',
            'date_create' => 'Date Create',
        ];
    }
    public function getName(){

        // đổ data ra dropdownlist
//        $getdata = \app\models\Categories::find()->asArray()->all();
//        $data = \yii\helpers\ArrayHelper::map($getdata,'name','name');

        $data = Categories::find()
            ->where(['status'=>'0'])
            ->asArray()->all();
        return $data;

    }
}
