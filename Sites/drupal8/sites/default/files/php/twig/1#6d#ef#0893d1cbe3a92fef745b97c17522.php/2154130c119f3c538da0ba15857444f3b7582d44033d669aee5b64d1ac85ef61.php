<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_6def0893d1cbe3a92fef745b97c17522 extends Drupal\Core\Template\TwigTemplate
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
        // line 23
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($_content_) {
            // line 24
            echo "  <div";
            echo twig_render_var($this->getContextReference($context, "attributes"));
            echo ">
    ";
            // line 25
            echo twig_render_var($this->getContextReference($context, "content"));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  160 => 90,  157 => 89,  147 => 85,  144 => 84,  134 => 81,  130 => 80,  124 => 77,  121 => 76,  117 => 75,  111 => 73,  108 => 72,  99 => 68,  96 => 67,  90 => 64,  87 => 63,  71 => 57,  58 => 52,  54 => 51,  48 => 48,  37 => 45,  28 => 42,  44 => 19,  35 => 17,  25 => 14,  22 => 24,  88 => 46,  84 => 44,  80 => 61,  74 => 58,  70 => 39,  61 => 53,  56 => 36,  53 => 35,  49 => 52,  43 => 32,  38 => 31,  34 => 29,  31 => 43,  24 => 41,  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 88,  150 => 121,  146 => 119,  140 => 83,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 71,  102 => 107,  92 => 103,  83 => 62,  79 => 100,  76 => 99,  67 => 56,  63 => 97,  60 => 96,  52 => 93,  45 => 47,  42 => 46,  39 => 49,  33 => 87,  30 => 16,  27 => 25,  23 => 84,  19 => 23,);
    }
}
