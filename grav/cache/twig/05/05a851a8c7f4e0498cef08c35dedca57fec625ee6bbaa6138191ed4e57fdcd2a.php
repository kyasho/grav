<?php

/* partials/head.html.twig */
class __TwigTemplate_50dbbcf0267f95d0e9c3cd5a7a839529ccec514ed642e1b0f40c4cda18b281ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\"/>
<title>
  ";
        // line 3
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo "
    |
  ";
        }
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/head.html.twig", 10)->display($context);
        // line 11
        echo "
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\"/>
<link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        $this->getAttribute(        // line 17
(isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/css/app.css"), "method");
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "  ";
        $this->getAttribute(        // line 23
(isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/js/app.js", 1 => array("group" => "bottom")), "method");
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
        return array (  82 => 23,  80 => 22,  77 => 21,  73 => 17,  71 => 16,  68 => 15,  64 => 25,  62 => 21,  57 => 19,  55 => 15,  50 => 13,  46 => 12,  43 => 11,  41 => 10,  34 => 6,  27 => 4,  25 => 3,  21 => 1,);
    }
}
/* <meta charset="utf-8"/>*/
/* <title>*/
/*   {% if header.title %}*/
/*     {{ header.title|e('html') }}*/
/*     |*/
/*   {% endif %}{{ site.title|e('html') }}</title>*/
/* */
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* {% include 'partials/metadata.html.twig' %}*/
/* */
/* <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}"/>*/
/* <link rel="canonical" href="{{ page.url(true, true) }}"/>*/
/* */
/* {% block stylesheets %}*/
/*   {% do*/
/*     assets.addCss('theme://dist/css/app.css') %}*/
/* {% endblock %}*/
/* {{ assets.css() }}*/
/* */
/* {% block javascripts %}*/
/*   {% do*/
/*     assets.addJs('theme://dist/js/app.js', {group: 'bottom'}) %}*/
/* {% endblock %}*/
/* {{ assets.js() }}*/
