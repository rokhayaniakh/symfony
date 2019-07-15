<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* employer_service/accueil.html.twig */
class __TwigTemplate_6dedc512fed9e21ad18eae89492ae320ff54d2fca6e063b3ae8190ad73a3663f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer_service/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer_service/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employer_service/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h3>AJOUTER UN EMPLOYER</h3>

";
        // line 8
        echo "
";
        // line 10
        echo "
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 12, $this->source); })()), "matricule", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Matricule de l'Employer"]]);
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Nom de l'Employer"]]);
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 14, $this->source); })()), "dateNaiss", [], "any", false, false, false, 14), 'row', ["attr" => ["placeholder" => " Date de naissance"]]);
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 15, $this->source); })()), "salaire", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Salaire de l'Employer"]]);
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 16, $this->source); })()), "idservice", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "Service de l'Employer"]]);
        echo "
<button type=\"submit\" class=\"btn btn-success btn-lg\">
 ";
        // line 18
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 18, $this->source); })())) {
            // line 19
            echo " Update
 ";
        } else {
            // line 21
            echo "Ajout Employer
";
        }
        // line 23
        echo "</button>
";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
";
        // line 25
        $this->loadTemplate("footer.html.twig", "employer_service/accueil.html.twig", 25)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employer_service/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  115 => 24,  112 => 23,  108 => 21,  104 => 19,  102 => 18,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  74 => 10,  71 => 8,  67 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}
{# {% form_theme form 'bootstrap_4_layout.html.twig' %} #}
<h3>AJOUTER UN EMPLOYER</h3>

{#  premiere methode #}
{# {{form(formp)}} {% endblock %} #}
{#  fin #}

{# deuxieme methode  #}

{{form_start(formp)}}
{{form_row(formp.matricule ,{'attr':{'placeholder': \"Matricule de l'Employer\" }})}}
{{form_row(formp.nom ,{'attr':{'placeholder':\"Nom de l'Employer\" }})}}
{{form_row(formp.dateNaiss ,{'attr':{'placeholder': \" Date de naissance\" }})}}
{{form_row(formp.salaire  ,{'attr':{'placeholder': \"Salaire de l'Employer\" }})}}
{{form_row(formp.idservice ,{'attr':{'placeholder': \"Service de l'Employer\" }})}}
<button type=\"submit\" class=\"btn btn-success btn-lg\">
 {% if editMode %}
 Update
 {% else %}
Ajout Employer
{% endif %}
</button>
{{form_end(formp)}}
{% include \"footer.html.twig\" %}
{% endblock %}

{#fin 2  #}", "employer_service/accueil.html.twig", "/home/rokhayadiop/Documents/symfony/Symfony1/templates/employer_service/accueil.html.twig");
    }
}
