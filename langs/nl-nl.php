<?php
/*
UUP dump translation file.
Translation information:
English language name: Dutch
Localized language name: Nederlands
Language code: nl-NL
Author: Enthousiast (https://forums.mydigitallife.net/members/enthousiast.104688/)
*/

//Language information
$s['code'] = 'nl-NL';
$s['timeZone'] = 'Europe/Amsterdam'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Doorzoek bekende builds - UUP dump
$s['build'] = 'Versie';
$s['arch'] = 'Architectuur';
$s['ring'] = 'Ring';
$s['updateid'] = 'Update ID';
$s['update'] = 'Update';
$s['lang'] = 'Taal';
$s['edition'] = 'Editie';
$s['seachForBuilds'] = 'Builds zoeken...';
$s['no'] = 'Nee';
$s['yes'] = 'Ja';
$s['yesRecommended'] = 'Ja (aanbevolen)';
$s['next'] = 'Volgende';
$s['ok'] = 'OK';
$s['cancel'] = 'Afbreken';
$s['information'] = 'Informatie';
$s['totalDlSize'] = 'Totale Download grootte';
$s['file'] = 'Bestand';
$s['expires'] = 'Vervalt';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Grootte';
$s['additionalEdition'] = 'Aanvullende editie';
$s['requiredEdition'] = 'Benodigde editie';
$s['unknown'] = 'Onbekend';

//global
$s['home'] = 'Startpagina';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Lichte Modus';
$s['darkMode'] = 'Donkere Modus';
$s['sourceCode'] = 'Broncode';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Download makkelijk UUP bestanden, direct van de Windows update servers. Dit project is niet gelieerd aan Microsoft.';
$s['notAffiliated'] = 'Dit project is niet gelieerd aan Microsoft. Windows is een geregistreerd handelsmerk van Microsoft.';
$s['copyright'] = '© %d %s en bijdragers.'; //© 2019 whatever127 en bijdragers.
$s['selectLanguage'] = 'Selecteer de gewenste taal';

//index.php
$s['slogan'] = 'Download makkelijk UUP bestanden, direct van de Windows update servers.';
$s['quickOptions'] = 'Snelle opties';
$s['tHeadReleaseType'] = 'Type release';
$s['tHeadDescription'] = 'Omschrijving';
$s['tHeadArchitectures'] = 'Architecturen';
$s['latestPublicRelease'] = 'Laatste Publieke Release build';
$s['latestPublicReleaseSub'] = 'Meest recente uptodate builds voor reguliere gebruikers.';
$s['latestDevRelease'] = 'Laatste Dev Channel build';
$s['latestDevReleaseSub'] = 'Enigszins onbetrouwbare builds met de nieuwste functies.<br>Ideaal voor zeer technische gebruikers.';
$s['latestBetaRelease'] = 'Laatste Beta Channel build';
$s['latestBetaReleaseSub'] = 'Betrouwbare builds met de meeste aankomende functies die beschikbaar zijn.<br>Ideaal voor vroege gebruikers.';
$s['latestRPRelease'] = 'Laatste Release Preview build';
$s['latestRPReleaseSub'] = 'Betrouwbare builds voor previewing de volgende release.<br>Ideaal om de volgende release the testen.';
$s['advOptions'] = 'Geavanceerde Opties';
$s['browseBuilds'] = 'Blader door de volledige versie lijst.';
$s['browseBuildsSub'] = 'Selecteer een versie, die al in de lokale database aanwezig is, en download de geselecteerde versie.';
$s['fetchLatest'] = 'Download de laatste build';
$s['fetchLatestSub'] = 'Ontvang de nieuwste build informatie van de Windows Update servers.';
$s['newlyAdded'] = 'Nieuwe toegevoegde versies';
$s['dateAdded'] = 'Toegevoegd op';

//known.php
$s['browseKnown'] = 'Doorzoeken van bekende builds';
$s['chooseBuild'] = 'Build selecteren';
$s['weFoundBuilds'] = 'We hebben <b>%d</b> builds gevonden.'; //We hebben <b>%d</b> builds gevonden.

//latest.php
$s['latestFetchLatest'] = 'Zoek de meest recente builds';
$s['latestTestingOnly'] = 'Alleen voor test doeleinden';
$s['latestTestingOnlyWarn'] = '<b> Deze pagina is alleen bedoeld voor test doeleinden.</b> Door deze pagina opgehaalde builds die niet zijn verwerkt door de backend-server, worden voorzien van fallback-packs, die mogelijk onvolledige resultaten opleveren. Als je een al bekende build wilt downloaden, gebruik dan de bekende builds-pagina.';
$s['latestDoYouWantKnown'] = 'Wilt u doorgaan door in de lijst met bekende builds te bladeren?';
$s['chooseOptions'] = 'Selecteer de opties';
$s['buildOfPretendedClient'] = 'Build nummer van de nep Windows Update client';
$s['editionOfPretendedClient'] = 'Editie van het nep systeem';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Gebruik skip ahead flighting (Aleen Insider Fast)';
$s['fetchUpdates'] = 'Haal updates op';
$s['fetchUpdatesInfo'] = 'Klik op de <i>Haal updates op</i> knop om Uw verzoek te verzenden naar de Windows Update servers.';

//fetchupd.php
$s['responseFromServer'] = 'Reactie van de server';
$s['foundUpdates'] = '%d update(s) gevonden'; //1 update(s) gevonden
$s['foundTheseUpdates'] = 'De volgende updates zijn gevonden. Klik op de naam van de gewenste update om door te gaan.';
$s['buildNumber'] = 'Build nummer: %s'; //Build nummer: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Selecteer de taal voor %s'; //Selecteer de taal voor Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Taal selectie';
$s['chooseLangDesc'] = 'Selecteer de gewenste taal';
$s['allLangs'] = 'Alle talen';
$s['selLangFiles'] = 'Bestanden';
$s['allFiles'] = 'Alle bestanden';
$s['wubOnly'] = 'Alleen WindowsUpdateBox';
$s['updateOnly'] = 'Alleen updates';
$s['selectLangInfoText1'] = 'Klik de <i>Volgende</i> knop om de gewenste editie te downloaden.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe en Cumulative updates kunnen worden gevonden in <i>Alle talen</i> taal.';
$s['allLangsWarn'] = 'De <i>Alle talen</i> optie ondersteund geen editie selectie.';
$s['clickNextToOpenFindFiles'] = 'Klik de <i>Volgende</i> knop om de pagina te openen voor het vinden van de bestanden.';
$s['noLangsAvailable'] = 'Er zijn geen talen beschikbaar voor deze build.';
$s['browseFiles'] = 'Bestanden doorbladeren';
$s['browseFilesDesc'] = 'Blader snel door bestanden in de geselecteerde build';
$s['searchFiles'] = 'Zoek bestanden';
$s['toSearchForCUUseQuery'] = 'Gebruik de zoekoptie <i>%s</i> om cumulatieve updates te zoeken. '; // Gebruik de <i> Windows10 KB </i> zoekopdracht om te zoeken naar cumulatieve updates.

//selectedition.php
$s['selectEditionFor'] = 'Selecteer de editie voor %s'; //Selecteer de editie voor Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Editie Selectie';
$s['chooseEditionDesc'] = 'Selecteer de gewenste editie';
$s['allEditions'] = 'Alle edities';
$s['selectEditionInfoText'] = 'Klik de <i>Volgende</i> knop om de pagina met het selectie overzicht te openen.';
$s['additionalEditionsInfo'] = 'Als u een extra editie nodig hebt kunt U die vinden in de tabel aan de rechterkant, selecteert u de aangegeven vereiste editie en klikt u op <i>Volgende</i>. Op de overzichtspagina kunt u de gewenste extra edities selecteren onder de juiste downloadoptie.';

//download.php
$s['summary'] = 'Overzicht';
$s['summaryDesc'] = 'Bekijk Uw selectie and kies de download methode';
$s['summaryFor'] = 'Overzicht voor %s'; //Overzicht voor Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Selectie overzicht';
$s['browseList'] = 'Blader door een lijst van bestanden';
$s['browseListDesc'] = 'Opent de pagina met een lijst van UUP bestanden voor handmatig downloaden.';
$s['aria2Opt1'] = 'Download dmv aria2';
$s['aria2Opt1Desc'] = 'Download de UUP bestanden makkelijk dmv aria2.';
$s['aria2Opt2'] = 'Download dmv aria2 en converteer';
$s['aria2Opt2Desc'] = 'Download de UUP bestanden makkelijk dmv aria2 en converteer naar ISO.';
$s['aria2Opt3'] = 'Download de UUP bestanden makkelijk dmv aria2, creëer de extra edities en converteer naar ISO.';
$s['aria2Opt3Desc'] = 'Download de UUP bestanden makkelijk dmv aria2, creëer de extra edities en converteer naar ISO.';
$s['jsRequiredToConf'] = 'JavaScript is nodig om deze optie te kunnen configureren en gebruiken.';
$s['selAdditionalEditions'] = 'Selecteer de extra edities';
$s['noAdditionalEditions'] = 'Er zijn geen extra edities beschikbaar voor deze selectie.';
$s['learnMore'] = 'Meer informatie';
$s['learnMoreAdditionalEditions1'] = 'Deze optie schakelt het creeren van de geslecteerde extra edities in.';
$s['learnMoreAdditionalEditions2'] = 'De lijst met extra edities wordt bepaald door de geselecteerde basis edities. Hieronder staan de benodigde basis edities aangegeven om de gewenste extra edities aan te kunnen maken';
$s['learnMoreUpdates1'] = 'De updates zullen alleen worden geintegreerd als het conversie script op de volgende windows edities wordt uitgevoerd:';
$s['learnMoreUpdates2'] = 'Indien het conversie script op een andere windows editie wordt uigevoerd zullen de updates niet worden geintegreerd in de geconverteerde iso.';
$s['systemWithAdk'] = '%s met Windows 10 ADK geinstalleerd'; //Windows 7 met Windows 10 ADK geinstalleerd
$s['additionalUpdates'] = 'Extra updates';
$s['additionalUpdatesDesc'] = 'Deze UUP bestanden bevatten extra updates, deze zullen worden geintegreerd, het proces significant langer makend.';
$s['browseUpdatesList'] = 'Blader door een lijst van updates';
$s['selectDownloadOptions'] = 'Selecteer uw download opties';
$s['selectDownloadOptionsSub'] = 'Configureer uw download methode';
$s['downloadMethod'] = 'Download methode';
$s['conversionOptions'] = 'Conversie opties';
$s['convOpt1'] = 'Creëer ISO met install.esd in plaats van install.wim';
$s['convOpt2'] = 'Integreer updates indien aanwezig (Alleen Windows converter)';
$s['convOpt3'] = 'Voer cleanup uit na updates-integratie (Alleen Windows converter)';
$s['convOpt4'] = 'Integreer .NET Framework 3.5 (Alleen Windows converter)';
$s['startDownload'] = 'Creëer download pakket';

//get.php
$s['listOfFilesFor'] = 'Bestandslijst voor %s'; //Bestandslijst voor Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Totale grootte van de bestanden: %s'; //Totale grootte van de bestanden: 2.86 GiB
$s['fileRenamingScript'] = 'Bestands hernoemings script';
$s['fileRenamingScriptDesc1'] = 'Het script dat hieronder gevonden kan worden kan gebruikt worden voor snelle bestands hernoeming.';
$s['fileRenamingScriptDesc2'] = 'Kopieer de content van het formulier hieronder naar een niew tekst bestand met <code>cmd</code> extensie, plaats het in dezelfde map als de gedownloade bestanden en voer het uit.';
$s['sha1File'] = 'SHA-1 checksums bestand';
$s['sha1FileDesc'] = 'Dit bestand kan gebruikt worden om snel te verifieren of de download correct is binnengekomen.';
$s['aria2NoticeTitle'] = 'Opmerkingen mbt downloaden via aria2';
$s['aria2NoticeText1'] = 'Downloaden mbv aria2 creëert een zip bestand dat moet worden gedownload. Het gedownloade zip bestand bevat alle benodigde bestanden om de geselecteerde taak te voltooien.';
$s['aria2NoticeText2'] = 'Kies het voor jouw platform geschikte script om het download process te starten:';
$s['aria2NoticeText3'] = 'Aria2 is een open source project. Je kunt het hier vinden: %s.'; //Aria2 is een open source project. Je kunt het hier vinden: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Het UUP Conversie script (Windows versie) is gemaakt door %s.'; //UUP Conversie script (Windows versie) is gemaakt door abbodi1406.
$s['aria2NoticeText5'] = 'Het UUP Conversie script (Linux versie, macOS versie) is open source. Je kunt het hier vinden: %s.'; //UUP Conversie script (Linux versie) is open source. Je kunt het hier vinden: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Vind bestanden voor %s'; //Vind bestanden voor Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Wanneer U de gedownloade bestanden van deze pagina snel wilt hernoemen, kunt U een hernoemings script maken, die dit automatisch voor U doet.';
$s['fileRenamingScriptGenW'] = 'Maak hernoemings script (Windows)';
$s['fileRenamingScriptGenL'] = 'Maak hernoemings script (Linux, macOS)';
$s['searchForFiles'] = 'Zoek naar bestanden...';
$s['weFoundFiles'] = 'We hebben <b>%d</b> bestanden gevonden.'; //We hebben <b>692</b> bestanden gevonden.

//Error pages
$s['error'] = 'Fout';
$s['requestNotSuccessful'] = 'Verzoek niet succesvol';
$s['anErrorHasOccurred'] = 'Er is een fout opgetreden tijdens het verwerken van Uw verzoek.';
$s['generatedPackNotAvailable'] = 'Gegenereerd pakket niet beschikbaar';
$s['generatedPackNotAvailableDesc'] = 'De update die u probeert te downloaden, beschikt niet over een gegenereerd pakket dat volledige informatie biedt over beschikbare talen, edities en bestanden. Het fallback-pakket zal worden gebruikt en biedt mogelijk niet de juiste informatie. Als de download daardoor mislukt, wacht dan tot het automatisch gegenereerde pakket beschikbaar is.';
$s['arm64Warning'] = 'U hebt een ARM64-build geselecteerd die <b>alleen compatibel is met op ARM64 gebaseerde apparaten</b> en niet werkt met normale Intel- of AMD-pc\'s. Gebruik voor <b>64-bit</b> pc\'s <b>amd64</b> builds. Gebruik voor <b>32-bit</b> pc\'s <b>x86</b> builds. Als u absoluut zeker weet dat het doelapparaat op ARM64 is gebaseerd, kunt u dit bericht veilig negeren.';

//Error messages
$s['error_ERROR'] = 'Generieke fout.';
$s['error_UNSUPPORTED_API'] = 'Installed API version is not compatible with this version of UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'De map <i>Bestands info</i> bestaat niet.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'De <i>Bestands info</i> database bevat geen enkele build.';
$s['error_SEARCH_NO_RESULTS'] = 'Geen items gevonden voor de uitgevoerde zoekopdracht.';
$s['error_UNKNOWN_ARCH'] = 'Onbekende processor architectuur.';
$s['error_UNKNOWN_RING'] = 'Onbekende ring.';
$s['error_UNKNOWN_FLIGHT'] = 'Onbekende flight.';
$s['error_UNKNOWN_COMBINATION'] = 'De flight en ring combinatie is incorrect. Skip ahead is alleen beschikbaar voor Insider Fast ring.';
$s['error_ILLEGAL_BUILD'] = 'Het opgegeven buildnummer is minder dan %d of groter dan %d.'; //Het opgegeven buildnummer is minder dan 9841 of groter dan 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Opgegeven build-minor is onjuist.';
$s['error_NO_UPDATE_FOUND'] = 'De server heeft geen updates geretourneerd.';
$s['error_XML_PARSE_ERROR'] = 'Antwoord XML-parsen mislukt. Er is mogelijk een probleem met Microsoft-servers. Probeer het later opnieuw.';
$s['error_EMPTY_FILELIST'] = 'De server heeft een lege bestandslijst geretourneerd.';
$s['error_NO_FILES'] = 'Er zijn geen bestanden beschikbaar voor uw selectie.';
$s['error_NOT_FOUND'] = 'Gespecificeerde selectie kan niet worden gevonden.';
$s['error_MISSING_FILES'] = 'De geselecteerde UUP-set bevat ontbrekende bestanden.';
$s['error_NO_METADATA_ESD'] = 'Er zijn geen metadata ESD bestanden beschikbaar voor Uw selectie.';
$s['error_UNSUPPORTED_LANG'] = 'Opgegeven taal wordt niet ondersteund.';
$s['error_UNSPECIFIED_LANG'] = 'Taal is niet opgegeven.';
$s['error_UNSUPPORTED_EDITION'] = 'Opgegeven editie wordt niet ondersteund.';
$s['error_UNSUPPORTED_COMBINATION'] = 'De combinatie taal en editie klopt niet.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Geselecteerde update bevat geen cumulatieve update.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Informatie over de opgegeven update bestaat niet in de database.';
$s['error_KEY_NOT_EXISTS'] = 'Opgegeven code bestaat niet in update-informatie.';
$s['error_UNSPECIFIED_UPDATE'] = 'Update-ID is niet opgegeven.';
$s['error_INCORRECT_ID'] = 'Opgegeven update-ID is onjuist. Zorg ervoor dat de opgegeven update-ID juist is.';
$s['error_RATE_LIMITED'] = 'U wordt beperkt. Probeer het over een paar seconden opnieuw.';
$s['error_UNSPECIFIED_VE'] = 'U heeft geen extra edities geselecteerd. Indien U geen extra edities wilt creeren, gebruik dan aub de <i>Download dmv aria2 en converteer</i> optie.';
$s['errorNoMessage'] = 'Foutmelding niet beschikbaar.';

//Languages
$s['lang_ar-sa'] = 'Arabisch (Saudi Arabie)';
$s['lang_bg-bg'] = 'Bulgaars';
$s['lang_cs-cz'] = 'Tsjechisch';
$s['lang_da-dk'] = 'Deens';
$s['lang_de-de'] = 'Duits';
$s['lang_el-gr'] = 'Grieks';
$s['lang_en-gb'] = 'Engels (Verenigd Koninkrijk)';
$s['lang_en-us'] = 'Engels (Verenigde Staten)';
$s['lang_es-es'] = 'Spaans';
$s['lang_es-mx'] = 'Mexicaans';
$s['lang_et-ee'] = 'Estlands';
$s['lang_fi-fi'] = 'Fins';
$s['lang_fr-ca'] = 'Frans (Canada)';
$s['lang_fr-fr'] = 'Frans (Frankrijk)';
$s['lang_he-il'] = 'Hebreeuws';
$s['lang_hr-hr'] = 'Croatisch';
$s['lang_hu-hu'] = 'Hongaars';
$s['lang_it-it'] = 'Italiaans';
$s['lang_ja-jp'] = 'Japans';
$s['lang_ko-kr'] = 'Koreaans';
$s['lang_lt-lt'] = 'Litouws';
$s['lang_lv-lv'] = 'Lets';
$s['lang_nb-no'] = 'Noors (Bokmal)';
$s['lang_nl-nl'] = 'Nederlands';
$s['lang_pl-pl'] = 'Pools';
$s['lang_pt-br'] = 'Portugees (Brazillië)';
$s['lang_pt-pt'] = 'Portugees (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Roemeens';
$s['lang_ru-ru'] = 'Russisch';
$s['lang_sk-sk'] = 'Slowaaks';
$s['lang_sl-si'] = 'Sloveens';
$s['lang_sr-latn-rs'] = 'Servisch (Latin)';
$s['lang_sv-se'] = 'Zweeds';
$s['lang_th-th'] = 'Thais';
$s['lang_tr-tr'] = 'Turks';
$s['lang_uk-ua'] = 'Oekraïens';
$s['lang_zh-cn'] = 'Chinees (Simplified)';
$s['lang_zh-hk'] = 'Chinees (Hong Kong)';
$s['lang_zh-tw'] = 'Chinees (Traditioneel)';
