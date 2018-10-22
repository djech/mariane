<?php

/* footer.html.twig */
class __TwigTemplate_0116f38e59b31a207d591981c186b5294e9259caecc86d4e530ff1ac30617561 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container text-center\"><a class=\"cc-facebook btn btn-link\" href=\"#\"><i class=\"fa fa-facebook fa-2x \" aria-hidden=\"true\"></i></a><a class=\"cc-twitter btn btn-link \" href=\"#\"><i class=\"fa fa-twitter fa-2x \" aria-hidden=\"true\"></i></a><a class=\"cc-google-plus btn btn-link\" href=\"#\"><i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i></a><a class=\"cc-instagram btn btn-link\" href=\"#\"><i class=\"fa fa-instagram fa-2x \" aria-hidden=\"true\"></i></a></div>
    <div class=\"h4 title text-center\">";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 3, $this->source); })()), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new Twig_Error_Runtime('Variable "information" does not exist.', 3, $this->source); })()), "nom", array())), "html", null, true);
        echo "</div>
    <div class=\"text-center text-muted\">
        <p>&copy; CV. Tout droits réservés.</p>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container text-center\"><a class=\"cc-facebook btn btn-link\" href=\"#\"><i class=\"fa fa-facebook fa-2x \" aria-hidden=\"true\"></i></a><a class=\"cc-twitter btn btn-link \" href=\"#\"><i class=\"fa fa-twitter fa-2x \" aria-hidden=\"true\"></i></a><a class=\"cc-google-plus btn btn-link\" href=\"#\"><i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i></a><a class=\"cc-instagram btn btn-link\" href=\"#\"><i class=\"fa fa-instagram fa-2x \" aria-hidden=\"true\"></i></a></div>
    <div class=\"h4 title text-center\">{{ information.prenom|capitalize }} {{ information.nom|upper }}</div>
    <div class=\"text-center text-muted\">
        <p>&copy; CV. Tout droits réservés.</p>
    </div>
</footer>", "footer.html.twig", "/home/jerome/Developpement/mariane/templates/footer.html.twig");
    }
}
