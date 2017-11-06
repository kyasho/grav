<?php

/* partials/navigation.html.twig */
class __TwigTemplate_f711f21fd23bc705c8bfad98b7d8cd4c9e7cb6c4aa9535cc8e47dd429bd16dff extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                <span class=\"sr-only\">";
        // line 5
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_CLEAN_BLOG.TOGGLE_NAVIGATION");
        echo "</span>
                ";
        // line 6
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_CLEAN_BLOG.MENU");
        echo " <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "                <li>
                    <a href=\"";
            // line 15
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "menu", array());
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>
</nav>
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
        return array (  62 => 18,  51 => 15,  48 => 14,  44 => 13,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header page-scroll">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">*/
/*                 <span class="sr-only">{{ 'THEME_CLEAN_BLOG.TOGGLE_NAVIGATION'|t }}</span>*/
/*                 {{ 'THEME_CLEAN_BLOG.MENU'|t }} <i class="fa fa-bars"></i>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ base_url == '' ? '/' : base_url }}">{{ site.title }}</a>*/
/*         </div>*/
/* */
/*         <div class="collapse navbar-collapse" id="navbar">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% for p in pages.children.visible %}*/
/*                 <li>*/
/*                     <a href="{{ p.url }}">{{ p.menu }}</a>*/
/*                 </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
