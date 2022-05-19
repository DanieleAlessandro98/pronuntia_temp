<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AggiungiAssistitoForm;

class LogopedistaController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAggiungiAssistito()
    {
        $model = new AggiungiAssistitoForm();

        if ($model->load(Yii::$app->request->post()))
        {
            $utente = $model->trovaUtente();

            if ($utente != null)
            {
                $model->aggiungiAssistito($utente->id);
                return $this->render('aggiungi-assistito-riuscito', ['utente' => $utente]);
            }
            else
                return $this->render('aggiungi-assistito-fallito');
        }

        return $this->render('aggiungi-assistito', ['model' => $model]);
    }
}