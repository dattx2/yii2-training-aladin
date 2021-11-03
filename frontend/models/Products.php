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
            [['Description'], 'string'],
            [['category', 'name', 'Link', 'start_date', 'end_date', 'statsu'], 'string', 'max' => 255],
        ];
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
    public function getitem(){ // lấy dữ lieuj sản phẩm đồ vào view
        $data = Products::find();
        return $data;

    }
    public function getProductfromid($id){
        $data = Products::find()->where(['id'=>$id])->asArray()->all();
        return $data;
    }
}
