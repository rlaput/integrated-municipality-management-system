<?php

/**
 * This is the model class for table "ntp_treatment_card".
 *
 * The followings are the available columns in table 'ntp_treatment_card':
 * @property integer $id
 * @property integer $patient_id
 * @property integer $tb_case_no
 * @property string $date_opened
 * @property string $dots_facility_name
 * @property string $bcg_scar
 * @property string $contact_person
 * @property string $contact_person_no
 * @property string $source_of_patient
 * @property string $name_of_reffering_physician
 * @property string $history_of_anti_tb_drug_intake
 * @property string $duration
 * @property string $specify_drugs
 * @property string $when
 * @property string $where
 * @property string $smear_status
 * @property integer $no_of_household_contacts
 * @property string $classification_of_tb
 * @property string $tb_site
 * @property string $type_of_patient
 * @property string $category_1
 * @property string $category_2
 * @property string $category_3
 * @property string $treatment_started
 * @property string $tbdc_findings_and_recommendations
 * @property string $chest_xray
 * @property string $name_of_treatment_partner
 * @property string $designation_of_treatment_partner
 *
 * The followings are the available model relations:
 * @property DrugIntake[] $drugIntakes
 * @property Patient $patient
 * @property SputumExaminationResults[] $sputumExaminationResults
 * @property TreatmentOutcome[] $treatmentOutcomes
 */
class NtpTreatmentCard extends CActiveRecord {

    public $patient_family_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ntp_treatment_card';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('patient_id, tb_case_no, date_opened, dots_facility_name, bcg_scar, history_of_anti_tb_drug_intake, classification_of_tb, type_of_patient, treatment_started', 'required'),
            array('patient_id, tb_case_no, no_of_household_contacts', 'numerical', 'integerOnly' => true),
            array('dots_facility_name, contact_person, contact_person_no, name_of_reffering_physician, specify_drugs, when, where, smear_status, tb_site, name_of_treatment_partner, designation_of_treatment_partner', 'length', 'max' => 255),
            array('bcg_scar', 'length', 'max' => 8),
            array('source_of_patient', 'length', 'max' => 7),
            array('history_of_anti_tb_drug_intake', 'length', 'max' => 3),
            array('duration', 'length', 'max' => 5),
            array('classification_of_tb', 'length', 'max' => 15),
            array('category_1, category_2, category_3, tbdc_findings_and_recommendations, chest_xray', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, patient_id, tb_case_no, date_opened, dots_facility_name, bcg_scar, contact_person, contact_person_no, source_of_patient, name_of_reffering_physician, history_of_anti_tb_drug_intake, duration, specify_drugs, when, where, smear_status, no_of_household_contacts, classification_of_tb, tb_site, type_of_patient, category_1, category_2, category_3, treatment_started, tbdc_findings_and_recommendations, chest_xray, name_of_treatment_partner, designation_of_treatment_partner', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'drugIntakes' => array(self::HAS_MANY, 'DrugIntake', 'ntp_treatment_card_id'),
            'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
            'sputumExaminationResults' => array(self::HAS_MANY, 'SputumExaminationResults', 'ntp_treatment_card_id'),
            'treatmentOutcomes' => array(self::HAS_MANY, 'TreatmentOutcome', 'ntp_treatment_card_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient',
            'tb_case_no' => 'Tb Case No',
            'date_opened' => 'Date Opened',
            'dots_facility_name' => 'Dots Facility Name',
            'bcg_scar' => 'Bcg Scar',
            'contact_person' => 'Contact Person',
            'contact_person_no' => 'Contact Person No',
            'source_of_patient' => 'Source Of Patient',
            'name_of_reffering_physician' => 'Name Of Reffering Physician',
            'history_of_anti_tb_drug_intake' => 'History Of Anti Tb Drug Intake',
            'duration' => 'Duration',
            'specify_drugs' => 'Specify Drugs',
            'when' => 'When',
            'where' => 'Where',
            'smear_status' => 'Smear Status',
            'no_of_household_contacts' => 'No Of Household Contacts',
            'classification_of_tb' => 'Classification Of Tb',
            'tb_site' => 'Tb Site',
            'type_of_patient' => 'Type Of Patient',
            'category_1' => 'Category 1',
            'category_2' => 'Category 2',
            'category_3' => 'Category 3',
            'treatment_started' => 'Treatment Started',
            'tbdc_findings_and_recommendations' => 'Tbdc Findings And Recommendations',
            'chest_xray' => 'Chest Xray',
            'name_of_treatment_partner' => 'Name Of Treatment Partner',
            'designation_of_treatment_partner' => 'Designation Of Treatment Partner',
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
        $criteria->compare('tb_case_no', $this->tb_case_no);
        $criteria->compare('date_opened', $this->date_opened, true);
        $criteria->compare('dots_facility_name', $this->dots_facility_name, true);
        $criteria->compare('bcg_scar', $this->bcg_scar, true);
        $criteria->compare('contact_person', $this->contact_person, true);
        $criteria->compare('contact_person_no', $this->contact_person_no, true);
        $criteria->compare('source_of_patient', $this->source_of_patient, true);
        $criteria->compare('name_of_reffering_physician', $this->name_of_reffering_physician, true);
        $criteria->compare('history_of_anti_tb_drug_intake', $this->history_of_anti_tb_drug_intake, true);
        $criteria->compare('duration', $this->duration, true);
        $criteria->compare('specify_drugs', $this->specify_drugs, true);
        $criteria->compare('when', $this->when, true);
        $criteria->compare('where', $this->where, true);
        $criteria->compare('smear_status', $this->smear_status, true);
        $criteria->compare('no_of_household_contacts', $this->no_of_household_contacts);
        $criteria->compare('classification_of_tb', $this->classification_of_tb, true);
        $criteria->compare('tb_site', $this->tb_site, true);
        $criteria->compare('type_of_patient', $this->type_of_patient, true);
        $criteria->compare('category_1', $this->category_1, true);
        $criteria->compare('category_2', $this->category_2, true);
        $criteria->compare('category_3', $this->category_3, true);
        $criteria->compare('treatment_started', $this->treatment_started, true);
        $criteria->compare('tbdc_findings_and_recommendations', $this->tbdc_findings_and_recommendations, true);
        $criteria->compare('chest_xray', $this->chest_xray, true);
        $criteria->compare('name_of_treatment_partner', $this->name_of_treatment_partner, true);
        $criteria->compare('designation_of_treatment_partner', $this->designation_of_treatment_partner, true);

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
     * @return NtpTreatmentCard the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getTypesOfPatient() {
        $types = array(
            'New' => 'New',
            'Relapse' => 'Relapse',
            'Transfer-in' => 'Transfer-in',
            'Return After Default (RAD)' => 'Return After Default (RAD)',
            'Treatment failure' => 'Treatment failure',
            'Other' => 'Other',
        );
        return $types;
    }

    public static function getCategory1() {
        $cases = array(
            'Smear (+)' => 'Smear (+)',
            'Smear (-) with extensive parenchymal lesions as assessed by the TBDC' => 'Smear (-) with extensive parenchymal lesions as assessed by the TBDC',
            'Extra-pulmonary' => 'Extra-pulmonary',
        );
        return $cases;
    }

    public static function getCategory2() {
        $cases = array(
            'Relapse' => 'Relapse',
            'Treatment Failure' => 'Relapse',
            'Return After Default (RAD)' => 'Return After Default (RAD)',
            'Smear (+)' => 'Smear (+)',
            'Smear (-)' => 'Smear (-)',
        );
        return $cases;
    }

    public static function getCategory3() {
        $cases = array(
            'Smear (-) with extensive parenchymal lesions as assessed by the TBDC' => 'Smear (-) with extensive parenchymal lesions as assessed by the TBDC',
        );
        return $cases;
    }

}
