<?php

/* partials/widgets/social.html.twig */
class __TwigTemplate_f11539559a317e2ae72b0410d1e120f2da28ba28f56d197d414bc4a954d0da6c extends Twig_Template
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
        echo "<div class=\"networks\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    <a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["item"], "text", array());
            echo "\" class=\"d-inline-block\">
      ";
            // line 4
            if ($this->getAttribute($context["item"], "icon", array())) {
                // line 5
                echo "        <icon class=\"";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></icon>
      ";
            }
            // line 7
            echo "      ";
            if ($this->getAttribute($context["item"], "text", array())) {
                // line 8
                echo "        <span>";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</span>
      ";
            }
            // line 10
            echo "    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/widgets/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  50 => 10,  44 => 8,  41 => 7,  35 => 5,  33 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="networks">*/
/*   {% for item in theme.social %}*/
/*     <a href="{{ item.url }}" title="{{ item.text }}" class="d-inline-block">*/
/*       {% if item.icon %}*/
/*         <icon class="{{ item.icon }}"></icon>*/
/*       {% endif %}*/
/*       {% if item.text %}*/
/*         <span>{{ item.text }}</span>*/
/*       {% endif %}*/
/*     </a>*/
/*   {% endfor %}*/
/* </div>*/
/* */
