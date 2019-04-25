<?php

/**
 * This is the model class for table "audit".
 *
 * The followings are the available columns in table 'audit':
 * @property string $id
 * @property string $id_agent
 * @property string $id_break
 * @property string $datetime_init
 * @property string $datetime_end
 * @property string $duration
 * @property string $ext_parked
 *
 * The followings are the available model relations:
 * @property Agent $idAgent
 * @property Break $idBreak
 */
class Audit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $cuenta; 
	 
	public function tableName()
	{
		return 'audit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_agent, datetime_init', 'required'),
			array('id_agent, id_break, ext_parked', 'length', 'max'=>10),
			array('datetime_end, duration', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_agent, id_break, datetime_init, datetime_end, duration, ext_parked', 'safe', 'on'=>'search'),
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
			'idBreak' => array(self::BELONGS_TO, 'Break', 'id_break'),
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
			'id_break' => 'Id Break',
			'datetime_init' => 'Datetime Init',
			'datetime_end' => 'Datetime End',
			'duration' => 'Duration',
			'ext_parked' => 'Ext Parked',
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
		$criteria->compare('id_break',$this->id_break,true);
		$criteria->compare('datetime_init',$this->datetime_init,true);
		$criteria->compare('datetime_end',$this->datetime_end,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('ext_parked',$this->ext_parked,true);

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
	 * int id_agent
	 * int id_break
	 * String fecha_inicio
	 * Strgin fecha_fin
	 * @return int numero de veces que el agente solicitado, descanso bajo la pausa solicitada 
	 * en el periodo especificado
	 */
	 
	 public function getBreaks($id_agent, $id_break, $fecha_inicio, $fecha_fin = null){
		$criteria = new CDbCriteria;
		$criteria->select = "count(*) as cuenta";
		$criteria->compare('id_agent', $id_agent);
		$criteria->compare('id_break', $id_break);
		if($fecha_fin == null){
			$criteria->compare('datetime_init','> '.$fecha_inicio);
		}
		else{
			$criteria->addCondition('datetime_init BETWEEN "'.$fecha_inicio.'" AND DATE_ADD("'.$fecha_fin.'", INTERVAL 1 DAY)');
		}
		$countBreaks = Audit::model()->find($criteria)['cuenta'];
		return $countBreaks;
	 }

	 /**
	 * int id_break
	 * String fecha_inicio
	 * Strgin fecha_fin
	 * @return int numero total de pausas entre los agentes para la fecha especificada
	 */
	 
	 public function totalBreaks($id_break, $fecha_inicio, $fecha_fin = null){
		$criteria = new CDbCriteria;
		$criteria->select = "count(*) as cuenta";
		$criteria->addCondition('id_break = '.$id_break);
		if($fecha_fin == null){
			$criteria->addCondition('datetime_init > '.$fecha_inicio);
		}
		else{
			$criteria->addCondition('datetime_init BETWEEN '.$fecha_inicio.' AND DATE_ADD("'.$fecha_fin.'", INTERVAL 1 DAY)');
		}
		$countBreaks = Audit::model()->find($criteria)['cuenta'];
		return $countBreaks;
	 }
	 
	 /**
	 * int id_agent
	 * String fecha_inicio
	 * Strgin fecha_fin
	 * @return int numero total de pausas entre los agentes para la fecha especificada
	 */
	 
	public function searchAgentBreaks($fecha_inicio, $id_agent, $fecha_fin=null){
		$criteria = new CDbCriteria;
		$criteria->addCondition('id_agent = '.$id_agent);
		$criteria->addCondition('id_break > 0');
		$criteria->order = 'datetime_init DESC';
		
		if($fecha_fin == null){
			$criteria->addCondition('datetime_init > '.$fecha_inicio);
		}
		else{
			$criteria->addCondition('datetime_init BETWEEN '.$fecha_inicio.' AND DATE_ADD('.$fecha_fin.', INTERVAL 1 DAY)');
		}
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	 
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Audit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
