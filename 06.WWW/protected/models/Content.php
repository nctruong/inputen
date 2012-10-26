<?php

/**
 * This is the model class for table "contents".
 *
 * The followings are the available columns in table 'contents':
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $excerpt
 * @property string $content
 * @property string $desc
 * @property integer $premium
 * @property string $keywords
 * @property string $created_date
 * @property integer $view
 * @property integer $state
 * @property integer $comment_status
 * @property integer $category_id
 */
class Content extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Content the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'contents';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, slug, content, state, category_id', 'required'),
            array('premium, view, state, comment_status, category_id', 'numerical', 'integerOnly' => true),
            array('title, slug', 'length', 'max' => 255),
            array('excerpt, desc, keywords, created_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, slug, excerpt, content, desc, premium, keywords, created_date, view, state, comment_status, category_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
             return array(
             'category' => array(self::BELONGS_TO, 'Category' , 'category_id'),
             'comment'  => array(self::HAS_MANY, 'Comment', 'content_id'),
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
            'excerpt' => 'Excerpt',
            'content' => 'Content',
            'desc' => 'Desc',
            'premium' => 'Premium',
            'keywords' => 'Keywords',
            'created_date' => 'Created Date',
            'view' => 'View',
            'state' => 'State',
            'comment_status' => 'Comment Status',
            'category_id' => 'Category',
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
        $criteria->compare('excerpt', $this->excerpt, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('premium', $this->premium);
        $criteria->compare('keywords', $this->keywords, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('view', $this->view);
        $criteria->compare('state', $this->state);
        $criteria->compare('comment_status', $this->comment_status);
        $criteria->compare('category_id', $this->category_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => false
                ));
    }

    public function afterSave() {
        if ($this->isNewRecord) {
            $this->created_date = new CDbExpression('NOW()');
        }
        parent::afterSave();
    }

}