<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_ff46608f9d231aa13be6d823b4f06326 extends Drupal\Core\Template\TwigTemplate
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
        // line 68
        echo "  <header id=\"branding\" class=\"clearfix\">
    ";
        // line 69
        echo twig_render_var($this->getContextReference($context, "breadcrumb"));
        echo "
    ";
        // line 70
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
    ";
        // line 71
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 72
            echo "      <h1 class=\"page-title\">";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "</h1>
    ";
        }
        // line 74
        echo "    ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
    ";
        // line 75
        if (isset($context["primary_local_tasks"])) { $_primary_local_tasks_ = $context["primary_local_tasks"]; } else { $_primary_local_tasks_ = null; }
        if ($_primary_local_tasks_) {
            // line 76
            echo "      ";
            echo twig_render_var($this->getContextReference($context, "primary_local_tasks"));
            echo "
    ";
        }
        // line 78
        echo "  </header>

  <div id=\"page\">
    ";
        // line 81
        if (isset($context["secondary_local_tasks"])) { $_secondary_local_tasks_ = $context["secondary_local_tasks"]; } else { $_secondary_local_tasks_ = null; }
        if ($_secondary_local_tasks_) {
            // line 82
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_render_var($this->getContextReference($context, "secondary_local_tasks"));
            echo "</div>
    ";
        }
        // line 84
        echo "
    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\"></a></div>
      ";
        // line 87
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        if ($_messages_) {
            // line 88
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_render_var($this->getContextReference($context, "messages"));
            echo "</div>
      ";
        }
        // line 90
        echo "      ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "help")) {
            // line 91
            echo "        <div id=\"help\">
          ";
            // line 92
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "help"));
            echo "
        </div>
      ";
        }
        // line 95
        echo "      ";
        if (isset($context["action_links"])) { $_action_links_ = $context["action_links"]; } else { $_action_links_ = null; }
        if ($_action_links_) {
            // line 96
            echo "        <ul class=\"action-links\">
          ";
            // line 97
            echo twig_render_var($this->getContextReference($context, "action_links"));
            echo "
        </ul>
      ";
        }
        // line 100
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "content"));
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\">
      ";
        // line 104
        echo twig_render_var($this->getContextReference($context, "feed_icons"));
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 104,  107 => 100,  101 => 97,  98 => 96,  94 => 95,  88 => 92,  85 => 91,  81 => 90,  75 => 88,  72 => 87,  67 => 84,  61 => 82,  58 => 81,  53 => 78,  47 => 76,  44 => 75,  39 => 74,  33 => 72,  30 => 71,  26 => 70,  22 => 69,  19 => 68,);
    }
}
