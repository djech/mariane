<?php

/* crud/edit.html.twig */
class __TwigTemplate_4599b5ad5914e1ca4f073afaae49dfd0036309e798045ea864228a9c6f8b4370 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("crud/form.html.twig", "crud/edit.html.twig", 1);
        $this->blocks = array(
            'content_header_small' => array($this, 'block_content_header_small'),
            'buttons' => array($this, 'block_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/edit.html.twig"));

        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "__tostring", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 7, $this->source); })()), "__tostring", array()))))) {
            // line 8
            $context["delete_text"] = (("Voulez-vous vraiment supprimer \\\"" . twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 8, $this->source); })()))) . "\\\" ?");
        } else {
            // line 10
            $context["delete_text"] = "Voulez-vous vraiment supprimer ?";
        }
        // line 13
        if ( !twig_test_empty((isset($context["add_delete_texte"]) || array_key_exists("add_delete_texte", $context) ? $context["add_delete_texte"] : (function () { throw new Twig_Error_Runtime('Variable "add_delete_texte" does not exist.', 13, $this->source); })()))) {
            // line 14
            $context["delete_text"] = (((isset($context["delete_text"]) || array_key_exists("delete_text", $context) ? $context["delete_text"] : (function () { throw new Twig_Error_Runtime('Variable "delete_text" does not exist.', 14, $this->source); })()) . "<br />") . (isset($context["add_delete_texte"]) || array_key_exists("add_delete_texte", $context) ? $context["add_delete_texte"] : (function () { throw new Twig_Error_Runtime('Variable "add_delete_texte" does not exist.', 14, $this->source); })()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content_header_small($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_small"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_small"));

        // line 4
        echo "    Modifier
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_buttons($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttons"));

        // line 18
        echo "    ";
        $this->displayParentBlock("buttons", $context, $blocks);
        echo "
    ";
        // line 19
        if (((isset($context["right_delete"]) || array_key_exists("right_delete", $context) ? $context["right_delete"] : (function () { throw new Twig_Error_Runtime('Variable "right_delete" does not exist.', 19, $this->source); })()) == true)) {
            // line 20
            echo "        <div class=\"btn-group\">
            ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 21, $this->source); })()), 'form_start');
            echo "
            <button class=\"btn btn-sm btn-danger\" type=\"submit\" onclick='return confirm(\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["delete_text"]) || array_key_exists("delete_text", $context) ? $context["delete_text"] : (function () { throw new Twig_Error_Runtime('Variable "delete_text" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\", function(){ \$(\"form[name=\\\"form\\\"]\").submit(); });'>
                <i class=\"fa fa-trash\"></i>&nbsp;Supprimer</button>
            ";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 24, $this->source); })()), 'form_end');
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 22,  98 => 21,  95 => 20,  93 => 19,  88 => 18,  79 => 17,  68 => 4,  59 => 3,  49 => 1,  46 => 14,  44 => 13,  41 => 10,  38 => 8,  36 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"crud/form.html.twig\" %}

{% block content_header_small %}
    Modifier
{% endblock %}

{% if entity.__tostring is defined and entity.__tostring | trim is not empty %}
    {% set delete_text = 'Voulez-vous vraiment supprimer \\\\\"' ~ entity | escape ~ '\\\\\" ?' %}
{% else %}
    {% set delete_text = 'Voulez-vous vraiment supprimer ?' %}
{% endif %}

{% if add_delete_texte is not empty %}
    {% set delete_text = delete_text ~ '<br />' ~ add_delete_texte %}
{% endif %}

{% block buttons %}
    {{ parent() }}
    {% if right_delete == true %}
        <div class=\"btn-group\">
            {{ form_start(delete_form) }}
            <button class=\"btn btn-sm btn-danger\" type=\"submit\" onclick='return confirm(\"{{delete_text}}\", function(){ \$(\"form[name=\\\"form\\\"]\").submit(); });'>
                <i class=\"fa fa-trash\"></i>&nbsp;Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    {% endif %}
{% endblock %}
", "crud/edit.html.twig", "/home/jerome/Developpement/mariane/templates/crud/edit.html.twig");
    }
}
