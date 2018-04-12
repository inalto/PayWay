<?php

namespace PayWay;

class Error {

	private $errorcode=[];

	function __construct() {
		$this->errorcode['IGFS_000']="TRANSAZIONE OK";
		$this->errorcode['IGFS_001']="DESTINATARIO SCONOSCIUTO";
		$this->errorcode['IGFS_00155']="ID BATCH NON VALIDO";
		$this->errorcode['IGFS_00156']="ID BATCH NON UNIVOCO";
		$this->errorcode['IGFS_00157']="STRUMENTO PAGAMENTO NON VALIDO";
		$this->errorcode['IGFS_00158']="NUMERO CARTA NON NUMERICO";
		$this->errorcode['IGFS_00159']="NUMERO CARTA NON PRESENTE";
		$this->errorcode['IGFS_002']="CARTA SCADUTA";
		$this->errorcode['IGFS_00260']="L'IMPORTO DEL CREDITO SUPERA L'IMPORTO DEL MOVIMENTO";
		$this->errorcode['IGFS_00261']="L'IMPORTO DEL MOVIMENTO SUPERA L'IMPORTO DELL' AUTORIZZAZIONE";
		$this->errorcode['IGFS_003']="CARTA ERRATA";
		$this->errorcode['IGFS_004']="CARTA IN BLACK LIST";
		$this->errorcode['IGFS_00452']="CODICE TERMINALE NON PRESENTE";
		$this->errorcode['IGFS_00456']="CODICE TERMINALE ERRATO";
		$this->errorcode['IGFS_005']="ERRORE DI FORMATO";
		$this->errorcode['IGFS_006']="ERRORE FILE SYSTEM";
		$this->errorcode['IGFS_007']="ERRORE DI COMUNICAZIONE";
		$this->errorcode['IGFS_00701']="BATCH ID NON PROCESSATO";
		$this->errorcode['IGFS_00704']="BATCH ID NON NUMERICO";
		$this->errorcode['IGFS_00705']="BATCH ID NON PRESENTE";
		$this->errorcode['IGFS_008']="AUTORIZZAZIONE NEGATA";
		$this->errorcode['IGFS_009']="RITIRARE CARTA";
		$this->errorcode['IGFS_00950']="DIRECTORY BATCH UPLOAD NON PRESENTE";
		$this->errorcode['IGFS_00951']="DIRECTORY BATCH DOWNLOAD NON PRESENTE";
		$this->errorcode['IGFS_00952']="NOME DIRECTORY ARCHIVIAZIONE BATCH NON PRESENTE";
		$this->errorcode['IGFS_010']="MERCHANT NON ABILITATO";
		$this->errorcode['IGFS_01000']="TRANSAZIONE NEGATA DAL SISTEMA ANTIFRODE";
		$this->errorcode['IGFS_011']="CONTATTARE ACQUIRER";
		$this->errorcode['IGFS_014']="MERCHANT NON CONVENZIONATO";
		$this->errorcode['IGFS_015']="CARTA NON GESTITA";
		$this->errorcode['IGFS_016']="CARTA IN RANGE NEGATIVO O STRANIERA";
		$this->errorcode['IGFS_018']="CARTA INESISTENTE";
		$this->errorcode['IGFS_020']="CARTA INVALIDA";
		$this->errorcode['IGFS_021']="CODICE MERCHANT ERRATO";
		$this->errorcode['IGFS_029']="DATA SCADENZA ERRATA";
		$this->errorcode['IGFS_030']="FONDI INSUFFICIENTI";
		$this->errorcode['IGFS_032']="IMPORTO NON VALIDO";
		$this->errorcode['IGFS_033']="TRANSAZIONE ORIGINALE NON TROVATA";
		$this->errorcode['IGFS_083']="ERRORE CIFRATURA TRANSAZIONE";
		$this->errorcode['IGFS_085']="CODICE DIVISA ERRATO";
		$this->errorcode['IGFS_086']="MALFUNZIONAMENTO SISTEMA";
		$this->errorcode['IGFS_087']="ACQUIRER NON RAGGIUNGIBILE";
		$this->errorcode['IGFS_088']="MANCATA RISPOSTA DA ACQUIRER";
		$this->errorcode['IGFS_091']="MALFUNZIONAMENTO SISTEMA ACQUIRER";
		$this->errorcode['IGFS_092']="TRANSAZIONE SCONOSCIUTA";
		$this->errorcode['IGFS_093']="CONFERMA GIA' PRESENTE";
		$this->errorcode['IGFS_095']="STORNO PER NOTIFICA INESISTENTE";
		$this->errorcode['IGFS_096']="STORNO PER AUTORIZZAZIONE INESISTENTE";
		$this->errorcode['IGFS_097']="CONFERMA PER AUTORIZZAZIONE INESISTENTE";
		$this->errorcode['IGFS_098']="IMPORTO SUPERIORE AD IMPORTO AUTORIZZATO";
		$this->errorcode['IGFS_10000']="CARATTERI NON VALIDI";
		$this->errorcode['IGFS_101']="MAC ERRATO";
		$this->errorcode['IGFS_102']="SOSPETTA FRODE";
		$this->errorcode['IGFS_104']="CARTA SOGGETTA A RESTRIZIONI";
		$this->errorcode['IGFS_107']="CONTATTARE ISSUER";
		$this->errorcode['IGFS_108']="CONTATTARE ISSUER: CASO SPECIALE";
		$this->errorcode['IGFS_112']="INSERIRE PIN";
		$this->errorcode['IGFS_115']="FUNZIONE NON SUPPORTATA SU CARTA";
		$this->errorcode['IGFS_117']="PIN ERRATO";
		$this->errorcode['IGFS_118']="CONTO NON TROVATO O NON ABILITATO";
		$this->errorcode['IGFS_119']="OPERAZIONE NON PERMESSA AL TITOLARE";
		$this->errorcode['IGFS_121']="SUPERATO LIMITE IMPORTO";
		$this->errorcode['IGFS_122']="ERRORE SICUREZZA";
		$this->errorcode['IGFS_123']="SUPERATO LIMITE FREQUENZA";
		$this->errorcode['IGFS_125']="CARTA NON ATTIVA";
		$this->errorcode['IGFS_129']="SOSPETTA FRODE SU CARTA";
		$this->errorcode['IGFS_160']="CARTA PERSA";
		$this->errorcode['IGFS_164']="DATA ANTEC. A BLOCCO CARTA";
		$this->errorcode['IGFS_180']="DATI ERRATI";
		$this->errorcode['IGFS_181']="DATI SENSIBILI ERRATI";
		$this->errorcode['IGFS_1921']="3DS: IMPOSSIBILE AUTENTICARE CARTA (PARES=U)";
		$this->errorcode['IGFS_1922']="3DS: AUTENTICAZIONE NON AVVENUTA (PARES=N)";
		$this->errorcode['IGFS_1923']="3DS: IMPOSSIBILE VERIFICARE ISCRIZIONE CARTA (VERES=U)";
		$this->errorcode['IGFS_20000']="DATI MANCANTI";
		$this->errorcode['IGFS_20001']="CODICE OPERAZIONE NON VALIDO";
		$this->errorcode['IGFS_20007']="STATO ORDINE NON VALIDO";
		$this->errorcode['IGFS_20010']="URL INVIO RISPOSTA NON VALIDO";
		$this->errorcode['IGFS_20011']="URL INVIO ERRORE NON VALIDO";
		$this->errorcode['IGFS_20012']="SHOPID NON VALIDO";
		$this->errorcode['IGFS_20013']="CODICE LINGUA NON VALIDO";
		$this->errorcode['IGFS_20014']="CAMPO AGGIUNTIVO NON VALIDO";
		$this->errorcode['IGFS_20018']="CVV2 NON VALIDO";
		$this->errorcode['IGFS_20019']="SHOPID NON VALIDO";
		$this->errorcode['IGFS_20020']="CAMPO ADDIZIONALE NON VALIDO";
		$this->errorcode['IGFS_20021']="CAMPO API VERSION NON VALIDO";
		$this->errorcode['IGFS_20022']="CAMPO SIGNATURE NON VALIDO";
		$this->errorcode['IGFS_20023']="CAMPO PAYMENT ID NON VALIDO";
		$this->errorcode['IGFS_20024']="CODICE AUTORIZZAZIONE MANCANTE";
		$this->errorcode['IGFS_20025']="CAMPO REFERENCE DATA NON VALIDO";
		$this->errorcode['IGFS_20026']="SHOP ID DUPLICATO";
		$this->errorcode['IGFS_20027']="RICHIESTA BATCH NON VALIDA";
		$this->errorcode['IGFS_20028']="DATI BATCH MANCANTI";
		$this->errorcode['IGFS_20029']="DATI BATCH NON VALIDI";
		$this->errorcode['IGFS_20030']="DIRECTORY DATI BATCH NON VALIDA";
		$this->errorcode['IGFS_20031']="DATI BATCH DUPLICATI";
		$this->errorcode['IGFS_20032']="NOME BATCH FILE NON VALIDO";
		$this->errorcode['IGFS_20033']="DATI BATCH NON TROVATI";
		$this->errorcode['IGFS_20034']="BATCH SHOPID NON VALIDO";
		$this->errorcode['IGFS_20035']="ID ORDINE NON VALIDO";
		$this->errorcode['IGFS_20036']="PAN NON VALIDO";
		$this->errorcode['IGFS_20037']="CVV2 NON VALIDO";
		$this->errorcode['IGFS_20038']="DATA SCADENZA ERRATA";
		$this->errorcode['IGFS_20044']="DESCRIZIONE PAGAMENTO NON VALIDA";
		$this->errorcode['IGFS_20090']="TRANSAZIONE CANCELLATA DALL'UTENTE";
		$this->errorcode['IGFS_20100']="ERRORE NOTIFICA MERCHANT";
		$this->errorcode['IGFS_400']="STORNO OK";
		$this->errorcode['IGFS_800']="TERMINALE NON ABILITATO";
		$this->errorcode['IGFS_801']="BANCA SELEZIONATA ERRATA";
		$this->errorcode['IGFS_802']="TENTATIVI PIN ESAURITI";
		$this->errorcode['IGFS_803']="CODICE TERMINALE ERRATO";
		$this->errorcode['IGFS_804']="CHIAVE DISALLINEATA";
		$this->errorcode['IGFS_805']="ERRORE CIFRATURA";
		$this->errorcode['IGFS_807']="TERMINALE CHIUSO";
		$this->errorcode['IGFS_808']="TERMINALE NON CHIUSO";
		$this->errorcode['IGFS_809']="ERRORE SEQUENZA";
		$this->errorcode['IGFS_810']="TERMINALE NON RICONOSCIUTO";
		$this->errorcode['IGFS_811']="TERMINALE BLOCCATO";
		$this->errorcode['IGFS_812']="TERMINALE CHIUSO FORZATAMENTE";
		$this->errorcode['IGFS_813']="OPERAZIONE NON PERMESSA";
		$this->errorcode['IGFS_814']="TRANSAZIONE IN CORSO";
		$this->errorcode['IGFS_815']="CARTA BLOCCATA";
		$this->errorcode['IGFS_90000']="DATABASE ERROR";
		$this->errorcode['IGFS_90005']="TIMESTAMP ERRATO";
		$this->errorcode['IGFS_902']="TRANSAZIONE NON VALIDA";
		$this->errorcode['IGFS_903']="REINVIARE TRANSAZIONE";
		$this->errorcode['IGFS_907']="EMITTENTE NON ADERENTE";
		$this->errorcode['IGFS_908']="DESTINAZIONE NON TROVATA";
		$this->errorcode['IGFS_909']="ERRORE DI SISTEMA";
		$this->errorcode['IGFS_910']="SISTEMA ISSUER NON ATTIVO";
		$this->errorcode['IGFS_911']="TIME OUT";
		$this->errorcode['IGFS_912']="ISSUER NON RAGGIUNGIBILE";
		$this->errorcode['IGFS_913']="TRANSAZIONE DUPLICATA";
		$this->errorcode['IGFS_990']="STRUMENTO PAGAMENTO NON ATTIVO";

		}

	public function getByCode($code) {

		if (array_key_exists($code, $this->errorcode)) {

			return $this->errorcode[$code];

		} else {

			return "Error code not found";
		}
	}

}