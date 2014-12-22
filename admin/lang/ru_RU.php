<?php
/**
 * English Language File
 *
 * Date:				16 Oct 2010
 * Revision:		Feb 2011
 * Version:			GetSimple 3.0
 * Traductors: 	Chris Cagle 
 *
 * @package GetSimple
 * @subpackage Language
 */


$i18n = array(

/* 
 * For: install.php
*/
"PHPVER_ERROR"			=>	"<b>Невозможно продолжить:</b> требуется PHP версии 5.1.3 или выше, у Вас ",
"SIMPLEXML_ERROR"		=>	"<b>Невозможно продолжить:</b> SimpleXML не установлен",
"CURL_WARNING"			=>	"<b>Предупреждение:</b> cURL не установлен",
"TZ_WARNING"			=>	"<b>Предупреждение:</b> отсутствует date_default_timezone_set",
"WEBSITENAME_ERROR"		=>	"<b>Ошибка:</b> Проблема с названием сайта",
"WEBSITEURL_ERROR"		=>	"<b>Ошибка:</b> Проблема с URL",
"USERNAME_ERROR"		=>	"<b>Ошибка:</b> Имя пользователя не установлено",
"EMAIL_ERROR"			=>	"<b>Ошибка:</b> Проблема с Вашим e-mail адресом",
"CHMOD_ERROR"			=>	"<b>Невозможно продолжить:</b> Не удалось создать конфигурационный файл. Убедитесь что у папок /data/ и /backups/ (и вложенных в них папок) есть права доступа CHMOD 777, а затем повторите попытку",
"EMAIL_COMPLETE"		=>	"Установка завершена",
"EMAIL_USERNAME"		=>	"Ваше имя пользователя",
"EMAIL_PASSWORD"		=>	"Ваш пароль",
"EMAIL_LOGIN"			=>	"Авторизируйтесь здесь",
"EMAIL_THANKYOU"		=>	"Спасибо за использование",
"NOTE_REGISTRATION"		=>	"Ваши регистрационные данные высланы на",
"NOTE_REGERROR"			=>	"<b>Ошибка:</b> Не удалось отправить Ваши регистрационные данные по почте. Пожалуйста запомните пароль ниже",
"NOTE_USERNAME"			=>	"Имя пользователя",
"NOTE_PASSWORD"			=>	"Пароль",
"INSTALLATION"			=>	"Установка",
"LABEL_WEBSITE"			=>	"Название сайта",
"LABEL_BASEURL"			=>	"Основной URL сайта",
"LABEL_SUGGESTION"		=>	"Совет",
"LABEL_USERNAME"		=>	"Имя",
"LABEL_EMAIL"			=>	"E-mail",
"LABEL_INSTALL"			=>	"Установить!",

"SELECT_LANGUAGE"		=>  "Выберите язык",
"CONTINUE_SETUP" 		=>  "Продолжить установку",
"DOWNLOAD_LANG" 		=>  "Загрузить доп. языки",

/* 
 * For: pages.php
*/
"MENUITEM_SUBTITLE"		=>	"пункт меню",
"HOMEPAGE_SUBTITLE"		=>	"начальная страница",
"PRIVATE_SUBTITLE"		=>	"Приватная",
"EDITPAGE_TITLE"		=>	"Редактировать",
"VIEWPAGE_TITLE"		=>	"Просмотреть",
"DELETEPAGE_TITLE"		=>	"Удалить",
"PAGE_MANAGEMENT"		=>	"Управление страницами",
"TOGGLE_STATUS"			=>	"Вкл/выкл статус",
"TOTAL_PAGES"			=>	"(кол-во страниц)",
"ALL_PAGES"				=>	"Все страницы",

/* 
 * For: edit.php
*/
"PAGE_NOTEXIST"			=>	"Запрашиваемой страницы не существует",
"BTN_SAVEPAGE"			=>	"Сохранить страницу",
"BTN_SAVEUPDATES"		=>	"Сохранить изменения",
"DEFAULT_TEMPLATE"		=>	"Шаблон по умолчанию",
"NONE"					=>	"Нет",
"PAGE"					=>	"Страница",
"NEW_PAGE"				=>	"Новая страница",
"PAGE_EDIT_MODE"		=>	"Редактирование",
"CREATE_NEW_PAGE"		=>	"Создать новую страницу",
"VIEW"					=>	"Просмотреть",
"PAGE_OPTIONS"			=>	"Свойства",
"TOGGLE_EDITOR"			=>	"Вкл/выкл редактор",
"SLUG_URL"				=>	"Постоянная ссылка",
"TAG_KEYWORDS"			=>	"Тэги, ключевые слова",
"PARENT_PAGE"			=>	"Родительская страница",
"TEMPLATE"				=>	"Шаблон",
"KEEP_PRIVATE"			=>	"Сделать приватной?",
"ADD_TO_MENU"			=>	"Добавить в меню",
"PRIORITY"				=>	"Порядок",
"MENU_TEXT"				=>	"Название",
"LABEL_PAGEBODY"		=>	"Основа страницы",
"CANCEL"				=>	"Отменить",
"BACKUP_AVAILABLE"		=>	"Доступен бэкап",
"MAX_FILE_SIZE"			=>	"Макс. размер файла",
"LAST_SAVED"			=>	"Сохранено",
"FILE_UPLOAD"			=>	"Загрузить файл",
"OR"					=>	"или",
"SAVE_AND_CLOSE"		=> "Сохранить и закрыть",
/* 
 * For: upload.php
*/
"ERROR_UPLOAD"			=>	"Проблема с загрузкой файлов",
"FILE_SUCCESS_MSG"		=>	"Файл успешно размещен в",
"FILE_MANAGEMENT"		=>	"Каталог файлов",
"UPLOADED_FILES"		=>	"Загруженные файлы",
"SHOW_ALL"				=>	"Показать все",
"VIEW_FILE"				=>	"Просмотр файла",
"DELETE_FILE"			=>	"Удалить файл",
"TOTAL_FILES"			=>	"(кол-во файлов)",
"CLIPBOARD_INSTR" 	=> "Выделить для копирования",
/* 
 * For: logout.php
*/
"MSG_LOGGEDOUT"			=>	"Вы вышли",

/* 
 * For: index.php
*/
"LOGIN"					=>	"Войти",
"USERNAME"				=>	"Имя",
"PASSWORD"				=>	"Пароль",
"FORGOT_PWD"			=>	"Забыли пароль?",
"CONTROL_PANEL"			=>	"Панель управления",
/* 
 * For: navigation.php
*/
"CURRENT_MENU" 			=> 	"Меню сайта",
"NO_MENU_PAGES" 		=> 	"Ни одна страница не была добавлена в главное меню",

/* 
 * For: theme-edit.php
*/
"TEMPLATE_FILE" 		=> 	"Шаблон <b>%s</b> был успешно изменен!",
"THEME_MANAGEMENT" 		=> 	"Управление темами",
"EDIT_THEME" 			=> 	"Редактировать тему",
"EDITING_FILE" 			=> 	"Редактируемый файл",
"BTN_SAVECHANGES" 		=> 	"Сохранить",
"EDIT" 					=> 	"Редактировать",

/* 
 * For: support.php
*/
"SETTINGS_UPDATED"		=> 	"Настройки обновлены",
"UNDO" 					=> 	"Отменить",
"SUPPORT" 				=> 	"Поддержка",
"SETTINGS" 				=> 	"Настройка",
"ERROR" 				=> 	"Ошибка",
"BTN_SAVESETTINGS" 		=> 	"Сохранить изменения",
"VIEW_FAILED_LOGIN"		=> 	"Просмотреть ошибки авторизации",
/* 
 * For: log.php
*/
"MSG_HAS_BEEN_CLR" 		=> 	"был очищен",
"LOGS" 					=> 	"событий",
"VIEWING" 				=> 	"Просмотр",
"LOG_FILE" 				=> 	"лог файла",
"CLEAR_ALL_DATA" 		=> 	"Удалить все записи из",
"CLEAR_THIS_LOG" 		=> 	"Очистить лог",
"LOG_FILE_ENTRY" 		=> 	"ЗАПИСЬ ЛОГ ФАЙЛА",
"THIS_COMPUTER"			=>	"Данный компьютер",

/* 
 * For: backup-edit.php
*/

"BAK_MANAGEMENT"		=>	"Управление бэкапом",
"ASK_CANCEL"			=>	"Отменить",
"ASK_RESTORE"			=>	"Восстановить",
"ASK_DELETE"			=>	"Удалить",
"BACKUP_OF"				=>	"Бэкап",
"PAGE_TITLE"			=>	"Название страницы",
"YES"					=>	"Да",
"NO"					=>	"Нет",
"DATE"					=>	"Дата",
"PERMS"							=>  "Перманент",
/* 
 * For: components.php
*/
"COMPONENTS"			=>	"Компоненты",
"DELETE_COMPONENT"		=>	"Удалить",
"EDIT"					=>	"Редактировать",
"ADD_COMPONENT"			=>	"Добавить",
"SAVE_COMPONENTS"		=>	"Сохранить",

/* 
 * For: sitemap.php
*/
"SITEMAP_CREATED"		=>	"Карта сайта создана! Мы так же успешно пинговали 4 поисковика",
"SITEMAP_ERRORPING"		=>	"Карта сайта создана, но произошла ошибка с пингом одного или более поисковиков",
"SITEMAP_ERROR"			=>	"Карта сайта не может быть сгенерирована",
"SITEMAP_WAIT"			=>	"<b>Подождите:</b> Создается карта сайта",

/* 
 * For: theme.php
*/
"THEME_CHANGED"			=>	"Новая тема активирована!",
"CHOOSE_THEME"			=>	"Управление темами",
"ACTIVATE_THEME"		=>	"Активировать тему",
"THEME_SCREENSHOT"		=>	"Скриншот",
"THEME_PATH"			=>	"Файлы этой темы расположены в",

/* 
 * For: resetpassword.php
*/
"RESET_PASSWORD"		=>	"Восстановление пароля",
"YOUR_NEW"				=>	"Ваш новый",
"PASSWORD_IS"			=>	"пароль",
"ATTEMPT"				=>	"Попытка",
"MSG_PLEASE_EMAIL"		=>	"Пожалуйста, введите свой e-mail и Вам будет отправлен новый пароль",
"SEND_NEW_PWD"			=>	"Отправить",

/* 
 * For: settings.php
*/

"GENERAL_SETTINGS"		=>	"Настройки системы",
"WEBSITE_SETTINGS"		=>	"Настройки сайта",
"LOCAL_TIMEZONE"		=>	"Часовой пояс",
"LANGUAGE"				=>	"Язык",
"USE_FANCY_URLS"		=>	"<b>Использовать Fancy URLs</b> - Убедитесь что модуль mod_rewrite включен",
"ENABLE_HTML_ED"		=>	"<b>Включить HTML редактор</b>",
"USER_SETTINGS"			=>	"Настройки пользователя",
"WARN_EMAILINVALID"		=>	"ПРЕДУПРЕЖДЕНИЕ: Неверный e-mail",
"ONLY_NEW_PASSWORD"		=>	"Если Вы хотите сменить пароль, введите новый ниже",
"NEW_PASSWORD"			=>	"Новый пароль",
"CONFIRM_PASSWORD"		=>	"Подтвердить пароль",
"PASSWORD_NO_MATCH"		=>	"Пожалуйста, введите одинаковые пароли в обоих полях",

"PERMALINK" => "Настройка ЧПУ",
"MORE" => "Другие",
"HELP" => "Помощь",

/* 
 * For: health-check.php
*/
"WEB_HEALTH_CHECK"		=>	"Проверка работоспособности",
"VERSION"				=>	"версия",
"UPG_NEEDED"			=>	"Обновите до",
"CANNOT_CHECK"			=>	"Невозможно проверить. Текущая версия",
"LATEST_VERSION"		=>	"Последняя версия",
"SERVER_SETUP"			=>	"Параметры сервера",
"OR_GREATER_REQ"		=>	"или выше требуется",
"OK"					=>	"Oк",
"INSTALLED"				=>	"Установлен",
"NOT_INSTALLED"			=>	"Не установлен",
"WARNING"				=>	"Предупреждение",
"DATA_FILE_CHECK"		=>	"Проверка целостности данных",
"DIR_PERMISSIONS"		=>	"Права доступа к каталогам",
"EXISTANCE"				=>	"Существование %s",
"MISSING_FILE"			=>	"Файл отсутствует",
"BAD_FILE"				=>	"Неисправный файл",
"NO_FILE"				=>	"Нет файлов",
"GOOD_D_FILE"			=>	"Исправный 'Отказать' файл",
"GOOD_A_FILE"			=>	"Исправный 'Разрешить' файл",
"CANNOT_DEL_FILE"		=>	"Невозможно удалить файл",
"DOWNLOAD"				=>	"Скачать",
"WRITABLE"				=>	"Перезаписываемый",
"NOT_WRITABLE"			=>	"Неперезаписываемый",

/* 
 * For: footer.php
*/
"POWERED_BY"			=>	"Работает на",

/* 
 * For: backups.php
*/
"PAGE_BACKUPS"			=>	"Сохраненные страницы",
"ASK_DELETE_ALL"		=>	"Удалить все",
"DELETE_ALL_BAK"		=>	"Удалить все резервные копии?",
"TOTAL_BACKUPS"			=>	"(кол-во резервных копий)",

/* 
 * For: archive.php
*/
"SUCC_WEB_ARCHIVE"		=>	"Сайт архивирован!",
"SUCC_WEB_ARC_DEL"		=>	"Архив сайта успешно удален",
"WEBSITE_ARCHIVES"		=>	"Архивы сайта",
"ARCHIVE_DELETED"		=>	"Архив успешно удален",
"CREATE_NEW_ARC"		=>	"Создать новый архив",
"ASK_CREATE_ARC"		=>	"Создать сейчас",
"CREATE_ARC_WAIT"		=>	"<b>Подождите:</b> Процесс создания архива...",
"DOWNLOAD_ARCHIVES"		=>	"Скачать архив",
"DELETE_ARCHIVE"		=>	"Удалить архив",
"TOTAL_ARCHIVES"		=>	"(кол-во архивов)",

/* 
 * For: include-nav.php
*/
"WELCOME"				=>	"Здравствуйте",
"TAB_PAGES"				=>	"Страницы",
"TAB_FILES"				=>	"Файлы",
"TAB_THEME"				=>	"Тема",
"TAB_BACKUPS"			=>	"Бэкап",
"PLUGINS_NAV" 			=>  "Пла<em>г</em>ины",
"TAB_SETTINGS"			=>	"Настройки",
"TAB_SUPPORT"			=>	"Поддержка",
"TAB_LOGOUT"			=>	"Выйти",

/* 
 * For: sidebar-files.php
*/
"BROWSE_COMPUTER"		=>	"Загрузить файл",
"UPLOAD"				=>	"Загрузить",

/* 
 * For: sidebar-support.php
*/
"SIDE_SUPPORT_LOG"		=>	"Настройки и логи",
"SIDE_VIEW_LOG"			=>	"Просмотр логов",
"SIDE_HEALTH_CHK"		=>	"Информация о сайте",
"SIDE_DOCUMENTATION"	=>	"Документация",

/* 
 * For: sidebar-theme.php
*/
"SIDE_VIEW_SITEMAP"		=>	"Просмотр карты сайта",
"SIDE_GEN_SITEMAP"		=>	"Сгенерировать карту сайта",
"SIDE_COMPONENTS"		=>	"Редактировать компоненты",
"SIDE_EDIT_THEME"		=>	"Редактировать тему",
"SIDE_CHOOSE_THEME"		=>	"Выбрать тему",


/* 
 * For: sidebar-pages.php
*/
"SIDE_CREATE_NEW"		=>	"Создать новую страницу",
"SIDE_VIEW_PAGES"		=>	"Просмотр cтраниц",

/* 
 * For: sidebar-settings.php
*/
"SIDE_GEN_SETTINGS"		=>	"Настройки системы",
"SIDE_USER_PROFILE"		=>	"Профиль пользователя",

/* 
 * For: sidebar-backups.php
*/
"SIDE_VIEW_BAK"			=>	"Просмотр бэкапов страниц",
"SIDE_WEB_ARCHIVES"		=>	"Архивы сайта",
"SIDE_PAGE_BAK"			=>	"Бэкап страниц",

/* 
 * For: error_checking.php
*/
"ER_PWD_CHANGE"			=>	"Не забудьте <a href=\"settings.php#profile\">сменить сгенерированный пароль</a>!",
"ER_BAKUP_DELETED"		=>	"Бэкап %s был удален",
"ER_REQ_PROC_FAIL"		=>	"Ошибка запрашиваемого процесса",
"ER_YOUR_CHANGES"		=>	"Изменения в %s сохранены",
"ER_HASBEEN_REST"		=>	"%s восстановлен",
"ER_HASBEEN_DEL"		=>	"%s удален",
"ER_CANNOT_INDEX"		=>	"Вы не можете изменить URL начальной страницы",
"ER_SETTINGS_UPD"		=>	"Настройки обновлены",
"ER_OLD_RESTORED"		=>	"Старые настройки были восстановлены",
"ER_NEW_PWD_SENT"		=>	"Новый пароль был отправлен на указанный e-mail",
"ER_SENDMAIL_ERR"		=>	"Возникла проблема при отправке e-mail. Попробуйте еще раз",
"ER_FILE_DEL_SUC"		=>	"Файл успешно удален",
"ER_PROBLEM_DEL"		=>	"Возникла проблема при удалении файла",
"ER_COMPONENT_SAVE"		=>	"Компоненты сохранены",
"ER_COMPONENT_REST"		=>	"Компоненты были восстановлены",
"ER_CANCELLED_FAIL"		=>	"<b>Отменено:</b> Обновление этого файла было отменено",

/* 
 * For: changedata.php
*/
"CANNOT_SAVE_EMPTY"		=>	"Невозможно сохранить пустую страницу",
"META_DESC" 			=>  "Мета описание",

/* 
 * For: template_functions.php
*/
"FTYPE_COMPRESSED"		=>	"Сжатые",
"FTYPE_VECTOR"			=>	"Векторные",
"FTYPE_FLASH"			=>	"Флэш",
"FTYPE_VIDEO"			=>	"Видео",
"FTYPE_AUDIO"			=>	"Аудио",
"FTYPE_WEB"				=>	"Веб",
"FTYPE_DOCUMENTS"		=>	"Документы",
"FTYPE_SYSTEM"			=>	"Системные",
"FTYPE_MISC"			=>	"Разное",
"IMAGES"				=>	"Изображения",

/* 
 * For: login_functions.php
*/
"FILL_IN_REQ_FIELD"		=>	"Пожалуйста заполните все обязательные поля",
"LOGIN_FAILED"			=>	"Не удалось авторизироваться. Пожалуйста проверьте имя пользователя и пароль",

/* 
 * For: Date Format
*/
"DATE_FORMAT"									=>	"d.m.Y", //please keep short
"DATE_AND_TIME_FORMAT"				=>	"d.m.Y - G:i ", //date and time
/* 
 * For: welcome.php
*/
"WELCOME_MSG"			=>	"Благодарим Вас за использование GetSimple CMS!",
"WELCOME_P"				=>	"GetSimple CMS &mdash; с помощью этой системы Вы сможете легко управлять Вашим сайтом благодаря простому, интуитивно понятному интерфейсу и легкой шаблонной системе.",
"GETTING_STARTED"		=>	"Первые шаги",

/* 
 * For: image.php
*/
"CURRENT_THUMBNAIL" 	=>  "Миниатюра",
"RECREATE" 				=>  "создать заново",
"CREATE_ONE" 			=>  "Создать миниатюру",
"IMG_CONTROl_PANEL" 	=>  "Управление изображениями",
"ORIGINAL_IMG" 			=>  "Изображение",
"CREATE_THUMBNAIL" 		=>  "Создать миниатюру",
"CROP_INSTR_NEW" 		=> "Удерживать <em>ctrl-Q</em> или <em>command-Q</em> для квадрата",
"SELECT_DIMENTIONS" 	=>  "Размеры выделенного фрагмента",
"HTML_ORIG_IMG" 		=>  "HTML код изображения",
"LINK_ORIG_IMG" 		=>  "Ссылка на изображение",
"HTML_THUMBNAIL" 		=>  "HTML код миниатюры",
"LINK_THUMBNAIL" 		=>  "Ссылка на миниатюру",
"HTML_THUMB_ORIG" 		=>  "HTML код миниатюры-изображения",
/* 
 * For: plugins.php
*/

"PLUGINS_MANAGEMENT"	=>  "Установленные модули",
"PLUGINS_INSTALLED" 	=>  "(кол-во модулей)",
"SHOW_PLUGINS"			=>  "Каталог модулей",
"PLUGIN_NAME" 			=>  "Название",
"PLUGIN_DESC" 			=>  "Описание",
"PLUGIN_VER" 			=>  "Версия",

/***********************************************************************************
 * SINCE Version 3.0
***********************************************************************************/

/* 
 * For: setup.php
 */

"ROOT_HTACCESS_ERROR" => "Не удалось создать .htaccess в корне сайта! Пожалуйста скопируйте <b>%s</b> файл <b>.htaccess</b> и поменяйте <code>%s</code> на <code>%s</code>",
"REMOVE_TEMPCONFIG_ERROR" => "Не удалось удалить <b>%s</b>! Пожалуйста, сделайте это вручную.",
"MOVE_TEMPCONFIG_ERROR" => "Не удалось переименовать <b>%s</b> to <b>%s</b>! Не удалось переименовать.",
"KILL_CANT_CONTINUE" => "Можете не продолжать. Пожалуйста, исправьте ошибки и попробуйте еще раз.",
"REFRESH" => "Обновить",
"BETA"=> "Beta / Bleeding Edge",

/*
 * Misc Cleanup Work
 */
 
"HOMEPAGE_DELETE_ERROR" => "Вы не можете удалить главную страницу", //deletefile
"NO_ZIPARCHIVE" => "ZipArchive расширение не установлено. Невозможно продолжать", //zip
"REDIRECT_MSG"=> "Если Ваш браузер не перенаправляет вас, нажмите <a href=\"%s\">здесь</a>", //basic
"REDIRECT"=> "Переадресовать", //basic
"DENIED"=> "Отказано", //sitemap
"DEBUG_MODE"=> "Режим проверки", //nav-include
"DOUBLE_CLICK_EDIT"=> "Двойной клик для редактирования", //components
"THUMB_SAVED"=> "Миниатюра сохранена", //image
"EDIT_COMPONENTS"		=>	"Редактировать компоненты", //components
"REQS_MORE_INFO"=> "Для более подробной информации о необходимых модулях, посетите <a href=\"%s\" target=\"_blank\" >страницу требований</a>.", //install & health-check
"SYSTEM_UPDATE" => "Обновление системы", // update.php
"AUTHOR" 				=> "Автор", //plugins.php
"ENABLE" 				=> "Включить", //plugins.php
"DISABLE" 				=> "Отключить", //plugins.php
"NO_THEME_SCREENSHOT" => "Нет скриншота темы", //theme.php
"UNSAVED_INFORMATION" => "Вы собираетесь покинуть эту страницу и потеряете все несохраненные данные.", //edit.php
"BACK_TO_WEBSITE" => "Вернуться на сайт", //index & resetpassword
"SUPPORT_FORUM" => "Форум поддержки", //support.php
"FILTER" => "Фильтр", //pages.php
"UPLOADIFY_BUTTON" => "Загрузка файлов", //upload.php
"FILE_BROWSER" => "Выбор файлов", //filebrowser.php
"SELECT_FILE" => "Выберите файл", //filebrowser.php
"CREATE_FOLDER" => "Создать папку", //upload.php
"THUMBNAIL" => "Миниатюра", //filebrowser.php
"ERROR_FOLDER_EXISTS" => "Папка, которую вы пытаетесь создать, уже существует", //upload.php
"FOLDER_CREATED" => "Новая папка была успешно создана: <strong>%s</strong>", //upload.php
"ERROR_CREATING_FOLDER" => "При создании новой папки произошла ошибка", //upload.php
"DELETE_FOLDER" => "Удалить папку", //upload.php
"FILE_NAME" => "Название файла", //multiple tr header rows
"FILE_SIZE" => "Размер", //multiple tr header rows
"ARCHIVE_DATE" => "Архив", //archive.php
"CKEDITOR_LANG" => "ru",
# new to 3.1 
"XML_INVALID" => "Недопустимый XML", //template-functions.php
"XML_VALID" => "Действительный XML",
"UPDATE_AVAILABLE" => "Обновите до ", //plugins.php
"STATUS" => "Статус", //plugins.php
"NORMAL" => "Нормальная", //edit.php
"REMAINING" => "символов осталось", //edit.php
"CLONE" => "Клон", //edit.php
"CLONE_SUCCESS" => "Успешно создан %s", //pages.php
"COPY" => "Копировать", //pages.php
"CLONE_ERROR" => "Проблема с попыткой клонировать <b>%s</b>",  //pages.php
"AUTOSAVE_NOTIFY" => 'Страница автосохранения на', //edit.php
"MENU_MANAGER" => '<em>М</em>еню менеджер', //edit.php
"GET_PLUGINS_LINK" => 'Выбрать плагины',
"SITEMAP_REFRESHED" => "Карта сайта обновлена", //edit.php
"LOG_FILE_EMPTY" 		=> 	"Этот файл журнала пуст", //log.php
"SHARE" 		=> 	"Участие", //footer.php
"NO_PARENT" => "Ни один родитель", //edit.php
"ADDITIONAL_ACTIONS" => "Другие акции", //edit.php
"ERR_CANNOT_DELETE" => "Не удается удалить %s. Пожалуйста, сделайте это вручную.", //common.php
"ITEMS" => "шт.",
"SAVE_MENU_ORDER" => "Сохранить порядок пунктов меню", //menu-manager.php
"MENU_MANAGER_DESC" => "Перетащите пункты меню и расставьте их в любом порядке, затем нажмите <strong>'Сохранить порядок пунктов меню'</strong>.", //menu-manager.php
"MENU_MANAGER_SUCCESS" => "Порядок пунктов меню сохранен.", //menu-manager.php
/* 
 * For: api related pages
 */
"API_ERR_MISSINGPARAM" => 'данного параметра не существует',
"API_ERR_BADMETHOD" => 'метод %s не существует',
"API_ERR_AUTHFAILED" => 'Ошибка проверки подлинности',
"API_ERR_AUTHDISABLED" => 'Проверка подлинности отключена',
"API_ERR_NOPAGE" => 'Запрошенная страница %s не существует',
"API_CONFIGURATION" => 'API Конфигурация',
"API_ENABLE" => 'Включить API',
"API_REGENKEY" => 'Восстановить Ключ',
"API_DISCLAIMER" => "При включении этого API вы позволяете любым внешним приложениям, которые имеют копию ключа, иметь доступ к данным вашего сайта. <b>Передавайте эти ключи только тем приложениям, которым вы доверяете.</b>",
"API_REGEN_DISCLAIMER" => "После изменения вашего ключа API, вы должны будете ввести новый ключ в любое внешнее приложение, использующее ваш API для подключения к вашему сайту.",
"API_CONFIRM" => "ВЫ УВЕРЕНЫ?",

"TRANSLITERATION" => array (
  "А"=>"a","Б"=>"b","В"=>"v",
	"Г"=>"g","Д"=>"d","Е"=>"e","Ё"=>"yo","Ж"=>"zh",
	"З"=>"z","И"=>"i","Й"=>"j","К"=>"k","Л"=>"l",
	"М"=>"m","Н"=>"n","О"=>"o","П"=>"p","Р"=>"r",
	"С"=>"s","Т"=>"t","У"=>"u","Ф"=>"f","Х"=>"h",
	"Ц"=>"c","Ч"=>"ch","Ш"=>"sh","Щ"=>"shh","Ъ"=>"'",
	"Ы"=>"y","Ь"=>"","Э"=>"e","Ю"=>"yu","Я"=>"ya",
	"а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
	"е"=>"e","ё"=>"yo","ж"=>"zh","з"=>"z","и"=>"i",
	"й"=>"j","к"=>"k","л"=>"l","м"=>"m","н"=>"n",
	"о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t",
	"у"=>"u","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch",
	"ш"=>"sh","щ"=>"shh","ъ"=>"","ы"=>"y","ь"=>"",
	"э"=>"e","ю"=>"yu","я"=>"ya"," "=>"-","-"=>"-","»"=>"",
	"."=>"."
),

"" 						=>  "не переведено",
/*
 * Additions for 3.1
 */
"DEBUG_CONSOLE" => 'Консоль ошибок'



);

?>
