<?php

/**
 * This is the model class for table "logo".
 *
 * The followings are the available columns in table 'logo':
 * @property integer $id
 * @property string $name
 * @property integer $location
 * @property integer $index
 * @property string $url
 * @property integer $width
 * @property integer $height
 */
class Logo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Logo the static model class
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
		return 'logo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, location', 'required'),
			array('location, index, width, height', 'numerical', 'integerOnly'=>true),
			array('name, url', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, location, index, url, width, height', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'location' => 'Location',
			'index' => 'Index',
			'url' => 'Url',
			'width' => 'Width',
			'height' => 'Height',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('location',$this->location);
		$criteria->compare('index',$this->index);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('width',$this->width);
		$criteria->compare('height',$this->height);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}