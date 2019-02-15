<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_footer_block`.
 */
class m181224_141915_create_tour_footer_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_footer_block', [
            'id' => $this->primaryKey(),
            'title_first' => $this->string(255),
            'description_first' => $this->text(),
            'title_second' => $this->string(255),
            'name_link_first' => $this->string(255),
            'href_link_first' => $this->string(255),
            'name_link_second' => $this->string(255),
            'href_link_second' => $this->string(255),
            'name_link_third' => $this->string(255),
            'href_link_third' => $this->string(255),
            'name_link_four' => $this->string(255),
            'href_link_four' => $this->string(255),
            'title_third' => $this->string(255),
            'description_third' => $this->text(),
            'link_footer' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_footer_block');
    }
}
