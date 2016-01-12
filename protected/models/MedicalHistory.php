<?php

/**
 * This is the model class for table "medical_history".
 *
 * The followings are the available columns in table 'medical_history':
 * @property integer $id
 * @property integer $family_planning_service_id
 * @property string $heent
 * @property string $chest_heart
 * @property string $abdomen
 * @property string $genital
 * @property string $extremities
 * @property string $skin
 * @property string $other_history
 *
 * The followings are the available model relations:
 * @property FamilyPlanningService $familyPlanningService
 */
class MedicalHistory extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'medical_history';
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
            array('heent, chest_heart, abdomen, genital, extremities, skin, other_history', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, family_planning_service_id, heent, chest_heart, abdomen, genital, extremities, skin, other_history', 'safe', 'on' => 'search'),
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
            'heent' => 'HEENT',
            'chest_heart' => 'Chest/Heart',
            'abdomen' => 'Abdomen',
            'genital' => 'Genital',
            'extremities' => 'Extremities',
            'skin' => 'Skin',
            'other_history' => 'Other History',
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
        $criteria->compare('heent', $this->heent, true);
        $criteria->compare('chest_heart', $this->chest_heart, true);
        $criteria->compare('abdomen', $this->abdomen, true);
        $criteria->compare('genital', $this->genital, true);
        $criteria->compare('extremities', $this->extremities, true);
        $criteria->compare('skin', $this->skin, true);
        $criteria->compare('other_history', $this->other_history, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MedicalHistory the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getHeent() {
        $heent = array(
            'Epilepsy' => 'Epilepsy',
            'Severe headache/dizziness' => 'Severe headache/dizziness',
            'Visual disturbance/blurring of vision' => 'Visual disturbance/blurring of vision',
            'Yellowish conjunctiva' => 'Yellowish conjunctiva',
            'Enlarged thyroid' => 'Enlarged thyroid'
        );
        return $heent;
    }

    public static function getChestHeart() {
        $chestheart = array(
            'Severe chest pain' => 'Severe chest pain',
            'Shortness of breath and easy fatiguability' => 'Shortness of breath and easy fatiguability',
            'Breast/axiliary masses' => 'Breast/axiliary masses',
            'Nipple discharges' => 'Nipple discharges',
            'Systolic of 140 and above' => 'Systolic of 140 and above',
            'Diastolic of 90 and above' => 'Diastolic of 90 and above',
            'Family history of CVA (strokes), hypertension asthma, rheumatic heart disease' => 'Family history of CVA (strokes), hypertension asthma, rheumatic heart disease'
        );
        return $chestheart;
    }

    public static function getAbdomen() {
        $abdomen = array(
            'Mass in the abdomen' => 'Mass in the abdomen',
            'History of gallbladder disease' => 'History of gallbladder disease',
            'History of liver disease' => 'History of liver disease'
        );
        return $abdomen;
    }

    public static function getGenital() {
        $genital = array(
            'Mass in the uterus' => 'Mass in the uterus',
            'Vaginal discharge' => 'Vaginal discharge',
            'Intermenstrual bleeding' => 'Intermenstrual bleeding',
            'Postcoltal bleeding' => 'Postcoltal bleeding'
        );
        return $genital;
    }

    public static function getExtremities() {
        $extremities = array(
            'Severe varicosities' => 'Severe varicosities',
            'Swelling or severe pain in the legs not related to injuries' => 'Swelling or severe pain in the legs not related to injuries'
        );
        return $extremities;
    }

    public static function getSkin() {
        $skin = array(
            'Yellowish Skin' => 'Yellowish Skin'
        );
        return $skin;
    }

    public static function getHistory() {
        $history = array(
            'Smoking' => 'Smoking',
            'Allergies' => 'Allergies',
            'Drug intake (anti-tubercolosis, anti-diabetic, anticonvulsant)' => 'Drug intake (anti-tubercolosis, anti-diabetic, anticonvulsant)',
            'STD' => 'STD',
            'Multiple partners' => 'Multiple partners',
            'Bleeding tendencies (nose, gums, etc)' => 'Bleeding tendencies (nose, gums, etc)',
            'Anemia' => 'Anemia',
            'Diabetes' => 'Diabetes'
        );
        return $history;
    }

}
