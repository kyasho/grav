<?php

/* blog.html.twig */
class __TwigTemplate_165950e99b56e5bb0eaadc505b6232bcc57228b30ab806809bbf81c581fd3bc9 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "264699342")->display($context);
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 5,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_165950e99b56e5bb0eaadc505b6232bcc57228b30ab806809bbf81c581fd3bc9_264699342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        $this->loadTemplate((("blog/" . (isset($context["framework"]) ? $context["framework"] : null)) . "/blog.html.twig"), "blog.html.twig", 3)->display($context);
        // line 4
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 4,  69 => 3,  66 => 2,  49 => 1,  21 => 5,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block content %}*/
/*     {% include 'blog/' ~ framework ~ '/blog.html.twig' %}*/
/*     {% endblock %}*/
/* {% endembed %}  */
