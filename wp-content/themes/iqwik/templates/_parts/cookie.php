<div id="redim-cookiehint-bottom">
	<div id="redim-cookiehint">
		<div class="cookiecontent">
			<p>
				На нашем веб-сайте мы используем файлы cookie. Некоторые из них необходимы для работы сайта,
				в то время как другие помогают нам улучшить этот сайт и удобство использования (отслеживающие файлы cookie).
				Вы можете решить для себя, хотите ли вы разрешить использование файлов cookie или нет.
				Обратите внимание, что если вы их отклоните, вы не сможете использовать все функции сайта.
			</p>
		</div>
		<div class="cookiebuttons">
			<a id="cookiehintsubmit" onclick="cookiehintsubmit(this); return false;" href="#" class="btn">OK</a>
			<div class="text-center" id="cookiehintinfo">
				<a target="_self" href="/legal-terms">Подробнее</a>
			</div>
		</div>
		<div class="clr"></div>
	</div>
</div>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		if (!navigator.cookieEnabled) {
			document.getElementById('redim-cookiehint-bottom').remove();
		}
	});
	function cookiehintfadeOut(el) {
		el.style.opacity = 1;
		(function fade() {
			if ((el.style.opacity -= .1) < 0) {
				el.style.display = "none";
			} else {
				requestAnimationFrame(fade);
			}
		})();
	}
	function cookiehintsubmit(obj) {
		document.cookie = 'reDimCookieHint=1; expires=Thu, 21 Oct 2021 23:59:59 GMT;57; path=/';
		cookiehintfadeOut(document.getElementById('redim-cookiehint-bottom'));
		return true;
	}
	function cookiehintsubmitno(obj) {
		document.cookie = 'reDimCookieHint=-1; expires=0; path=/';
		cookiehintfadeOut(document.getElementById('redim-cookiehint-bottom'));
		return true;
	}
</script>
