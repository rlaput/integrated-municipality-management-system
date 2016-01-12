<?php

/**
 * This is the model class for table "obstetrical_history".
 *
 * The followings are the available columns in table 'obstetrical_history':
 * @property integer $id
 * @property integer $family_planning_service_id
 * @property integer $no_of_pregnancies
 * @property integer $no_of_full_term
 * @property integer $no_of_premature
 * @property integer $no_of_abortions
 * @property integer $no_of_living_children
 * @property string $last_delivery_date
 * @property string $last_delivery_type
 * @property string $past_menstrual_period
 * @property string $last_menstrual_period
 * @property string $duration_character_of_menstrual_bleeding
 * @property string $other_history
 *
 * The followings are the available model relations:
 * @property FamilyPlanningService $familyPlanningService
 */
class ObstetricalHistory extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'obstetrical_history';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('family_planning_service_id', 'required'),
            array('family_planning_service_id, no_of_pregnancies, no_of_full_term, no_of_premature, no_of_abortions, no_of_living_children', 'numerical', 'integerOnly' => true),
            array('last_delivery_type, past_menstrual_period, last_menstrual_period, duration_character_of_menstrual_bleeding', 'length', 'max' => 255),
            array('last_delivery_date, other_history', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, family_planning_service_id, no_of_pregnancies, no_of_full_term, no_of_premature, no_of_abortions, no_of_living_children, last_delivery_date, last_delivery_type, past_menstrual_period, last_menstrual_period, duration_character_of_menstrual_bleeding, other_history', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'familyPlanningService' => array(self::BELONGS_TO, 'FamilyPlanningService', 'family_planning_service_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'family_planning_service_id' => 'Family Planning Service',
            'no_of_pregnancies' => 'Number of Pregnancies',
            'no_of_full_term' => 'Number of Full Term Pregnancy',
            'no_of_premature' => 'Number of Premature Pregnancy',
            'no_of_abortions' => 'Number of Abortions',
            'no_of_living_children' => 'Number of Living Children',
            'last_delivery_date' => 'Last Delivery Date',
            'last_delivery_type' => 'Last Delivery Type',
            'past_menstrual_period' => 'Past Menstrual Period',
            'last_menstrual_period' => 'Last Menstrual Period',
            'duration_character_of_menstrual_bleeding' => 'Duration and Character Of Menstrual Bleeding',
            'other_history' => 'History of any of the following',
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
        $criteria->compare('family_planning_service_id', $this->family_planning_service_id);
        $criteria->compare('no_of_pregnancies', $this->no_of_pregnancies);
        $criteria->compare('no_of_full_term', $this->no_of_full_term);
        $criteria->compare('no_of_premature', $this->no_of_premature);
        $criteria->compare('no_of_abortions', $this->no_of_abortions);
        $criteria->compare('no_of_living_children', $this->no_of_living_children);
        $criteria->compare('last_delivery_date', $this->last_delivery_date, true);
        $criteria->compare('last_delivery_type', $this->last_delivery_type, true);
        $criteria->compare('past_menstrual_period', $this->past_menstrual_period, true);
        $criteria->compare('last_menstrual_period', $this->last_menstrual_period, true);
        $criteria->compare('duration_character_of_menstrual_bleeding', $this->duration_character_of_menstrual_bleeding, true);
        $criteria->compare('other_history', $this->other_history, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ObstetricalHistory the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getHistory() {
        $history = array(
            'Hydatidiform mole (within the last 12 months)' => 'Hydatidiform mole (within the last 12 months)',
            'Ectopic pregnancy' => 'Ectopic pregnancy'
        );
        return $history;
    }

}
