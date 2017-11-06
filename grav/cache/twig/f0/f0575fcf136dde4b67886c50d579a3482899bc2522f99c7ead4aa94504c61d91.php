<?php

/* partials/header.html.twig */
class __TwigTemplate_4831fe9d58f92ed11e720096776718416164e726a944b855bc6058d9e46bb5b5 extends Twig_Template
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
        echo "<nav>
  <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "      ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("is-active") : (""));
            // line 7
            echo "      <li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
        <a href=\"";
            // line 8
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
          ";
            // line 9
            if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                // line 10
                echo "            <span class=\"icon\">
              <i class=\"fa fa-";
                // line 11
                echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                echo "\"></i>
            </span>
          ";
            }
            // line 14
            echo "          <span>";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</span>
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
</nav>";
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
        return array (  61 => 18,  50 => 14,  44 => 11,  41 => 10,  39 => 9,  35 => 8,  30 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav>*/
/*   <ul>*/
/*     {% for page in pages.children.visible %}*/
/*       {% set current_page = (page.active or page.activeChild)*/
/*         ? 'is-active'*/
/*         : '' %}*/
/*       <li class="{{ current_page }}">*/
/*         <a href="{{ page.url }}">*/
/*           {% if page.header.icon %}*/
/*             <span class="icon">*/
/*               <i class="fa fa-{{ page.header.icon }}"></i>*/
/*             </span>*/
/*           {% endif %}*/
/*           <span>{{ page.menu }}</span>*/
/*         </a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </nav>*/
