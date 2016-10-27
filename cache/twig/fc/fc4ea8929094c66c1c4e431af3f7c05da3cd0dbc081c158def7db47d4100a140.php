<?php

/* README.md.twig */
class __TwigTemplate_da1af19447028a1d2621d56d4cc1981b97889cfcd5a829056cda150b9e3c131b extends Twig_Template
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
        echo "# ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo " Theme

The **";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo "** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

";
        // line 7
        echo $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "description", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "# {{ component.name|titleize }} Theme

The **{{ component.name|titleize }}** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

{{ component.description }}
";
    }
}
