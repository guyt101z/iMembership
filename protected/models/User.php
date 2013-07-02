<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $address
 * @property integer $home_phone
 * @property integer $cell_phone
 * @property integer $group
 * @property string $email
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property string $lastvisit
 * @property integer $status
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, email', 'required'),
			array('home_phone, cell_phone, group, status', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, password', 'length', 'max'=>80),
			array('full_name', 'length', 'max'=>160),
			array('email', 'length', 'max'=>128),
			array('address, created_at, updated_at, lastvisit', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, full_name, address, home_phone, cell_phone, group, email, password, created_at, updated_at, lastvisit, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'full_name' => 'Full Name',
			'address' => 'Address',
			'home_phone' => 'Home Phone',
			'cell_phone' => 'Cell Phone',
			'group' => 'Group',
			'email' => 'Email',
			'password' => 'Password',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'lastvisit' => 'Lastvisit',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('home_phone',$this->home_phone);
		$criteria->compare('cell_phone',$this->cell_phone);
		$criteria->compare('group',$this->group);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('lastvisit',$this->lastvisit,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}