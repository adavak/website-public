<?php
/*
UUP dump translation file for Chinese (Traditional).
 - UUP dump 中文 (繁體) 翻譯檔

Translation information:
English language name: Chinese (Traditional)
Localized language name: 中文（繁體）
Language code: zh-TW
Authors: pan93412
*/

//Language information
$s['code'] = 'zh-TW';
$s['timeZone'] = 'Asia/Taipei'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = '組建';
$s['arch'] = '架構';
$s['ring'] = '振鈴 (Ring)'; // TRANSLATOR: 我使用 Windows 簡體中文的翻譯代替。若繁體中文有對應翻譯，也請幫忙補上，謝謝！:)
$s['updateid'] = '更新 ID';
$s['update'] = '更新';
$s['lang'] = '語言';
$s['edition'] = '版本';
$s['seachForBuilds'] = '搜尋組建...';
$s['no'] = '否';
$s['yes'] = '是';
$s['yesRecommended'] = '確定 (建議)';
$s['next'] = '下一步';
$s['ok'] = '確定';
$s['cancel'] = '取消';
$s['information'] = '資訊';
$s['totalDlSize'] = '總計下載大小';
$s['file'] = '檔案';
$s['expires'] = '過期時間';
$s['sha1'] = 'SHA-1';
$s['size'] = '大小';
$s['additionalEdition'] = '額外版本';
$s['requiredEdition'] = '必須版本';
$s['unknown'] = '未知';

//global
$s['home'] = '首頁';
$s['downloads'] = '下載';
$s['lightMode'] = '亮色模式';
$s['darkMode'] = '暗色模式';
$s['sourceCode'] = '原始程式碼';
$s['menu'] = '選單';
$s['websiteDesc'] = '輕鬆地從 Windows Update 伺服器下載 UUP 檔案。這個專案與 Microsoft Corporation 無關。';
$s['notAffiliated'] = '這個專案與 Microsoft Corporation 無關。Windows 是 Microsoft Corporation 的註冊商標。';
$s['copyright'] = '© %d %s 和貢獻者們。'; //© 2019 whatever127 and contributors.
$s['selectLanguage'] = '請選擇語言';

//index.php
$s['slogan'] = '輕鬆地從 Windows Update 伺服器下載 UUP 檔案。';
$s['quickOptions'] = '快速選項';
$s['tHeadReleaseType'] = '版本類型';
$s['tHeadDescription'] = '說明';
$s['tHeadArchitectures'] = '架構';
$s['latestPublicRelease'] = '最新公開發行組建';
$s['latestPublicReleaseSub'] = '供一般使用者下載的最新更新組建。';
$s['latestDevRelease'] = '最新 Dev 版通道組建';
$s['latestDevReleaseSub'] = '有點不穩定，包含了最新功能。<br>適合非常了解電腦操作的使用者。';
$s['latestBetaRelease'] = '最新 Beta 版通道組建';
$s['latestBetaReleaseSub'] = '包含了大部分即將推出的功能的穩定組建。<br>適合想提早熟悉新功能的使用者。';
$s['latestRPRelease'] = '最新發行預覽組建';
$s['latestRPReleaseSub'] = '預覽下個發行版本的穩定組建。<br>適合想嘗鮮的使用者。';
$s['advOptions'] = '進階選項';
$s['browseBuilds'] = '瀏覽已知組建列表';
$s['browseBuildsSub'] = '選擇已存在於本機資料庫的組建並下載。';
$s['fetchLatest'] = '取得最新組建';
$s['fetchLatestSub'] = '從 Windows Update 伺服器取得最新的組建資訊。';
$s['newlyAdded'] = '新加入的組建';
$s['dateAdded'] = '加入日期';

//known.php
$s['browseKnown'] = '瀏覽已知組建';
$s['chooseBuild'] = '選擇組建';
$s['weFoundBuilds'] = '我們已依您的搜尋內容找到 <b>%d</b> 個組建。'; //We have found <b>692</b> builds for your query.

//latest.php
$s['latestFetchLatest'] = '取得最新組建';
$s['latestTestingOnly'] = '僅供測試用途';
$s['latestTestingOnlyWarn'] = '<b>這個頁面僅供測試用途。</b> 從這個頁面取得之後端伺服器未處理的組建版本會使用備用套件提供，可能會導致提供不完整的結果。如果您想要下載已知組建，請改使用 [已知組建] 頁面。';
$s['latestDoYouWantKnown'] = '請問您是否要瀏覽已知組建列表？';
$s['chooseOptions'] = '選擇選項';
$s['buildOfPretendedClient'] = 'mock Windows Update 用戶端的組建號碼';
$s['editionOfPretendedClient'] = 'mock 系統版本';
// TRANTAG: [Fuzzy]
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = '使用 Skip ahead flight (僅 Insider Fast 可用)';
$s['fetchUpdates'] = '取得更新';
$s['fetchUpdatesInfo'] = '按下 [取得更新] 按鈕以傳送請求至 Windows Update 伺服器。';

//fetchupd.php
$s['responseFromServer'] = '伺服器回應';
$s['foundUpdates'] = '找到 %d 個更新'; //Found 1 update(s)
$s['foundTheseUpdates'] = '找到以下更新。請按下您想要的更新後繼續。';
$s['buildNumber'] = '組建版本: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '選擇 %s 的語言'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '選擇語言';
$s['chooseLangDesc'] = '請選擇您想要的語言';
$s['allLangs'] = '所有語言';
$s['selLangFiles'] = '檔案';
$s['allFiles'] = '所有檔案';
$s['wubOnly'] = '僅 WindowsUpdateBox';
$s['updateOnly'] = '僅更新';
$s['selectLangInfoText1'] = '按一下 [下一步] 按鈕以選擇您想下載的版本。';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe 及累積更新可在 [所有語言] 語言找到。';
$s['allLangsWarn'] = '[所有語言] 選項不支援版本選取。';
$s['clickNextToOpenFindFiles'] = '按下 [下一步] 按鈕開啟用來搜尋檔案的頁面。';
$s['noLangsAvailable'] = '這個組建沒有可用的語言。';
$s['browseFiles'] = '瀏覽檔案';
$s['browseFilesDesc'] = '快速瀏覽選取組建版本的檔案';
$s['searchFiles'] = '搜尋檔案';
$s['toSearchForCUUseQuery'] = '請搜尋 <b>%s</b> 以尋找累積更新。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.

//selectedition.php
$s['selectEditionFor'] = '選取 %s 的版本'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = '選取版本';
$s['chooseEditionDesc'] = '選取您想要的版本';
$s['allEditions'] = '所有版本';
$s['selectEditionInfoText'] = '按下 [下一步] 按鈕開啟選擇項目的摘要頁面。';
// TRANTAG: [Fuzzy]
$s['additionalEditionsInfo'] = '如果您需要可以在右方表格找到的額外版本，請先選擇指示的所需版本後按下 [下一步]。您將可以在摘要頁面的合適下載選項下方選擇所想要的額外版本。';

//download.php
$s['summary'] = '摘要';
$s['summaryDesc'] = '再次確認您的選擇，並選擇下載方式';
$s['summaryFor'] = '%s 的摘要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '選擇項目摘要';
$s['browseList'] = '瀏覽檔案列表';
// TRANTAG: [Fuzzy]
$s['browseListDesc'] = '開啟要手動下載之包含在 UUP 集合中檔案的列表。';
$s['aria2Opt1'] = '使用 aria2 下載';
$s['aria2Opt1Desc'] = '使用 aria2 簡單地下載選取的 UUP 集合。';
$s['aria2Opt2'] = '使用 aria2 下載並轉換';
$s['aria2Opt2Desc'] = '使用 aria2 簡單地下載選取的 UUP 集合並轉換成 ISO。';
$s['aria2Opt3'] = '使用 aria2 下載、轉換並建立額外版本';
$s['aria2Opt3Desc'] = '使用 aria2 簡單地下載選取的 UUP 集合，再轉換及建立額外版本，最後建立 ISO 映像。';
$s['jsRequiredToConf'] = '設定及使用此選項需要 JavaScript。';
$s['selAdditionalEditions'] = '選擇額外版本';
$s['noAdditionalEditions'] = '此選取項目沒有可用的額外版本。';
$s['learnMore'] = '了解更多';
$s['learnMoreAdditionalEditions1'] = '這個選項會啟用自動建立選擇的額外版本。';
$s['learnMoreAdditionalEditions2'] = '這個額外版本列表基於選取的基礎版本。您能在底下查看要建立額外版本所需要的版本：';
$s['learnMoreUpdates1'] = '當轉換指令碼在以下系統執行時，更新將只會整合至轉換映像：';
$s['learnMoreUpdates2'] = '如果在其他系統執行轉換指令碼，更新將不會整合至結果映像。';
$s['systemWithAdk'] = '%s，且安裝了 Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '額外更新';
$s['additionalUpdatesDesc'] = '這個 UUP 集合包含了會在轉換程序整合進去的額外更新，將會顯著增加建立時間。';
$s['browseUpdatesList'] = '瀏覽更新列表';
$s['selectDownloadOptions'] = '請選擇下載選項';
$s['selectDownloadOptionsSub'] = '設定您想下載選擇項目的方式';
$s['downloadMethod'] = '下載方式';
$s['conversionOptions'] = '轉換選項';
$s['convOpt1'] = '使用 install.esd 而非 install.wim 建立 ISO 檔';
$s['convOpt2'] = '可用時整合更新 (僅適用於 Windows 轉換工具)';
$s['convOpt3'] = '在整合更新後執行清理工作 (僅適用於 Windows 轉換工具)';
$s['convOpt4'] = '整合 .NET Framework 3.5 (僅適用於 Windows 轉換工具)';
$s['startDownload'] = '建立下載套件';

//get.php
$s['listOfFilesFor'] = '列出 %s 的檔案'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '檔案總計大小: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = '檔案重新命名指令碼';
$s['fileRenamingScriptDesc1'] = '下方所找到的指令碼可用來快速地重新命名下載檔案。';
// TRANTAG: [Fuzzy]
$s['fileRenamingScriptDesc2'] = '簡單地將下方表單的內容複製成一個新檔案，副檔名為 <code>cmd</code>，接著把檔案放在下載檔案的資料夾內，之後執行。';
$s['sha1File'] = 'SHA-1 檔案總和檢查';
$s['sha1FileDesc'] = '您可以使用這個檔案簡單地驗證下載的檔案是否正確。';
$s['aria2NoticeTitle'] = '[使用 aria2 下載] 選項提示';
$s['aria2NoticeText1'] = '[使用 aria2 下載] 選項會建立一個需要下載的封存檔。下載回來的封存檔包含了所有用來完成選取作業的必須檔案。';
$s['aria2NoticeText2'] = '請使用適用於您的平台的指令碼來開始下載程序:';
$s['aria2NoticeText3'] = 'Aria2 是個開放原始碼的專案。您可以在這裡找到: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP 轉換指令碼 (Windows 版本) 是由 %s 製作的。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP 轉換指令碼 (Linux 版本, macOS 版本) 是開放原始碼的。您可以在這裡找到: %s。'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '在 %s 尋找檔案'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = '如果您想要快速地重新命名下載的檔案，那您可以產生重新命名指令碼來自動幫您重新命名。';
$s['fileRenamingScriptGenW'] = '產生重新命名指令碼 (Windows)';
$s['fileRenamingScriptGenL'] = '產生重新命名指令碼 (Linux, macOS)';
$s['searchForFiles'] = '搜尋檔案...';
$s['weFoundFiles'] = '我們已依您的搜尋內容找到了 <b>%d</b> 個檔案。'; //We have found <b>692</b> files for your query.

//Error pages
$s['error'] = '錯誤';
$s['requestNotSuccessful'] = '請求失敗';
$s['anErrorHasOccurred'] = '嘗試處理您的請求時發生錯誤。';
$s['generatedPackNotAvailable'] = '沒有可用的產生套件';
// TRANTAG: [Fuzzy]
$s['generatedPackNotAvailableDesc'] = '您嘗試下載的更新尚無會提供關於可用語言、版本及檔案完整資訊的產生套件。將會使用備用套件，可能無法提供正確的資訊。如因這個原因而下載失敗，請等待自動產生套件可用。';
$s['arm64Warning'] = '您選擇了<b>只支援基於 ARM64 之裝置的</b> ARM64 組建，可能無法在一般基於 Intel 或 AMD 的 PC 上運作。若要用於<b> 64 位元</b>的 PC，請使用 <b>amd64</b> 組建。若要用於<b> 32 位元</b>的 PC，請使用 <b>x86</b> 組建。如果您百分之百確定目標裝置基於 ARM64，則您可安全忽略此訊息。';

//Error messages - 錯誤訊息
$s['error_ERROR'] = '一般錯誤。';
$s['error_UNSUPPORTED_API'] = '安裝的 API 版本與此 UUP dump 版本不相容。';
$s['error_NO_FILEINFO_DIR'] = '<b>fileinfo</b> 目錄不存在。';
$s['error_NO_BUILDS_IN_FILEINFO'] = '<b>fileinfo</b> 資料庫沒有任何組建。';
$s['error_SEARCH_NO_RESULTS'] = '找不到符合所執行查詢的項目。';
$s['error_UNKNOWN_ARCH'] = '處理器架構未知。';
$s['error_UNKNOWN_RING'] = '未知振鈴 (Ring)。';
$s['error_UNKNOWN_FLIGHT'] = '未知 flight。';
$s['error_UNKNOWN_COMBINATION'] = 'Flight 與振鈴組合不正確。Skip ahead 僅支援 Insider Fast ring。';
$s['error_ILLEGAL_BUILD'] = '指定的組建號碼小於 %d 或大於 %d。'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = '指定的組建次要版本不正確。';
$s['error_NO_UPDATE_FOUND'] = '伺服器沒有回傳更新。';
$s['error_XML_PARSE_ERROR'] = '解析 XML 回應失敗。可能是因為 Microsoft 伺服器發生問題。請稍候再試。';
$s['error_EMPTY_FILELIST'] = '伺服器回傳了空的檔案列表。';
$s['error_NO_FILES'] = '您所選擇的項目沒有可使用的檔案。';
$s['error_NOT_FOUND'] = '找不到指定的選擇項目。';
$s['error_MISSING_FILES'] = '選擇的 UUP 組合有缺少檔案。';
$s['error_NO_METADATA_ESD'] = '您所選擇的項目沒有可使用的中繼資料 ESD 檔案。';
$s['error_UNSUPPORTED_LANG'] = '不支援指定語言。';
$s['error_UNSPECIFIED_LANG'] = '未指定語言。';
$s['error_UNSUPPORTED_EDITION'] = '不支援指定版本。';
$s['error_UNSUPPORTED_COMBINATION'] = '語言及版本組合不正確。';
$s['error_NOT_CUMULATIVE_UPDATE'] = '選取的更新不包含累積更新。';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = '指定更新的資訊不存在資料庫。';
$s['error_KEY_NOT_EXISTS'] = '指定的索引碼不存在於更新資訊。';
$s['error_UNSPECIFIED_UPDATE'] = '未指定更新 ID。';
$s['error_INCORRECT_ID'] = '指定的更新 ID 不正確。請確保指定的更新 ID 正確。';
$s['error_RATE_LIMITED'] = '您的速率已被限制。請在幾秒後重試。';
$s['error_UNSPECIFIED_VE'] = '您未選取任何額外版本。如果不希望建立額外版本，請使用 [使用 aria2 下載並轉換] 選項。';
$s['errorNoMessage'] = '沒有可用的錯誤訊息。';

// Languages
// most language names are refered to https://www.microsoft.com/zh-tw/language
$s['lang_ar-sa'] = '阿拉伯文 (沙烏地阿拉伯)';
$s['lang_bg-bg'] = '保加利亞文';
$s['lang_cs-cz'] = '捷克文';
$s['lang_da-dk'] = '丹麥文';
$s['lang_de-de'] = '德文';
$s['lang_el-gr'] = '希臘文';
$s['lang_en-gb'] = '英文 (英國)';
$s['lang_en-us'] = '英文 (美國)';
$s['lang_es-es'] = '西班牙文 (西班牙)';
$s['lang_es-mx'] = '西班牙文 (墨西哥)';
$s['lang_et-ee'] = '愛沙尼亞文';
$s['lang_fi-fi'] = '芬蘭文';
$s['lang_fr-ca'] = '法文 (加拿大)';
$s['lang_fr-fr'] = '法文 (法國)';
$s['lang_he-il'] = '希伯來文';
$s['lang_hr-hr'] = '克羅埃西亞文';
$s['lang_hu-hu'] = '匈牙利文';
$s['lang_it-it'] = '義大利文';
$s['lang_ja-jp'] = '日文';
$s['lang_ko-kr'] = '韓文';
$s['lang_lt-lt'] = '立陶宛文';
$s['lang_lv-lv'] = '拉脫維亞文';
$s['lang_nb-no'] = '挪威文 (巴克摩)';
$s['lang_nl-nl'] = '荷蘭文';
$s['lang_pl-pl'] = '波蘭文';
$s['lang_pt-br'] = '葡萄牙文 (巴西)';
$s['lang_pt-pt'] = '葡萄牙文 (葡萄牙)';
$s['lang_qps-ploc'] = '偽翻譯 (Pseudo)';
$s['lang_ro-ro'] = '羅馬尼亞文';
$s['lang_ru-ru'] = '俄文';
$s['lang_sk-sk'] = '斯洛伐克文';
$s['lang_sl-si'] = '斯洛維尼亞文';
$s['lang_sr-latn-rs'] = '賽爾維亞文 (拉丁)';
$s['lang_sv-se'] = '瑞典文';
$s['lang_th-th'] = '泰文';
$s['lang_tr-tr'] = '土耳其文';
$s['lang_uk-ua'] = '烏克蘭文';
$s['lang_zh-cn'] = '中文 (简体)';
$s['lang_zh-hk'] = '中文 (香港)';
$s['lang_zh-tw'] = '中文 (繁體)';
