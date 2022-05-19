# Processo di sviluppo che ho fatto in ordine:

1)	creato le tabelle db

2)	creato i models su queste tabelle usando gii (Logopedista.php, Utente.php, Paziente.php)

3)	creato views::logopedista::index.php

4)	creato controllers::logopedista::LogopedistaController.php

5)	aggiunto metodo "actionIndex()" in "LogopedistaController.php" che reindirizza alla rispettiva index

6)	aggiunto pulsante per indirizzamento a "aggiungi paziente" in views::logopedista::index.php

7)	creato file "models::AggiungiAssistitoForm.php"

8)	aggiunto metodo "actionAggiungiAssistito()" in "controllers::logopedista::LogopedistaController.php" che gestisce il form

9)	creato views::logopedista::aggiungi-assistito.php per gestire l'input del form

10)	aggiunto metodo "trovaUtente()" in "models::AggiungiAssistitoForm.php"

11)	aggiunto metodo "findIdentityByCodiceFiscale()" in "models::Utente.php"

12)	creato views::logopedista::aggiungi-assistito-riuscito.php per gestire inserimento riuscito
12)	creato views::logopedista::aggiungi-assistito-fallito.php per gestire inserimento fallito (utente non trovato)

13)	aggiunto metodo "aggiungiAssistito()" in "models::AggiungiAssistitoForm.php"
