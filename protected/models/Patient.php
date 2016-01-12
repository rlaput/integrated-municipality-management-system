<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id
 * @property integer $user_id
 * @property string $patient_family_name
 * @property string $patient_first_name
 * @property string $patient_middle_name
 * @property string $address
 * @property string $contact_no
 * @property string $gender
 * @property double $height
 * @property double $weight
 * @property string $occupation
 * @property integer $family_no
 * @property string $marital_status
 * @property string $patient_birthdate
 * @property string $date_registered
 *
 * The followings are the available model relations:
 * @property ChildHealthRecord[] $childHealthRecords
 * @property FamilyPlanningServiceRecord[] $familyPlanningServiceRecords
 * @property MaternalHealthRecord[] $maternalHealthRecords
 * @property NtpLaboratoryRequest[] $ntpLaboratoryRequests
 * @property NtpTreatmentCard[] $ntpTreatmentCards
 * @property User $user
 */
class Patient extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'patient';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, patient_family_name, patient_first_name, patient_middle_name, address, contact_no, gender, height, weight, occupation, family_no, marital_status, patient_birthdate, date_registered', 'required'),
            array('user_id, family_no', 'numerical', 'integerOnly' => true),
            array('height, weight', 'numerical'),
            array('patient_family_name, patient_first_name, patient_middle_name, occupation', 'length', 'max' => 255),
            array('contact_no', 'length', 'max' => 15),
            array('gender', 'length', 'max' => 6),
            array('marital_status', 'length', 'max' => 31),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, patient_family_name, patient_first_name, patient_middle_name, address, contact_no, gender, height, weight, occupation, family_no, marital_status, patient_birthdate, date_registered', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'childHealthRecords' => array(self::HAS_MANY, 'ChildHealthRecord', 'patient_id'),
            'familyPlanningServiceRecords' => array(self::HAS_MANY, 'FamilyPlanningServiceRecord', 'patient_id'),
            'maternalHealthRecords' => array(self::HAS_MANY, 'MaternalHealthRecord', 'patient_id'),
            'ntpLaboratoryRequests' => array(self::HAS_MANY, 'NtpLaboratoryRequest', 'patient_id'),
            'ntpTreatmentCards' => array(self::HAS_MANY, 'NtpTreatmentCard', 'patient_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'Registered By',
            'patient_family_name' => 'Family Name',
            'patient_first_name' => 'First Name',
            'patient_middle_name' => 'Middle Name',
            'address' => 'Address',
            'contact_no' => 'Contact No.',
            'gender' => 'Gender',
            'height' => 'Height (cm)',
            'weight' => 'Weight (kg)',
            'occupation' => 'Occupation',
            'family_no' => 'Family No.',
            'marital_status' => 'Marital Status',
            'patient_birthdate' => 'Birthdate',
            'date_registered' => 'Date Registered',
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
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('patient_family_name', $this->patient_family_name, true);
        $criteria->compare('patient_first_name', $this->patient_first_name, true);
        $criteria->compare('patient_middle_name', $this->patient_middle_name, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('contact_no', $this->contact_no, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('height', $this->height);
        $criteria->compare('weight', $this->weight);
        $criteria->compare('occupation', $this->occupation, true);
        $criteria->compare('family_no', $this->family_no);
        $criteria->compare('marital_status', $this->marital_status, true);
        $criteria->compare('patient_birthdate', $this->patient_birthdate, true);
        $criteria->compare('date_registered', $this->date_registered, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Patient the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getGenders() {
        $genders = ZHtml::enumItem(Patient::model(), 'gender');
        $genders[''] = '';
        asort($genders);
        return $genders;
    }

    public function getName() {
        return $this->patient_family_name . ", " . $this->patient_first_name . " " . $this->patient_middle_name;
    }

}
