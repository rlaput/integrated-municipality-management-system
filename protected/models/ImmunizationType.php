<?php

/**
 * This is the model class for table "immunization_type".
 *
 * The followings are the available columns in table 'immunization_type':
 * @property integer $id
 * @property integer $child_health_record_id
 * @property string $bcg
 * @property string $hep_bv
 * @property string $dpt
 * @property string $opv
 * @property string $amv
 * @property string $mmr
 * @property string $pentavalent
 * @property string $session
 *
 * The followings are the available model relations:
 * @property ChildHealth $childHealthRecord
 */
class ImmunizationType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'immunization_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('child_health_record_id', 'required'),
			array('child_health_record_id', 'numerical', 'integerOnly'=>true),
			array('bcg, hep_bv, dpt, opv, amv, mmr, pentavalent, session', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, child_health_record_id, bcg, hep_bv, dpt, opv, amv, mmr, pentavalent, session', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'childHealthRecord' => array(self::BELONGS_TO, 'ChildHealth', 'child_health_record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'child_health_record_id' => 'Child Health Record',
			'bcg' => 'BCG',
			'hep_bv' => 'Hep BV',
			'dpt' => 'DPV',
			'opv' => 'OPV',
			'amv' => 'AMV',
			'mmr' => 'MMR',
			'pentavalent' => 'Pentavalent',
			'session' => 'Session',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('child_health_record_id',$this->child_health_record_id);
		$criteria->compare('bcg',$this->bcg,true);
		$criteria->compare('hep_bv',$this->hep_bv,true);
		$criteria->compare('dpt',$this->dpt,true);
		$criteria->compare('opv',$this->opv,true);
		$criteria->compare('amv',$this->amv,true);
		$criteria->compare('mmr',$this->mmr,true);
		$criteria->compare('pentavalent',$this->pentavalent,true);
		$criteria->compare('session',$this->session,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ImmunizationType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
