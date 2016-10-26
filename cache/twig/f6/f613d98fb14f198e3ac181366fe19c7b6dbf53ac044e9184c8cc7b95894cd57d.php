<?php

/* partials/themes-details.html.twig */
class __TwigTemplate_d46c694be8c4dabbc2e37f4cfe43f2366ea9c7e3aad21b49e831bad61dff7455 extends Twig_Template
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
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isThemeInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isTestingRelease", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())), "method");
        // line 4
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
        echo "
    ";
        // line 10
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["theme"]) ? $context["theme"] : null)), "method")) {
            // line 11
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Theme\"></i></span></small>
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isPremiumProduct", array(0 => (isset($context["theme"]) ? $context["theme"] : null)), "method")) {
            // line 14
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "symlink", array())) {
            // line 17
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 21
        echo "    <small>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())))) : ("")), "html", null, true);
        echo "</small>
    ";
        // line 22
        if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 23
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "icon", array()), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 27
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 33
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array())) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 37
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array())) {
                // line 38
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array())) {
                // line 43
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 45
            echo "                </td>
            </tr>
        ";
        }
        // line 48
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array())) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 54
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array())) {
            // line 55
            echo "        <tr>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 60
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array())) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 66
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array())) {
            // line 67
            echo "            <tr>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 70
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array()), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 74
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array())) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 80
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description", array())) {
            // line 81
            echo "            <tr>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 83
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description_html", array());
            echo "</td>
            </tr>
        ";
        }
        // line 86
        echo "
        ";
        // line 87
        if (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array()) || $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()))) {
            // line 88
            echo "            ";
            $context["readme_link"] = (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) ? ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) : (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()) . "/blob/master/README.md")));
            // line 89
            echo "            <tr>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["readme_link"]) ? $context["readme_link"] : null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["readme_link"]) ? $context["readme_link"] : null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 94
        echo "    </table>
</div>

";
        // line 97
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 98
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("themes/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 99
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 99)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 100
            echo "
    ";
            // line 101
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "system.pages.theme"), "method") != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))) {
                // line 102
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 108
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array()), "html", null, true);
            echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 112
        echo "
";
        // line 113
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 113)->display($context);
        // line 114
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 114)->display(array_merge($context, array("type" => "theme", "package" => (isset($context["theme"]) ? $context["theme"] : null))));
        // line 115
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 115)->display(array_merge($context, array("type" => "theme")));
        // line 116
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 116)->display(array_merge($context, array("type" => "theme")));
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 116,  315 => 115,  313 => 114,  311 => 113,  308 => 112,  300 => 109,  297 => 108,  290 => 104,  286 => 102,  284 => 101,  281 => 100,  278 => 99,  275 => 98,  273 => 97,  268 => 94,  260 => 91,  256 => 90,  253 => 89,  250 => 88,  248 => 87,  245 => 86,  239 => 83,  235 => 82,  232 => 81,  229 => 80,  223 => 77,  219 => 76,  216 => 75,  213 => 74,  206 => 70,  201 => 68,  198 => 67,  195 => 66,  187 => 63,  183 => 62,  180 => 61,  177 => 60,  169 => 57,  165 => 56,  162 => 55,  159 => 54,  151 => 51,  147 => 50,  144 => 49,  141 => 48,  136 => 45,  128 => 43,  125 => 42,  119 => 40,  111 => 38,  109 => 37,  104 => 35,  101 => 34,  98 => 33,  92 => 30,  88 => 29,  85 => 28,  83 => 27,  78 => 25,  74 => 23,  70 => 22,  65 => 21,  57 => 17,  54 => 16,  48 => 14,  45 => 13,  41 => 11,  39 => 10,  35 => 9,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name|e }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Theme\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(theme) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|tu }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
                <td class=\"double\">{{ theme.license }}</td>
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.homepage ~ '/blob/master/README.md' %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.README\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}
    </table>
</div>

{% if (installed) %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (config.get('system.pages.theme') != admin.route) %}
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|tu }}</a>
    </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|tu }}</a>
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
";
    }
}
