<?php

/* blog.html.twig */
class __TwigTemplate_3943a5810b2dae866bc43e998213dc33308b29fb54d42b39a46984ebd2c4c3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blog/bootstrap/blog_theme.html.twig", "blog.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blog/bootstrap/blog_theme.html.twig".'" cannot be used as a trait.');
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
        echo "<div class=\"container\">
    ";
        // line 6
        $this->displayBlock("breadcrumbs", $context, $blocks);
        echo "
    ";
        // line 7
        $this->displayBlock("blog_content", $context, $blocks);
        echo "
    ";
        // line 8
        $this->displayBlock("blog_posts", $context, $blocks);
        echo "
    ";
        // line 9
        $this->displayBlock("pagination", $context, $blocks);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  50 => 7,  46 => 6,  43 => 5,  41 => 4,  35 => 3,  32 => 2,  14 => 1,);
    }
}
/* {% use 'blog/bootstrap/blog_theme.html.twig' %}*/
/* */
/* {% block content %}*/
/* {% set collection = page.collection() %}*/
/* <div class="container">*/
/*     {{ block('breadcrumbs') }}*/
/*     {{ block('blog_content') }}*/
/*     {{ block('blog_posts') }}*/
/*     {{ block('pagination') }}*/
/* </div>*/
/* {% endblock %}*/
/* */
