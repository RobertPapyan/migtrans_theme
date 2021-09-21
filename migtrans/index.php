<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Migtrans
 */
get_header();
?>
	<!--
	<main id="primary" class="site-main">
	<div class="hero">
		<div class="slider">
			<div class="slider__item slide1">
			
				<div class="item__container">
					<div class="item__title">1Lorem ipsum dolor, sit amet consectetur</div>
					<div class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
					<div class="item__buttons">
						<a href="#" class="item__button1">Узнать больше <i class="icon-chevrone_right"></i></a>
						<a href="#" class="item__button2">Узнать больше</a>
					</div> 
				</div>
			</div>
			<div class="slider__item slide2">
			<div class="item__container">
				<div class="item__title">2Lorem ipsum dolor, sit amet consectetur</div>
				<div class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
					<div class="item__buttons">
						<a href="#" class="item__button1">Узнать больше <i class="icon-chevrone_right"></i></a>
						<a href="#" class="item__button2">Узнать больше</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="container">
		<div class="about__title">О нас</div>
		<div class="about__grid">
			<div class="about__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/box_r.png" alt="" class="item__logo">
				
				<p class="item__text">
					<span class="item__subtitle"> MIG TRANS</span> - компания, занимающаяся международными грузоперевозками. Долгосрочные партнерские отношения и объем перевозимых грузов дают возможность предложить лучшую цену на рынке. Если вам нужно доставить груз – в больших или малых объемах, срочно и надежно, то Вы по адресу!!!
				</p>
			</div>
			<div class="about__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/worker_r.png" alt="" class="item__logo">
				<p class="item__text">
					<span class="item__subtitle"> Наша команда </span> сформирована из высококвалифицированных специалистов с многолетним опытом работы. Каждый день мы находим и воплощаем в жизнь самые выгодные логистические решения, чтобы полностью удовлетворить любую потребность нашего Клиента.
				</p>
			</div>
			<div class="about__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/truck_r.png" alt="" class="item__logo">
				<p class="item__text">
					<span class="item__subtitle"> Наша компания </span>предлагает широкий спектр транспортных услуг. Мы предоставляем свои услуги как частным лицам, так и представителям бизнеса, гарантируя сохранность вашего груза и точное прибытие в пункт назначения в рамках установленных сроков.
				</p>
			</div>
		</div>
		</div>
	</div>
	<div class="numbers">
		<div class="container">
		<div class="numbers__grid">
			<div class="numbers__item">
				<div class="numbers__item__container">
				<div class="numbers__animation">
					<span class="animation__ten ten1">1</span><span class="animation__ten ten2">2</span>
					<span class="animation__unit unit1">3</span ><span class="animation__unit unit2">4</span>
					<span class="animation__text">лет</span>
				</div>
				<div class="numbers__subtitle">успешной
					работы</div>
				</div>
			</div>
			<div class="numbers__item">
				<div class="numbers__item__container">
				<div class="numbers__animation">
					<span class="animation__ten ten3">1</span><span class="animation__ten ten4">2</span>
					<span class="animation__unit unit3">3</span ><span class="animation__unit unit4">4</span>
					<span class="animation__unit unit5">3</span ><span class="animation__unit unit6">4</span>
					<span class="animation__unit unit7">3</span ><span class="animation__unit unit8">4</span>
					<span class="animation__text animation__text2">заказов</span>
				</div>
				<div class="numbers__subtitle">мы получаем
					каждый месяц</div>
				</div>
			</div>
			
			<div class="numbers__item">
				<div class="numbers__item__container">
				<div class="numbers__animation">
					<span class="animation__ten ten5">1</span><span class="animation__ten ten6">2</span>
					<span class="animation__unit unit9">3</span ><span class="animation__unit unit10">4</span>
					<span class="animation__unit unit11">3</span ><span class="animation__unit unit12">4</span>
					<span class="animation__unit unit13">3</span ><span class="animation__unit unit14">4</span>
					<span class="animation__unit unit15">3</span ><span class="animation__unit unit16">4</span>
					<span class="animation__unit unit17">3</span ><span class="animation__unit unit18">4</span>
					<span class="animation__text animation__text3">км</span>
				</div>
				<div class="numbers__subtitle">в неделю
					преодолевают
					наши машины</div>
				</div>
			</div>
		</div>
			</div>
		</div>
	<div class="faq-achievement">
		<div class="container">
			<div class="faq-achievement__grid">
				<div class="faq-achievement__item">
					<div class="faq-achievement__title">FAQ</div>
					<div class="faq-achievement__subtitle">People aks these question over & over again</div>
					<div class="faq-achievement__panelarea">
						<div class="faq-achievement__panel">
							<div class="panel__heading panel__heading1">
								
									<a href="" class="panel__open1">My Trace number is not working</a>

							</div>
							<div class="panel__content panel__content1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Atque a asperiores quam optio eveniet dicta fugit sint nemo. Eaque eius magni temporibus labore, 
								minus necessitatibus? Eligendi suscipit explicabo magni soluta. Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Commodi, inventore doloremque laboriosam totam maiores numquam accusantium non placeat 
								beatae iure aperiam sequi quibusdam nam tenetur incidunt doloribus tempora ducimus nesciunt.
							</div>
						</div>
						<div class="faq-achievement__panel">
							<div class="panel__heading panel__heading2">
								<a href="" class="panel__open2">My Trace number is not working</a>
							</div>
							<div class="panel__content panel__content2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Atque a asperiores quam optio eveniet dicta fugit sint nemo. Eaque eius magni temporibus labore, 
								minus necessitatibus? Eligendi suscipit explicabo magni soluta. Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Commodi, inventore doloremque laboriosam totam maiores numquam accusantium non placeat 
								beatae iure aperiam sequi quibusdam nam tenetur incidunt doloribus tempora ducimus nesciunt.
							</div>
						</div>
						<div class="faq-achievement__panel">
							<div class="panel__heading panel__heading3">
								<a href="" class="panel__open3">My Trace number is not working</a>
							</div>
							<div class="panel__content panel__content3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Atque a asperiores quam optio eveniet dicta fugit sint nemo. Eaque eius magni temporibus labore, 
								minus necessitatibus? Eligendi suscipit explicabo magni soluta. Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Commodi, inventore doloremque laboriosam totam maiores numquam accusantium non placeat 
								beatae iure aperiam sequi quibusdam nam tenetur incidunt doloribus tempora ducimus nesciunt.
							</div>
						</div>
				</div>
			</div>
			<div class="faq-achievement__item">
				<div class="faq-achievement__title">ACHIEVEMENT</div>
				<div class="faq-achievement__subtitle">See what we achieved over the years!</div>
				<div class="faq-achievement__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam est pariatur 
					facilis ullam. Quia quae, optio autem hic a maxime dolor neque sit 
					delectus deleniti dignissimos dolorum voluptas, illo beatae.
				</div>

				<div class="faq-achievement__progressarea">
					<div class="faq-achievement__progress">
						<div class="progress__settings">
							<div class="progress__name">Air Freight</div>
							<div class="progress__percent">85%</div>
						</div>
						<div class="progress__bar">
							<div class="progress__appeared prog1"></div>
						</div>
					</div>
					<div class="faq-achievement__progress">
						<div class="progress__settings">
							<div class="progress__name">Air Freight</div>
							<div class="progress__percent">60%</div>
						</div>
						<div class="progress__bar">
							<div class="progress__appeared prog2"></div>
						</div>
					</div>
					<div class="faq-achievement__progress">
						<div class="progress__settings">
							<div class="progress__name">Air Freight</div>
							<div class="progress__percent">99%</div>
						</div>
						<div class="progress__bar">
							<div class="progress__appeared prog3"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>  

	</main><!-- #main -->

<?php

get_footer();
