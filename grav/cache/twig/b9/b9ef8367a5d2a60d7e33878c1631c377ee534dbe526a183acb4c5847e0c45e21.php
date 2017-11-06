<?php

/* home.html.twig */
class __TwigTemplate_a36d9502fa0c21a3ad8a51e7f374c0f12c6d745e5be1a48f25055b6c3bca8a7a extends Twig_Template
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
        $this->loadTemplate("home.html.twig", "home.html.twig", 1, "541350258")->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* home.html.twig */
class __TwigTemplate_a36d9502fa0c21a3ad8a51e7f374c0f12c6d745e5be1a48f25055b6c3bca8a7a_541350258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <header id=\"header\">
        ";
        // line 4
        echo (isset($context["jumbotron1"]) ? $context["jumbotron1"] : null);
        echo "
        ";
        // line 5
        echo (isset($context["navbar1"]) ? $context["navbar1"] : null);
        echo "
    </header>
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  76 => 9,  69 => 5,  65 => 4,  62 => 3,  59 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block header %}*/
/*     <header id="header">*/
/*         {{ jumbotron1 }}*/
/*         {{ navbar1 }}*/
/*     </header>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {{ content }}*/
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
