<?php

/* partials/header.html.twig */
class __TwigTemplate_f53526cec0f34c51eee0d259ae856cee050e0d1f908339491d7a0d133ebc172f extends Twig_Template
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
        echo "<div id=\"inner-wrap\">
  <header id=\"top\" role=\"banner\">
    <div class=\"block\">
      <h1 class=\"block-title\">Book Title</h1>
      <a class=\"nav-btn\" href=\"#nav\" id=\"nav-open-btn\">Book Navigation</a>
    </div>
  </header>
  <nav id=\"nav\" role=\"navigation\">
    <div class=\"block\">
      <h2 class=\"block-title\">Chapters</h2>
      <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 15
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 16
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
          <a href=\"";
                // line 17
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
        </li>
        <!--
            -->
        ";
            }
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </ul>
      <a class=\"close-btn\" href=\"#top\" id=\"nav-close-btn\">Return to Content</a>
    </div>
  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  57 => 22,  47 => 17,  42 => 16,  39 => 15,  36 => 14,  32 => 13,  19 => 2,);
    }
}
/* {# Nav adapted from David Bushell #}*/
/* <div id="inner-wrap">*/
/*   <header id="top" role="banner">*/
/*     <div class="block">*/
/*       <h1 class="block-title">Book Title</h1>*/
/*       <a class="nav-btn" href="#nav" id="nav-open-btn">Book Navigation</a>*/
/*     </div>*/
/*   </header>*/
/*   <nav id="nav" role="navigation">*/
/*     <div class="block">*/
/*       <h2 class="block-title">Chapters</h2>*/
/*       <ul>*/
/*         {% for page in pages.children %}*/
/*         {% if page.visible %}*/
/*         {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*         <li class="{{ current_page }}">*/
/*           <a href="{{ page.url }}">{{ page.menu }}</a>*/
/*         </li>*/
/*         <!--*/
/*             -->*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <a class="close-btn" href="#top" id="nav-close-btn">Return to Content</a>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* */
