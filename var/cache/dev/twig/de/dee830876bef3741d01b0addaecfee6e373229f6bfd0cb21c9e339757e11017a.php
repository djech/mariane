<?php

/* default/section/experience.html.twig */
class __TwigTemplate_d2d8028982d6f488b0c8e57c248acb0a4700ad71a6df526236e656106e8934bd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/experience.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/experience.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"experience\">
    <div class=\"container cc-education\">
        <div class=\"h4 text-center mb-4 title\">Expériences professionelles</div>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 4, $this->source); })()), "experiences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 5
            echo "            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-education-header\">
                            <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "dateDebut", array()), "F Y"), "html", null, true);
            echo " - ";
            if ((null === twig_get_attribute($this->env, $this->source, $context["experience"], "dateFin", array()))) {
                echo "Aujourd'hui";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "dateFin", array()), "F Y"), "html", null, true);
            }
            echo "</p>
                            <div class=\"h5\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "lieu", array()), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <div class=\"h5\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "poste", array()), "html", null, true);
            echo "</div>
                            <p>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["experience"], "description", array());
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  66 => 16,  62 => 15,  54 => 10,  44 => 9,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"experience\">
    <div class=\"container cc-education\">
        <div class=\"h4 text-center mb-4 title\">Expériences professionelles</div>
        {% for experience in information.experiences %}
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-education-header\">
                            <p>{{ experience.dateDebut|date('F Y') }} - {% if experience.dateFin is null %}Aujourd'hui{% else %}{{ experience.dateFin|date('F Y') }}{% endif %}</p>
                            <div class=\"h5\">{{ experience.lieu }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <div class=\"h5\">{{ experience.poste }}</div>
                            <p>{{ experience.description|raw }}</p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
", "default/section/experience.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/experience.html.twig");
    }
}
