wmessage
========

Wmessage — plugin fow warning user on site based LiveStreet CMS v1.0.3.
Plugin v1.0.3


Wmessage — плагин для вывода важного сообщения всем пользователям и гостям сайта.

Текст сообщения добавляется в конфиге плагина /plugins/wmessage/config/config.php в $config['message']

После активации плагин необходимо добавить хук для вашего шаблона:

В header.tpl после <code>section id="container" class="{hook run='container_class'}"</code> и перед <code>div id="wrapper" class="container {hook run='wrapper_class'}"</code> <strong>необходимо вставить</strong>:

<code>{hook run='wmessage'}</code>

Плагин распространяется бесплатно.

Сказать спасибо и угостить мороженным можно через webmoney или ЯД:

Z142725074430 
R286418405063 
41001965782352
