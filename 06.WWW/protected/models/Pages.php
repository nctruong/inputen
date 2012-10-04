<?php

/**
 * This is the model class for table "core_layouts".
 *
 * The followings are the available columns in table 'core_layouts':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $desc
 * @property string $meta
 * @property string $created_date
 * @property integer $state
 * @property string $theme
 * @property integer $core_user_id
 *
 * The followings are the available model relations:
 * @property CoreLayoutDetails[] $coreLayoutDetails
 */
class Pages extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Pages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'core_layouts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, title, state, theme', 'required'),
            array('state, core_user_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 250),
            array('title', 'length', 'max' => 255),
            array('theme', 'length', 'max' => 150),
            array('desc, meta, created_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, title, desc, meta, created_date, state, theme, core_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'coreLayoutDetails' => array(self::HAS_MANY, 'CoreLayoutDetails', 'layout_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'desc' => 'Desc',
            'meta' => 'Meta',
            'created_date' => 'Created Date',
            'state' => 'State',
            'theme' => 'Theme',
            'core_user_id' => 'Core User',
        );
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('meta', $this->meta, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('state', $this->state);
        $criteria->compare('theme', $this->theme, true);
        $criteria->compare('core_user_id', $this->core_user_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => false
                ));
    }

    public function afterSave() {
        if ($this->isNewRecord) {
            $this->created_date = new CDbExpression('NOW()');
            $this->core_user_id = Yii::app()->user->id;
        }
        parent::afterSave();
    }

}