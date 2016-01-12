<?php

/**
 * This is the model class for table "family_planning_service".
 *
 * The followings are the available columns in table 'family_planning_service':
 * @property integer $id
 * @property integer $patient_id
 * @property string $plan_more_children
 * @property string $reason_for_practicing_fp
 * @property string $type_of_acceptor
 * @property string $previous_method_used
 * @property string $spouse_name
 * @property string $spouse_date_of_birth
 * @property string $spouse_highest_education
 * @property string $spouse_occupation
 * @property string $average_monthly_income
 * @property string $method_accepted
 * @property string $other_method_accepted
 * @property string $chosen_method
 * @property string $fps_date
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * @property FamilyPlanningServiceDetails[] $familyPlanningServiceDetails
 * @property MedicalHistory[] $medicalHistories
 * @property ObstetricalHistory[] $obstetricalHistories
 * @property PelvicExamination[] $pelvicExaminations
 * @property PhysicalExamination[] $physicalExaminations
 */
class FamilyPlanningService extends CActiveRecord {

    public $patient_family_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'family_planning_service';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('patient_id, plan_more_children, type_of_acceptor, fps_date', 'required'),
            array('patient_id', 'numerical', 'integerOnly' => true),
            array('plan_more_children', 'length', 'max' => 3),
            array('type_of_acceptor', 'length', 'max' => 18),
            array('spouse_name, spouse_highest_education, spouse_occupation, average_monthly_income', 'length', 'max' => 255),
            array('reason_for_practicing_fp, previous_method_used, spouse_date_of_birth, method_accepted, other_method_accepted, chosen_method', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, patient_id, plan_more_children, reason_for_practicing_fp, type_of_acceptor, previous_method_used, spouse_name, spouse_date_of_birth, spouse_highest_education, spouse_occupation, average_monthly_income, method_accepted, other_method_accepted, chosen_method, fps_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
            'familyPlanningServiceDetails' => array(self::HAS_MANY, 'FamilyPlanningServiceDetails', 'family_planning_service_id'),
            'medicalHistory' => array(self::HAS_ONE, 'MedicalHistory', 'family_planning_service_id'),
            'obstetricalHistory' => array(self::HAS_ONE, 'ObstetricalHistory', 'family_planning_service_id'),
            'pelvicExamination' => array(self::HAS_ONE, 'PelvicExamination', 'family_planning_service_id'),
            'physicalExamination' => array(self::HAS_ONE, 'PhysicalExamination', 'family_planning_service_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'plan_more_children' => 'Plan More Children',
            'reason_for_practicing_fp' => 'Reason For Practicing FP',
            'type_of_acceptor' => 'Type of Acceptor',
            'previous_method_used' => 'Previous Method Used',
            'spouse_name' => 'Spouse\'s Name',
            'spouse_date_of_birth' => 'Spouse\'s Date Of Birth',
            'spouse_highest_education' => 'Spouse\'s Highest Education',
            'spouse_occupation' => 'Spouse\'s Occupation',
            'average_monthly_income' => 'Average Monthly Income',
            'method_accepted' => 'Method Accepted',
            'other_method_accepted' => 'Other Methods Accepted',
            'chosen_method' => 'Chosen Method',
            'fps_date' => 'FPS Date',
            'patient_family_name' => 'Patient\'s Name',
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
        $criteria->with = 'patient';

        $criteria->compare('id', $this->id);
        $criteria->compare('patient_id', $this->patient_id);
        $criteria->compare('plan_more_children', $this->plan_more_children, true);
        $criteria->compare('reason_for_practicing_fp', $this->reason_for_practicing_fp, true);
        $criteria->compare('type_of_acceptor', $this->type_of_acceptor, true);
        $criteria->compare('previous_method_used', $this->previous_method_used, true);
        $criteria->compare('spouse_name', $this->spouse_name, true);
        $criteria->compare('spouse_date_of_birth', $this->spouse_date_of_birth, true);
        $criteria->compare('spouse_highest_education', $this->spouse_highest_education, true);
        $criteria->compare('spouse_occupation', $this->spouse_occupation, true);
        $criteria->compare('average_monthly_income', $this->average_monthly_income, true);
        $criteria->compare('method_accepted', $this->method_accepted, true);
        $criteria->compare('other_method_accepted', $this->other_method_accepted, true);
        $criteria->compare('chosen_method', $this->chosen_method, true);
        $criteria->compare('fps_date', $this->fps_date, true);

        $criteria->compare('patient_family_name', $this->patient_family_name, true);
        $criteria->compare('patient_first_name', $this->patient_family_name, true, 'OR');
        $criteria->compare('patient_middle_name', $this->patient_family_name, true, 'OR');

        $sort = new CSort();
        $sort->attributes = array(
            'patient_family_name' => array(
                'asc' => 'patient_family_name',
                'desc' => 'patient_family_name desc'
            ),
            '*'
        );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => $sort,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return FamilyPlanningService the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getAcceptedMethods() {
        $methods = array(
            'STER' => 'STER',
            'IUD' => 'IUD',
            'PILL' => 'PILL',
            'INJ. DMPA' => 'INJ. DMPA',
            'NFA' => 'NFA',
            'CAL./RHYTHM' => 'CAL./RHYTHM',
            'CONDOM' => 'CONDOM'
        );
        return $methods;
    }

    public static function getTypeOfAcceptor() {
        $types = ZHtml::enumItem(FamilyPlanningService::model(), 'type_of_acceptor');
        $types[''] = '';
        asort($types);
        return $types;
    }

}
