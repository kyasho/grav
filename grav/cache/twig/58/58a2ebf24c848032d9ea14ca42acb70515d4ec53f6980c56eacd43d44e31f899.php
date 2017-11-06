<?php

/* blog/bootstrap/blog_theme.html.twig */
class __TwigTemplate_627304d4c043918b48a51e39351bc1c146632ad6e462f5722ac5e2c6a2fc706a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blog/pure/blog_theme.html.twig", "blog/bootstrap/blog_theme.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blog/pure/blog_theme.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'breadcrumbs' => array($this, 'block_breadcrumbs'),
                'pagination' => array($this, 'block_pagination'),
                'blog_content' => array($this, 'block_blog_content'),
                'blog_posts' => array($this, 'block_blog_posts'),
                'blog_post' => array($this, 'block_blog_post'),
                'post_header' => array($this, 'block_post_header'),
                'post_header_left' => array($this, 'block_post_header_left'),
                'post_header_title' => array($this, 'block_post_header_title'),
                'post_header_taxonomy' => array($this, 'block_post_header_taxonomy'),
                'post_header_right' => array($this, 'block_post_header_right'),
                'post_header_date' => array($this, 'block_post_header_date'),
                'post_header_image' => array($this, 'block_post_header_image'),
                'post_contents' => array($this, 'block_post_contents'),
                'prev_next_buttons' => array($this, 'block_prev_next_buttons'),
                'sidebar_taxonomy' => array($this, 'block_sidebar_taxonomy'),
                'archives' => array($this, 'block_archives'),
                'sidebar' => array($this, 'block_sidebar'),
                'feed' => array($this, 'block_feed'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('pagination', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('blog_content', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('blog_posts', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('blog_post', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('post_header', $context, $blocks);
        // line 66
        echo "

";
        // line 68
        $this->displayBlock('post_header_left', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('post_header_title', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('post_header_taxonomy', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('post_header_right', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('post_header_date', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('post_header_image', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('post_contents', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('prev_next_buttons', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('sidebar_taxonomy', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('archives', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('sidebar', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('feed', $context, $blocks);
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            ";
            // line 7
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog/bootstrap/blog_theme.html.twig", 7)->display($context);
            // line 8
            echo "        </div>
    </div>
";
        }
    }

    // line 13
    public function block_pagination($context, array $blocks = array())
    {
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 15
            echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
            // line 17
            $this->loadTemplate("partials/pagination.html.twig", "blog/bootstrap/blog_theme.html.twig", 17)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 18
            echo "    </div>
</div>
";
        }
        // line 20
        echo "  
";
    }

    // line 23
    public function block_blog_content($context, array $blocks = array())
    {
        // line 24
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()) != "")) {
            // line 25
            echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
            // line 27
            $this->displayParentBlock("blog_content", $context, $blocks);
            echo "
    </div>
</div>
";
        }
    }

    // line 33
    public function block_blog_posts($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"row\">
    <div class=\"col-md-9\">   
    ";
        // line 36
        $this->displayBlock("posts", $context, $blocks);
        echo "  
    </div>
    <div class=\"col-md-3\">        
    ";
        // line 39
        $this->displayBlock("sidebar", $context, $blocks);
        echo "
    </div>   
</div>
";
    }

    // line 44
    public function block_blog_post($context, array $blocks = array())
    {
        // line 45
        $context["blog"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array());
        // line 46
        $context["truncate"] = false;
        // line 47
        $context["big_header"] = true;
        // line 48
        $this->displayBlock("breadcrumbs", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"col-md-9 blog blog-content-item\"> 
    ";
        // line 51
        $this->displayBlock("post", $context, $blocks);
        echo "        
    </div>
    <div class=\"col-md-3\">  
    ";
        // line 54
        $this->displayBlock("sidebar", $context, $blocks);
        echo "
    </div>   
</div>
";
    }

    // line 59
    public function block_post_header($context, array $blocks = array())
    {
        // line 60
        echo "<div class=\"row list-blog-header\">
    ";
        // line 61
        $this->displayBlock("post_header_left", $context, $blocks);
        echo "  
    ";
        // line 62
        $this->displayBlock("post_header_right", $context, $blocks);
        echo " 
    ";
        // line 63
        $this->displayBlock("post_header_image", $context, $blocks);
        echo " 
</div>
";
    }

    // line 68
    public function block_post_header_left($context, array $blocks = array())
    {
        echo "   
<div class=\"col-md-10\">
    ";
        // line 70
        $this->displayBlock("post_header_title", $context, $blocks);
        echo "   
    ";
        // line 71
        $this->displayBlock("post_header_taxonomy", $context, $blocks);
        echo "
</div>
";
    }

    // line 75
    public function block_post_header_title($context, array $blocks = array())
    {
        // line 76
        $context["title_tag"] = "h2";
        // line 77
        $this->displayParentBlock("post_header_title", $context, $blocks);
        echo "
";
    }

    // line 80
    public function block_post_header_taxonomy($context, array $blocks = array())
    {
        // line 81
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 82
            echo "    <div class=\"tags\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 84
                echo "        <a class=\"btn btn-primary\" href=\"";
                echo (isset($context["blog_base_url"]) ? $context["blog_base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "    </div>
";
        }
    }

    // line 90
    public function block_post_header_right($context, array $blocks = array())
    {
        echo "   
<div class=\"col-md-2\">
    ";
        // line 92
        $this->displayBlock("post_header_date", $context, $blocks);
        echo "     
    ";
        // line 93
        $this->displayBlock("post_header_date_extended", $context, $blocks);
        echo "   
</div>
";
    }

    // line 97
    public function block_post_header_date($context, array $blocks = array())
    {
        // line 98
        echo "<div class=\"list-blog-date\">
    <div class=\"day\">";
        // line 99
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</div>
    <div class=\"month\">";
        // line 100
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</div>
</div>
";
    }

    // line 104
    public function block_post_header_image($context, array $blocks = array())
    {
        echo "   
";
        // line 105
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 106
            echo "    ";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "html", array(0 => "", 1 => "", 2 => "img-responsive"), "method");
            echo "
";
        } else {
            // line 108
            echo "    ";
            if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
                // line 109
                echo "        ";
                if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                    // line 110
                    echo "            ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                    // line 111
                    echo "        ";
                } else {
                    // line 112
                    echo "            ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                    // line 113
                    echo "        ";
                }
                // line 114
                echo "        ";
                echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array(0 => "", 1 => "", 2 => "img-responsive"), "method");
                echo "
    ";
            }
        }
    }

    // line 119
    public function block_post_contents($context, array $blocks = array())
    {
        // line 120
        echo "<div class=\"row list-blog-padding\">
    <div class=\"col-md-12\">
        ";
        // line 122
        $this->displayParentBlock("post_contents", $context, $blocks);
        echo "
    </div>
</div>
";
    }

    // line 127
    public function block_prev_next_buttons($context, array $blocks = array())
    {
        // line 128
        if (((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null) || ((array_key_exists("force_hide_prev_next", $context)) ? (_twig_default_filter((isset($context["force_hide_prev_next"]) ? $context["force_hide_prev_next"] : null), false)) : (false)))) {
            // line 129
            echo "<p class=\"text-center\">
    ";
            // line 130
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 131
                echo "    <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.NEXT_POST");
                echo "</a>
    ";
            }
            // line 133
            echo "
    ";
            // line 134
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 135
                echo "    <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.PREVIOUS_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
    ";
            }
            // line 137
            echo "</p>
";
        }
    }

    // line 141
    public function block_sidebar_taxonomy($context, array $blocks = array())
    {
        // line 142
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 143
            echo "<div class=\"sidebar-content\">
    <";
            // line 144
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.POPULAR_TAGS");
            echo "</";
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">
    
    ";
            // line 146
            $context["taxonomy"] = "tag";
            // line 147
            echo "    ";
            $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
            // line 148
            echo "    ";
            if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
                // line 149
                echo "    <span class=\"tags\">
        ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array"));
                foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                    // line 151
                    echo "            ";
                    $context["active"] = ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : null)), "method") == $context["tax"])) ? (" active") : (""));
                    // line 152
                    echo "            <a class=\"btn btn-primary tags-cloud";
                    echo (isset($context["active"]) ? $context["active"] : null);
                    echo "\" href=\"";
                    echo (isset($context["blog_base_url"]) ? $context["blog_base_url"] : null);
                    echo "/";
                    echo (isset($context["taxonomy"]) ? $context["taxonomy"] : null);
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["tax"], "url");
                    echo "\">";
                    echo $context["tax"];
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "    </span>
    ";
            }
            // line 156
            echo "</div>
";
        }
    }

    // line 160
    public function block_archives($context, array $blocks = array())
    {
        // line 161
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 162
            echo "<div class=\"sidebar-content\">
    <";
            // line 163
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.ARCHIVES");
            echo "</";
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">
\t<ul class=\"archives\">
    ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archives_data"]) ? $context["archives_data"] : null));
            foreach ($context['_seq'] as $context["month"] => $context["items"]) {
                // line 166
                echo "        <li>
            <a href=\"";
                // line 167
                echo (isset($context["blog_base_url"]) ? $context["blog_base_url"] : null);
                echo "/archives_month";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url");
                echo "\">
            ";
                // line 168
                if ((isset($context["archives_show_count"]) ? $context["archives_show_count"] : null)) {
                    // line 169
                    echo "            <span class=\"badge\">";
                    echo twig_length_filter($this->env, $context["items"]);
                    echo "</span>
            ";
                }
                // line 171
                echo "            <span class=\"archive_date\">";
                echo $context["month"];
                echo "</span>
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "    </ul>
</div>
";
        }
    }

    // line 180
    public function block_sidebar($context, array $blocks = array())
    {
        echo "  
";
        // line 181
        $this->displayBlock("urls", $context, $blocks);
        echo "
";
        // line 182
        $context["title_tag"] = "h3";
        // line 183
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    // line 186
    public function block_feed($context, array $blocks = array())
    {
        // line 187
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 188
            echo "<div class=\"sidebar-content\">
    <";
            // line 189
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.SYNDICATE");
            echo "</";
            echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
            echo ">
    <div class=\"btn-group\">
        <a class=\"btn btn-warning\" href=\"";
            // line 191
            echo (isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.ATOM");
            echo "</a>
        <a class=\"btn btn-warning\" href=\"";
            // line 192
            echo (isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.RSS");
            echo "</a>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "blog/bootstrap/blog_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  615 => 192,  609 => 191,  600 => 189,  597 => 188,  595 => 187,  592 => 186,  586 => 183,  584 => 182,  580 => 181,  575 => 180,  568 => 175,  557 => 171,  551 => 169,  549 => 168,  542 => 167,  539 => 166,  535 => 165,  526 => 163,  523 => 162,  521 => 161,  518 => 160,  512 => 156,  508 => 154,  491 => 152,  488 => 151,  484 => 150,  481 => 149,  478 => 148,  475 => 147,  473 => 146,  464 => 144,  461 => 143,  459 => 142,  456 => 141,  450 => 137,  442 => 135,  440 => 134,  437 => 133,  429 => 131,  427 => 130,  424 => 129,  422 => 128,  419 => 127,  411 => 122,  407 => 120,  404 => 119,  395 => 114,  392 => 113,  389 => 112,  386 => 111,  383 => 110,  380 => 109,  377 => 108,  371 => 106,  369 => 105,  364 => 104,  357 => 100,  353 => 99,  350 => 98,  347 => 97,  340 => 93,  336 => 92,  330 => 90,  324 => 86,  310 => 84,  306 => 83,  303 => 82,  301 => 81,  298 => 80,  292 => 77,  290 => 76,  287 => 75,  280 => 71,  276 => 70,  270 => 68,  263 => 63,  259 => 62,  255 => 61,  252 => 60,  249 => 59,  241 => 54,  235 => 51,  229 => 48,  227 => 47,  225 => 46,  223 => 45,  220 => 44,  212 => 39,  206 => 36,  202 => 34,  199 => 33,  190 => 27,  186 => 25,  184 => 24,  181 => 23,  176 => 20,  171 => 18,  169 => 17,  165 => 15,  163 => 14,  160 => 13,  153 => 8,  151 => 7,  147 => 5,  145 => 4,  142 => 3,  138 => 186,  135 => 185,  133 => 180,  130 => 179,  128 => 160,  125 => 159,  123 => 141,  120 => 140,  118 => 127,  115 => 126,  113 => 119,  110 => 118,  108 => 104,  105 => 103,  103 => 97,  100 => 96,  98 => 90,  95 => 89,  93 => 80,  90 => 79,  88 => 75,  85 => 74,  83 => 68,  79 => 66,  77 => 59,  74 => 58,  72 => 44,  69 => 43,  67 => 33,  64 => 32,  62 => 23,  59 => 22,  57 => 13,  54 => 12,  52 => 3,  49 => 2,  14 => 1,);
    }
}
/* {% use "blog/pure/blog_theme.html.twig" %}*/
/* */
/* {% block breadcrumbs %}*/
/* {% if config.plugins.breadcrumbs.enabled %}*/
/*     <div class="row">*/
/*         <div class="col-md-12 col-sm-12">*/
/*             {% include 'partials/breadcrumbs.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block pagination %}*/
/* {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}  */
/* {% endblock %}*/
/* */
/* {% block blog_content %}*/
/* {% if page.content != "" %}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         {{ parent() }}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block blog_posts %}*/
/* <div class="row">*/
/*     <div class="col-md-9">   */
/*     {{ block('posts') }}  */
/*     </div>*/
/*     <div class="col-md-3">        */
/*     {{ block('sidebar') }}*/
/*     </div>   */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block blog_post %}*/
/* {% set blog = page.parent %}*/
/* {% set truncate = false %}*/
/* {% set big_header = true %}*/
/* {{ block('breadcrumbs') }}*/
/* <div class="row">*/
/*     <div class="col-md-9 blog blog-content-item"> */
/*     {{ block('post') }}        */
/*     </div>*/
/*     <div class="col-md-3">  */
/*     {{ block('sidebar') }}*/
/*     </div>   */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block post_header %}*/
/* <div class="row list-blog-header">*/
/*     {{ block('post_header_left') }}  */
/*     {{ block('post_header_right') }} */
/*     {{ block('post_header_image') }} */
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block post_header_left %}   */
/* <div class="col-md-10">*/
/*     {{ block('post_header_title') }}   */
/*     {{ block('post_header_taxonomy') }}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block post_header_title %}*/
/* {% set title_tag = 'h2' %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block post_header_taxonomy %}*/
/* {% if page.taxonomy.tag %}*/
/*     <div class="tags">*/
/*         {% for tag in page.taxonomy.tag %}*/
/*         <a class="btn btn-primary" href="{{ blog_base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block post_header_right %}   */
/* <div class="col-md-2">*/
/*     {{ block('post_header_date') }}     */
/*     {{ block('post_header_date_extended') }}   */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block post_header_date %}*/
/* <div class="list-blog-date">*/
/*     <div class="day">{{ page.date|date("d") }}</div>*/
/*     <div class="month">{{ page.date|date("M") }}</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block post_header_image %}   */
/* {% if big_header %}*/
/*     {{ page.media.images|first.html('', '', 'img-responsive') }}*/
/* {% else %}*/
/*     {% if header_image %}*/
/*         {% if header_image_file %}*/
/*             {% set header_image_media = page.media.images[header_image_file] %}*/
/*         {% else %}*/
/*             {% set header_image_media = page.media.images|first %}*/
/*         {% endif %}*/
/*         {{ header_image_media.cropZoom(header_image_width, header_image_height).html('', '', 'img-responsive') }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block post_contents %}*/
/* <div class="row list-blog-padding">*/
/*     <div class="col-md-12">*/
/*         {{ parent() }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block prev_next_buttons %}*/
/* {% if show_prev_next or force_hide_prev_next|default(false) %}*/
/* <p class="text-center">*/
/*     {% if not page.isFirst %}*/
/*     <a class="btn btn-default" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> {{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.NEXT_POST"|t }}</a>*/
/*     {% endif %}*/
/* */
/*     {% if not page.isLast %}*/
/*     <a class="btn btn-default" href="{{ page.prevSibling.url }}">{{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.PREVIOUS_POST"|t }} <i class="fa fa-chevron-right"></i></a>*/
/*     {% endif %}*/
/* </p>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sidebar_taxonomy %}*/
/* {% if config.plugins.taxonomylist.enabled %}*/
/* <div class="sidebar-content">*/
/*     <{{ title_tag }}>{{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.POPULAR_TAGS"|t }}</{{ title_tag }}>*/
/*     */
/*     {% set taxonomy = "tag" %}*/
/*     {% set taxlist = taxonomylist.get() %}*/
/*     {% if taxlist %}*/
/*     <span class="tags">*/
/*         {% for tax,value in taxlist[taxonomy] %}*/
/*             {% set active = uri.param(taxonomy) == tax ? ' active' : '' %}*/
/*             <a class="btn btn-primary tags-cloud{{ active }}" href="{{ blog_base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}">{{ tax }}</a>*/
/*         {% endfor %}*/
/*     </span>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block archives %}*/
/* {% if config.plugins.archives.enabled %}*/
/* <div class="sidebar-content">*/
/*     <{{ title_tag }}>{{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.ARCHIVES"|t }}</{{ title_tag }}>*/
/* 	<ul class="archives">*/
/*     {% for month,items in archives_data %}*/
/*         <li>*/
/*             <a href="{{ blog_base_url }}/archives_month{{ config.system.param_sep }}{{ month|date('M_Y')|lower|e('url') }}">*/
/*             {% if archives_show_count %}*/
/*             <span class="badge">{{ items|length }}</span>*/
/*             {% endif %}*/
/*             <span class="archive_date">{{ month }}</span>*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}  */
/* {{ block('urls') }}*/
/* {% set title_tag = 'h3' %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block feed %}*/
/* {% if config.plugins.feed.enabled %}*/
/* <div class="sidebar-content">*/
/*     <{{ title_tag }}>{{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.SYNDICATE"|t }}</{{ title_tag }}>*/
/*     <div class="btn-group">*/
/*         <a class="btn btn-warning" href="{{ blog_feed_url }}.atom"><i class="fa fa-rss-square"></i> {{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.ATOM"|t }}</a>*/
/*         <a class="btn btn-warning" href="{{ blog_feed_url }}.rss"><i class="fa fa-rss-square"></i> {{ "PLUGIN_BLOG_INJECTOR.TEMPLATES.RSS"|t }}</a>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
