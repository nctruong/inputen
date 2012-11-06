<?php

/**
 * This is the model class for table "mquestion".
 *
 * The followings are the available columns in table 'mquestion':
 * @property integer $id
 * @property string $content
 * @property integer $parent
 * @property integer $user_id
 * @property integer $state
 * @property string $date_create
 */
class Mquestion extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Mquestion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'mquestion';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('content , user_id, state, date_create', 'required'),
            array('parent, parent, user_id, state', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, content, parent,content, user_id, state, date_create', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'member' => array(self::BELONGS_TO, 'Member', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'content' => 'Content',
            'parent' => 'Parent',
            'user_id' => 'User',
            'state' => 'State',
            'date_create' => 'Date Create',
        );
    }
    /**
     * 
     * @param type $id
     * @return all record question
     */
    public function getQuestion($id){
        
        $model = new Mquestion;
        $total = $model->findAll("parent = ".$id." and state = 1");
        return $total;
        
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('parent', $this->parent);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('state', $this->state);
        $criteria->compare('date_create', $this->date_create, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function afterSave() {
        if ($this->isNewRecord) {
            $this->date_create = new CDbExpression('NOW()');
        }
        parent::afterSave();
    }

}