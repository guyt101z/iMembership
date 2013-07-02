<?php

class m130702_010150_create_user_membership extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user_membership', array(
      'id' => 'pk',
      'member_id' => 'INTEGER (10) NOT NULL',
      'membership_id' => 'INTEGER (10) NOT NULL',
      'created_at' => 'DATETIME DEFAULT NULL',
		  'updated_at' => 'TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
    ), 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		$this->dropTable('tbl_user_membership');
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