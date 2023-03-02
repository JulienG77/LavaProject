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

/* accueil/SwiperSlider.html.twig */
class __TwigTemplate_59724056b9e9aa2852fb79e826da81d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/SwiperSlider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/SwiperSlider.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"public/assets/css/Swiper.css\" class=\"rel stylesheet\">
    <link rel=\"stylesheet\" href=\" https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css\" class=\"rel stylesheet\">
    <title>SwiperSliderTest</title>
</head>


<body>
    <!------------------------------------------------>
    <!--- https://codepen.io/januaryofmine/pen/VRgEvV --->
    <!--------------------------------------------------->
    <div class=\"container\">
      <div class=\"heading\" style=\"text-align: center;color: #111111\">Scroll to see more</div>
      <div class=\"swiper-container\" style=\"display: flex;margin-top: 100px;width: 90%;height: 90%;position: absolute;z-index: 1;\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-1\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-2\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-3\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general wrap-effect-4\">
              <div class=\"gallery-wrap\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\" style=\"  background: rgb(231,231,231);
background: linear-gradient(90deg, rgba(231,231,231,1) 0%, rgba(182,182,182,1) 35%, rgba(136,136,136,1) 100%); \">
            <span id=\"MadeBy\" style=\"margin-left: 10%\">Made by</span>

            <a style=\"font-size: 18px;\" class=\"buttonFlame\" href=\"https://codepen.io/januaryofmine\" target=\"_blank\"><span>Januaryofmine</span></a>

            <span id=\"ThankYou\" style=\"color: #d5d5d5\"> .Thank You.</span>
          </div>
        </div>
      </div>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script>
  const swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    mousewheel: {
      enabled:false,
    },
    effect: 'cube',
    keyboard: {
      enabled: true,
      onlyInViewport: false
    }
  });
</script>
<script>
  var \$button = \$('.button');
  \$button.hover(function() {
    sin = setInterval(\$dotsShow, 800);
    return sin;
    function \$dotsShow() {
      var \$bp = \$button.position(),
              \$bt = \$bp.top,
              \$bl = \$bp.left,
              \$nl = \$bl  + Math.random() * 30,
              \$nl2 = \$bl - Math.random() *30,
              \$nt = \$bt -20 + Math.random() * 50,
              \$n2l = Math.random() * 300,
              \$n2t = Math.random() * 100,
              \$n3l = Math.random() * 300,
              \$n3t = Math.random() * 100;
      \$('div.page').append('<div class=\"dots\"></div>','<div class=\"dots2\"></div>');
      \$('div.dots').css({
        'top': \$nt,
        'left': \$nl
      }).animate({
        top: '-=' + \$n2t,
        left: '+=' + \$n2l,
        opacity: '0'
      }, 3000).queue(function() {
        \$(this).remove();
      })
      \$('div.dots2').css({
        'top': \$nt,
        'left': \$nl2
      }).animate({
        top: '-=' + \$n3t,
        left: '-=' + \$n3l,
        opacity: '0'
      }, 3000).queue(function() {
        \$(this).remove();
      })
    }
  }, function() {
    clearInterval(sin);
  });
</script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accueil/SwiperSlider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"public/assets/css/Swiper.css\" class=\"rel stylesheet\">
    <link rel=\"stylesheet\" href=\" https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css\" class=\"rel stylesheet\">
    <title>SwiperSliderTest</title>
</head>


<body>
    <!------------------------------------------------>
    <!--- https://codepen.io/januaryofmine/pen/VRgEvV --->
    <!--------------------------------------------------->
    <div class=\"container\">
      <div class=\"heading\" style=\"text-align: center;color: #111111\">Scroll to see more</div>
      <div class=\"swiper-container\" style=\"display: flex;margin-top: 100px;width: 90%;height: 90%;position: absolute;z-index: 1;\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-1\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-2\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general\">
              <div class=\"gallery-wrap wrap-effect-3\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"container-general wrap-effect-4\">
              <div class=\"gallery-wrap\">
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
                <div class=\"item\"></div>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\" style=\"  background: rgb(231,231,231);
background: linear-gradient(90deg, rgba(231,231,231,1) 0%, rgba(182,182,182,1) 35%, rgba(136,136,136,1) 100%); \">
            <span id=\"MadeBy\" style=\"margin-left: 10%\">Made by</span>

            <a style=\"font-size: 18px;\" class=\"buttonFlame\" href=\"https://codepen.io/januaryofmine\" target=\"_blank\"><span>Januaryofmine</span></a>

            <span id=\"ThankYou\" style=\"color: #d5d5d5\"> .Thank You.</span>
          </div>
        </div>
      </div>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script>
  const swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    mousewheel: {
      enabled:false,
    },
    effect: 'cube',
    keyboard: {
      enabled: true,
      onlyInViewport: false
    }
  });
</script>
<script>
  var \$button = \$('.button');
  \$button.hover(function() {
    sin = setInterval(\$dotsShow, 800);
    return sin;
    function \$dotsShow() {
      var \$bp = \$button.position(),
              \$bt = \$bp.top,
              \$bl = \$bp.left,
              \$nl = \$bl  + Math.random() * 30,
              \$nl2 = \$bl - Math.random() *30,
              \$nt = \$bt -20 + Math.random() * 50,
              \$n2l = Math.random() * 300,
              \$n2t = Math.random() * 100,
              \$n3l = Math.random() * 300,
              \$n3t = Math.random() * 100;
      \$('div.page').append('<div class=\"dots\"></div>','<div class=\"dots2\"></div>');
      \$('div.dots').css({
        'top': \$nt,
        'left': \$nl
      }).animate({
        top: '-=' + \$n2t,
        left: '+=' + \$n2l,
        opacity: '0'
      }, 3000).queue(function() {
        \$(this).remove();
      })
      \$('div.dots2').css({
        'top': \$nt,
        'left': \$nl2
      }).animate({
        top: '-=' + \$n3t,
        left: '-=' + \$n3l,
        opacity: '0'
      }, 3000).queue(function() {
        \$(this).remove();
      })
    }
  }, function() {
    clearInterval(sin);
  });
</script>
</body>
</html>
", "accueil/SwiperSlider.html.twig", "C:\\wamp64\\www\\lavaproject\\templates\\accueil\\SwiperSlider.html.twig");
    }
}
