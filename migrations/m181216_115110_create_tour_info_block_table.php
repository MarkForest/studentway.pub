<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_info_block`.
 */
class m181216_115110_create_tour_info_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_info_block', [
            'id' => $this->primaryKey(),
            'title_big_head'=>$this->string(255),
            'title_first'=>$this->string(255),
            'description_first'=>$this->text(),
            'title_second'=>$this->string(255),
            'description_second'=>$this->text(),
            'title_third'=>$this->string(255),
            'description_third'=>$this->text(),
            'title_four'=>$this->string(255),
            'description_four'=>$this->text(),
            'title_five'=>$this->string(255),
            'description_five'=>$this->text(),
            'title_six'=>$this->string(255),
            'description_six'=>$this->text(),
            'text_footer'=>$this->string(255),
            'btn_first_text'=>$this->string(255),
            'btn_second_text'=>$this->string(255),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_info_block');
    }
}
