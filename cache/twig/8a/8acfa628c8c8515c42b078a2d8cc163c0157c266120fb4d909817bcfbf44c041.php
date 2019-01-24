<?php

/* partials/intro.html.twig */
class __TwigTemplate_e28436db399191df9a9e878ea06b30b68784a146e086d0ec31c2032a9ab3824c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'intro' => array($this, 'block_intro'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('intro', $context, $blocks);
    }

    public function block_intro($context, array $blocks = array())
    {
        // line 2
        echo "\t<div id=\"intro-window\" class=\"fullview intro\">
\t\t<canvas id=\"intro-canvas\" width=\"2000\" height=\"1000\" onresize=\"resize_canvas\"></canvas>
\t\t<div class=\"inner\">
\t\t\t<div class=\"text-block\">
\t\t\t\t<p>Lorem ipsum dolor sit amet</p>
\t\t\t\t<a id=\"close-intro\" class=\"btn\">Go to page</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "partials/intro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block intro %}
\t<div id=\"intro-window\" class=\"fullview intro\">
\t\t<canvas id=\"intro-canvas\" width=\"2000\" height=\"1000\" onresize=\"resize_canvas\"></canvas>
\t\t<div class=\"inner\">
\t\t\t<div class=\"text-block\">
\t\t\t\t<p>Lorem ipsum dolor sit amet</p>
\t\t\t\t<a id=\"close-intro\" class=\"btn\">Go to page</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "partials/intro.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/partials/intro.html.twig");
    }
}
