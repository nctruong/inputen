<?php

/**
 * This is the model class for table "core_users".
 *
 * The followings are the available columns in table 'core_users':
 * @property integer $ID
 * @property string $USERNAME
 * @property string $PASSWD
 * @property string $EMAIL
 * @property string $FULLNAME
 * @property string $CREATED_DATE
 * @property string $LAST_LOGIN
 * @property integer $STATE
 * @property integer $BLOCKED
 */
class CoreUsers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CoreUsers the static model class
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
		return 'core_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CREATED_DATE', 'required'),
			array('STATE, BLOCKED', 'numerical', 'integerOnly'=>true),
			array('USERNAME, EMAIL', 'length', 'max'=>50),
			array('PASSWD', 'length', 'max'=>64),
			array('FULLNAME', 'length', 'max'=>150),
			array('LAST_LOGIN', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, USERNAME, PASSWD, EMAIL, FULLNAME, CREATED_DATE, LAST_LOGIN, STATE, BLOCKED', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'USERNAME' => 'Username',
			'PASSWD' => 'Passwd',
			'EMAIL' => 'Email',
			'FULLNAME' => 'Fullname',
			'CREATED_DATE' => 'Created Date',
			'LAST_LOGIN' => 'Last Login',
			'STATE' => 'State',
			'BLOCKED' => 'Blocked',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWD',$this->PASSWD,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('FULLNAME',$this->FULLNAME,true);
		$criteria->compare('CREATED_DATE',$this->CREATED_DATE,true);
		$criteria->compare('LAST_LOGIN',$this->LAST_LOGIN,true);
		$criteria->compare('STATE',$this->STATE);
		$criteria->compare('BLOCKED',$this->BLOCKED);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}