<?php $root = get_bloginfo('template_url'); ?>
</div>
<div id="chats">
<div id="live-chat">
	<header class="clearfix">
		<h4>Чат с оператором</h4>
	</header>
	<div class="chat">
		<center><span id="info"></span></center>
		<div class="row">
			<div class="col-md-12">
				<form action="javascript: void(0);" method="post" onsubmit="startChat()" class="form-horizontal">
					<div class="col-lg-offset-1">
						<div class="form-group">
							<label>Ваше имя:</label>
							<input type="text" id="Name">
						</div>
					</div>
					<div class="col-lg-offset-1">
						<div class="form-group">
							<label>Текст обращения:</label>
							<input type="text" id="Text">
						</div>
					</div>
					<button class="btn btn-success btn-block">Начать чат</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function(){
var citiesParams = { "header" : "Выберите город" };
var districtParams= { "header" : "Выберите район" };
$('#cities').tinyNav(citiesParams);
$('#districts').tinyNav(districtParams);
});
</script>
</div>
<div id="bottom-text"><img src="https://chem24.bz/template/style_site_chem24.bz/img/crown-hover.png?1593567" style="display:none;"></div>
<script type="text/javascript" src="https://chem24.bz/template/style_site_chem24.bz/js/script.js?784849"></script>

<?php wp_footer(); ?>
</body>
</html>