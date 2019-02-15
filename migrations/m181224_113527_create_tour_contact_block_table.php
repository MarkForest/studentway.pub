<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_contact_block`.
 */
class m181224_113527_create_tour_contact_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_contact_block', [
            'id' => $this->primaryKey(),
            'title_big_head' => $this->string(255),
            'text_head' => $this->string(255),
            'description_first' => $this->string(255),
            'description_second' => $this->string(255),
            'description_third' => $this->string(255),
            'description_four' => $this->string(255),
            'description_five' => $this->string(255),
            'text_footer' => $this->string(255),
            'link_phone_first' => $this->string(255),
            'link_phone_second' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_contact_block');
    }
}
