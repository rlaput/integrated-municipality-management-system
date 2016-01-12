<?php

/**
 * This is the model class for table "family_planning_service_details".
 *
 * The followings are the available columns in table 'family_planning_service_details':
 * @property integer $id
 * @property integer $family_planning_service_id
 * @property string $date_service_given
 * @property string $method_to_be_used
 * @property string $remarks
 * @property string $name_of_provider
 * @property string $next_service_date
 *
 * The followings are the available model relations:
 * @property FamilyPlanningService $familyPlanningService
 */
class FamilyPlanningServiceDetails extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'family_planning_service_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('family_planning_service_id, date_service_given, name_of_provider, next_service_date', 'required'),
            array('family_planning_service_id', 'numerical', 'integerOnly' => true),
            array('method_to_be_used, name_of_provider', 'length', 'max' => 255),
            array('remarks', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, family_planning_service_id, date_service_given, method_to_be_used, remarks, name_of_provider, next_service_date', 'safe', 'on' => 'search'),
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
            'date_service_given' => 'Date Service Given',
            'method_to_be_used' => 'Method To Be Used',
            'remarks' => 'Remarks',
            'name_of_provider' => 'Name Of Provider',
            'next_service_date' => 'Next Service Date',
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
        $criteria->compare('date_service_given', $this->date_service_given, true);
        $criteria->compare('method_to_be_used', $this->method_to_be_used, true);
        $criteria->compare('remarks', $this->remarks, true);
        $criteria->compare('name_of_provider', $this->name_of_provider, true);
        $criteria->compare('next_service_date', $this->next_service_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return FamilyPlanningServiceDetails the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
