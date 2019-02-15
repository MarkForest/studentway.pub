<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_prices_block`.
 */
class m181224_082420_create_tour_prices_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_prices_block', [
            'id' => $this->primaryKey(),
            'title_big_head' => $this->string(255),
            'title_first' => $this->string(255),
            'price_first' => $this->string(255),
            'btn_rate_first' => $this->string(255),
            'little_text_first' => $this->string(255),
            'title_second' => $this->string(255),
            'price_second' => $this->string(255),
            'btn_rate_second' => $this->string(255),
            'little_text_second' => $this->string(255),
            'btn_first_text' => $this->string(255),
            'btn_second_text' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_prices_block');
    }
}
