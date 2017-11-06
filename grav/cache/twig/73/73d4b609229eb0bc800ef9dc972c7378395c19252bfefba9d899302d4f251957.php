<?php

/* partials/base.html.twig */
class __TwigTemplate_040e3c1f95502de4f841b8205bfa6ade02d79c824369456566355e240a38a254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["add"] = $this->loadTemplate("macros/macros.html.twig", "partials/base.html.twig", 2);
        // line 3
        echo "
<!DOCTYPE html>
<html class=\"no-js\">
<head>
  ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "</head>

";
        // line 55
        $context["bodyClassSwitch"] = _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "theme", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "theme", array(), "any", false, true), "header", array()), $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "header", array()))) : ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "header", array()))), 0);
        // line 56
        echo "
";
        // line 57
        $context["onepage"] = _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "theme", array(), "any", false, true), "onepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "theme", array(), "any", false, true), "onepage", array()), $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "onepage", array()))) : ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "onepage", array()))), 0);
        // line 58
        echo "
<body class=\"";
        // line 59
        ob_start();
        echo $context["add"]->getbodyClass((isset($context["bodyClassSwitch"]) ? $context["bodyClassSwitch"] : null));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "progress", array()), "enabled", array())) {
            echo " no-scroll";
        }
        echo "\" mode=\"";
        echo (isset($context["bodyClassSwitch"]) ? $context["bodyClassSwitch"] : null);
        echo "\"";
        if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "debug", array())) {
            echo " debug";
        }
        if ((isset($context["onepage"]) ? $context["onepage"] : null)) {
            echo " onepage";
        }
        echo ">

  ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
  ";
        // line 85
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "progress", array()), "enabled", array())) {
            // line 86
            echo "    <div id=\"progress\">
      <div class=\"inner\">
        ";
            // line 88
            echo twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "progress", array()), "info", array()), array("%percentage%" => "<span class=\"p\">0%</span>", "%number%" => "<span class=\"n\">0/0</span>"));
            echo "
        <div class=\"bar\"></div>
      </div>
    </div>
    ";
            // line 92
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/gsap/src/minified/TweenMax.min.js"), "method");
            // line 93
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/ElasticProgres/dist/elastic-progress.min.js"), "method");
            // line 94
            echo "  ";
        }
        // line 95
        echo "
  ";
        // line 97
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "  <!-- Scripts -->
  ";
        // line 116
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
  ";
        // line 117
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "owl"), "method");
        echo "
  ";
        // line 118
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bootstrap"), "method");
        echo "
  ";
        // line 119
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "grid"), "method");
        echo "
  ";
        // line 120
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "maps"), "method");
        echo "
  ";
        // line 121
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "plyr"), "method");
        echo "

  ";
        // line 123
        echo (isset($context["cookiesnotice_markup"]) ? $context["cookiesnotice_markup"] : null);
        echo "

</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "
    <!--
    ███████╗██╗      █████╗ ████████╗███████╗███╗   ██╗
    ██╔════╝██║     ██╔══██╗╚══██╔══╝██╔════╝████╗  ██║
    █████╗  ██║     ███████║   ██║   █████╗  ██╔██╗ ██║
    ██╔══╝  ██║     ██╔══██║   ██║   ██╔══╝  ██║╚██╗██║
    ██║     ███████╗██║  ██║   ██║   ███████╗██║ ╚████║
    ╚═╝     ╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚═╝  ╚═══╝
    2015 © Marvin Heilemann
    -->

    <meta charset=\"utf-8\"/>
    <link rel=\"canonical\" href=\"";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">

    <title>";
        // line 24
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " ";
            echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "seperator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "seperator", array()), "|")) : ("|"));
            echo " ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    ";
        // line 26
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 26)->display($context);
        // line 27
        echo "
    <!-- Language -->
    <meta http-equiv=\"language\" content=\"";
        // line 29
        echo $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array());
        echo "\">
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <meta name=\"audience\" lang=\"";
        // line 31
        echo $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array());
        echo "\" content=\"all\">

    <!-- Favicon -->
    ";
        // line 34
        $this->loadTemplate("partials/favicon.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "
    <!-- Open Graph -->
    ";
        // line 37
        $this->loadTemplate("partials/open-graph.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "
    <!-- Styles -->
    ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
  ";
    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 41
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/lib/animate.css/animate.css"), "method");
        // line 42
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/lib/owl.carousel/dist/assets/owl.carousel.min.css"), "method");
        // line 43
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/lib/ionicons/css/ionicons.min.css"), "method");
        // line 44
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/styles/main.css"), "method");
        // line 45
        echo "
      ";
        // line 46
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 47
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "dist/lib/html5shiv/dist/html5shiv.js"), "method");
            // line 48
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "dist/lib/respond/dest/respond.min.js"), "method");
            // line 49
            echo "      ";
        }
        // line 50
        echo "    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('bottom', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "  ";
    }

    // line 62
    public function block_navigation($context, array $blocks = array())
    {
        // line 63
        echo "      ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "    ";
    }

    // line 66
    public function block_header($context, array $blocks = array())
    {
        // line 67
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "    ";
    }

    // line 70
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 71
        echo "      ";
        $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "    ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_bottom($context, array $blocks = array())
    {
        // line 77
        echo "      ";
        $this->loadTemplate("partials/bottom.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "    ";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "    ";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 99
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/tether/dist/js/tether.min.js"), "method");
        // line 100
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/bootstrap/dist/js/bootstrap.min.js"), "method");
        // line 101
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/plyr/dist/plyr.js"), "method");
        // line 102
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/skrollr/dist/skrollr.min.js"), "method");
        // line 103
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/isotope/dist/isotope.pkgd.min.js"), "method");
        // line 104
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/imagesloaded/imagesloaded.pkgd.min.js"), "method");
        // line 105
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/waypoints/lib/jquery.waypoints.min.js"), "method");
        // line 106
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/owl.carousel/dist/owl.carousel.js"), "method");
        // line 107
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/tweening-counter/standalone/tweening-counter.min.js"), "method");
        // line 108
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/midnight/midnight.jquery.min.js"), "method");
        // line 109
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/jQuery-One-Page-Nav/jquery.nav.js"), "method");
        // line 110
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/lib/imagesLoaded/imagesLoaded.pkgd.min.js"), "method");
        // line 111
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/scripts/filter.js"), "method");
        // line 112
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/scripts/breakpoints.js"), "method");
        // line 113
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/scripts/main.js"), "method");
        // line 114
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 114,  385 => 113,  382 => 112,  379 => 111,  376 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  361 => 105,  358 => 104,  355 => 103,  352 => 102,  349 => 101,  346 => 100,  343 => 99,  340 => 98,  337 => 97,  333 => 82,  330 => 81,  327 => 80,  323 => 78,  320 => 77,  317 => 76,  312 => 74,  308 => 72,  305 => 71,  302 => 70,  298 => 68,  295 => 67,  292 => 66,  288 => 64,  285 => 63,  282 => 62,  278 => 83,  276 => 80,  273 => 79,  271 => 76,  268 => 75,  266 => 74,  263 => 73,  261 => 70,  258 => 69,  256 => 66,  253 => 65,  250 => 62,  247 => 61,  243 => 50,  240 => 49,  237 => 48,  234 => 47,  232 => 46,  229 => 45,  226 => 44,  223 => 43,  220 => 42,  217 => 41,  214 => 40,  207 => 51,  205 => 40,  201 => 38,  199 => 37,  195 => 35,  193 => 34,  187 => 31,  182 => 29,  178 => 27,  176 => 26,  165 => 24,  158 => 20,  144 => 8,  141 => 7,  132 => 123,  127 => 121,  123 => 120,  119 => 119,  115 => 118,  111 => 117,  107 => 116,  104 => 115,  101 => 97,  98 => 95,  95 => 94,  92 => 93,  90 => 92,  83 => 88,  79 => 86,  77 => 85,  74 => 84,  72 => 61,  53 => 59,  50 => 58,  48 => 57,  45 => 56,  43 => 55,  39 => 53,  37 => 7,  31 => 3,  29 => 2,);
    }
}
/* {# Import macros #}*/
/* {% import "macros/macros.html.twig" as add %}*/
/* */
/* <!DOCTYPE html>*/
/* <html class="no-js">*/
/* <head>*/
/*   {% block head %}*/
/* */
/*     <!--*/
/*     ███████╗██╗      █████╗ ████████╗███████╗███╗   ██╗*/
/*     ██╔════╝██║     ██╔══██╗╚══██╔══╝██╔════╝████╗  ██║*/
/*     █████╗  ██║     ███████║   ██║   █████╗  ██╔██╗ ██║*/
/*     ██╔══╝  ██║     ██╔══██║   ██║   ██╔══╝  ██║╚██╗██║*/
/*     ██║     ███████╗██║  ██║   ██║   ███████╗██║ ╚████║*/
/*     ╚═╝     ╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚═╝  ╚═══╝*/
/*     2015 © Marvin Heilemann*/
/*     -->*/
/* */
/*     <meta charset="utf-8"/>*/
/*     <link rel="canonical" href="{{ page.url(true) }}">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">*/
/* */
/*     <title>{% if header.title %}{{ header.title|e('html') }} {{ theme.generall.seperator|default('|') }} {% endif %}{{ site.title|e('html') }}</title>*/
/* */
/*     {% include 'partials/metadata.html.twig' %}*/
/* */
/*     <!-- Language -->*/
/*     <meta http-equiv="language" content="{{ langswitcher.current }}">*/
/*     <meta http-equiv="Pragma" content="no-cache">*/
/*     <meta name="audience" lang="{{ langswitcher.current }}" content="all">*/
/* */
/*     <!-- Favicon -->*/
/*     {% include 'partials/favicon.html.twig' %}*/
/* */
/*     <!-- Open Graph -->*/
/*     {% include 'partials/open-graph.html.twig' %}*/
/* */
/*     <!-- Styles -->*/
/*     {% block stylesheets %}*/
/*       {% do assets.addCss('theme://dist/lib/animate.css/animate.css') %}*/
/*       {% do assets.addCss('theme://dist/lib/owl.carousel/dist/assets/owl.carousel.min.css') %}*/
/*       {% do assets.addCss('theme://dist/lib/ionicons/css/ionicons.min.css') %}*/
/*       {% do assets.addCss('theme://dist/styles/main.css') %}*/
/* */
/*       {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}*/
/*         {% do assets.add('dist/lib/html5shiv/dist/html5shiv.js') %}*/
/*         {% do assets.add('dist/lib/respond/dest/respond.min.js') %}*/
/*       {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* {% set bodyClassSwitch = page.header.theme.header|default(theme.generall.header)|default(0) %}*/
/* */
/* {% set onepage = page.header.theme.onepage|default(theme.generall.onepage)|default(0) %}*/
/* */
/* <body class="{% spaceless %}{{ add.bodyClass(bodyClassSwitch) }}{% endspaceless %}{% if theme.generall.progress.enabled %} no-scroll{% endif %}" mode="{{ bodyClassSwitch }}"{% if theme.generall.debug %} debug{% endif %}{% if onepage %} onepage{% endif %}>*/
/* */
/*   {% block body %}*/
/*     {% block navigation %}*/
/*       {% include 'partials/navigation.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block header %}*/
/*       {% include 'partials/header.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block breadcrumbs %}*/
/*       {% include 'partials/breadcrumbs.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}{% endblock %}*/
/* */
/*     {% block bottom %}*/
/*       {% include 'partials/bottom.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*       {% include 'partials/footer.html.twig' %}*/
/*     {% endblock %}*/
/*   {% endblock %}*/
/* */
/*   {% if theme.generall.progress.enabled %}*/
/*     <div id="progress">*/
/*       <div class="inner">*/
/*         {{ theme.generall.progress.info|replace({'%percentage%': '<span class="p">0%</span>', '%number%': '<span class="n">0/0</span>' }) }}*/
/*         <div class="bar"></div>*/
/*       </div>*/
/*     </div>*/
/*     {% do assets.addJs('theme://dist/lib/gsap/src/minified/TweenMax.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/ElasticProgres/dist/elastic-progress.min.js') %}*/
/*   {% endif %}*/
/* */
/*   {# Main script block #}*/
/*   {% block javascripts %}*/
/*     {% do assets.add('jquery', 101) %}*/
/*     {% do assets.addJs('theme://dist/lib/tether/dist/js/tether.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/bootstrap/dist/js/bootstrap.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/plyr/dist/plyr.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/skrollr/dist/skrollr.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/isotope/dist/isotope.pkgd.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/imagesloaded/imagesloaded.pkgd.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/waypoints/lib/jquery.waypoints.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/owl.carousel/dist/owl.carousel.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/tweening-counter/standalone/tweening-counter.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/midnight/midnight.jquery.min.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/jQuery-One-Page-Nav/jquery.nav.js') %}*/
/*     {% do assets.addJs('theme://dist/lib/imagesLoaded/imagesLoaded.pkgd.min.js') %}*/
/*     {% do assets.addJs('theme://dist/scripts/filter.js') %}*/
/*     {% do assets.addJs('theme://dist/scripts/breakpoints.js') %}*/
/*     {% do assets.addJs('theme://dist/scripts/main.js') %}*/
/*   {% endblock %}*/
/*   <!-- Scripts -->*/
/*   {{ assets.js() }}*/
/*   {{ assets.js('owl') }}*/
/*   {{ assets.js('bootstrap') }}*/
/*   {{ assets.js('grid') }}*/
/*   {{ assets.js('maps') }}*/
/*   {{ assets.js('plyr') }}*/
/* */
/*   {{ cookiesnotice_markup }}*/
/* */
/* </body>*/
/* </html>*/
/* */
