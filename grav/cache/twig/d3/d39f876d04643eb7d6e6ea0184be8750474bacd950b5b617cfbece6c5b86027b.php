<?php

/* modular/blog.html.twig */
class __TwigTemplate_7575a4d157786163f3f2ec6f7e38fac7273b61d3c473a63e766b092d15b3232d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t";
        // line 2
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 3
        echo "
\t";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "



";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 6
        echo "
\t\t";
        // line 7
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 8
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 10
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 12
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t\t";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 16
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "modular/blog.html.twig", 16)->display($context);
            // line 17
            echo "\t\t\t";
        }
        // line 18
        echo "
\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 22
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "modular/blog.html.twig", 22)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 23
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 26
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "modular/blog.html.twig", 26)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 27
            echo "                ";
        }
        // line 28
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 30
        $this->loadTemplate("partials/sidebar.html.twig", "modular/blog.html.twig", 30)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  128 => 30,  124 => 28,  121 => 27,  118 => 26,  116 => 25,  113 => 24,  99 => 23,  96 => 22,  79 => 21,  74 => 18,  71 => 17,  68 => 16,  66 => 15,  59 => 12,  55 => 10,  49 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  30 => 34,  28 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* 	{% set collection = page.collection() %}*/
/* */
/* 	{% block content %}*/
/* 		{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}*/
/* */
/* 		{% if blog_image %}*/
/* 		<div class="flush-top blog-header blog-header-image" style="background-image: url({{ blog_image.url }});">*/
/* 		{% else %}*/
/* 		<div class="blog-header">*/
/* 		{% endif %}*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 			{% if config.plugins.breadcrumbs.enabled %}*/
/* 				{% include 'partials/breadcrumbs.html.twig' %}*/
/* 			{% endif %}*/
/* */
/* 		<div class="content-wrapper blog-content-list grid pure-g">*/
/* 			<div id="listing" class="block pure-u-2-3 h-feed">*/
/* 				{% for child in collection %}*/
/* 			        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}*/
/* 			    {% endfor %}*/
/* */
/*                 {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*                     {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*                 {% endif %}*/
/* 			</div>*/
/* 			<div id="sidebar" class="block size-1-3 pure-u-1-3">*/
/* 				{% include 'partials/sidebar.html.twig' with {'blog':page} %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
