<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $fullname
 * @property string $created_date
 * @property string $last_login
 * @property integer $blocked
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, fullname, created_date, last_login', 'required'),
			array('blocked', 'numerical', 'integerOnly'=>true),
			array('username, fullname', 'length', 'max'=>150),
			array('password', 'length', 'max'=>64),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, fullname, created_date, last_login, blocked', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'fullname' => 'Fullname',
			'created_date' => 'Created Date',
			'last_login' => 'Last Login',
			'blocked' => 'Blocked',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('blocked',$this->blocked);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}