<?php

/* crud/form.html.twig */
class __TwigTemplate_e483ec27dd6c983f02273a2380b891272512092bd18bd59df40e489efc9e5cd0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content_header_small' => array($this, 'block_content_header_small'),
            'content' => array($this, 'block_content'),
            'buttons' => array($this, 'block_buttons'),
            'tab' => array($this, 'block_tab'),
            'tab_row' => array($this, 'block_tab_row'),
            'box_form' => array($this, 'block_box_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["parent_twig"]) || array_key_exists("parent_twig", $context) ? $context["parent_twig"] : (function () { throw new Twig_Error_Runtime('Variable "parent_twig" does not exist.', 1, $this->source); })()), "crud/form.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes_twig"]) || array_key_exists("themes_twig", $context) ? $context["themes_twig"] : (function () { throw new Twig_Error_Runtime('Variable "themes_twig" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["twig"]) {
            // line 4
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), array(0 => $context["twig"]), true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['twig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
    <small>
        ";
        // line 10
        $this->displayBlock('content_header_small', $context, $blocks);
        // line 11
        echo "    </small>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content_header_small($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_small"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_small"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    ";
        $this->displayBlock('buttons', $context, $blocks);
        // line 23
        echo "
    <p></p>

    ";
        // line 26
        if ( !twig_test_empty((isset($context["tab_fields"]) || array_key_exists("tab_fields", $context) ? $context["tab_fields"] : (function () { throw new Twig_Error_Runtime('Variable "tab_fields" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "
        ";
            // line 31
            echo "        ";
            ob_start();
            // line 32
            echo "        ";
            $this->displayBlock('tab', $context, $blocks);
            // line 39
            echo "        ";
            $context["override_tab_tabs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 44
            echo "        ";
            ob_start();
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab_fields"]) || array_key_exists("tab_fields", $context) ? $context["tab_fields"] : (function () { throw new Twig_Error_Runtime('Variable "tab_fields" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["tab_number"] => $context["tab_desc"]) {
                // line 46
                echo "            <div class=\"tab-pane ";
                echo ((($context["tab_number"] == 0)) ? ("active") : (""));
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $context["tab_number"], "html", null, true);
                echo "\">
                <div class=\"row\">
                    ";
                // line 48
                $context["columnCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_desc"], "columns", array(), "array"));
                // line 49
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab_desc"], "columns", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
                    // line 50
                    echo "
                        <div class=\"col-sm-";
                    // line 51
                    echo twig_escape_filter($this->env, (12 / (isset($context["columnCount"]) || array_key_exists("columnCount", $context) ? $context["columnCount"] : (function () { throw new Twig_Error_Runtime('Variable "columnCount" does not exist.', 51, $this->source); })())), "html", null, true);
                    echo "\">
                            ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["fields"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 53
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["field"], array(), "any", true, true)) {
                            // line 54
                            echo "                                    ";
                            $this->displayBlock('tab_row', $context, $blocks);
                            // line 57
                            echo "                                ";
                        }
                        // line 58
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                        </div>

                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_number'], $context['tab_desc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        ";
            $context["override_tab_tabscontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 66
            echo "
        ";
            // line 70
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
            echo "
        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), 'errors');
            echo "
        ";
            // line 72
            $this->loadTemplate("crud/form.html.twig", "crud/form.html.twig", 72, "1475584748")->display(array_merge($context, array("override_tab_tabs" =>             // line 73
(isset($context["override_tab_tabs"]) || array_key_exists("override_tab_tabs", $context) ? $context["override_tab_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "override_tab_tabs" does not exist.', 73, $this->source); })()), "override_tab_tabscontent" =>             // line 74
(isset($context["override_tab_tabscontent"]) || array_key_exists("override_tab_tabscontent", $context) ? $context["override_tab_tabscontent"] : (function () { throw new Twig_Error_Runtime('Variable "override_tab_tabscontent" does not exist.', 74, $this->source); })()))));
            // line 83
            echo "        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        ";
            // line 85
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
            echo "

    ";
        } else {
            // line 88
            echo "
        ";
            // line 92
            echo "        ";
            ob_start();
            // line 93
            echo "        ";
            $this->displayBlock('box_form', $context, $blocks);
            // line 96
            echo "        ";
            $context["override_box_boxcontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 97
            echo "
        ";
            // line 101
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), 'form_start');
            echo "
        ";
            // line 102
            $this->loadTemplate("crud/form.html.twig", "crud/form.html.twig", 102, "152322705")->display(array_merge($context, array("box_class" => "box-primary", "override_box_boxcontent" =>             // line 104
(isset($context["override_box_boxcontent"]) || array_key_exists("override_box_boxcontent", $context) ? $context["override_box_boxcontent"] : (function () { throw new Twig_Error_Runtime('Variable "override_box_boxcontent" does not exist.', 104, $this->source); })()))));
            // line 110
            echo "        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
            echo "

    ";
        }
        // line 115
        echo "
    <div id=\"anchor\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_buttons($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttons"));

        // line 16
        echo "        ";
        // line 17
        echo "            ";
        // line 18
        echo "                ";
        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_tab($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        // line 33
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_fields"]) || array_key_exists("tab_fields", $context) ? $context["tab_fields"] : (function () { throw new Twig_Error_Runtime('Variable "tab_fields" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["tab_number"] => $context["tab_desc"]) {
            // line 34
            echo "                <li class=\"";
            echo ((($context["tab_number"] == 0)) ? ("active") : (""));
            echo "\">
                    <a href=\"#tab_";
            // line 35
            echo twig_escape_filter($this->env, $context["tab_number"], "html", null, true);
            echo "\" data-toggle=\"tab\" aria-expanded=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_desc"], "title", array(), "array"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tab_number'], $context['tab_desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_tab_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_row"));

        // line 55
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 55, $this->source); })())), 'row');
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_box_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_form"));

        // line 94
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), 'widget');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 94,  392 => 93,  379 => 55,  370 => 54,  360 => 38,  349 => 35,  344 => 34,  339 => 33,  330 => 32,  320 => 22,  318 => 21,  316 => 20,  314 => 19,  312 => 18,  310 => 17,  308 => 16,  299 => 15,  287 => 115,  281 => 112,  277 => 110,  275 => 104,  274 => 102,  269 => 101,  266 => 97,  263 => 96,  260 => 93,  257 => 92,  254 => 88,  248 => 85,  244 => 83,  242 => 74,  241 => 73,  240 => 72,  236 => 71,  231 => 70,  228 => 66,  225 => 65,  217 => 62,  209 => 59,  195 => 58,  192 => 57,  189 => 54,  186 => 53,  169 => 52,  165 => 51,  162 => 50,  157 => 49,  155 => 48,  147 => 46,  142 => 45,  139 => 44,  136 => 40,  133 => 39,  130 => 32,  127 => 31,  124 => 27,  122 => 26,  117 => 23,  114 => 15,  105 => 14,  88 => 10,  77 => 11,  75 => 10,  69 => 8,  60 => 7,  50 => 1,  44 => 4,  40 => 3,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% for twig in themes_twig %}
    {% form_theme form twig %}
{% endfor %}

{% block content_header %}
    {{ title }}
    <small>
        {% block content_header_small %}{% endblock %}
    </small>
{% endblock %}

{% block content %}
    {% block buttons %}
        {#<div class=\"btn-group\">#}
            {#<a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">#}
                {#<i class=\"fa fa-reply\"></i>&nbsp;Retour</a>#}
            {#<a class=\"btn btn-sm btn-info\" href=\"#anchor\">#}
                {#<i class=\"fa fa-arrow-down\"></i>&nbsp;Bas de page</a>#}
        {#</div>#}
    {% endblock %}

    <p></p>

    {% if tab_fields is not empty %}

        {#
            Override tab tabs
        #}
        {% set override_tab_tabs %}
        {% block tab %}
            {% for tab_number, tab_desc in tab_fields %}
                <li class=\"{{(tab_number==0)?'active':''}}\">
                    <a href=\"#tab_{{tab_number}}\" data-toggle=\"tab\" aria-expanded=\"true\">{{ tab_desc['title'] }}</a>
                </li>
            {% endfor %}
        {% endblock %}
        {% endset %}

        {#
            Override tab tabscontent
        #}
        {% set override_tab_tabscontent %}
        {% for tab_number, tab_desc in tab_fields %}
            <div class=\"tab-pane {{(tab_number==0)?'active':''}}\" id=\"tab_{{tab_number}}\">
                <div class=\"row\">
                    {% set columnCount = tab_desc['columns'] | length %}
                    {% for fields in tab_desc['columns'] %}

                        <div class=\"col-sm-{{12/columnCount}}\">
                            {% for field in fields %}
                                {% if attribute(form, field)is defined %}
                                    {% block tab_row %}
                                        {{ form_row(attribute(form, field)) }}
                                    {% endblock %}
                                {% endif %}
                            {% endfor %}
                        </div>

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
        {% endset %}

        {#
            Form tab (onglets)
        #}
        {{ form_start(form) }}
        {{ form_errors(form) }}
        {% embed \"crud/tab.html.twig\" with {
            override_tab_tabs : override_tab_tabs,
            override_tab_tabscontent: override_tab_tabscontent
        } %}
            {% block tabs %}
                {{ override_tab_tabs }}
            {% endblock %}
            {% block tabscontent %}
                {{ override_tab_tabscontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% else %}

        {#
            Override box subcontent
        #}
        {% set override_box_boxcontent %}
        {% block box_form %}
            {{ form_widget(form) }}
        {% endblock %}
        {% endset %}

        {#
            Form box
        #}
        {{ form_start(form) }}
        {% embed \"crud/box.html.twig\" with {
            'box_class': 'box-primary',
            override_box_boxcontent : override_box_boxcontent}
        %}
            {% block boxcontent %}
                {{ override_box_boxcontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% endif %}

    <div id=\"anchor\"></div>
{% endblock %}
", "crud/form.html.twig", "/home/jerome/Developpement/mariane/templates/crud/form.html.twig");
    }
}


/* crud/form.html.twig */
class __TwigTemplate_e483ec27dd6c983f02273a2380b891272512092bd18bd59df40e489efc9e5cd0_1475584748 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 72
        $this->parent = $this->loadTemplate("crud/tab.html.twig", "crud/form.html.twig", 72);
        $this->blocks = array(
            'tabs' => array($this, 'block_tabs'),
            'tabscontent' => array($this, 'block_tabscontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        // line 77
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["override_tab_tabs"]) || array_key_exists("override_tab_tabs", $context) ? $context["override_tab_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "override_tab_tabs" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_tabscontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabscontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabscontent"));

        // line 80
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["override_tab_tabscontent"]) || array_key_exists("override_tab_tabscontent", $context) ? $context["override_tab_tabscontent"] : (function () { throw new Twig_Error_Runtime('Variable "override_tab_tabscontent" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 80,  616 => 79,  603 => 77,  594 => 76,  564 => 72,  401 => 94,  392 => 93,  379 => 55,  370 => 54,  360 => 38,  349 => 35,  344 => 34,  339 => 33,  330 => 32,  320 => 22,  318 => 21,  316 => 20,  314 => 19,  312 => 18,  310 => 17,  308 => 16,  299 => 15,  287 => 115,  281 => 112,  277 => 110,  275 => 104,  274 => 102,  269 => 101,  266 => 97,  263 => 96,  260 => 93,  257 => 92,  254 => 88,  248 => 85,  244 => 83,  242 => 74,  241 => 73,  240 => 72,  236 => 71,  231 => 70,  228 => 66,  225 => 65,  217 => 62,  209 => 59,  195 => 58,  192 => 57,  189 => 54,  186 => 53,  169 => 52,  165 => 51,  162 => 50,  157 => 49,  155 => 48,  147 => 46,  142 => 45,  139 => 44,  136 => 40,  133 => 39,  130 => 32,  127 => 31,  124 => 27,  122 => 26,  117 => 23,  114 => 15,  105 => 14,  88 => 10,  77 => 11,  75 => 10,  69 => 8,  60 => 7,  50 => 1,  44 => 4,  40 => 3,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% for twig in themes_twig %}
    {% form_theme form twig %}
{% endfor %}

{% block content_header %}
    {{ title }}
    <small>
        {% block content_header_small %}{% endblock %}
    </small>
{% endblock %}

{% block content %}
    {% block buttons %}
        {#<div class=\"btn-group\">#}
            {#<a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">#}
                {#<i class=\"fa fa-reply\"></i>&nbsp;Retour</a>#}
            {#<a class=\"btn btn-sm btn-info\" href=\"#anchor\">#}
                {#<i class=\"fa fa-arrow-down\"></i>&nbsp;Bas de page</a>#}
        {#</div>#}
    {% endblock %}

    <p></p>

    {% if tab_fields is not empty %}

        {#
            Override tab tabs
        #}
        {% set override_tab_tabs %}
        {% block tab %}
            {% for tab_number, tab_desc in tab_fields %}
                <li class=\"{{(tab_number==0)?'active':''}}\">
                    <a href=\"#tab_{{tab_number}}\" data-toggle=\"tab\" aria-expanded=\"true\">{{ tab_desc['title'] }}</a>
                </li>
            {% endfor %}
        {% endblock %}
        {% endset %}

        {#
            Override tab tabscontent
        #}
        {% set override_tab_tabscontent %}
        {% for tab_number, tab_desc in tab_fields %}
            <div class=\"tab-pane {{(tab_number==0)?'active':''}}\" id=\"tab_{{tab_number}}\">
                <div class=\"row\">
                    {% set columnCount = tab_desc['columns'] | length %}
                    {% for fields in tab_desc['columns'] %}

                        <div class=\"col-sm-{{12/columnCount}}\">
                            {% for field in fields %}
                                {% if attribute(form, field)is defined %}
                                    {% block tab_row %}
                                        {{ form_row(attribute(form, field)) }}
                                    {% endblock %}
                                {% endif %}
                            {% endfor %}
                        </div>

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
        {% endset %}

        {#
            Form tab (onglets)
        #}
        {{ form_start(form) }}
        {{ form_errors(form) }}
        {% embed \"crud/tab.html.twig\" with {
            override_tab_tabs : override_tab_tabs,
            override_tab_tabscontent: override_tab_tabscontent
        } %}
            {% block tabs %}
                {{ override_tab_tabs }}
            {% endblock %}
            {% block tabscontent %}
                {{ override_tab_tabscontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% else %}

        {#
            Override box subcontent
        #}
        {% set override_box_boxcontent %}
        {% block box_form %}
            {{ form_widget(form) }}
        {% endblock %}
        {% endset %}

        {#
            Form box
        #}
        {{ form_start(form) }}
        {% embed \"crud/box.html.twig\" with {
            'box_class': 'box-primary',
            override_box_boxcontent : override_box_boxcontent}
        %}
            {% block boxcontent %}
                {{ override_box_boxcontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% endif %}

    <div id=\"anchor\"></div>
{% endblock %}
", "crud/form.html.twig", "/home/jerome/Developpement/mariane/templates/crud/form.html.twig");
    }
}


/* crud/form.html.twig */
class __TwigTemplate_e483ec27dd6c983f02273a2380b891272512092bd18bd59df40e489efc9e5cd0_152322705 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 102
        $this->parent = $this->loadTemplate("crud/box.html.twig", "crud/form.html.twig", 102);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crud/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_boxcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxcontent"));

        // line 107
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["override_box_boxcontent"]) || array_key_exists("override_box_boxcontent", $context) ? $context["override_box_boxcontent"] : (function () { throw new Twig_Error_Runtime('Variable "override_box_boxcontent" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 107,  817 => 106,  788 => 102,  625 => 80,  616 => 79,  603 => 77,  594 => 76,  564 => 72,  401 => 94,  392 => 93,  379 => 55,  370 => 54,  360 => 38,  349 => 35,  344 => 34,  339 => 33,  330 => 32,  320 => 22,  318 => 21,  316 => 20,  314 => 19,  312 => 18,  310 => 17,  308 => 16,  299 => 15,  287 => 115,  281 => 112,  277 => 110,  275 => 104,  274 => 102,  269 => 101,  266 => 97,  263 => 96,  260 => 93,  257 => 92,  254 => 88,  248 => 85,  244 => 83,  242 => 74,  241 => 73,  240 => 72,  236 => 71,  231 => 70,  228 => 66,  225 => 65,  217 => 62,  209 => 59,  195 => 58,  192 => 57,  189 => 54,  186 => 53,  169 => 52,  165 => 51,  162 => 50,  157 => 49,  155 => 48,  147 => 46,  142 => 45,  139 => 44,  136 => 40,  133 => 39,  130 => 32,  127 => 31,  124 => 27,  122 => 26,  117 => 23,  114 => 15,  105 => 14,  88 => 10,  77 => 11,  75 => 10,  69 => 8,  60 => 7,  50 => 1,  44 => 4,  40 => 3,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends parent_twig %}

{% for twig in themes_twig %}
    {% form_theme form twig %}
{% endfor %}

{% block content_header %}
    {{ title }}
    <small>
        {% block content_header_small %}{% endblock %}
    </small>
{% endblock %}

{% block content %}
    {% block buttons %}
        {#<div class=\"btn-group\">#}
            {#<a class=\"btn btn-sm btn-info\" href=\"javascript:history.back()\">#}
                {#<i class=\"fa fa-reply\"></i>&nbsp;Retour</a>#}
            {#<a class=\"btn btn-sm btn-info\" href=\"#anchor\">#}
                {#<i class=\"fa fa-arrow-down\"></i>&nbsp;Bas de page</a>#}
        {#</div>#}
    {% endblock %}

    <p></p>

    {% if tab_fields is not empty %}

        {#
            Override tab tabs
        #}
        {% set override_tab_tabs %}
        {% block tab %}
            {% for tab_number, tab_desc in tab_fields %}
                <li class=\"{{(tab_number==0)?'active':''}}\">
                    <a href=\"#tab_{{tab_number}}\" data-toggle=\"tab\" aria-expanded=\"true\">{{ tab_desc['title'] }}</a>
                </li>
            {% endfor %}
        {% endblock %}
        {% endset %}

        {#
            Override tab tabscontent
        #}
        {% set override_tab_tabscontent %}
        {% for tab_number, tab_desc in tab_fields %}
            <div class=\"tab-pane {{(tab_number==0)?'active':''}}\" id=\"tab_{{tab_number}}\">
                <div class=\"row\">
                    {% set columnCount = tab_desc['columns'] | length %}
                    {% for fields in tab_desc['columns'] %}

                        <div class=\"col-sm-{{12/columnCount}}\">
                            {% for field in fields %}
                                {% if attribute(form, field)is defined %}
                                    {% block tab_row %}
                                        {{ form_row(attribute(form, field)) }}
                                    {% endblock %}
                                {% endif %}
                            {% endfor %}
                        </div>

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
        {% endset %}

        {#
            Form tab (onglets)
        #}
        {{ form_start(form) }}
        {{ form_errors(form) }}
        {% embed \"crud/tab.html.twig\" with {
            override_tab_tabs : override_tab_tabs,
            override_tab_tabscontent: override_tab_tabscontent
        } %}
            {% block tabs %}
                {{ override_tab_tabs }}
            {% endblock %}
            {% block tabscontent %}
                {{ override_tab_tabscontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% else %}

        {#
            Override box subcontent
        #}
        {% set override_box_boxcontent %}
        {% block box_form %}
            {{ form_widget(form) }}
        {% endblock %}
        {% endset %}

        {#
            Form box
        #}
        {{ form_start(form) }}
        {% embed \"crud/box.html.twig\" with {
            'box_class': 'box-primary',
            override_box_boxcontent : override_box_boxcontent}
        %}
            {% block boxcontent %}
                {{ override_box_boxcontent }}
            {% endblock %}
        {% endembed %}
        <button class=\"btn btn-sm btn-success\" type=\"submit\">
            <i class=\"fa fa-save\"></i>&nbsp;Enregistrer</button>
        {{ form_end(form) }}

    {% endif %}

    <div id=\"anchor\"></div>
{% endblock %}
", "crud/form.html.twig", "/home/jerome/Developpement/mariane/templates/crud/form.html.twig");
    }
}
