<?php

/* partials/navigation.html.twig */
class __TwigTemplate_363f4a9c3d9e7ae79bfeb8647f87ef36e99f9208301b09a0fb68c55e5ecf507d extends Twig_Template
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
        // line 31
        echo "
<ul class=\"navigation\">
";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 34
            echo "  ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
";
        } else {
            // line 36
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 40
                echo "    <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
      <a href=\"";
                // line 41
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
        ";
                // line 42
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    // line 43
                    echo "          <i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>
        ";
                }
                // line 45
                echo "        ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
      </a>
    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 51
            echo "  <li>
    <a href=\"";
            // line 52
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
      ";
            // line 53
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                // line 54
                echo "        <i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>
      ";
            }
            // line 56
            echo "      ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
    </a>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 61
            echo "  <li>
    <i class=\"fa fa-lock\"></i>
    ";
            // line 63
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 63)->display($context);
            echo "</li>
";
        }
        // line 65
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "    ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 6
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 7
                    echo "      <li class=\"has-children ";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
        <a href=\"";
                    // line 8
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
          ";
                    // line 9
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        // line 10
                        echo "            <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>
          ";
                    }
                    // line 12
                    echo "          ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
          <span></span>
        </a>
        <ul>
          ";
                    // line 16
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
      </ul>
    </li>
  ";
                } else {
                    // line 20
                    echo "    <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
      <a href=\"";
                    // line 21
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
        ";
                    // line 22
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        // line 23
                        echo "          <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>
        ";
                    }
                    // line 25
                    echo "        ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
      </a>
    </li>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 25,  180 => 23,  178 => 22,  174 => 21,  169 => 20,  162 => 16,  154 => 12,  148 => 10,  146 => 9,  142 => 8,  137 => 7,  134 => 6,  131 => 3,  126 => 2,  114 => 1,  109 => 65,  104 => 63,  100 => 61,  98 => 60,  87 => 56,  81 => 54,  79 => 53,  75 => 52,  72 => 51,  68 => 50,  56 => 45,  50 => 43,  48 => 42,  44 => 41,  39 => 40,  36 => 37,  31 => 36,  25 => 34,  23 => 33,  19 => 31,);
    }

    public function getSource()
    {
        return "{% macro loop(page) %}
  {% for p in page.children.visible %}
    {% set current_page = (p.active or p.activeChild)
      ? 'active'
      : '' %}
    {% if p.children.visible.count > 0 %}
      <li class=\"has-children {{ current_page }}\">
        <a href=\"{{ p.url }}\">
          {% if p.header.icon %}
            <i class=\"fa fa-{{ p.header.icon }}\"></i>
          {% endif %}
          {{ p.menu }}
          <span></span>
        </a>
        <ul>
          {{ _self.loop(p) }}
      </ul>
    </li>
  {% else %}
    <li class=\"{{ current_page }}\">
      <a href=\"{{ p.url }}\">
        {% if p.header.icon %}
          <i class=\"fa fa-{{ p.header.icon }}\"></i>
        {% endif %}
        {{ p.menu }}
      </a>
    </li>
  {% endif %}
{% endfor %}
{% endmacro %}

<ul class=\"navigation\">
{% if theme_config.dropdown.enabled %}
  {{ _self.loop(pages) }}
{% else %}
  {% for page in pages.children.visible %}
    {% set current_page = (page.active or page.activeChild)
      ? 'active'
      : '' %}
    <li class=\"{{ current_page }}\">
      <a href=\"{{ page.url }}\">
        {% if page.header.icon %}
          <i class=\"fa fa-{{ page.header.icon }}\"></i>
        {% endif %}
        {{ page.menu }}
      </a>
    </li>
  {% endfor %}
{% endif %}
{% for mitem in site.menu %}
  <li>
    <a href=\"{{ mitem.url }}\">
      {% if mitem.icon %}
        <i class=\"fa fa-{{ mitem.icon }}\"></i>
      {% endif %}
      {{ mitem.text }}
    </a>
  </li>
{% endfor %}
{% if config.plugins.login.enabled and grav.user.username %}
  <li>
    <i class=\"fa fa-lock\"></i>
    {% include 'partials/login-status.html.twig' %}</li>
{% endif %}
</ul>
";
    }
}
