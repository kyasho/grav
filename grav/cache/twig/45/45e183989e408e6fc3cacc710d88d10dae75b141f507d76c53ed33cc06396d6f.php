<?php

/* partials/head.html.twig */
class __TwigTemplate_b8f63dbf74cf560a57d3ec7d80519fff1f996baae2ec3efee8f0f63c9cfa7089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", array()) != "generator")) {
                // line 7
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", array())) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", array())) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", array())) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", array())) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", array());
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array()) != "")) {
            // line 12
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('GravTwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array())), true);
            echo "\" />
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 16
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
";
        }
        // line 18
        echo "
<title>";
        // line 19
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        $context["site_url"] = twig_replace_filter((isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null), array((isset($context["base_url"]) ? $context["base_url"] : null) => ""));
        // line 48
        echo "
";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 50
            echo "    ";
            $context["og_image"] = ((isset($context["site_url"]) ? $context["site_url"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), array(), "array"), "cache", array()), "url", array(), "method"));
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 51
(isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) > 0)) {
            // line 52
            echo "    ";
            $context["og_image"] = ((isset($context["site_url"]) ? $context["site_url"] : null) . $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cache", array()), "url", array(), "method"));
        } else {
            // line 54
            echo "    ";
            $context["og_image"] = "";
        }
        // line 56
        echo "
<meta property=\"og:url\" content=\"";
        // line 57
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html_attr");
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "metadata", array()), "description", array()), "html_attr");
        echo "\" />
";
        // line 60
        if ( !twig_test_empty((isset($context["og_image"]) ? $context["og_image"] : null))) {
            // line 61
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />
";
        }
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://vendor/bootstrap/css/bootstrap.min.css"), "method");
        // line 23
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/clean-blog.min.css"), "method");
        // line 24
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://vendor/font-awesome/css/font-awesome.min.css"), "method");
        // line 25
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"), "method");
        // line 26
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"), "method");
        // line 27
        echo "
    ";
        // line 28
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 29
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 30
            echo "    ";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 37
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://vendor/bootstrap/js/bootstrap.min.js", 1 => 100), "method");
        // line 38
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/clean-blog.min.js"), "method");
        // line 39
        echo "
    ";
        // line 40
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) < 9))) {
            // line 41
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "method");
            // line 42
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "method");
            // line 43
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 43,  213 => 42,  210 => 41,  208 => 40,  205 => 39,  202 => 38,  199 => 37,  196 => 36,  193 => 35,  188 => 30,  185 => 29,  183 => 28,  180 => 27,  177 => 26,  174 => 25,  171 => 24,  168 => 23,  165 => 22,  162 => 21,  154 => 61,  152 => 60,  148 => 59,  144 => 58,  140 => 57,  137 => 56,  133 => 54,  129 => 52,  127 => 51,  124 => 50,  122 => 49,  119 => 48,  117 => 47,  114 => 45,  112 => 35,  107 => 33,  104 => 32,  102 => 21,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  68 => 10,  34 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* {% for meta in page.metadata %}*/
/*     {% if meta.name != 'generator' %}*/
/*     <meta {% if meta.name %}name="{{ meta.name }}" {% endif %}{% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}{% if meta.charset %}charset="{{ meta.charset }}" {% endif %}{% if meta.property %}property="{{ meta.property }}" {% endif %}{% if meta.content %}content="{{ meta.content }}" {% endif %}/>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% if theme_config.favicon != '' %}*/
/* <link rel="icon" href="{{ url('theme://img/' ~ theme_config.favicon, true) }}" />*/
/* {% endif %}*/
/* */
/* {% if header.robots %}*/
/* <meta name="robots" content="{{ header.robots }}">*/
/* {% endif %}*/
/* */
/* <title>{% if header.title %}{{ header.title }}{% else %}{{ site.title }}{% endif %}</title>*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss('theme://vendor/bootstrap/css/bootstrap.min.css') %}*/
/*     {% do assets.addCss('theme://css/clean-blog.min.css') %}*/
/*     {% do assets.addCss('theme://vendor/font-awesome/css/font-awesome.min.css') %}*/
/*     {% do assets.addCss('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') %}*/
/*     {% do assets.addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') %}*/
/* */
/*     {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}*/
/*         {% do assets.addCss('theme://css/ie.css') %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {{ assets.css() }}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs('jquery', 101) %}*/
/*     {% do assets.addJs('theme://vendor/bootstrap/js/bootstrap.min.js', 100) %}*/
/*     {% do assets.addJs('theme://js/clean-blog.min.js') %}*/
/* */
/*     {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}*/
/*         {% do assets.addJs('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}*/
/*         {% do assets.addJs('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {# Site URL is not correct if Grav is in subfolder #}*/
/* {% set site_url = base_url_absolute|replace({(base_url): ''}) %}*/
/* */
/* {% if page.header.header_image %}*/
/*     {% set og_image = site_url ~  page.media.images[page.header.header_image].cache.url() %}*/
/* {% elseif page.media.images|length > 0 %}*/
/*     {% set og_image = site_url ~  page.media.images|first.cache.url() %}*/
/* {% else %}*/
/*     {% set og_image = '' %}*/
/* {% endif %}*/
/* */
/* <meta property="og:url" content="{{ page.url(true) }}" />*/
/* <meta property="og:title" content="{{ page.title|e('html_attr') }}" />*/
/* <meta property="og:description" content="{{ page.header.metadata.description|e('html_attr') }}" />*/
/* {% if og_image is not empty %}*/
/* <meta property="og:image" content="{{ og_image }}" />*/
/* {% endif %}*/
/* */
