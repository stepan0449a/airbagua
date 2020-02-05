<?php
require '../vendor/autoload.php';
require_once '../components/Mobile_Detect/Mobile_Detect.php';
$user = new Mobile_Detect;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$assortment = [
        'Номер',
        '1 — комнатный люкс «комфорт» (до 2-х человек)',
        '1 — комнатный люкс (до 3-х человек)',
        '1 — комнатный люкс (до 4-х человек)',
        '2 — комнатный люкс (до 4-х человек)',
        '1 — комнатный люкс (до 5-х человек)',
];
$form = handle_form_postdata( $_POST, $assortment);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->

<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Цены - Верона</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="#">
	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
    <link href="../assets/css/app.css" rel="stylesheet">

<body>
<div id="page">

<div id="mobile-bar">
	<a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
	<p class="mob-title">Цены - Верона</p>
</div>
    <div id="panel">
        <div class="container" id="panel-map" style="width:100%; height:75vh">
            <div class="row">
                <div class="col-md-12">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /panel -->

    <!-- /popup -->
    <?php include_once '../components/popup_booking.html'; ?>
    <!--end popup -->

    <header id="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="top" class="group">
                        <div class="row">
                            <div class="col-md-5">
                                <div id="weather-widget">
                                    <link type="text/css" rel="stylesheet"
                                          href="https://www.meteoprog.ua/css/winformer.min.css">
                                    <div class="meteoprog-informer" style="width: 176px"
                                         data-params='{"id": "5e07cd01984852951a8c8d68", "city_ids": "2843", "domain": "https://www.meteoprog.ua/ru/", "lang": "ru"}'>
                                        <a title="Погода в городе Железный Порт" target="_blank"
                                           href="https://www.meteoprog.ua/ru/weather/Gelezniyport">
                                            <img style="margin: 0 auto; display: block"
                                                 src="https://www.meteoprog.ua/images/preloader.gif" alt="Loading...">
                                        </a>
                                        <a target="_blank" class="constructor__met2wlink"
                                           href="https://www.meteoprog.ua/ru/review/Gelezniyport/">Погода на 2
                                            недели</a>
                                        <a class="constructor__metlink" target="_blank"
                                           href="https://www.meteoprog.ua/ru/"> <img
                                                    style="display: block; margin: 0 auto;" alt="Meteoprog"
                                                    src="https://www.meteoprog.ua/images/meteoprog-inf.png"> </a>

                                    </div>
                                    <script type="text/javascript"
                                            src="https://www.meteoprog.ua/js/winformer.min.js"></script>
                                </div>
                                <style type="text/css">
                                    .constructor__city-body-0 {
                                        font-size: 11px !important;
                                    }

                                    .constructor__city-body-2 {
                                        font-size: 19px !important;
                                    }
                                </style>
                            </div>
                            <div class="col-md-2">
                                <p class="text-center">
                                    <a href="#"
                                       title="See the map"
                                       id="map-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <ul id="misc">
                                    <li><a href="tel:+380965956091">+38 (096) 595-60-91</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <nav class="nav">
                                <ul id="main-nav-left" class="navigation group">
                                    <li><a href="/">Главная</a></li>
                                    <li><a href="/gallery/">Галерея</a>
                                    </li>
                                    <li><a href="/road/">Как добратся</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div id="logo-wrap"
                             class="col-md-2 col-sm-12">
                            <strong class="imglogo">
                                <a href="/">
                                    <img width="120px" src="../assets/images/logo_render_v3.png" alt="">
                                </a>
                            </strong>
                        </div>
                        <div class="col-md-5">
                            <nav class="nav">
                                <ul id="main-nav-right" class="navigation group">
                                    <li><a href="/prices/">Цены</a></li>
                                    <li><a href="/online/">Онлайн-трансляция</a></li>
                                    <li><a href="/partners/">Сотрудничество</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /row -->

                    <div id="mobilemenu"></div>

                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /container -->
    </header>
    <!-- /top-wrap -->
<main class="container">
	<div class="row">
		<div class="col-md-4">
            <aside class="widget">
                <div class="aside-container">
                    <h3 class="widget-title">Наш адрес</h3>
                    <p>Херсонская обл. Железный Порт, ул. Школьная, 65/30</p>
                    <p>Тел: +38 (050) 260-96-76 <br/>
                        Моб: +38 (067) 883-84-85. <br/>
                        Viber: +38 (096) 595-60-91 <br/>
                        e-mail: admin@verona.in.ua</p>
                </div>
            </aside>
		</div><!-- .four.columns -->

		<div class="col-md-8">
			<div ><!-- class="entry"-->
				<h2 class="text-center">Цены</h2>
				<?php show_form_errors( $form ); ?>
				<?php show_email_result( $form ); ?>
				<?php if ( !isset( $form['send_booking'] ) or ( isset( $form['send_booking'] ) and !empty( $form['errorString'] ) ) ): ?>
					<div class="full-booking"><!-- class="booking"-->
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="col-md-6">
								<div class="form-field booking-input">
									<input required type="text" name="the_name" placeholder="Ваше Имя" value="<?php echo $form['the_name']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field booking-input">
									<input type="email" required name="the_email" placeholder="Ваш e-mail" value="<?php echo $form['the_email']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field arrive">
									<?php if($user->isMobile()) echo '<label for="input_arrive_price">Въезд</label>';?>
									<input required type="<?php if($user->isMobile()) echo 'date'; else echo 'text';?>" name="arrive" class="<?php if($user->isMobile()) echo 'form-control no_radius'; else echo 'datepicker'; ?>" placeholder="Въезд" value="<?php echo $form['arrive']; ?>" id="input_arrive_price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field depart">
									<?php if($user->isMobile()) echo '<label for="input_depart_price">Выезд</label>';?>
									<input required type="<?php if($user->isMobile()) echo 'date'; else echo 'text';?>" name="depart" class="<?php if($user->isMobile()) echo 'form-control no_radius'; else echo 'datepicker'; ?>" placeholder="Выезд" value="<?php echo $form['depart']; ?>" id="input_depart_price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field guests">
									<label for="guest_no" class="sr-only">Гости</label>
									<select  id="guest_no" name="guests" class="<?php if($user->isMobile()) echo 'form-control no_radius'; else echo 'dk'; ?>">
										<option value="0">Гости</option>
										<option value="1" <?php selected('1', $form['guests']); ?>>1</option>
										<option value="2" <?php selected('2', $form['guests']); ?>>2</option>
										<option value="3" <?php selected('3', $form['guests']); ?>>3</option>
										<option value="4" <?php selected('4', $form['guests']); ?>>4</option>
										<option value="5" <?php selected('5', $form['guests']); ?>>5</option>
										<option value="6" <?php selected('6', $form['guests']); ?>>6</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-field room-select">
									<label for="room_select" class="sr-only">Номер</label>
									<select  name='room_select' id='room_select' class='<?php if($user->isMobile()) echo 'form-control no_radius'; else echo 'dk'; ?>'>
                                        <?php foreach ($assortment as $key => $value): ?>
                                            <option value="<?= $key ?>" <?php selected($key, $form['room_select']); ?>><?= $value ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-field booking-message">
									<textarea name="the_message" cols="30" rows="10" placeholder="Сообщение"><?php echo $form['the_message']; ?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<input type="submit" class="button" name="send_booking" value="Отправить">
								</div>
							</div>
						</form>
					</div><!-- /contact_form -->
				<?php endif; ?>

			</div> <!-- /entry -->
		</div><!-- /col-md-8 -->
	</div><!-- /row -->
    <div class="row">
        <div class="col-md-12 container">
            <div class="price_description">
                <h2 class="text-center">1 — комнатный люкс «комфорт» (проживание до 2-х человек)</h2>
                <p><b>Описание</b>: со всеми удобствами, новая мягкая мебель, телевизор, холодильник, кондиционер</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Май</th>
                        <th>Июнь</th>
                        <th>Июль</th>
                        <th>Август</th>
                        <th>Сентябрь</th>
                    </tr>
                    <tr>
                        <td>400 грн</td>
                        <td>600 грн</td>
                        <td>900 грн</td>
                        <td>900 грн</td>
                        <td>500 грн</td>
                    </tr>
                    </tbody>
                </table>


                <h2 class="text-center">1 — комнатный люкс (проживание до 3-х человек)</h2>
                <p><b>Описание</b>: со всеми удобствами, новая мягкая мебель, телевизор, холодильник, кондиционер</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Май</th>
                        <th>Июнь</th>
                        <th>Июль</th>
                        <th>Август</th>
                        <th>Сентябрь</th>
                    </tr>
                    <tr>
                        <td>500 грн</td>
                        <td>700 грн</td>
                        <td>1100 грн</td>
                        <td>1100 грн</td>
                        <td>600 грн</td>
                    </tr>
                    </tbody>
                </table>

                <h2 class="text-center">1 — комнатный люкс (проживание до 4-х человек)</h2>
                <p><b>Описание</b>: со всеми удобствами, новая мягкая мебель, телевизор, холодильник, кондиционер</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Май</th>
                        <th>Июнь</th>
                        <th>Июль</th>
                        <th>Август</th>
                        <th>Сентябрь</th>
                    </tr>
                    <tr>
                        <td>600 грн</td>
                        <td>800 грн</td>
                        <td>1300 грн</td>
                        <td>1300 грн</td>
                        <td>700 грн</td>
                    </tr>
                    </tbody>
                </table>

                <h2 class="text-center">2 — комнатный люкс (проживание до 4-х человек)</h2>
                <p><b>Описание</b>: со всеми удобствами, новая мягкая мебель, телевизор, холодильник, кондиционер</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Май</th>
                        <th>Июнь</th>
                        <th>Июль</th>
                        <th>Август</th>
                        <th>Сентябрь</th>
                    </tr>
                    <tr>
                        <td>700 грн</td>
                        <td>1000 грн</td>
                        <td>1600 грн</td>
                        <td>1600 грн</td>
                        <td>750 грн</td>
                    </tr>
                    </tbody>
                </table>

                <h2 class="text-center">1 — комнатный люкс (проживание до 5-х человек)</h2>
                <p><b>Описание</b>: со всеми удобствами, новая мягкая мебель, телевизор, холодильник, кондиционер</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Май</th>
                        <th>Июнь</th>
                        <th>Июль</th>
                        <th>Август</th>
                        <th>Сентябрь</th>
                    </tr>
                    <tr>
                        <td>700 грн</td>
                        <td>1000 грн</td>
                        <td>1600 грн</td>
                        <td>1600 грн</td>
                        <td>750 грн</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="price_note">
                <p class="text-center bg-info">Расчетный час (выезд) — 12-00.  Заезд  — 13:00. (Ранний заезд и поздний выезд возможны по предварительному согласованию с администрацией и оплачиваемы.)</p>
                <p class="text-center mt-2"><b>Бронирование номеров только по предоплате в размере 10%</b></p>
                <p>Получая Вашу предоплату, мы отказываем другим клиентам, желающим снять номер на этот же период, тем самым неся возможные убытки. Поэтому в случае не приезда, отмены брони, либо изменения даты Вашего приезда, предоплата не возвращается.</p>
            </div>
        </div>
    </div>
    <?php //include_once '../components/boooking_form.php'; ?>


</main><!-- /container -->


    <footer id="footer">
        <div class="container">
            <!--            <div class="row">-->
            <!--                <div class="col-md-4">-->
            <!--                    <aside class="widget widget_text group">-->
            <!--                        <div class="aside-container">-->
            <!--                            <h4 class="widget-title">Text Widget</h4>-->

            <!--                            <div class="textwidget">-->
            <!--                                <p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit.-->
            <!--                                    Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit-->
            <!--                                    amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Nulla facilisi. Duis-->
            <!--                                    aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus-->
            <!--                                    ornare ante, ac egestas est urna sit amet arcu. Curabitur vulputate, ligula lacinia scelerisque-->
            <!--                                    tempor.</p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </aside>-->
            <!--                </div>-->

            <!--                <div class="col-md-4">-->
            <!--                    <aside class="widget widget_ci_flickr_widget group">-->
            <!--                        <div class="aside-container">-->
            <!--                            <h4 class="widget-title">Flickr</h4>-->

            <!--                            <div class="f group">-->
            <!--                                <script type="text/javascript"-->
            <!--                                        src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;&amp;layout=x&amp;source=user&amp;user=12313997@N00&amp;size=s"></script>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </aside>-->
            <!--                </div>-->

            <!--                <div class="col-md-4">-->
            <!--                    <aside class="widget widget_socials_ignited group">-->
            <!--                        <div class="aside-container">-->
            <!--                            <h4 class="widget-title">Find us online</h4>-->

            <!--                            <div class="ci-socials-ignited ci-socials-ignited-fa">-->
            <!--                                <a href="http://www.facebook.com/cssigniter"><i class="fa fa-facebook"></i></a>-->
            <!--                                <a href="http://www.facebook.com/cssigniter"><i class="fa fa-twitter"></i></a>-->
            <!--                                <a href="http://dribbble.com/tsiger"><i class="fa fa-dribbble"></i></a>-->
            <!--                                <a href="http://www.flickr.com"><i class="fa fa-flickr"></i></a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </aside>-->

            <!--                    <aside class="widget widget_text group">-->
            <!--                        <div class="aside-container">-->
            <!--                            <div class="textwidget">-->
            <!--                                <p>-->
            <!--                                    CSSIgniter Info Str.<br/>-->
            <!--                                    63100<br/>-->
            <!--                                    California, SA<br/>-->
            <!--                                    Tel: +66 555-HOTEL-161-->
            <!--                                </p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </aside>-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="row">
                <div class="col-md-6 col-sm-12 credits">
                    <div class="map">
                        <a href="/">Главная</a>
                        <a href="/gallery/">Галерея</a>
                    </div>
                    <div class="map">
                        <a href="/road/">Как добраться</a>
                        <a href="/prices/">Цены</a>
                    </div>
                    <div class="map">
                        <a href="/online/">Онлайн-трансляция</a>
                        <a href="/partners/">Сотрудничество</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 credits">
                    <a href="tel:+380678838485"
                       title="Заказать номер в отеле по телефону">Бронирование номеров: +38 (050) 260-96-76; +38 (067)
                        883-84-85</a><br/>
                    <span>Адрес: <br> Херсонская обл. Железный Порт, ул. Школьная, 65/30</span>
                </div>
            </div>
        </div>
        <!-- .container -->
    </footer>
</div><!-- #page -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTnL4HenV5LsOefdwtyN7qmU78X96h99g"></script>
<script src="https://api.fondy.eu/static_common/v1/checkout/ipsp.js"></script>
</body>
</html>
<?php
	function handle_form_postdata( $post_array, $assortment ) {
		$data = array();

		// Sanitize data, or initialize if they don't exist.
		$data['the_name']    = isset( $post_array['the_name'] ) ? trim( $post_array['the_name'] ) : '';
		$data['the_email']   = isset( $post_array['the_email'] ) ? trim( $post_array['the_email'] ) : '';
		$data['arrive']      = isset( $post_array['arrive'] ) ? trim( $post_array['arrive'] ) : '';
		$data['depart']      = isset( $post_array['depart'] ) ? trim( $post_array['depart'] ) : '';
		$data['guests']      = isset( $post_array['guests'] ) ? trim( $post_array['guests'] ) : '';
		$data['the_message'] = isset( $post_array['the_message'] ) ? filter_var( $post_array['the_message'], FILTER_SANITIZE_STRING ) : '';

		if ( !empty( $post_array['room_select'] ) ) {
			$data['room_select'] = intval( $post_array['room_select'] );
		} elseif ( !empty( $_GET['room_select'] ) ) {
			$data['room_select'] = intval( $_GET['room_select'] );
		} else {
			$data['room_select'] = '';
		}

		$data['errorString'] = '';
		$data['emailbody']   = '';
		$data['emailSent']   = false;

		if ( isset( $post_array['send_booking'] ) ) {
			$data['send_booking'] = $post_array['send_booking'];

			// We are here because the form was submitted. Let's validate!

			if ( empty( $data['the_name'] ) ) {
				$data['errorString'] .= '<li>Введите ваше Имя.</li>';
			}

			if ( empty( $data['the_email'] ) ) {
				$data['errorString'] .= '<li>Введите ваш email.</li>';
			}

			if ( empty( $data['arrive'] ) ) {
				$data['errorString'] .= '<li>Введите дату заезда в пансионат.</li>';
			}

			if ( empty( $data['depart'] ) ) {
				$data['errorString'] .= '<li>Введите дату выезда из пансионата.</li>';
			}

			if ( empty( $data['guests'] ) or intval( $data['guests'] ) < 1 ) {
				$data['errorString'] .= '<li>Введите количество отдыхающих.</li>';
			}

			if ( empty( $data['room_select'] ) or intval( $data['room_select'] ) < 1 ) {
                $data['errorString'] .= '<li>Необходимо выбрать номер из списка.</li>';
            }

			// Message is optional, so, no check.


			// Alright, lets send the email already!
			if ( empty( $data['errorString'] ) ) {
				$data['emailbody']  = "Имя:" . " " . $data['the_name'] . "<br/>";
				$data['emailbody'] .= "Почта:" . " " . $data['the_email'] . "<br/>";
				$data['emailbody'] .= "Заезд:" . " " . $data['arrive'] . "<br/>";
				$data['emailbody'] .= "Выезд:" . " " . $data['depart'] . "<br/>";
				$data['emailbody'] .= "Кол-во гостей:" . " " . $data['guests'] . "<br/>";
				$data['emailbody'] .= "Номер:" . " " . $assortment[$data['room_select']] . "<br/>";
				$data['emailbody'] .= "Сообщение:" . " " . $data['the_message'] . "<br/>";
				$mail = new PHPMailer;
                $mail->CharSet = 'UTF-8';
                $mail->isSMTP(true);
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jinsike123@gmail.com';    //Логин
                $mail->Password = 'zpsijcgkhhaueqph';                   //Пароль
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom('verona@gmail.com', 'Verona Hotel');
                $mail->addAddress('manyshkin30@gmail.com');     // Add a recipient
                $mail->addAddress('jinsike123@gmail.com');     // Add a recipient
                $mail->isHTML(true);
                $mail->Subject = 'Заказ с сайта VERONA [цена]';
                $mail->Body    = $data['emailbody'];

                $data['emailSent'] = $mail->send();


                $mailClient = new PHPMailer;
                $mailClient->CharSet = 'UTF-8';
                $mailClient->isSMTP(true);
                $mailClient->Host = 'smtp.gmail.com';
                $mailClient->SMTPAuth = true;
                $mailClient->Username = 'jinsike123@gmail.com';    //Логин
                $mailClient->Password = 'zpsijcgkhhaueqph';                   //Пароль
                $mailClient->SMTPSecure = 'ssl';
                $mailClient->Port = 465;
                $mailClient->setFrom('verona@gmail.com', 'Verona Hotel');
                $mailClient->addAddress($data['the_email']);     // Add a recipient
                $mailClient->Subject = 'VERONA - Пансионат';
                $mailClient->Body = 'Бдагодарим вас ' . $data['the_name'] . ' за заявку на сайте verona.in.ua';
                $mailClient->send();


            }

		}


		return $data;
	}

	function show_form_errors( $data ) {
		if ( !empty( $data['errorString'] ) ) {
			echo '<ul id="formerrors">';
			echo $data['errorString'];
			echo '</ul>';
		}
	}

	function show_email_result( $data ) {
		if ( $data['emailSent'] === true ) {
			echo '<p id="formsuccess">' . 'Ваш запрос на бронирование был отправлен. Мы свяжемся с вами как можно скорее.' . '</p>';
		} elseif ( $data['emailSent'] === false && isset( $data['send_booking'] ) && empty( $data['errorString'] ) ) {
			echo '<p id="sendfail">' . 'При отправке электронного письма возникла проблема. Пожалуйста, попробуйте позже.' . '</p>';
		}
	}

	function selected( $selected, $current = true, $echo = true ) {
		if ( (string) $selected === (string) $current )
			$result = " selected='selected'";
		else
			$result = '';

		if ( $echo )
			echo $result;

		return $result;
	}

?>
