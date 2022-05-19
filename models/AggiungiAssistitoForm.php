<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AggiungiAssistitoForm extends Model
{
    public $codice_fiscale;

    public function rules()
    {
        return [
            // codice_fiscale are both required
            ['codice_fiscale', 'required'],
        ];
    }

    public function trovaUtente()
    {
        return Utente::findIdentityByCodiceFiscale($this->codice_fiscale);
    }

    public function aggiungiAssistito($utente)
    {
        $paziente = new Paziente();

        // 1 = simula id logopedista (che sarà loggato, quindi sistema otterrà direttamente id)
        $paziente->logopedista = 1;
        $paziente->utente = $utente;

        $paziente->save();
    }
}
