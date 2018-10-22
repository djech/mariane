<?php

/* crud/action.html.twig */
class __TwigTemplate_ddf8bc3a5fa663ae6be66cb98ae3c354fac1b963f89761198a184df093d346c5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/action.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    ";
        // line 2
        if (((isset($context["right_view"]) || array_key_exists("right_view", $context) ? $context["right_view"] : (function () { throw new Twig_Error_Runtime('Variable "right_view" does not exist.', 2, $this->source); })()) == true)) {
            // line 3
            echo "    <a class=\"btn btn-sm btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_show"]) || array_key_exists("route_show", $context) ? $context["route_show"] : (function () { throw new Twig_Error_Runtime('Variable "route_show" does not exist.', 3, $this->source); })()), array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 3, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" title=\"Aperçu\">
        <i class=\"fa fa-eye\"></i>
    </a>
    ";
        }
        // line 7
        echo "    ";
        if (((isset($context["right_update"]) || array_key_exists("right_update", $context) ? $context["right_update"] : (function () { throw new Twig_Error_Runtime('Variable "right_update" does not exist.', 7, $this->source); })()) == true)) {
            // line 8
            echo "        <a class=\"btn btn-sm btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_edit"]) || array_key_exists("route_edit", $context) ? $context["route_edit"] : (function () { throw new Twig_Error_Runtime('Variable "route_edit" does not exist.', 8, $this->source); })()), array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 8, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" title=\"Modifier\">
            <i class=\"fa fa-pencil\"></i>
        </a>
    ";
        }
        // line 12
        echo "    ";
        if (((isset($context["use_copy"]) || array_key_exists("use_copy", $context) ? $context["use_copy"] : (function () { throw new Twig_Error_Runtime('Variable "use_copy" does not exist.', 12, $this->source); })()) == true)) {
            // line 13
            echo "    <a class=\"btn btn-sm btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_new"]) || array_key_exists("route_new", $context) ? $context["route_new"] : (function () { throw new Twig_Error_Runtime('Variable "route_new" does not exist.', 13, $this->source); })()), array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 13, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" title=\"Recopier et nouveau\">
        <i class=\"fa fa-copy\"></i>
    </a>
    ";
        }
        // line 17
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  56 => 13,  53 => 12,  45 => 8,  42 => 7,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn-group\">
    {% if right_view == true %}
    <a class=\"btn btn-sm btn-info\" href=\"{{ path(route_show, { 'id': entity.id }) }}\" title=\"Aperçu\">
        <i class=\"fa fa-eye\"></i>
    </a>
    {% endif %}
    {% if right_update == true %}
        <a class=\"btn btn-sm btn-warning\" href=\"{{ path(route_edit, { 'id': entity.id }) }}\" title=\"Modifier\">
            <i class=\"fa fa-pencil\"></i>
        </a>
    {% endif %}
    {% if use_copy == true %}
    <a class=\"btn btn-sm btn-warning\" href=\"{{ path(route_new, { 'id': entity.id }) }}\" title=\"Recopier et nouveau\">
        <i class=\"fa fa-copy\"></i>
    </a>
    {% endif %}
</div>
", "crud/action.html.twig", "/home/jerome/Developpement/mariane/templates/crud/action.html.twig");
    }
}
