<?php

/**
 * This is the model class for table "quote_cab".
 *
 * The followings are the available columns in table 'quote_cab':
 * @property integer $ID
 * @property integer $usuario
 * @property integer $cliente
 * @property string $fecha_creacion
 * @property string $fecha_vigencia
 * @property string $observacion
 * @property integer $ciudad
 * @property integer $people
 * @property integer $children
 * @property integer $nacionality
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
class QuoteCab extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quote_cab';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, cliente, fecha_creacion, observacion, ciudad, people, children, nacionality, dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'required'),
			array('usuario, cliente, ciudad, people, children, nacionality', 'numerical', 'integerOnly'=>true),
			array('dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'length', 'max'=>50),
			array('fecha_vigencia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, usuario, cliente, fecha_creacion, fecha_vigencia, observacion, ciudad, people, children, nacionality, dat1, dat2, dat3, dat4, dat5, dat6, dat7, dat8, dat9, dat10', 'safe', 'on'=>'search'),
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
			'usuario' => 'Usuario',
			'cliente' => 'Cliente',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_vigencia' => 'Fecha Vigencia',
			'observacion' => 'Observacion',
			'ciudad' => 'Ciudad',
			'people' => 'People',
			'children' => 'Children',
			'nacionality' => 'Nacionality',
			'dat1' => 'Dat1',
			'dat2' => 'Dat2',
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
		$criteria->compare('usuario',$this->usuario);
		$criteria->compare('cliente',$this->cliente);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_vigencia',$this->fecha_vigencia,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('people',$this->people);
		$criteria->compare('children',$this->children);
		$criteria->compare('nacionality',$this->nacionality);
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
	 * @return QuoteCab the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
