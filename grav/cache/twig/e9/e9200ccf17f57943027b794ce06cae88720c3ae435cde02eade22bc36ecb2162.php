<?php

/* modular.html.twig */
class __TwigTemplate_df67b4b1b0611de1964cbe0cbb5391df46b95a363e2615c0c4ca3d81aadc6db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
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
        echo "  <main>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "      ";
            if (twig_in_filter($this->getAttribute($this->getAttribute($context["module"], "header", array()), "enabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                // line 7
                echo "
      ";
                // line 8
                $context["pagename"] = twig_replace_filter(twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "header", array()), "title", array())), array(" " => "_"));
                // line 9
                echo "      ";
                $context["modulename"] = twig_slice($this->env, $this->getAttribute($context["module"], "template", array()), 8);
                // line 10
                echo "      ";
                $context["blur"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "wrapper", array(), "any", false, true), "blur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "wrapper", array(), "any", false, true), "blur", array()), false)) : (false));
                // line 11
                echo "      ";
                $context["overlay"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "wrapper", array(), "any", false, true), "overlay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "wrapper", array(), "any", false, true), "overlay", array()), false)) : (false));
                // line 12
                echo "
      ";
                // line 13
                $context["headerParallax"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "header", array()), "wrapper", array()), "parallax", array());
                // line 14
                echo "      ";
                if (( !$this->getAttribute((isset($context["headerParallax"]) ? $context["headerParallax"] : null), "begin", array()) ||  !$this->getAttribute((isset($context["headerParallax"]) ? $context["headerParallax"] : null), "end", array()))) {
                    // line 15
                    echo "        ";
                    $context["parallax"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "parallax", array());
                    // line 16
                    echo "      ";
                } else {
                    // line 17
                    echo "        ";
                    $context["parallax"] = ((array_key_exists("headerParallax", $context)) ? (_twig_default_filter((isset($context["headerParallax"]) ? $context["headerParallax"] : null), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "parallax", array()))) : ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "parallax", array())));
                    // line 18
                    echo "      ";
                }
                // line 19
                echo "
      ";
                // line 20
                $context["headerColor"] = "";
                // line 21
                echo "      ";
                $context["headerWrapper"] = "";
                // line 22
                echo "      ";
                $context["headerStyle"] = "";
                // line 23
                echo "      ";
                $context["moduleFluid"] = "";
                // line 24
                echo "
      ";
                // line 25
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "color", array())) {
                    // line 26
                    echo "        ";
                    $context["headerColor"] = ((" " . (($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["module"], "header", array(), "any", false, true), "color", array()), "dark")) : ("dark"))) . "-content");
                    // line 27
                    echo "      ";
                }
                // line 28
                echo "      ";
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "background", array())) {
                    // line 29
                    echo "        ";
                    $context["headerWrapper"] = " wrapper";
                    // line 30
                    echo "      ";
                }
                // line 31
                echo "      ";
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "style", array())) {
                    // line 32
                    echo "        ";
                    $context["headerStyle"] = (" color-" . $this->getAttribute($this->getAttribute($context["module"], "header", array()), "style", array()));
                    // line 33
                    echo "      ";
                }
                // line 34
                echo "      ";
                if (twig_in_filter($this->getAttribute($this->getAttribute($context["module"], "header", array()), "fluid", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                    // line 35
                    echo "        ";
                    $context["moduleFluid"] = "-fluid";
                    // line 36
                    echo "      ";
                }
                // line 37
                echo "
      ";
                // line 39
                echo "      <!-- begin [";
                echo (isset($context["pagename"]) ? $context["pagename"] : null);
                echo "] with module [";
                echo (isset($context["modulename"]) ? $context["modulename"] : null);
                echo "] -->

      <section id=\"";
                // line 41
                echo (isset($context["pagename"]) ? $context["pagename"] : null);
                echo "\" module=\"";
                echo (isset($context["modulename"]) ? $context["modulename"] : null);
                echo "\" class=\"";
                echo $this->getAttribute($this->getAttribute($context["module"], "header", array()), "classes", array());
                echo (isset($context["headerColor"]) ? $context["headerColor"] : null);
                echo (isset($context["headerWrapper"]) ? $context["headerWrapper"] : null);
                echo (isset($context["headerStyle"]) ? $context["headerStyle"] : null);
                echo "\">
        ";
                // line 42
                if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "debug", array())) {
                    // line 43
                    echo "        <div class=\"debugger collapsed\">
          <pre class=\"numbers\">
            <span><b>ID:</b> ";
                    // line 45
                    echo $this->getAttribute($context["module"], "id", array());
                    echo "</span>
            <span><b>Blur:</b> ";
                    // line 46
                    echo (isset($context["blur"]) ? $context["blur"] : null);
                    echo "</span>
            <span><b>Parallax:</b> ";
                    // line 47
                    echo twig_join_filter((isset($context["parallax"]) ? $context["parallax"] : null), " | ");
                    echo "</span>
          </pre>
        </div>
        ";
                }
                // line 51
                echo "        ";
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "wrapper", array())) {
                    // line 52
                    echo "          ";
                    echo $this->getAttribute((isset($context["add"]) ? $context["add"] : null), "wrapper", array(0 => $this->getAttribute($this->getAttribute($context["module"], "header", array()), "wrapper", array()), 1 => (isset($context["blur"]) ? $context["blur"] : null), 2 => (isset($context["parallax"]) ? $context["parallax"] : null), 3 => (isset($context["overlay"]) ? $context["overlay"] : null), 4 => (isset($context["assets"]) ? $context["assets"] : null), 5 => $context["module"]), "method");
                    echo "
        ";
                }
                // line 54
                echo "        <div class=\"container";
                echo (isset($context["moduleFluid"]) ? $context["moduleFluid"] : null);
                if (twig_in_filter($this->getAttribute($this->getAttribute($context["module"], "header", array()), "reverse", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                    echo " reverse";
                }
                echo "\">
          ";
                // line 55
                echo $this->getAttribute($context["module"], "content", array());
                echo "
        </div>
      </section>

      <!-- end ";
                // line 59
                echo (isset($context["pagename"]) ? $context["pagename"] : null);
                echo " -->

      ";
            }
            // line 62
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  </main>
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 63,  200 => 62,  194 => 59,  187 => 55,  179 => 54,  173 => 52,  170 => 51,  163 => 47,  159 => 46,  155 => 45,  151 => 43,  149 => 42,  138 => 41,  130 => 39,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  44 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*   <main>*/
/*     {% for module in page.collection %}*/
/*       {% if module.header.enabled in ['on', 'true', 1] %}*/
/* */
/*       {% set pagename = module.header.title|lower|replace({' ':'_'}) %}*/
/*       {% set modulename = module.template|slice(8) %}*/
/*       {% set blur = module.header.wrapper.blur|default(false) %}*/
/*       {% set overlay = module.header.wrapper.overlay|default(false) %}*/
/* */
/*       {% set headerParallax = module.header.wrapper.parallax %}*/
/*       {% if not headerParallax.begin or not headerParallax.end %}*/
/*         {% set parallax = page.header.parallax %}*/
/*       {% else %}*/
/*         {% set parallax = headerParallax|default(page.header.parallax) %}*/
/*       {% endif %}*/
/* */
/*       {% set headerColor = '' %}*/
/*       {% set headerWrapper = '' %}*/
/*       {% set headerStyle = '' %}*/
/*       {% set moduleFluid = '' %}*/
/* */
/*       {% if module.header.color %}*/
/*         {% set headerColor = ' ' ~ module.header.color|default('dark') ~ '-content' %}*/
/*       {% endif %}*/
/*       {% if module.header.background %}*/
/*         {% set headerWrapper = ' wrapper' %}*/
/*       {% endif %}*/
/*       {% if module.header.style %}*/
/*         {% set headerStyle = ' color-' ~ module.header.style %}*/
/*       {% endif %}*/
/*       {% if module.header.fluid in ['on', 'true', 1] %}*/
/*         {% set moduleFluid = '-fluid' %}*/
/*       {% endif %}*/
/* */
/*       {# Create individual comment #}*/
/*       <!-- begin [{{ pagename }}] with module [{{ modulename }}] -->*/
/* */
/*       <section id="{{ pagename }}" module="{{ modulename }}" class="{{ module.header.classes }}{{ headerColor }}{{ headerWrapper }}{{ headerStyle }}">*/
/*         {% if theme.generall.debug %}*/
/*         <div class="debugger collapsed">*/
/*           <pre class="numbers">*/
/*             <span><b>ID:</b> {{ module.id }}</span>*/
/*             <span><b>Blur:</b> {{ blur }}</span>*/
/*             <span><b>Parallax:</b> {{ parallax|join(' | ') }}</span>*/
/*           </pre>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if module.header.wrapper %}*/
/*           {{ add.wrapper(module.header.wrapper, blur, parallax, overlay, assets, module) }}*/
/*         {% endif %}*/
/*         <div class="container{{ moduleFluid }}{% if module.header.reverse in ['on', 'true', 1] %} reverse{% endif %}">*/
/*           {{ module.content }}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <!-- end {{ pagename }} -->*/
/* */
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </main>*/
/* {% endblock %}*/
/* */
