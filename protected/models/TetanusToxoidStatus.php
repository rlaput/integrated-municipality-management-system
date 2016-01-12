<?php

/**
 * This is the model class for table "tetanus_toxoid_status".
 *
 * The followings are the available columns in table 'tetanus_toxoid_status':
 * @property integer $id
 * @property integer $maternal_health_record_id
 * @property string $tt
 * @property string $date
 *
 * The followings are the available model relations:
 * @property MaternalHealth $maternalHealthRecord
 */
class TetanusToxoidStatus extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tetanus_toxoid_status';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('maternal_health_record_id, tt, date', 'required'),
            array('maternal_health_record_id', 'numerical', 'integerOnly' => true),
            array('tt', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, maternal_health_record_id, tt, date', 'safe', 'on' => 'search'),
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
            'tt' => 'TT Data',
            'date' => 'Date',
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
        $criteria->compare('tt', $this->tt, true);
        $criteria->compare('date', $this->date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TetanusToxoidStatus the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
