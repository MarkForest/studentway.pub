<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_about_us_block`.
 */
class m181221_172432_create_tour_about_us_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_about_us_block', [
            'id' => $this->primaryKey(),
            'title_big_head'=>$this->string(255),
            'text_head'=>$this->text(),
            'title_big_footer'=>$this->string(255),
            'title_first'=>$this->string(255),
            'description_first'=>$this->string(255),
            'title_second'=>$this->string(255),
            'description_second'=>$this->string(255),
            'title_third'=>$this->string(255),
            'description_third'=>$this->string(255),
            'title_four'=>$this->string(255),
            'description_four'=>$this->string(255),
            'title_five'=>$this->string(255),
            'description_five'=>$this->string(255),
            'text_footer'=>$this->text(),
            'btn_first_text'=>$this->string(255),
            'btn_second_text'=>$this->string(255),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_about_us_block');
    }
}
