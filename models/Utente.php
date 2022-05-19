<?php

namespace app\models;

use Yii;

class Utente extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    public static function tableName()
    {
        return 'utente';
    }

    public function rules()
    {
        return [
            [['nome', 'cognome'], 'string', 'max' => 50],
            [['codice_fiscale'], 'string', 'max' => 16],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cognome' => 'Cognome',
            'codice_fiscale' => 'Codice Fiscale',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByCodiceFiscale($codFisc)
    {
        return static::find()->where(['codice_fiscale' => $codFisc])->one();
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {}

    public function getAuthKey()
    {}

    public function validateAuthKey($authKey)
    {}
}
