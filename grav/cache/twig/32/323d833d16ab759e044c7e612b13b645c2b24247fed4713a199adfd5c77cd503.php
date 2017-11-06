<?php

/* partials/base.html.twig */
class __TwigTemplate_72665865acc3979813aa90ec60f7192d3807a8ce410ba8fda6f6499bb541deea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
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
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
  <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "  </head>
  <body class=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

    ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('bottom', $context, $blocks);
        // line 24
        echo "
  </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "      ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 18)->display($context);
        // line 19
        echo "    ";
    }

    // line 21
    public function block_bottom($context, array $blocks = array())
    {
        // line 22
        echo "      ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
    ";
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
        return array (  105 => 22,  102 => 21,  98 => 19,  95 => 18,  92 => 17,  87 => 15,  83 => 13,  80 => 12,  77 => 11,  73 => 7,  70 => 6,  67 => 5,  61 => 24,  59 => 21,  56 => 20,  54 => 17,  51 => 16,  49 => 15,  46 => 14,  44 => 11,  39 => 9,  36 => 8,  34 => 5,  29 => 3,  26 => 2,  24 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: theme_config.default_lang }}">*/
/*   <head>*/
/*     {% block head %}*/
/*       {% include 'partials/head.html.twig' %}*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="{{ page.header.body_classes }}">*/
/* */
/*     {% block header %}*/
/*       {% include 'partials/header.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}{% endblock %}*/
/* */
/*     {% block footer %}*/
/*       {% include 'partials/footer.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block bottom %}*/
/*       {{ assets.js('bottom') }}*/
/*     {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
