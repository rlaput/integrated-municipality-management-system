<?php

/**
 * This is the model class for table "maternal_health".
 *
 * The followings are the available columns in table 'maternal_health':
 * @property integer $id
 * @property integer $patient_id
 * @property string $husband_name
 * @property string $husband_occupation
 * @property integer $no_of_children_born_alive
 * @property integer $no_of_living_children
 * @property integer $no_of_abortion
 * @property integer $no_of_stillbirths_fetal_deaths
 * @property string $last_delivery_type
 * @property string $large_babies_history
 * @property string $diabetes_history
 * @property string $previous_illness
 * @property string $allergy
 * @property string $previous_hospitalization
 * @property string $urinalysis
 * @property string $cbc
 * @property string $hbs_antigen
 * @property string $prevoius_pregnancy_complication
 * @property string $gravida
 * @property string $para
 * @property string $a
 * @property string $stillbirth
 * @property string $cmp
 * @property string $edc
 * @property string $where_to_deliver
 * @property string $to_be_attended_by
 * @property string $plan_to_submit
 * @property string $risk_codes
 * @property string $pregnancy_terminated_date
 * @property string $outcome
 * @property double $birthwt
 * @property string $place_of_delivery
 * @property string $attended_by
 * @property string $checklist
 * @property string $vit_a_date_given
 * @property string $vit_a_prescribed
 * @property string $iron_folic_date_given
 * @property string $iron_folic_prescribed
 * @property string $iron_folic_month
 * @property string $mebendazole_date_given
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * @property MaternalHealthDetails[] $maternalHealthDetails
 * @property TetanusToxoidStatus[] $tetanusToxoidStatuses
 */
class MaternalHealth extends CActiveRecord {

    public $patient_family_name;
    public $family_no;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'maternal_health';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('patient_id, husband_name', 'required'),
            array('patient_id, no_of_children_born_alive, no_of_living_children, no_of_abortion, no_of_stillbirths_fetal_deaths', 'numerical', 'integerOnly' => true),
            array('birthwt', 'numerical'),
            array('husband_name, husband_occupation, last_delivery_type, large_babies_history, diabetes_history, previous_illness, allergy, previous_hospitalization, urinalysis, cbc, hbs_antigen, prevoius_pregnancy_complication, gravida, para, a, stillbirth, cmp, edc, where_to_deliver, to_be_attended_by, plan_to_submit, risk_codes, outcome, place_of_delivery, attended_by, vit_a_prescribed, iron_folic_prescribed, iron_folic_month', 'length', 'max' => 255),
            array('pregnancy_terminated_date, checklist, vit_a_date_given, iron_folic_date_given, mebendazole_date_given', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, patient_id, husband_name, husband_occupation, no_of_children_born_alive, no_of_living_children, no_of_abortion, no_of_stillbirths_fetal_deaths, last_delivery_type, large_babies_history, diabetes_history, previous_illness, allergy, previous_hospitalization, urinalysis, cbc, hbs_antigen, prevoius_pregnancy_complication, gravida, para, a, stillbirth, cmp, edc, where_to_deliver, to_be_attended_by, plan_to_submit, risk_codes, pregnancy_terminated_date, outcome, birthwt, place_of_delivery, attended_by, checklist, vit_a_date_given, vit_a_prescribed, iron_folic_date_given, iron_folic_prescribed, iron_folic_month, mebendazole_date_given', 'safe', 'on' => 'search'),
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
            'maternalHealthDetails' => array(self::HAS_MANY, 'MaternalHealthDetails', 'maternal_health_record_id'),
            'tetanusToxoidStatuses' => array(self::HAS_MANY, 'TetanusToxoidStatus', 'maternal_health_record_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'husband_name' => 'Husband\'s Name',
            'no_of_children_born_alive' => 'No. of Children Born Alive',
            'no_of_living_children' => 'No. of Living Children',
            'no_of_abortion' => 'No. of Abortion',
            'no_of_stillbirths_fetal_deaths' => 'No. of Stillbirths/Fetal Deaths',
            'last_delivery_type' => 'Type of Last Delivery',
            'large_babies_history' => 'History of Large Babies (8 lbs)',
            'diabetes_history' => 'History of Diabetes',
            'previous_illness' => 'Previous Illness',
            'allergy' => 'Allergy',
            'previous_hospitalization' => 'Previous Hospitalization',
            'urinalysis' => 'Urinalysis',
            'cbc' => 'CBC',
            'hbs_antigen' => 'Hbs Antigen',
            'prevoius_pregnancy_complication' => 'Prevoius Pregnancy Complication (specify)',
            'gravida' => 'GRAVIDA',
            'para' => 'PARA',
            'a' => 'A',
            'stillbirth' => 'Stillbirth',
            'cmp' => 'CMP',
            'edc' => 'EDC',
            'where_to_deliver' => 'Where to deliver',
            'to_be_attended_by' => 'To be attended by',
            'plan_to_submit' => 'Plan to submit the baby for newborn screening',
            'risk_codes' => 'Risk Codes',
            'pregnancy_terminated_date' => 'Date Pregnancy Terminated',
            'outcome' => 'Outcome',
            'birthwt' => 'Birthwt',
            'place_of_delivery' => 'Place of Delivery',
            'attended_by' => 'Attended By',
            'checklist' => 'Checklist',
            'vit_a_date_given' => 'Date Given',
            'vit_a_prescribed' => 'Prescribed',
            'iron_folic_date_given' => 'Date Given',
            'iron_folic_prescribed' => 'Prescribed',
            'iron_folic_month' => 'Months',
            'mebendazole_date_given' => 'Date Given',
            'patient_family_name' => 'Patient\'s Name',
            'family_no' => 'Family No.'
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
        $criteria->compare('husband_name', $this->husband_name, true);
        $criteria->compare('husband_occupation', $this->husband_occupation, true);
        $criteria->compare('no_of_children_born_alive', $this->no_of_children_born_alive);
        $criteria->compare('no_of_living_children', $this->no_of_living_children);
        $criteria->compare('no_of_abortion', $this->no_of_abortion);
        $criteria->compare('no_of_stillbirths_fetal_deaths', $this->no_of_stillbirths_fetal_deaths);
        $criteria->compare('last_delivery_type', $this->last_delivery_type, true);
        $criteria->compare('large_babies_history', $this->large_babies_history, true);
        $criteria->compare('diabetes_history', $this->diabetes_history, true);
        $criteria->compare('previous_illness', $this->previous_illness, true);
        $criteria->compare('allergy', $this->allergy, true);
        $criteria->compare('previous_hospitalization', $this->previous_hospitalization, true);
        $criteria->compare('urinalysis', $this->urinalysis, true);
        $criteria->compare('cbc', $this->cbc, true);
        $criteria->compare('hbs_antigen', $this->hbs_antigen, true);
        $criteria->compare('prevoius_pregnancy_complication', $this->prevoius_pregnancy_complication, true);
        $criteria->compare('gravida', $this->gravida, true);
        $criteria->compare('para', $this->para, true);
        $criteria->compare('a', $this->a, true);
        $criteria->compare('stillbirth', $this->stillbirth, true);
        $criteria->compare('cmp', $this->cmp, true);
        $criteria->compare('edc', $this->edc, true);
        $criteria->compare('where_to_deliver', $this->where_to_deliver, true);
        $criteria->compare('to_be_attended_by', $this->to_be_attended_by, true);
        $criteria->compare('plan_to_submit', $this->plan_to_submit, true);
        $criteria->compare('risk_codes', $this->risk_codes, true);
        $criteria->compare('pregnancy_terminated_date', $this->pregnancy_terminated_date, true);
        $criteria->compare('outcome', $this->outcome, true);
        $criteria->compare('birthwt', $this->birthwt);
        $criteria->compare('place_of_delivery', $this->place_of_delivery, true);
        $criteria->compare('attended_by', $this->attended_by, true);
        $criteria->compare('checklist', $this->checklist, true);
        $criteria->compare('vit_a_date_given', $this->vit_a_date_given, true);
        $criteria->compare('vit_a_prescribed', $this->vit_a_prescribed, true);
        $criteria->compare('iron_folic_date_given', $this->iron_folic_date_given, true);
        $criteria->compare('iron_folic_prescribed', $this->iron_folic_prescribed, true);
        $criteria->compare('iron_folic_month', $this->iron_folic_month, true);
        $criteria->compare('mebendazole_date_given', $this->mebendazole_date_given, true);

        $criteria->compare('patient_family_name', $this->patient_family_name, true);
        $criteria->compare('patient_middle_name', $this->patient_family_name, true, 'OR');
        $criteria->compare('patient_first_name', $this->patient_family_name, true, 'OR');
        $criteria->compare('family_no', $this->family_no, true);

        $sort = new CSort();
        $sort->attributes = array(
            'patient_family_name' => array(
                'asc' => 'patient_family_name',
                'desc' => 'patient_family_name desc'
            ),
            'family_no' => array(
                'asc' => 'family_no',
                'desc' => 'family_no desc'
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
     * @return MaternalHealth the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getChecklist() {
        $checklist = array(
            'vaginal bleeding' => 'vaginal bleeding',
            'severe headache' => 'severe headache',
            'blurring of vision' => 'blurring of vision',
            'abdominal pain' => 'abdominal pain',
            'severe vomiting' => 'severe vomiting',
            'breathing difficulty' => 'breathing difficulty',
            'convulsion' => 'convulsion',
            'edema' => 'edema',
            'varicosities' => 'varicosities',
            'dental carries' => 'dental carries',
            'chills and fever' => 'chills and fever',
            'breast abnormalities' => 'breast abnormalities',
            'pain during urination' => 'pain during urination',
            'vaginal discharges' => 'vaginal discharges',
            'diabetes' => 'diabetes',
            'escape of fluid from vagina' => 'escape of fluid from vagina',
        );
        return $checklist;
    }

}
