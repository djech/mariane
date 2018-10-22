<?php

/* default/section/profile.html.twig */
class __TwigTemplate_406b85a84e873541d3d815a151a1f2c5ef7bc393f2b5b248c4d3fe916dab140e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/profile.html.twig"));

        // line 1
        echo "<div class=\"profile-page\">
    <div class=\"wrapper\">
        <div class=\"page-header page-header-small\" filter-color=\"green\">
            <div class=\"page-header-image\" data-parallax=\"true\" style=\"background-image: url('build/images/cc-bg-1.jpg');\"></div>
            <div class=\"container\">
                <div class=\"content-center\">
                    <div class=\"cc-profile-image\"><a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/mariane_erard.jpg"), "html", null, true);
        echo "\" alt=\"Image\"/></a></div>
                    <div class=\"h2 title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 8, $this->source); })()), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 8, $this->source); })()), "nom", array())), "html", null, true);
        echo "</div>
                    <p class=\"category text-white\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 9, $this->source); })()), "description", array()), "html", null, true);
        echo "</p><a class=\"btn btn-primary smooth-scroll mr-2\" href=\"#contact\" data-aos=\"zoom-in\" data-aos-anchor=\"data-aos-anchor\">Engagez moi</a><a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/CV-ERARD-MARIANE-1.pdf"), "html", null, true);
        echo "\" data-aos=\"zoom-in\" data-aos-anchor=\"data-aos-anchor\">Télécharger CV</a>
                </div>
            </div>
            <div class=\"section\">
                <div class=\"container\">
                    <div class=\"button-container\">
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://www.facebook.com/mariane.erard\" rel=\"tooltip\" title=\"Facebook\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://twitter.com/Marian_erard?lang=fr\" rel=\"tooltip\" title=\"Twitter\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://www.instagram.com/marianerard/\" rel=\"tooltip\" title=\"Instagram\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"profile-page\">
    <div class=\"wrapper\">
        <div class=\"page-header page-header-small\" filter-color=\"green\">
            <div class=\"page-header-image\" data-parallax=\"true\" style=\"background-image: url('build/images/cc-bg-1.jpg');\"></div>
            <div class=\"container\">
                <div class=\"content-center\">
                    <div class=\"cc-profile-image\"><a href=\"#\"><img src=\"{{asset('build/images/mariane_erard.jpg')}}\" alt=\"Image\"/></a></div>
                    <div class=\"h2 title\">{{ information.prenom|capitalize }} {{ information.nom|upper }}</div>
                    <p class=\"category text-white\">{{ information.description }}</p><a class=\"btn btn-primary smooth-scroll mr-2\" href=\"#contact\" data-aos=\"zoom-in\" data-aos-anchor=\"data-aos-anchor\">Engagez moi</a><a class=\"btn btn-primary\" href=\"{{asset('build/images/CV-ERARD-MARIANE-1.pdf')}}\" data-aos=\"zoom-in\" data-aos-anchor=\"data-aos-anchor\">Télécharger CV</a>
                </div>
            </div>
            <div class=\"section\">
                <div class=\"container\">
                    <div class=\"button-container\">
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://www.facebook.com/mariane.erard\" rel=\"tooltip\" title=\"Facebook\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://twitter.com/Marian_erard?lang=fr\" rel=\"tooltip\" title=\"Twitter\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a class=\"btn btn-default btn-round btn-lg btn-icon\" href=\"https://www.instagram.com/marianerard/\" rel=\"tooltip\" title=\"Instagram\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "default/section/profile.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/profile.html.twig");
    }
}
