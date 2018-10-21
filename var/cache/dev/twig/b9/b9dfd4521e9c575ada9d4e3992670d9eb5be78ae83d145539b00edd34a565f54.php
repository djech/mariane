<?php

/* crud/show.html.twig */
class __TwigTemplate_184260615413984047f63c44aec5bc8577511704d9b5cfcb7f1c82a88a741718 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["parent_twig"]) || array_key_exists("parent_twig", $context) ? $context["parent_twig"] : (function () { throw new Twig_Error_Runtime('Variable "parent_twig" does not exist.', 1, $this->source); })()), "crud/show.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/show.html.twig"));

        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "__tostring", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 8, $this->source); })()), "__tostring", array()))))) {
            // line 9
            $context["delete_text"] = (("Voulez-vous vraiment supprimer \\\"" . twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 9, $this->source); })()))) . "\\\" ?");
        } else {
            // line 11
            $context["delete_text"] = "Voulez-vous vraiment supprimer ?";
        }
        // line 14
        if ( !twig_test_empty((isset($context["add_delete_texte"]) || array_key_exists("add_delete_texte", $context) ? $context["add_delete_texte"] : (function () { throw new Twig_Error_Runtime('Variable "add_delete_texte" does not exist.', 14, $this->source); })()))) {
            // line 15
            $context["delete_text"] = (((isset($context["delete_text"]) || array_key_exists("delete_text", $context) ? $context["delete_text"] : (function () { throw new Twig_Error_Runtime('Variable "delete_text" does not exist.', 15, $this->source); })()) . "<br />") . (isset($context["add_delete_texte"]) || array_key_exists("add_delete_texte", $context) ? $context["add_delete_texte"] : (function () { throw new Twig_Error_Runtime('Variable "add_delete_texte" does not exist.', 15, $this->source); })()));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
    <small>Aperçu</small>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"btn-group\">
        <a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">
            <i class=\"fa fa-reply\"></i>&nbsp;Retour</a>
        ";
        // line 22
        if ((((isset($context["right_create"]) || array_key_exists("right_create", $context) ? $context["right_create"] : (function () { throw new Twig_Error_Runtime('Variable "right_create" does not exist.', 22, $this->source); })()) == true) && ((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 22, $this->source); })()) == false))) {
            // line 23
            echo "            <a class=\"btn btn-sm btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_new"]) || array_key_exists("route_new", $context) ? $context["route_new"] : (function () { throw new Twig_Error_Runtime('Variable "route_new" does not exist.', 23, $this->source); })()));
            echo "\">
                <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
        ";
        }
        // line 26
        echo "        ";
        if (((isset($context["right_update"]) || array_key_exists("right_update", $context) ? $context["right_update"] : (function () { throw new Twig_Error_Runtime('Variable "right_update" does not exist.', 26, $this->source); })()) == true)) {
            // line 27
            echo "            <a class=\"btn btn-sm btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_edit"]) || array_key_exists("route_edit", $context) ? $context["route_edit"] : (function () { throw new Twig_Error_Runtime('Variable "route_edit" does not exist.', 27, $this->source); })()), array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 27, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-pencil\"></i>&nbsp;Modifier</a>
        ";
        }
        // line 30
        echo "    </div>
    ";
        // line 31
        if (((isset($context["right_delete"]) || array_key_exists("right_delete", $context) ? $context["right_delete"] : (function () { throw new Twig_Error_Runtime('Variable "right_delete" does not exist.', 31, $this->source); })()) == true)) {
            // line 32
            echo "        <div class=\"btn-group\">
            ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->source); })()), 'form_start');
            echo "
            <button class=\"btn btn-sm btn-danger\" type=\"submit\" onclick='return confirm(\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["delete_text"]) || array_key_exists("delete_text", $context) ? $context["delete_text"] : (function () { throw new Twig_Error_Runtime('Variable "delete_text" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\", function(){ \$(\"form[name=\\\"form\\\"]\").submit(); });'>
                <i class=\"fa fa-trash\"></i>&nbsp;Supprimer</button>
            ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 36, $this->source); })()), 'form_end');
            echo "
        </div>
    ";
        }
        // line 39
        echo "    <p></p>

    ";
        // line 41
        $this->loadTemplate("crud/show.html.twig", "crud/show.html.twig", 41, "1513315368")->display(array_merge($context, array("box_class" => "box-primary")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  137 => 39,  131 => 36,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  114 => 30,  107 => 27,  104 => 26,  97 => 23,  95 => 22,  90 => 19,  81 => 18,  67 => 4,  58 => 3,  48 => 1,  45 => 15,  43 => 14,  40 => 11,  37 => 9,  35 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% block content_header %}
    {{ title }}
    <small>Aperçu</small>
{% endblock %}

{% if entity.__tostring is defined and entity.__tostring | trim is not empty %}
    {% set delete_text = 'Voulez-vous vraiment supprimer \\\\\"' ~ entity | escape ~ '\\\\\" ?' %}
{% else %}
    {% set delete_text = 'Voulez-vous vraiment supprimer ?' %}
{% endif %}

{% if add_delete_texte is not empty %}
    {% set delete_text = delete_text ~ '<br />' ~ add_delete_texte %}
{% endif %}

{% block content %}
    <div class=\"btn-group\">
        <a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">
            <i class=\"fa fa-reply\"></i>&nbsp;Retour</a>
        {% if right_create == true and referer == false %}
            <a class=\"btn btn-sm btn-success\" href=\"{{ path(route_new) }}\">
                <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
        {% endif %}
        {% if right_update == true %}
            <a class=\"btn btn-sm btn-warning\" href=\"{{ path(route_edit, { 'id': entity.id}) }}\">
                <i class=\"fa fa-pencil\"></i>&nbsp;Modifier</a>
        {% endif %}
    </div>
    {% if right_delete == true %}
        <div class=\"btn-group\">
            {{ form_start(delete_form) }}
            <button class=\"btn btn-sm btn-danger\" type=\"submit\" onclick='return confirm(\"{{delete_text}}\", function(){ \$(\"form[name=\\\"form\\\"]\").submit(); });'>
                <i class=\"fa fa-trash\"></i>&nbsp;Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    {% endif %}
    <p></p>

    {% embed \"AcStrasbourgCrudBundle::box.html.twig\" with {'box_class': 'box-primary'}%}
        {% block boxcontent %}
            <table class=\"table table-hover table-condensed\">
                <tbody>
                    {# La vue show se base sur la liste des champs du formulaire #}
                    {% for key, field_options in form_options %}
                        {% if field_options['mapped'] is not empty %}
                            <tr>
                                <th>{{ field_options['label'] }}</th>

                                {# Appliquer différents filtres #}
                                {% set vars = {
                                    'type': field_options['type'],
                                    'multiple': field_options['multiple'],
                                    'choices': field_options['choices'],
                                    'filter': null,
                                    'value': attribute(entity, key),
                                    'join_separator': join_separator
                                } %}
                                <td>{% include 'AcStrasbourgCrudBundle:crud:filter.html.twig' with vars only %}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "crud/show.html.twig", "/Users/djech/Developpement/mariane/templates/crud/show.html.twig");
    }
}


/* crud/show.html.twig */
class __TwigTemplate_184260615413984047f63c44aec5bc8577511704d9b5cfcb7f1c82a88a741718_1513315368 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = $this->loadTemplate("AcStrasbourgCrudBundle::box.html.twig", "crud/show.html.twig", 41);
        $this->blocks = array(
            'boxcontent' => array($this, 'block_boxcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcStrasbourgCrudBundle::box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_boxcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        // line 43
        echo "            <table class=\"table table-hover table-condensed\">
                <tbody>
                    ";
        // line 46
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form_options"]) || array_key_exists("form_options", $context) ? $context["form_options"] : (function () { throw new Twig_Error_Runtime('Variable "form_options" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["field_options"]) {
            // line 47
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field_options"], "mapped", array(), "array"))) {
                // line 48
                echo "                            <tr>
                                <th>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_options"], "label", array(), "array"), "html", null, true);
                echo "</th>

                                ";
                // line 52
                echo "                                ";
                $context["vars"] = array("type" => twig_get_attribute($this->env, $this->source,                 // line 53
$context["field_options"], "type", array(), "array"), "multiple" => twig_get_attribute($this->env, $this->source,                 // line 54
$context["field_options"], "multiple", array(), "array"), "choices" => twig_get_attribute($this->env, $this->source,                 // line 55
$context["field_options"], "choices", array(), "array"), "filter" => null, "value" => twig_get_attribute($this->env, $this->source,                 // line 57
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 57, $this->source); })()), $context["key"]), "join_separator" =>                 // line 58
(isset($context["join_separator"]) || array_key_exists("join_separator", $context) ? $context["join_separator"] : (function () { throw new Twig_Error_Runtime('Variable "join_separator" does not exist.', 58, $this->source); })()));
                // line 60
                echo "                                <td>";
                $this->loadTemplate("AcStrasbourgCrudBundle:crud:filter.html.twig", "crud/show.html.twig", 60)->display((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 60, $this->source); })()));
                echo "</td>
                            </tr>
                        ";
            }
            // line 63
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field_options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 64,  324 => 63,  317 => 60,  315 => 58,  314 => 57,  313 => 55,  312 => 54,  311 => 53,  309 => 52,  304 => 49,  301 => 48,  298 => 47,  293 => 46,  289 => 43,  280 => 42,  141 => 41,  137 => 39,  131 => 36,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  114 => 30,  107 => 27,  104 => 26,  97 => 23,  95 => 22,  90 => 19,  81 => 18,  67 => 4,  58 => 3,  48 => 1,  45 => 15,  43 => 14,  40 => 11,  37 => 9,  35 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% block content_header %}
    {{ title }}
    <small>Aperçu</small>
{% endblock %}

{% if entity.__tostring is defined and entity.__tostring | trim is not empty %}
    {% set delete_text = 'Voulez-vous vraiment supprimer \\\\\"' ~ entity | escape ~ '\\\\\" ?' %}
{% else %}
    {% set delete_text = 'Voulez-vous vraiment supprimer ?' %}
{% endif %}

{% if add_delete_texte is not empty %}
    {% set delete_text = delete_text ~ '<br />' ~ add_delete_texte %}
{% endif %}

{% block content %}
    <div class=\"btn-group\">
        <a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">
            <i class=\"fa fa-reply\"></i>&nbsp;Retour</a>
        {% if right_create == true and referer == false %}
            <a class=\"btn btn-sm btn-success\" href=\"{{ path(route_new) }}\">
                <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
        {% endif %}
        {% if right_update == true %}
            <a class=\"btn btn-sm btn-warning\" href=\"{{ path(route_edit, { 'id': entity.id}) }}\">
                <i class=\"fa fa-pencil\"></i>&nbsp;Modifier</a>
        {% endif %}
    </div>
    {% if right_delete == true %}
        <div class=\"btn-group\">
            {{ form_start(delete_form) }}
            <button class=\"btn btn-sm btn-danger\" type=\"submit\" onclick='return confirm(\"{{delete_text}}\", function(){ \$(\"form[name=\\\"form\\\"]\").submit(); });'>
                <i class=\"fa fa-trash\"></i>&nbsp;Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    {% endif %}
    <p></p>

    {% embed \"AcStrasbourgCrudBundle::box.html.twig\" with {'box_class': 'box-primary'}%}
        {% block boxcontent %}
            <table class=\"table table-hover table-condensed\">
                <tbody>
                    {# La vue show se base sur la liste des champs du formulaire #}
                    {% for key, field_options in form_options %}
                        {% if field_options['mapped'] is not empty %}
                            <tr>
                                <th>{{ field_options['label'] }}</th>

                                {# Appliquer différents filtres #}
                                {% set vars = {
                                    'type': field_options['type'],
                                    'multiple': field_options['multiple'],
                                    'choices': field_options['choices'],
                                    'filter': null,
                                    'value': attribute(entity, key),
                                    'join_separator': join_separator
                                } %}
                                <td>{% include 'AcStrasbourgCrudBundle:crud:filter.html.twig' with vars only %}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "crud/show.html.twig", "/Users/djech/Developpement/mariane/templates/crud/show.html.twig");
    }
}
