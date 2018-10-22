<?php

/* default/section/logiciel.html.twig */
class __TwigTemplate_935cbf2ede01c13b15662f784d11804d4872f9cdd82eb6e34f416049e398a61b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/logiciel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/logiciel.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"logiciels\">
    <div class=\"container\">
        <div class=\"h4 text-center mb-4 title\">Logiciels connus</div>
        <div class=\"card\" data-aos=\"fade-up\" data-aos-anchor-placement=\"top-bottom\">
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 7, $this->source); })()), "logiciels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["logiciel"]) {
            // line 8
            echo "                        <div class=\"col-md-6\">
                            <div class=\"progress-container progress-primary\"><span class=\"progress-badge\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logiciel"], "nom", array()), "html", null, true);
            echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-primary\" data-aos=\"progress-full\" data-aos-offset=\"10\" data-aos-duration=\"2000\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logiciel"], "pourcentage", array()), "html", null, true);
            echo "%;\"></div><span class=\"progress-value\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logiciel"], "pourcentage", array()), "html", null, true);
            echo "%</span>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logiciel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </div>
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
        return "default/section/logiciel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"logiciels\">
    <div class=\"container\">
        <div class=\"h4 text-center mb-4 title\">Logiciels connus</div>
        <div class=\"card\" data-aos=\"fade-up\" data-aos-anchor-placement=\"top-bottom\">
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for logiciel in information.logiciels %}
                        <div class=\"col-md-6\">
                            <div class=\"progress-container progress-primary\"><span class=\"progress-badge\">{{ logiciel.nom }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-primary\" data-aos=\"progress-full\" data-aos-offset=\"10\" data-aos-duration=\"2000\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ logiciel.pourcentage }}%;\"></div><span class=\"progress-value\">{{ logiciel.pourcentage }}%</span>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
", "default/section/logiciel.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/logiciel.html.twig");
    }
}
