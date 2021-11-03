<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
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
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descriptipn', 'status','date_create'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ten',
            'descriptipn' => 'Mô tả',
            'status' => 'Trạng thái',
            'date_create'=>'Ngày tạo'
        ];
    }
    public function getName(){

        // đổ data ra dropdownlist
        $getdata = \app\models\Categories::find()->asArray()->all();
        $data = \yii\helpers\ArrayHelper::map($getdata,'name','name');
        return $data;

    }
}
