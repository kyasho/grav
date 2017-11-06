<?php

/* home_carousel.html.twig */
class __TwigTemplate_732a429b5eeec44a0a385e6ce4b64bc641b851bdfb1fb77760f50e6516bdfbe9 extends Twig_Template
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
        $this->loadTemplate("home_carousel.html.twig", "home_carousel.html.twig", 1, "2006961705")->display($context);
    }

    public function getTemplateName()
    {
        return "home_carousel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* home_carousel.html.twig */
class __TwigTemplate_732a429b5eeec44a0a385e6ce4b64bc641b851bdfb1fb77760f50e6516bdfbe9_2006961705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home_carousel.html.twig", 1);
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
        echo "    ";
        echo (isset($context["navbar1"]) ? $context["navbar1"] : null);
        echo "
    ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 8
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 10,  77 => 8,  72 => 7,  69 => 6,  62 => 3,  59 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block header %}*/
/*     {{ navbar1 }}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     {% for module in page.collection() %}*/
/*         {{ module.content }}*/
/*     {% endfor %}*/
/* */
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
