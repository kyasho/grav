<?php

/* blog/pure/blog.html.twig */
class __TwigTemplate_06382e4c4a4746d7bac70b9c5dcf92e1b3a6088e40880f3c155480e04f27221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blog/pure/blog_theme.html.twig", "blog/pure/blog.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blog/pure/blog_theme.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'content' => array($this, 'block_content'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 5
        $this->displayBlock("breadcrumbs", $context, $blocks);
        echo "
";
        // line 6
        $this->displayBlock("blog_content", $context, $blocks);
        echo "
";
        // line 7
        $this->displayBlock("blog_posts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/pure/blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  41 => 4,  35 => 3,  32 => 2,  14 => 1,);
    }
}
/* {% use 'blog/pure/blog_theme.html.twig' %}*/
/* */
/* {% block content %}*/
/* {% set collection = page.collection() %}*/
/* {{ block('breadcrumbs') }}*/
/* {{ block('blog_content') }}*/
/* {{ block('blog_posts') }}*/
/* {% endblock %}*/
/* */
