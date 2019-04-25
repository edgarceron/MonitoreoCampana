<?php

/**
 * This is the model class for table "agent".
 *
 * The followings are the available columns in table 'agent':
 * @property string $id
 * @property string $type
 * @property string $number
 * @property string $name
 * @property string $password
 * @property string $estatus
 * @property string $eccp_password
 *
 * The followings are the available model relations:
 * @property Audit[] $audits
 * @property CallEntry[] $callEntries
 * @property CallProgressLog[] $callProgressLogs
 * @property Calls[] $calls
 * @property CurrentCallEntry[] $currentCallEntries
 */
class Agent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, name, password', 'required'),
			array('type', 'length', 'max'=>5),
			array('number', 'length', 'max'=>40),
			array('name, password', 'length', 'max'=>250),
			array('estatus', 'length', 'max'=>1),
			array('eccp_password', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, number, name, password, estatus, eccp_password', 'safe', 'on'=>'search'),
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
			'audits' => array(self::HAS_MANY, 'Audit', 'id_agent'),
			'callEntries' => array(self::HAS_MANY, 'CallEntry', 'id_agent'),
			'callProgressLogs' => array(self::HAS_MANY, 'CallProgressLog', 'id_agent'),
			'calls' => array(self::HAS_MANY, 'Calls', 'id_agent'),
			'currentCallEntries' => array(self::HAS_MANY, 'CurrentCallEntry', 'id_agent'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'number' => 'Number',
			'name' => 'Name',
			'password' => 'Password',
			'estatus' => 'Estatus',
			'eccp_password' => 'Eccp Password',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('eccp_password',$this->eccp_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function agentesActivos()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('estatus','A');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function agentesActivosArray(){
		$criteria=new CDbCriteria;
		$criteria->select = array('id','name');
		$criteria->compare('estatus','A');
		$criteria->order = 'number';
		return Agent::model()->findAll($criteria);
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->call_center;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
