<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.028355101988349896" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3372997247691041" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.4961624360287915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.016321561038160404" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.31333293538692253" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.008281032565141677" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5289462605743314"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9780781860839012" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.713853334872457">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.46262851110571535">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3401196709668335">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3171605394704291">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.016886593049710408"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8892558472101599"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40189379504246614"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1114094973342068"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13900057689603562"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6279145030707782"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9473537736031177"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.05711965106736905"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.302343570388524"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3502704027677339"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9177982798899567"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4984899520692476"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2494351466656013"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7076196621080515"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.32930646775887107"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.013916240531338442"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.793165995189445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5617684457911596"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.32878602341148055"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
