<?php

/* ::base.html.twig */
class __TwigTemplate_688aa5a891578dbceb1f1bfc04adf501183891a338dee9b49e81963eb6ede6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
    <!--<![endif]-->

    <head>

        <meta charset=\"UTF-8\" />
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />


        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <![endif]-->

        <meta content=\"1 days\" name=\"revisit-after\">
        <meta content=\"
              Karudev Informatique propose de prendre en charge vos projets web spécifiques, de faibles ou grandes complexités.
              Nous intervenons sur des prestations d'assistance technique dans le domaine du développement web auprès des agences web et entreprises sur Paris - Seine et marne - Haute Seine - Val de Marne - Seine-Saint-Denis - Guadeloupe - Martinique.\" name=\"description\">
        <meta content=\"Consultant Développeur Web,Freelance Php, Développeur web, Php, Symfony2, Zend Framework, Développement Web, Création de site web en guadeloupe, webmaster île de france , developpeur web île de france , freelance , webmaster indépendant , création site internet guadeloupe, web Guadeloupe, référencement guadeloupe, creation site internet guadeloupe, site web guadeloupe, création site internet guadeloupe, internet antilles, internet caraibes, informatique guadeloupe, site internet martinique, referencement martinique, referencement antilles., Guadeloupe, site internet guadeloupe, site web guadeloupe, creation site internet guadeloupe, guadeloupe site internet, internet antilles, referencement guadeloupe, referencement site guadeloupe, referencement site internet guadeloupe, site web guadeloupe , prestashop\" name=\"keywords\">
        <meta content=\"Karudev : Consultant en Développement Web, Développeur d'appliquations web Symfony2 / Zend Framework Paris et Dom-Tom\" name=\"Generator\">
        <meta content=\"Renault Dolyveen\" name=\"author\">
        <meta content=\"index, follow\" name=\"robots\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/css/filoxenia.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/css/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/css/custom.css"), "html", null, true);
        echo "\">
         ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/vendor/custom.modernizr.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>

 ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 76
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 225
        echo "




    </body>

</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Karudev Informatique : Partenaire de votre développement web";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "        <header class=\"contain-to-grid\">
            <div class=\"row\">
                <div class=\"large-12 column\">
                    <nav id=\"menu\" class=\"top-bar\">

                        <ul class=\"title-area\">
                            <li class=\"name\">
                                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                                </a>
                            </li>
                            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a>
                            </li>
                        </ul>

                        <section class=\"top-bar-section\">
                            <ul class=\"right\">
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("company");
        echo "\">LA SOCIETE</a>
                                </li>
                              
                                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("tech");
        echo "\">TECHNOLOGIES UTILISEES</a>
                                </li>
                                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("dev");
        echo "\">DEVELOPPEMENTS</a>
                                </li>
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("legal");
        echo "\">MENTIONS LEGALES</a>
                                </li>

                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
        </header>
";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "
    ";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "        <a id=\"back-top\" href=\"#\"><i class=\"icon-caret-up\"></i></a>
        <footer>
            <div class=\"row spacy\">
                <div class=\"large-4 column\">
                    <h4>A propros de nous</h4>
                    <p>
                        <b>Karudev Informatique</b> propose de prendre en charge vos projets web spécifiques, de faibles ou grandes complexités.<br/>

                        Nous intervenons sur des prestations d'assistance technique dans le domaine du développement web auprès des agences web et entreprises sur <b>Paris</b> - Seine et marne - Haute Seine - Val de Marne
                        - Seine-Saint-Denis - <b>Guadeloupe</b> - Martinique.
                    </p>

                    <!--  <ul class=\"large-block-grid-5 popup\">
                          <li>
                              <a href=\"images/photos/person1.jpg\">
                                  <img src=\"images/photos/person1_s.jpg\" alt=\"\">
                              </a>
                          </li>
                          <li>
                              <a href=\"images/photos/person2.jpg\">
                                  <img src=\"images/photos/person2_s.jpg\" alt=\"\">
                              </a>
                          </li>
                          <li>
                              <a href=\"images/photos/person3.jpg\">
                                  <img src=\"images/photos/person3_s.jpg\" alt=\"\">
                              </a>
                          </li>
                          <li>
                              <a href=\"images/photos/person4.jpg\">
                                  <img src=\"images/photos/person4_s.jpg\" alt=\"\">
                              </a>
                          </li>
                          <li>
                              <a href=\"images/photos/person5.jpg\">
                                  <img src=\"images/photos/person5_s.jpg\" alt=\"\">
                              </a>
                          </li>
                      </ul>-->
                </div>

                <div class=\"large-3 column\">
                    <h4>Prestations</h4>
                    <ul class=\"side-nav\">
                        <li><p>Développements Web</p>
                        </li>
                        <li><p>Audits</p>
                        </li>
                        <li><p>Conseils</p>
                        </li>
                        <li><p>Maintenances</p>
                        </li>
                        <li><p>Installations</p>
                        </li>
                        <li><p>Formations</p>
                        </li>

                    </ul>
                </div>

                <div class=\"large-5 column\">
                    <h4>Contact</h4>

                    <div class=\"row\">
                        <div class=\"small-3 column\">
                            <h6>Adresse:</h6>
                        </div>
                        <div class=\"small-9 column\">
                            <p>77680 Roissy en brie, France</p>
                            <p>97122 Baie-Mahault, Guadeloupe</p>
                        </div>
                    </div>

                    <!--<div class=\"row\">
                        <div class=\"small-3 column text\">
                            <h6>Phone:</h6>
                        </div>
                        <div class=\"small-9 column text\">
                            <p>+61 3 8376 6284
                                <br>+61 3 8376 6287</p>
                        </div>
                    </div>
                    -->
                    <div class=\"row\">
                        <div class=\"small-3 column text\">
                            <h6>Email:</h6>
                        </div>
                        <div class=\"small-9 column text\">
                            <p>
                                <a href=\"mailto:renault@karudev.fr\">renault@karudev.fr</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"large-12 column\">
                    <hr>
                </div>
            </div>

            <div class=\"row\">
                <p class=\"small-12 large-5 large-uncentered column copyright\">
                    Copyright &copy; 2008 - 2014 | <a href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("legal");
        echo "\">Karudev Informatique</a>
                </p>

                <p class=\"small-12 large-7 column social\">
                    <a href=\"mailto:renault@karudev.fr\"><i class=\"icon-envelope\"></i></a>
                    <a href=\"http://www.twitter.com/karudev\" target=\"_blank\"><i class=\"icon-twitter\"></i></a>
                    <a href=\"http://www.viadeo.com/profile/0021hc5qt4z2s0bt/\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a>
                    <a href=\"http://www.github.com/karudev\" target=\"_blank\"><i class=\"icon-github\"></i></a>
                    <a href=\"skype:drenault971?call\" target=\"_blank\"><i class=\"icon-skype\"></i></a>

                </p>
            </div>

        </footer>
";
    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        // line 201
        echo "        <!-- Javascript -->
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/vendor/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/foundation/foundation.section.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/filoxenia.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29879648-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 208,  343 => 207,  339 => 206,  335 => 205,  331 => 204,  327 => 203,  323 => 202,  320 => 201,  317 => 200,  298 => 185,  192 => 81,  189 => 80,  184 => 77,  181 => 76,  167 => 66,  162 => 64,  157 => 62,  151 => 59,  139 => 50,  135 => 49,  126 => 42,  123 => 41,  118 => 35,  112 => 12,  100 => 225,  97 => 200,  95 => 80,  92 => 79,  89 => 76,  87 => 41,  78 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  43 => 14,  38 => 12,  25 => 1,  225 => 174,  217 => 169,  209 => 164,  201 => 159,  193 => 154,  185 => 149,  160 => 127,  142 => 112,  31 => 3,  28 => 2,);
    }
}
