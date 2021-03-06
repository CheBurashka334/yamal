<?include('header.php');?>
<div class="news-single">
	<div class="item-title page-title first-line">Как правильно открыть успешный бизнес</div>
	<!-- .share-box можно выравнять разными способами, как удобнее -->
	<!-- можно оставить так, можно вытащить из .row и убрать класс .col -->
	<!-- можно сделать класс 'l12 m12 s12', можно оставить старые классы, к ним добавить поля 'offset-l3 offset-m4' -->
	<div class="row third-line">
		<!--div class="col l3 m4 s12"><span class="item-date light-text">20.07.2015</span></div-->
		<div class="share-box col">
			<!-- Сережа сказал пиздить отсюда 
			https://spark.ru/startup/546dae36cfa4a/blog/10783/vadim-malich-kak-prokachat-proekt-s-pomoschiu-onlajn-programmi-i-najti-investora 
			утащила все что нашла, самого скрипта не нашла((( -->
			<div class="social_sharing injector" data-injection="/ajax/getLikeButtons" data-post-data="{&quot;page_url&quot;:***this.url***;,&quot;on_white&quot;:1,&quot;page_id&quot;:&quot;***this.id***&quot;,&quot;is_need_google&quot;:0}">
				<div class="like_button vk mr15 white_bg">
					<div class="but" onclick="share.vk( 'http://***this.url***' , '***this.title***' , 'http://***this.picture.src***' , '***this.anons***', $(this) )">
						<i class="logo"></i><div class="text">Нравится</div>
					</div>
					<div class="count">0</div>
				</div>
				<div class="like_button facebook mr15 white_bg">
					<div class="but" onclick="share.fb( 'http://***this.url***' , '***this.title***' , 'http://***this.picture.src***' , '***this.anons***', $(this) )">
						<i class="logo"></i><div class="text">Like</div>
					</div>
					<div class="count">7</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item-img second-line m-full-width s-full-width">
		<img class="img" src="images/content/new_single-img.jpg" />
	</div>
	<div class="item-text fourth-line">
		<p>Никому не хочется всю жизнь работать на дядю, ведь это, как правило, не может принести большой прибыли. Единственный вариант удовлетворить собственные амбиции и потребности – открыть свое дело.</p>
		<h2>1. Формирование идеи</h2>
		<p>Сложнее всего решиться на этот шаг. Надо определиться, чем именно вы хотите заниматься. Это очень важно, ведь если ваше дело не будет приносить вам удовольствия, вы не сможете им долго заниматься, каким бы выгодным оно ни было. Фактически вы поменяете шило на мыло, отказавшись работать на идею работодателя, заменив ее другой (чуждой вам) идеей. Подумайте, чем бы вы хотели действительно заниматься? Возможно, ваше интересное хобби может стать отличным бизнесом, или у вас есть навязчивая идея, которую вы бы хотели осуществить.</p>
		<h2>2. Изобретение велосипеда</h2>
		<p>Не стоит полагаться только на собственный опыт, это может привести к многочисленным ошибкам. Проконсультируйтесь с людьми, которые смогли построить успешный бизнес. Возможно, они вам даже подскажут готовые схемы работы, которые нужно будет только подкорректировать. Лучше предупреждать проблемы, чем потом заниматься их решением.</p>
		<h2>3. Законодательство</h2>
		<p>Изучите законодательство, чтобы понять, как легально работать. Определитесь со всеми юридическими вопросами. Это очень важно.</p>
		<h2>4. Заведите полезные знакомства</h2>
		<p>Если вы, например, желаете открыть тренажёрный зал, пойдите в конкурентоспособные залы, побеседуйте с тренерами, директором и другими лицами, которые могут многое вам подсказать. Их советы бесценны, поскольку основаны на практике.</p>
		<h2>5. Стартовый капитал</h2>
		<p>Нужно понять, сколько денег нужно для реализации вашей идеи. Просчитайте стоимость оборудования, аренды помещения, услуг третьих лиц, различные другие затраты. Найдите сумму, которая в 1,5-2 раза превышает необходимый капитал, чтобы точно хватило на все. У начинающих предпринимателей по неопытности часто возникает проблема нехватки оборотных средств, и им приходится влезать в долги. А кредиты могут еще больше усугубить ситуацию.</p>
	</div>
</div>
<div class="nav-links row">
	<div class="col l6 m6 s12"><a class="btn" href="#">Предыдущая новость</a></div>
	<div class="col l6 m6 s12"><a class="btn primary" href="#">Следующая новость</a></div>
	<!-- если кнопка одна (первая/последняя новость) -->
	<!--<a class="btn center" href="#">Предыдущая новость</a>-->
	<!--<a class="btn primary center" href="#">Следующая новость</a>-->
</div>
<?include('footer.php');?>