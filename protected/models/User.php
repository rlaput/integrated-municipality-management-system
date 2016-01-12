<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $family_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $position
 * @property string $birthdate
 * @property string $account_type
 *
 * The followings are the available model relations:
 * @property NtpLaboratoryRequest[] $ntpLaboratoryRequests
 * @property Patient[] $patients
 */
class User extends CActiveRecord {

    public $password_repeat;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, password_repeat, family_name, first_name, middle_name, position, birthdate, account_type', 'required'),
            array('username', 'length', 'max' => 15),
            array('username', 'unique'),
            array('password, family_name, first_name, middle_name', 'length', 'max' => 255),
            array('position', 'length', 'max' => 22),
            array('account_type', 'length', 'max' => 7),
            array('username, password', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => 'Username/password can only contain alphanumeric characters and underscores(_).'),
            array('password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Passwords do not match.'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, password, family_name, first_name, middle_name, position, birthdate, account_type', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'ntpLaboratoryRequests' => array(self::HAS_MANY, 'NtpLaboratoryRequest', 'examined_by'),
            'patients' => array(self::HAS_MANY, 'Patient', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'password_repeat' => 'Confirm Password',
            'family_name' => 'Family Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'position' => 'Position',
            'birthdate' => 'Birthdate',
            'account_type' => 'Account Type',
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
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('family_name', $this->family_name, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('middle_name', $this->middle_name, true);
        $criteria->compare('position', $this->position, true);
        $criteria->compare('birthdate', $this->birthdate, true);
        $criteria->compare('account_type', $this->account_type, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function isAdmin() {
        return strtolower($this->account_type) === 'admin';
    }

    public function getName() {
        return $this->family_name . ", " . $this->first_name . " " . $this->middle_name;
    }

    public static function getPositions() {
        $positions = ZHtml::enumItem(User::model(), 'position');
        $positions[''] = '';
        asort($positions);
        return $positions;
    }

}
