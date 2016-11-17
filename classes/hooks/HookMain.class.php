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
 * Класс обработчиков хуков
 */
class PluginWmessage_HookMain extends Hook
{
    /**
     * Регистрация событий на хуки
     * В данном методе необходимо обявлять тольео хуки, без какой-либо дополнительной логики с вызовом других модулей,
     * например, проверка авторизации пользователя и т.п. Это может нарушить работу движка и других плагинов.
     */
    public function RegisterHook()
    {
        /**
         * Хук 'topic_edit_after' вызывается после редактирование топика.
         * В качестве обработчика назначается метод HookTopicEditAfter
         */
        $this->AddHook('template_wmessage', 'InjectWmessage');
        /**
         * Хук на старте экшенов. Выполняется один раз в отличии от хука "init_action"
         * Четвертый параметр 1000 - это приоритет выполнение среди остальных навешанных хуков (чем больше, тем раньше будет выполнен обработчик)
         */
        //$this->AddHook('start_action','HookStartAction', __CLASS__, 1000);
    }


    public function InjectWmessage() {
        if (!in_array(Router::GetAction(), Config::Get('plugin.wmessage.wpage'))) {
        return false;
        }
        $oUserCurrent = $this->User_GetUserCurrent();
            switch(Config::Get('plugin.wmessage.show_type')) {
              case 'registered':
                if ($oUserCurrent) {
                  return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'registered.tpl');
                }
                break;
              case 'guest':
                if (!$oUserCurrent) {
                  return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'guest.tpl');
                }
                break;
              default:
                return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'all.tpl');
            }
    }
}