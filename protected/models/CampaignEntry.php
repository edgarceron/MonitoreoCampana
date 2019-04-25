<?php

/**
 * This is the model class for table "campaign_entry".
 *
 * The followings are the available columns in table 'campaign_entry':
 * @property string $id
 * @property string $name
 * @property string $id_queue_call_entry
 * @property string $id_form
 * @property string $datetime_init
 * @property string $datetime_end
 * @property string $daytime_init
 * @property string $daytime_end
 * @property string $estatus
 * @property string $script
 * @property string $id_url
 *
 * The followings are the available model relations:
 * @property CallEntry[] $callEntries
 * @property CallProgressLog[] $callProgressLogs
 * @property QueueCallEntry $idQueueCallEntry
 * @property Form $idForm
 * @property CampaignExternalUrl $idUrl
 * @property Form[] $forms
 */
class CampaignEntry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campaign_entry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_queue_call_entry, datetime_init, datetime_end, daytime_init, daytime_end, script', 'required'),
			array('name', 'length', 'max'=>64),
			array('id_queue_call_entry, id_form, id_url', 'length', 'max'=>10),
			array('estatus', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, id_queue_call_entry, id_form, datetime_init, datetime_end, daytime_init, daytime_end, estatus, script, id_url', 'safe', 'on'=>'search'),
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
			'callEntries' => array(self::HAS_MANY, 'CallEntry', 'id_campaign'),
			'callProgressLogs' => array(self::HAS_MANY, 'CallProgressLog', 'id_campaign_incoming'),
			'idQueueCallEntry' => array(self::BELONGS_TO, 'QueueCallEntry', 'id_queue_call_entry'),
			'idForm' => array(self::BELONGS_TO, 'Form', 'id_form'),
			'idUrl' => array(self::BELONGS_TO, 'CampaignExternalUrl', 'id_url'),
			'forms' => array(self::MANY_MANY, 'Form', 'campaign_form_entry(id_campaign, id_form)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'id_queue_call_entry' => 'Id Queue Call Entry',
			'id_form' => 'Id Form',
			'datetime_init' => 'Datetime Init',
			'datetime_end' => 'Datetime End',
			'daytime_init' => 'Daytime Init',
			'daytime_end' => 'Daytime End',
			'estatus' => 'Estatus',
			'script' => 'Script',
			'id_url' => 'Id Url',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_queue_call_entry',$this->id_queue_call_entry,true);
		$criteria->compare('id_form',$this->id_form,true);
		$criteria->compare('datetime_init',$this->datetime_init,true);
		$criteria->compare('datetime_end',$this->datetime_end,true);
		$criteria->compare('daytime_init',$this->daytime_init,true);
		$criteria->compare('daytime_end',$this->daytime_end,true);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('script',$this->script,true);
		$criteria->compare('id_url',$this->id_url,true);

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
	 * @return CampaignEntry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
