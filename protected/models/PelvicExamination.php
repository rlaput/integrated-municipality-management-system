<?php

/**
 * This is the model class for table "pelvic_examination".
 *
 * The followings are the available columns in table 'pelvic_examination':
 * @property integer $id
 * @property integer $family_planning_service_id
 * @property string $perenium
 * @property string $vagina
 * @property string $cervix
 * @property string $cervix_color
 * @property string $cervix_consistency
 * @property string $uterus_position
 * @property string $uterus_size
 * @property string $uterus_mass
 * @property string $uterine_depth
 * @property string $uterus_adnexa
 *
 * The followings are the available model relations:
 * @property FamilyPlanningService $familyPlanningService
 */
class PelvicExamination extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'pelvic_examination';
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
            array('perenium, vagina, cervix, cervix_color, cervix_consistency, uterus_position, uterus_size, uterine_depth, uterus_adnexa', 'length', 'max' => 255),
            array('uterus_mass', 'length', 'max' => 3),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, family_planning_service_id, perenium, vagina, cervix, cervix_color, cervix_consistency, uterus_position, uterus_size, uterus_mass, uterine_depth, uterus_adnexa', 'safe', 'on' => 'search'),
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
            'perenium' => 'Perenium',
            'vagina' => 'Vagina',
            'cervix' => 'Cervix',
            'cervix_color' => 'Cervix Color',
            'cervix_consistency' => 'Cervix Consistency',
            'uterus_position' => 'Uterus Position',
            'uterus_size' => 'Uterus Size',
            'uterus_mass' => 'Uterus Mass',
            'uterine_depth' => 'Uterine Depth',
            'uterus_adnexa' => 'Uterus Adnexa',
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
        $criteria->compare('perenium', $this->perenium, true);
        $criteria->compare('vagina', $this->vagina, true);
        $criteria->compare('cervix', $this->cervix, true);
        $criteria->compare('cervix_color', $this->cervix_color, true);
        $criteria->compare('cervix_consistency', $this->cervix_consistency, true);
        $criteria->compare('uterus_position', $this->uterus_position, true);
        $criteria->compare('uterus_size', $this->uterus_size, true);
        $criteria->compare('uterus_mass', $this->uterus_mass, true);
        $criteria->compare('uterine_depth', $this->uterine_depth, true);
        $criteria->compare('uterus_adnexa', $this->uterus_adnexa, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PelvicExamination the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getPerenium() {
        $perenium = array(
            'Scars' => 'Scars',
            'Warts' => 'Warts',
            'Reddish' => 'Reddish',
            'Laceration' => 'Laceration'
        );
        return $perenium;
    }

    public static function getVagina() {
        $vagina = array(
            'Congested' => 'Congested',
            'Bartholinis cyst' => 'Bartholinis cyst',
            'Warts' => 'Warts',
            'Skene\'s Gland Discharge' => 'Skene\'s Gland Discharge',
            'Rectocele' => 'Rectocele',
            'Cystocele' => 'Cystocele'
        );
        return $vagina;
    }

    public static function getCervix() {
        $cervix = array(
            'Congested' => 'Congested',
            'Erosion' => 'Erosion',
            'Discharge' => 'Discharge',
            'Polyphs/cyts' => 'Polyphs/cyts',
            'Laceration' => 'Laceration'
        );
        return $cervix;
    }

    public static function getCervixColor() {
        $cervix_color = array(
            'Pinkish' => 'Pinkish',
            'Bluish' => 'Bluish'
        );
        return $cervix_color;
    }

    public static function getCervixConsistency() {
        $cervix_consistency = array(
            'Firm' => 'Firm',
            'Soft' => 'Soft'
        );
        return $cervix_consistency;
    }

    public static function getUterusPosition() {
        $uterus_position = array(
            'Mid' => 'Mid',
            'Anteflexed' => 'Anteflexed',
            'Retroflexed' => 'Retroflexed'
        );
        return $uterus_position;
    }

    public static function getUterusSize() {
        $uterus_size = array(
            'Normal' => 'Normal',
            'Small' => 'Small',
            'Large' => 'Large'
        );
        return $uterus_size;
    }

    public static function getUterusAdnexa() {
        $uterus_adnexa = array(
            'Normal' => 'Normal',
            'Mass' => 'Mass',
            'Tenderness' => 'Tenderness'
        );
        return $uterus_adnexa;
    }

    public static function getUterusMass() {
        $uterus_mass = array(
            '' => '',
            'Yes' => 'Yes',
            'No' => 'No'
        );
        return $uterus_mass;
    }

}
