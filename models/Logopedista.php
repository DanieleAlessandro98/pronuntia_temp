<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logopedista".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $cognome
 * @property string|null $matricola
 *
 * @property Paziente[] $pazientes
 */
class Logopedista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logopedista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cognome'], 'string', 'max' => 50],
            [['matricola'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cognome' => 'Cognome',
            'matricola' => 'Matricola',
        ];
    }

    /**
     * Gets query for [[Pazientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPazientes()
    {
        return $this->hasMany(Paziente::className(), ['logopedista' => 'id']);
    }
}
