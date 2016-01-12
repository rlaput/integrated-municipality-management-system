<?php

/**
 * This is the model class for table "physical_examination".
 *
 * The followings are the available columns in table 'physical_examination':
 * @property integer $id
 * @property integer $family_planning_service_id
 * @property string $blood_pressure
 * @property string $physical_examination_weight
 * @property string $pulse_rate
 * @property string $conjunctiva
 * @property string $neck
 * @property string $breast
 * @property string $thorax
 * @property string $abdomen
 * @property string $extremities
 * @property string $others
 *
 * The followings are the available model relations:
 * @property FamilyPlanningService $familyPlanningService
 */
class PhysicalExamination extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'physical_examination';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('family_planning_service_id', 'required'),
            array('family_planning_service_id', 'numerical', 'integerOnly' => true),
            array('blood_pressure, physical_examination_weight, pulse_rate, conjunctiva, neck, breast, thorax, abdomen, extremities', 'length', 'max' => 255),
            array('others', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, family_planning_service_id, blood_pressure, physical_examination_weight, pulse_rate, conjunctiva, neck, breast, thorax, abdomen, extremities, others', 'safe', 'on' => 'search'),
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
            'blood_pressure' => 'Blood Pressure',
            'physical_examination_weight' => 'Weight',
            'pulse_rate' => 'Pulse Rate',
            'conjunctiva' => 'Conjunctiva',
            'neck' => 'Neck',
            'breast' => 'Breast',
            'thorax' => 'Thorax',
            'abdomen' => 'Abdomen',
            'extremities' => 'Extremities',
            'others' => 'Others (please specify)',
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
        $criteria->compare('blood_pressure', $this->blood_pressure, true);
        $criteria->compare('physical_examination_weight', $this->physical_examination_weight, true);
        $criteria->compare('pulse_rate', $this->pulse_rate, true);
        $criteria->compare('conjunctiva', $this->conjunctiva, true);
        $criteria->compare('neck', $this->neck, true);
        $criteria->compare('breast', $this->breast, true);
        $criteria->compare('thorax', $this->thorax, true);
        $criteria->compare('abdomen', $this->abdomen, true);
        $criteria->compare('extremities', $this->extremities, true);
        $criteria->compare('others', $this->others, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PhysicalExamination the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getConjunctiva() {
        $conjunctiva = array(
            'pale' => 'pale',
            'yellowish' => 'yellowish'
        );
        return $conjunctiva;
    }

    public static function getNeck() {
        $neck = array(
            'enlarged thyroid' => 'enlarged thyroid',
            'enlarged lymph nodes' => 'enlarged lymph nodes'
        );
        return $neck;
    }

    public static function getBreast() {
        $breast = array(
            'mass' => 'mass',
            'nipple discharge' => 'nipple discharge',
            'skin - orange-peel or dimpling' => 'skin - orange-peel or dimpling',
            'enlarged axiliary lymph nodes' => 'enlarged axiliary lymph nodes'
        );
        return $breast;
    }

    public static function getThorax() {
        $thorax = array(
            'abnormal heart sounds/cardiac rate' => 'abnormal heart sounds/cardiac rate',
            'abnormal breath sounds/respiratory rate' => 'abnormal breath sounds/respiratory rate'
        );
        return $thorax;
    }

    public static function getAbdomen() {
        $abdomen = array(
            'enlarged liver' => 'enlarged liver',
            'mass' => 'mass',
            'tenderness' => 'tenderness'
        );
        return $abdomen;
    }

    public static function getExtremities() {
        $extremities = array(
            'edema' => 'edema',
            'varicosities' => 'varicosities'
        );
        return $extremities;
    }

}
