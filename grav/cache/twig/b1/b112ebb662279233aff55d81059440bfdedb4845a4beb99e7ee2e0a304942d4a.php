<?php

/* item.html.twig */
class __TwigTemplate_8245fc7e282db1f048b36ef166940590e7aa2464f9a4a306ba0960c2c33196be extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "357956522")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* item.html.twig */
class __TwigTemplate_8245fc7e282db1f048b36ef166940590e7aa2464f9a4a306ba0960c2c33196be_357956522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate((("blog/" . (isset($context["framework"]) ? $context["framework"] : null)) . "/item.html.twig"), "item.html.twig", 3)->display($context);
        // line 4
        echo "    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block content %}*/
/*     {% include 'blog/' ~ framework ~ '/item.html.twig' %}*/
/*     {% endblock %}*/
/* {% endembed %}*/
