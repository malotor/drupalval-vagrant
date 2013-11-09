<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_5d55e6d1cc03b88d57ec631131e1b71f extends Drupal\Core\Template\TwigTemplate
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
        // line 26
        if (isset($context["message_list"])) { $_message_list_ = $context["message_list"]; } else { $_message_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_message_list_);
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  <div class=\"messages messages--";
            echo twig_render_var($this->getContextReference($context, "type"));
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "status_headings"), $this->getContextReference($context, "type"), array(), "array"));
            echo "\">
    ";
            // line 28
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "error")) {
                // line 29
                echo "      <div role=\"alert\">
    ";
            }
            // line 31
            echo "      ";
            if (isset($context["status_headings"])) { $_status_headings_ = $context["status_headings"]; } else { $_status_headings_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if ($this->getAttribute($_status_headings_, $_type_, array(), "array")) {
                // line 32
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_render_var($this->getAttribute($this->getContextReference($context, "status_headings"), $this->getContextReference($context, "type"), array(), "array"));
                echo "</h2>
      ";
            }
            // line 34
            echo "      ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            if ((twig_length_filter($this->env, $_messages_) > 1)) {
                // line 35
                echo "        <ul class=\"messages__list\">
          ";
                // line 36
                if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_messages_);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "            <li class=\"messages__item\">";
                    echo twig_render_var($this->getContextReference($context, "message"));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 39
                echo "        </ul>
      ";
            } else {
                // line 41
                echo "        ";
                echo twig_render_var($this->getAttribute($this->getContextReference($context, "messages"), 0));
                echo "
      ";
            }
            // line 43
            echo "    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "error")) {
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 46,  84 => 44,  80 => 43,  74 => 41,  70 => 39,  61 => 37,  56 => 36,  53 => 35,  49 => 34,  43 => 32,  38 => 31,  34 => 29,  31 => 28,  24 => 27,  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 122,  150 => 121,  146 => 119,  140 => 116,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 108,  102 => 107,  92 => 103,  83 => 101,  79 => 100,  76 => 99,  67 => 98,  63 => 97,  60 => 96,  52 => 93,  45 => 92,  42 => 91,  39 => 90,  33 => 87,  30 => 86,  27 => 85,  23 => 84,  19 => 26,);
    }
}
