<?php

/* partials/langswitcher.html.twig */
class __TwigTemplate_1163385d2c6b55fa8d095f121987ce8775c651276a9e4fabaceab5a83628c97e extends Twig_Template
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
        $context["langobj"] = $this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array(), "array");
        // line 2
        echo "
<li class=\"lngs d-flex align-items-center\">
  <div class=\"lngs-item lngs-dropdown-click\">
    <a onClick=\"event.preventDefault()\" class=\"lngs-item-toggle lngs-item-current\">
      <img class=\"lngs-flag\" src=\"";
        // line 6
        echo $this->env->getExtension('GravTwigExtension')->urlFunc((("theme://dist/images/flags/" . twig_upper_filter($this->env, $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))) . ".png"));
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array());
        echo "\" title=\"";
        echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))));
        echo "\">
    </a>

    <ul class=\"lngs-sub-menu\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            if (($context["key"] != $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))) {
                // line 11
                echo "          ";
                $context["lang_url"] = (((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) ? ((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) : ("/"));
                // line 12
                echo "
          <li class=\"lngs-item\">
            <a href=\"";
                // line 14
                echo (isset($context["lang_url"]) ? $context["lang_url"] : null);
                echo "\">
              <img class=\"lngs-flag\" src=\"";
                // line 15
                echo $this->env->getExtension('GravTwigExtension')->urlFunc((("theme://dist/images/flags/" . twig_upper_filter($this->env, $context["key"])) . ".png"));
                echo "\" alt=\"";
                echo $context["key"];
                echo "\" title=\"";
                echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["key"])));
                echo "\">
            </a>
          </li>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  54 => 15,  50 => 14,  46 => 12,  43 => 11,  38 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% set langobj = grav['language'] %}*/
/* */
/* <li class="lngs d-flex align-items-center">*/
/*   <div class="lngs-item lngs-dropdown-click">*/
/*     <a onClick="event.preventDefault()" class="lngs-item-toggle lngs-item-current">*/
/*       <img class="lngs-flag" src="{{ url('theme://dist/images/flags/' ~ langswitcher.current|upper ~ '.png') }}" alt="{{ langswitcher.current }}" title="{{ native_name(langswitcher.current)|capitalize }}">*/
/*     </a>*/
/* */
/*     <ul class="lngs-sub-menu">*/
/*       {% for key in langswitcher.languages if key != langswitcher.current %}*/
/*           {% set lang_url = base_url_simple ~ langobj.getLanguageURLPrefix(key)~langswitcher.page_route ?: '/' %}*/
/* */
/*           <li class="lngs-item">*/
/*             <a href="{{ lang_url }}">*/
/*               <img class="lngs-flag" src="{{ url('theme://dist/images/flags/' ~ key|upper ~ '.png') }}" alt="{{ key }}" title="{{ native_name(key)|capitalize }}">*/
/*             </a>*/
/*           </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </li>*/
/* */
