<?php

/**
 * This is the model class for table "child_health_details".
 *
 * The followings are the available columns in table 'child_health_details':
 * @property integer $id
 * @property integer $child_health_record_id
 * @property string $date
 * @property integer $age
 * @property double $recorded_weight
 * @property double $temperature
 * @property double $recorded_height
 * @property string $findings
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property ChildHealth $childHealthRecord
 */
class ChildHealthDetails extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'child_health_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('child_health_record_id, date, findings', 'required'),
            array('child_health_record_id, age', 'numerical', 'integerOnly' => true),
            array('recorded_weight, temperature, recorded_height', 'numerical'),
            array('notes', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, child_health_record_id, date, age, recorded_weight, temperature, recorded_height, findings, notes', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'childHealthRecord' => array(self::BELONGS_TO, 'ChildHealth', 'child_health_record_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'child_health_record_id' => 'Child Health Record',
            'date' => 'Date',
            'age' => 'Age',
            'recorded_weight' => 'Recorded Weight',
            'temperature' => 'Temperature',
            'recorded_height' => 'Recorded Height',
            'findings' => 'Findings',
            'notes' => 'Notes',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('child_health_record_id', $this->child_health_record_id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('age', $this->age);
        $criteria->compare('recorded_weight', $this->recorded_weight);
        $criteria->compare('temperature', $this->temperature);
        $criteria->compare('recorded_height', $this->recorded_height);
        $criteria->compare('findings', $this->findings, true);
        $criteria->compare('notes', $this->notes, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ChildHealthDetails the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
