<?php

/**
 * This is the model class for table "comments".
 *
 * The followings are the available columns in table 'comments':
 * @property integer $id
 * @property string $comment
 * @property string $state
 * @property string $created_date
 * @property integer $content_id
 * @property integer $mem_id
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
         public function afterSave() {
                if ($this->isNewRecord) {
                    $this->created_date = new CDbExpression('NOW()');
                    $this->state = 1;
                }
                parent::afterSave();
           }
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content_id, mem_id', 'required'),
			array('content_id, mem_id', 'numerical', 'integerOnly'=>true),
			array('state, created_date', 'length', 'max'=>45),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comment, state, created_date, content_id, mem_id', 'safe', 'on'=>'search'),
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
                    'Member' => array(self::BELONGS_TO,'Member', 'member_id'),
                    'Content' => array(self::BELONGS_TO,'Content', 'content_id')
		);
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comment' => 'Comment',
			'state' => 'State',
			'created_date' => 'Created Date',
			'content_id' => 'Content',
			'mem_id' => 'Mem',
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
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('content_id',$this->content_id);
		$criteria->compare('mem_id',$this->mem_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}