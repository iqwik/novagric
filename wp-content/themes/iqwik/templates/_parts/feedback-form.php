<?php
$section_region = $post->post_name == 'contact'
	? '<section>
			<label for="city">Страна/Город</label>
			<input class="feedback_elem" style="width:90%" type="text" name="city" id="city">
		</section>'
	: '';
?>
<form id="feedback" accept-charset="utf-8">
	<div class="feedback-wrapper">
		<span class="feedback-error-message" style="display:none"></span>
		<?php echo $section_region;?>
		<section>
			<label for="fio">ФИО<span class="required">*</span></label>
			<input class="feedback_elem" style="width:90%" type="text" name="fio" id="fio" required>
		</section>
		<section>
			<label for="email">Email<span class="required">*</span></label>
			<input class="feedback_elem" style="width:90%" type="text" name="email" id="email" required>
		</section>
		<section>
			<label for="tel">Телефон</label>
			<input class="feedback_elem" style="width:90%" type="text" name="tel" id="tel">
		</section>
		<section>
			<label for="comment">Комментарий</label>
			<textarea cols="20" rows="5" class="feedback_elem" style="width:90%;height:50px;" name="comment" id="comment"></textarea>
		</section>
		<!--section>
			<input class="feedback_elem" type="checkbox" name="agree" value="checked" id="agree">
			<label for="agree">
				Согласен с <a href="javascript:void(0);" onclick="window.open('/index.php?page_id=3','Privacidad','scrollbars=yes,width=400,height=400')"><b><u>условиями использования</u></b></a> сайта.<span class="required">*</span>
			</label>
		</section-->
		<button type="submit" id="feedbackSubmitBtn" class="button">
			<span>Отправить</span>
		</button>
	</div>
	<noscript>Пожалуйста включите javascript, чтобы отправить данные. Спасибо!</noscript>
	<?php wp_nonce_field('send_feedback', 'send_feedback_nonce');?>
	<input type="hidden" name="action" value="send_feedback">
</form>
