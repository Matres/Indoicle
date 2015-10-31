<?php

/* partials/base.html.twig */
class __TwigTemplate_949d602bc6a05ca96ec36771c4d489634c94bbb96d8e9745565e436534bc693f extends Twig_Template
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
        // line 57
        echo "  </head>
  <body>
    ";
        // line 60
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "
    <div class=\"container\">
      ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "    </div>

    <div class=\"container footer\">
      <div class=\"row\">
        <div class=\"twelve columns\">
          <p>Skeleton Them for <a href=\"http://getgrav.org\">Grav</a></p>
        </div>
      </div>
    </div>
  </body>
  ";
        // line 74
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
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
    <link href=\"//fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">

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
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
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
        // line 31
        echo "      <!--[if (gt IE 8) | (IEMobile)]><!-->
      ";
        // line 32
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/step1.css", 1 => 99), "method");
        // line 33
        echo "      <!--<![endif]-->
      <!--[if (lt IE 9) & (!IEMobile)]>
      ";
        // line 35
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/ie.css", 1 => 98), "method");
        // line 36
        echo "      <![endif]-->

      ";
        // line 39
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 97), "method");
        // line 40
        echo "
      ";
        // line 41
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 46
        echo "
      ";
        // line 48
        echo "      ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 49
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 50
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 51
            echo "      ";
        }
        // line 52
        echo "
      ";
        // line 53
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
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
        return array (  208 => 74,  203 => 63,  197 => 53,  194 => 52,  191 => 51,  188 => 50,  185 => 49,  182 => 48,  179 => 46,  176 => 45,  173 => 44,  167 => 41,  164 => 40,  161 => 39,  157 => 36,  155 => 35,  151 => 33,  149 => 32,  146 => 31,  143 => 29,  140 => 28,  138 => 27,  135 => 26,  133 => 25,  130 => 24,  128 => 23,  125 => 22,  120 => 55,  118 => 44,  115 => 43,  113 => 22,  104 => 20,  98 => 17,  95 => 16,  89 => 14,  86 => 13,  80 => 11,  74 => 9,  72 => 8,  67 => 5,  64 => 4,  58 => 75,  56 => 74,  44 => 64,  42 => 63,  38 => 61,  35 => 60,  31 => 57,  29 => 4,  24 => 1,);
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
/*     <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">*/
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
/*       {# Nav CSS by David Bushell #}*/
/*       <!--[if (gt IE 8) | (IEMobile)]><!-->*/
/*       {% do assets.add('theme://css/step1.css',99) %}*/
/*       <!--<![endif]-->*/
/*       <!--[if (lt IE 9) & (!IEMobile)]>*/
/*       {% do assets.add('theme://css/ie.css',98) %}*/
/*       <![endif]-->*/
/* */
/*       {# If awesome icons are necessary #}*/
/*       {% do assets.addCss('theme://css/font-awesome.min.css',97) %}*/
/* */
/*       {{ assets.css() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*       {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}*/
/* */
/*       {# Add browser support. May use Modernizr.com #}*/
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
/*     <div class="container footer">*/
/*       <div class="row">*/
/*         <div class="twelve columns">*/
/*           <p>Skeleton Them for <a href="http://getgrav.org">Grav</a></p>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/*   {% block bottom %}{% endblock %}*/
/* <script src="http://localhost:35729/livereload.js"></script>*/
/* </html>*/
/* */
