<?php

/* crud/index.html.twig */
class __TwigTemplate_e5892489437712bd5ff042a00510b495ed265ca09305a37200ece2ead34d90c4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["parent_twig"]) || array_key_exists("parent_twig", $context) ? $context["parent_twig"] : (function () { throw new Twig_Error_Runtime('Variable "parent_twig" does not exist.', 1, $this->source); })()), "crud/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        // line 3
        $context["use_datatable"] = true;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
    <small>Vue d'ensemble</small>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        $this->loadTemplate("crud/index.html.twig", "crud/index.html.twig", 11, "1234402787")->display(array_merge($context, array("box_class" => "box-primary")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  70 => 10,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% set use_datatable = true %}

{% block content_header %}
    {{ title }}
    <small>Vue d'ensemble</small>
{% endblock %}

{% block content %}
    {% embed \"crud/box.html.twig\" with {'box_class': 'box-primary'}%}
        {% block boxheader %}
            {% if right_create == true %}
                <a class=\"btn btn-sm btn-success\" href=\"{{ path(route_new) }}\">
                    <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
            {% endif %}
        {% endblock %}
        {% block boxcontent %}
            <table class=\"table table-hover table-bordered table-striped datatable\">
                <thead>
                    <tr>
                        {% if displayActions == true %}
                            <th>Actions</th>
                        {% endif %}

                        {% for field in fields %}
                            {% if (field['label'] is not null) %}
                                {% set label = field['label'] %}
                            {% elseif (form_options[field['name']]['label'] is not null) %}
                                {% set label = form_options[field['name']]['label'] %}
                            {% else %}
                                {% set label = '' %}
                            {% endif %}
                            <th>{{ label }}</th>
                        {% endfor %}
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "crud/index.html.twig", "/home/jerome/Developpement/mariane/templates/crud/index.html.twig");
    }
}


/* crud/index.html.twig */
class __TwigTemplate_e5892489437712bd5ff042a00510b495ed265ca09305a37200ece2ead34d90c4_1234402787 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = $this->loadTemplate("crud/box.html.twig", "crud/index.html.twig", 11);
        $this->blocks = array(
            'boxheader' => array($this, 'block_boxheader'),
            'boxcontent' => array($this, 'block_boxcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_boxheader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxheader"));

        // line 13
        echo "            ";
        if (((isset($context["right_create"]) || array_key_exists("right_create", $context) ? $context["right_create"] : (function () { throw new Twig_Error_Runtime('Variable "right_create" does not exist.', 13, $this->source); })()) == true)) {
            // line 14
            echo "                <a class=\"btn btn-sm btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_new"]) || array_key_exists("route_new", $context) ? $context["route_new"] : (function () { throw new Twig_Error_Runtime('Variable "route_new" does not exist.', 14, $this->source); })()));
            echo "\">
                    <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
            ";
        }
        // line 17
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_boxcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        // line 19
        echo "            <table class=\"table table-hover table-bordered table-striped datatable\">
                <thead>
                    <tr>
                        ";
        // line 22
        if (((isset($context["displayActions"]) || array_key_exists("displayActions", $context) ? $context["displayActions"] : (function () { throw new Twig_Error_Runtime('Variable "displayActions" does not exist.', 22, $this->source); })()) == true)) {
            // line 23
            echo "                            <th>Actions</th>
                        ";
        }
        // line 25
        echo "
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 27
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["field"], "label", array(), "array"))) {
                // line 28
                echo "                                ";
                $context["label"] = twig_get_attribute($this->env, $this->source, $context["field"], "label", array(), "array");
                // line 29
                echo "                            ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_options"]) || array_key_exists("form_options", $context) ? $context["form_options"] : (function () { throw new Twig_Error_Runtime('Variable "form_options" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "name", array(), "array"), array(), "array"), "label", array(), "array"))) {
                // line 30
                echo "                                ";
                $context["label"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_options"]) || array_key_exists("form_options", $context) ? $context["form_options"] : (function () { throw new Twig_Error_Runtime('Variable "form_options" does not exist.', 30, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "name", array(), "array"), array(), "array"), "label", array(), "array");
                // line 31
                echo "                            ";
            } else {
                // line 32
                echo "                                ";
                $context["label"] = "";
                // line 33
                echo "                            ";
            }
            // line 34
            echo "                            <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "</th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 36,  271 => 34,  268 => 33,  265 => 32,  262 => 31,  259 => 30,  256 => 29,  253 => 28,  250 => 27,  246 => 26,  243 => 25,  239 => 23,  237 => 22,  232 => 19,  223 => 18,  213 => 17,  206 => 14,  203 => 13,  194 => 12,  79 => 11,  70 => 10,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% set use_datatable = true %}

{% block content_header %}
    {{ title }}
    <small>Vue d'ensemble</small>
{% endblock %}

{% block content %}
    {% embed \"crud/box.html.twig\" with {'box_class': 'box-primary'}%}
        {% block boxheader %}
            {% if right_create == true %}
                <a class=\"btn btn-sm btn-success\" href=\"{{ path(route_new) }}\">
                    <i class=\"fa fa-plus\"></i>&nbsp;Créer</a>
            {% endif %}
        {% endblock %}
        {% block boxcontent %}
            <table class=\"table table-hover table-bordered table-striped datatable\">
                <thead>
                    <tr>
                        {% if displayActions == true %}
                            <th>Actions</th>
                        {% endif %}

                        {% for field in fields %}
                            {% if (field['label'] is not null) %}
                                {% set label = field['label'] %}
                            {% elseif (form_options[field['name']]['label'] is not null) %}
                                {% set label = form_options[field['name']]['label'] %}
                            {% else %}
                                {% set label = '' %}
                            {% endif %}
                            <th>{{ label }}</th>
                        {% endfor %}
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "crud/index.html.twig", "/home/jerome/Developpement/mariane/templates/crud/index.html.twig");
    }
}
