<?php

/* @Page:/Users/karllofholm/Dev/apache/yepstr-landing-page/user/plugins/error/pages */
class __TwigTemplate_2170f9d57c8c22e31f3d5123e3b8b502e9dec06322cf696722b3a1c61dddf8d0 extends Twig_Template
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/karllofholm/Dev/apache/yepstr-landing-page/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

";
    }
}
