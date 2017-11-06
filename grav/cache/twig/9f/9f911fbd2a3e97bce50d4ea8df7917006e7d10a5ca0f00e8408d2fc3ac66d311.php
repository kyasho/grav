<?php

/* partials/navigation.html.twig */
class __TwigTemplate_e1b9cc754c664ae0b830bc427235d7864f8c62a0bf83fd5ca3e4ebd20f95f1dd extends Twig_Template
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
        echo "<div class='gdlr-navigation-outer-wrapper' id='gdlr-navigation-outer-wrapper'>
    <div class='gdlr-navigation-container container'>
        <div class='gdlr-navigation-gimmick' id='gdlr-navigation-gimmick'></div>
        <div class='gdlr-navigation-wrapper'><nav class='gdlr-navigation' id='gdlr-main-navigation' role='navigation'>
            <ul class='sf-menu gdlr-main-menu' id='menu-main-menu-1'>
            <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
        // line 6
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "'>Home</a></li>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "mainmenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                ";
            if ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["item"], "url", array()), "page:")) {
                // line 9
                echo "                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
                echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["item"], "url", array()), array("page:" => ""));
                echo "'>";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
                    ";
            } else {
                // line 11
                echo "                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
                echo $this->getAttribute($context["item"], "url", array());
                echo "'>";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul></nav>
    <div class='top-search-button' id='top-search-button'>
        <i class='icon-search'></i>
    </div>
    <div class='clear'></div></div>
</div>
</div>
<div id='gdlr-navigation-substitute'></div>
<div class='gdlr-nav-search-form' id='gdlr-nav-search-form'>
    <div class='gdlr-nav-search-container container'>
        <form>
            <i class='icon-search'></i>
            <div class='search-text' id='search-text2'>
                <input autocomplete='off' data-default='Type keywords...' name='q' type='text' value=\"";
        // line 27
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input2=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\"/><input type='hidden' value='max-results=6'/>
            </div>
            <div class='clear'></div>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + input.val();
        }
    });
});
</script>
";
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
        return array (  96 => 41,  76 => 27,  61 => 14,  55 => 13,  47 => 11,  37 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class='gdlr-navigation-outer-wrapper' id='gdlr-navigation-outer-wrapper'>*/
/*     <div class='gdlr-navigation-container container'>*/
/*         <div class='gdlr-navigation-gimmick' id='gdlr-navigation-gimmick'></div>*/
/*         <div class='gdlr-navigation-wrapper'><nav class='gdlr-navigation' id='gdlr-main-navigation' role='navigation'>*/
/*             <ul class='sf-menu gdlr-main-menu' id='menu-main-menu-1'>*/
/*             <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ base_url_absolute }}'>Home</a></li>*/
/*             {% for item in site.mainmenu %}*/
/*                 {% if item.url | contains('page:') %}*/
/*                     <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ base_url_absolute }}/{{ item.url|replace({"page:":''}) }}'>{{ item.text }}</a></li>*/
/*                     {% else %}*/
/*                     <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ item.url }}'>{{ item.text }}</a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*     </ul></nav>*/
/*     <div class='top-search-button' id='top-search-button'>*/
/*         <i class='icon-search'></i>*/
/*     </div>*/
/*     <div class='clear'></div></div>*/
/* </div>*/
/* </div>*/
/* <div id='gdlr-navigation-substitute'></div>*/
/* <div class='gdlr-nav-search-form' id='gdlr-nav-search-form'>*/
/*     <div class='gdlr-nav-search-container container'>*/
/*         <form>*/
/*             <i class='icon-search'></i>*/
/*             <div class='search-text' id='search-text2'>*/
/*                 <input autocomplete='off' data-default='Type keywords...' name='q' type='text' value="{{ query }}" data-search-input2="{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query"/><input type='hidden' value='max-results=6'/>*/
/*             </div>*/
/*             <div class='clear'></div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* jQuery(document).ready(function($){*/
/*     var input = $('[data-search-input2]');*/
/* */
/*     input.on('keypress', function(event) {*/
/*         if (event.which == 13 && input.val().length > 3) {*/
/*             event.preventDefault();*/
/*             window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();*/
/*         }*/
/*     });*/
/* });*/
/* </script>*/
/* */
