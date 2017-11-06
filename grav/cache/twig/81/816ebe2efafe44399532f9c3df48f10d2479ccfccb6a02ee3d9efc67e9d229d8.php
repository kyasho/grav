<?php

/* blog/pure/item.html.twig */
class __TwigTemplate_19b805aaf953bb580aa71f34471ba1c287b5b45a5245c8a44f3095343c4ce936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blog/pure/blog_theme.html.twig", "blog/pure/item.html.twig", 1);
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
        $this->displayBlock("blog_post", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/pure/item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  35 => 3,  32 => 2,  14 => 1,);
    }
}
/* {% use 'blog/pure/blog_theme.html.twig' %}*/
/* */
/* {% block content %}*/
/* {{ block('blog_post') }}*/
/* {% endblock %}*/
/* */
