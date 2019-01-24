<?php

/* partials/navigation.html.twig */
class __TwigTemplate_7b7ce9189b95e5eb5a2b3d5259debf815d74eb387ce89e2bbb28c803e04217d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"nav-trigger\">#</div>
<nav id=\"nav\">
\t<div class=\"flex justify-between\">
\t\t<div class=\"nav-group\">
\t\t\t<div class=\"inner-wrapper flex\">
\t\t\t\t
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "\t\t            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 9
            echo "\t\t            <div class=\"nav-element ";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
\t\t                <a href=\"";
            // line 10
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
\t\t            </div>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  39 => 10,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"nav-trigger\">#</div>
<nav id=\"nav\">
\t<div class=\"flex justify-between\">
\t\t<div class=\"nav-group\">
\t\t\t<div class=\"inner-wrapper flex\">
\t\t\t\t
\t\t\t\t{% for page in pages.children.visible %}
\t\t            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
\t\t            <div class=\"nav-element {{ current_page }}\">
\t\t                <a href=\"{{ page.url }}\">{{ page.menu }}</a>
\t\t            </div>
\t\t        {% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
</nav>", "partials/navigation.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/partials/navigation.html.twig");
    }
}
