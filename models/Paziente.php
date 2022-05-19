<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paziente".
 *
 * @property int $id
 * @property int $logopedista
 * @property int $utente
 *
 * @property Logopedista $logopedista0
 * @property Utente $utente0
 */
class Paziente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paziente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['logopedista', 'utente'], 'required'],
            [['logopedista', 'utente'], 'integer'],
            [['logopedista'], 'exist', 'skipOnError' => true, 'targetClass' => Logopedista::className(), 'targetAttribute' => ['logopedista' => 'id']],
            [['utente'], 'exist', 'skipOnError' => true, 'targetClass' => Utente::className(), 'targetAttribute' => ['utente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logopedista' => 'Logopedista',
            'utente' => 'Utente',
        ];
    }

    /**
     * Gets query for [[Logopedista0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLogopedista0()
    {
        return $this->hasOne(Logopedista::className(), ['id' => 'logopedista']);
    }

    /**
     * Gets query for [[Utente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtente0()
    {
        return $this->hasOne(Utente::className(), ['id' => 'utente']);
    }
}
