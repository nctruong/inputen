<?php

/**
 * This is the model class for table "danhngon".
 *
 * The followings are the available columns in table 'danhngon':
 * @property integer $id
 * @property integer $state
 * @property string $content
 * @property string $created_date
 * @property string $author
 * @property string $audio
 * @property string $title
 */
class Danhngon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Danhngon the static model class
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
		return 'danhngon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('state,dictionary created_date, title', 'required'),
			array('state', 'numerical', 'integerOnly'=>true),
			array('author, audio, title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, state, content, dictionary,created_date, author, audio, title', 'safe', 'on'=>'search'),
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
			'state' => 'State',
			'content' => 'Content',
			'created_date' => 'Created Date',
			'author' => 'Author',
			'audio' => 'Audio',
			'title' => 'Title',
                        'dictionary' => 'Lời dịch',
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
		$criteria->compare('state',$this->state);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('audio',$this->audio,true);
		$criteria->compare('title',$this->title,true);
                $criteria->compare('dictionary',$this->dictionary,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function afterSave() {
        if ($this->isNewRecord) {
            $this->created_date = new CDbExpression('NOW()');
        }
        parent::afterSave();
    }
}