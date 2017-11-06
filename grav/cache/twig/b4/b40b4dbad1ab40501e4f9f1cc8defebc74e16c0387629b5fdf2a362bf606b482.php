<?php

/* blog.html.twig */
class __TwigTemplate_ab04c6a43c1690bc8e23e679579f0d7928c981a8776a21f51837e02eadab4d00 extends Twig_Template
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
        echo "
  ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute($context["post"], "header", array(), "any", false, true), "featured_image", array(), "any", true, true)) {
                // line 9
                echo "      ";
                $context["post_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "media", array()), "images", array()), $this->getAttribute($this->getAttribute($context["post"], "header", array()), "featured_image", array()), array(), "array");
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "      ";
                $context["post_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["post"], "media", array()), "images", array()));
                // line 12
                echo "    ";
            }
            // line 13
            echo "    <a href='";
            echo $this->getAttribute($context["post"], "url", array());
            echo "'>
      <h2>
        ";
            // line 15
            echo $this->getAttribute($context["post"], "title", array());
            echo "
      </h2>
      <h4>
        ";
            // line 18
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "y-m-d");
            echo "
      </h4>
    </a>

    <a href=\"";
            // line 22
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
      ";
            // line 23
            if ((isset($context["post_image"]) ? $context["post_image"] : null)) {
                // line 24
                echo "        ";
                echo $this->getAttribute((isset($context["post_image"]) ? $context["post_image"] : null), "html", array());
                echo "
      ";
            } else {
                // line 26
                echo "        <img src=\"https://source.unsplash.com/random/800x600?sig=";
                echo twig_random($this->env);
                echo "\">
      ";
            }
            // line 28
            echo "    </a>

    ";
            // line 30
            echo $this->getAttribute($context["post"], "summary", array());
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
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
        return array (  107 => 32,  99 => 30,  95 => 28,  89 => 26,  83 => 24,  81 => 23,  77 => 22,  70 => 18,  64 => 15,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*   {{ page.content }}*/
/* */
/*   {% for post in page.collection %}*/
/*     {% if post.header.featured_image is defined %}*/
/*       {% set post_image = post.media.images[post.header.featured_image] %}*/
/*     {% else %}*/
/*       {% set post_image = post.media.images | first %}*/
/*     {% endif %}*/
/*     <a href='{{ post.url }}'>*/
/*       <h2>*/
/*         {{ post.title }}*/
/*       </h2>*/
/*       <h4>*/
/*         {{ post.date | date('y-m-d') }}*/
/*       </h4>*/
/*     </a>*/
/* */
/*     <a href="{{ post.url }}">*/
/*       {% if post_image %}*/
/*         {{ post_image.html }}*/
/*       {% else %}*/
/*         <img src="https://source.unsplash.com/random/800x600?sig={{ random() }}">*/
/*       {% endif %}*/
/*     </a>*/
/* */
/*     {{ post.summary }}*/
/*   {% endfor %}*/
/* */
/* {% endblock %}*/
