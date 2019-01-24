<?php

/* partials/footer.html.twig */
class __TwigTemplate_db00606d5cc0abb9921aad461397c98721044ebf74d901a51bb9802a4d1e3b04 extends Twig_Template
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
        echo "<footer>

\t";
        // line 3
        $context["footer_collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/footer/"), "limit" => 5, "order" => array("by" => "date", "dir" => "desc"), "pagination" => true)), "method");
        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footer_collection"]) ? $context["footer_collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "
        <div class=\"\">
            <a href=\"";
            // line 8
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  36 => 8,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>

\t{% set footer_collection = page.collection({ items: {'@page.children': '/footer/'}, 'limit': 5, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true }) %}

\t{% for page in footer_collection %}

        <div class=\"\">
            <a href=\"{{ page.url }}\">{{ page.menu }}</a>
        </div>
    {% endfor %}
</footer>", "partials/footer.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/partials/footer.html.twig");
    }
}
