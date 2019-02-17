<?
//****База и настройки*****//
date_default_timezone_set ('Asia/Omsk'); // часовой пояс
define("DB_HOST","217.182.34.237"); // хост базы данных
define("DB_USER","gs7672"); // пользователь базы данных
define("DB_PASS","fhbyf270212"); // пароль от базы данных
define("DB_BASE","gs7672"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("NO CONNECT FOR DATABASE");
@mysql_select_db(DB_BASE)
or die("ERROR mysql_select_db()");
$maxnews = 15;//Максимально новостей

$account = array (
	'table' => 'accounts',//Таблица с аккаунтами
	'pass' => 'Password',//Переменная пароля
	'name' => 'NickName',//Переменная имени
	'level' => 'Level',//Переменная уровня
	'exp' => 'Exp',//Переменная Exp
	'cash' => 'Money',//Переменная денег на руках
	'bank' => 'Bank',//Переменная денег в банке
	'id' => 'ID',//id аккаунта
	'admin' => 'Admin',//админка
	'drugs' => 'Drugs',//Наркотики
	'sex' => 'Sex',//пол
	'skin' => 'Skin',//скин
	'mail' => 'Mail',//Переменная почты
	'datavhod' => 'LastLogin',//Переменная даты последнего входа
	'numberphone' => 'Telephone',//телефон игрока
	'pcash' => 'In_Skill',//денег на телефоне
	'wanted' => 'Wanted',//розыск
	'ipreg' => 'RegIP',//Ip регистрации
	'datareg' => 'datareg',//дата регистрации
	'ipvhod' => 'LastIP',//Ip последнего входа
	'subnetreg' => 'OldIP',//Подсеть
	//admin
	'dataadmin' => '',//дата назначение
	'getadmin' => '',//Кто поставил
	//скиллы
	'deagle' => 'Eagle_Skill',//скилл дигла
	'shotgun' => 'ShotGun_Skill',//скилл дробовика
	'mp5' => 'UZI_Skill',//скилл mp5
	'ak47' => 'AK47_Skill',//скилл ak
	'm4' => 'M4_Skill',//скилл m4
	'sdpistol' => 'SDPistol_Skill',//скилл sdpistol
	//лицензии
	'vodprava' => 'CarLic',//права
	'vertlic' => 'FlyLic',//полеты
	'vodalic' => 'BoatLic',//водянка
	'gunlic' => 'GunLic',//оружие
	'bizlic' => 'BikeLic',//биз
	//
	'job' => 'pob',//подработка
	'leader' => 'Leader',//лидерка
	'member' => 'Member',//фракция
	'rank' => 'Rank',//ранг
	'car' => '',//тачка
	'house' => 'HouseKey',//дом
	'biz' => 'BizKey',//бизнес
	'ban' => 'Ban',
	'online' => 'Online_status',
	'donate' => 'VirMoney',//бизнес
	'warn' => 'Warns'//бизнес
	);

$site = array(
	'nameproject' => 'Arizona Bonus',
	'keywords' => 'начать играть в гта са, гта по сети, андреас, GTA, Grand Theft Auto, самп, samp, sa-mp, гта са, swatch, аризона бонус, arp-bonus, арп-бонус, роле плей, RolePlay, сервер, са мп, multiplayer',
	'description' => 'Выбери сам, кем ты хочешь стать в нашей игре'
);
//-------------------------//
?>