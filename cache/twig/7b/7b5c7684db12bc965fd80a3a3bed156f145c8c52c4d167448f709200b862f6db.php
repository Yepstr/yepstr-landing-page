<?php

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_d35969d156b80de2b342bcc28712907031d66d6607d5efeb89987ce4e49b24de extends Twig_Template
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
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        <label><img src=\"https://www.gravatar.com/avatar/";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email", array())), "html", null, true);
        echo "?s=128\" /></label>
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "fullname", array()), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email", array()), "html", null, true);
        echo "</a>
        ";
        // line 9
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())) {
            // line 10
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "        </h5>
        <p class=\"gravatar\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo " <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a></p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  48 => 12,  42 => 10,  40 => 9,  34 => 8,  29 => 6,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        <label><img src=\"https://www.gravatar.com/avatar/{{ data.email|md5 }}?s=128\" /></label>
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        <p class=\"gravatar\">{{ \"PLUGIN_ADMIN.AVATAR_BY\"|tu }} <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a></p>
    </div>
</div>

";
    }
}
