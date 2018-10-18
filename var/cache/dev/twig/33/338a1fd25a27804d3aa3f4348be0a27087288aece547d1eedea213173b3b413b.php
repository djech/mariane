<?php

/* header.html.twig */
class __TwigTemplate_2acd96341f3ba638e19f5dba9d2b2e2a560f97e820f750ac8057382ad7bd7c48 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
    <noscript>
        <p class=\"noscript\">Pour utiliser cette page, vous devez activer les scripts Javascript.</p>
    </noscript>

    <div class=\"profile-page sidebar-collapse\">
        <nav class=\"navbar navbar-expand-lg fixed-top navbar-transparent bg-primary\" color-on-scroll=\"400\">
            <div class=\"container\">
                <div class=\"navbar-translate\"><a class=\"navbar-brand\" href=\"#\" rel=\"tooltip\"></a>
                    <button class=\"navbar-toggler navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-bar bar1\"></span><span class=\"navbar-toggler-bar bar2\"></span><span class=\"navbar-toggler-bar bar3\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#about\">À propos</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#skill\">Talents</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#experience\">Experiences</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#contact\">Contact</a></li>
                        ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "
                            <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration");
            echo "\">Administration</a></li>

                        ";
        }
        // line 24
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  54 => 21,  51 => 20,  49 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <noscript>
        <p class=\"noscript\">Pour utiliser cette page, vous devez activer les scripts Javascript.</p>
    </noscript>

    <div class=\"profile-page sidebar-collapse\">
        <nav class=\"navbar navbar-expand-lg fixed-top navbar-transparent bg-primary\" color-on-scroll=\"400\">
            <div class=\"container\">
                <div class=\"navbar-translate\"><a class=\"navbar-brand\" href=\"#\" rel=\"tooltip\"></a>
                    <button class=\"navbar-toggler navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-bar bar1\"></span><span class=\"navbar-toggler-bar bar2\"></span><span class=\"navbar-toggler-bar bar3\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#about\">À propos</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#skill\">Talents</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#experience\">Experiences</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"#contact\">Contact</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}

                            <li class=\"nav-item\"><a class=\"nav-link smooth-scroll\" href=\"{{ path('administration') }}\">Administration</a></li>

                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>", "header.html.twig", "/home/jerome/Developpement/mariane/templates/header.html.twig");
    }
}
