<?php

/**
 * This is the model class for table "contents".
 *
 * The followings are the available columns in table 'contents':
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property integer $premium
 * @property string $content
 * @property string $type
 * @property string $created_date
 * @property integer $category_id
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property Categories $category
 * @property LessonsFavorite[] $lessonsFavorites
 * @property LessonsRemember[] $lessonsRemembers
 */
class BaiHoc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BaiHoc the static model class
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
		return 'contents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, slug, premium, content, type, created_date, category_id', 'required'),
			array('premium, category_id', 'numerical', 'integerOnly'=>true),
			array('title, slug', 'length', 'max'=>255),
			array('type', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, slug, premium, content, type, created_date, category_id', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comments', 'content_id'),
			'category' => array(self::BELONGS_TO, 'Categories', 'category_id'),
			'lessonsFavorites' => array(self::HAS_MANY, 'LessonsFavorite', 'content_id'),
			'lessonsRemembers' => array(self::HAS_MANY, 'LessonsRemember', 'content_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'slug' => 'Slug',
			'premium' => 'Premium',
			'content' => 'Content',
			'type' => 'Type',
			'created_date' => 'Created Date',
			'category_id' => 'Category',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('premium',$this->premium);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}