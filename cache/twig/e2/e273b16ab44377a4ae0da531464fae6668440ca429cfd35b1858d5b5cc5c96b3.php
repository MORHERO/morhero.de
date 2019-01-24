<?php

/* partials/header.html.twig */
class __TwigTemplate_a32f501cc0f09c66a6e9292d3c74a80e72e1f54f5f4dca142c4966885ff0bb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<header>
    <div class=\"inner\">
        <div class=\"text-box\">
            <p class=\"headline\">";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "header_title", array());
        echo "</p>
            <p class=\"msg\">";
        // line 6
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "header_msg", array());
        echo "</p>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<header>
    <div class=\"inner\">
        <div class=\"text-box\">
            <p class=\"headline\">{{ header.header_title }}</p>
            <p class=\"msg\">{{ header.header_msg }}</p>
        </div>
    </div>
</header>
{% endblock %}", "partials/header.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/partials/header.html.twig");
    }
}
