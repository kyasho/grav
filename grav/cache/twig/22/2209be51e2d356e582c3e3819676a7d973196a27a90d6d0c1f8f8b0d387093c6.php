<?php

/* blog.html.twig */
class __TwigTemplate_4e35e6e42390fe3a6f583a3f17453b3124338335460138034b2e62eb3cf35de9 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 5
        $context["dateformat"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <div class=\"post-preview\">
            <a href=\"";
            // line 11
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
                <h2 class=\"post-title\">";
            // line 12
            echo $this->getAttribute($context["post"], "title", array());
            echo "</h2>
                ";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["post"], "header", array()), "subheading", array())) {
                // line 14
                echo "                <h3 class=\"post-subtitle\">";
                echo $this->getAttribute($this->getAttribute($context["post"], "header", array()), "subheading", array());
                echo "</h3>
                ";
            }
            // line 16
            echo "
            </a>
            <p class=\"post-meta\">";
            // line 18
            echo $this->env->getExtension('GravTwigExtension')->translate("THEME_CLEAN_BLOG.POST_BY");
            echo " ";
            echo $this->getAttribute($this->getAttribute($context["post"], "header", array()), "author", array());
            echo " ";
            echo $this->env->getExtension('GravTwigExtension')->translate("THEME_CLEAN_BLOG.POST_ON");
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), (isset($context["dateformat"]) ? $context["dateformat"] : null));
            echo "</p>
        </div>
        <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 23
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 23)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 24
            echo "        ";
        }
        // line 25
        echo "        </div>
    </div>
</div>
";
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
        return array (  92 => 25,  89 => 24,  86 => 23,  83 => 22,  67 => 18,  63 => 16,  57 => 14,  55 => 13,  51 => 12,  47 => 11,  44 => 10,  40 => 9,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* {% set collection = page.collection() %}*/
/* {% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: "F d, Y" %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*         {% for post in collection %}*/
/*         <div class="post-preview">*/
/*             <a href="{{ post.url }}">*/
/*                 <h2 class="post-title">{{ post.title }}</h2>*/
/*                 {% if post.header.subheading %}*/
/*                 <h3 class="post-subtitle">{{ post.header.subheading }}</h3>*/
/*                 {% endif %}*/
/* */
/*             </a>*/
/*             <p class="post-meta">{{ 'THEME_CLEAN_BLOG.POST_BY'|t }} {{ post.header.author }} {{ 'THEME_CLEAN_BLOG.POST_ON'|t }} {{ post.date|date(dateformat) }}</p>*/
/*         </div>*/
/*         <hr>*/
/*         {% endfor %}*/
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*             {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*         {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
