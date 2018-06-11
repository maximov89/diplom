<?php

/* user/header.twig */
class __TwigTemplate_87cf5655d30576ffa0ad4b51ea84dfbd16e124413573dad6776839fa6dd53568 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>FAQ</title>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"//bootswatch.com/lumen/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t<!-- endbuild -->

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>
\t<body>
\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<a href=\"/\" >
\t\t\t\t\t<img class=\"img-rounded logo-home\" src=\"/img/1490082019_faq.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"pull-right state\">
\t\t\t\t<span class=\"state-item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Задано вопросов\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-fire text-danger\" aria-hidden=\"true\"></span> <span class=\"label label-primary\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qFull", array()), "html", null, true);
        echo "</span>
\t\t\t\t</span>
\t\t\t\t<span class=\"state-item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Опубликовано ответов\" aria-hidden=\"true\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-check text-success\"></span> <span class=\"label label-primary\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qPublic", array()), "html", null, true);
        echo "</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</header>";
    }

    public function getTemplateName()
    {
        return "user/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 38,  55 => 35,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>FAQ</title>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"//bootswatch.com/lumen/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t<!-- endbuild -->

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>
\t<body>
\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<a href=\"/\" >
\t\t\t\t\t<img class=\"img-rounded logo-home\" src=\"/img/1490082019_faq.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"pull-right state\">
\t\t\t\t<span class=\"state-item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Задано вопросов\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-fire text-danger\" aria-hidden=\"true\"></span> <span class=\"label label-primary\">{{stats.qFull}}</span>
\t\t\t\t</span>
\t\t\t\t<span class=\"state-item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Опубликовано ответов\" aria-hidden=\"true\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-check text-success\"></span> <span class=\"label label-primary\">{{stats.qPublic}}</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</header>", "user/header.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\header.twig");
    }
}
