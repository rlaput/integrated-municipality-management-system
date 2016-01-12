<?php

/**
 * This is the model class for table "drug_intake".
 *
 * The followings are the available columns in table 'drug_intake':
 * @property integer $id
 * @property integer $ntp_treatment_card_id
 * @property string $drug_intake_month
 * @property string $dosers_given
 * @property string $cumulative_doses_given
 * @property string $d1
 * @property string $d2
 * @property string $d3
 * @property string $d4
 * @property string $d5
 * @property string $d6
 * @property string $d7
 * @property string $d8
 * @property string $d9
 * @property string $d10
 * @property string $d11
 * @property string $d12
 * @property string $d13
 * @property string $d14
 * @property string $d15
 * @property string $d16
 * @property string $d17
 * @property string $d18
 * @property string $d19
 * @property string $d20
 * @property string $d21
 * @property string $d22
 * @property string $d23
 * @property string $d24
 * @property string $d25
 * @property string $d26
 * @property string $d27
 * @property string $d28
 * @property string $d29
 * @property string $d30
 * @property string $d31
 *
 * The followings are the available model relations:
 * @property NtpTreatmentCard $ntpTreatmentCard
 */
class DrugIntake extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'drug_intake';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ntp_treatment_card_id, drug_intake_month', 'required'),
            array('ntp_treatment_card_id', 'numerical', 'integerOnly' => true),
            array('drug_intake_month, dosers_given, cumulative_doses_given, d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12, d13, d14, d15, d16, d17, d18, d19, d20, d21, d22, d23, d24, d25, d26, d27, d28, d29, d30, d31', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ntp_treatment_card_id, drug_intake_month, dosers_given, cumulative_doses_given, d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12, d13, d14, d15, d16, d17, d18, d19, d20, d21, d22, d23, d24, d25, d26, d27, d28, d29, d30, d31', 'safe', 'on' => 'search'),
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
            'drug_intake_month' => 'Drug Intake Month',
            'dosers_given' => 'Dosers Given',
            'cumulative_doses_given' => 'Cumulative Doses Given',
            'd1' => '1',
            'd2' => '2',
            'd3' => '3',
            'd4' => '4',
            'd5' => '5',
            'd6' => '6',
            'd7' => '7',
            'd8' => '8',
            'd9' => '9',
            'd10' => '10',
            'd11' => '11',
            'd12' => '12',
            'd13' => '13',
            'd14' => '14',
            'd15' => '15',
            'd16' => '16',
            'd17' => '17',
            'd18' => '18',
            'd19' => '19',
            'd20' => '20',
            'd21' => '21',
            'd22' => '22',
            'd23' => '23',
            'd24' => '24',
            'd25' => '25',
            'd26' => '26',
            'd27' => '27',
            'd28' => '28',
            'd29' => '29',
            'd30' => '30',
            'd31' => '31',
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
        $criteria->compare('drug_intake_month', $this->drug_intake_month, true);
        $criteria->compare('dosers_given', $this->dosers_given, true);
        $criteria->compare('cumulative_doses_given', $this->cumulative_doses_given, true);
        $criteria->compare('d1', $this->d1, true);
        $criteria->compare('d2', $this->d2, true);
        $criteria->compare('d3', $this->d3, true);
        $criteria->compare('d4', $this->d4, true);
        $criteria->compare('d5', $this->d5, true);
        $criteria->compare('d6', $this->d6, true);
        $criteria->compare('d7', $this->d7, true);
        $criteria->compare('d8', $this->d8, true);
        $criteria->compare('d9', $this->d9, true);
        $criteria->compare('d10', $this->d10, true);
        $criteria->compare('d11', $this->d11, true);
        $criteria->compare('d12', $this->d12, true);
        $criteria->compare('d13', $this->d13, true);
        $criteria->compare('d14', $this->d14, true);
        $criteria->compare('d15', $this->d15, true);
        $criteria->compare('d16', $this->d16, true);
        $criteria->compare('d17', $this->d17, true);
        $criteria->compare('d18', $this->d18, true);
        $criteria->compare('d19', $this->d19, true);
        $criteria->compare('d20', $this->d20, true);
        $criteria->compare('d21', $this->d21, true);
        $criteria->compare('d22', $this->d22, true);
        $criteria->compare('d23', $this->d23, true);
        $criteria->compare('d24', $this->d24, true);
        $criteria->compare('d25', $this->d25, true);
        $criteria->compare('d26', $this->d26, true);
        $criteria->compare('d27', $this->d27, true);
        $criteria->compare('d28', $this->d28, true);
        $criteria->compare('d29', $this->d29, true);
        $criteria->compare('d30', $this->d30, true);
        $criteria->compare('d31', $this->d31, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return DrugIntake the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
