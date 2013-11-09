<?php

/* core/modules/views/templates/views-view.html.twig */
class __TwigTemplate_a603cd1856bfd2c44071291eeba56087 extends Drupal\Core\Template\TwigTemplate
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
        // line 40
        echo "<div";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
  ";
        // line 41
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
  ";
        // line 42
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 43
            echo "    ";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "
  ";
        }
        // line 45
        echo "  ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
  ";
        // line 46
        if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
        if ($_header_) {
            // line 47
            echo "    <div class=\"view-header\">
      ";
            // line 48
            echo twig_render_var($this->getContextReference($context, "header"));
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if (isset($context["exposed"])) { $_exposed_ = $context["exposed"]; } else { $_exposed_ = null; }
        if ($_exposed_) {
            // line 52
            echo "    <div class=\"view-filters\">
      ";
            // line 53
            echo twig_render_var($this->getContextReference($context, "exposed"));
            echo "
    </div>
  ";
        }
        // line 56
        echo "  ";
        if (isset($context["attachment_before"])) { $_attachment_before_ = $context["attachment_before"]; } else { $_attachment_before_ = null; }
        if ($_attachment_before_) {
            // line 57
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 58
            echo twig_render_var($this->getContextReference($context, "attachment_before"));
            echo "
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        if (isset($context["empty"])) { $_empty_ = $context["empty"]; } else { $_empty_ = null; }
        if ($_rows_) {
            // line 63
            echo "    <div class=\"view-content\">
      ";
            // line 64
            echo twig_render_var($this->getContextReference($context, "rows"));
            echo "
    </div>
  ";
        } elseif ($_empty_) {
            // line 67
            echo "    <div class=\"view-empty\">
      ";
            // line 68
            echo twig_render_var($this->getContextReference($context, "empty"));
            echo "
    </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if ($_pager_) {
            // line 73
            echo "    ";
            echo twig_render_var($this->getContextReference($context, "pager"));
            echo "
  ";
        }
        // line 75
        echo "  ";
        if (isset($context["attachment_after"])) { $_attachment_after_ = $context["attachment_after"]; } else { $_attachment_after_ = null; }
        if ($_attachment_after_) {
            // line 76
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 77
            echo twig_render_var($this->getContextReference($context, "attachment_after"));
            echo "
    </div>
  ";
        }
        // line 80
        echo "  ";
        if (isset($context["more"])) { $_more_ = $context["more"]; } else { $_more_ = null; }
        if ($_more_) {
            // line 81
            echo "    ";
            echo twig_render_var($this->getContextReference($context, "more"));
            echo "
  ";
        }
        // line 83
        echo "  ";
        if (isset($context["footer"])) { $_footer_ = $context["footer"]; } else { $_footer_ = null; }
        if ($_footer_) {
            // line 84
            echo "    <div class=\"view-footer\">
      ";
            // line 85
            echo twig_render_var($this->getContextReference($context, "footer"));
            echo "
    </div>
  ";
        }
        // line 88
        echo "  ";
        if (isset($context["feed_icon"])) { $_feed_icon_ = $context["feed_icon"]; } else { $_feed_icon_ = null; }
        if ($_feed_icon_) {
            // line 89
            echo "    <div class=\"feed-icon\">
      ";
            // line 90
            echo twig_render_var($this->getContextReference($context, "feed_icon"));
            echo "
    </div>
  ";
        }
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  160 => 90,  157 => 89,  147 => 85,  144 => 84,  134 => 81,  130 => 80,  124 => 77,  121 => 76,  117 => 75,  111 => 73,  108 => 72,  99 => 68,  96 => 67,  90 => 64,  87 => 63,  71 => 57,  58 => 52,  54 => 51,  48 => 48,  37 => 45,  28 => 42,  44 => 19,  35 => 17,  25 => 14,  22 => 13,  88 => 46,  84 => 44,  80 => 61,  74 => 58,  70 => 39,  61 => 53,  56 => 36,  53 => 35,  49 => 52,  43 => 32,  38 => 31,  34 => 29,  31 => 43,  24 => 41,  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 88,  150 => 121,  146 => 119,  140 => 83,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 71,  102 => 107,  92 => 103,  83 => 62,  79 => 100,  76 => 99,  67 => 56,  63 => 97,  60 => 96,  52 => 93,  45 => 47,  42 => 46,  39 => 49,  33 => 87,  30 => 16,  27 => 85,  23 => 84,  19 => 40,);
    }
}
