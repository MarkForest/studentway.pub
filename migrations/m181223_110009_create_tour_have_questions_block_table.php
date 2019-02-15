<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_have_questions_block`.
 */
class m181223_110009_create_tour_have_questions_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_have_questions_block', [
            'id' => $this->primaryKey(),
            'title_big_head' =>$this->text(),
            'btn_message_text' =>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_have_questions_block');
    }
}
