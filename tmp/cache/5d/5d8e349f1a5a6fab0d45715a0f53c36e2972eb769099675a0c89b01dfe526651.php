<?php

/* admin/header.twig */
class __TwigTemplate_a9fbdbf4a3304a5868791ead2091ee4355d014ac730b09e0f30ac3e77a8a860c extends Twig_Template
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

\t\t<title>AdminPanel</title>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"//bootswatch.com/lumen/bootstrap.min.css\">

\t\t<!-- Optional theme -->
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
\t<nav class=\"navbar navbar-default navbar-fixed-top topbar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"navbar-brand\">
\t\t\t\t\t<img class=\"logo\" src=\"/img/1490082019_faq.png\" alt=\"\">
\t\t\t\t</span>
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"sr-only\">Навигация</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\"  id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<p class=\"navbar-text text-right\">
\t\t\t\t\t<a href=\"/\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Перейти на сайт</a>
\t\t\t\t</p>
\t\t\t\t<p class=\"navbar-text navbar-right text-right\">
\t\t\t\t\t<span class=\"hello-text\">Привет, ";
        // line 43
        echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span> <a href=\"/admin/?action=logout\">Выйти <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span></a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</nav>
";
    }

    public function getTemplateName()
    {
        return "admin/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 43,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>AdminPanel</title>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"//bootswatch.com/lumen/bootstrap.min.css\">

\t\t<!-- Optional theme -->
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
\t<nav class=\"navbar navbar-default navbar-fixed-top topbar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"navbar-brand\">
\t\t\t\t\t<img class=\"logo\" src=\"/img/1490082019_faq.png\" alt=\"\">
\t\t\t\t</span>
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"sr-only\">Навигация</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\"  id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<p class=\"navbar-text text-right\">
\t\t\t\t\t<a href=\"/\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Перейти на сайт</a>
\t\t\t\t</p>
\t\t\t\t<p class=\"navbar-text navbar-right text-right\">
\t\t\t\t\t<span class=\"hello-text\">Привет, {{userName}} <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span> <a href=\"/admin/?action=logout\">Выйти <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span></a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</nav>
", "admin/header.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\header.twig");
    }
}
