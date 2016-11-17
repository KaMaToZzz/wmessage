{*Шаблон вывода важного сообщения для незарегистрированных *}
	<div class="place">
		<div class="wmessage" id="wmessage">
			<h2 class="page-header wmessage-title">{Config::Get('plugin.wmessage.header')}</h2>
			<a href="#" class="link-dotted wmessage-close" id="wmessage-close">{$aLang.plugin.wmessage.hide}</a>
			<p class="wmessage-text">{Config::Get('plugin.wmessage.message')}</p>
			{hook run='warning'}
		</div>
		<script>
			jQuery(function() {
				var $features = $('#wmessage'),
						$close = $('#wmessage-close'),
						cookieName = 'wmessage_frame',
						closedClass = 'closed';

				if ( $.cookie(cookieName) ) hide();

				function hide() {
					$.cookie(cookieName, 1, { 'path': '/' });
					$features.addClass(closedClass);
					$close.text('{$aLang.plugin.wmessage.show}');
				};

				$close.on('click', function (e) {
					if ( ! $features.hasClass(closedClass) ) {
						hide();
					} else {
						$.cookie(cookieName, null, { 'path': '/' });
						$features.removeClass(closedClass);
						$close.text('{$aLang.plugin.wmessage.hide}');
					}

					e.preventDefault();
				});
			});
		</script>
	</div>