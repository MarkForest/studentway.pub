<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_our_services_block`.
 */
class m181220_172617_create_tour_our_services_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_our_services_block', [
            'id' => $this->primaryKey(),
            'title_big_head'=>$this->string(255),
            'title_first'=>$this->string(255),
            'description_first_first'=>$this->string(255),
            'description_first_second'=>$this->string(255),
            'description_first_third'=>$this->string(255),
            'title_second'=>$this->string(255),
            'description_second_first'=>$this->string(255),
            'description_second_second'=>$this->string(255),
            'description_second_third'=>$this->string(255),
            'description_second_four'=>$this->string(255),
            'title_third'=>$this->string(255),
            'description_third_first'=>$this->string(255),
            'description_third_second'=>$this->string(255),
            'title_four'=>$this->string(255),
            'btn_first_text'=>$this->string(255),
            'btn_second_text'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_our_services_block');
    }
}
