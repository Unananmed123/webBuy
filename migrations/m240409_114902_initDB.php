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
                'admin' => $this->boolean()->defaultValue(false)->notNull(),
            ]
        );
        $password = password_hash("owner", PASSWORD_DEFAULT);
        $this->insert('users', ['login' => 'owner', 'password' => $password, 'admin' => true]);
        $password = password_hash("admin", PASSWORD_DEFAULT);
        $this->insert('users', ['login' => 'admin', 'password' => $password, 'admin' => true]);


        $this->createTable(
            'news',
            [
                'id' => $this->primaryKey(),
                'user_id' => $this->integer()->notNull(),
                'message' => $this->string()->notNull(),
                'date' => $this->timestamp()->defaultExpression("NOW()"),
            ]
        );
        $this->createTable('messages',
            [
                'id' => $this->primaryKey(),
                'user_id' => $this->integer()->notNull(),
                'message' => $this->string()->notNull(),
            ]


        );
        $this->createTable(
            'basket',
            [
                'id' => $this->primaryKey(),
                'price_id' => $this->integer()->notNull(),
                'user_id' => $this->integer()->notNull(),
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
        $this->addForeignKey('message_to_users_fk',
            'messages', 'user_id',
            'users', 'id'
        );
        $this->addForeignKey('prise_to_basket_fk',
            'basket',
            'price_id',
            'price',
            'id',
            'CASCADE',
            'CASCADE',

        );
        $this->addForeignKey('users_to_basket_fk',
            'basket',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE',

        );
//        $this->addForeignKey('news_to_users_fk',
//            'news',
//            'user_id',
//            'users',
//            'id',
//            'CASCADE',
//            'CASCADE',
//        );
}

    public function safeDown()
    {
        $this->dropTable('news');
        $this->dropTable('price');
        $this->dropTable('basket');
        $this->dropTable('users');
        $this->dropTable('messages');

    }


}
