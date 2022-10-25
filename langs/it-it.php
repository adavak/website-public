<?php
/*
UUP dump translation file.
Translation information:
English language name: Italian (Italy)
Localized language name: Italiano (Italia)
Language code: it-IT
Authors:
- Schroedinger2015 (https://forums.mydigitallife.net/members/schroedinger2015.551980/)
- garf02 (https://forums.mydigitallife.net/members/garf02.6748/)
*/

//Language information
$s['code'] = 'it-IT';
$s['timeZone'] = 'Europe/Rome'; //Fusi orari supportati: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Sfoglia build conosciute - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architettura';
$s['ring'] = 'Anello';
$s['updateid'] = 'ID Aggiornamento';
$s['update'] = 'Aggiornamento';
$s['lang'] = 'Lingua';
$s['edition'] = 'Edizione';
$s['seachForBuilds'] = 'Ricerca le build...';
$s['no'] = 'No';
$s['yes'] = 'Sì';
$s['yesRecommended'] = 'Sì (raccommandato)';
$s['next'] = 'Avanti';
$s['ok'] = 'OK';
$s['cancel'] = 'Annulla';
$s['information'] = 'Informazione';
$s['totalDlSize'] = 'Dimensione totale del download';
$s['file'] = 'File';
$s['expires'] = 'Scadenza';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Dimensione';
$s['additionalEdition'] = 'Edizione aggiuntiva';
$s['requiredEdition'] = 'Edizione richiesta';
$s['unknown'] = 'Sconosciuta';

//global
$s['home'] = 'Home';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Modalità chiara';
$s['darkMode'] = 'Modalità scura';
$s['sourceCode'] = 'Codice sorgente';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Scarica facilmente i file UUP dai server Windows Update. Questo progetto non è affiliato con Microsoft Corporation.';
$s['notAffiliated'] = 'Questo progetto non è affiliato con Microsoft Corporation. Windows è un marchio registrato di Microsoft Corporation.';
$s['copyright'] = '© %d %s e collaboratori.'; //© 2019 whatever127 e collaboratori.
$s['selectLanguage'] = 'Seleziona la tua lingua';

//index.php
$s['slogan'] = 'Scarica facilmente i file UUP dai server Windows Update.';
$s['quickOptions'] = 'Opzioni veloce';
$s['tHeadReleaseType'] = 'Tipo di Release';
$s['tHeadDescription'] = 'Descrizione';
$s['tHeadArchitectures'] = 'Architetture';
$s['latestPublicRelease'] = 'Ultima build Release Pubblica';
$s['latestPublicReleaseSub'] = 'Ultima build aggiornata per utenti regolari.';
$s['latestDevRelease'] = 'Ultima build Canale Dev';
$s['latestDevReleaseSub'] = 'Builds piuttosto inaffidabili con le ultime novità.<br>Ideale per utenti particolarmente tecnici.';
$s['latestBetaRelease'] = 'Ultima build Canale Beta';
$s['latestBetaReleaseSub'] = 'Builds affidabili con la maggior parte delle funzionalità imminenti disponibili.<br>Ideale per i primi adottanti.';
$s['latestRPRelease'] = 'Ultima build Anteprima Release';
$s['latestRPReleaseSub'] = 'Builds affidabili di anteprima del prossimo rilascio.<br>Ideale per provare i rilasci imminenti.';
$s['advOptions'] = 'Opzioni avanzate';
$s['browseBuilds'] = 'Sfoglia la lista delle build conosciute';
$s['browseBuildsSub'] = 'Scegli una build che è già nota nel database locale e scaricala.';
$s['fetchLatest'] = 'Scarica ultima build';
$s['fetchLatestSub'] = 'Recupera le informazioni delle build più recenti dai server Windows Update.';
$s['newlyAdded'] = 'Build aggiunte di recente';
$s['dateAdded'] = 'Data di aggiunta';

//known.php
$s['browseKnown'] = 'Sfoglia le build conosciute';
$s['chooseBuild'] = 'Seleziona la build';
$s['weFoundBuilds'] = 'Sono state trovate <b>%d</b> build per la tua richiesta.'; //Sono state trovate <b>692</b> build per la tua richiesta.

//latest.php
$s['latestFetchLatest'] = 'Scarica l\'ultima build';
$s['latestTestingOnly'] = 'Solo a scopo di test';
$s['latestTestingOnlyWarn'] = '<b>Questa pagina è fornita solo a scopo di test.</b> Le build recuperate da questa pagina che non sono state elaborate dal server di back-end verranno fornite utilizzando i pacchetti di riserva, che potrebbero fornire risultati incompleti. Se vuoi scaricare una build già conosciuta, usa invece la pagina delle build conosciute.';
$s['latestDoYouWantKnown'] = 'Vuoi continuare sfogliando la lista delle build conosciute?';
$s['chooseOptions'] = 'Seleziona un\'opzione';
$s['buildOfPretendedClient'] = 'Crea il numero di client Windows Update simulati';
$s['editionOfPretendedClient'] = 'Edizione del sistema di simulazione';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Utilizza skip ahead flighting (solo Insider Fast)';
$s['fetchUpdates'] = 'Recupera gli aggiornamenti';
$s['fetchUpdatesInfo'] = 'Clicca sul pulsante <i>Recupera gli aggiornamenti</i> per inviare la richiesta ai server Windows Update.';

//fetchupd.php
$s['responseFromServer'] = 'Risposta dal server';
$s['foundUpdates'] = 'Trovato(i) %d aggiornamento(i)'; //Trovato(i) 1 aggiornamento(i)
$s['foundTheseUpdates'] = 'Sono stati trovati i seguenti aggiornamenti. Fai click sul nome dell’aggiornamento desiderato per continuare.';
$s['buildNumber'] = 'Numero build: %s'; //Numero build: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Seleziona la lingua per %s'; //Seleziona la lingua per Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Seleziona lingua';
$s['chooseLangDesc'] = 'Scegli la tua lingua desiderata';
$s['allLangs'] = 'Tutte le lingue';
$s['selLangFiles'] = 'File';
$s['allFiles'] = 'Tutti i file';
$s['wubOnly'] = 'Solo WindowsUpdateBox';
$s['updateOnly'] = 'Solo Aggiornamenti';
$s['selectLangInfoText1'] = 'Clicca sul pulsante <i>Avanti</i> per selezionare l\'edizione che si desidera scaricare.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe e gli aggiornamenti Cumulativi sono disponibili in <i>Tutte le lingue</i>.';
$s['allLangsWarn'] = 'L\'opzione <i>Tutte le lingue</i> non è supportata dall\'edizione selezionata.';
$s['clickNextToOpenFindFiles'] = 'Clicca sul pulsante <i>Avanti</i> per aprire la pagina che consente di trovare i file.';
$s['noLangsAvailable'] = 'Non ci sono lingue disponibili per questa build.';
$s['browseFiles'] = 'Sfoglia files';
$s['browseFilesDesc'] = 'Sfoglia velocemente i files nella build selezionata';
$s['searchFiles'] = 'Ricerca files';
$s['toSearchForCUUseQuery'] = 'Per cercare gli Aggiornamenti Cumulativi utilizza la <i>%s</i> domanda di ricerca.'; //Per cercare gli Aggiornamenti Cumulativi utilizza la domanda di ricerca <i>Windows10 KB</i>.

//selectedition.php
$s['selectEditionFor'] = 'Seleziona l\'edizione per %s'; //Seleziona l’edizione per Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Italiano (Italia)
$s['chooseEdition'] = 'Seleziona l\'edizione';
$s['chooseEditionDesc'] = 'Scegli l\'edizione desiderata';
$s['allEditions'] = 'Tutte le edizioni';
$s['selectEditionInfoText'] = 'Clicca sul pulsante <i>Avanti</i> per aprire la pagina di riepilogo della selezione.';
$s['additionalEditionsInfo'] = 'Se hai bisogno di una edizione aggiuntiva che puo\' essere trovata nella tabella di destra, seleziona cortesemente l\'edizione richiesta indicata e clicca su <i>Avanti</i>. Nella pagina di riepilogo sarai in grado di selezionare le edizioni aggiuntive desiderate sotto l\'opzione appropriata di download.';

//download.php
$s['summary'] = 'Sommario';
$s['summaryDesc'] = 'Ricontrolla la tua selezione e scegli il metodo di download';
$s['summaryFor'] = 'Sommario per %s'; //Sommario per Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Italiano (Italia), Windows 10 Pro
$s['summaryOfSelection'] = 'Sommario della tua selezione';
$s['browseList'] = 'Sfoglia elenco dei file';
$s['browseListDesc'] = 'Apre una pagina contenente l’elenco dei file UUP per il download manuale.';
$s['aria2Opt1'] = 'Scarica usando aria2';
$s['aria2Opt1Desc'] = 'Scarica facilmente il set UUP selezionato usando aria2.';
$s['aria2Opt2'] = 'Scarica usando aria2 e converti';
$s['aria2Opt2Desc'] = 'Scarica facilmente il set UUP selezionato usando aria2 e crea un\'immagine ISO.';
$s['aria2Opt3'] = 'Scarica usando aria2, converte e crea edizioni aggiuntive';
$s['aria2Opt3Desc'] = 'Scarica facilmente il set UUP selezionato usando aria2, converte, crea edizioni aggiuntive e finalmente un\'immagine ISO.';
$s['jsRequiredToConf'] = 'JavaScript è necessario per configurare ed utilizzare questa opzione.';
$s['selAdditionalEditions'] = 'Seleziona edizioni aggiuntive';
$s['noAdditionalEditions'] = 'Nessuna edizione aggiuntiva è disponbile per questa selezione.';
$s['learnMore'] = 'Per saperne di più';
$s['learnMoreAdditionalEditions1'] = 'Questa opzione consente la creazione automatica delle edizioni aggiuntive selezionate.';
$s['learnMoreAdditionalEditions2'] = 'L\'elenco delle edizioni aggiuntive è determinato dall’edizione base selezionata. Di seguito è possibile controllare l\'elenco delle edizioni base necessarie per creare le edizioni aggiuntive desiderate:';
$s['learnMoreUpdates1'] = 'Gli aggiornamenti verranno integrati nell\'immagine convertita solo quando lo script di conversione viene eseguito sui seguenti sistemi:';
$s['learnMoreUpdates2'] = 'Se si esegue lo script di conversione su qualsiasi altro sistema, gli aggiornamenti non verranno integrati nell\'immagine risultante.';
$s['systemWithAdk'] = '%s con Windows 10 ADK installato'; //Windows 7 con Windows 10 ADK installato
$s['additionalUpdates'] = 'Aggiornamenti aggiuntivi';
$s['additionalUpdatesDesc'] = 'Questo set UUP contiene ulteriori aggiornamenti che verranno integrati durante il processo di conversione, aumentando significativamente il tempo di creazione.';
$s['browseUpdatesList'] = 'Sfoglia la lista degli aggiornamenti';
$s['selectDownloadOptions'] = 'Seleziona le opzioni per il download';
$s['selectDownloadOptionsSub'] = 'Configura come desideri scaricare la selezione';
$s['downloadMethod'] = 'Modalità di scaricamento';
$s['conversionOptions'] = 'Opzioni di conversione';
$s['convOpt1'] = 'Crea ISO con install.esd al posto di install.wim';
$s['convOpt2'] = 'Integra gli aggiornamenti quando disponibili (Solo convertitore di Windows)';
$s['convOpt3'] = 'Avvia cleanup dopo l\'integrazione degli aggiornamenti (Solo convertitore di Windows)';
$s['convOpt4'] = 'Integra .NET Framework 3.5 (Solo convertitore di Windows)';
$s['startDownload'] = 'Crea pacchetto da scaricare';

//get.php
$s['listOfFilesFor'] = 'Elenco di file per %s'; //Elenco di file per Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Dimensione totale dei file: %s'; //Dimensione totale dei file: 2.86 GiB
$s['fileRenamingScript'] = 'Script di ridenominazione dei file';
$s['fileRenamingScriptDesc1'] = 'Lo script qui sotto può essere utilizzato per rinominare rapidamente i file scaricati.';
$s['fileRenamingScriptDesc2'] = 'Basta copiare il contenuto del modulo sottostante in un nuovo file con estensione <code>cmd</code>, inserirlo nella cartella con i file scaricati ed eseguirlo.';
$s['sha1File'] = 'File di checksum SHA-1';
$s['sha1FileDesc'] = 'È possibile utilizzare questo file per verificare rapidamente che i file siano stati scaricati correttamente.';
$s['aria2NoticeTitle'] = 'Avviso: Scarica usando le opzioni di aria2';
$s['aria2NoticeText1'] = 'Verrà creato un archivio per scaricare con aria2. L’archivio contiene tutti i file necessari per avviare l’attività selezionata.';
$s['aria2NoticeText2'] = 'Per avviare il processo di download, utilizzare uno script per la propria piattaforma:';
$s['aria2NoticeText3'] = 'Aria2 è un progetto open source. Lo puoi trovare qui: %s.'; //Aria2 è un progetto open source. Lo puoi trovare qui: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Lo script di conversione UUP (versione Windows) è stato creato da %s.'; //Lo script di conversione UUP (versione Windows) è stato creato da abbodi1406.
$s['aria2NoticeText5'] = 'Lo script di conversione UUP (versione Linux, versione macOS) è open source. Lo puoi trovare qui: %s.'; //Lo script di conversione UUP (versione Linux, versione macOS) è open source. Lo puoi trovare qui: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Trova file in %s'; //Trova file in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Se si desidera rinominare rapidamente i file scaricati da questa pagina, è possibile generare uno script di ridenominazione, che lo farà automaticamente.';
$s['fileRenamingScriptGenW'] = 'Genera script di rinomina (Windows)';
$s['fileRenamingScriptGenL'] = 'Genera script di rinomina (Linux, macOS)';
$s['searchForFiles'] = 'Cerca i file...';
$s['weFoundFiles'] = 'Sono stati trovati <b>%d</b> file per la tua richiesta.'; //Sono stati trovati <b>692</b> file per la tua richiesta.

//Error pages
$s['error'] = 'Errore';
$s['requestNotSuccessful'] = 'Richiesta non andata a buon fine';
$s['anErrorHasOccurred'] = 'Si è verificato un errore durante il tentativo di elaborare la richiesta.';
$s['generatedPackNotAvailable'] = 'Pacchetto generato non disponibile';
$s['generatedPackNotAvailableDesc'] = 'L\'aggiornamento che si sta tentando di scaricare non ha un pacchetto generato che fornisce informazioni complete su lingue, edizioni e file disponibili. Verrà utilizzato il pacchetto di riserva chee potrebbe non fornire le informazioni corrette. Se il download non è riuscito a causa di questo, attendere che il pacchetto generato automaticamente sia disponibile.';
$s['arm64Warning'] = 'Hai selezionato un build ARM64 che è <b>compatibile SOLO con dispositivi basati su ARM64</b> e non funzionerà con normali PC basati su Intel o AMD. Per PC <b>64-bit</b> utilizza le build <b>amd64</b>. Per PC <b>32-bit</b> Utilizza le build <b>x86</b>. Se sei assolutamente sicuro che il dispositivo di destinazione sia basato su ARM64, puoi tranquillamente ignorare questo messaggio.';

//Error messages
$s['error_ERROR'] = 'Errore generico.';
$s['error_UNSUPPORTED_API'] = 'La versione API installata non è compatibile con questa versione di dump UUP.';
$s['error_NO_FILEINFO_DIR'] = 'La cartella <i>fileinfo</i> non esiste.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'Il database <i>fileinfo</i> non contiene nessuna build.';
$s['error_SEARCH_NO_RESULTS'] = 'Nessun elemento trovato per la query eseguita.';
$s['error_UNKNOWN_ARCH'] = 'Architettura del processore sconosciuta.';
$s['error_UNKNOWN_RING'] = 'Anello sconosciuto.';
$s['error_UNKNOWN_FLIGHT'] = 'flight sconosciuto.';
$s['error_UNKNOWN_COMBINATION'] = 'La combinazione flight ed anello non è corretta. Skip ahead è supportato solo per l’anello Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'Il numero di build specificato è inferiore a %d o più grande di %d.'; //Il numero di build specificato è inferiore a 9841 o più grande di 2147483646.
$s['error_ILLEGAL_MINOR'] = 'La build specificata non è corretta.';
$s['error_NO_UPDATE_FOUND'] = 'Il server non ha restituito aggiornamenti.';
$s['error_XML_PARSE_ERROR'] = 'Analisi XML di risposta non riuscita. Potrebbe esserci un problema con i server Microsoft. Riprovare più tardi.';
$s['error_EMPTY_FILELIST'] = 'Il server ha restituito un elenco di file vuoto.';
$s['error_NO_FILES'] = 'Non ci sono file disponibili per la tua selezione.';
$s['error_NOT_FOUND'] = 'La selezione specificata non può essere trovata.';
$s['error_MISSING_FILES'] = 'Il set UUP selezionato ha file mancanti.';
$s['error_NO_METADATA_ESD'] = 'Non ci sono file metadati ESD disponibili per la tua selezione.';
$s['error_UNSUPPORTED_LANG'] = 'La lingua specificata non è supportata.';
$s['error_UNSPECIFIED_LANG'] = 'La lingua non è stata specificata.';
$s['error_UNSUPPORTED_EDITION'] = 'La versione specificata non è supportata.';
$s['error_UNSUPPORTED_COMBINATION'] = 'La combinazione lingua e edizione non è corretta.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'L\'aggiornamento selezionato non contiene un Aggiornamento Cumulativo.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Le informazioni sull\'aggiornamento specificato non esistono nel database.';
$s['error_KEY_NOT_EXISTS'] = 'La chiave specificata non esiste nelle informazioni di aggiornamento.';
$s['error_UNSPECIFIED_UPDATE'] = 'L\'ID di aggiornamento non è stato specificato.';
$s['error_INCORRECT_ID'] = 'L\'ID di aggiornamento specificato non è corretto. Assicurati che l\'ID di aggiornamento specificato sia corretto.';
$s['error_RATE_LIMITED'] = 'Stai avendo un tasso limitato. Per favore riprova tra qualche secondo.';
$s['error_UNSPECIFIED_VE'] = 'Non hai selezionato altre edizioni. Se non desideri creare altre edizioni, usa l\'opzione <i>Scarica usando aria2 e converti</i>.';
$s['errorNoMessage'] = 'Messaggio di errore non disponibile.';

//Languages
$s['lang_ar-sa'] = 'Arabic (Saudi Arabia)';
$s['lang_bg-bg'] = 'Bulgarian';
$s['lang_cs-cz'] = 'Czech';
$s['lang_da-dk'] = 'Danish';
$s['lang_de-de'] = 'German';
$s['lang_el-gr'] = 'Greek';
$s['lang_en-gb'] = 'English (United Kingdom)';
$s['lang_en-us'] = 'English (United States)';
$s['lang_es-es'] = 'Spanish (Spain)';
$s['lang_es-mx'] = 'Spanish (Mexico)';
$s['lang_et-ee'] = 'Estonian';
$s['lang_fi-fi'] = 'Finnish';
$s['lang_fr-ca'] = 'French (Canada)';
$s['lang_fr-fr'] = 'French (France)';
$s['lang_he-il'] = 'Hebrew';
$s['lang_hr-hr'] = 'Croatian';
$s['lang_hu-hu'] = 'Hungarian';
$s['lang_it-it'] = 'Italian';
$s['lang_ja-jp'] = 'Japanese';
$s['lang_ko-kr'] = 'Korean';
$s['lang_lt-lt'] = 'Lithuanian';
$s['lang_lv-lv'] = 'Latvian';
$s['lang_nb-no'] = 'Norwegian (Bokmal)';
$s['lang_nl-nl'] = 'Dutch';
$s['lang_pl-pl'] = 'Polish';
$s['lang_pt-br'] = 'Portuguese (Brazil)';
$s['lang_pt-pt'] = 'Portuguese (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romanian';
$s['lang_ru-ru'] = 'Russian';
$s['lang_sk-sk'] = 'Slovak';
$s['lang_sl-si'] = 'Slovenian';
$s['lang_sr-latn-rs'] = 'Serbian (Latin)';
$s['lang_sv-se'] = 'Swedish';
$s['lang_th-th'] = 'Thai';
$s['lang_tr-tr'] = 'Turkish';
$s['lang_uk-ua'] = 'Ukrainian';
$s['lang_zh-cn'] = 'Chinese (Simplified)';
$s['lang_zh-hk'] = 'Chinese (Hong Kong)';
$s['lang_zh-tw'] = 'Chinese (Traditional)';
