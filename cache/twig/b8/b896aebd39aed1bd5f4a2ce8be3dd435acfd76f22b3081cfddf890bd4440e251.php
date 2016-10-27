<?php

/* partials/footer.html.twig */
class __TwigTemplate_023d905fce5e48c8595318a27f84c5bf1cdcf0ced149c8572d1a624191a13fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_navigation' => array($this, 'block_header_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"main-footer\">
  <div class=\"top\">
    <div class=\"inner\">
      ";
        // line 4
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 9
        echo "      <div>
        <a href=\"https://play.google.com/store/apps/details?id=com.yepstr.android\" class=\"download-app-btn download-app-btn--google-play ga-outbound-link\">Get it on Google Play</a>
        <a href=\"https://itunes.apple.com/se/app/yepstr/id1069311381?mt=8\" class=\"download-app-btn download-app-btn--app-store ga-outbound-link\">Availible on the App Store</a>
      </div>
    </div>
  </div>
  <hr/>
  <div class=\"bottom\">
    <div class=\"inner\">
      <div class=\"left\">
        <a class=\"site-logo\" href=\"/\">yepstr</a>
        <p class=\"footer-copy\">Yepstr är en app-baserad marknadsplats där hushåll kan få hjälp av drivna ungdomar!</p>
        <ul class=\"social-links\">
          <li>
            <a href=\"https://www.facebook.com/yepstr\" class=\"facebook ga-outbound-link\">Facebook</a>
          </li>
          <li>
            <a href=\"https://twitter.com/yepstr\" class=\"twitter ga-outbound-link\">Twitter</a>
          </li>
          <li>
            <a href=\"https://www.instagram.com/yepstr/\" class=\"instagram ga-outbound-link\">Instagram</a>
          </li>
          <li>
            <a href=\"mailto:hej@yepstr.com\" class=\"mail ga-contact-footer-link\" data-type=\"Email\">Mail</a>
          </li>
          <li class=\"phone-item\">
            <a href=\"tel:0851519000\" class=\"phone ga-contact-footer-link\" data-type=\"Phone\">08 - 5151 9000</a>
          </li>
        </ul>
      </div>
      <div class=\"right\">
        <a class=\"ga-outbound-link\" href=\"https://mixpanel.com/f/partner\" rel=\"nofollow\"><img src=\"//cdn.mxpnl.com/site_media/images/partner/badge_blue.png\" alt=\"Mobile Analytics\"/></a>
      </div>
    </div>
    <div class=\"footer-org\">Organisationsnummer 556997-9817</div>
  </div>
</footer>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] = function() {
      (b[l].q = b[l].q || []).push(arguments)
    });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));
  ga('create', 'UA-70032747-1', 'auto');
  ga('send', 'pageview');
</script>
<script src=\" ";
        // line 62
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://build/js/build.js");
        echo " \"></script>
";
    }

    // line 4
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 5
        echo "        <nav>
          ";
        // line 6
        $this->loadTemplate("partials/navigation.html.twig", "partials/footer.html.twig", 6)->display($context);
        // line 7
        echo "        </nav>
      ";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 7,  94 => 6,  91 => 5,  88 => 4,  82 => 62,  27 => 9,  25 => 4,  20 => 1,);
    }

    public function getSource()
    {
        return "<footer class=\"main-footer\">
  <div class=\"top\">
    <div class=\"inner\">
      {% block header_navigation %}
        <nav>
          {% include 'partials/navigation.html.twig' %}
        </nav>
      {% endblock %}
      <div>
        <a href=\"https://play.google.com/store/apps/details?id=com.yepstr.android\" class=\"download-app-btn download-app-btn--google-play ga-outbound-link\">Get it on Google Play</a>
        <a href=\"https://itunes.apple.com/se/app/yepstr/id1069311381?mt=8\" class=\"download-app-btn download-app-btn--app-store ga-outbound-link\">Availible on the App Store</a>
      </div>
    </div>
  </div>
  <hr/>
  <div class=\"bottom\">
    <div class=\"inner\">
      <div class=\"left\">
        <a class=\"site-logo\" href=\"/\">yepstr</a>
        <p class=\"footer-copy\">Yepstr är en app-baserad marknadsplats där hushåll kan få hjälp av drivna ungdomar!</p>
        <ul class=\"social-links\">
          <li>
            <a href=\"https://www.facebook.com/yepstr\" class=\"facebook ga-outbound-link\">Facebook</a>
          </li>
          <li>
            <a href=\"https://twitter.com/yepstr\" class=\"twitter ga-outbound-link\">Twitter</a>
          </li>
          <li>
            <a href=\"https://www.instagram.com/yepstr/\" class=\"instagram ga-outbound-link\">Instagram</a>
          </li>
          <li>
            <a href=\"mailto:hej@yepstr.com\" class=\"mail ga-contact-footer-link\" data-type=\"Email\">Mail</a>
          </li>
          <li class=\"phone-item\">
            <a href=\"tel:0851519000\" class=\"phone ga-contact-footer-link\" data-type=\"Phone\">08 - 5151 9000</a>
          </li>
        </ul>
      </div>
      <div class=\"right\">
        <a class=\"ga-outbound-link\" href=\"https://mixpanel.com/f/partner\" rel=\"nofollow\"><img src=\"//cdn.mxpnl.com/site_media/images/partner/badge_blue.png\" alt=\"Mobile Analytics\"/></a>
      </div>
    </div>
    <div class=\"footer-org\">Organisationsnummer 556997-9817</div>
  </div>
</footer>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] = function() {
      (b[l].q = b[l].q || []).push(arguments)
    });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));
  ga('create', 'UA-70032747-1', 'auto');
  ga('send', 'pageview');
</script>
<script src=\" {{ url('theme://build/js/build.js') }} \"></script>
";
    }
}
