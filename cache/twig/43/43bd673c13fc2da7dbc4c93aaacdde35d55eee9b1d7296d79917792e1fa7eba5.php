<?php

/* partials/base.html.twig */
class __TwigTemplate_5e7db1c32ce3e16bcad136ff67401e2c8a9cdaaa29362976d9dfed219ee23aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>
<body id=\"top\" class=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('bottom', $context, $blocks);
        // line 67
        echo "
</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "http://yui.yahooapis.com/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 20
        echo "    ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 25
        echo "    ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 35
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "
            </a>
            ";
        // line 39
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 44
        echo "        </div>
    </div>
";
    }

    // line 39
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 40
        echo "            <nav class=\"main-nav\">
                ";
        // line 41
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "            </nav>
            ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        </div>
    </section>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
";
    }

    // line 64
    public function block_bottom($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
";
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
        return array (  219 => 65,  216 => 64,  207 => 57,  204 => 56,  199 => 51,  193 => 52,  191 => 51,  187 => 49,  184 => 48,  179 => 42,  177 => 41,  174 => 40,  171 => 39,  165 => 44,  163 => 39,  158 => 37,  153 => 35,  149 => 33,  146 => 32,  142 => 25,  139 => 24,  136 => 23,  132 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  112 => 26,  110 => 23,  104 => 21,  102 => 16,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  65 => 67,  63 => 64,  60 => 63,  58 => 56,  55 => 55,  53 => 48,  50 => 47,  48 => 32,  43 => 30,  40 => 29,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    public function getSource()
    {
        return "{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
";
    }
}
