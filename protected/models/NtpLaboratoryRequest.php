<?php

/**
 * This is the model class for table "ntp_laboratory_request".
 *
 * The followings are the available columns in table 'ntp_laboratory_request':
 * @property integer $id
 * @property integer $patient_id
 * @property string $collection_unit_name
 * @property string $submission_date
 * @property string $disease_classification
 * @property string $site
 * @property string $reason_for_examination
 * @property integer $tb_case_no
 * @property string $date_received
 * @property integer $lab_serial_no
 * @property string $examination_date
 * @property integer $examined_by
 *
 * The followings are the available model relations:
 * @property LaboratoryTest[] $laboratoryTests
 * @property User $examinedBy
 * @property Patient $patient
 */
class NtpLaboratoryRequest extends CActiveRecord {

    public $patient_family_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ntp_laboratory_request';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('patient_id, collection_unit_name, submission_date, reason_for_examination', 'required'),
            array('patient_id, tb_case_no, lab_serial_no, examined_by', 'numerical', 'integerOnly' => true),
            array('collection_unit_name, site', 'length', 'max' => 255),
            array('disease_classification', 'length', 'max' => 15),
            array('reason_for_examination', 'length', 'max' => 9),
            array('date_received, examination_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, patient_id, collection_unit_name, submission_date, disease_classification, site, reason_for_examination, tb_case_no, date_received, lab_serial_no, examination_date, examined_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'laboratoryTests' => array(self::HAS_MANY, 'LaboratoryTest', 'ntp_laboratory_request_id'),
            'examinedBy' => array(self::BELONGS_TO, 'User', 'examined_by'),
            'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'collection_unit_name' => 'Name of Collection Unit',
            'submission_date' => 'Date of Submission',
            'disease_classification' => 'Disease Classification',
            'site' => 'Site',
            'reason_for_examination' => 'Reason For Examination',
            'tb_case_no' => 'TB Case No.',
            'date_received' => 'Date Received',
            'lab_serial_no' => 'Laboratory Serial No.',
            'examination_date' => 'Date of Examination',
            'examined_by' => 'Examined By',
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
        $criteria->compare('collection_unit_name', $this->collection_unit_name, true);
        $criteria->compare('submission_date', $this->submission_date, true);
        $criteria->compare('disease_classification', $this->disease_classification, true);
        $criteria->compare('site', $this->site, true);
        $criteria->compare('reason_for_examination', $this->reason_for_examination, true);
        $criteria->compare('tb_case_no', $this->tb_case_no);
        $criteria->compare('date_received', $this->date_received, true);
        $criteria->compare('lab_serial_no', $this->lab_serial_no);
        $criteria->compare('examination_date', $this->examination_date, true);
        $criteria->compare('examined_by', $this->examined_by);

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
     * @return NtpLaboratoryRequest the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getDiseaseClassifications() {
        $classifications = ZHtml::enumItem(NtpLaboratoryRequest::model(), 'disease_classification');
        $classifications[''] = '';
        asort($classifications);
        return $classifications;
    }

    public static function getReasonsForExamination() {
        $reasons = ZHtml::enumItem(NtpLaboratoryRequest::model(), 'reason_for_examination');
        $reasons[''] = '';
        asort($reasons);
        return $reasons;
    }

}
