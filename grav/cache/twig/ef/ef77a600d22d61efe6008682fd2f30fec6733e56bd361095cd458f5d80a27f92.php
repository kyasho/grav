<?php

/* partials/footer.html.twig */
class __TwigTemplate_183a550eb01876d4da59de0dde7c34ae57baea2bf917b2982d34940d7c8ce000 extends Twig_Template
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
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 5
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
                    <img src=\"";
        // line 6
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                ";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "text", array());
        echo "
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "address", array()), "title", array());
        echo "</h3>
                    <p>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "address", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                           ";
            echo $this->getAttribute($context["item"], "line", array());
            echo " <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "social_title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">";
        // line 32
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "contact", array()), "title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "contact", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2014 Woo | Design by <a title=\"Styleshout\" href=\"http://www.styleshout.com/\">Styleshout</a> | Converted to GRAV by <a title=\"Grav\" href=\"http://www.getgrav.org/\">Grav Team</a></p>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>";
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
        return array (  113 => 37,  102 => 35,  98 => 34,  93 => 32,  88 => 29,  77 => 27,  73 => 26,  68 => 24,  63 => 21,  54 => 19,  50 => 18,  45 => 16,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="row">         */
/*         <div class="six columns info">*/
/*             <div class="footer-logo">*/
/*                 <a href="{{ base_url_absolute }}">*/
/*                     <img src="{{ theme_url }}/images/footer-logo.png" alt="" />*/
/*                 </a>*/
/*             </div>*/
/*             <p>*/
/*                 {{ site.footer.text }}*/
/*             </p>*/
/*         </div>*/
/*         <div class="six columns right-cols">*/
/*             <div class="row">*/
/*                 <div class="columns">*/
/*                     <h3 class="address">{{ site.footer.address.title }}</h3>*/
/*                     <p>*/
/*                         {% for item in site.footer.address.lines %}*/
/*                            {{ item.line }} <br>*/
/*                         {% endfor %}*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="columns">*/
/*                     <h3 class="social">{{ site.footer.social_title }}</h3>*/
/*                     <ul>*/
/*                         {% for item in site.social %}*/
/*                             <li><a href="{{ item.url }}">{{ item.icon|capitalize }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="columns last">*/
/*                     <h3 class="contact">{{ site.footer.contact.title }}</h3>*/
/*                     <ul>*/
/*                         {% for item in site.footer.contact.lines %}*/
/*                             <li><a href="{{ item.url }}">{{ item.text }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <p class="copyright">&copy; 2014 Woo | Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a> | Converted to GRAV by <a title="Grav" href="http://www.getgrav.org/">Grav Team</a></p>*/
/*         <div id="go-top">*/
/*             <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
