<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front.html.twig */
class __TwigTemplate_25ba351366e24ddddad21f09d2584a11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"DJoz Template\">
    <meta name=\"keywords\" content=\"DJoz, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>DJoz | Template</title>
      ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
</head>


    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"header__logo\">
                          <a href=\"./index.html\"><img src=\"fontend/img/log1.png\" alt=\"\"width=\"55\" height=\"55\"></a>
                          <span style=\"font-size: 20px; color: white;\">Day Event</span>
                    </div>
                </div>
                <div class=\"col-lg-10 col-md-10\">
                    <div class=\"header__nav\">
                        <nav class=\"header__menu mobile-menu\">
                            <ul>
                                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                                
                                <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                        <div class=\"header__right__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class=\"hero spad set-bg\" data-setbg=\"frontend/img/hero-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"hero__text\">
                        <span>New single</span>
                        <h1>Feel the heart beats</h1>
                        <p>Vous pouvez assister à des evenements,<br />
                           acheter ou vendre des instruments.</p>
                        <a href=\"https://www.youtube.com/watch?v=K4DyBUG242c\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"linear__icon\">
            <i class=\"fa fa-angle-double-down\"></i>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
    <section class=\"event spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"event__slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"frontend/img/events/event-1.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"frontend/img/events/event-2.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"fontend/img/events/event-3.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"img/events/event-2.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- About Section Begin -->
    <section class=\"about spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"about__pic\">
                        <img src=\"img/about/about.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"about__text\">
                        <div class=\"section-title\">
                            <h2>DJ Alexandra Rud</h2>
                            <h1>About me</h1>
                        </div>
                        <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                            from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                            enough to sustain.</p>
                        <a href=\"#\" class=\"primary-btn\">CONTACT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class=\"services\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"services__left set-bg\" data-setbg=\"img/services/service-left.jpg\">
                        <a href=\"https://www.youtube.com/watch?v=JGwWNGJdvx8\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-6 p-0\">
                    <div class=\"row services__list\">
                        <div class=\"col-lg-6 p-0 order-lg-1 col-md-6 order-md-1\">
                            <div class=\"service__item deep-bg\">
                                <img src=\"/img/services/service-1.png\" alt=\"\">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-2 col-md-6 order-md-2\">
                            <div class=\"service__item\">
                                <img src=\"img/services/service-2.png\" alt=\"\">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-4 col-md-6 order-md-4\">
                            <div class=\"service__item deep-bg\">
                                <img src=\"img/services/service-4.png\" alt=\"\">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-3 col-md-6 order-md-3\">
                            <div class=\"service__item\">
                                <img src=\"img/services/service-3.png\" alt=\"\">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Track Section Begin -->
    <section class=\"track spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"section-title\">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"track__all\">
                        <a href=\"#\" class=\"primary-btn border-btn\">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-7 p-0\">
                    <div class=\"track__content nice-scroll\">
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_1\"
                                data-url=\"music-files/1.mp3\"></div>
                            <div class=\"jp-audio jp_container_1\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_2\"
                                data-url=\"music-files/2.mp3\"></div>
                            <div class=\"jp-audio jp_container_2\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_3\"
                                data-url=\"music-files/3.mp3\"></div>
                            <div class=\"jp-audio jp_container_3\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_4\"
                                data-url=\"music-files/4.mp3\"></div>
                            <div class=\"jp-audio jp_container_4\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_5\"
                                data-url=\"music-files/5.mp3\"></div>
                            <div class=\"jp-audio jp_container_5\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_6\"
                                data-url=\"music-files/6.mp3\"></div>
                            <div class=\"jp-audio jp_container_6\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 p-0\">
                    <div class=\"track__pic\">
                        <img src=\"fontend/img/track-right.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Section End -->

    <!-- Youtube Section Begin -->
    <section class=\"youtube spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <h2>Youtube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-1.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-2.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-3.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>Dimitri Vegas, Steve Aoki & Like Mike’s “3 Are Legend”</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube Section End -->

    <!-- Countdown Section Begin -->
    <section class=\"countdown spad set-bg\" data-setbg=\"img/countdown-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"countdown__text\">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class=\"countdown__timer\" id=\"countdown-time\">
                        <div class=\"countdown__item\">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class=\"buy__tickets\">
                        <a href=\"#\" class=\"primary-btn\">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer spad set-bg\" data-setbg=\"img/footer-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer__address\">
                        <ul>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-1 col-md-6\">
                    <div class=\"footer__social\">
                        <h2>DJoz</h2>
                        <div class=\"footer__social__links\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-6\">
                    <div class=\"footer__newslatter\">
                        <h4>Stay With me</h4>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><i class=\"fa fa-send-o\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->
 ";
        // line 605
        $this->displayBlock('javascripts', $context, $blocks);
        // line 621
        echo "

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <!-- Google Font -->
     <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap"), "html", null, true);
        echo "\"rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/nowfont.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/rockville.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 605
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 606
        echo "    <!-- Js Plugins -->
    <script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Music Plugin -->
    <script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jquery.jplayer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/jplayerInit.js"), "html", null, true);
        echo "\"></script>
       ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 619,  771 => 618,  765 => 615,  761 => 614,  757 => 613,  753 => 612,  749 => 611,  745 => 610,  741 => 609,  737 => 608,  733 => 607,  730 => 606,  720 => 605,  708 => 25,  704 => 24,  700 => 23,  696 => 22,  692 => 21,  688 => 20,  684 => 19,  680 => 18,  676 => 17,  670 => 14,  667 => 13,  657 => 12,  645 => 621,  643 => 605,  87 => 52,  60 => 27,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"DJoz Template\">
    <meta name=\"keywords\" content=\"DJoz, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>DJoz | Template</title>
      {% block stylesheets %}
    <!-- Google Font -->
     <link href=\"{{ asset ('https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap')}}\"rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/barfiller.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/nowfont.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/rockville.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset ('frontend/css/style.css')}}\" type=\"text/css\">
  {% endblock %}

</head>


    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
                    <div class=\"header__logo\">
                          <a href=\"./index.html\"><img src=\"fontend/img/log1.png\" alt=\"\"width=\"55\" height=\"55\"></a>
                          <span style=\"font-size: 20px; color: white;\">Day Event</span>
                    </div>
                </div>
                <div class=\"col-lg-10 col-md-10\">
                    <div class=\"header__nav\">
                        <nav class=\"header__menu mobile-menu\">
                            <ul>
                                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                                
                                <li><a href=\"{{path('app_reclamation_contact')}}\">Contact</a></li>
                            </ul>
                        </nav>
                        <div class=\"header__right__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class=\"hero spad set-bg\" data-setbg=\"frontend/img/hero-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"hero__text\">
                        <span>New single</span>
                        <h1>Feel the heart beats</h1>
                        <p>Vous pouvez assister à des evenements,<br />
                           acheter ou vendre des instruments.</p>
                        <a href=\"https://www.youtube.com/watch?v=K4DyBUG242c\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"linear__icon\">
            <i class=\"fa fa-angle-double-down\"></i>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
    <section class=\"event spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"event__slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"frontend/img/events/event-1.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"frontend/img/events/event-2.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"fontend/img/events/event-3.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"event__item\">
                            <div class=\"event__item__pic set-bg\" data-setbg=\"img/events/event-2.jpg\">
                                <div class=\"tag-date\">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"event__item__text\">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class=\"fa fa-map-marker\"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- About Section Begin -->
    <section class=\"about spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"about__pic\">
                        <img src=\"img/about/about.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"about__text\">
                        <div class=\"section-title\">
                            <h2>DJ Alexandra Rud</h2>
                            <h1>About me</h1>
                        </div>
                        <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                            from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                            enough to sustain.</p>
                        <a href=\"#\" class=\"primary-btn\">CONTACT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class=\"services\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"services__left set-bg\" data-setbg=\"img/services/service-left.jpg\">
                        <a href=\"https://www.youtube.com/watch?v=JGwWNGJdvx8\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-6 p-0\">
                    <div class=\"row services__list\">
                        <div class=\"col-lg-6 p-0 order-lg-1 col-md-6 order-md-1\">
                            <div class=\"service__item deep-bg\">
                                <img src=\"/img/services/service-1.png\" alt=\"\">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-2 col-md-6 order-md-2\">
                            <div class=\"service__item\">
                                <img src=\"img/services/service-2.png\" alt=\"\">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-4 col-md-6 order-md-4\">
                            <div class=\"service__item deep-bg\">
                                <img src=\"img/services/service-4.png\" alt=\"\">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 p-0 order-lg-3 col-md-6 order-md-3\">
                            <div class=\"service__item\">
                                <img src=\"img/services/service-3.png\" alt=\"\">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Track Section Begin -->
    <section class=\"track spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"section-title\">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"track__all\">
                        <a href=\"#\" class=\"primary-btn border-btn\">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-7 p-0\">
                    <div class=\"track__content nice-scroll\">
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_1\"
                                data-url=\"music-files/1.mp3\"></div>
                            <div class=\"jp-audio jp_container_1\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_2\"
                                data-url=\"music-files/2.mp3\"></div>
                            <div class=\"jp-audio jp_container_2\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_3\"
                                data-url=\"music-files/3.mp3\"></div>
                            <div class=\"jp-audio jp_container_3\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_4\"
                                data-url=\"music-files/4.mp3\"></div>
                            <div class=\"jp-audio jp_container_4\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_5\"
                                data-url=\"music-files/5.mp3\"></div>
                            <div class=\"jp-audio jp_container_5\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_player_container\">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class=\"jp-jplayer jplayer\" data-ancestor=\".jp_container_6\"
                                data-url=\"music-files/6.mp3\"></div>
                            <div class=\"jp-audio jp_container_6\" role=\"application\" aria-label=\"media player\">
                                <div class=\"jp-gui jp-interface\">
                                    <!-- Player Controls -->
                                    <div class=\"player_controls_box\">
                                        <button class=\"jp-play player_button\" tabindex=\"0\"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class=\"player_bars\">
                                        <div class=\"jp-progress\">
                                            <div class=\"jp-seek-bar\">
                                                <div>
                                                    <div class=\"jp-play-bar\">
                                                        <div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"jp-duration ml-auto\" role=\"timer\" aria-label=\"duration\">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class=\"jp-volume-controls\">
                                        <button class=\"jp-mute\" tabindex=\"0\"><i
                                                class=\"fa fa-volume-down\"></i></button>
                                        <div class=\"jp-volume-bar\">
                                            <div class=\"jp-volume-bar-value\" style=\"width: 0%;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 p-0\">
                    <div class=\"track__pic\">
                        <img src=\"fontend/img/track-right.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Section End -->

    <!-- Youtube Section Begin -->
    <section class=\"youtube spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <h2>Youtube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-1.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-2.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"youtube__item\">
                        <div class=\"youtube__item__pic set-bg\" data-setbg=\"img/youtube/youtube-3.jpg\">
                            <a href=\"https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1\" class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <div class=\"youtube__item__text\">
                            <h4>Dimitri Vegas, Steve Aoki & Like Mike’s “3 Are Legend”</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube Section End -->

    <!-- Countdown Section Begin -->
    <section class=\"countdown spad set-bg\" data-setbg=\"img/countdown-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"countdown__text\">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class=\"countdown__timer\" id=\"countdown-time\">
                        <div class=\"countdown__item\">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class=\"buy__tickets\">
                        <a href=\"#\" class=\"primary-btn\">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer spad set-bg\" data-setbg=\"img/footer-bg.png\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer__address\">
                        <ul>
                            <li>
                                <i class=\"fa fa-phone\"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-1 col-md-6\">
                    <div class=\"footer__social\">
                        <h2>DJoz</h2>
                        <div class=\"footer__social__links\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-6\">
                    <div class=\"footer__newslatter\">
                        <h4>Stay With me</h4>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><i class=\"fa fa-send-o\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->
 {% block javascripts %}
    <!-- Js Plugins -->
    <script src=\"{{ asset ('frontend/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.nicescroll.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.barfiller.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.countdown.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/main.js')}}\"></script>

    <!-- Music Plugin -->
    <script src=\"{{ asset ('frontend/js/jquery.jplayer.min.js')}}\"></script>
    <script src=\"{{ asset ('frontend/js/jplayerInit.js')}}\"></script>
       {% endblock %}


</html>", "front.html.twig", "C:\\Users\\user\\Desktop\\slimweb\\templates\\front.html.twig");
    }
}
