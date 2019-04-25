<?php

/**
 * This is the model class for table "queue_call_entry".
 *
 * The followings are the available columns in table 'queue_call_entry':
 * @property string $id
 * @property string $queue
 * @property string $date_init
 * @property string $time_init
 * @property string $date_end
 * @property string $time_end
 * @property string $estatus
 * @property string $script
 *
 * The followings are the available model relations:
 * @property CallEntry[] $callEntries
 * @property CampaignEntry[] $campaignEntries
 * @property CurrentCallEntry[] $currentCallEntries
 */
class QueueCallEntry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'queue_call_entry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('queue', 'length', 'max'=>50),
			array('estatus', 'length', 'max'=>1),
			array('date_init, time_init, date_end, time_end, script', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, queue, date_init, time_init, date_end, time_end, estatus, script', 'safe', 'on'=>'search'),
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
			'callEntries' => array(self::HAS_MANY, 'CallEntry', 'id_queue_call_entry'),
			'campaignEntries' => array(self::HAS_MANY, 'CampaignEntry', 'id_queue_call_entry'),
			'currentCallEntries' => array(self::HAS_MANY, 'CurrentCallEntry', 'id_queue_call_entry'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'queue' => 'Queue',
			'date_init' => 'Date Init',
			'time_init' => 'Time Init',
			'date_end' => 'Date End',
			'time_end' => 'Time End',
			'estatus' => 'Estatus',
			'script' => 'Script',
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
		$criteria->compare('queue',$this->queue,true);
		$criteria->compare('date_init',$this->date_init,true);
		$criteria->compare('time_init',$this->time_init,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('time_end',$this->time_end,true);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('script',$this->script,true);

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
	 * @return QueueCallEntry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
