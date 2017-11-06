<?php

/* partials/header.html.twig */
class __TwigTemplate_6758f76806d7ba5337db79029c5851863e3fcfbf7c7989dd8e2b68ab1617163d extends Twig_Template
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
        $context["add"] = $this->loadTemplate("macros/macros.html.twig", "partials/header.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 4
            echo "
";
            // line 5
            $context["header"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header", array());
            // line 6
            $context["carousel"] = $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "options", array()), "carousel", array());
            // line 7
            $context["headerClass"] = "";
            // line 8
            echo "
";
            // line 9
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "options", array()), "small", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                // line 10
                echo "  ";
                $context["headerClass"] = ((isset($context["headerClass"]) ? $context["headerClass"] : null) . "small");
            }
            // line 12
            echo "
";
            // line 13
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array())) {
                // line 14
                echo "  ";
                $context["headerClass"] = (((isset($context["headerClass"]) ? $context["headerClass"] : null) . " ") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array()));
            }
            // line 16
            echo "
";
            // line 17
            if (twig_in_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "enabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                // line 18
                echo "  ";
                $context["headerClass"] = ((isset($context["headerClass"]) ? $context["headerClass"] : null) . " owl-carousel");
            }
            // line 20
            echo "
";
            // line 21
            if ( !$this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "items", array())), "wrapper", array())) {
                // line 22
                echo "  ";
                $context["headerClass"] = ((isset($context["headerClass"]) ? $context["headerClass"] : null) . " no-wrapper");
            }
            // line 24
            echo "
<header class=\"";
            // line 25
            echo (isset($context["headerClass"]) ? $context["headerClass"] : null);
            echo "\"";
            if ((isset($context["onepage"]) ? $context["onepage"] : null)) {
                echo " id=\"start\"";
            }
            echo ">
";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "  ";
                if (( !(($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "enabled", array()), false)) : (false)) && ( !$this->getAttribute($context["loop"], "index", array()) > 1))) {
                    // line 28
                    echo "    ";
                    // line 29
                    echo "  ";
                } else {
                    // line 30
                    echo "    ";
                    if (twig_in_filter($this->getAttribute($context["item"], "enabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                        // line 31
                        echo "      <item>
        ";
                        // line 32
                        if ($this->getAttribute($context["item"], "wrapper", array())) {
                            // line 33
                            echo "          ";
                            echo $context["add"]->getwrapper($this->getAttribute($context["item"], "wrapper", array()), $this->getAttribute($this->getAttribute($context["item"], "wrapper", array()), "blur", array()), $this->getAttribute($context["item"], "parallax", array()), $this->getAttribute($this->getAttribute($context["item"], "wrapper", array()), "overlay", array()), (isset($context["assets"]) ? $context["assets"] : null), (isset($context["page"]) ? $context["page"] : null));
                            echo "
        ";
                        }
                        // line 35
                        echo "
        <case class=\"container\">
          <div class=\"row align-items-center justify-content-center";
                        // line 37
                        if ($this->getAttribute($context["item"], "reverse", array())) {
                            echo " reverse";
                        }
                        echo "\">
            ";
                        // line 38
                        if ((($this->getAttribute($this->getAttribute($context["item"], "title", array()), "text", array()) || $this->getAttribute($this->getAttribute($context["item"], "subtitle", array()), "text", array())) || $this->getAttribute($context["item"], "buttons", array()))) {
                            // line 39
                            echo "              <content class=\"col-xs col-sm-6 text-center text-sm-";
                            echo (($this->getAttribute($context["item"], "alignment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "alignment", array()), "left")) : ("left"));
                            echo "\">
                ";
                            // line 40
                            if ($this->getAttribute($this->getAttribute($context["item"], "title", array()), "text", array())) {
                                // line 41
                                echo "                  <h1";
                                if ($this->getAttribute($this->getAttribute($context["item"], "title", array()), "animation", array())) {
                                    echo " waypoint data-animation=\"";
                                    echo $this->getAttribute($this->getAttribute($context["item"], "title", array()), "animation", array());
                                    echo "\"";
                                }
                                echo " class=\"title\">";
                                echo $this->getAttribute($this->getAttribute($context["item"], "title", array()), "text", array());
                                echo "</h1>
                ";
                            }
                            // line 43
                            echo "                ";
                            if ($this->getAttribute($this->getAttribute($context["item"], "subtitle", array()), "text", array())) {
                                // line 44
                                echo "                  <h2";
                                if ($this->getAttribute($this->getAttribute($context["item"], "subtitle", array()), "animation", array())) {
                                    echo " waypoint data-animation=\"";
                                    echo $this->getAttribute($this->getAttribute($context["item"], "subtitle", array()), "animation", array());
                                    echo "\"";
                                }
                                echo " class=\"subtitle\">";
                                echo $this->getAttribute($this->getAttribute($context["item"], "subtitle", array()), "text", array());
                                echo "</h2>
                ";
                            }
                            // line 46
                            echo "                ";
                            if ($this->getAttribute($context["item"], "buttons", array())) {
                                // line 47
                                echo "                  <div class=\"button-group\"";
                                if ($this->getAttribute($context["item"], "buttons_animation", array())) {
                                    echo " waypoint data-animation=\"";
                                    echo $this->getAttribute($context["item"], "buttons_animation", array());
                                    echo "\"";
                                }
                                echo ">
                    ";
                                // line 48
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                                    // line 49
                                    echo "                      <a
                        href=\"";
                                    // line 50
                                    echo $this->getAttribute($context["button"], "link", array());
                                    echo "\"
                        role=\"link\"
                        target=\"";
                                    // line 52
                                    echo (($this->getAttribute($context["button"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "target", array()), "_self")) : ("_self"));
                                    echo "\"
                        class=\"btn large shadow ";
                                    // line 53
                                    echo $this->getAttribute($context["button"], "classes", array());
                                    echo "\">";
                                    if ($this->getAttribute($context["button"], "icon", array())) {
                                        echo "<icon class=\"";
                                        echo $this->getAttribute($context["button"], "icon", array());
                                        echo "\"></icon> ";
                                    }
                                    echo $this->getAttribute($context["button"], "title", array());
                                    echo "</a>
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                  </div>
                ";
                            }
                            // line 57
                            echo "              </content>
            ";
                        }
                        // line 59
                        echo "            ";
                        if (twig_in_filter($this->getAttribute($this->getAttribute($context["item"], "screen", array()), "enabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                            // line 60
                            echo "              <screen class=\"col-xs col-sm-6\"";
                            if ($this->getAttribute($this->getAttribute($context["item"], "screen", array()), "animation", array())) {
                                echo " waypoint data-animation=\"";
                                echo $this->getAttribute($this->getAttribute($context["item"], "screen", array()), "animation", array());
                                echo "\"";
                            }
                            echo ">
                ";
                            // line 61
                            echo $context["add"]->getflexContent($this->getAttribute($context["item"], "screen", array()), false, false, false, (isset($context["assets"]) ? $context["assets"] : null), (isset($context["page"]) ? $context["page"] : null));
                            echo "
              </screen>
            ";
                        }
                        // line 64
                        echo "          </div>
        </case>
      </item>
    ";
                    }
                    // line 68
                    echo "  ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "</header>

";
            // line 72
            if ($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "enabled", array())) {
                // line 73
                echo "  ";
                $context["owl"] = (((((((((((("
  \$(\"header\").owlCarousel({
    items: 1,
    margin: 0,
    loop: " . (($this->getAttribute(                // line 77
(isset($context["carousel"]) ? $context["carousel"] : null), "loop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "loop", array()), "false")) : ("false"))) . ",
    dots: ") . (($this->getAttribute(                // line 78
(isset($context["carousel"]) ? $context["carousel"] : null), "dots", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "dots", array()), "false")) : ("false"))) . ",
    nav: ") . (($this->getAttribute(                // line 79
(isset($context["carousel"]) ? $context["carousel"] : null), "nav", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "nav", array()), "false")) : ("false"))) . ",
    navText: [\"<span/><span/>\",\"<span/><span/>\"],
    autoplay: ") . (($this->getAttribute(                // line 81
(isset($context["carousel"]) ? $context["carousel"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "autoplay", array()), "false")) : ("false"))) . ",
    autoplayTimeout: ") . (($this->getAttribute(                // line 82
(isset($context["carousel"]) ? $context["carousel"] : null), "timeout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "timeout", array()), "3100")) : ("3100"))) . ",
    smartSpeed: ") . (($this->getAttribute(                // line 83
(isset($context["carousel"]) ? $context["carousel"] : null), "speed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "speed", array()), "1100")) : ("1100"))) . ",
    navRewind: true,
    lazyLoad: true,
    autoplayHoverPause: true
  });
  ");
                // line 89
                echo "  ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => (isset($context["owl"]) ? $context["owl"] : null), 1 => array("group" => "owl")), "method");
            }
            // line 91
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 91,  287 => 89,  280 => 83,  278 => 82,  276 => 81,  273 => 79,  271 => 78,  269 => 77,  263 => 73,  261 => 72,  257 => 70,  242 => 68,  236 => 64,  230 => 61,  221 => 60,  218 => 59,  214 => 57,  210 => 55,  195 => 53,  191 => 52,  186 => 50,  183 => 49,  179 => 48,  170 => 47,  167 => 46,  155 => 44,  152 => 43,  140 => 41,  138 => 40,  133 => 39,  131 => 38,  125 => 37,  121 => 35,  115 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  102 => 28,  99 => 27,  82 => 26,  74 => 25,  71 => 24,  67 => 22,  65 => 21,  62 => 20,  58 => 18,  56 => 17,  53 => 16,  49 => 14,  47 => 13,  44 => 12,  40 => 10,  38 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "macros/macros.html.twig" as add %}*/
/* */
/* {% if header %}*/
/* */
/* {% set header = page.header.header %}*/
/* {% set carousel = header.options.carousel %}*/
/* {% set headerClass = "" %}*/
/* */
/* {% if header.options.small in ['on', 'true', 1] %}*/
/*   {% set headerClass = headerClass ~ "small"  %}*/
/* {% endif %}*/
/* */
/* {% if page.header.class %}*/
/*   {% set headerClass = headerClass ~ " " ~ page.header.class %}*/
/* {% endif %}*/
/* */
/* {% if carousel.enabled in ['on', 'true', 1] %}*/
/*   {% set headerClass = headerClass ~ " owl-carousel" %}*/
/* {% endif %}*/
/* */
/* {% if not header.items|first.wrapper %}*/
/*   {% set headerClass = headerClass ~ " no-wrapper" %}*/
/* {% endif %}*/
/* */
/* <header class="{{ headerClass }}"{% if onepage %} id="start"{% endif %}>*/
/* {% for item in header.items %}*/
/*   {% if not carousel.enabled|default(false) and not loop.index > 1 %}*/
/*     {# Do nothin cause we dont need more items if carousel is not enabled #}*/
/*   {% else %}*/
/*     {% if item.enabled in ['on', 'true', 1] %}*/
/*       <item>*/
/*         {% if item.wrapper %}*/
/*           {{ add.wrapper(item.wrapper, item.wrapper.blur, item.parallax, item.wrapper.overlay, assets, page) }}*/
/*         {% endif %}*/
/* */
/*         <case class="container">*/
/*           <div class="row align-items-center justify-content-center{% if item.reverse %} reverse{% endif %}">*/
/*             {% if item.title.text or item.subtitle.text or item.buttons %}*/
/*               <content class="col-xs col-sm-6 text-center text-sm-{{ item.alignment|default('left') }}">*/
/*                 {% if item.title.text %}*/
/*                   <h1{% if item.title.animation %} waypoint data-animation="{{ item.title.animation }}"{% endif %} class="title">{{ item.title.text }}</h1>*/
/*                 {% endif %}*/
/*                 {% if item.subtitle.text %}*/
/*                   <h2{% if item.subtitle.animation %} waypoint data-animation="{{ item.subtitle.animation }}"{% endif %} class="subtitle">{{ item.subtitle.text }}</h2>*/
/*                 {% endif %}*/
/*                 {% if item.buttons %}*/
/*                   <div class="button-group"{% if item.buttons_animation %} waypoint data-animation="{{ item.buttons_animation }}"{% endif %}>*/
/*                     {% for button in item.buttons %}*/
/*                       <a*/
/*                         href="{{ button.link }}"*/
/*                         role="link"*/
/*                         target="{{ button.target|default('_self') }}"*/
/*                         class="btn large shadow {{ button.classes }}">{% if button.icon %}<icon class="{{ button.icon }}"></icon> {% endif %}{{ button.title }}</a>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </content>*/
/*             {% endif %}*/
/*             {% if item.screen.enabled in ['on', 'true', 1] %}*/
/*               <screen class="col-xs col-sm-6"{% if item.screen.animation %} waypoint data-animation="{{ item.screen.animation }}"{% endif %}>*/
/*                 {{ add.flexContent(item.screen, false, false, false, assets, page) }}*/
/*               </screen>*/
/*             {% endif %}*/
/*           </div>*/
/*         </case>*/
/*       </item>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* {% endfor %}*/
/* </header>*/
/* */
/* {% if carousel.enabled %}*/
/*   {% set owl = '*/
/*   $("header").owlCarousel({*/
/*     items: 1,*/
/*     margin: 0,*/
/*     loop: '~carousel.loop|default('false')~',*/
/*     dots: '~carousel.dots|default('false')~',*/
/*     nav: '~carousel.nav|default('false')~',*/
/*     navText: ["<span/><span/>","<span/><span/>"],*/
/*     autoplay: '~carousel.autoplay|default('false')~',*/
/*     autoplayTimeout: '~carousel.timeout|default('3100')~',*/
/*     smartSpeed: '~carousel.speed|default('1100')~',*/
/*     navRewind: true,*/
/*     lazyLoad: true,*/
/*     autoplayHoverPause: true*/
/*   });*/
/*   ' %}*/
/*   {% do assets.addInlineJs(owl, {'group':'owl'}) %}*/
/* {% endif %}*/
/* */
/* {% endif %}*/
/* */
