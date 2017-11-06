<?php

/* partials/footer.html.twig */
class __TwigTemplate_128a3b0346dbf09738e16053abcf49102dcd76586b87d90f5d1a16306cbf76db extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">

      <content class=\"col-12 col-sm-6\">
        <p class=\"text-center text-sm-left\">
          ";
        // line 7
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "copyright", array()), array("%year%" => twig_date_format_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "Y")));
        echo "
        </p>
      </content>

      <content class=\"col-12 col-sm-6\">
        <p class=\"text-center text-sm-right\">
          ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contribute", array())) {
            // line 14
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contribute", array());
            echo "
          ";
        } else {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "othermenu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 17
                echo "               <a href=\"";
                echo $this->getAttribute($context["module"], "url", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["module"], "title", array());
                echo "\" class=\"d-inline-block\">";
                echo $this->getAttribute($context["module"], "title", array());
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "          ";
        }
        // line 20
        echo "        </p>
      </content>

    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  49 => 17,  44 => 16,  38 => 14,  36 => 13,  27 => 7,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*       <content class="col-12 col-sm-6">*/
/*         <p class="text-center text-sm-left">*/
/*           {{ theme.footer.copyright|replace({'%year%': e|date("Y") }) }}*/
/*         </p>*/
/*       </content>*/
/* */
/*       <content class="col-12 col-sm-6">*/
/*         <p class="text-center text-sm-right">*/
/*           {% if theme.footer.contribute %}*/
/*             {{ theme.footer.contribute }}*/
/*           {% else %}*/
/*             {% for module in theme.footer.othermenu %}*/
/*                <a href="{{ module.url }}" title="{{ module.title }}" class="d-inline-block">{{ module.title }}</a>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         </p>*/
/*       </content>*/
/* */
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* */
