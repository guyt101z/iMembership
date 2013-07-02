<?php

class m130702_001832_create_membership extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_membership', array(
      'id' => 'pk',
      'membership_name' => 'VARCHAR(80) NOT NULL',
      'days' => 'INTEGER (3)',
      'rate' => 'INTEGER (10)',
      'created_at' => 'DATETIME DEFAULT NULL',
		  'updated_at' => 'TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
    ));
	}

	public function down()
	{
		$this->dropTable('tbl_membership');
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