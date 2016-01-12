<?php

/**
 * This is the model class for table "child_health".
 *
 * The followings are the available columns in table 'child_health':
 * @property integer $id
 * @property integer $patient_id
 * @property integer $ufc_no
 * @property string $birth_order
 * @property string $place_of_delivery
 * @property string $mothers_name
 * @property integer $mothers_age
 * @property string $mothers_occupation
 * @property string $fathers_name
 * @property integer $fathers_age
 * @property string $fathers_occupation
 * @property string $feeding_type
 * @property string $date_referred_for_newborn_screening
 * @property string $child_protected_at_birth
 * @property string $date_assessed
 * @property string $tt_status_of_mother
 * @property string $anemic_children_mos_seen
 * @property string $anemic_children_mos_given_iron
 * @property double $birth_weight
 * @property string $low_birth_weight_seen
 * @property string $low_birth_weight_given_iron
 * @property string $date_iron_started
 * @property string $vit_a_given
 * @property string $date_iron_completed
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * @property ChildHealthDetails[] $childHealthDetails
 * @property ExclusiveBfCheck[] $exclusiveBfChecks
 * @property ImmunizationType[] $immunizationTypes
 */
class ChildHealth extends CActiveRecord {

    public $patient_family_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'child_health';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('patient_id, mothers_name, fathers_name', 'required'),
            array('patient_id, ufc_no, mothers_age, fathers_age', 'numerical', 'integerOnly' => true),
            array('birth_weight', 'numerical'),
            array('birth_order, mothers_name, mothers_occupation, fathers_name, fathers_occupation, feeding_type, child_protected_at_birth, tt_status_of_mother, anemic_children_mos_seen, anemic_children_mos_given_iron, low_birth_weight_seen, low_birth_weight_given_iron, vit_a_given', 'length', 'max' => 255),
            array('place_of_delivery', 'length', 'max' => 19),
            array('date_referred_for_newborn_screening, date_assessed, date_iron_started, date_iron_completed', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, patient_id, ufc_no, birth_order, place_of_delivery, mothers_name, mothers_age, mothers_occupation, fathers_name, fathers_age, fathers_occupation, feeding_type, date_referred_for_newborn_screening, child_protected_at_birth, date_assessed, tt_status_of_mother, anemic_children_mos_seen, anemic_children_mos_given_iron, birth_weight, low_birth_weight_seen, low_birth_weight_given_iron, date_iron_started, vit_a_given, date_iron_completed', 'safe', 'on' => 'search'),
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
            'childHealthDetails' => array(self::HAS_MANY, 'ChildHealthDetails', 'child_health_record_id'),
            'exclusiveBfChecks' => array(self::HAS_MANY, 'ExclusiveBfCheck', 'child_health_record_id'),
            'immunizationTypes' => array(self::HAS_MANY, 'ImmunizationType', 'child_health_record_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'ufc_no' => 'UFC No.',
            'birth_order' => 'Birth Order',
            'place_of_delivery' => 'Place Of Delivery',
            'mothers_name' => 'Mother\'s Name',
            'mothers_age' => 'Mother\'s Age',
            'mothers_occupation' => 'Mother\'s Occupation',
            'fathers_name' => 'Father\'s Name',
            'fathers_age' => 'Father\'s Age',
            'fathers_occupation' => 'Father\'s Occupation',
            'feeding_type' => 'Type of Feeding',
            'date_referred_for_newborn_screening' => 'Date Referred For Newborn Screening',
            'child_protected_at_birth' => 'Child Protected At Birth',
            'date_assessed' => 'Date Assessed',
            'tt_status_of_mother' => 'TT Status Of Mother',
            'anemic_children_mos_seen' => 'Anemic Children Mos Seen',
            'anemic_children_mos_given_iron' => 'Anemic Children Mos Given Iron',
            'birth_weight' => 'Birth Weight',
            'low_birth_weight_seen' => 'Low Birth Weight Seen',
            'low_birth_weight_given_iron' => 'Low Birth Weight Given Iron',
            'date_iron_started' => 'Date Iron Started',
            'vit_a_given' => 'Vit A Given',
            'date_iron_completed' => 'Date Iron Completed',
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
        $criteria->compare('ufc_no', $this->ufc_no);
        $criteria->compare('birth_order', $this->birth_order, true);
        $criteria->compare('place_of_delivery', $this->place_of_delivery, true);
        $criteria->compare('mothers_name', $this->mothers_name, true);
        $criteria->compare('mothers_age', $this->mothers_age);
        $criteria->compare('mothers_occupation', $this->mothers_occupation, true);
        $criteria->compare('fathers_name', $this->fathers_name, true);
        $criteria->compare('fathers_age', $this->fathers_age);
        $criteria->compare('fathers_occupation', $this->fathers_occupation, true);
        $criteria->compare('feeding_type', $this->feeding_type, true);
        $criteria->compare('date_referred_for_newborn_screening', $this->date_referred_for_newborn_screening, true);
        $criteria->compare('child_protected_at_birth', $this->child_protected_at_birth, true);
        $criteria->compare('date_assessed', $this->date_assessed, true);
        $criteria->compare('tt_status_of_mother', $this->tt_status_of_mother, true);
        $criteria->compare('anemic_children_mos_seen', $this->anemic_children_mos_seen, true);
        $criteria->compare('anemic_children_mos_given_iron', $this->anemic_children_mos_given_iron, true);
        $criteria->compare('birth_weight', $this->birth_weight);
        $criteria->compare('low_birth_weight_seen', $this->low_birth_weight_seen, true);
        $criteria->compare('low_birth_weight_given_iron', $this->low_birth_weight_given_iron, true);
        $criteria->compare('date_iron_started', $this->date_iron_started, true);
        $criteria->compare('vit_a_given', $this->vit_a_given, true);
        $criteria->compare('date_iron_completed', $this->date_iron_completed, true);

        $criteria->compare('patient_family_name', $this->patient_family_name, true);
        $criteria->compare('patient_middle_name', $this->patient_family_name, true, 'OR');
        $criteria->compare('patient_first_name', $this->patient_family_name, true, 'OR');

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
     * @return ChildHealth the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getPlaceOfDelivery() {
        $placeOfDelivery = ZHtml::enumItem(ChildHealth::model(), 'place_of_delivery');
        $placeOfDelivery[''] = '';
        asort($placeOfDelivery);
        return $placeOfDelivery;
    }

}
