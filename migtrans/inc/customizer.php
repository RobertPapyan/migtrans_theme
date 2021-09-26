<?php
/**
 * Migtrans Theme Customizer
 *
 * @package Migtrans
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function migtrans_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	//Slider
			$wp_customize->add_panel('slider',array(
				'title'=>'Slider',
				'priority'=>10,
				'capability'=>'edit_theme_options'
			));
			$wp_customize->add_section('slider1',array(
				'title'=>'Slide 1',
				'description'=>'Slider 1 customization section',
				'panel' => 'slider',
			));
			$wp_customize->add_section('slider2',array(
				'title'=>'Slide 2',
				'description'=>'Slider 2 customization section',
				'panel' => 'slider',
			));
	//Slide 1 customization
			$wp_customize->add_setting('slider_img1',array(
				'default'=> get_bloginfo('template_url') . '/assets/img/metro.jpg'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slider_img1',array(
				'label'=>'Backgroung image',
				'section'=>'slider1',
				'priority'=>7
			)));
			$wp_customize->add_setting('slider_heading1',array(
				'default' => __('Default header')
			));
			$wp_customize->add_control('slider_heading1',array(
				'label'=>'Heading',
				'section'=>'slider1',
				'priority'=>1
			));
			$wp_customize->add_setting('slider_text1',array(
				'default' => __('Default text')
			));
			$wp_customize->add_control('slider_text1',array(
				'label'=>'Text',
				'section'=>'slider1',
				'priority'=>2
			));
			$wp_customize->add_setting('slider_button1text1',array(
				'default' => __('Узнать больше')
			));
			$wp_customize->add_control('slider_button1text1',array(
				'label'=>'Button 1 text',
				'section'=>'slider1',
				'priority'=>3
			));
			$wp_customize->add_setting('slider_button1url1',array(
				'default' => __('#')
			));
			$wp_customize->add_control('slider_button1url1',array(
				'label'=>'Button 1 Url',
				'section'=>'slider1',
				'priority'=>4
			));
			$wp_customize->add_setting('slider_button2text1',array(
				'default' => __('Узнать больше')
			));
			$wp_customize->add_control('slider_button2text1',array(
				'label'=>'Button 2 text',
				'section'=>'slider1',
				'priority'=>5
			));
			$wp_customize->add_setting('slider_button2url1',array(
				'default' => __('#')
			));
			$wp_customize->add_control('slider_button2url1',array(
				'label'=>'Button 2 Url',
				'section'=>'slider1',
				'priority'=>6
			));
	//Slide 2 customization
			$wp_customize->add_setting('slider_img2',array(
				'default'=> get_bloginfo('template_url') . '/assets/img/taxi.webp'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slider_img2',array(
				'label'=>'Backgroung image',
				'section'=>'slider2',
				'priority'=>7
			)));
			$wp_customize->add_setting('slider_heading2',array(
				'default' => __('Default header')
			));
			$wp_customize->add_control('slider_heading2',array(
				'label'=>'Heading',
				'section'=>'slider2',
				'priority'=>1
			));
			$wp_customize->add_setting('slider_text2',array(
				'default' => __('Default text')
			));
			$wp_customize->add_control('slider_text2',array(
				'label'=>'Text',
				'section'=>'slider2',
				'priority'=>2
			));
			$wp_customize->add_setting('slider_button1text2',array(
				'default' => __('Узнать больше')
			));
			$wp_customize->add_control('slider_button1text2',array(
				'label'=>'Button 1 text',
				'section'=>'slider2',
				'priority'=>3
			));
			$wp_customize->add_setting('slider_button1url2',array(
				'default' => __('#')
			));
			$wp_customize->add_control('slider_button1url2',array(
				'label'=>'Button 1 Url',
				'section'=>'slider2',
				'priority'=>4
			));
			$wp_customize->add_setting('slider_button2text2',array(
				'default' => __('Узнать больше')
			));
			$wp_customize->add_control('slider_button2text2',array(
				'label'=>'Button 2 text',
				'section'=>'slider2',
				'priority'=>5
			));
			$wp_customize->add_setting('slider_button2url2',array(
				'default' => __('#')
			));
			$wp_customize->add_control('slider_button2url2',array(
				'label'=>'Button 2 Url',
				'section'=>'slider2',
				'priority'=>6
			));		
	
		
		
		
		
	
	
	//Statblock customization
			$wp_customize->add_panel('statblock',array(
				'title'=>'Stats block',
				'priority'=>10,
				'capability'=>'edit_theme_options'
			));
			$wp_customize->add_section('panelblock',array(
				'title'=>'Panels block',
				'description'=>'Panels block customization section',
				'panel' => 'statblock',
			));
			$wp_customize->add_section('barsblock',array(
				'title'=>'Percent bars block',
				'description'=>'Percent bars block customization section',
				'panel' => 'statblock',
			));
	//Panel block customization
			$wp_customize->add_setting('panelblocktitle',array(
				'default'=>__('FAQ')
			));
			$wp_customize->add_control('panelblocktitle',array(
				'label'=>'Title',
				'section'=>'panelblock',
				'priority'=>1
			));
			$wp_customize->add_setting('panelblocksubtitle',array(
				'default'=>__('People aks these question over & over again')
			));
			$wp_customize->add_control('panelblocksubtitle',array(
				'label'=>'Subtitle',
				'section'=>'panelblock',
				'priority'=>1
			));
			$wp_customize->add_setting('panel1title',array(
				'default'=>__('My trace number is not working')
			));
			$wp_customize->add_control('panel1title',array(
				'label'=>'Panel 1 title',
				'section'=>'panelblock',
				'priority'=>1
			));
			$wp_customize->add_setting('panel1text',array(
				'default'=>__('Reprehenderit sit reprehenderit aute aliqua. Velit aliquip mollit exercitation sunt. Occaecat sint fugiat do adipisicing officia deserunt irure quis in consequat commodo veniam. Excepteur culpa esse nostrud pariatur mollit. Amet adipisicing reprehenderit magna esse fugiat veniam nulla do consequat. Enim dolore anim Lorem id deserunt Lorem dolore incididunt id Lorem sit sit nisi fugiat. Magna elit sint esse esse nostrud pariatur in ex laborum eu irure.')
			));
			$wp_customize->add_control('panel1text',array(
				'label'=>'Panel 1 text',
				'section'=>'panelblock',
				'priority'=>1,
				'type'=>'textarea'
			));
			$wp_customize->add_setting('panel2title',array(
				'default'=>__('My trace number is not working')
			));
			$wp_customize->add_control('panel2title',array(
				'label'=>'Panel 2 title',
				'section'=>'panelblock',
				'priority'=>1
			));
			$wp_customize->add_setting('panel2text',array(
				'default'=>__('Reprehenderit sit reprehenderit aute aliqua. Velit aliquip mollit exercitation sunt. Occaecat sint fugiat do adipisicing officia deserunt irure quis in consequat commodo veniam. Excepteur culpa esse nostrud pariatur mollit. Amet adipisicing reprehenderit magna esse fugiat veniam nulla do consequat. Enim dolore anim Lorem id deserunt Lorem dolore incididunt id Lorem sit sit nisi fugiat. Magna elit sint esse esse nostrud pariatur in ex laborum eu irure.')
			));
			$wp_customize->add_control('panel2text',array(
				'label'=>'Panel 2 text',
				'section'=>'panelblock',
				'priority'=>1,
				'type'=>'textarea'
			));
			$wp_customize->add_setting('panel3title',array(
				'default'=>__('My trace number is not working')
			));
			$wp_customize->add_control('panel3title',array(
				'label'=>'Panel 3 title',
				'section'=>'panelblock',
				'priority'=>1
			));
			$wp_customize->add_setting('panel3text',array(
				'default'=>__('Reprehenderit sit reprehenderit aute aliqua. Velit aliquip mollit exercitation sunt. Occaecat sint fugiat do adipisicing officia deserunt irure quis in consequat commodo veniam. Excepteur culpa esse nostrud pariatur mollit. Amet adipisicing reprehenderit magna esse fugiat veniam nulla do consequat. Enim dolore anim Lorem id deserunt Lorem dolore incididunt id Lorem sit sit nisi fugiat. Magna elit sint esse esse nostrud pariatur in ex laborum eu irure.')
			));
			$wp_customize->add_control('panel3text',array(
				'label'=>'Panel 3 text',
				'section'=>'panelblock',
				'priority'=>1,
				'type'=>'textarea'
			));
	//Percent bars customization
			$wp_customize->add_setting('barblocktitle',array(
				'default'=>__('ACHIEVEMENT')
			));
			$wp_customize->add_control('barblocktitle',array(
				'label'=>'Title',
				'section'=>'barsblock',
				'priority'=>1
			));
			$wp_customize->add_setting('barblocksubtitle',array(
				'default'=>__('See what we achieved over the years!')
			));
			$wp_customize->add_control('barblocksubtitle',array(
				'label'=>'Subtitle',
				'section'=>'barsblock',
				'priority'=>1
			));		
			$wp_customize->add_setting('barblocktext',array(
				'default'=>__('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam est pariatur facilis ullam. Quia quae, optio autem hic a maxime dolor neque sit delectus deleniti dignissimos dolorum voluptas, illo beatae.')
			));
			$wp_customize->add_control('barblocktext',array(
				'label'=>'Text',
				'section'=>'barsblock',
				'priority'=>1
			));	
			$wp_customize->add_setting('bar1title',array(
				'default'=>__('Air Freight')
			));
			$wp_customize->add_control('bar1title',array(
				'label'=>'Bar 1 title',
				'section'=>'barsblock',
				'priority'=>1
			));
			$wp_customize->add_setting('bar1percent',array(
				'default'=>__('80')
			));
			$wp_customize->add_control('bar1percent',array(
				'label'=>'Bar 1 percent',
				'section'=>'barsblock',
				'priority'=>1,
				'type'=>'number'
			));
			$wp_customize->add_setting('bar2title',array(
				'default'=>__('Air Freight')
			));
			$wp_customize->add_control('bar2title',array(
				'label'=>'Bar 2 title',
				'section'=>'barsblock',
				'priority'=>1
			));
			$wp_customize->add_setting('bar2percent',array(
				'default'=>__('80')
			));
			$wp_customize->add_control('bar2percent',array(
				'label'=>'Bar 2 percent',
				'section'=>'barsblock',
				'priority'=>1,
				'type'=>'number'
			));
			$wp_customize->add_setting('bar3title',array(
				'default'=>__('Air Freight')
			));
			$wp_customize->add_control('bar3title',array(
				'label'=>'Bar 3 title',
				'section'=>'barsblock',
				'priority'=>1
			));
			$wp_customize->add_setting('bar3percent',array(
				'default'=>__('80')
			));
			$wp_customize->add_control('bar3percent',array(
				'label'=>'Bar 3 percent',
				'section'=>'barsblock',
				'priority'=>1,
				'type'=>'number'
			));

	//Footer
		
		$wp_customize->add_section('footer',array(
			'title'=>'Footer',
			'description'=>'Footer customization section',
			
		));
		$wp_customize->add_setting('footertext',array(
			'default'=>__('Mikago arm towards the viewer gregor then turned to look out the window at the dull weather')
		));
		$wp_customize->add_control('footertext',array(
			'label'=>'Logo text',
			'section'=>'footer',
			'priority'=>1,
			'type'=>'textarea'
		));

		$wp_customize->add_setting('footercontacttitle',array(
			'default'=>__('Наши контакты')
		));
		$wp_customize->add_control('footercontacttitle',array(
			'label'=>'Contact title',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footerphonenumber1',array(
			'default'=>__('+(374) 99 666 179')
		));
		$wp_customize->add_control('footerphonenumber1',array(
			'label'=>'Phone number 1',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footerphonenumber2',array(
			'default'=>__('+(374) 93 179 666')
		));
		$wp_customize->add_control('footerphonenumber2',array(
			'label'=>'Phone number 2',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footervibernumber',array(
			'default'=>__('+(374) 99 666 179')
		));
		$wp_customize->add_control('footervibernumber',array(
			'label'=>'Viber & WP number',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footermail',array(
			'default'=>__('migtrans.transportation@mail.ru')
		));
		$wp_customize->add_control('footermail',array(
			'label'=>'Email',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footerlocationtitle',array(
			'default'=>__('Наш адресс')
		));
		$wp_customize->add_control('footerlocationtitle',array(
			'label'=>'Location title',
			'section'=>'footer',
			'priority'=>1,
			
		));

		$wp_customize->add_setting('footerlocationaddress',array(
			'default'=>__('РА, г.Ереван, ул. Ленинградян 4/4')
		));
		$wp_customize->add_control('footerlocationaddress',array(
			'label'=>'Location address',
			'section'=>'footer',
			'priority'=>1,
			
		));

	
	
	//Features section customization
	$wp_customize->add_section('about',array(
		'title'=>'Features section',
		'description'=>'Features section customization section',
	));
	$wp_customize->add_setting('abouttitle',array(
		'default'=>__('О НАС')
	));
	$wp_customize->add_control('abouttitle',array(
		'label'=>'Title',
		'section'=>'about',
		'priority'=>1,
	));

	$wp_customize->add_setting('block1heading',array(
		'default'=>__('MIG TRANS')
	));
	$wp_customize->add_control('block1heading',array(
		'label'=>'Block 1 heading',
		'section'=>'about',
		'priority'=>1,
	));
	$wp_customize->add_setting('block1text',array(
		'default'=>__('- компания, занимающаяся международными грузоперевозками. Долгосрочные партнерские отношения и объем перевозимых грузов дают возможность предложить лучшую цену на рынке. Если вам нужно доставить груз – в больших или малых объемах, срочно и надежно, то Вы по адресу!!!')
	));
	$wp_customize->add_control('block1text',array(
		'label'=>'Block 1 text',
		'section'=>'about',
		'priority'=>1,
		'type'=>'textarea'
	));

	$wp_customize->add_setting('block2heading',array(
		'default'=>__('Наша команда')
	));
	$wp_customize->add_control('block2heading',array(
		'label'=>'Block 2 heading',
		'section'=>'about',
		'priority'=>1,
	));
	$wp_customize->add_setting('block2text',array(
		'default'=>__('сформирована из высококвалифицированных специалистов с многолетним опытом работы. Каждый день мы находим и воплощаем в жизнь самые выгодные логистические решения, чтобы полностью удовлетворить любую потребность нашего Клиента.')
	));
	$wp_customize->add_control('block2text',array(
		'label'=>'Block 2 text',
		'section'=>'about',
		'priority'=>1,
		'type'=>'textarea'
	));

	$wp_customize->add_setting('block3heading',array(
		'default'=>__('Наша компания')
	));
	$wp_customize->add_control('block3heading',array(
		'label'=>'Block 3 heading',
		'section'=>'about',
		'priority'=>1,
	));
	$wp_customize->add_setting('block3text',array(
		'default'=>__('предлагает широкий спектр транспортных услуг. Мы предоставляем свои услуги как частным лицам, так и представителям бизнеса, гарантируя сохранность вашего груза и точное прибытие в пункт назначения в рамках установленных сроков.')
	));
	$wp_customize->add_control('block3text',array(
		'label'=>'Block 3 text',
		'section'=>'about',
		'priority'=>1,
		'type'=>'textarea'
	));
	
	
	//Numbers block customization

	$wp_customize->add_section('numbers',array(
		'title'=>'Animated numbers',
		'description'=>'Animated numbers customization section',
	));

	$wp_customize->add_setting('numberstitle1',array(
		'default'=>__('лет')
	));
	$wp_customize->add_control('numberstitle1',array(
		'label'=>'Title 1',
		'section'=>'numbers',
		'priority'=>1,
	));
	$wp_customize->add_setting('numberssubtitle1',array(
		'default'=>__('успешной работы')
	));
	$wp_customize->add_control('numberssubtitle1',array(
		'label'=>'Subtitle 1',
		'section'=>'numbers',
		'priority'=>1,
	));

	$wp_customize->add_setting('numberstitle2',array(
		'default'=>__('заказов')
	));
	$wp_customize->add_control('numberstitle2',array(
		'label'=>'Title 2',
		'section'=>'numbers',
		'priority'=>1,
	));
	$wp_customize->add_setting('numberssubtitle2',array(
		'default'=>__('мы получаем каждый месяц')
	));
	$wp_customize->add_control('numberssubtitle2',array(
		'label'=>'Subtitle 2',
		'section'=>'numbers',
		'priority'=>1,
	));

	$wp_customize->add_setting('numberstitle3',array(
		'default'=>__('км')
	));
	$wp_customize->add_control('numberstitle3',array(
		'label'=>'Title 3',
		'section'=>'numbers',
		'priority'=>1,
	));
	$wp_customize->add_setting('numberssubtitle3',array(
		'default'=>__('в неделю преодолевают наши машины')
	));
	$wp_customize->add_control('numberssubtitle3',array(
		'label'=>'Subtitle 3',
		'section'=>'numbers',
		'priority'=>1,
	));

	

	//About us section customization

	$wp_customize->add_section('aboutus',array(
		'title'=>'About us',
		'description'=>'About us customization section',
	));

	$wp_customize->add_setting('aboutustitle',array(
		'default'=>__('ABOTUT US')
	));
	$wp_customize->add_control('aboutustitle',array(
		'label'=>'Title',
		'section'=>'aboutus',
		'priority'=>1,
	));
	$wp_customize->add_setting('aboutussubtitle',array(
		'default'=>__('Check out what we do for our customers!')
	));
	$wp_customize->add_control('aboutussubtitle',array(
		'label'=>'Subtitle',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutustext',array(
		'default'=>__('Picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull')
	));
	$wp_customize->add_control('aboutustext',array(
		'label'=>'Text',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutusphonetitle',array(
		'default'=>__('Call Center')
	));
	$wp_customize->add_control('aboutusphonetitle',array(
		'label'=>'Phone title',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutusphonenumber',array(
		'default'=>__('Sat - Fri day (888) 254-6544-5441')
	));
	$wp_customize->add_control('aboutusphonenumber',array(
		'label'=>'Phone number',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutuslocationtitle',array(
		'default'=>__('Location')
	));
	$wp_customize->add_control('aboutuslocationtitle',array(
		'label'=>'Location title',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutuslocationaddress',array(
		'default'=>__('21/1 Dreem city new town, Agarog, Dustria')
	));
	$wp_customize->add_control('aboutuslocationaddress',array(
		'label'=>'Location address',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutusbutton',array(
		'default'=>__('Оставить заявку')
	));
	$wp_customize->add_control('aboutusbutton',array(
		'label'=>'Button text',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutusbuttonurl',array(
		'default'=>__('#')
	));
	$wp_customize->add_control('aboutusbuttonurl',array(
		'label'=>'Button url',
		'section'=>'aboutus',
		'priority'=>1,
	));

	$wp_customize->add_setting('aboutusimg',array(
		'default'=> get_bloginfo('template_url') . '/assets/img/metro.jpg'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'aboutusimg',array(
		'label'=>'Image',
		'section'=>'aboutus',
		'priority'=>1
	)));
if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'migtrans_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'migtrans_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'migtrans_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function migtrans_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function migtrans_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function migtrans_customize_preview_js() {
	wp_enqueue_script( 'migtrans-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'migtrans_customize_preview_js' );
