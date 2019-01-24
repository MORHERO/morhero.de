<?php

/* projects.html.twig */
class __TwigTemplate_91002008e312bc3ef4e12db1d0cecda332e2a1d62ef5f715bb2075034e7c341e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "projects.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t
\t";
        // line 6
        $context["project_collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/projects/"), "limit" => 5, "order" => array("by" => "date", "dir" => "desc"), "pagination" => true)), "method");
        // line 7
        echo "\t
\t<section id=\"project-list\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project_collection"]) ? $context["project_collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "
\t\t\t<div class=\"project\">
\t        \t<a href=\"";
            // line 12
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
\t\t        \t<div class=\"inner\">
\t\t        \t\t<div class=\"text-box\">
\t\t        \t\t\t<p>";
            // line 15
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</p>
\t\t        \t\t\t<p>";
            // line 16
            echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "teaser_text", array());
            echo "</p>
\t\t        \t\t</div>
\t\t        \t</div>
\t            </a>
\t        </div>

\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</section>

";
    }

    public function getTemplateName()
    {
        return "projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  61 => 16,  57 => 15,  51 => 12,  47 => 10,  43 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {{ page.content|raw }}
\t
\t{% set project_collection = page.collection({ items: {'@page.children': '/projects/'}, 'limit': 5, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true }) %}
\t
\t<section id=\"project-list\">
\t\t{% for page in project_collection %}

\t\t\t<div class=\"project\">
\t        \t<a href=\"{{ page.url}}\">
\t\t        \t<div class=\"inner\">
\t\t        \t\t<div class=\"text-box\">
\t\t        \t\t\t<p>{{ page.menu }}</p>
\t\t        \t\t\t<p>{{ page.header.teaser_text }}</p>
\t\t        \t\t</div>
\t\t        \t</div>
\t            </a>
\t        </div>

\t    {% endfor %}
\t</section>

{% endblock %}", "projects.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/projects.html.twig");
    }
}
