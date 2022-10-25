<?php
/*
UUP dump translation file.

Translation information:
English language name: Turkish (Turkey)
Localized language name: Türkçe (Türkiye)
Language code: tr-TR
Authors: techgenius1
*/

//Language information
$s['code'] = 'tr-TR';
$s['timeZone'] = 'Europe/Istanbul'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Derleme';
$s['arch'] = 'Mimari';
$s['ring'] = 'Halka';
$s['updateid'] = 'Güncelleme Kimliği';
$s['update'] = 'Güncelleme';
$s['lang'] = 'Dil';
$s['edition'] = 'Versiyon';
$s['seachForBuilds'] = 'Derleme arayın...';
$s['no'] = 'Hayır';
$s['yes'] = 'Evet';
$s['yesRecommended'] = 'Evet (önerilir)';
$s['next'] = 'İleri';
$s['ok'] = 'Tamam';
$s['cancel'] = 'İptal';
$s['information'] = 'Bilgi';
$s['totalDlSize'] = 'Toplam indirme boyutu';
$s['file'] = 'Dosya';
$s['expires'] = 'Geçerlilik Sonu';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Boyut';
$s['additionalEdition'] = 'Ek versiyon';
$s['requiredEdition'] = 'Gerekli versiyon';
$s['unknown'] = 'Bilinmeyen';

//global
$s['home'] = 'Ana sayfa';
$s['downloads'] = 'İndirmeler';
$s['lightMode'] = 'Aydınlık tema';
$s['darkMode'] = 'Karanlık tema';
$s['sourceCode'] = 'Kaynak kodu';
$s['menu'] = 'Menü';
$s['websiteDesc'] = 'UUP dosyalarını Windows Update sunucularından kolaylıkla indirin. Bu proje Microsoft Corporation ile ilişkili değildir.';
$s['notAffiliated'] = 'Bu proje Microsoft Corporation ile ilişkili değildir. Windows, Microsoft Corporation\'ın tescilli ticari markasıdır.';
$s['copyright'] = '© %d %s ve katkıda bulunanlar.'; //© 2019 whatever127 and contributors.
$s['selectLanguage'] = 'Lütfen dilinizi seçin';

//index.php
$s['slogan'] = 'UUP dosyalarını Windows Update sunucularından kolaylıkla indirin.';
$s['advOptions'] = 'Gelişmiş seçenekler';
$s['browseBuilds'] = 'Bilinen Derlemelerin listesine göz atın';
$s['browseBuildsSub'] = 'Yerel veritabanında olan bir derleme seçin ve indirin.';
$s['fetchLatest'] = 'En son derlemeyi getir';
$s['fetchLatestSub'] = 'Windows Update sunucularından en son derleme bilgilerini alın.';
$s['newlyAdded'] = 'Yeni eklenen derlemeler';
$s['dateAdded'] = 'Eklenme tarihi';

//known.php
$s['browseKnown'] = 'Bilinen derlemelere göz atın';
$s['chooseBuild'] = 'Derleme seçin';
$s['weFoundBuilds'] = 'Sorgunuz için <b>%d</b> derleme bulduk.'; //We have found <b>692</b> builds for your query.

//latest.php
$s['latestFetchLatest'] = 'En son derlemeyi getir';
$s['latestTestingOnly'] = 'Yalnızca test amaçlı';
$s['latestTestingOnlyWarn'] = '<b>Bu sayfa yalnızca test amaçlı olarak sağlanmıştır.</b> Bu sayfa tarafından alınan ve arka uç sunucusu tarafından işlenmeyen derlemeler, eksik sonuçlar sağlayabilecek yedek paketler kullanılarak sağlanacaktır. Zaten bilinen bir derlemeyi indirmek istiyorsanız, lütfen bunun yerine bilinen derlemeler sayfasını kullanın.';
$s['latestDoYouWantKnown'] = 'Bilinen derlemeler listesine göz atarak devam etmek ister misiniz?';
$s['chooseOptions'] = 'Seçenekleri seçin';
$s['buildOfPretendedClient'] = 'Sahte Windows Update istemcisinin derleme numarası';
$s['editionOfPretendedClient'] = 'Sahte sistemin versiyonu';
$s['skipAheadLabel'] = 'İleri atla';
$s['skipAheadOption'] = 'İleri atlamayı kullanın (yalnızca Insider Hızlı\'da)';
$s['fetchUpdates'] = 'Güncellemeleri getir';
$s['fetchUpdatesInfo'] = 'İsteğinizi Windows Update sunucularına göndermek için <i> Güncelleştirmeleri getir </i> düğmesine tıklayın.';

//fetchupd.php
$s['responseFromServer'] = 'Sunucudan alınan yanıt';
$s['foundUpdates'] = '%d güncelleme bulundu'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'Aşağıdaki güncellemeler bulundu. Devam etmek için istediğiniz güncellemenin adını tıklayın.';
$s['buildNumber'] = 'Derleme numarası: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '%s için dil seçin'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Dil seçin';
$s['chooseLangDesc'] = 'İstediğiniz dili seçin';
$s['allLangs'] = 'Tüm Diller';
$s['selLangFiles'] = 'Dosyalar';
$s['allFiles'] = 'Tüm dosyalar';
$s['wubOnly'] = 'Yalnızca WindowsUpdateBox';
$s['updateOnly'] = 'Yalnızca güncelleme';
$s['selectLangInfoText1'] = 'İndirmek istediğiniz versiyonu seçmek için <i>İleri</i> düğmesini tıklayın.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe ve Toplu güncelleştirmeler <i>Tüm diller</i> dilinde bulunabilir.';
$s['allLangsWarn'] = '<i>Tüm diller</i> seçeneği, versiyon seçimini desteklemez.';
$s['clickNextToOpenFindFiles'] = 'Dosyaları bulmaya izin veren sayfayı açmak için <i>İleri</i> düğmesini tıklayın.';
$s['noLangsAvailable'] = 'Bu derleme için kullanılabilir dil yok.';
$s['browseFiles'] = 'Dosyalara göz at';
$s['browseFilesDesc'] = 'Seçili derlemenin dosyalarına hızlıca göz atın';
$s['searchFiles'] = 'Dosyaları ara';
$s['toSearchForCUUseQuery'] = 'Toplu Güncelleştirmeleri aramak için <i>%s</i> arama sorgusunu kullanın.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.

//selectedition.php
$s['selectEditionFor'] = '%s için versiyon seçin'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Versiyon Seç';
$s['chooseEditionDesc'] = 'İstediğiniz versiyonları seçin';
$s['allEditions'] = 'Tüm versiyonlar';
$s['selectEditionInfoText'] = 'Seçiminizin özet sayfasını açmak için <i>İleri</i> düğmesini tıklayın.';
$s['additionalEditionsInfo'] = 'Sağdaki tabloda bulunan ek bir sürüme ihtiyacınız varsa, lütfen belirtilen gerekli sürümü seçin ve <i>İleri</i> \'yi tıklayın. Özet sayfasında, uygun indirme seçeneğinin altında istediğiniz ek sürümleri seçebilirsiniz.';

//download.php
$s['summary'] = 'Özet';
$s['summaryDesc'] = 'Seçiminizi inceleyin ve indirme yöntemini seçin';
$s['summaryFor'] = '%s için özet'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Seçiminizin özeti';
$s['browseList'] = 'Dosya listesine göz at';
$s['browseListDesc'] = 'Manuel indirme için UUP setindeki dosyaların listesini içeren sayfayı açar.';
$s['aria2Opt1'] = 'aria2 Kullanarak indir';
$s['aria2Opt1Desc'] = 'aria2 Kullanarak seçilen UUP setini kolayca indirin.';
$s['aria2Opt2'] = 'aria2 Kullanarak indir ve dönüştür';
$s['aria2Opt2Desc'] = 'Seçilen UUP setini aria2 kullanarak kolayca indirin ve ISO\'ya dönüştürün.';
$s['aria2Opt3'] = 'aria2\'yi kullanarak indirin, dönüştürün ve ek sürümler oluşturun';
$s['aria2Opt3Desc'] = 'aria2 Kullanarak seçilen UUP setini kolayca indirin, dönüştürün, ek sürümler oluşturun ve son olarak bir ISO görüntüsü oluşturun.';
$s['jsRequiredToConf'] = 'Bu seçeneği yapılandırmak ve kullanmak için JavaScript gereklidir.';
$s['selAdditionalEditions'] = 'Ek versiyonları seçin';
$s['noAdditionalEditions'] = 'Bu seçim için ek versiyon yok.';
$s['learnMore'] = 'Daha fazla bilgi edinin';
$s['learnMoreAdditionalEditions1'] = 'Bu seçenek, seçilen ek versiyonların otomatik olarak oluşturulmasını sağlar.';
$s['learnMoreAdditionalEditions2'] = 'Ek versiyonların listesi seçilen temel versiyonlarla belirlenir. İstediğiniz ek versiyonları oluşturmak için gereken temel versiyonların listesine aşağıda görebilirsiniz:';
$s['learnMoreUpdates1'] = 'Updates will be integrated to the converted image only when the conversion script is run on the following systems:';
$s['learnMoreUpdates2'] = 'Güncellemeler dönüştürülen imaja, yalnızca dönüşüm komut dosyası aşağıdaki sistemlerde çalıştırıldığında entegre edilecektir:';
$s['systemWithAdk'] = 'Windows 10 ADK yüklü %s'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Ek güncellemeler';
$s['additionalUpdatesDesc'] = 'Bu UUP seti, dönüştürme işlemi sırasında entegre edilecek ve oluşturma süresini önemli ölçüde artıran ek güncellemeler içerir.';
$s['browseUpdatesList'] = 'Güncelleme listesine göz atın';
$s['selectDownloadOptions'] = 'İndirme seçeneklerinizi belirleyin';
$s['selectDownloadOptionsSub'] = 'Seçiminizi nasıl indirmek istediğinizi yapılandırın';
$s['downloadMethod'] = 'İndirme yöntemi';
$s['conversionOptions'] = 'Dönüştürme seçenekleri';
$s['convOpt1'] = 'Install.wim yerine Install.esd ile ISO oluşturun';
$s['convOpt2'] = 'Güncelleştirmeleri kullanılabilir olduğunda entegre et(yalnızca Windows dönüştürücü ile)';
$s['convOpt3'] = 'Güncelleştirme entegrasyonundan sonra temizleme işlemini çalıştır(yalnızca Windows dönüştürücü ile)';
$s['convOpt4'] = '.NET Framework 3.5\'i entegre et(yalnızca Windows dönüştürücü ile)';
$s['startDownload'] = 'İndirme paketi oluştur';

//get.php
$s['listOfFilesFor'] = '%s için dosyaları listele'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Toplam dosya boyutu: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Dosya yeniden adlandırma komut dosyası';
$s['fileRenamingScriptDesc1'] = 'Aşağıda bulunan komut dosyası, indirilen dosyaları hızlı bir şekilde yeniden adlandırmak için kullanılabilir.';
$s['fileRenamingScriptDesc2'] = 'Aşağıdaki formun içeriğini <code> cmd </code> uzantılı yeni bir dosyaya kopyalayın, indirilen dosyaların bulunduğu klasöre koyun ve çalıştırın.';
$s['sha1File'] = 'SHA-1 sağlama dosyası';
$s['sha1FileDesc'] = 'Bu dosyayı, dosyaların doğru indirildiğini hızlı bir şekilde doğrulamak için kullanabilirsiniz.';
$s['aria2NoticeTitle'] = 'aria2 Seçenek uyarısını kullanarak indir';
$s['aria2NoticeText1'] = 'aria2 Seçeneklerini kullanarak indir, indirilmesi gereken bir arşiv oluşturur. İndirilen arşiv, seçilen görevi gerçekleştirmek için gereken tüm dosyaları içerir.';
$s['aria2NoticeText2'] = 'İndirme işlemini başlatmak için platformunuz için bir komut dosyası kullanın:';
$s['aria2NoticeText3'] = 'aria2 açık kaynaklı bir projedir. Burada bulabilirsiniz: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP Dönüşüm komut dosyası (Windows sürümü) %s tarafından oluşturuldu.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP Dönüşüm betiği (Linux sürümü, macOS sürümü) açık kaynak kodludur. Burada bulabilirsiniz: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '%s İçindeki dosyaları bul'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Bu sayfadan indirilen dosyaları hızlı bir şekilde yeniden adlandırmak istiyorsanız, bunu sizin için otomatik olarak yapacak bir yeniden adlandırma komut dosyası oluşturabilirsiniz.';
$s['fileRenamingScriptGenW'] = 'Yeniden adlandırma komut dosyası oluşturma (Windows)';
$s['fileRenamingScriptGenL'] = 'Yeniden adlandırma komut dosyası oluşturma (Linux, macOS)';
$s['searchForFiles'] = 'Dosya ara...';
$s['weFoundFiles'] = 'Sorgunuz için <b>%d</b> dosya bulundu.'; //We have found <b>692</b> files for your query.

//Error pages
$s['error'] = 'Hata';
$s['requestNotSuccessful'] = 'İstek başarılı değil';
$s['anErrorHasOccurred'] = 'İsteğiniz işleme koyulurken bir hata oluştu.';
$s['generatedPackNotAvailable'] = 'Oluşturulan paket mevcut değil';
$s['generatedPackNotAvailableDesc'] = 'İndirmeye çalıştığınız güncellemede, kullanılabilir diller, sürümler ve dosyalar hakkında tam bilgi sağlayan oluşturulmuş bir paket yok. Yedek paket kullanılacaktır ve doğru bilgileri vermeyebilir. Bu nedenle indirme başarısız olursa, lütfen otomatik olarak oluşturulan paketin kullanılabilir olmasını bekleyin.';
$s['arm64Warning'] = '<b>Yalnızca ARM64 tabanlı cihazlarla uyumlu</b> ve normal Intel veya AMD tabanlı bilgisayarlarla çalışmayan bir ARM64 yapısı seçtiniz. <b>64 bit</b> bilgisayarlar için lütfen <b>amd64</b> yapılarını kullanın. <b>32 bit</b> bilgisayarlar için lütfen <b>x86</b> yapılarını kullanın. Hedef cihazın ARM64 tabanlı olduğundan kesinlikle eminseniz, bu mesajı göz ardı edebilirsiniz.';

//Error messages
$s['error_ERROR'] = 'Genel hata.';
$s['error_UNSUPPORTED_API'] = 'Yüklü API sürümü, bu UUP yığını sürümüyle uyumlu değil.';
$s['error_NO_FILEINFO_DIR'] = '<i>fileinfo</i> dizini mevcut değil.';
$s['error_NO_BUILDS_IN_FILEINFO'] = '<i>fileinfo</i> veritabanı herhangi bir yapı içermiyor.';
$s['error_SEARCH_NO_RESULTS'] = 'Gerçekleştirilen sorgu için hiçbir öğe bulunamadı.';
$s['error_UNKNOWN_ARCH'] = 'Bilinmeyen işlemci mimarisi.';
$s['error_UNKNOWN_RING'] = 'Bilinmeyen halka.';
$s['error_UNKNOWN_FLIGHT'] = 'Bilinmeyen uçuş.';
$s['error_UNKNOWN_COMBINATION'] = 'Uçuş ve Halka kombinasyonu doğru değil. İleri atla, yalnızca Insider Fast halkası için desteklenir.';
$s['error_ILLEGAL_BUILD'] = 'Belirtilen yapı numarası %d\'den az veya %d\'den büyük.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Belirtilen derleme yanlış.';
$s['error_NO_UPDATE_FOUND'] = 'Sunucu hiçbir güncelleme getirmedi.';
$s['error_XML_PARSE_ERROR'] = 'Yanıt XML ayrıştırma başarısız oldu. Microsoft sunucularında bir sorun olabilir. Daha sonra tekrar deneyin.';
$s['error_EMPTY_FILELIST'] = 'Sunucu boş bir dosya listesi getirdi.';
$s['error_NO_FILES'] = 'Seçiminiz için kullanılabilir dosya yok.';
$s['error_NOT_FOUND'] = 'Belirtilen seçim bulunamadı.';
$s['error_MISSING_FILES'] = 'Seçilen UUP setinde eksik dosyalar var.';
$s['error_NO_METADATA_ESD'] = 'Seçiminiz için kullanılabilir meta veri ESD dosyası yok.';
$s['error_UNSUPPORTED_LANG'] = 'Belirtilen dil desteklenmiyor.';
$s['error_UNSPECIFIED_LANG'] = 'Dil belirtilmedi.';
$s['error_UNSUPPORTED_EDITION'] = 'Belirtilen sürüm desteklenmiyor.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Dil ve sürüm kombinasyonu doğru değil.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Seçilen güncelleştirme Toplu Güncelleştirme içermiyor.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Belirtilen güncelleme hakkında veritabanında bilgi yok.';
$s['error_KEY_NOT_EXISTS'] = 'Güncelleme bilgilerinde belirtilen anahtar mevcut değil.';
$s['error_UNSPECIFIED_UPDATE'] = 'Güncelleme kimliği belirtilmedi.';
$s['error_INCORRECT_ID'] = 'Belirtilen Güncelleme Kimliği yanlış. Lütfen belirtilen Güncelleme Kimliğinin doğru olduğundan emin olun.';
$s['error_RATE_LIMITED'] = 'Oy sınırınız var. Lütfen birkaç saniye içinde tekrar deneyin.';
$s['error_UNSPECIFIED_VE'] = 'Ek versiyon seçmediniz. Ek versiyonlar oluşturmak istemiyorsanız, lütfen <i>aria2 kullanarak indir ve dönüştür</i> seçeneğini kullanın.';
$s['errorNoMessage'] = 'Hata mesajı mevcut değil.';

//Languages
$s['lang_ar-sa'] = 'Arapça (Suudi Arabistan)';
$s['lang_bg-bg'] = 'Bulgar';
$s['lang_cs-cz'] = 'Çekce';
$s['lang_da-dk'] = 'Danimarka dili';
$s['lang_de-de'] = 'Almanca';
$s['lang_el-gr'] = 'Yunanca';
$s['lang_en-gb'] = 'İngilizce (Birleşik Krallık)';
$s['lang_en-us'] = 'İngilizce (Birleşik Devletler)';
$s['lang_es-es'] = 'İspanyolca (İspanya)';
$s['lang_es-mx'] = 'İspanyolca (Meksika)';
$s['lang_et-ee'] = 'Estonca';
$s['lang_fi-fi'] = 'Fince';
$s['lang_fr-ca'] = 'Fransızca (Kanada)';
$s['lang_fr-fr'] = 'Fransızca (Fransa)';
$s['lang_he-il'] = 'İbranice';
$s['lang_hr-hr'] = 'Hırvatça';
$s['lang_hu-hu'] = 'Macarca';
$s['lang_it-it'] = 'İtalyanca';
$s['lang_ja-jp'] = 'Japonca';
$s['lang_ko-kr'] = 'Korece';
$s['lang_lt-lt'] = 'Litvanca';
$s['lang_lv-lv'] = 'Letonca';
$s['lang_nb-no'] = 'Norveççe (Bokmal)';
$s['lang_nl-nl'] = 'Flemenkçe';
$s['lang_pl-pl'] = 'Lehçe';
$s['lang_pt-br'] = 'Portekizce (Brezilya)';
$s['lang_pt-pt'] = 'Portekizce (Portekiz)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Rumence';
$s['lang_ru-ru'] = 'Rusça';
$s['lang_sk-sk'] = 'Slovakça';
$s['lang_sl-si'] = 'Sloven';
$s['lang_sr-latn-rs'] = 'Sırpça (Latin)';
$s['lang_sv-se'] = 'İsveççe';
$s['lang_th-th'] = 'Tayca';
$s['lang_tr-tr'] = 'Türkçe';
$s['lang_uk-ua'] = 'Ukraynaca';
$s['lang_zh-cn'] = 'Çince (Basitleştirilmiş)';
$s['lang_zh-hk'] = 'Çince (Hong Kong)';
$s['lang_zh-tw'] = 'Çince (Geleneksel)';
