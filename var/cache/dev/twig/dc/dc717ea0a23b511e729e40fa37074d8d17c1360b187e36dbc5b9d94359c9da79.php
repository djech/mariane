<?php

/* AdminLTEBundle:Breadcrumb:knp-breadcrumb.html.twig */
class __TwigTemplate_0abe12f581d558d2b48255292f8d8b4a58e110549bcd7f348dc52dcf9ecc6e86 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Breadcrumb:knp-breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Breadcrumb:knp-breadcrumb.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 1, $this->source); })()), "knp_menu", array()), "breadcrumb_menu", array())) {
            // line 2
            echo "    <ol class=\"breadcrumb\">
        ";
            // line 3
            $context["items"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->getBreadcrumbsArray(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 4
(isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 4, $this->source); })()), "knp_menu", array()), "breadcrumb_menu", array()));
            // line 6
            echo "
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 7, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "uri", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", array()), "html", null, true);
                echo "</a>
        </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ol>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Breadcrumb:knp-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  62 => 9,  57 => 8,  40 => 7,  37 => 6,  35 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin_lte_context.knp_menu.breadcrumb_menu %}
    <ol class=\"breadcrumb\">
        {% set items = knp_menu_get_breadcrumbs_array(
            admin_lte_context.knp_menu.breadcrumb_menu
        ) %}

    {% for item in items  %}
        <li class=\"{{ loop.last ? 'active' : '' }}\">
            <a href=\"{{ item.uri }}\">{{ item.label }}</a>
        </li>
    {% endfor %}
    </ol>
{% endif %}
", "AdminLTEBundle:Breadcrumb:knp-breadcrumb.html.twig", "/Users/djech/Developpement/mariane/vendor/kevinpapst/adminlte-bundle/Resources/views/Breadcrumb/knp-breadcrumb.html.twig");
    }
}
