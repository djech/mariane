<?php

/* default/section/about.html.twig */
class __TwigTemplate_ed59db46cf74e9551fba1d55292e9db1e69d04f56e960b7794931a646cddb662 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/about.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"about\">
    <div class=\"container\">
        <div class=\"card\" data-aos=\"fade-up\" data-aos-offset=\"10\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"card-body\">
                        <div class=\"h4 mt-0 title\">À propos</div>
                        ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 8, $this->source); })()), "about", array()), "content", array());
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"card-body\">
                        <div class=\"h4 mt-0 title\">Information</div>
                        ";
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 14, $this->source); })()), "age", array()))) {
            // line 15
            echo "                            <div class=\"row\">
                                <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Age:</strong></div>
                                <div class=\"col-sm-8\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 17, $this->source); })()), "age", array()), "html", null, true);
            echo "</div>
                            </div>
                        ";
        }
        // line 20
        echo "                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 20, $this->source); })()), "email", array()))) {
            // line 21
            echo "                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Email:</strong></div>
                            <div class=\"col-sm-8\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 23, $this->source); })()), "email", array()), "html", null, true);
            echo "</div>
                        </div>
                        ";
        }
        // line 26
        echo "                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 26, $this->source); })()), "telephone", array()))) {
            // line 27
            echo "                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Téléphone:</strong></div>
                            <div class=\"col-sm-8\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 29, $this->source); })()), "telephone", array()), "html", null, true);
            echo "</div>
                        </div>
                        ";
        }
        // line 32
        echo "                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 32, $this->source); })()), "adresse", array()))) {
            // line 33
            echo "                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Adresse:</strong></div>
                            <div class=\"col-sm-8\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 35, $this->source); })()), "adresse", array()), "html", null, true);
            echo "</div>
                        </div>
                        ";
        }
        // line 38
        echo "                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 38, $this->source); })()), "langue", array()))) {
            // line 39
            echo "                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Langue:</strong></div>
                            <div class=\"col-sm-8\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 41, $this->source); })()), "langue", array()), "html", null, true);
            echo "</div>
                        </div>
                        ";
        }
        // line 44
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  105 => 41,  101 => 39,  98 => 38,  92 => 35,  88 => 33,  85 => 32,  79 => 29,  75 => 27,  72 => 26,  66 => 23,  62 => 21,  59 => 20,  53 => 17,  49 => 15,  47 => 14,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"about\">
    <div class=\"container\">
        <div class=\"card\" data-aos=\"fade-up\" data-aos-offset=\"10\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"card-body\">
                        <div class=\"h4 mt-0 title\">À propos</div>
                        {{ information.about.content|raw }}
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"card-body\">
                        <div class=\"h4 mt-0 title\">Information</div>
                        {% if information.age is not null %}
                            <div class=\"row\">
                                <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Age:</strong></div>
                                <div class=\"col-sm-8\">{{ information.age }}</div>
                            </div>
                        {% endif %}
                        {% if information.email is not null %}
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Email:</strong></div>
                            <div class=\"col-sm-8\">{{ information.email }}</div>
                        </div>
                        {% endif %}
                        {% if information.telephone is not null %}
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Téléphone:</strong></div>
                            <div class=\"col-sm-8\">{{ information.telephone }}</div>
                        </div>
                        {% endif %}
                        {% if information.adresse is not null %}
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Adresse:</strong></div>
                            <div class=\"col-sm-8\">{{ information.adresse }}</div>
                        </div>
                        {% endif %}
                        {% if information.langue is not null %}
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Langue:</strong></div>
                            <div class=\"col-sm-8\">{{ information.langue }}</div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "default/section/about.html.twig", "/Users/djech/Developpement/mariane/templates/default/section/about.html.twig");
    }
}
