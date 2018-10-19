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
                        <div class=\"row\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Age:</strong></div>
                            <div class=\"col-sm-8\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 16, $this->source); })()), "age", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Email:</strong></div>
                            <div class=\"col-sm-8\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Téléphone:</strong></div>
                            <div class=\"col-sm-8\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 24, $this->source); })()), "telephone", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Adresse:</strong></div>
                            <div class=\"col-sm-8\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 28, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Langue:</strong></div>
                            <div class=\"col-sm-8\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 32, $this->source); })()), "langue", array()), "html", null, true);
        echo "</div>
                        </div>
                    </div>
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
        return array (  77 => 32,  70 => 28,  63 => 24,  56 => 20,  49 => 16,  38 => 8,  29 => 1,);
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
                        <div class=\"row\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Age:</strong></div>
                            <div class=\"col-sm-8\">{{ information.age }}</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Email:</strong></div>
                            <div class=\"col-sm-8\">{{ information.email }}</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Téléphone:</strong></div>
                            <div class=\"col-sm-8\">{{ information.telephone }}</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Adresse:</strong></div>
                            <div class=\"col-sm-8\">{{ information.adresse }}</div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-4\"><strong class=\"text-uppercase\">Langue:</strong></div>
                            <div class=\"col-sm-8\">{{ information.langue }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "default/section/about.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/about.html.twig");
    }
}
