<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m211102_063614_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'category'=>$this->String(),
            'name'=> $this->String(),
            "Description"=>$this->String(),
            'Link'=>$this->String(),
            'start_date' =>$this->String(),
            'end_date'=>$this->String(),
            'statsu' => $this->String(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
