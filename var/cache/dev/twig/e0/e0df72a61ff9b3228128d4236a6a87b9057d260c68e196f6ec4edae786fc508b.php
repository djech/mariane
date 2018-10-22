<?php

/* default/section/skill.html.twig */
class __TwigTemplate_85bc981ec0d6778ed0d7cab10d8223ce8da151b8c19ff564bd6fd4b4c40e502d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/skill.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/skill.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"skill\">
    <div class=\"container cc-experience\">
        <div class=\"h4 text-center mb-4 title\">Compétences</div>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 4, $this->source); })()), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 5
            echo "            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-experience-header\">
                            <div class=\"h5\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "nom", array()), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <p>";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["skill"], "description", array());
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/skill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  52 => 14,  44 => 9,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"skill\">
    <div class=\"container cc-experience\">
        <div class=\"h4 text-center mb-4 title\">Compétences</div>
        {% for skill in information.skills %}
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-3 bg-primary\" data-aos=\"fade-right\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body cc-experience-header\">
                            <div class=\"h5\">{{ skill.nom }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" data-aos=\"fade-left\" data-aos-offset=\"50\" data-aos-duration=\"500\">
                        <div class=\"card-body\">
                            <p>{{ skill.description|raw }}</p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>", "default/section/skill.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/skill.html.twig");
    }
}
