<?php

/* partials/navigation.html.twig */
class __TwigTemplate_3eaf92a7186ae7c155e47ad68e37f82576888f37c5a458a5558070cc3bde7d7d extends Twig_Template
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
        if (twig_in_filter("base_url:", $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array()), "link", array()))) {
            // line 2
            echo "  ";
            $context["logoUrl"] = (((isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null) . "/") . twig_replace_filter($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url", array()), array("base_url:" => "")));
        } elseif (        // line 3
(isset($context["onepage"]) ? $context["onepage"] : null)) {
            // line 4
            echo "  ";
            // line 5
            echo "  ";
            $context["logoUrl"] = "#start";
        } else {
            // line 7
            echo "  ";
            $context["logoUrl"] = (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        }
        // line 9
        echo "
";
        // line 29
        echo "
<nav id=\"nav\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div id=\"logo\" class=\"col-6 col-lg-4 justify-content-start\">
        <a href=\"";
        // line 34
        echo (isset($context["logoUrl"]) ? $context["logoUrl"] : null);
        echo "\">
          <img src=\"";
        // line 35
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/logo.svg");
        echo "\" alt=\"";
        echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array()), twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html"))) : (twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html")));
        echo "\" title=\"";
        echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array()), twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html"))) : (twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html")));
        echo "\">
        </a>
      </div>

      <div class=\"col-6 hidden-lg-up\">
        <div class=\"burger\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <ul class=\"nav col-8 justify-content-end\">
        ";
        // line 48
        if ((isset($context["onepage"]) ? $context["onepage"] : null)) {
            // line 49
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 50
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                    // line 51
                    echo "              <li>
                <a href=\"#";
                    // line 52
                    echo twig_replace_filter(twig_lower_filter($this->env, $this->getAttribute($context["module"], "menu", array())), array(" " => "_"));
                    echo "\">";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a>
              </li>
            ";
                }
                // line 55
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "dropdown", array()), true)) : (true))) {
            // line 57
            echo "          ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
        ";
        } else {
            // line 59
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 60
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 61
                echo "            <li";
                if ((isset($context["current_page"]) ? $context["current_page"] : null)) {
                    echo " class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\"";
                }
                echo ">
              <a href=\"";
                // line 62
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        ";
        }
        // line 66
        echo "        <!-- Language switcher (lngs) -->
        ";
        // line 67
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 67)->display($context);
        // line 68
        echo "      </ul>
    </div>
  </div>
</nav>
";
    }

    // line 10
    public function getloop($__page__ = null, $__sub__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "sub" => $__sub__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "    ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 13
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 14
                    echo "      <li class=\"has-sub";
                    if ((isset($context["current_page"]) ? $context["current_page"] : null)) {
                        echo " ";
                        echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    }
                    echo "\">
        <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    if ((isset($context["sub"]) ? $context["sub"] : null)) {
                        echo ((isset($context["sub"]) ? $context["sub"] : null) . "-");
                    }
                    echo "child\">";
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<icon class=\"";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></icon>";
                    }
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>

        <!-- Submenu for ";
                    // line 17
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo " -->
        <ul class=\"nav-sub\">
          ";
                    // line 19
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => "sub"), "method");
                    echo "
        </ul>
      </li>
    ";
                } else {
                    // line 23
                    echo "      <li";
                    if ((isset($context["current_page"]) ? $context["current_page"] : null)) {
                        echo " class=\"";
                        echo (isset($context["current_page"]) ? $context["current_page"] : null);
                        echo "\"";
                    }
                    echo ">
        <a class=\"";
                    // line 24
                    if ((isset($context["sub"]) ? $context["sub"] : null)) {
                        echo ((isset($context["sub"]) ? $context["sub"] : null) . "-");
                    }
                    echo "child\" href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">";
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<icon class=\"";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></icon>";
                    }
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
      </li>
    ";
                }
                // line 27
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 27,  232 => 24,  223 => 23,  216 => 19,  211 => 17,  195 => 15,  187 => 14,  184 => 13,  181 => 12,  163 => 11,  150 => 10,  142 => 68,  140 => 67,  137 => 66,  134 => 65,  123 => 62,  114 => 61,  111 => 60,  106 => 59,  100 => 57,  97 => 56,  91 => 55,  83 => 52,  80 => 51,  77 => 50,  72 => 49,  70 => 48,  50 => 35,  46 => 34,  39 => 29,  36 => 9,  32 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if "base_url:" in theme.logo.link %}*/
/*   {% set logoUrl = base_url_absolute ~ "/" ~ link.url|replace({"base_url:": ""}) %}*/
/* {% elseif onepage %}*/
/*   {# "#" ~ page.collection|first.menu|lower|replace({' ':'_'}) #}*/
/*   {% set logoUrl = "#start" %}*/
/* {% else  %}*/
/*   {% set logoUrl = base_url_absolute %}*/
/* {% endif %}*/
/* */
/* {% macro loop(page, sub) %}*/
/*   {% for p in page.children.visible %}*/
/*     {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*     {% if p.children.visible.count > 0 %}*/
/*       <li class="has-sub{% if current_page %} {{ current_page }}{% endif %}">*/
/*         <a href="{{ p.url }}" class="{% if sub %}{{ sub ~ '-' }}{% endif %}child">{% if p.header.icon %}<icon class="{{ p.header.icon }}"></icon>{% endif %}{{ p.menu }}</a>*/
/* */
/*         <!-- Submenu for {{ loop.index }} -->*/
/*         <ul class="nav-sub">*/
/*           {{ _self.loop(p, 'sub') }}*/
/*         </ul>*/
/*       </li>*/
/*     {% else %}*/
/*       <li{% if current_page %} class="{{ current_page }}"{% endif %}>*/
/*         <a class="{% if sub %}{{ sub ~ '-' }}{% endif %}child" href="{{ p.url }}">{% if p.header.icon %}<icon class="{{ p.header.icon }}"></icon>{% endif %}{{ p.menu }}</a>*/
/*       </li>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <nav id="nav">*/
/*   <div class="container">*/
/*     <div class="row align-items-center">*/
/*       <div id="logo" class="col-6 col-lg-4 justify-content-start">*/
/*         <a href="{{ logoUrl }}">*/
/*           <img src="{{ url('theme://dist/images/logo.svg') }}" alt="{{ theme.logo.alt|default(site.title|e('html')) }}" title="{{ theme.logo.alt|default(site.title|e('html')) }}">*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="col-6 hidden-lg-up">*/
/*         <div class="burger">*/
/*           <span></span>*/
/*           <span></span>*/
/*           <span></span>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <ul class="nav col-8 justify-content-end">*/
/*         {% if onepage %}*/
/*           {% for module in page.collection %}*/
/*             {% if not module.header.hidemenu %}*/
/*               <li>*/
/*                 <a href="#{{ module.menu|lower|replace({' ':'_'}) }}">{{ module.menu }}</a>*/
/*               </li>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% elseif theme.generall.dropdown|default(true) %}*/
/*           {{ _self.loop(pages) }}*/
/*         {% else %}*/
/*           {% for page in pages.children.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*             <li{% if current_page %} class="{{ current_page }}"{% endif %}>*/
/*               <a href="{{ page.url }}">{{ page.menu }}</a>*/
/*             </li>*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*         <!-- Language switcher (lngs) -->*/
/*         {% include 'partials/langswitcher.html.twig' %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
