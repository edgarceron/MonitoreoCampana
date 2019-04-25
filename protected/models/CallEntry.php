<?php

/**
 * This is the model class for table "call_entry".
 *
 * The followings are the available columns in table 'call_entry':
 * @property string $id
 * @property string $id_agent
 * @property string $id_queue_call_entry
 * @property string $id_contact
 * @property string $callerid
 * @property string $datetime_init
 * @property string $datetime_end
 * @property string $duration
 * @property string $status
 * @property string $transfer
 * @property string $datetime_entry_queue
 * @property integer $duration_wait
 * @property string $uniqueid
 * @property string $id_campaign
 * @property string $trunk
 *
 * The followings are the available model relations:
 * @property Agent $idAgent
 * @property QueueCallEntry $idQueueCallEntry
 * @property Contact $idContact
 * @property CampaignEntry $idCampaign
 * @property CallProgressLog[] $callProgressLogs
 * @property CallRecording[] $callRecordings
 * @property CurrentCallEntry[] $currentCallEntries
 * @property FormDataRecolectedEntry[] $formDataRecolectedEntries
 */
class CallEntry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $cuenta; 
	 
	public function tableName()
	{
		return 'call_entry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_queue_call_entry, callerid, trunk', 'required'),
			array('duration_wait', 'numerical', 'integerOnly'=>true),
			array('id_agent, id_queue_call_entry, id_contact, duration, id_campaign', 'length', 'max'=>10),
			array('callerid', 'length', 'max'=>15),
			array('status, uniqueid', 'length', 'max'=>32),
			array('transfer', 'length', 'max'=>6),
			array('trunk', 'length', 'max'=>20),
			array('datetime_init, datetime_end, datetime_entry_queue', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_agent, id_queue_call_entry, id_contact, callerid, datetime_init, datetime_end, duration, status, transfer, datetime_entry_queue, duration_wait, uniqueid, id_campaign, trunk', 'safe', 'on'=>'search'),
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
			'idAgent' => array(self::BELONGS_TO, 'Agent', 'id_agent'),
			'idQueueCallEntry' => array(self::BELONGS_TO, 'QueueCallEntry', 'id_queue_call_entry'),
			'idContact' => array(self::BELONGS_TO, 'Contact', 'id_contact'),
			'idCampaign' => array(self::BELONGS_TO, 'CampaignEntry', 'id_campaign'),
			'callProgressLogs' => array(self::HAS_MANY, 'CallProgressLog', 'id_call_incoming'),
			'callRecordings' => array(self::HAS_MANY, 'CallRecording', 'id_call_incoming'),
			'currentCallEntries' => array(self::HAS_MANY, 'CurrentCallEntry', 'id_call_entry'),
			'formDataRecolectedEntries' => array(self::HAS_MANY, 'FormDataRecolectedEntry', 'id_call_entry'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_agent' => 'Id Agent',
			'id_queue_call_entry' => 'Id Queue Call Entry',
			'id_contact' => 'Id Contact',
			'callerid' => 'Callerid',
			'datetime_init' => 'Datetime Init',
			'datetime_end' => 'Datetime End',
			'duration' => 'Duration',
			'status' => 'Status',
			'transfer' => 'Transfer',
			'datetime_entry_queue' => 'Datetime Entry Queue',
			'duration_wait' => 'Duration Wait',
			'uniqueid' => 'Uniqueid',
			'id_campaign' => 'Id Campaign',
			'trunk' => 'Trunk',
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
		$criteria->compare('id_agent',$this->id_agent,true);
		$criteria->compare('id_queue_call_entry',$this->id_queue_call_entry,true);
		$criteria->compare('id_contact',$this->id_contact,true);
		$criteria->compare('callerid',$this->callerid,true);
		$criteria->compare('datetime_init',$this->datetime_init,true);
		$criteria->compare('datetime_end',$this->datetime_end,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('transfer',$this->transfer,true);
		$criteria->compare('datetime_entry_queue',$this->datetime_entry_queue,true);
		$criteria->compare('duration_wait',$this->duration_wait);
		$criteria->compare('uniqueid',$this->uniqueid,true);
		$criteria->compare('id_campaign',$this->id_campaign,true);
		$criteria->compare('trunk',$this->trunk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
	 * @return CallEntry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
