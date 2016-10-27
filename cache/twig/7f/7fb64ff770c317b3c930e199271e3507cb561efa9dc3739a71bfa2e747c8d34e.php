<?php

/* partials/base.html.twig */
class __TwigTemplate_13daba325629a2fa9092ee7b6b873692901f37ed9624d3ef33236144147e4e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "partials/head.html.twig");
        echo "
<body id=\"top\" class=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
  ";
        // line 3
        echo twig_include($this->env, $context, "partials/header.html.twig");
        echo "
  ";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "  ";
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "    </section>
  ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
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
        return array (  59 => 6,  54 => 7,  52 => 6,  47 => 5,  44 => 4,  35 => 9,  33 => 4,  29 => 3,  25 => 2,  21 => 1,);
    }

    public function getSource()
    {
        return "{{ include('partials/head.html.twig') }}
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
  {{ include('partials/header.html.twig') }}
  {% block body %}
    <section id=\"body\" class=\"{{ class }}\">
      {% block content %}{% endblock %}
    </section>
  {% endblock %}
  {{ include('partials/footer.html.twig') }}
</body>
</html>
";
    }
}
