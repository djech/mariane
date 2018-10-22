<?php

/* AdminLTEBundle:Sidebar:knp-menu.html.twig */
class __TwigTemplate_a8a0e7648824da7ef7e242a28a1593ed6e391a3ae03cd2a0c88aea55236be103 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Sidebar:knp-menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Sidebar:knp-menu.html.twig"));

        // line 1
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
(isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 2, $this->source); })()), "knp_menu", array()), "main_menu", array()), array("template" => "@AdminLTE/Partials/_menu.html.twig", "currentClass" => "active", "ancestorClass" => "active", "branch_class" => "treeview"));
        // line 8
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Sidebar:knp-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{
    knp_menu_render(admin_lte_context.knp_menu.main_menu, {
        \"template\"      : \"@AdminLTE/Partials/_menu.html.twig\",
        \"currentClass\"  : \"active\",
        \"ancestorClass\" : \"active\",
        \"branch_class\"  : \"treeview\"
    })
  }}

", "AdminLTEBundle:Sidebar:knp-menu.html.twig", "/home/jerome/Developpement/mariane/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/knp-menu.html.twig");
    }
}
