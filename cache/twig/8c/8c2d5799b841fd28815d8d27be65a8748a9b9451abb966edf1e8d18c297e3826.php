<?php

/* partials/base.html.twig */
class __TwigTemplate_bd67820ed1b9da2dd252564eee769dd527de60b74978778c713944c6640cba87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "  </head>
  <body>
    ";
        // line 48
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "
    <div class=\"container\">
      ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "    </div>

    <div class=\"footer\">
      <div>
        <p>Skeleton Them for <a href=\"http://getgrav.org\">Grav</a></p>
      </div>
    </div>
  </body>
  ";
        // line 60
        $this->displayBlock('bottom', $context, $blocks);
        // line 61
        echo "<script src=\"http://localhost:35729/livereload.js\"></script>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "    <meta content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\" name=\"description\">
    ";
        } else {
            // line 11
            echo "    <meta content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\" name=\"description\">
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "    <meta content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\" name=\"robots\">
    ";
        }
        // line 16
        echo "
    <link href=\"";
        // line 17
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" rel=\"icon\" type=\"image/png\">


    <title>";
        // line 20
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo "|";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "      ";
        // line 24
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/normalize.css", 1 => 102), "method");
        // line 25
        echo "      ";
        // line 26
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/skeleton.css", 1 => 101), "method");
        // line 27
        echo "      ";
        // line 28
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 29
        echo "
      ";
        // line 30
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 35
        echo "
      ";
        // line 36
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 37
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 38
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 39
            echo "      ";
        }
        // line 40
        echo "
      ";
        // line 41
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 60,  179 => 51,  173 => 41,  170 => 40,  167 => 39,  164 => 38,  161 => 37,  159 => 36,  156 => 35,  153 => 34,  150 => 33,  144 => 30,  141 => 29,  138 => 28,  136 => 27,  133 => 26,  131 => 25,  128 => 24,  126 => 23,  123 => 22,  118 => 43,  116 => 33,  113 => 32,  111 => 22,  102 => 20,  96 => 17,  93 => 16,  87 => 14,  84 => 13,  78 => 11,  72 => 9,  70 => 8,  65 => 5,  62 => 4,  56 => 61,  54 => 60,  44 => 52,  42 => 51,  38 => 49,  35 => 48,  31 => 45,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     {% block head %}*/
/*     <meta charset="utf-8">*/
/*     <meta content="IE=edge" http-equiv="X-UA-Compatible">*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*     {% if header.description %}*/
/*     <meta content="{{ header.description }}" name="description">*/
/*     {% else %}*/
/*     <meta content="{{ site.description }}" name="description">*/
/*     {% endif %}*/
/*     {% if header.robots %}*/
/*     <meta content="{{ header.robots }}" name="robots">*/
/*     {% endif %}*/
/* */
/*     <link href="{{ theme_url }}/images/favicon.png" rel="icon" type="image/png">*/
/* */
/* */
/*     <title>{% if header.title %}{{ header.title }}|{% endif %}{{ site.title }}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# Skeleton normalize CSS #}*/
/*       {% do assets.add('theme://css/normalize.css',102) %}*/
/*       {# Skeleton core CSS #}*/
/*       {% do assets.add('theme://css/skeleton.css',101) %}*/
/*       {# Custom styles for this theme #}*/
/*       {% do assets.add('theme://css/custom.css',100) %}*/
/* */
/*       {{ assets.css() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*       {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}*/
/* */
/*       {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*         {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*         {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*       {% endif %}*/
/* */
/*       {{ assets.js() }}*/
/*     {% endblock %}*/
/* */
/*     {% endblock head %}*/
/*   </head>*/
/*   <body>*/
/*     {# include the header + navigation #}*/
/*     {% include 'partials/header.html.twig' %}*/
/* */
/*     <div class="container">*/
/*       {% block content %}{% endblock %}*/
/*     </div>*/
/* */
/*     <div class="footer">*/
/*       <div>*/
/*         <p>Skeleton Them for <a href="http://getgrav.org">Grav</a></p>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/*   {% block bottom %}{% endblock %}*/
/* <script src="http://localhost:35729/livereload.js"></script>*/
/* </html>*/
/* */
