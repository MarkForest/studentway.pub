<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_review_block`.
 */
class m181223_121019_create_tour_review_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_review_block', [
            'id' => $this->primaryKey(),
            'text_review_first' => $this->text(),
            'name_first' => $this->text(),
            'text_review_second' => $this->text(),
            'name_second' => $this->text(),
            'text_review_third' => $this->text(),
            'name_third' => $this->text(),
            'text_review_four' => $this->text(),
            'name_four' => $this->text(),
            'text_review_five' => $this->text(),
            'name_five' => $this->text(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_review_block');
    }
}
