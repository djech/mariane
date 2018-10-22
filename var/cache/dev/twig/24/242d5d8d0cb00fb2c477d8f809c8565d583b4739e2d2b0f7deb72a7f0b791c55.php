<?php

/* default/section/formation.html.twig */
class __TwigTemplate_e437f5d727bac497a059f80c92e8dfe3c7291bdcbd2cd81a84545a64ffeaac83 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/formation.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"formation\">
    <div class=\"container cc-education\">
        <div class=\"h4 text-center mb-4 title\">Formation</div>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 4, $this->source); })()), "formations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 5
            echo "            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-education-header\">
                            <div class=\"h5\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateDebut", array()), "Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateFin", array()), "Y"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <p class=\"category\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "lieu", array()), "html", null, true);
            echo "</p>
                            <p style=\"font-size: 25px;\"><b>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", array()), "html", null, true);
            echo "</b></p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  58 => 15,  54 => 14,  44 => 9,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"formation\">
    <div class=\"container cc-education\">
        <div class=\"h4 text-center mb-4 title\">Formation</div>
        {% for formation in information.formations %}
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-education-header\">
                            <div class=\"h5\">{{ formation.dateDebut|date('Y') }} - {{ formation.dateFin|date('Y') }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <p class=\"category\">{{ formation.lieu }}</p>
                            <p style=\"font-size: 25px;\"><b>{{ formation.nom }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
", "default/section/formation.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/formation.html.twig");
    }
}
