<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_f601168cb881307e31beece5eb65a53a extends Drupal\Core\Template\TwigTemplate
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
        // line 12
        if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
        if ($_breadcrumb_) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\">
    <h2 class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("You are here"));
            echo "</h2>
    <ol>
    ";
            // line 16
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_breadcrumb_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>";
                echo twig_render_var($this->getContextReference($context, "item"));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 19,  35 => 17,  25 => 14,  22 => 13,  88 => 46,  84 => 44,  80 => 43,  74 => 41,  70 => 39,  61 => 37,  56 => 36,  53 => 35,  49 => 34,  43 => 32,  38 => 31,  34 => 29,  31 => 28,  24 => 27,  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 122,  150 => 121,  146 => 119,  140 => 116,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 108,  102 => 107,  92 => 103,  83 => 101,  79 => 100,  76 => 99,  67 => 98,  63 => 97,  60 => 96,  52 => 93,  45 => 92,  42 => 91,  39 => 90,  33 => 87,  30 => 16,  27 => 85,  23 => 84,  19 => 12,);
    }
}
