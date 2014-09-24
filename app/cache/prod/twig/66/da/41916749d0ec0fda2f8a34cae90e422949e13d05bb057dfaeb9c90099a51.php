<?php

/* KdvFrontBundle:Default:index.html.twig */
class __TwigTemplate_66da41916749d0ec0fda2f8a34cae90e422949e13d05bb057dfaeb9c90099a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "  <section id=\"main\" role=\"main\">

            <section id=\"hero\">
                <div class=\"row\">
                    <div class=\"large-10 large-centered column text-center\">
                        <div id=\"hero-message\" class=\"fadeInDown animated\">
                            <h1>Partenaire de votre developpement </h1>
                            <h4>Nous intervenons dans le conseil et developpement web sur mesure.<br/>
                                PHP / <b>Symfony2</b> / Zend - Mysql / Oracle</h4>
                            <a href=\"mailto:renault@karudev.fr\" class=\"button\">Etablir un devis</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"part\">
                <div class=\"row title\">
                    <div class=\"large-12 column\">
                        <h6>Nos prestations</h6>
                    </div>
                </div>

                <div class=\"row features spacy\">
                    <div class=\"large-4 column\">
                        <h4><i class=\"icon-lock\"></i> Audits</h4>
                        <p>
                            Vous êtes victime d'une attaque sur votre site web ?
                            Votre site est particulièrement lent ?
                            Nous vous proposons un audit permettant de cibler <b>vos failles de sécurité</b> <br/>
                            et les mauvaises pratiques de développements.

                        </p>
                    </div>

                    <div class=\"large-4 column\">
                        <h4><i class=\"icon-cog\"></i> Developpements Web</h4>
                        <p>
                            Expert en développement web, nous maitrisons les frameworks PHP comme <b>Symfony2</b>, Zend.
                            Sensible à la qualité du code, aux bonnes pratiques, nous sommes capables de mettre en oeuvre l'aspect métier
                            sous forme de langages informatiques.
                        </p>
                    </div>

                    <div class=\"large-4 column\">
                        <h4><i class=\"icon-comments\"></i> Conseils</h4>
                        <p>
                            Des consultants expérimentés vous assistent, accompagnent, <b>conseillent</b> sur votre stratégie de développements.
                            <br/>Ne laissez pas de place au harsard et faîtes nous confiance!
                        </p>
                    </div>
                </div>

                <div class=\"row features spacy\">
                    <div class=\"large-4 column\">
                        <h4 class=\"no-top-margin\"><i class=\"icon-list\"></i> Installations</h4>
                        <p>
                            Vous souhaitez déléguer l'installation de votre code source ?
                            Nous prenons en charge l'installation de vos sources, du e-commerce <b>Prestashop</b>, des différents CMS comme <b>Drupal</b> sur votre serveur web.
                        </p>
                    </div>

                    <div class=\"large-4 column\">

                        <h4 class=\"no-top-margin\"><i class=\"icon-flag\"></i> Maintenances</h4>
                        <p>
                            Vous souhaitez déléguer la maintenance de votre site ou application web ?
                            Nous établissons un périmètre d'intervention ensemble sur <b>les corrections de bugs</b> à effectuer.

                        </p>
                    </div>

                    <div class=\"large-4 column\">
                        <h4 class=\"no-top-margin\"><i class=\"icon-bookmark\"></i> Formations</h4>
                        <p>
                            Nos consultants vous <b>forment</b> sur les technologies PHP/Mysql, Symfony2, Zend, Jquery, Git...
                            et les bonnes pratiques de développements à acquérir.
                        </p>
                    </div>
                </div>

                <div class=\"row \">
                    <div class=\"large-12 column text-center\">
                        <a href=\"mailto:renault@karudev.fr\" class=\"button\">Etablir un devis</a>
                    </div>
                </div>
            </section>

            <section class=\"part\">
                <div class=\"row title\">
                    <div class=\"large-12 column\">
                        <h6>Type de prestation</h6>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"large-12 column\">
                        <div class=\"row\">
                            <div class=\"large-6 column\">
                                <ul class=\"pricing-table\">
                                    <li class=\"title\">Mission</li>
                                    <li class=\"price\">Tarif journalier</li>
                                    <li class=\"bullet-item\">Chef de projet <strong>Web</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>PHP</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>Symfony2</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>Zend</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>Mysql</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>PL/SQL Oracle</strong></li>
                                    <li class=\"bullet-item\">Développeur <strong>Javascript/JQuery</strong></li>
                                    <li class=\"bullet-item\">Intégrateur <strong>HTML5/CSS3</strong></li>
                                    <li class=\"cta-button\"><a class=\"button\" href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("company");
        echo "\">Voir les consultants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"large-6 column\">
                                <ul class=\"pricing-table highlight\">
                                    <li class=\"title\">Prestation au forfait</li>
                                    <li class=\"price\">Tarif sur devis</li>
                                    <li class=\"bullet-item\">Analyse de <strong>vos besoins</strong></li>
                                    <li class=\"bullet-item\">Rédaction <strong>des spécifications</strong></li>
                                    <li class=\"bullet-item\">Gestion <strong>de projets</strong></li>
                                    <li class=\"bullet-item\">Conseil <strong>architechture et développements</strong></li>
                                    <li class=\"bullet-item\">Réalisations <strong>des développements</strong></li>
                                    <li class=\"bullet-item\">Conception du <strong>webdesign</strong></li>
                                    <li class=\"bullet-item\">Documentation technique</li>
                                    <li class=\"cta-button\"><a class=\"button\" href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("company");
        echo "\">Voir les consultants</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class=\"part\">
                <div class=\"row title\">
                    <div class=\"large-12 column\">
                        <h6>Nos clients et collaborateurs</h6>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"large-12 column\">
                        <ul class=\"large-block-grid-6 customers\">
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("global/images/photos/customer6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

        </section>
";
    }

    public function getTemplateName()
    {
        return "KdvFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 174,  217 => 169,  209 => 164,  201 => 159,  193 => 154,  185 => 149,  160 => 127,  142 => 112,  31 => 3,  28 => 2,);
    }
}
