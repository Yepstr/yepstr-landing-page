<?php

/* partials/head.html.twig */
class __TwigTemplate_a611bbf5c656ec35760fdf223da972181c22468da856b403e5a15cfd68582a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
  <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 81
        echo "  </head>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "      <meta charset=\"utf-8\"/>
      <title>
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo "
          |
        ";
        }
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "
      </title>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- meta things (hooray!) -->
      <meta name=\"HandheldFriendly\" content=\"True\">
      <meta name=\"MobileOptimized\" content=\"320\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
      <meta name=\"google-site-verification\" content=\"i4OjwUPWD7mUyPaeMLEWo7xFVUTdqLRav5Hj8diBAsU\"/>
      <meta name=\"description\" content=\"Yepstr är här för att ge dig mer fritid, samtidigt som du hjälper ungdomar in i arbetslivet\">
      <meta name=\"keywords\" content=\"barnpassning, hundpassning, gräsklippning, billig hemhjälp, extrajobb, tonårsjobb, sommarjobb, extraknäck, fönsterputs, fönstertvätt, yepstr, yeppster, jeppster, jepster, yepster, jeppstr\">
      <meta property=\"og:title\" content=";
        // line 21
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "/>
      <meta property=\"og:site_name\" content=\"Yepstr\"/>
      <meta
        property=\"og:description\"
        content=\"På Yepstr kan hushåll få kontakt med drivna ungdomar i grannskapet för enklare uppdrag (gräsklippning, hundpassning etc.). Genom att använda Yepstr är du med och bygger ungdomarnas första riktiga CV. Praktisk erfarenhet utanför skolan leder ofta till det där första sommarjobbet, vilket leder till större chans att få praktik under universitetsstudierna vilket ökar chansen att få det där första riktiga jobbet.\"/>
      <meta property=\"og:url\" content=\"http://yepstr.com\"/>
      <meta property=\"og:image\" content=\" ";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://build/images/fb-image.png");
        echo " \"/>
      <meta property=\"og:type\" content=\"website\"/>
      <meta name=\"msapplication-TileColor\" content=\"\">
      <meta name=\"msapplication-TileImage\" content=\"\">

      <!-- Safari, Chrome, Firefox, Opera -->
      <link rel=\"icon\" type=\"image/png\" href=\" ";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://build/images/favicon.png");
        echo " \"/>
      <!--[if IE]><link rel=\"shortcut icon\" href=\"favicon.ico\"><![endif]-->
      <!-- or, set /favicon.ico for IE10 win -->
      <link rel=\"canonical\" href=\"";
        // line 36
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
      <link rel=\"apple-touch-icon-precomposed\" href=\"\">

      <!-- Our Styles -->
      <!-- Grav CSS hock  -->
      ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "      ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
      <!-- Icons & Favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
      <!-- Apple touch icon (for more: http://mathiasbynens.be/notes/touch-icons) -->

      <!-- Grav js hock  -->
      ";
        // line 50
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

      <!-- Facebook Pixel Code -->
      <script>
        !function(f, b, e, v, n, t, s) {
          if (f.fbq)
            return;
          n = f.fbq = function() {
            n.callMethod
              ? n.callMethod.apply(n, arguments)
              : n.queue.push(arguments)
          };
          if (!f._fbq)
            f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '181024245632288');
        fbq('track', 'PageView');
      </script>
      <noscript><img height=\"1\" width=\"1\" style=\"display:none\" src=\"https://www.facebook.com/tr?id=181024245632288&ev=PageView&noscript=1\"/></noscript>
      <!-- DO NOT MODIFY -->
      <!-- End Facebook Pixel Code -->
    ";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        $this->getAttribute(        // line 43
(isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://build/css/styles.css"), "method");
        // line 44
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  155 => 43,  153 => 42,  150 => 41,  115 => 50,  106 => 45,  104 => 41,  96 => 36,  90 => 33,  81 => 27,  66 => 21,  52 => 10,  45 => 8,  41 => 6,  38 => 5,  33 => 81,  31 => 5,  26 => 3,  23 => 2,  21 => 1,);
    }

    public function getSource()
    {
        return "{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
  <head>
    {% block head %}
      <meta charset=\"utf-8\"/>
      <title>
        {% if header.title %}{{ header.title|e('html') }}
          |
        {% endif %}{{ site.title|e('html') }}
      </title>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- meta things (hooray!) -->
      <meta name=\"HandheldFriendly\" content=\"True\">
      <meta name=\"MobileOptimized\" content=\"320\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
      <meta name=\"google-site-verification\" content=\"i4OjwUPWD7mUyPaeMLEWo7xFVUTdqLRav5Hj8diBAsU\"/>
      <meta name=\"description\" content=\"Yepstr är här för att ge dig mer fritid, samtidigt som du hjälper ungdomar in i arbetslivet\">
      <meta name=\"keywords\" content=\"barnpassning, hundpassning, gräsklippning, billig hemhjälp, extrajobb, tonårsjobb, sommarjobb, extraknäck, fönsterputs, fönstertvätt, yepstr, yeppster, jeppster, jepster, yepster, jeppstr\">
      <meta property=\"og:title\" content={% if header.title %} {{ header.title|e('html') }} | {% endif %} {{ site.title|e('html') }}/>
      <meta property=\"og:site_name\" content=\"Yepstr\"/>
      <meta
        property=\"og:description\"
        content=\"På Yepstr kan hushåll få kontakt med drivna ungdomar i grannskapet för enklare uppdrag (gräsklippning, hundpassning etc.). Genom att använda Yepstr är du med och bygger ungdomarnas första riktiga CV. Praktisk erfarenhet utanför skolan leder ofta till det där första sommarjobbet, vilket leder till större chans att få praktik under universitetsstudierna vilket ökar chansen att få det där första riktiga jobbet.\"/>
      <meta property=\"og:url\" content=\"http://yepstr.com\"/>
      <meta property=\"og:image\" content=\" {{ url('theme://build/images/fb-image.png') }} \"/>
      <meta property=\"og:type\" content=\"website\"/>
      <meta name=\"msapplication-TileColor\" content=\"\">
      <meta name=\"msapplication-TileImage\" content=\"\">

      <!-- Safari, Chrome, Firefox, Opera -->
      <link rel=\"icon\" type=\"image/png\" href=\" {{ url('theme://build/images/favicon.png') }} \"/>
      <!--[if IE]><link rel=\"shortcut icon\" href=\"favicon.ico\"><![endif]-->
      <!-- or, set /favicon.ico for IE10 win -->
      <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
      <link rel=\"apple-touch-icon-precomposed\" href=\"\">

      <!-- Our Styles -->
      <!-- Grav CSS hock  -->
      {% block stylesheets %}
        {% do
          assets.addCss('theme://build/css/styles.css') %}
      {% endblock %}
      {{ assets.css() }}
      <!-- Icons & Favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
      <!-- Apple touch icon (for more: http://mathiasbynens.be/notes/touch-icons) -->

      <!-- Grav js hock  -->
      {{ assets.js() }}

      <!-- Facebook Pixel Code -->
      <script>
        !function(f, b, e, v, n, t, s) {
          if (f.fbq)
            return;
          n = f.fbq = function() {
            n.callMethod
              ? n.callMethod.apply(n, arguments)
              : n.queue.push(arguments)
          };
          if (!f._fbq)
            f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '181024245632288');
        fbq('track', 'PageView');
      </script>
      <noscript><img height=\"1\" width=\"1\" style=\"display:none\" src=\"https://www.facebook.com/tr?id=181024245632288&ev=PageView&noscript=1\"/></noscript>
      <!-- DO NOT MODIFY -->
      <!-- End Facebook Pixel Code -->
    {% endblock head%}
  </head>
";
    }
}
