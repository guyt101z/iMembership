<?php

class m130701_233551_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user', array(
      'id' => 'pk',
      'first_name' => 'VARCHAR(80) NOT NULL',
      'last_name' => 'VARCHAR(80)',
      'full_name' => 'VARCHAR(160)',
      'address' => 'text',
      'home_phone' => 'INTEGER (10)',
      'cell_phone' => 'INTEGER (10)',
      'group' => 'INTEGER (3)',
      'email' => 'VARCHAR (128) NOT NULL',
      'password' => 'VARCHAR(80)',
		  'created_at' => 'DATETIME DEFAULT NULL',
		  'updated_at' => 'TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
		  'lastvisit' => 'DATETIME DEFAULT NULL',
		  'status'=> 'INTEGER (1) NOT NULL DEFAULT \'0\' ',
	    'UNIQUE KEY `email` (`email`)',
	    'KEY `status` (`status`)',
    ));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}