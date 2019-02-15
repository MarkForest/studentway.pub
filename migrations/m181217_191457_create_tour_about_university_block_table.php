<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_about_university_block`.
 */
class m181217_191457_create_tour_about_university_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_about_university_block', [
            'id' => $this->primaryKey(),
            'title_big_head'=>$this->string(255),
            'title_first'=>$this->string(255),
            'description_first'=>$this->string(255),
            'title_second'=>$this->string(255),
            'description_second'=>$this->string(255),
            'title_third'=>$this->string(255),
            'description_third'=>$this->string(255),
            'title_big_footer'=>$this->string(255),
            'text_footer'=>$this->string(255),
            'btn_message_text'=>$this->string(255),
            'btn_first_text'=>$this->string(255),
            'btn_second_text'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_about_university_block');
    }
}
