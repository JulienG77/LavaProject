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

/* accueil/index.html.twig */
class __TwigTemplate_f1f35ea88b34b958b1dc82e2fc441974 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"zoom\">
       <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/MainWallpaper/orange.jpg"), "html", null, true);
        echo "\">
    </div>

    <h1> <span class=\"magic\"
                      style=\"
                font-family: 'Shantell Sans', cursive;
                z-index: 6;
                font-size:3.6vw;
                position: relative;
                min-height:8vh;
                max-height: 10vh;
                top: 65%;
                left: 5%;
                border-radius: 2vw;
                background-color: rgba(247,251,255,0.04);
                box-shadow: rgba(0,0,0,0.44) 4px 6px 2px;
                text-shadow: rgba(0,0,0,0.57) 1px 1px 2px\">

    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-text\">Lava Guitars ME Series</span>
    </span>
    </h1>
    <main role=\"main\">
        <div class=\"content\" style=\"width: 50%;height: 50%\">
            <article>
            <h2 style=\"margin-top: -20px;text-align: center;font-size: 4.4vh;font-weight: bold;text-shadow: rgba(13,13,13,0.4) 1px 1.5px\">Lava ME-3</h2>
            <p style=\"font-size: 2.4vh\">&ensp;La guitare intelligente signée LAVA ME est de retour dans une 3ème version encore plus innovante et futuriste que ses deux grandes soeurs.
                On vous dévoile tous les points importants à retenir sur la <span style=\"font-weight: bold\"> LAVA ME 3</span>, en vous précisant ce qui la différencie des modèles précédents.</p>
            <p style=\"text-align:center;font-size: 3.5vh;color:#4a5ca8;font-weight: bold;text-shadow: rgba(13,13,13,0.4) 1px 1.5px\">La LAVA ME 3, c’est quoi ?</p>
            <p style=\"font-size: 2.4vh;text-align: center\">
                &ensp;Avec son allure futuriste, cet objet doit interloquer ceux qui ne connaissent pas la marque.
                Est ce un instrument de musique ?<br>
                une guitare de design ? un objet d'art ?…<br><br>
                &ensp;Et bien, il s’agit de <span style=\"font-weight: bold\">la guitare intelligente la plus performante au monde.</span><br>
                Elle embarque <span style=\"font-weight: bold\">un panel de fonctionnalités ultra novatrices</span> avec <span style=\"font-weight: bold\"> + de 20 effets intégrés</span>,
                des outils de support, une aide à l’apprentissage,<br> <span style=\"font-weight: bold\">un equalizer</span>, etc.<br><br>
                &ensp;Le tout est conceptualisé dans un format compact et robuste, idéal pour les globe-trotters.
                Ses réglages poussés, sa richesse sonore et son confort de jeu nous ont séduit dès la première prise en main.</p>
            </article>
            <a id=\"lavamusicshop\" href=\"https://lavamusicfrance.com/produit/lava-me-3/?attribute_pa_modele=droitiere&attribute_pa_taille-lava-me-3=38&attribute_pa_bag-lava=space-bag&attribute_pa_couleur=lava-me-3-gris-sideral\" alt=\"LavaMusic.com\" target=\"_blank\">LavaMusicShop.com</a>
        </div>
    </main>

        <!--  BLOCS --->
            <div class=\"container\" id=\"containerBlocks\" style=\"margin-top: 2%;\">
                <div class=\"card-column column-0\">
                    <div class=\"card card-color-0\">
                        <div class=\"border\"></div>
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/81tB0vkLN2L._AC_SL1500_.jpg"), "html", null, true);
        echo "\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Performances en toutes circonstances.</h1>
                    </div>
                    <div class=\"card card-color-2\">
                        <div class=\"border\"></div>
                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/rck.jpg"), "html", null, true);
        echo "\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Une esthétique sans compromis.</h1>
                    </div>
                </div>
                <div class=\"card-column column-1\">
                    <div class=\"card card-color-1\">
                        <div class=\"border\"></div>
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/71mixhbCXuL.jpg"), "html", null, true);
        echo "\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Un déluge d'innovations techniques.</h1>
                    </div>
                    <div class=\"card card-color-3\">
                        <div class=\"border\"></div>
                        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/S6223217b0052457194103855678b9164o.jpg"), "html", null, true);
        echo "\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Vers une approche résolument moderne.</h1>
                    </div>
                </div>
            </div>
<!--- BLOCKS - Fullscreen article on click --->

        <div id=\"cover\" class=\"cover\"></div>

        <div id=\"open-content\" class=\"open-content\">
            <a href=\"#\" id=\"close-content\" class=\"close-content\">
                <span class=\"x-1\"></span><span class=\"x-2\"></span>
            </a>
            <img id=\"open-content-image\" src=\"\"/>
            <div class=\"text\" id=\"open-content-text\" style=\"font-size: 2.5rem\">
            </div>
        </div>

    <section>
    <div class=\"contSVG\" id=\"SVG1\">
    <div class=\"custom-shape-divider-bottom-1676640265\">
        <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
            <path d=\"M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z\" class=\"shape-fill\"></path>
        </svg>
    </div>
    </div>

    <div class=\"cont3\">
        <span>
            \"Le futur de la guitare.\"
        </span>
    </div>

        <div class=\"contSVG\" id=\"SVG2\">
            <div class=\"custom-shape-divider-top-1676639451\">
                <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
                    <path d=\"M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z\" class=\"shape-fill\"></path>
                </svg>
            </div>
        </div>
    </section>


    <section>
        <div class=\"mouse_scroll\">

            <div class=\"mouse\">
                <div class=\"wheel\"></div>
            </div>
            <div>
                <span class=\"m_scroll_arrows unu\"></span>
                <span class=\"m_scroll_arrows doi\"></span>
                <span class=\"m_scroll_arrows trei\"></span>
            </div>
        </div>
    </section>

    ";
        // line 145
        echo "    <div class=\"container\">
    ";
        // line 146
        $this->loadTemplate("accueil/SwiperSlider.html.twig", "accueil/index.html.twig", 146)->display($context);
        // line 147
        echo "    </div>


    <div class=\"grid\">
        <video class=\"cont4\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/videos/3.webm"), "html", null, true);
        echo "\" autoplay controls loop muted></video>
        <video class=\"cont4\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/videos/2.webm"), "html", null, true);
        echo "\" autoplay controls loop muted></video>
    </div>

    <div class=\"articles\">
        ";
        // line 157
        echo "        <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour
            calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que
            la mise en page est achevée.
        </p>
    </div>

    ";
        // line 163
        $this->loadTemplate("accueil/gmap.html.twig", "accueil/index.html.twig", 163)->display($context);
        // line 164
        echo "

    <!---  Script Zoom on Scroll --->
    <script>
        \$(window).scroll(function() {
            var scroll = \$(window).scrollTop();
            \$(\".zoom img\").css({
                transform: 'translate3d(-50%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/5)/100+')',
                //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
                \"-webkit-filter\": \"blur(\" + (scroll/200) + \"px)\",
                //filter: \"blur(\" + (scroll/200) + \"px)\"
            });
        });
    </script>
    <!--- FIN Script Zoom on Scroll --->

    <!--- Script Blocks Opening Fullscreen --->
    <script>
        // listing vars here so they're in the global scope
        var cards, nCards, cover, openContent, openContentText, pageIsOpen = false,
            openContentImage, closeContent, windowWidth, windowHeight, currentCard;

        // initiate the process
        init();

        function init() {
            resize();
            selectElements();
            attachListeners();
        }

        // select all the elements in the DOM that are going to be used
        function selectElements() {
            cards = document.getElementsByClassName('card'),
                nCards = cards.length,
                cover = document.getElementById('cover'),
                openContent = document.getElementById('open-content'),
                openContentText = document.getElementById('open-content-text'),
                openContentImage = document.getElementById('open-content-image')
            closeContent = document.getElementById('close-content');
        }

        /* Attaching three event listeners here:
          - a click event listener for each card
          - a click event listener to the close button
          - a resize event listener on the window
        */
        function attachListeners() {
            for (var i = 0; i < nCards; i++) {
                attachListenerToCard(i);
            }
            closeContent.addEventListener('click', onCloseClick);
            window.addEventListener('resize', resize);
        }

        function attachListenerToCard(i) {
            cards[i].addEventListener('click', function(e) {
                var card = getCardElement(e.target);
                onCardClick(card, i);
            })
        }

        /* When a card is clicked */
        function onCardClick(card, i) {
            // set the current card
            currentCard = card;
            // add the 'clicked' class to the card, so it animates out
            currentCard.className += ' clicked';
            // animate the card 'cover' after a 500ms delay
            setTimeout(function() {animateCoverUp(currentCard)}, 500);
            // animate out the other cards
            animateOtherCards(currentCard, true);
            // add the open class to the page content
            openContent.className += ' open';
        }

        /*
        * This effect is created by taking a separate 'cover' div, placing
        * it in the same position as the clicked card, and animating it to
        * become the background of the opened 'page'.
        * It looks like the card itself is animating in to the background,
        * but doing it this way is more performant (because the cover div is
        * absolutely positioned and has no children), and there's just less
        * having to deal with z-index and other elements in the card
        */
        function animateCoverUp(card) {
            // get the position of the clicked card
            var cardPosition = card.getBoundingClientRect();
            // get the style of the clicked card
            var cardStyle = getComputedStyle(card);
            setCoverPosition(cardPosition);
            setCoverColor(cardStyle);
            scaleCoverToFillWindow(cardPosition);
            // update the content of the opened page
            openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText;
            openContentImage.src = card.children[1].src;
            setTimeout(function() {
                // update the scroll position to 0 (so it is at the top of the 'opened' page)
                window.scroll(0, 0);
                // set page to open
                pageIsOpen = true;
            }, 300);
        }

        function animateCoverBack(card) {
            var cardPosition = card.getBoundingClientRect();
            // the original card may be in a different position, because of scrolling, so the cover position needs to be reset before scaling back down
            setCoverPosition(cardPosition);
            scaleCoverToFillWindow(cardPosition);
            // animate scale back to the card size and position
            cover.style.transform = 'scaleX('+1+') scaleY('+1+') translate3d('+(0)+'px, '+(0)+'px, 0px)';
            setTimeout(function() {
                // set content back to empty
                openContentText.innerHTML = '';
                openContentImage.src = '';
                // style the cover to 0x0 so it is hidden
                cover.style.width = '0px';
                cover.style.height = '0px';
                pageIsOpen = false;
                // remove the clicked class so the card animates back in
                currentCard.className = currentCard.className.replace(' clicked', '');
            }, 301);
        }

        function setCoverPosition(cardPosition) {
            // style the cover so it is in exactly the same position as the card
            cover.style.left = cardPosition.left + 'px';
            cover.style.top = cardPosition.top + 'px';
            cover.style.width = cardPosition.width + 'px';
            cover.style.height = cardPosition.height + 'px';
        }

        function setCoverColor(cardStyle) {
            // style the cover to be the same color as the card
            cover.style.backgroundColor = cardStyle.backgroundColor;
        }

        function scaleCoverToFillWindow(cardPosition) {
            // calculate the scale and position for the card to fill the page,
            var scaleX = windowWidth / cardPosition.width;
            var scaleY = windowHeight / cardPosition.height;
            var offsetX = (windowWidth / 2 - cardPosition.width / 2 - cardPosition.left) / scaleX;
            var offsetY = (windowHeight / 2 - cardPosition.height / 2 - cardPosition.top) / scaleY;
            // set the transform on the cover - it will animate because of the transition set on it in the CSS
            cover.style.transform = 'scaleX('+scaleX+') scaleY('+scaleY+') translate3d('+(offsetX)+'px, '+(offsetY)+'px, 0px)';
        }

        /* When the close is clicked */
        function onCloseClick() {
            // remove the open class so the page content animates out
            openContent.className = openContent.className.replace(' open', '');
            // animate the cover back to the original position card and size
            animateCoverBack(currentCard);
            // animate in other cards
            animateOtherCards(currentCard, false);
        }

        function animateOtherCards(card, out) {
            var delay = 100;
            for (var i = 0; i < nCards; i++) {
                // animate cards on a stagger, 1 each 100ms
                if (cards[i] === card) continue;
                if (out) animateOutCard(cards[i], delay);
                else animateInCard(cards[i], delay);
                delay += 100;
            }
        }

        // animations on individual cards (by adding/removing card names)
        function animateOutCard(card, delay) {
            setTimeout(function() {
                card.className += ' out';
            }, delay);
        }

        function animateInCard(card, delay) {
            setTimeout(function() {
                card.className = card.className.replace(' out', '');
            }, delay);
        }

        // this function searches up the DOM tree until it reaches the card element that has been clicked
        function getCardElement(el) {
            if (el.className.indexOf('card ') > -1) return el;
            else return getCardElement(el.parentElement);
        }

        // resize function - records the window width and height
        function resize() {
            if (pageIsOpen) {
                // update position of cover
                var cardPosition = currentCard.getBoundingClientRect();
                setCoverPosition(cardPosition);
                scaleCoverToFillWindow(cardPosition);
            }
            windowWidth = window.innerWidth;
            windowHeight = window.innerHeight;
        }

        var paragraphText = \"<p><span style='font-weight: bold'>&ensp;Avec son écran tactile et le système d’exploitation HILAVA extrêmement facile d’utilisation,\" +
            \" la technologie d’amplification acoustique FreeBoost 2.0, des matériaux et une technique de construction résolument moderne.<br><br></span> \" +
            \"La LAVA ME 3 concrétise le futur de la guitare.Plus légère, plus solide, plus de son, la table d’harmonie « AIRSONIC 2 » \" +
            \"en structure de nid d’abeille et fibres de carbone est un veritable bond en avant en acoustique structurelle.<br> \" +
            \"Elle ajoute +20% de basses fréquences, +20% de durabilité, +30% de rigidité par rapport à son prédécesseur.<br><br>\" +
            \"Le système HILAVA de la LAVA ME 3 est équipé d’une connexion Wi-Fi et Bluetooth ainsi que la synchronisation automatique \" +
            \"avec le cloud via l'application LAVA +  C’est le système d’exploitation de votre guitare…<br> \" +
            \"on sait que ça paraît fou mais avec entre autres un accordeur, un métronome, un enregistreur, des patterns rythmiques,\" +
            \" un Looper, une application d'apprentissage intégrée, un mode Live (configuration de presets personnels), une flopée d'effets intégrés réglables,\" +
            \" combinables et modulables à souhait, un equaliseur ultra précis et de nombreuses autres possibilités.<br><br>\" +
            \"<span style='font-weight: bold'> Vous n’aurez qu’à toucher l'écran pour vous accorder, lancer un rythme ou vous enregistrer directement depuis votre LAVA ME 3.</span><br><br>\" +
            \"D’ailleurs la guitare est aussi équipée d’un système de suppression du bruit ambiant qui lui permettra de vous enregistrer avec précision.<br>\" +
            \" Vous pourrez alors écouter directement vos créations depuis votre guitare (oui, oui vous avez bien lu !) \" +
            \"ou depuis une enceinte bluetooth et les réécouter/partager plus tard grâce à la synchronisation cloud !</p>\";

        var paragraphText2 = \"<p>Un looper dans une guitare !Pas besoin d’ordinateur, votre LAVA ME 3 est équipée pour la composition musicale en direct !\" +
            \" Choisissez un rythme (Pop, Rock, Hip hop, Trap…), enregistrez jusqu’à trois pistes par dessus et publiez votre création du bout des doigts sur l’application LAVA+ !\" +
            \" Chacune de vos pistes pourra être éditée de manière indépendante, vous pourrez modifier les volumes, les effets et avoir un rendu professionnel en quelques minutes ! </p>\";
    </script>
    <!--- FIN Script Blocks Opening Fullscreen --->

    <!--- SWIPER --->
    <script>
    const swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    mousewheel: {},
    effect: 'cube',
    keyboard: {
    enabled: true,
    onlyInViewport: false
    }
    });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 164,  273 => 163,  265 => 157,  258 => 152,  254 => 151,  248 => 147,  246 => 146,  243 => 145,  183 => 87,  175 => 82,  165 => 75,  157 => 70,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <div class=\"zoom\">
       <img src=\"{{ asset('assets/img/MainWallpaper/orange.jpg') }}\">
    </div>

    <h1> <span class=\"magic\"
                      style=\"
                font-family: 'Shantell Sans', cursive;
                z-index: 6;
                font-size:3.6vw;
                position: relative;
                min-height:8vh;
                max-height: 10vh;
                top: 65%;
                left: 5%;
                border-radius: 2vw;
                background-color: rgba(247,251,255,0.04);
                box-shadow: rgba(0,0,0,0.44) 4px 6px 2px;
                text-shadow: rgba(0,0,0,0.57) 1px 1px 2px\">

    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-star\">
      <svg viewBox=\"0 0 512 512\">
      <path d=\"M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z\" />
      </svg>
    </span>
    <span class=\"magic-text\">Lava Guitars ME Series</span>
    </span>
    </h1>
    <main role=\"main\">
        <div class=\"content\" style=\"width: 50%;height: 50%\">
            <article>
            <h2 style=\"margin-top: -20px;text-align: center;font-size: 4.4vh;font-weight: bold;text-shadow: rgba(13,13,13,0.4) 1px 1.5px\">Lava ME-3</h2>
            <p style=\"font-size: 2.4vh\">&ensp;La guitare intelligente signée LAVA ME est de retour dans une 3ème version encore plus innovante et futuriste que ses deux grandes soeurs.
                On vous dévoile tous les points importants à retenir sur la <span style=\"font-weight: bold\"> LAVA ME 3</span>, en vous précisant ce qui la différencie des modèles précédents.</p>
            <p style=\"text-align:center;font-size: 3.5vh;color:#4a5ca8;font-weight: bold;text-shadow: rgba(13,13,13,0.4) 1px 1.5px\">La LAVA ME 3, c’est quoi ?</p>
            <p style=\"font-size: 2.4vh;text-align: center\">
                &ensp;Avec son allure futuriste, cet objet doit interloquer ceux qui ne connaissent pas la marque.
                Est ce un instrument de musique ?<br>
                une guitare de design ? un objet d'art ?…<br><br>
                &ensp;Et bien, il s’agit de <span style=\"font-weight: bold\">la guitare intelligente la plus performante au monde.</span><br>
                Elle embarque <span style=\"font-weight: bold\">un panel de fonctionnalités ultra novatrices</span> avec <span style=\"font-weight: bold\"> + de 20 effets intégrés</span>,
                des outils de support, une aide à l’apprentissage,<br> <span style=\"font-weight: bold\">un equalizer</span>, etc.<br><br>
                &ensp;Le tout est conceptualisé dans un format compact et robuste, idéal pour les globe-trotters.
                Ses réglages poussés, sa richesse sonore et son confort de jeu nous ont séduit dès la première prise en main.</p>
            </article>
            <a id=\"lavamusicshop\" href=\"https://lavamusicfrance.com/produit/lava-me-3/?attribute_pa_modele=droitiere&attribute_pa_taille-lava-me-3=38&attribute_pa_bag-lava=space-bag&attribute_pa_couleur=lava-me-3-gris-sideral\" alt=\"LavaMusic.com\" target=\"_blank\">LavaMusicShop.com</a>
        </div>
    </main>

        <!--  BLOCS --->
            <div class=\"container\" id=\"containerBlocks\" style=\"margin-top: 2%;\">
                <div class=\"card-column column-0\">
                    <div class=\"card card-color-0\">
                        <div class=\"border\"></div>
                        <img src=\"{{ asset('assets/img/81tB0vkLN2L._AC_SL1500_.jpg') }}\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Performances en toutes circonstances.</h1>
                    </div>
                    <div class=\"card card-color-2\">
                        <div class=\"border\"></div>
                        <img src=\"{{ asset('assets/img/rck.jpg') }}\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Une esthétique sans compromis.</h1>
                    </div>
                </div>
                <div class=\"card-column column-1\">
                    <div class=\"card card-color-1\">
                        <div class=\"border\"></div>
                        <img src=\"{{ asset('assets/img/71mixhbCXuL.jpg') }}\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Un déluge d'innovations techniques.</h1>
                    </div>
                    <div class=\"card card-color-3\">
                        <div class=\"border\"></div>
                        <img src=\"{{ asset('assets/img/S6223217b0052457194103855678b9164o.jpg') }}\" />
                        <h1 style=\"color:white;text-shadow: black 4px 2px 2px\">Vers une approche résolument moderne.</h1>
                    </div>
                </div>
            </div>
<!--- BLOCKS - Fullscreen article on click --->

        <div id=\"cover\" class=\"cover\"></div>

        <div id=\"open-content\" class=\"open-content\">
            <a href=\"#\" id=\"close-content\" class=\"close-content\">
                <span class=\"x-1\"></span><span class=\"x-2\"></span>
            </a>
            <img id=\"open-content-image\" src=\"\"/>
            <div class=\"text\" id=\"open-content-text\" style=\"font-size: 2.5rem\">
            </div>
        </div>

    <section>
    <div class=\"contSVG\" id=\"SVG1\">
    <div class=\"custom-shape-divider-bottom-1676640265\">
        <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
            <path d=\"M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z\" class=\"shape-fill\"></path>
        </svg>
    </div>
    </div>

    <div class=\"cont3\">
        <span>
            \"Le futur de la guitare.\"
        </span>
    </div>

        <div class=\"contSVG\" id=\"SVG2\">
            <div class=\"custom-shape-divider-top-1676639451\">
                <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
                    <path d=\"M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z\" class=\"shape-fill\"></path>
                </svg>
            </div>
        </div>
    </section>


    <section>
        <div class=\"mouse_scroll\">

            <div class=\"mouse\">
                <div class=\"wheel\"></div>
            </div>
            <div>
                <span class=\"m_scroll_arrows unu\"></span>
                <span class=\"m_scroll_arrows doi\"></span>
                <span class=\"m_scroll_arrows trei\"></span>
            </div>
        </div>
    </section>

    {# SwiperSlider #}
    <div class=\"container\">
    {% include 'accueil/SwiperSlider.html.twig' %}
    </div>


    <div class=\"grid\">
        <video class=\"cont4\" src=\"{{ asset('assets/img/videos/3.webm') }}\" autoplay controls loop muted></video>
        <video class=\"cont4\" src=\"{{ asset('assets/img/videos/2.webm') }}\" autoplay controls loop muted></video>
    </div>

    <div class=\"articles\">
        {#    <div id=\"cardVideo\"> #}
        <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour
            calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que
            la mise en page est achevée.
        </p>
    </div>

    {% include 'accueil/gmap.html.twig' %}


    <!---  Script Zoom on Scroll --->
    <script>
        \$(window).scroll(function() {
            var scroll = \$(window).scrollTop();
            \$(\".zoom img\").css({
                transform: 'translate3d(-50%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/5)/100+')',
                //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
                \"-webkit-filter\": \"blur(\" + (scroll/200) + \"px)\",
                //filter: \"blur(\" + (scroll/200) + \"px)\"
            });
        });
    </script>
    <!--- FIN Script Zoom on Scroll --->

    <!--- Script Blocks Opening Fullscreen --->
    <script>
        // listing vars here so they're in the global scope
        var cards, nCards, cover, openContent, openContentText, pageIsOpen = false,
            openContentImage, closeContent, windowWidth, windowHeight, currentCard;

        // initiate the process
        init();

        function init() {
            resize();
            selectElements();
            attachListeners();
        }

        // select all the elements in the DOM that are going to be used
        function selectElements() {
            cards = document.getElementsByClassName('card'),
                nCards = cards.length,
                cover = document.getElementById('cover'),
                openContent = document.getElementById('open-content'),
                openContentText = document.getElementById('open-content-text'),
                openContentImage = document.getElementById('open-content-image')
            closeContent = document.getElementById('close-content');
        }

        /* Attaching three event listeners here:
          - a click event listener for each card
          - a click event listener to the close button
          - a resize event listener on the window
        */
        function attachListeners() {
            for (var i = 0; i < nCards; i++) {
                attachListenerToCard(i);
            }
            closeContent.addEventListener('click', onCloseClick);
            window.addEventListener('resize', resize);
        }

        function attachListenerToCard(i) {
            cards[i].addEventListener('click', function(e) {
                var card = getCardElement(e.target);
                onCardClick(card, i);
            })
        }

        /* When a card is clicked */
        function onCardClick(card, i) {
            // set the current card
            currentCard = card;
            // add the 'clicked' class to the card, so it animates out
            currentCard.className += ' clicked';
            // animate the card 'cover' after a 500ms delay
            setTimeout(function() {animateCoverUp(currentCard)}, 500);
            // animate out the other cards
            animateOtherCards(currentCard, true);
            // add the open class to the page content
            openContent.className += ' open';
        }

        /*
        * This effect is created by taking a separate 'cover' div, placing
        * it in the same position as the clicked card, and animating it to
        * become the background of the opened 'page'.
        * It looks like the card itself is animating in to the background,
        * but doing it this way is more performant (because the cover div is
        * absolutely positioned and has no children), and there's just less
        * having to deal with z-index and other elements in the card
        */
        function animateCoverUp(card) {
            // get the position of the clicked card
            var cardPosition = card.getBoundingClientRect();
            // get the style of the clicked card
            var cardStyle = getComputedStyle(card);
            setCoverPosition(cardPosition);
            setCoverColor(cardStyle);
            scaleCoverToFillWindow(cardPosition);
            // update the content of the opened page
            openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText;
            openContentImage.src = card.children[1].src;
            setTimeout(function() {
                // update the scroll position to 0 (so it is at the top of the 'opened' page)
                window.scroll(0, 0);
                // set page to open
                pageIsOpen = true;
            }, 300);
        }

        function animateCoverBack(card) {
            var cardPosition = card.getBoundingClientRect();
            // the original card may be in a different position, because of scrolling, so the cover position needs to be reset before scaling back down
            setCoverPosition(cardPosition);
            scaleCoverToFillWindow(cardPosition);
            // animate scale back to the card size and position
            cover.style.transform = 'scaleX('+1+') scaleY('+1+') translate3d('+(0)+'px, '+(0)+'px, 0px)';
            setTimeout(function() {
                // set content back to empty
                openContentText.innerHTML = '';
                openContentImage.src = '';
                // style the cover to 0x0 so it is hidden
                cover.style.width = '0px';
                cover.style.height = '0px';
                pageIsOpen = false;
                // remove the clicked class so the card animates back in
                currentCard.className = currentCard.className.replace(' clicked', '');
            }, 301);
        }

        function setCoverPosition(cardPosition) {
            // style the cover so it is in exactly the same position as the card
            cover.style.left = cardPosition.left + 'px';
            cover.style.top = cardPosition.top + 'px';
            cover.style.width = cardPosition.width + 'px';
            cover.style.height = cardPosition.height + 'px';
        }

        function setCoverColor(cardStyle) {
            // style the cover to be the same color as the card
            cover.style.backgroundColor = cardStyle.backgroundColor;
        }

        function scaleCoverToFillWindow(cardPosition) {
            // calculate the scale and position for the card to fill the page,
            var scaleX = windowWidth / cardPosition.width;
            var scaleY = windowHeight / cardPosition.height;
            var offsetX = (windowWidth / 2 - cardPosition.width / 2 - cardPosition.left) / scaleX;
            var offsetY = (windowHeight / 2 - cardPosition.height / 2 - cardPosition.top) / scaleY;
            // set the transform on the cover - it will animate because of the transition set on it in the CSS
            cover.style.transform = 'scaleX('+scaleX+') scaleY('+scaleY+') translate3d('+(offsetX)+'px, '+(offsetY)+'px, 0px)';
        }

        /* When the close is clicked */
        function onCloseClick() {
            // remove the open class so the page content animates out
            openContent.className = openContent.className.replace(' open', '');
            // animate the cover back to the original position card and size
            animateCoverBack(currentCard);
            // animate in other cards
            animateOtherCards(currentCard, false);
        }

        function animateOtherCards(card, out) {
            var delay = 100;
            for (var i = 0; i < nCards; i++) {
                // animate cards on a stagger, 1 each 100ms
                if (cards[i] === card) continue;
                if (out) animateOutCard(cards[i], delay);
                else animateInCard(cards[i], delay);
                delay += 100;
            }
        }

        // animations on individual cards (by adding/removing card names)
        function animateOutCard(card, delay) {
            setTimeout(function() {
                card.className += ' out';
            }, delay);
        }

        function animateInCard(card, delay) {
            setTimeout(function() {
                card.className = card.className.replace(' out', '');
            }, delay);
        }

        // this function searches up the DOM tree until it reaches the card element that has been clicked
        function getCardElement(el) {
            if (el.className.indexOf('card ') > -1) return el;
            else return getCardElement(el.parentElement);
        }

        // resize function - records the window width and height
        function resize() {
            if (pageIsOpen) {
                // update position of cover
                var cardPosition = currentCard.getBoundingClientRect();
                setCoverPosition(cardPosition);
                scaleCoverToFillWindow(cardPosition);
            }
            windowWidth = window.innerWidth;
            windowHeight = window.innerHeight;
        }

        var paragraphText = \"<p><span style='font-weight: bold'>&ensp;Avec son écran tactile et le système d’exploitation HILAVA extrêmement facile d’utilisation,\" +
            \" la technologie d’amplification acoustique FreeBoost 2.0, des matériaux et une technique de construction résolument moderne.<br><br></span> \" +
            \"La LAVA ME 3 concrétise le futur de la guitare.Plus légère, plus solide, plus de son, la table d’harmonie « AIRSONIC 2 » \" +
            \"en structure de nid d’abeille et fibres de carbone est un veritable bond en avant en acoustique structurelle.<br> \" +
            \"Elle ajoute +20% de basses fréquences, +20% de durabilité, +30% de rigidité par rapport à son prédécesseur.<br><br>\" +
            \"Le système HILAVA de la LAVA ME 3 est équipé d’une connexion Wi-Fi et Bluetooth ainsi que la synchronisation automatique \" +
            \"avec le cloud via l'application LAVA +  C’est le système d’exploitation de votre guitare…<br> \" +
            \"on sait que ça paraît fou mais avec entre autres un accordeur, un métronome, un enregistreur, des patterns rythmiques,\" +
            \" un Looper, une application d'apprentissage intégrée, un mode Live (configuration de presets personnels), une flopée d'effets intégrés réglables,\" +
            \" combinables et modulables à souhait, un equaliseur ultra précis et de nombreuses autres possibilités.<br><br>\" +
            \"<span style='font-weight: bold'> Vous n’aurez qu’à toucher l'écran pour vous accorder, lancer un rythme ou vous enregistrer directement depuis votre LAVA ME 3.</span><br><br>\" +
            \"D’ailleurs la guitare est aussi équipée d’un système de suppression du bruit ambiant qui lui permettra de vous enregistrer avec précision.<br>\" +
            \" Vous pourrez alors écouter directement vos créations depuis votre guitare (oui, oui vous avez bien lu !) \" +
            \"ou depuis une enceinte bluetooth et les réécouter/partager plus tard grâce à la synchronisation cloud !</p>\";

        var paragraphText2 = \"<p>Un looper dans une guitare !Pas besoin d’ordinateur, votre LAVA ME 3 est équipée pour la composition musicale en direct !\" +
            \" Choisissez un rythme (Pop, Rock, Hip hop, Trap…), enregistrez jusqu’à trois pistes par dessus et publiez votre création du bout des doigts sur l’application LAVA+ !\" +
            \" Chacune de vos pistes pourra être éditée de manière indépendante, vous pourrez modifier les volumes, les effets et avoir un rendu professionnel en quelques minutes ! </p>\";
    </script>
    <!--- FIN Script Blocks Opening Fullscreen --->

    <!--- SWIPER --->
    <script>
    const swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    mousewheel: {},
    effect: 'cube',
    keyboard: {
    enabled: true,
    onlyInViewport: false
    }
    });
    </script>
{% endblock %}

", "accueil/index.html.twig", "C:\\wamp64\\www\\lavaproject\\templates\\accueil\\index.html.twig");
    }
}
