<?php

/**
 * This is the model class for table "categories".
 *
 * The followings are the available columns in table 'categories':
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $desc
 * @property string $created_date
 * @property integer $order
 * @property integer $parent
 * @property integer $state
 * @property integer $taxonomy_id
 */
class Category extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Category the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'categories';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, slug, parent, state, taxonomy_id', 'required'),
            array('order, parent, state, taxonomy_id', 'numerical', 'integerOnly' => true),
            array('title, slug', 'length', 'max' => 255),
            array('desc, created_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, slug, desc, created_date, order, parent, state, taxonomy_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'taxonomy' => array(self::BELONGS_TO, 'Taxonomy', 'taxonomy_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'desc' => 'Desc',
            'created_date' => 'Created Date',
            'order' => 'Order',
            'parent' => 'Parent',
            'state' => 'State',
            'taxonomy_id' => 'Taxonomy',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('slug', $this->slug, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('order', $this->order);
        $criteria->compare('parent', $this->parent);
        $criteria->compare('state', $this->state);
        $criteria->compare('taxonomy_id', $this->taxonomy_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => false
                ));
    }

    public static function getCategories() {
        $categories = Category::model()->findAll();
        $data = array(0 => "None");
        if ($categories && count($categories) > 0) {
            foreach ($categories as $category) {
                $data[$category->id] = $category->title;
            }
        }
        return $data;
    }

    public function afterSave() {
        if ($this->isNewRecord) {
            $this->created_date = new CDbExpression('NOW()');
        }
        parent::afterSave();
    }

}