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
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

/**
 * Основной класс плагина
 */
class PluginWmessage extends Plugin
{

    /**
     * Выполняется в момент активации плагина
     *
     * @return bool
     */
    public function Activate()
    {

        return true;
    }

    /**
     * Выполняется в момент деактивации плагина
     *
     * @return bool
     */
    public function Deactivate()
    {

        return true;
    }

    /**
     * Выполняется при удалении плагина
     *
     * @return bool
     */
    public function Remove()
    {

        return true;
    }

    /**
     * Выполняется каждый раз при загрузке сайта, если плагин активирован
     */
    public function Init()
    {
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath(__CLASS__) . "assets/css/main.css"); // Добавление своего CSS

    }
}