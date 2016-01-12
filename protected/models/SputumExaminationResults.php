<?php

/**
 * This is the model class for table "sputum_examination_results".
 *
 * The followings are the available columns in table 'sputum_examination_results':
 * @property integer $id
 * @property integer $ntp_treatment_card_id
 * @property integer $month
 * @property string $due_date
 * @property string $date_examined
 * @property string $result
 * @property double $sputum_weight
 *
 * The followings are the available model relations:
 * @property NtpTreatmentCard $ntpTreatmentCard
 */
class SputumExaminationResults extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sputum_examination_results';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ntp_treatment_card_id, month, due_date, date_examined, result, sputum_weight', 'required'),
            array('ntp_treatment_card_id, month', 'numerical', 'integerOnly' => true),
            array('sputum_weight', 'numerical'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ntp_treatment_card_id, month, due_date, date_examined, result, sputum_weight', 'safe', 'on' => 'search'),
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
            'month' => 'Month',
            'due_date' => 'Due Date',
            'date_examined' => 'Date Examined',
            'result' => 'Result',
            'sputum_weight' => 'Sputum Weight',
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
        $criteria->compare('month', $this->month);
        $criteria->compare('due_date', $this->due_date, true);
        $criteria->compare('date_examined', $this->date_examined, true);
        $criteria->compare('result', $this->result, true);
        $criteria->compare('sputum_weight', $this->sputum_weight);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return SputumExaminationResults the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
