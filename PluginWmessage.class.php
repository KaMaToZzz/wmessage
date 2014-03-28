<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginWmessage extends Plugin {

	public function Activate() {
		return true;
	}

	public function Deactivate() {
		return true;
	}

    // Инициализация плагина
    public function Init() {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/style.css");	
    }

}
?>
