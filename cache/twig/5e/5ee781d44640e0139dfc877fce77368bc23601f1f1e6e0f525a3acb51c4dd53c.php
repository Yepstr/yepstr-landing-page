<?php

/* forms/default/form.html.twig */
class __TwigTemplate_4203e7d86cd210515f99eab6fd6d0c8bc020575221eb769155fb343fef4b8599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()))) {
                // line 3
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL");
                echo "</p></div>
    ";
            } else {
                // line 5
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</p></div>
    ";
            }
        }
        // line 8
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 9
        $context["multipart"] = "";
        // line 10
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 13
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 14
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 15
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $context["action"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array()))));
        // line 19
        echo "
";
        // line 20
        if (((isset($context["action"]) ? $context["action"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 21
            echo "    ";
            $context["action"] = (((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 23
        echo "
<form name=\"";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 25
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\"
      method=\"";
        // line 26
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo "
      ";
        // line 27
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array());
            echo "\"";
        }
        // line 28
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 31
        echo ">

  ";
        // line 33
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 36
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 37
                echo "        ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 38
                echo "    ";
            }
            // line 39
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 40
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 40)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 41
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
  ";
        // line 43
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 43)->display($context);
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 46
        echo "
  ";
        // line 47
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 52
            echo "      <button
            ";
            // line 53
            $this->displayBlock('button_classes', $context, $blocks);
            // line 56
            echo "            type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"
        >
            ";
            // line 58
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
        </button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 65
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 28
    public function block_form_classes($context, array $blocks = array())
    {
        // line 29
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
            echo "\"";
        }
        // line 30
        echo "      ";
    }

    // line 33
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 45
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 47
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 48
        echo "  <div class=\"buttons\">
  ";
    }

    // line 53
    public function block_button_classes($context, array $blocks = array())
    {
        // line 54
        echo "            class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo "\"
            ";
    }

    // line 62
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 63
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 63,  293 => 62,  286 => 54,  283 => 53,  278 => 48,  275 => 47,  270 => 45,  265 => 33,  261 => 30,  254 => 29,  251 => 28,  244 => 66,  241 => 65,  239 => 62,  236 => 61,  219 => 58,  213 => 56,  211 => 53,  208 => 52,  191 => 51,  188 => 50,  186 => 47,  183 => 46,  181 => 45,  178 => 44,  176 => 43,  173 => 42,  159 => 41,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  139 => 36,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 28,  104 => 27,  98 => 26,  94 => 25,  90 => 24,  87 => 23,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  66 => 15,  63 => 14,  60 => 13,  56 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  38 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSource()
    {
        return "{% if form.message %}
    {% if form.inline_errors and form.messages %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ \"FORM.VALIDATION_FAIL\"|t|raw }}</p></div>
    {% else %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
    {% endif %}
{% endif %}
{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"buttons\">
  {% endblock %}

  {% for button in form.buttons %}
      <button
            {% block button_classes %}
            class=\"{{ button.classes|default('button') }}\"
            {% endblock %}
            type=\"{{ button.type|default('submit') }}\"
        >
            {{ button.value|t|default('Submit') }}
        </button>
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
";
    }
}
