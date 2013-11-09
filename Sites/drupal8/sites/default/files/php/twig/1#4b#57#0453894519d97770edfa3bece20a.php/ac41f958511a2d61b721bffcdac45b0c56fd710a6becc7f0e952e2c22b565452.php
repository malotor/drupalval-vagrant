<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_4b570453894519d97770edfa3bece20a extends Drupal\Core\Template\TwigTemplate
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var($this->getContextReference($context, "html_attributes"));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var($this->getContextReference($context, "head"));
        echo "
    <title>";
        // line 33
        echo twig_render_var($this->getContextReference($context, "head_title"));
        echo "</title>
    ";
        // line 34
        echo twig_render_var($this->getContextReference($context, "styles"));
        echo "
    ";
        // line 35
        echo twig_render_var($this->getContextReference($context, "scripts"));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var($this->getContextReference($context, "page_top"));
        echo "
    ";
        // line 42
        echo twig_render_var($this->getContextReference($context, "page"));
        echo "
    ";
        // line 43
        echo twig_render_var($this->getContextReference($context, "page_bottom"));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  26 => 17,  166 => 93,  160 => 90,  157 => 89,  147 => 85,  144 => 84,  134 => 81,  130 => 80,  124 => 77,  121 => 76,  117 => 75,  111 => 73,  108 => 72,  99 => 68,  96 => 67,  90 => 64,  87 => 63,  71 => 57,  58 => 42,  54 => 41,  48 => 48,  37 => 45,  28 => 42,  44 => 37,  35 => 34,  25 => 14,  22 => 30,  88 => 46,  84 => 44,  80 => 61,  74 => 58,  70 => 39,  61 => 53,  56 => 36,  53 => 35,  49 => 39,  43 => 32,  38 => 31,  34 => 29,  31 => 33,  24 => 41,  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 88,  150 => 121,  146 => 119,  140 => 83,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 71,  102 => 107,  92 => 103,  83 => 62,  79 => 100,  76 => 99,  67 => 56,  63 => 97,  60 => 96,  52 => 93,  45 => 47,  42 => 46,  39 => 35,  33 => 87,  30 => 16,  27 => 32,  23 => 84,  19 => 29,);
    }
}
