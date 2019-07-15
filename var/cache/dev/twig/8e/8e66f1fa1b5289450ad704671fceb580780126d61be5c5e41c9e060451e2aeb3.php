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

/* employer_service/listemployer.html.twig */
class __TwigTemplate_1a711b362b855247a305b6b56c670695b4a6016b921fa91769f41b8ae69ddd77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer_service/listemployer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer_service/listemployer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employer_service/listemployer.html.twig", 1);
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

        // line 2
        echo "<table class=\"table table-striped table-bordered \">
    <tr>
        <th>Id</th>
        <th>Service</th>

        <th>Matricule</th>
        <th>Nom</th>
        <th>Date Naissance</th>
        <th>Salaire</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemployers"]) || array_key_exists("listemployers", $context) ? $context["listemployers"] : (function () { throw new RuntimeError('Variable "listemployers" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listemployer"]) {
            // line 15
            echo "    <tr>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listemployer"], "idservice", [], "any", false, false, false, 17), "libelle", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "matricule", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "dateNaiss", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "salaire", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        <td><button class=\"btn btn-success\"><a href=\" /employer/service/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "/edit \" style=\"color: white ; text-decoration:none\" >Modifier</a></button></td>
        <td><button class=\"btn btn-danger\"> <a href=\"/employer/service/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listemployer"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "/delete \" style=\"color: white ;text-decoration:none\"\">Supprimer</a></button></td>
    </tr>
    <style>
        a {
            text-decoration: none;
            color: white;
        }
    </style>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listemployer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employer_service/listemployer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  85 => 15,  81 => 14,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\"%} {% block body %}
<table class=\"table table-striped table-bordered \">
    <tr>
        <th>Id</th>
        <th>Service</th>

        <th>Matricule</th>
        <th>Nom</th>
        <th>Date Naissance</th>
        <th>Salaire</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    {% for listemployer in listemployers %}
    <tr>
        <td>{{listemployer.id}}</td>
        <td>{{listemployer.idservice.libelle}}</td>
        <td>{{listemployer.matricule}}</td>
        <td>{{listemployer.nom}}</td>
        <td>{{listemployer.dateNaiss|date('Y-m-d')}}</td>
        <td>{{listemployer.salaire}}</td>
        <td><button class=\"btn btn-success\"><a href=\" /employer/service/{{listemployer.id}}/edit \" style=\"color: white ; text-decoration:none\" >Modifier</a></button></td>
        <td><button class=\"btn btn-danger\"> <a href=\"/employer/service/{{listemployer.id}}/delete \" style=\"color: white ;text-decoration:none\"\">Supprimer</a></button></td>
    </tr>
    <style>
        a {
            text-decoration: none;
            color: white;
        }
    </style>
    {% endfor %}
</table>
{% endblock %}", "employer_service/listemployer.html.twig", "/home/rokhayadiop/Documents/symfony/Symfony1/templates/employer_service/listemployer.html.twig");
    }
}
