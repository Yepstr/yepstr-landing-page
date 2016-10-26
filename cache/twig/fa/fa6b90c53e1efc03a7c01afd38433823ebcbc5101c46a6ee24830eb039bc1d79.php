<?php

/* partials/plugins-list.html.twig */
class __TwigTemplate_5c3e77b70ce42a949ea0c47444acddf726b941f449395e83a0b8b5247e6483df extends Twig_Template
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
        echo "<script src=\"//gumroad.com/js/gumroad.js\"></script>
<div class=\"grav-update plugins\"></div>
";
        // line 3
        if ((isset($context["installing"]) ? $context["installing"] : null)) {
            // line 4
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/plugins-list.html.twig", 4)->display($context);
        }
        // line 6
        $this->loadTemplate("partials/list-sort.html.twig", "partials/plugins-list.html.twig", 6)->display(array_merge($context, array("list_view" => "plugins")));
        // line 7
        echo "<h1>
    ";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["installing"]) ? $context["installing"] : null)) ? ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_PLUGINS")) : ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_PLUGINS"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<table>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"), "toArray", array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["plugin"]) {
            // line 18
            echo "        ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $context["slug"])), "method");
            // line 19
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isTestingRelease", array(0 => $context["slug"]), "method");
            // line 20
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["plugin"], "date", array())) ? ($this->getAttribute($context["plugin"], "date", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "findPackage", array(0 => $context["slug"]), "method"), "date", array())));
            // line 21
            echo "
        <tr data-gpm-plugin=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, (isset($context["releaseDate"]) ? $context["releaseDate"] : null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "author", array()), "name", array()), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["plugin"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isUpdatable", array(0 => $context["slug"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo (((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) ? ("1") : ("2"));
            echo "\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "icon", array()), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/plugins/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</a>
                ";
            // line 26
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["plugin"]), "method")) {
                // line 27
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 29
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isPremiumProduct", array(0 => $context["plugin"]), "method")) {
                // line 30
                echo "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                echo "</span></small>
                ";
            }
            // line 32
            echo "                ";
            if ($this->getAttribute($context["plugin"], "symlink", array())) {
                // line 33
                echo "                <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 37
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", array()), "html", null, true);
            echo "</span>
                ";
            // line 38
            if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 39
            echo "            </td>
            <td class=\"gpm-actions\">
                ";
            // line 41
            if (( !(isset($context["installing"]) ? $context["installing"] : null) && (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", array()), "fields", array()), "tabs", array()), "fields", array()), "login", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden")))) {
                // line 42
                echo "                    <a class=\"";
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("disable") : ("enable"))), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 43
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 45
(isset($context["installing"]) ? $context["installing"] : null)) {
                // line 46
                echo "                    ";
                if (($this->getAttribute($context["plugin"], "premium", array()) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "license", array(0 => $this->getAttribute($context["plugin"], "slug", array())), "method"))) {
                    // line 47
                    echo "                        <a class=\"gumroad-button button\" href=\"https://gum.co/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "premium", array()), "product_permalink", array()), "html", null, true);
                    echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("Buy Now"), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 49
                    echo "                <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "slug", array()), "html", null, true);
                    echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 51
                echo "                ";
            }
            // line 52
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 56
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 56)->display(array_merge($context, array("plugin" => $context["plugin"])));
            // line 57
            echo "                </div>
            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</table>

";
        // line 63
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-list.html.twig", 63)->display(array_merge($context, array("type" => "plugin")));
        // line 64
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-list.html.twig", 64)->display(array_merge($context, array("type" => "plugin")));
    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 64,  217 => 63,  213 => 61,  196 => 57,  194 => 56,  188 => 52,  185 => 51,  177 => 49,  169 => 47,  166 => 46,  164 => 45,  159 => 43,  152 => 42,  150 => 41,  146 => 39,  142 => 38,  137 => 37,  129 => 33,  126 => 32,  120 => 30,  117 => 29,  111 => 27,  109 => 26,  101 => 25,  97 => 24,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  49 => 17,  41 => 12,  34 => 8,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<script src=\"//gumroad.com/js/gumroad.js\"></script>
<div class=\"grav-update plugins\"></div>
{% if installing %}
    {% include 'partials/release-toggle.html.twig' %}
{% endif %}
{% include 'partials/list-sort.html.twig' with { list_view: 'plugins' } %}
<h1>
    {{ installing ? \"PLUGIN_ADMIN.AVAILABLE_PLUGINS\"|tu : \"PLUGIN_ADMIN.INSTALLED_PLUGINS\"|tu }}
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu }}\" data-gpm-filter>
    </div>
</form>

<table>
    {% for slug, plugin in admin.plugins(not installing).toArray|ksort %}
        {% set data = admin.data('plugins/' ~ slug) %}
        {% set isTestingRelease = admin.gpm.isTestingRelease(slug) %}
        {% set releaseDate = plugin.date ?: admin.gpm.findPackage(slug).date %}

        <tr data-gpm-plugin=\"{{ slug|url_encode }}\" data-gpm-name=\"{{ plugin.name }}\" data-gpm-release-date=\"{{ releaseDate }}\" data-gpm-author=\"{{ plugin.author.name }}\" data-gpm-official=\"{{ admin.isTeamGrav(plugin) ? '1' : '2' }}\" data-gpm-updatable=\"{{ admin.gpm.isUpdatable(slug) ? '1' : '2' }}\" data-gpm-enabled=\"{{ data.get('enabled') ? '1' : '2' }}\" data-gpm-testing=\"{{ isTestingRelease ? '1' : '2' }}\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-{{ plugin.icon }}\"></i>
                <a href=\"{{ base_url_relative }}/plugins/{{ slug|url_encode }}\">{{ plugin.name }}</a>
                {% if admin.isTeamGrav(plugin) %}
                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|tu }}\"></i></span></small>
                {% endif %}
                {% if admin.isPremiumProduct(plugin) %}
                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
                {% endif %}
                {% if plugin.symlink %}
                <span class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|tu }}\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                {% endif %}
                <span class=\"gpm-version\">v{{ plugin.version }}</span>
                {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
            </td>
            <td class=\"gpm-actions\">
                {% if (not installing and (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden')) %}
                    <a class=\"{{ data.get('enabled') ? 'enabled' : 'disabled' }}\" href=\"{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ slug ~ '/task' ~ config.system.param_sep ~ (data.get('enabled') ? 'disable' : 'enable'), 'admin-form', 'admin-nonce') }}\">
                        <i class=\"fa fa-fw fa-toggle-{{ data.get('enabled') ? 'on' : 'off' }}\"></i>
                    </a>
                {% elseif (installing) %}
                    {% if (plugin.premium and not admin.license(plugin.slug)) %}
                        <a class=\"gumroad-button button\" href=\"https://gum.co/{{ plugin.premium.product_permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ \"Buy Now\"|tu }}</a>
                    {% else %}
                <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|tu }}</a>
                    {% endif %}
                {% endif %}
                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
                </div>
            </td>
        </tr>
    {% endfor %}
</table>

{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
";
    }
}
