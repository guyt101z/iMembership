<?php

class m130702_001505_create_user_group_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user_group', array(
      'id' => 'pk',
      'group_name' => 'VARCHAR(80) NOT NULL',
      'created_at' => 'DATETIME DEFAULT NULL',
		  'updated_at' => 'TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
    ), 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		$this->dropTable('tbl_user_group');
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