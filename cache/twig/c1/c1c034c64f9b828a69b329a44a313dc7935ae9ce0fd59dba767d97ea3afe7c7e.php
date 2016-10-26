<?php

/* partials/plugins-details.html.twig */
class __TwigTemplate_646252771552cd7fcb7357eda130be995d44ee4f6cdfd718dfb1a03bed80d3d7 extends Twig_Template
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
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 2
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isPluginInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isTestingRelease", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())), "method");
        // line 4
        echo "
<script src=\"//gumroad.com/js/gumroad.js\"></script>
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
        echo "
    ";
        // line 11
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["plugin"]) ? $context["plugin"] : null)), "method")) {
            // line 12
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isPremiumProduct", array(0 => (isset($context["plugin"]) ? $context["plugin"] : null)), "method")) {
            // line 15
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "symlink", array())) {
            // line 18
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 22
        echo "    <small>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())))) : ("")), "html", null, true);
        echo "</small>
    ";
        // line 23
        if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 24
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "icon", array()), "html", null, true);
        echo "\"></i>
    ";
        // line 27
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 27)->display(array_merge($context, array("plugin" => (isset($context["plugin"]) ? $context["plugin"] : null))));
        // line 28
        echo "</div>

";
        // line 30
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 31
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 32
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 32)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 33
            echo "
    ";
            // line 34
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "tabs", array()), "fields", array()), "login", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden"))) {
                // line 35
                echo "        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_PLUGIN"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 40
            echo "
";
        } else {
            // line 42
            echo "    <div class=\"button-bar success\">
        ";
            // line 43
            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "premium", array()) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "license", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())), "method"))) {
                // line 44
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "premium", array()), "product_permalink", array()), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("Buy Now"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 46
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array()), "html", null, true);
                echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_PLUGIN"), "html", null, true);
                echo "</a>
        ";
            }
            // line 48
            echo "    </div>
";
        }
        // line 50
        echo "
";
        // line 51
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/plugins-details.html.twig", 51)->display($context);
        // line 52
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-details.html.twig", 52)->display(array_merge($context, array("type" => "plugin")));
        // line 53
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-details.html.twig", 53)->display(array_merge($context, array("type" => "plugin")));
        // line 54
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/plugins-details.html.twig", 54)->display(array_merge($context, array("type" => "plugin", "package" => (isset($context["plugin"]) ? $context["plugin"] : null))));
    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  150 => 53,  148 => 52,  146 => 51,  143 => 50,  139 => 48,  131 => 46,  123 => 44,  121 => 43,  118 => 42,  114 => 40,  108 => 37,  104 => 35,  102 => 34,  99 => 33,  96 => 32,  93 => 31,  91 => 30,  87 => 28,  85 => 27,  81 => 26,  77 => 24,  73 => 23,  68 => 22,  60 => 18,  57 => 17,  51 => 15,  48 => 14,  42 => 12,  40 => 11,  36 => 10,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set gpm = admin.gpm() %}
{% set installed = gpm.isPluginInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}

<script src=\"//gumroad.com/js/gumroad.js\"></script>
<div class=\"grav-update plugin\" data-gpm-plugin=\"{{ admin.route }}\">
</div>

<h1>
    {{ plugin.name|e }}
    {% if admin.isTeamGrav(plugin) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|tu }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(plugin) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if plugin.symlink %}
    <small class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ plugin.version ? 'v' ~ plugin.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{ plugin.icon }}\"></i>
    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
</div>

{% if (installed) %}
    {% set data = admin.data('plugins/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden') %}
        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_PLUGIN\"|tu }}</a>
        </div>
    {% endif %}

{% else %}
    <div class=\"button-bar success\">
        {% if (plugin.premium and not admin.license(plugin.slug)) %}
            <a class=\"gumroad-button button\" href=\"https://gum.co/{{ plugin.premium.product_permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ \"Buy Now\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_PLUGIN\"|tu }}</a>
        {% endif %}
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'plugin', package: plugin } %}
";
    }
}
