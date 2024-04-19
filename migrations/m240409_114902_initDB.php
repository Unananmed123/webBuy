<?php

use yii\db\Migration;

/**
 * Class m240409_114902_initDB
 */
class m240409_114902_initDB extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'users',
            [
                'id' => $this->primaryKey(),
                'login' => $this->string(50)->notNull(),
                'password' => $this->string()->notNull(),
                'avatar' => $this->string()
            ]
        );

        $this->createTable(
            'basket',
            [
                'id' => $this->primaryKey(),
                'price_id' => $this->integer()->notNull(),
            ]
        );
        $this->createTable('price',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'last' => $this->integer()->notNull(),
            'photo' => $this->string(),
        ]);

        $this->addForeignKey('basket_to_price_fk',
            'basket',
            'price_id',
            'price',
            'id',
            'CASCADE',
            'CASCADE',

        );}

    public function safeDown()
    {
        $this->dropTable('basket');
        $this->dropTable('price');
        $this->dropTable('users');
    }


}
