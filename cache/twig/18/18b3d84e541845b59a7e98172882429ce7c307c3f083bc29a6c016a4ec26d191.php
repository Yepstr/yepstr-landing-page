<?php

/* item.html.twig */
class __TwigTemplate_9e637f6a64299a438342a1cb72915aae0e0f47a566624e16329500144feb1ab8 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "915899996")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
";
    }
}


/* item.html.twig */
class __TwigTemplate_9e637f6a64299a438342a1cb72915aae0e0f47a566624e16329500144feb1ab8_915899996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", null, 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", null, 10)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 11
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("partials/sidebar.html.twig", null, 13)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 14
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 14,  104 => 13,  100 => 11,  98 => 10,  93 => 7,  90 => 6,  87 => 5,  84 => 4,  81 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
";
    }
}
