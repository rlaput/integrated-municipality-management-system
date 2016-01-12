<?php

/**
 * This is the model class for table "maternal_health_details".
 *
 * The followings are the available columns in table 'maternal_health_details':
 * @property integer $id
 * @property integer $maternal_health_record_id
 * @property string $date
 * @property string $aog
 * @property string $maternal_weight
 * @property string $bp
 * @property string $fh
 * @property string $fhb
 * @property string $presenting_part_of_fetus
 * @property string $findings
 * @property string $nurses_notes
 *
 * The followings are the available model relations:
 * @property MaternalHealth $maternalHealthRecord
 */
class MaternalHealthDetails extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'maternal_health_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('maternal_health_record_id, date, maternal_weight, bp, fh, fhb, presenting_part_of_fetus, findings', 'required'),
            array('maternal_health_record_id', 'numerical', 'integerOnly' => true),
            array('aog, maternal_weight, bp, fh, fhb, presenting_part_of_fetus', 'length', 'max' => 255),
            array('nurses_notes', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, maternal_health_record_id, date, aog, maternal_weight, bp, fh, fhb, presenting_part_of_fetus, findings, nurses_notes', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'maternalHealthRecord' => array(self::BELONGS_TO, 'MaternalHealth', 'maternal_health_record_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'maternal_health_record_id' => 'Maternal Health Record',
            'date' => 'Date',
            'aog' => 'Aog',
            'maternal_weight' => 'Maternal Weight',
            'bp' => 'Bp',
            'fh' => 'Fh',
            'fhb' => 'Fhb',
            'presenting_part_of_fetus' => 'Presenting Part Of Fetus',
            'findings' => 'Findings',
            'nurses_notes' => 'Nurses Notes',
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
        $criteria->compare('maternal_health_record_id', $this->maternal_health_record_id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('aog', $this->aog, true);
        $criteria->compare('maternal_weight', $this->maternal_weight, true);
        $criteria->compare('bp', $this->bp, true);
        $criteria->compare('fh', $this->fh, true);
        $criteria->compare('fhb', $this->fhb, true);
        $criteria->compare('presenting_part_of_fetus', $this->presenting_part_of_fetus, true);
        $criteria->compare('findings', $this->findings, true);
        $criteria->compare('nurses_notes', $this->nurses_notes, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MaternalHealthDetails the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
