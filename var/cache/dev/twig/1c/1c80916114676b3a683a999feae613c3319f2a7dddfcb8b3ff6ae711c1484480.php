<?php

/* default/section/contact.html.twig */
class __TwigTemplate_6050bc8932c545bf788d611d10cd1d84889005ecec445f3075693939f879b6d5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/section/contact.html.twig"));

        // line 1
        echo "<div class=\"section\" id=\"contact\">
    <div class=\"cc-contact-information\" style=\"background-image: url('build/images/staticmap.png');\">
        <div class=\"container\">
            <div class=\"cc-contact\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <div class=\"card mb-0\" data-aos=\"zoom-in\">
                            <div class=\"h4 text-center title\">Contacter moi</div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"card-body\">
                                        <form action=\"https://formspree.io/your@email.com\" method=\"POST\">
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user-circle\"></i></span>
                                                        <input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Nom\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-file-text\"></i></span>
                                                        <input class=\"form-control\" type=\"text\" name=\"sujet\" placeholder=\"Sujet\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                                                        <input class=\"form-control\" type=\"email\" name=\"_replyto\" placeholder=\"E-mail\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <textarea class=\"form-control\" name=\"message\" placeholder=\"Votre Message\" required=\"required\"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <button class=\"btn btn-primary\" type=\"submit\">Envoyer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"card-body\">
                                        ";
        // line 51
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 51, $this->source); })()), "adresse", array()))) {
            // line 52
            echo "                                            <p class=\"mb-0\"><strong>Address </strong></p>
                                            <p class=\"pb-2\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 53, $this->source); })()), "adresse", array()), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 55
        echo "
                                        ";
        // line 56
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 56, $this->source); })()), "email", array()))) {
            // line 57
            echo "                                            <p class=\"mb-0\"><strong>Email</strong></p>
                                            <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 58, $this->source); })()), "email", array()), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 60
        echo "
                                        ";
        // line 61
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 61, $this->source); })()), "telephone", array()))) {
            // line 62
            echo "                                            <p class=\"mb-0\"><strong>Téléphone</strong></p>
                                            <p class=\"pb-2\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 63, $this->source); })()), "telephone", array()), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 65
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/section/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 65,  112 => 63,  109 => 62,  107 => 61,  104 => 60,  99 => 58,  96 => 57,  94 => 56,  91 => 55,  86 => 53,  83 => 52,  81 => 51,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"contact\">
    <div class=\"cc-contact-information\" style=\"background-image: url('build/images/staticmap.png');\">
        <div class=\"container\">
            <div class=\"cc-contact\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <div class=\"card mb-0\" data-aos=\"zoom-in\">
                            <div class=\"h4 text-center title\">Contacter moi</div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"card-body\">
                                        <form action=\"https://formspree.io/your@email.com\" method=\"POST\">
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user-circle\"></i></span>
                                                        <input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Nom\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-file-text\"></i></span>
                                                        <input class=\"form-control\" type=\"text\" name=\"sujet\" placeholder=\"Sujet\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                                                        <input class=\"form-control\" type=\"email\" name=\"_replyto\" placeholder=\"E-mail\" required=\"required\"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <textarea class=\"form-control\" name=\"message\" placeholder=\"Votre Message\" required=\"required\"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <button class=\"btn btn-primary\" type=\"submit\">Envoyer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"card-body\">
                                        {% if information.adresse is not null %}
                                            <p class=\"mb-0\"><strong>Address </strong></p>
                                            <p class=\"pb-2\">{{ information.adresse }}</p>
                                        {% endif %}

                                        {% if information.email is not null %}
                                            <p class=\"mb-0\"><strong>Email</strong></p>
                                            <p>{{ information.email }}</p>
                                        {% endif %}

                                        {% if information.telephone is not null %}
                                            <p class=\"mb-0\"><strong>Téléphone</strong></p>
                                            <p class=\"pb-2\">{{ information.telephone }}</p>
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "default/section/contact.html.twig", "/home/jerome/Developpement/mariane/templates/default/section/contact.html.twig");
    }
}
