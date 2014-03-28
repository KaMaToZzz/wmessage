<?php
/*-------------------------------------------------------
*
*   Plugin "Wmessage"
*   Author: Vladimir Rybalko (kamatozzz)
*   Site: livestreet.ru/profile/kamatozzz/
*   Contact e-mail: kamatozzz1@gmail.com
*
---------------------------------------------------------
*/
class PluginWmessage_ModuleWmessage extends ModuleORM {

 	protected $oMapper;
	
	public function Init()
    {
        parent::Init();
       $this->oMapper=Engine::GetMapper(__CLASS__);
    }
	
  public function GetTemplateFilePath($sPluginClass,$sFileName)
    {
        $sPP=Plugin::GetTemplatePath($sPluginClass);
        $fName=$sPP . $sFileName;
        if (file_exists($fName))
            return $fName;
        
        $aa=explode("/", $sPP);
        array_pop($aa);
        array_pop($aa);
        $aa[]='default';
        $aa[]='';
        return join("/", $aa) . $sFileName;
    }

    public function GetTemplateFileWebPath($sPluginClass,$sFileName)
    {
        return str_replace(Config::Get('path.root.server'), Config::Get('path.root.web'), $this->GetTemplateFilePath($sPluginClass, $sFileName));
    } 
}
?>
