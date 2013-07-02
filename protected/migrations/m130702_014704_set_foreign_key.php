<?php

class m130702_014704_set_foreign_key extends CDbMigration
{
	public function up()
	{
		$this->addForeignKey('fk_member_id', 'tbl_user_membership', 'member_id', 'tbl_user', 'id', 'CASCADE', 'RESTRICT');

		$this->addForeignKey('fk_membership_id', 'tbl_user_membership', 'membership_id', 'tbl_membership', 'id', 'CASCADE', 'RESTRICT');
	}

	public function down()
	{
		return false;
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