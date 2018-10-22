<?php

/* crud/filter.html.twig */
class __TwigTemplate_22347e2abc0672514f4db4e45c7241c89222ab62a7f20af2cc41c8e585c74945 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/filter.html.twig"));

        // line 12
        echo "
";
        // line 13
        $context["filters"] = $this;
        // line 14
        echo "
";
        // line 15
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->source); })()) == "DateType") &&  !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->source); })())))) {
            // line 16
            echo "
    ";
            // line 17
            echo $context["filters"]->macro_apply((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->source); })()), "date");
            echo "

";
        } elseif (((        // line 19
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 19, $this->source); })()) == "DateTimeType") &&  !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "
    ";
            // line 21
            echo $context["filters"]->macro_apply((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->source); })()), "datetime");
            echo "

";
        } elseif ((        // line 23
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 23, $this->source); })()) == "ChoiceType")) {
            // line 24
            echo "
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                if (($context["choice"] == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->source); })()))) {
                    // line 26
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
";
        } elseif ((((        // line 29
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 29, $this->source); })()) == "CollectionType") || ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 29, $this->source); })()) == true)) || twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 29, $this->source); })())))) {
            // line 30
            echo "
    ";
            // line 31
            echo twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 31, $this->source); })()), (isset($context["join_separator"]) || array_key_exists("join_separator", $context) ? $context["join_separator"] : (function () { throw new Twig_Error_Runtime('Variable "join_separator" does not exist.', 31, $this->source); })()));
            echo "

";
        } else {
            // line 34
            echo "
    ";
            // line 35
            echo $context["filters"]->macro_apply((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 35, $this->source); })()), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 35, $this->source); })()));
            echo "

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_apply($__value__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "apply"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "apply"));

            // line 2
            echo "    ";
            if (((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 2, $this->source); })()) == "date")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 4
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->source); })()) == "datetime")) {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 6
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 6, $this->source); })()) == "mailto")) {
                // line 7
                echo "        ";
                echo (((("<a href=\"mailto:" . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 7, $this->source); })())) . "\">") . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 7, $this->source); })())) . "</a>");
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "crud/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 9,  144 => 7,  142 => 6,  137 => 5,  135 => 4,  130 => 3,  127 => 2,  108 => 1,  94 => 35,  91 => 34,  85 => 31,  82 => 30,  80 => 29,  77 => 28,  67 => 26,  62 => 25,  59 => 24,  57 => 23,  52 => 21,  49 => 20,  47 => 19,  42 => 17,  39 => 16,  37 => 15,  34 => 14,  32 => 13,  29 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro apply(value, filter) %}
    {% if filter == 'date' %}
        {{ value | date('d/m/Y') }}
    {% elseif filter == 'datetime' %}
        {{ value | date('d/m/Y H:i:s') }}
    {% elseif filter == 'mailto' %}
        {{ ('<a href=\"mailto:' ~ value ~ '\">' ~ value ~ '</a>') | raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endmacro %}

{% import _self as filters %}

{% if type == 'DateType' and value is not null %}

    {{ filters.apply(value, 'date') }}

{% elseif type == 'DateTimeType' and value is not null %}

    {{ filters.apply(value, 'datetime') }}

{% elseif type == 'ChoiceType' %}

    {% for key, choice in choices if choice == value %}
        {{ key }}
    {% endfor %}

{% elseif type == 'CollectionType' or multiple == true or value is iterable %}

    {{ value | join(join_separator) | raw }}

{% else %}

    {{ filters.apply(value, filter) }}

{% endif %}
", "crud/filter.html.twig", "/home/jerome/Developpement/mariane/templates/crud/filter.html.twig");
    }
}
