<?php

/**
 * This is the model class for table "reglas_descuentos".
 *
 * The followings are the available columns in table 'reglas_descuentos':
 * @property integer $ID
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property integer $city
 * @property integer $children
 * @property integer $people
 * @property integer $package
 * @property integer $nationality
 * @property integer $payment
 * @property string $date_start
 * @property string $date_finish
 * @property string $rule
 * @property string $dat1
 * @property string $dat2
 * @property string $dat3
 * @property string $dat4
 * @property string $dat5
 * @property string $dat6
 * @property string $dat7
 * @property string $dat8
 * @property string $dat9
 * @property string $dat10
 */
class ReglasDescuentos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reglas_descuentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('nombre, descripcion, fecha_creacion, city, children, people, package, nationality, payment, rule, dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'required'),
			array('city, children, people, package, nationality, payment', 'numerical', 'integerOnly'=>true),
			array('nombre, rule, dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>100),
			array('date_start, date_finish', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, nombre, descripcion, fecha_creacion, city, children, people, package, nationality, payment, date_start, date_finish, rule, dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'fecha_creacion' => 'Fecha Creacion',
			'city' => 'City',
			'children' => 'Children',
			'people' => 'People',
			'package' => 'Package',
			'nationality' => 'Nationality',
			'payment' => 'Payment',
			'date_start' => 'Date Start',
			'date_finish' => 'Date Finish',
			'rule' => 'Rule',
			'dat1' => 'Dat1',
			'dat2' => 'Curso',
			'dat3' => 'Dat3',
			'dat4' => 'Dat4',
			'dat5' => 'Dat5',
			'dat6' => 'Dat6',
			'dat7' => 'Dat7',
			'dat8' => 'Dat8',
			'dat9' => 'Dat9',
			'dat10' => 'Dat10',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('city',$this->city);
		$criteria->compare('children',$this->children);
		$criteria->compare('people',$this->people);
		$criteria->compare('package',$this->package);
		$criteria->compare('nationality',$this->nationality);
		$criteria->compare('payment',$this->payment);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_finish',$this->date_finish,true);
		$criteria->compare('rule',$this->rule,true);
		$criteria->compare('dat1',$this->dat1,true);
		$criteria->compare('dat2',$this->dat2,true);
		$criteria->compare('dat3',$this->dat3,true);
		$criteria->compare('dat4',$this->dat4,true);
		$criteria->compare('dat5',$this->dat5,true);
		$criteria->compare('dat6',$this->dat6,true);
		$criteria->compare('dat7',$this->dat7,true);
		$criteria->compare('dat8',$this->dat8,true);
		$criteria->compare('dat9',$this->dat9,true);
		$criteria->compare('dat10',$this->dat10,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReglasDescuentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
