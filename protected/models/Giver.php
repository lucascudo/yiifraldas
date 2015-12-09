<?php

/**
 * This is the model class for table "giver".
 *
 * The followings are the available columns in table 'giver':
 * @property string $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property integer $gift_id
 * @property string $gift_other
 * @property string $comment
 * @property integer $paid
 */
class Giver extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'giver';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, gift_id', 'required'),
			array('phone, gift_id, paid', 'numerical', 'integerOnly'=>true),
			array('name, email, gift_other', 'length', 'max'=>50),
			array('comment', 'length', 'max'=>20),
			array('paid', 'boolean'),
			array('email', 'email'),
			array('phone', 'unique', 'message'=>'Parece que você já está cadastrado.'),
			array('phone', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, phone, email, gift_id, gift_other, comment, paid', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Seu nome',
			'phone' => 'Seu telefone (somente números)',
			'email' => 'Seu email',
			'gift_id' => 'Presente',
			'gift_other' => 'Descrição do presente',
			'comment' => 'Comentário',
			'paid' => 'Pago',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gift_id',$this->gift_id);
		$criteria->compare('gift_other',$this->gift_other,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('paid',$this->paid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Giver the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}