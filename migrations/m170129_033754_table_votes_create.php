<?php

use yii\db\Migration;

class m170129_033754_table_votes_create extends Migration
{
    public function up()
    {
        $this->createTable('vote', [
            'id' => $this->primaryKey(),
            'lang' => $this->string(255)->notNull(),
            'votes' => $this->integer()->defaultValue(0)
        ]);
    }

    public function down()
    {
        echo "m170129_033754_table_votes_create cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
