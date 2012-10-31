<?php

/**
 * This is the model class for table "taxonomy".
 *
 * The followings are the available columns in table 'taxonomy':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $type
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Categories[] $categories
 */
class Taxonomy extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Taxonomy the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'taxonomy';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, type, state, slug', 'required'),
            array('state', 'numerical', 'integerOnly' => true),
            array('name, type', 'length', 'max' => 255),
            array('description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, description, type, state', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'categories' => array(self::HAS_MANY, 'Categories', 'taxonomy_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'type' => 'Type',
            'state' => 'State',
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
        $criteria->compare('description', $this->description, true);
        $criteria->compare('type', $this->type, true);
        //$criteria->compare('state', $this->state);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => false
                ));
    }

    public static function getTaxonomy() {
        $taxonomy = Taxonomy::model()->findAll();
        $data = array(0 => "None");
        if ($taxonomy && count($taxonomy) > 0) {
            foreach ($taxonomy as $t) {
                $data[$t->id] = $t->name;
            }
        }
        return $data;
    }

    public static function getTypes() {
        $type = Taxonomy::model()->findAll();
        $data = array(0 => "None");
        if ($type && count($type) > 0) {
            foreach ($type as $t) {
                $data[$t->id] = $t->name;
            }
        }
        return $data;
    }

}