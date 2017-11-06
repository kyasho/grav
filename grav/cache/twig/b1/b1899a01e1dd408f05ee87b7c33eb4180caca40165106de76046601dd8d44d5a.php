<?php

/* item.html.twig */
class __TwigTemplate_94065be358fb47d62868fdda615cefe5394672772225523f7f24a4d0afe15101 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "2038297059")->display($context);
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
class __TwigTemplate_94065be358fb47d62868fdda615cefe5394672772225523f7f24a4d0afe15101_2038297059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 5
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 10
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "                    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 15
        echo "
                    <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
                            </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>       
                    <div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
                        <div class=\"with-sidebar-container container\">

                            <div class=\"with-sidebar-left eight columns\">
                                <div class=\"with-sidebar-content twelve columns\">
                                    <div id=\"content-section-2\">
                                        <div class=\"section-container container\">
                                            <div class=\"blog-item-wrapper gdlr-blog-full-type\">
                                                <div class=\"blog-item-holder\">
                                                    <div class=\"main section\" id=\"main\">
                                                        <div class=\"widget Blog\" id=\"Blog1\">
                                                            <div class=\"widget Blog\">
                                                                <div class=\"date-outer\">
                                                                    <div class=\"date-posts\">
                                                                        ";
        // line 32
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 32)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 33
        echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"clear\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>

                            <div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
                                <div class=\"gdlr-item-start-content sidebar-right-item\">
                                    <div class=\"section\" id=\"swid\">
                                        ";
        // line 52
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 52)->display($context);
        // line 53
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                ";
    }

    // line 14
    public function block_masterslider($context, array $blocks = array())
    {
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
        return array (  134 => 14,  124 => 53,  122 => 52,  101 => 33,  99 => 32,  80 => 15,  77 => 14,  74 => 13,  70 => 1,  67 => 10,  65 => 9,  62 => 6,  60 => 5,  58 => 4,  56 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% set base_url = page.parent.url %}*/
/*         {% set feed_url = base_url %}*/
/*             {% if base_url == '/' %}*/
/*                 {% set base_url = '' %}*/
/*                 {% endif %}*/
/* */
/*                 {% if base_url == base_url_relative %}*/
/*                     {% set feed_url = base_url~'/'~page.parent.slug %}*/
/*                 {% endif  %}*/
/* */
/*                 {% block content %}*/
/*                     {% block masterslider %}{% endblock %}*/
/* */
/*                     <div class="above-sidebar-wrapper"><section id="content-section-1"><div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="padding-top: 0px; padding-bottom: 30px; "><div class="container"><div class="gdlr-master-slider-item gdlr-slider-item gdlr-item">*/
/*                             </div><div class="clear"></div></div></div><div class="clear"></div></section></div>       */
/*                     <div class="with-sidebar-wrapper gdlr-right-sidebar">*/
/*                         <div class="with-sidebar-container container">*/
/* */
/*                             <div class="with-sidebar-left eight columns">*/
/*                                 <div class="with-sidebar-content twelve columns">*/
/*                                     <div id="content-section-2">*/
/*                                         <div class="section-container container">*/
/*                                             <div class="blog-item-wrapper gdlr-blog-full-type">*/
/*                                                 <div class="blog-item-holder">*/
/*                                                     <div class="main section" id="main">*/
/*                                                         <div class="widget Blog" id="Blog1">*/
/*                                                             <div class="widget Blog">*/
/*                                                                 <div class="date-outer">*/
/*                                                                     <div class="date-posts">*/
/*                                                                         {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="clear"></div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="clear"></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="clear"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/* */
/*                             <div class="gdlr-sidebar gdlr-right-sidebar four1 columns">*/
/*                                 <div class="gdlr-item-start-content sidebar-right-item">*/
/*                                     <div class="section" id="swid">*/
/*                                         {% include 'partials/sidebar.html.twig' %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/* {% endembed %}*/
/* */
