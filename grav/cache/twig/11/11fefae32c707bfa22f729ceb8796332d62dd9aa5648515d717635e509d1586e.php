<?php

/* partials/bottom.html.twig */
class __TwigTemplate_9f47e947d1d7597c4f2c7827e83a1f521564240d6708062a25ba26fc9eaacf7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'social' => array($this, 'block_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<bottom>
  <div class=\"container\">

    <div class=\"row\">

      <content class=\"col-12 col-md-5\">
        <logo>
          <a href=\"";
        // line 8
        echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "link", array()), (isset($context["base_url"]) ? $context["base_url"] : null))) : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
            <img
              src=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/logo.svg");
        echo "\"
              alt=\"";
        // line 11
        echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logo", array(), "any", false, true), "alt", array()), twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html"))) : (twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html")));
        echo "\">
          </a>
        </logo>
        ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "description", array())) {
            // line 15
            echo "          <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "description", array());
            echo "</p>
        ";
        }
        // line 17
        echo "        ";
        $this->displayBlock('social', $context, $blocks);
        // line 20
        echo "      </content>

      <content class=\"col-6 col-sm-4 col-md-2\">
        <h4>";
        // line 23
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contact", array()), "title", array());
        echo "</h4>
        <p>
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contact", array()), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            <span>";
            echo $context["item"];
            echo "</span>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </p>
        <p>";
        // line 29
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contact", array()), "email", array());
        echo "</p>
        <p><b>";
        // line 30
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "contact", array()), "gps", array());
        echo "</b></p>
      </content>

      <content class=\"col-6 col-sm-4 col-md-2\">
        <h4>";
        // line 34
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "quicklinks", array()), "title", array());
        echo "</h4>
        <ul class=\"quickmenu\">
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "quicklinks", array()), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "            <li><a href=\"";
            if (twig_in_filter("base_url:", $this->getAttribute($context["link"], "url", array()))) {
                echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["link"], "url", array()), array("base_url:" => ""));
            } else {
                echo $this->getAttribute($context["link"], "url", array());
            }
            echo "\">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
      </content>

      <content class=\"col-12 col-sm-4 col-md-3\">
        <h4>";
        // line 43
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "newsletter", array()), "title", array());
        echo "</h4>
        <p>";
        // line 44
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "newsletter", array()), "description", array());
        echo "</p>

        <form action=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "footer", array()), "newsletter", array()), "uri", array());
        echo "\" method=\"post\" class=\"newsletter\">
          <input type=\"email\" name=\"email\" placeholder=\"news@history.eu\" required/>
          <button type=\"submit\" class=\"btn\"><icon class=\"ion ion-android-send\"></icon></button>
        </form>
      </content>

    </div>

  </div>
</bottom>
";
    }

    // line 17
    public function block_social($context, array $blocks = array())
    {
        // line 18
        echo "          ";
        $this->loadTemplate("partials/widgets/social.html.twig", "partials/bottom.html.twig", 18)->display($context);
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 19,  151 => 18,  148 => 17,  133 => 46,  128 => 44,  124 => 43,  118 => 39,  101 => 37,  97 => 36,  92 => 34,  85 => 30,  81 => 29,  78 => 28,  69 => 26,  65 => 25,  60 => 23,  55 => 20,  52 => 17,  46 => 15,  44 => 14,  38 => 11,  34 => 10,  29 => 8,  20 => 1,);
    }
}
/* <bottom>*/
/*   <div class="container">*/
/* */
/*     <div class="row">*/
/* */
/*       <content class="col-12 col-md-5">*/
/*         <logo>*/
/*           <a href="{{ theme.logo.link|default(base_url) }}">*/
/*             <img*/
/*               src="{{ url('theme://dist/images/logo.svg') }}"*/
/*               alt="{{ theme.logo.alt|default(site.title|e('html')) }}">*/
/*           </a>*/
/*         </logo>*/
/*         {% if theme.footer.description %}*/
/*           <p>{{ theme.footer.description }}</p>*/
/*         {% endif %}*/
/*         {% block social %}*/
/*           {% include 'partials/widgets/social.html.twig' %}*/
/*         {% endblock %}*/
/*       </content>*/
/* */
/*       <content class="col-6 col-sm-4 col-md-2">*/
/*         <h4>{{ theme.footer.contact.title }}</h4>*/
/*         <p>*/
/*           {% for item in theme.footer.contact.address %}*/
/*             <span>{{ item }}</span>*/
/*           {% endfor %}*/
/*         </p>*/
/*         <p>{{ theme.footer.contact.email }}</p>*/
/*         <p><b>{{ theme.footer.contact.gps }}</b></p>*/
/*       </content>*/
/* */
/*       <content class="col-6 col-sm-4 col-md-2">*/
/*         <h4>{{ theme.footer.quicklinks.title }}</h4>*/
/*         <ul class="quickmenu">*/
/*           {% for link in theme.footer.quicklinks.links %}*/
/*             <li><a href="{% if "base_url:" in link.url %}{{ base_url_absolute }}/{{ link.url|replace({"base_url:": ""}) }}{% else %}{{ link.url }}{% endif %}">{{ link.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </content>*/
/* */
/*       <content class="col-12 col-sm-4 col-md-3">*/
/*         <h4>{{ theme.footer.newsletter.title }}</h4>*/
/*         <p>{{ theme.footer.newsletter.description }}</p>*/
/* */
/*         <form action="{{ theme.footer.newsletter.uri }}" method="post" class="newsletter">*/
/*           <input type="email" name="email" placeholder="news@history.eu" required/>*/
/*           <button type="submit" class="btn"><icon class="ion ion-android-send"></icon></button>*/
/*         </form>*/
/*       </content>*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </bottom>*/
/* */
