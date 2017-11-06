<?php

/* macros/macros.html.twig */
class __TwigTemplate_7b05a61d6de63f51f941cef12023ab0d570ebd1ec7e65df692e21a9c4ef7d76e extends Twig_Template
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
        // line 2
        echo "
";
        // line 43
        echo "
";
        // line 50
        echo "
";
        // line 105
        echo "
";
        // line 118
        echo "
";
    }

    // line 4
    public function getbodyClass($__mode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "mode" => $__mode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "  ";
            $context["modeOut"] = "";
            // line 6
            echo "
  ";
            // line 8
            echo "  ";
            if (((isset($context["mode"]) ? $context["mode"] : null) == 0)) {
                // line 9
                echo "    ";
                $context["modeOut"] = "dark";
                // line 10
                echo "
  ";
                // line 12
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 1)) {
                // line 13
                echo "    ";
                $context["modeOut"] = "fluid";
                // line 14
                echo "
  ";
                // line 16
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 2)) {
                // line 17
                echo "    ";
                $context["modeOut"] = "fluid dark";
                // line 18
                echo "
  ";
                // line 20
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 3)) {
                // line 21
                echo "    ";
                $context["modeOut"] = "fixed";
                // line 22
                echo "
  ";
                // line 24
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 4)) {
                // line 25
                echo "    ";
                $context["modeOut"] = "fixed fluid";
                // line 26
                echo "
  ";
                // line 28
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 5)) {
                // line 29
                echo "    ";
                $context["modeOut"] = "float";
                // line 30
                echo "
  ";
                // line 32
                echo "  ";
            } elseif (((isset($context["mode"]) ? $context["mode"] : null) == 6)) {
                // line 33
                echo "    ";
                $context["modeOut"] = "float fluid";
                // line 34
                echo "
  ";
                // line 36
                echo "  ";
            } else {
                // line 37
                echo "    ";
                $context["modeOut"] = "nothing-specified";
                // line 38
                echo "
  ";
            }
            // line 40
            echo "
";
            // line 41
            echo (isset($context["modeOut"]) ? $context["modeOut"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getwrapper($__item__ = null, $__blur__ = null, $__parallax__ = null, $__overlay__ = null, $__assets__ = null, $__page__ = null, $__hasOwnSrc__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "blur" => $__blur__,
            "parallax" => $__parallax__,
            "overlay" => $__overlay__,
            "assets" => $__assets__,
            "page" => $__page__,
            "hasOwnSrc" => $__hasOwnSrc__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "  <div class=\"wrapper\">
    ";
            // line 47
            echo $this->getAttribute($this, "flexContent", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["blur"]) ? $context["blur"] : null), 2 => (isset($context["parallax"]) ? $context["parallax"] : null), 3 => (isset($context["overlay"]) ? $context["overlay"] : null), 4 => (isset($context["assets"]) ? $context["assets"] : null), 5 => (isset($context["page"]) ? $context["page"] : null), 6 => (isset($context["hasOwnSrc"]) ? $context["hasOwnSrc"] : null)), "method");
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getflexContent($__item__ = null, $__blur__ = null, $__parallax__ = null, $__overlay__ = null, $__assets__ = null, $__page__ = null, $__hasOwnSrc__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "blur" => $__blur__,
            "parallax" => $__parallax__,
            "overlay" => $__overlay__,
            "assets" => $__assets__,
            "page" => $__page__,
            "hasOwnSrc" => $__hasOwnSrc__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "  ";
            $context["ID"] = ("PLYR-" . $this->env->getExtension('GravTwigExtension')->randomStringFunc(10));
            // line 54
            echo "
  ";
            // line 55
            $context["style"] = "";
            // line 56
            echo "
  ";
            // line 57
            if ((isset($context["blur"]) ? $context["blur"] : null)) {
                // line 58
                echo "    ";
                $context["style"] = (((("-webkit-filter: blur(" . (isset($context["blur"]) ? $context["blur"] : null)) . "px);filter: blur(") . (isset($context["blur"]) ? $context["blur"] : null)) . "px);width: 110%;height: 110%;margin-left: -2%;margin-top: -2%;");
                // line 59
                echo "  ";
            }
            // line 60
            echo "
  ";
            // line 61
            if (((isset($context["parallax"]) ? $context["parallax"] : null) && $this->getAttribute((isset($context["parallax"]) ? $context["parallax"] : null), "enabled", array()))) {
                // line 62
                echo "    ";
                $context["flexParallax"] = (((("parallax data-0=\"top:" . $this->getAttribute((isset($context["parallax"]) ? $context["parallax"] : null), "begin", array())) . ";\" data-end=\"top:") . $this->getAttribute((isset($context["parallax"]) ? $context["parallax"] : null), "end", array())) . ";\"");
                // line 63
                echo "  ";
            }
            // line 64
            echo "
  ";
            // line 65
            if ((isset($context["hasOwnSrc"]) ? $context["hasOwnSrc"] : null)) {
                // line 66
                echo "    ";
                $context["source"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "src", array());
                // line 67
                echo "  ";
            } else {
                // line 68
                echo "    ";
                $context["source"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "src", array()), array(), "array"), "url", array());
                // line 69
                echo "  ";
            }
            // line 70
            echo "
  ";
            // line 71
            if ((isset($context["overlay"]) ? $context["overlay"] : null)) {
                // line 72
                echo "    <div class=\"overlay\" style=\"background-color:";
                echo (isset($context["overlay"]) ? $context["overlay"] : null);
                echo ";\"></div>
  ";
            }
            // line 74
            echo "
  ";
            // line 75
            if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array())) == "color")) {
                // line 76
                echo "    ";
                $context["style"] = (((("style=\"" . (isset($context["style"]) ? $context["style"] : null)) . "background-color:") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "src", array())) . ";\"");
                // line 77
                echo "    <div class=\"color\" style=\"";
                echo (isset($context["style"]) ? $context["style"] : null);
                echo "\"></div>
  ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute(            // line 78
(isset($context["item"]) ? $context["item"] : null), "type", array())) == "image")) {
                // line 79
                echo "    ";
                $context["style"] = (((("style=\"" . (isset($context["style"]) ? $context["style"] : null)) . "background-image: url(") . (isset($context["source"]) ? $context["source"] : null)) . ");\"");
                // line 80
                echo "    <div class=\"img\" ";
                echo (isset($context["style"]) ? $context["style"] : null);
                echo " ";
                echo (isset($context["flexParallax"]) ? $context["flexParallax"] : null);
                echo "></div>
  ";
            } elseif (twig_in_filter(twig_lower_filter($this->env, $this->getAttribute(            // line 81
(isset($context["item"]) ? $context["item"] : null), "type", array())), array(0 => "video", 1 => "link"))) {
                // line 82
                echo "    <video id=\"";
                echo (isset($context["ID"]) ? $context["ID"] : null);
                echo "\" ";
                if ((isset($context["autoplay"]) ? $context["autoplay"] : null)) {
                    echo "autoplay";
                }
                echo " preload=\"auto\" muted=\"true\" controls=\"1\" class=\"tryhard\" ";
                echo (isset($context["flexBlur"]) ? $context["flexBlur"] : null);
                echo " ";
                echo (isset($context["flexParallax"]) ? $context["flexParallax"] : null);
                echo ">
      <source src=\"";
                // line 83
                echo (isset($context["source"]) ? $context["source"] : null);
                echo "\" type=\"video/mp4\">
      <p>Your browser does not support the html 5 video tag.</p>
    </video>
  ";
            } elseif (twig_in_filter(twig_lower_filter($this->env, $this->getAttribute(            // line 86
(isset($context["item"]) ? $context["item"] : null), "type", array())), array(0 => "youtube", 1 => "vimeo"))) {
                // line 87
                echo "    <div id=\"";
                echo (isset($context["ID"]) ? $context["ID"] : null);
                echo "\" class=\"video\" data-type=\"";
                echo twig_lower_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()));
                echo "\" data-video-id=\"";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "src", array());
                echo "\"></div>
  ";
            } else {
                // line 89
                echo "    <h5>No type choosen! [";
                echo (isset($context["ID"]) ? $context["ID"] : null);
                echo "]</h5>
  ";
            }
            // line 91
            echo "
  ";
            // line 93
            echo "  ";
            if (twig_in_filter(twig_lower_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array())), array(0 => "video", 1 => "link", 2 => "youtube", 3 => "vimeo"))) {
                // line 94
                echo "    ";
                $context["plyrPlayer"] = (((((((("
      plyr.setup(\"#" .                 // line 95
(isset($context["ID"]) ? $context["ID"] : null)) . "\", {
        title: \"") . (($this->getAttribute(                // line 96
(isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "No title defined")) : ("No title defined"))) . "\",
        controls: ") . (($this->getAttribute(                // line 97
(isset($context["item"]) ? $context["item"] : null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "controls", array()), "['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'fullscreen']")) : ("['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'fullscreen']"))) . ",
        autoplay: ") . (($this->getAttribute(                // line 98
(isset($context["item"]) ? $context["item"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "autoplay", array()), 0)) : (0))) . ",
        volume: 7
      });
    ");
                // line 102
                echo "    ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => (isset($context["plyrPlayer"]) ? $context["plyrPlayer"] : null), 1 => array("group" => "plyr")), "method");
                // line 103
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function getheadlineContent($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "  ";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "headline", array())) {
                // line 109
                echo "    <h2 class=\"headline\"";
                if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "headline_animation", array())) {
                    echo " waypoint data-animation=\"";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "headline_animation", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "headline", array());
                echo "</h2>
  ";
            }
            // line 111
            echo "  ";
            if (twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "divider", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                // line 112
                echo "    <divider";
                if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "divider_animation", array())) {
                    echo " waypoint data-animation=\"";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "divider_animation", array());
                    echo "\"";
                }
                echo "></divider>
  ";
            }
            // line 114
            echo "  ";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "subheadline", array())) {
                // line 115
                echo "    <h3 class=\"subheadline\"";
                if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "subheadline_animation", array())) {
                    echo " waypoint data-animation=\"";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "subheadline_animation", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "subheadline", array());
                echo "</h3>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function getNAME($__VAR__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "VAR" => $__VAR__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
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
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 120,  408 => 115,  405 => 114,  395 => 112,  392 => 111,  380 => 109,  377 => 108,  365 => 107,  349 => 103,  346 => 102,  341 => 98,  339 => 97,  337 => 96,  335 => 95,  332 => 94,  329 => 93,  326 => 91,  320 => 89,  310 => 87,  308 => 86,  302 => 83,  289 => 82,  287 => 81,  280 => 80,  277 => 79,  275 => 78,  270 => 77,  267 => 76,  265 => 75,  262 => 74,  256 => 72,  254 => 71,  251 => 70,  248 => 69,  245 => 68,  242 => 67,  239 => 66,  237 => 65,  234 => 64,  231 => 63,  228 => 62,  226 => 61,  223 => 60,  220 => 59,  217 => 58,  215 => 57,  212 => 56,  210 => 55,  207 => 54,  204 => 53,  186 => 52,  168 => 47,  165 => 46,  147 => 45,  130 => 41,  127 => 40,  123 => 38,  120 => 37,  117 => 36,  114 => 34,  111 => 33,  108 => 32,  105 => 30,  102 => 29,  99 => 28,  96 => 26,  93 => 25,  90 => 24,  87 => 22,  84 => 21,  81 => 20,  78 => 18,  75 => 17,  72 => 16,  69 => 14,  66 => 13,  63 => 12,  60 => 10,  57 => 9,  54 => 8,  51 => 6,  48 => 5,  36 => 4,  31 => 118,  28 => 105,  25 => 50,  22 => 43,  19 => 2,);
    }
}
/* {# Macros #}*/
/* */
/* {# Macro: bodyClass #}*/
/* {% macro bodyClass(mode) %}*/
/*   {% set modeOut = "" %}*/
/* */
/*   {# Static header dark #}*/
/*   {% if mode == 0 %}*/
/*     {% set modeOut = "dark" %}*/
/* */
/*   {# Static header fluid #}*/
/*   {% elseif mode == 1 %}*/
/*     {% set modeOut = "fluid" %}*/
/* */
/*   {# Static header fluid dark #}*/
/*   {% elseif mode == 2 %}*/
/*     {% set modeOut = "fluid dark" %}*/
/* */
/*   {# Static header fixed #}*/
/*   {% elseif mode == 3 %}*/
/*     {% set modeOut = "fixed" %}*/
/* */
/*   {# Static header fixed fluid #}*/
/*   {% elseif mode == 4 %}*/
/*     {% set modeOut = "fixed fluid" %}*/
/* */
/*   {# Static header float #}*/
/*   {% elseif mode == 5 %}*/
/*     {% set modeOut = "float" %}*/
/* */
/*   {# Static header float fluid #}*/
/*   {% elseif mode == 6 %}*/
/*     {% set modeOut = "float fluid" %}*/
/* */
/*   {# Static header float fluid #}*/
/*   {% else %}*/
/*     {% set modeOut = "nothing-specified" %}*/
/* */
/*   {% endif %}*/
/* */
/* {{ modeOut }}*/
/* {% endmacro %}*/
/* */
/* {# Macro: Wrapper #}*/
/* {% macro wrapper(item, blur, parallax, overlay, assets, page, hasOwnSrc) %}*/
/*   <div class="wrapper">*/
/*     {{ _self.flexContent(item, blur, parallax, overlay, assets, page, hasOwnSrc) }}*/
/*   </div>*/
/* {% endmacro %}*/
/* */
/* {# Macro: Flex content #}*/
/* {% macro flexContent(item, blur, parallax, overlay, assets, page, hasOwnSrc) %}*/
/*   {% set ID = "PLYR-" ~ random_string(10) %}*/
/* */
/*   {% set style = '' %}*/
/* */
/*   {% if blur %}*/
/*     {% set style = '-webkit-filter: blur(' ~ blur ~ 'px);filter: blur(' ~ blur ~ 'px);width: 110%;height: 110%;margin-left: -2%;margin-top: -2%;' %}*/
/*   {% endif %}*/
/* */
/*   {% if parallax and parallax.enabled %}*/
/*     {% set flexParallax = 'parallax data-0="top:' ~ parallax.begin ~ ';" data-end="top:' ~ parallax.end ~ ';"' %}*/
/*   {% endif %}*/
/* */
/*   {% if hasOwnSrc %}*/
/*     {% set source = item.src %}*/
/*   {% else %}*/
/*     {% set source = page.media[item.src].url %}*/
/*   {% endif %}*/
/* */
/*   {% if overlay %}*/
/*     <div class="overlay" style="background-color:{{ overlay }};"></div>*/
/*   {% endif %}*/
/* */
/*   {% if item.type|lower == "color" %}*/
/*     {% set style = 'style="' ~ style ~ 'background-color:' ~ item.src ~ ';"' %}*/
/*     <div class="color" style="{{ style }}"></div>*/
/*   {% elseif item.type|lower == "image" %}*/
/*     {% set style = 'style="' ~ style ~ 'background-image: url(' ~ source ~ ');"' %}*/
/*     <div class="img" {{ style }} {{ flexParallax }}></div>*/
/*   {% elseif item.type|lower in ["video", "link"] %}*/
/*     <video id="{{ ID }}" {% if autoplay %}autoplay{% endif %} preload="auto" muted="true" controls="1" class="tryhard" {{ flexBlur }} {{ flexParallax }}>*/
/*       <source src="{{ source }}" type="video/mp4">*/
/*       <p>Your browser does not support the html 5 video tag.</p>*/
/*     </video>*/
/*   {% elseif item.type|lower in ["youtube", "vimeo"] %}*/
/*     <div id="{{ ID }}" class="video" data-type="{{ item.type|lower }}" data-video-id="{{ item.src }}"></div>*/
/*   {% else %}*/
/*     <h5>No type choosen! [{{ ID }}]</h5>*/
/*   {% endif %}*/
/* */
/*   {# Init plyr video control script #}*/
/*   {% if item.type|lower in ["video", "link", "youtube", "vimeo"] %}*/
/*     {% set plyrPlayer = '*/
/*       plyr.setup("#' ~ ID ~ '", {*/
/*         title: "' ~ item.title|default('No title defined') ~ '",*/
/*         controls: ' ~ item.controls|default("['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'fullscreen']") ~ ',*/
/*         autoplay: ' ~ item.autoplay|default(0) ~ ',*/
/*         volume: 7*/
/*       });*/
/*     ' %}*/
/*     {% do assets.addInlineJs(plyrPlayer, {'group': 'plyr'}) %}*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
/* {# Macro: Headline content #}*/
/* {% macro headlineContent(options) %}*/
/*   {% if options.headline %}*/
/*     <h2 class="headline"{% if options.headline_animation %} waypoint data-animation="{{ options.headline_animation }}"{% endif %}>{{ options.headline }}</h2>*/
/*   {% endif %}*/
/*   {% if options.divider in ['on', 'true', 1] %}*/
/*     <divider{% if options.divider_animation %} waypoint data-animation="{{ options.divider_animation }}"{% endif %}></divider>*/
/*   {% endif %}*/
/*   {% if options.subheadline %}*/
/*     <h3 class="subheadline"{% if options.subheadline_animation %} waypoint data-animation="{{ options.subheadline_animation }}"{% endif %}>{{ options.subheadline }}</h3>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
/* {# Macro: NAME #}*/
/* {% macro NAME(VAR) %}{% endmacro %}*/
/* */
