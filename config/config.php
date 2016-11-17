<?php
/*-------------------------------------------------------
*
*   Plugin "Wmessage"
*   Author: Vladimir Rybalko (kamatozzz)
*   Site: http://job.livestreetcms.com/profile/KaMaToZzz/
*   skype: kammatozzz
*   Contact e-mail: kamatozzz1@gmail.com
*   Ver: 1.9.5
*
---------------------------------------------------------
*/
/**
 * Конфиг плагина
 */
$config['header'] = 'Важное сообщение от администрации сайта'; // Заголовок блока
$config['message'] = 'Вывод важного сообщения.'; // Сообщение для вывода
$config['show_type'] = 'all'; // Для кого выводить сообщение: all — всем; registered — только зарегистрированным; guest — гостям сайта (незарегистрированным).

$config['wpage'] = array('page', 'people', 'stream', 'index'); // на каких actions выводить сообщение


return $config;