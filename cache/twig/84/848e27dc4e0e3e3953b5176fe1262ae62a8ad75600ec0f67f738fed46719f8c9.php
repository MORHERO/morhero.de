<?php

/* partials/base.html.twig */
class __TwigTemplate_fea7cdde4c881469a594920a0484f2689cf75d802b5f7150b0d5783cf1698105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_classes' => array($this, 'block_body_classes'),
            'intro' => array($this, 'block_intro'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "</head>
<body id=\"top\" class=\"";
        // line 22
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\" intro=\"";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "intro_toggle", array());
        echo "\">
    
    ";
        // line 24
        $this->displayBlock('intro', $context, $blocks);
        // line 29
        echo "    
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "    
    ";
        // line 34
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "    
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "    
    ";
        // line 48
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/media/images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 17
        echo "    ";
    }

    // line 22
    public function block_body_classes($context, array $blocks = array())
    {
        echo (isset($context["body_classes"]) ? $context["body_classes"] : null);
    }

    // line 24
    public function block_intro($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "intro_toggle", array()) == "true")) {
            // line 26
            echo "            ";
            $this->loadTemplate("partials/intro.html.twig", "partials/base.html.twig", 26)->display($context);
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "    ";
    }

    // line 34
    public function block_navigation($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "        <main>
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </main>
    ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 46,  196 => 45,  193 => 44,  188 => 40,  183 => 41,  181 => 40,  178 => 39,  175 => 38,  171 => 36,  168 => 35,  165 => 34,  161 => 32,  158 => 31,  155 => 30,  151 => 28,  148 => 27,  145 => 26,  142 => 25,  139 => 24,  133 => 22,  129 => 17,  126 => 16,  123 => 15,  115 => 18,  113 => 15,  108 => 13,  104 => 12,  101 => 11,  99 => 10,  88 => 6,  85 => 5,  82 => 4,  75 => 49,  73 => 48,  70 => 47,  68 => 44,  65 => 43,  63 => 38,  60 => 37,  58 => 34,  55 => 33,  53 => 30,  50 => 29,  48 => 24,  41 => 22,  38 => 21,  36 => 4,  31 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://assets/media/images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://assets/css/main.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\" intro=\"{{ header.intro_toggle }}\">
    
    {% block intro %}
        {% if header.intro_toggle == 'true' %}
            {% include 'partials/intro.html.twig' %}
        {% endif %}
    {% endblock %}
    
    {% block header %}
        {% include 'partials/header.html.twig' %}
    {% endblock %}
    
    {% block navigation %}
        {% include 'partials/navigation.html.twig' %}
    {% endblock %}
    
    {% block body %}
        <main>
            {% block content %}{% endblock %}
        </main>
    {% endblock %}

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
    
    {% include 'partials/scripts.html.twig' %}

</body>
</html>
", "partials/base.html.twig", "/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/templates/partials/base.html.twig");
    }
}
