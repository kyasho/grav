<?php

/* home_single_page.html.twig */
class __TwigTemplate_94c1615a833631646f1e67dc5dcbc996b13a327ddb70f5c6cd65bc689c544e53 extends Twig_Template
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
        $this->loadTemplate("home_single_page.html.twig", "home_single_page.html.twig", 1, "630971199")->display($context);
    }

    public function getTemplateName()
    {
        return "home_single_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* home_single_page.html.twig */
class __TwigTemplate_94c1615a833631646f1e67dc5dcbc996b13a327ddb70f5c6cd65bc689c544e53_630971199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home_single_page.html.twig", 1);
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
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 7
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "home_single_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 9,  74 => 7,  69 => 6,  66 => 5,  62 => 3,  59 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block header %}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     {% for module in page.collection() %}*/
/*         {{ module.content }}*/
/*     {% endfor %}*/
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
