<?php

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_8ea7fe3051a1b700ac0daf879acde07e extends Drupal\Core\Template\TwigTemplate
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
        // line 82
        echo "<div id=\"page-wrapper\"><div id=\"page\">

  <header id=\"header\" class=\"";
        // line 84
        echo twig_render_var((($this->getContextReference($context, "secondary_menu")) ? ("with-secondary-menu") : ("without-secondary-menu")));
        echo "\" role=\"banner\"><div class=\"section clearfix\">
   ";
        // line 85
        if (isset($context["secondary_menu"])) { $_secondary_menu_ = $context["secondary_menu"]; } else { $_secondary_menu_ = null; }
        if ($_secondary_menu_) {
            // line 86
            echo "      <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
        ";
            // line 87
            echo twig_render_var($this->getContextReference($context, "secondary_menu"));
            echo "
      </nav> <!-- /#secondary-menu -->
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
        if ($_logo_) {
            // line 92
            echo "      <a href=\"";
            echo twig_render_var($this->getContextReference($context, "front_page"));
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
        <img src=\"";
            // line 93
            echo twig_render_var($this->getContextReference($context, "logo"));
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\" />
      </a>
    ";
        }
        // line 96
        echo "
    ";
        // line 97
        if (isset($context["site_name"])) { $_site_name_ = $context["site_name"]; } else { $_site_name_ = null; }
        if (isset($context["site_slogan"])) { $_site_slogan_ = $context["site_slogan"]; } else { $_site_slogan_ = null; }
        if (($_site_name_ || $_site_slogan_)) {
            // line 98
            echo "      <div id=\"name-and-slogan\"";
            if (isset($context["hide_site_name"])) { $_hide_site_name_ = $context["hide_site_name"]; } else { $_hide_site_name_ = null; }
            if (isset($context["hide_site_slogan"])) { $_hide_site_slogan_ = $context["hide_site_slogan"]; } else { $_hide_site_slogan_ = null; }
            if (($_hide_site_name_ && $_hide_site_slogan_)) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
        ";
            // line 99
            if (isset($context["site_name"])) { $_site_name_ = $context["site_name"]; } else { $_site_name_ = null; }
            if ($_site_name_) {
                // line 100
                echo "          ";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                if ($_title_) {
                    // line 101
                    echo "            <div id=\"site-name\"";
                    if (isset($context["hide_site_name"])) { $_hide_site_name_ = $context["hide_site_name"]; } else { $_hide_site_name_ = null; }
                    if ($_hide_site_name_) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 103
                    echo twig_render_var($this->getContextReference($context, "front_page"));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var($this->getContextReference($context, "site_name"));
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 107
                    echo "          ";
                } else {
                    // line 108
                    echo "            <h1 id=\"site-name\"";
                    if (isset($context["hide_site_name"])) { $_hide_site_name_ = $context["hide_site_name"]; } else { $_hide_site_name_ = null; }
                    if ($_hide_site_name_) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
              <a href=\"";
                    // line 109
                    echo twig_render_var($this->getContextReference($context, "front_page"));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var($this->getContextReference($context, "site_name"));
                    echo "</span></a>
            </h1>
          ";
                }
                // line 112
                echo "        ";
            }
            // line 113
            echo "
        ";
            // line 114
            if (isset($context["site_slogan"])) { $_site_slogan_ = $context["site_slogan"]; } else { $_site_slogan_ = null; }
            if ($_site_slogan_) {
                // line 115
                echo "          <div id=\"site-slogan\"";
                if (isset($context["hide_site_slogan"])) { $_hide_site_slogan_ = $context["hide_site_slogan"]; } else { $_hide_site_slogan_ = null; }
                if ($_hide_site_slogan_) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
            ";
                // line 116
                echo twig_render_var($this->getContextReference($context, "site_slogan"));
                echo "
          </div>
        ";
            }
            // line 119
            echo "      </div><!-- /#name-and-slogan -->
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "header"));
        echo "

    ";
        // line 124
        if (isset($context["main_menu"])) { $_main_menu_ = $context["main_menu"]; } else { $_main_menu_ = null; }
        if ($_main_menu_) {
            // line 125
            echo "      <nav id =\"main-menu\" class=\"navigation\" role=\"navigation\">
        ";
            // line 126
            echo twig_render_var($this->getContextReference($context, "main_menu"));
            echo "
      </nav> <!-- /#main-menu -->
    ";
        }
        // line 129
        echo "  </div></header> <!-- /.section, /#header-->

  ";
        // line 131
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        if ($_messages_) {
            // line 132
            echo "    <div id=\"messages\"><div class=\"section clearfix\">
      ";
            // line 133
            echo twig_render_var($this->getContextReference($context, "messages"));
            echo "
    </div></div> <!-- /.section, /#messages -->
  ";
        }
        // line 136
        echo "
  ";
        // line 137
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "featured")) {
            // line 138
            echo "    <aside id=\"featured\"><div class=\"section clearfix\">
      ";
            // line 139
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "featured"));
            echo "
    </div></aside> <!-- /.section, /#featured -->
  ";
        }
        // line 142
        echo "
  <div id=\"main-wrapper\" class=\"clearfix\"><div id=\"main\" class=\"clearfix\">
    ";
        // line 144
        echo twig_render_var($this->getContextReference($context, "breadcrumb"));
        echo "

    <main id=\"content\" class=\"column\" role=\"main\"><section class=\"section\">
      ";
        // line 147
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "highlighted")) {
            echo "<div id=\"highlighted\">";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "highlighted"));
            echo "</div>";
        }
        // line 148
        echo "      <a id=\"main-content\"></a>
      ";
        // line 149
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
        ";
        // line 150
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 151
            echo "          <h1 class=\"title\" id=\"page-title\">
            ";
            // line 152
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "
          </h1>
        ";
        }
        // line 155
        echo "      ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
        ";
        // line 156
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        if ($_tabs_) {
            // line 157
            echo "          <nav class=\"tabs\" role=\"navigation\">
            ";
            // line 158
            echo twig_render_var($this->getContextReference($context, "tabs"));
            echo "
          </nav>
        ";
        }
        // line 161
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "help"));
        echo "
        ";
        // line 162
        if (isset($context["action_links"])) { $_action_links_ = $context["action_links"]; } else { $_action_links_ = null; }
        if ($_action_links_) {
            // line 163
            echo "          <ul class=\"action-links\">
            ";
            // line 164
            echo twig_render_var($this->getContextReference($context, "action_links"));
            echo "
          </ul>
        ";
        }
        // line 167
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "content"));
        echo "
      ";
        // line 168
        echo twig_render_var($this->getContextReference($context, "feed_icons"));
        echo "
    </section></main> <!-- /.section, /#content -->

    ";
        // line 171
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "sidebar_first")) {
            // line 172
            echo "      <div id=\"sidebar-first\" class=\"column sidebar\"><aside class=\"section\">
        ";
            // line 173
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "sidebar_first"));
            echo "
      </aside></div><!-- /.section, /#sidebar-first -->
    ";
        }
        // line 176
        echo "
    ";
        // line 177
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "sidebar_second")) {
            // line 178
            echo "      <div id=\"sidebar-second\" class=\"column sidebar\"><aside class=\"section\">
        ";
            // line 179
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "sidebar_second"));
            echo "
      </aside></div><!-- /.section, /#sidebar-second -->
    ";
        }
        // line 182
        echo "
  </div></div><!-- /#main, /#main-wrapper -->

  ";
        // line 185
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ((($this->getAttribute($_page_, "triptych_first") || $this->getAttribute($_page_, "triptych_middle")) || $this->getAttribute($_page_, "triptych_last"))) {
            // line 186
            echo "    <div id=\"triptych-wrapper\"><aside id=\"triptych\" class=\"clearfix\">
      ";
            // line 187
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "triptych_first"));
            echo "
      ";
            // line 188
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "triptych_middle"));
            echo "
      ";
            // line 189
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "triptych_last"));
            echo "
    </aside></div><!-- /#triptych, /#triptych-wrapper -->
  ";
        }
        // line 192
        echo "
  <div id=\"footer-wrapper\"><footer class=\"section\">

    ";
        // line 195
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (((($this->getAttribute($_page_, "footer_firstcolumn") || $this->getAttribute($_page_, "footer_secondcolumn")) || $this->getAttribute($_page_, "footer_thirdcolumn")) || $this->getAttribute($_page_, "footer_fourthcolumn"))) {
            // line 196
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
        ";
            // line 197
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer_firstcolumn"));
            echo "
        ";
            // line 198
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer_secondcolumn"));
            echo "
        ";
            // line 199
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer_thirdcolumn"));
            echo "
        ";
            // line 200
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer_fourthcolumn"));
            echo "
      </div><!-- /#footer-columns -->
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "footer")) {
            // line 205
            echo "      <div id=\"footer\" role=\"contentinfo\" class=\"clearfix\">
        ";
            // line 206
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer"));
            echo "
      </div> <!-- /#footer -->
   ";
        }
        // line 209
        echo "
  </footer></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 209,  372 => 206,  369 => 205,  366 => 204,  363 => 203,  357 => 200,  353 => 199,  349 => 198,  345 => 197,  342 => 196,  339 => 195,  334 => 192,  328 => 189,  324 => 188,  320 => 187,  317 => 186,  314 => 185,  309 => 182,  303 => 179,  300 => 178,  297 => 177,  294 => 176,  288 => 173,  285 => 172,  282 => 171,  276 => 168,  271 => 167,  265 => 164,  262 => 163,  259 => 162,  254 => 161,  248 => 158,  245 => 157,  242 => 156,  237 => 155,  231 => 152,  228 => 151,  225 => 150,  221 => 149,  218 => 148,  211 => 147,  205 => 144,  201 => 142,  195 => 139,  192 => 138,  189 => 137,  186 => 136,  180 => 133,  177 => 132,  174 => 131,  170 => 129,  164 => 126,  161 => 125,  158 => 124,  153 => 122,  150 => 121,  146 => 119,  140 => 116,  132 => 115,  129 => 114,  126 => 113,  123 => 112,  113 => 109,  105 => 108,  102 => 107,  92 => 103,  83 => 101,  79 => 100,  76 => 99,  67 => 98,  63 => 97,  60 => 96,  52 => 93,  45 => 92,  42 => 91,  39 => 90,  33 => 87,  30 => 86,  27 => 85,  23 => 84,  19 => 82,);
    }
}
