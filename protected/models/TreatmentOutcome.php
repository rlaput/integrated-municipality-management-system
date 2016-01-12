<?php

/**
 * This is the model class for table "treatment_outcome".
 *
 * The followings are the available columns in table 'treatment_outcome':
 * @property integer $id
 * @property integer $ntp_treatment_card_id
 * @property string $treatment_outcome_type
 * @property string $treatment_outcome_date
 * @property string $specify
 *
 * The followings are the available model relations:
 * @property NtpTreatmentCard $ntpTreatmentCard
 */
class TreatmentOutcome extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'treatment_outcome';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ntp_treatment_card_id, treatment_outcome_type, treatment_outcome_date, specify', 'required'),
            array('ntp_treatment_card_id', 'numerical', 'integerOnly' => true),
            array('treatment_outcome_type, specify', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ntp_treatment_card_id, treatment_outcome_type, treatment_outcome_date, specify', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'ntpTreatmentCard' => array(self::BELONGS_TO, 'NtpTreatmentCard', 'ntp_treatment_card_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'ntp_treatment_card_id' => 'Ntp Treatment Card',
            'treatment_outcome_type' => 'Treatment Outcome Type',
            'treatment_outcome_date' => 'Treatment Outcome Date',
            'specify' => 'Specify',
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
        $criteria->compare('ntp_treatment_card_id', $this->ntp_treatment_card_id);
        $criteria->compare('treatment_outcome_type', $this->treatment_outcome_type, true);
        $criteria->compare('treatment_outcome_date', $this->treatment_outcome_date, true);
        $criteria->compare('specify', $this->specify, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TreatmentOutcome the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
