<?php
/*
UUP dump translation file.

Translation information:
English language name: French (France)
Localized language name: French (France)
Language code: fr-fr
Authors: Zardoc (https://forums.mydigitallife.net/members/zardoc.18278/)
*/

//Language information
$s['code'] = 'fr-FR';
$s['timeZone'] = 'Europe/Paris'; //Zones horaires prises en charge: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Parcourir les builds connus - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architecture';
$s['ring'] = 'Anneau';
$s['updateid'] = 'ID de mise à jour';
$s['update'] = 'Mise à jour';
$s['lang'] = 'Langue';
$s['edition'] = 'Édition';
$s['seachForBuilds'] = 'Rechercher des builds...';
$s['no'] = 'Non';
$s['yes'] = 'Oui';
$s['yesRecommended'] = 'Oui (recommandé)';
$s['next'] = 'Suivant';
$s['ok'] = 'OK';
$s['cancel'] = 'Annuler';
$s['information'] = 'Information';
$s['totalDlSize'] = 'Taille totale du téléchargement';
$s['file'] = 'Fichier';
$s['expires'] = 'Expires';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Taille';
$s['additionalEdition'] = 'Édition supplémentaire';
$s['requiredEdition'] = 'Édition requise';
$s['unknown'] = 'Inconnu';

//global
$s['home'] = 'Accueil';
$s['downloads'] = 'Téléchargements';
$s['lightMode'] = 'Mode clair';
$s['darkMode'] = 'Mode foncé';
$s['sourceCode'] = 'Code source';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Télécharger les fichiers UUP à partir des serveurs Windows Update avec facilité. Ce projet n\'est pas affilié à Microsoft Corporation.';
$s['notAffiliated'] = 'Ce projet n\'est pas affilié à Microsoft Corporation. Windows est une marque déposée de Microsoft Corporation.';
$s['copyright'] = '© %d %s et contributeurs.'; //© 2019 whatever127 et contributeurs.
$s['selectLanguage'] = 'S\'il vous plaît sélectionnez votre langue';

//index.php
$s['slogan'] = 'Télécharger les fichiers UUP à partir des serveurs Windows Update avec facilité.';
$s['advOptions'] = 'Options avancées';
$s['browseBuilds'] = 'Parcourir la liste des builds connus';
$s['browseBuildsSub'] = 'Choisissez une build déjà connue dans la base de données locale et téléchargez-la.';
$s['fetchLatest'] = 'Chercher la dernière build';
$s['fetchLatestSub'] = 'Récupérez les informations des dernières builds à partir des serveurs Windows Update.';
$s['newlyAdded'] = 'builds nouvellement ajoutées';
$s['dateAdded'] = 'Date ajouté';

//known.php
$s['browseKnown'] = 'Parcourir la liste des builds connus';
$s['chooseBuild'] = 'Choisir la build';
$s['weFoundBuilds'] = 'Nous avons trouvé <b>%d</b> builds pour votre requête.'; //Nous avons trouvé <b>692</b> builds pour votre requête.

//latest.php
$s['latestFetchLatest'] = 'Extraire la dernière build';
$s['latestTestingOnly'] = 'Que pour fins d\'essais';
$s['latestTestingOnlyWarn'] = '<b>Cette page est offerte que pour fins d\'essais seulement.</b> Les builds récupérées par cette page qui n\'ont pas été traitées par le serveur principal seront fournies à l\'aide de packs de secours, qui peuvent fournir des résultats incomplets. Si vous souhaitez télécharger une build déjà connue, veuillez utiliser la page de build connue à la place';
$s['latestDoYouWantKnown'] = 'Voulez-vous continuer en parcourant la liste des builds connues?';
$s['chooseOptions'] = 'Choisissez les options';
$s['buildOfPretendedClient'] = 'Numéro de build du client fictif Windows Update';
$s['editionOfPretendedClient'] = 'Edition du système fictif';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Use skip ahead flighting (Insider Rapide seulement)';
$s['fetchUpdates'] = 'Récupérer les mises à jour';
$s['fetchUpdatesInfo'] = 'Cliquer le <i>Récupérer les mises à jour</i> bouton pour envoyer votre demande aux serveurs Windows Update.';

//fetchupd.php
$s['responseFromServer'] = 'Response du serveur';
$s['foundUpdates'] = 'Trouver %d mise à jour(s)'; //Trouver 1 mise à jour(s)
$s['foundTheseUpdates'] = 'Les mises à jour suivantes ont été trouvées. Cliquez sur le nom de la mise à jour souhaitée pour continuer.';
$s['buildNumber'] = 'build numéro: %s'; //build numéro: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Sélectionnez la langue pour %s'; //Choix de la langue pour Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Choisissez la langue';
$s['chooseLangDesc'] = 'Choisissez la langue de votre choix';
$s['allLangs'] = 'Toutes les langues';
$s['selLangFiles'] = 'Fichiers';
$s['allFiles'] = 'Tout les Fichiers';
$s['wubOnly'] = 'WindowsUpdateBox uniquement';
$s['updateOnly'] = 'Mettre à jour uniquement';
$s['selectLangInfoText1'] = 'Cliquez sur le bouton <i>Suivant</i> pour sélectionner l’édition que vous souhaitez télécharger.';
$s['selectLangInfoText2'] = 'Les mises à jour cumulatives et WindowsUpdateBox.exe sont disponibles dans la langue <i>Toutes les langues</i> langue.';
$s['allLangsWarn'] = 'L\'option <i>Toutes les langues</i> ne prend pas en charge la sélection d’édition.';
$s['clickNextToOpenFindFiles'] = 'Cliquez sur le <i>Suivant</i> bouton pour ouvrir la page, qui permet de rechercher des fichiers.';
$s['noLangsAvailable'] = 'Il n\'existe pas de langues disponibles pour cette build.';
$s['browseFiles'] = 'Parcourir les fichiers';
$s['browseFilesDesc'] = 'Parcourir rapidement les fichiers de la build sélectionnée';
$s['searchFiles'] = 'Recherche de fichiers';
$s['toSearchForCUUseQuery'] = 'Pour rechercher des mises à jour cumulatives, utilisez la <i>%s</i> requête de recherche.'; //Pour rechercher des mises à jour cumulatives, utilisez la requête de recherche <i>Windows10 KB</i> requête de recherche.

//selectedition.php
$s['selectEditionFor'] = 'Choisissez une édition pour %s'; //Sélectionner l'édition pour Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Anglais (États Unis)
$s['chooseEdition'] = 'Choisissez une édition';
$s['chooseEditionDesc'] = 'Choisissez votre édition désirée';
$s['allEditions'] = 'Toutes les éditions';
$s['selectEditionInfoText'] = 'Cliquez sur le bouton <i>Suivant</i> pour ouvrir la page de résumé de votre sélection.';
$s['additionalEditionsInfo'] = 'Si vous avez besoin d’une édition supplémentaire qui se trouve dans le tableau de droite, sélectionnez l’édition requise indiquée, puis cliquez sur <i> Suivant</i>. Sur la page de résumé, vous pourrez sélectionner les éditions supplémentaires souhaitées sous l’option de téléchargement approprié.';

//download.php
$s['summary'] = 'Résumé';
$s['summaryDesc'] = 'Vérifiez votre sélection et choisissez la méthode de téléchargement';
$s['summaryFor'] = 'Résumé pour %s'; //SRésumé pour Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, anglais (États-Unis), Windows 10 Pro
$s['summaryOfSelection'] = 'Résumé de votre sélection';
$s['browseList'] = 'Parcourir une liste de fichiers';
$s['browseListDesc'] = 'Ouvre la page avec une liste des fichiers de l’UUP configurés pour le téléchargement manuel.';
$s['aria2Opt1'] = 'Télécharger en utilisant aria2';
$s['aria2Opt1Desc'] = 'Téléchargez facilement le jeu d\'UUP sélectionné à l\'aide d\'aria2.';
$s['aria2Opt2'] = 'Téléchargez en utilisant aria2 et convertissez';
$s['aria2Opt2Desc'] = 'Téléchargez facilement le jeu d\'UUP sélectionné à l\'aide d\'aria2 et convertissez-le au format ISO.';
$s['aria2Opt3'] = 'Téléchargez en utilisant aria2, convertissez et créez des éditions supplémentaires';
$s['aria2Opt3Desc'] = 'Téléchargez facilement le jeu d\'UUP sélectionné avec aria2, convertissez-le, créez des éditions supplémentaires et créez une image ISO.';
$s['jsRequiredToConf'] = 'JavaScript est requis pour configurer et utiliser cette option.';
$s['selAdditionalEditions'] = 'Sélectionnez des éditions supplémentaires';
$s['noAdditionalEditions'] = 'Aucune édition supplémentaire n\'est disponible pour cette sélection.';
$s['learnMore'] = 'En savoir plus';
$s['learnMoreAdditionalEditions1'] = 'Cette option permet la création automatique des éditions supplémentaires sélectionnées.';
$s['learnMoreAdditionalEditions2'] = 'La liste des éditions supplémentaires est déterminée par les éditions de base sélectionnées. Ci-dessous, vous pouvez consulter la liste des éditions de base nécessaires pour créer les éditions supplémentaires souhaitées:';
$s['learnMoreUpdates1'] = 'Les mises à jour seront intégrées à l\'image convertie uniquement si le script de reconstruction est exécuté sur les systèmes suivants:';
$s['learnMoreUpdates2'] = 'Si vous exécutez le script de reconstruction sur un autre système, les mises à jour ne seront pas intégrées à l’image résultante.';
$s['systemWithAdk'] = '%s avec ADK Windows 10 installé'; //Windows 7 avec Windows 10 ADK installé
$s['additionalUpdates'] = 'Mises à jour supplémentaires';
$s['additionalUpdatesDesc'] = 'Ce jeu UUP contient des mises à jour supplémentaires qui seront intégrées lors du processus de reconstruction, ce qui augmentera considérablement le temps de création.';
$s['browseUpdatesList'] = 'Parcourir la liste des mises à jour';

//get.php
$s['listOfFilesFor'] = 'Liste des fichiers pour %s'; //Liste des fichiers pour Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Taille totale des fichiers: %s'; //Taille totale des fichiers: 2,86 Go
$s['fileRenamingScript'] = 'Script de changement de nom de fichier';
$s['fileRenamingScriptDesc1'] = 'Le script ci-dessous peut être utilisé pour renommer rapidement des fichiers téléchargés.';
$s['fileRenamingScriptDesc2'] = 'Copiez simplement le contenu du formulaire ci-dessous dans un nouveau fichier portant l\'extension <code>cmd</code>, placez-le dans le dossier des fichiers téléchargés et exécutez-le.';
$s['sha1File'] = 'Fichier de sommes de contrôle SHA-1';
$s['sha1FileDesc'] = 'Vous pouvez utiliser ce fichier pour vérifier rapidement que les fichiers ont été téléchargés correctement.';
$s['aria2NoticeTitle'] = 'Télécharger en utilisant la notification des options aria2';
$s['aria2NoticeText1'] = 'Le téléchargement à l\'aide des options aria2 crée une archive qui doit être téléchargée. L\'archive téléchargée contient tous les fichiers nécessaires à la réalisation de la tâche sélectionnée.';
$s['aria2NoticeText2'] = 'Pour lancer le processus de téléchargement, utilisez un script pour votre plate-forme:';
$s['aria2NoticeText3'] = 'AAria2 est un projet open source. Vous pouvez le trouver ici: % s.';//Aria2 est un projet open source. Vous pouvez le trouver ici: https://aria2.github.io/..
$s['aria2NoticeText4'] = 'Le script UUP Conbuild (génération Windows) a été créé par %s.'; //Le script Conbuild UUP (version Windows) a été créé par abbodi1406.
$s['aria2NoticeText5'] = 'Le script UUP Conbuild (version Linux, version macOS) est à code source ouvert. Vous pouvez le trouver ici: %s.'; //Le script UUP Conbuild (version Linux, version macOS) est open source. Vous pouvez le trouver ici: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Trouver les fichiers dans %s'; //Trouver des fichiers dans Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Si vous souhaitez renommer rapidement des fichiers téléchargés à partir de cette page, vous pouvez générer un script de changement de nom, qui le fera automatiquement à votre place.';
$s['fileRenamingScriptGenW'] = 'Générer un script de changement de nom (Windows)';
$s['fileRenamingScriptGenL'] = 'Générer un script de changement de nom (Linux, macOS)';
$s['searchForFiles'] = 'Rechercher des fichiers...';
$s['weFoundFiles'] = 'Nous avons trouvé <b>%d</b> ichiers pour votre requête.'; //Nous avons trouvé <b>692</b> fichiers pour votre requête.

//Error pages
$s['error'] = 'Erreur';
$s['requestNotSuccessful'] = 'Demande non aboutie';
$s['anErrorHasOccurred'] = 'Une erreur est survenue lors de la tentative de traitement de votre demande.';
$s['generatedPackNotAvailable'] = 'Pack généré non disponible';
$s['generatedPackNotAvailableDesc'] = 'La mise à jour que vous tentez de télécharger ne contient pas de pack généré fournissant des informations complètes sur les langues, les éditions et les fichiers disponibles. Le pack de secours sera utilisé et il se peut qu\'il ne fournisse pas les informations correctes. Si le téléchargement échoue pour cette raison, veuillez attendre que le pack généré automatiquement soit disponible.';
$s['arm64Warning'] = 'Vous avez sélectionné une version ARM64 compatible <b>uniquement avec les périphériques ARM64</b> et ne fonctionnant pas avec les ordinateurs Intel ou AMD classiques. Pour les <b>ordinateurs 64 bits</b>, utilisez les versions <b>amd64</b>. Pour les <b>ordinateurs 32 bits</b>,utilisez les versions <b>x86</b>. Si vous êtes absolument certain que le périphérique de destination est basé sur ARM64, vous pouvez ignorer ce message en toute sécurité.';

//Error messages
$s['error_ERROR'] = 'Erreur générique.';
$s['error_UNSUPPORTED_API'] = 'La construction de l\'API installée n\'est pas compatible avec cette construction du vidage UUP.';
$s['error_NO_FILEINFO_DIR'] = 'Le répertoire <i>info fichier</i> n’existe pas.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'La base de données <i>info fichier</i> ne contient aucune construction.';
$s['error_SEARCH_NO_RESULTS'] = 'Aucun élément trouvé pour la requête effectuée.';
$s['error_UNKNOWN_ARCH'] = 'Architecture de processeur inconnue.';
$s['error_UNKNOWN_RING'] = 'Anneau inconnue.';
$s['error_UNKNOWN_FLIGHT'] = 'Vol inconnue.';
$s['error_UNKNOWN_COMBINATION'] = 'La combinaison vol et anneau est incorrecte. Le passage en avance n\'est pris en charge que pour l\'anneau rapide Insider.';
$s['error_ILLEGAL_BUILD'] = 'Le numéro de build spécifié est inférieur à %d ou supérieur à %d.';//Le numéro de build spécifié est inférieur à 9841 ou supérieur à 2147483646.
$s['error_ILLEGAL_MINOR'] = 'La construction mineure spécifiée est incorrecte.';
$s['error_NO_UPDATE_FOUND'] = 'Le serveur n\'a renvoyé aucune mise à jour.';
$s['error_XML_PARSE_ERROR'] = 'L\'analyse XML de la réponse a échoué. Il peut y avoir un problème avec les serveurs Microsoft. Réessayez plus tard.';
$s['error_EMPTY_FILELIST'] = 'Le serveur a renvoyé une liste de fichiers vide.';
$s['error_NO_FILES'] = 'Il n’ya pas de fichier disponible pour votre sélection.';
$s['error_NOT_FOUND'] = 'La sélection spécifiée est introuvable.';
$s['error_MISSING_FILES'] = 'Les fichiers manquants dans l’ensemble UUP sélectionné.';
$s['error_NO_METADATA_ESD'] = 'l n’ya pas de fichier ESD de métadonnées disponible pour votre sélection.';
$s['error_UNSUPPORTED_LANG'] = 'La langue spécifiée n\'est pas supportée.';
$s['error_UNSPECIFIED_LANG'] = 'La langue n’a pas été spécifiée.';
$s['error_UNSUPPORTED_EDITION'] = 'L\'édition spécifiée n\'est pas supportée.';
$s['error_UNSUPPORTED_COMBINATION'] = 'La combinaison langue édition est incorrecte.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'La mise à jour sélectionnée ne contient pas de mise à jour cumulative.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'La clé spécifiée n\'existe pas dans les informations de mise à jour.';
$s['error_KEY_NOT_EXISTS'] = 'Les informations sur la mise à jour spécifiée n\'existent pas dans la base de données.';
$s['error_UNSPECIFIED_UPDATE'] = 'L\'ID de mise à jour n\'a pas été spécifié.';
$s['error_INCORRECT_ID'] = 'L\'ID de mise à jour spécifié est incorrect. Assurez-vous que l\'ID de mise à jour spécifié est correct.';
$s['error_RATE_LIMITED'] = 'Votre taux est limité. Veuillez réessayer dans quelques secondes.';
$s['error_UNSPECIFIED_VE'] = 'Vous n\'avez sélectionné aucune édition supplémentaire. Si vous ne souhaitez pas créer d’édition supplémentaire, veuillez utiliser l’option <i>Télécharger avec aria2 et convertir</i>.';
$s['errorNoMessage'] = 'Message d\'erreur non disponible.';

//Languages
$s['lang_ar-sa'] = 'Arabe (Arabie Saoudite)';
$s['lang_bg-bg'] = 'Bulgare';
$s['lang_cs-cz'] = 'Tchèque';
$s['lang_da-dk'] = 'Danois';
$s['lang_de-de'] = 'Allemand';
$s['lang_el-gr'] = 'Grec';
$s['lang_en-gb'] = 'Anglais (Royaume-Uni)';
$s['lang_en-us'] = 'Anglais (États-Unis)';
$s['lang_es-es'] = 'Espagnol (Espagne)';
$s['lang_es-mx'] = 'Espagnol (Mexique)';
$s['lang_et-ee'] = 'Estonien';
$s['lang_fi-fi'] = 'Finnois';
$s['lang_fr-ca'] = 'Français (Canada)';
$s['lang_fr-fr'] = 'Français (France)';
$s['lang_he-il'] = 'Hébreu';
$s['lang_hr-hr'] = 'Croate';
$s['lang_hu-hu'] = 'Hongrois';
$s['lang_it-it'] = 'Italien';
$s['lang_ja-jp'] = 'Japonais';
$s['lang_ko-kr'] = 'Coréen';
$s['lang_lt-lt'] = 'Lituanien';
$s['lang_lv-lv'] = 'Letton';
$s['lang_nb-no'] = 'Norvégien (Bokmal)';
$s['lang_nl-nl'] = 'Néerlandais';
$s['lang_pl-pl'] = 'Polonais';
$s['lang_pt-br'] = 'Portugais (Brésil)';
$s['lang_pt-pt'] = 'Portugais (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Roumain';
$s['lang_ru-ru'] = 'Russe';
$s['lang_sk-sk'] = 'Slovaque';
$s['lang_sl-si'] = 'Slovène';
$s['lang_sr-latn-rs'] = 'Serbe (Latin)';
$s['lang_sv-se'] = 'Suédois';
$s['lang_th-th'] = 'Thaï';
$s['lang_tr-tr'] = 'Turc';
$s['lang_uk-ua'] = 'Ukrainien';
$s['lang_zh-cn'] = 'Chinois (simplifié)';
$s['lang_zh-hk'] = 'Chinois (Hong Kong)';
$s['lang_zh-tw'] = 'Chinois (traditionnel)';
