<?php

/* error.html.twig */
class __TwigTemplate_7966dfd1a7eeb95ee1252aa4b2ea7efadf4dab59d81a6758d7bad7a91506e0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'masterslider' => array($this, 'block_masterslider'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 5
        echo "     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
    </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

\t";
        // line 8
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "error.html.twig", 8)->display($context);
        // line 9
        echo "\t\t\t<h1>Error ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</p>
    ";
        // line 13
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "error.html.twig", 13)->display($context);
    }

    // line 4
    public function block_masterslider($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  53 => 13,  48 => 11,  42 => 9,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {% block masterslider %}{% endblock %}*/
/*      <div class="above-sidebar-wrapper"><section id="content-section-1"><div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="padding-top: 0px; padding-bottom: 30px; "><div class="container"><div class="gdlr-master-slider-item gdlr-slider-item gdlr-item">*/
/*     </div><div class="clear"></div></div></div><div class="clear"></div></section></div>*/
/* */
/* 	{% include 'partials/blog_sidebar_header.html.twig' %}*/
/* 			<h1>Error {{ page.header.http_response_code }}</h1>*/
/* 			<p>*/
/* 				{{ page.content }}*/
/* 			</p>*/
/*     {% include 'partials/blog_sidebar_footer.html.twig' %}*/
/* {% endblock %}*/
/* */
