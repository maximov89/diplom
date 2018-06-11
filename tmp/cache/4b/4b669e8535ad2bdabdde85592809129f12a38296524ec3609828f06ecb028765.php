<?php

/* admin/authForm.twig */
class __TwigTemplate_afce2cc2311a2f285c3e523a09984c2d8c8bad1930dbd64244d570177cb8c71e extends Twig_Template
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

\t\t<title>Авторизация</title>

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

\t<div class=\"container\">
\t\t<form class=\"form-signin\" method=\"post\">
\t\t\t";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 31
        echo "\t\t\t<h4 class=\"form-signin-heading text-center\">Авторизация</h4>
\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Имя пользователя:</label>
\t\t\t<input type=\"text\" id=\"userUsername\" class=\"form-control\" placeholder=\"Имя пользователя\" ";
        // line 33
        echo ((($context["name"] ?? null)) ? ("") : ("autofocus"));
        echo "  name=\"name\" value=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Пароль</label>
\t\t\t<input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Пароль\" name=\"password\">
\t\t\t<button name=\"auth\" class=\"btn btn-md btn-primary btn-block\" type=\"submit\">Войти</button>
\t\t</form>
\t</div>

\t<!-- Latest compiled and minified JavaScript -->
\t<script
  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/authForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 33,  56 => 31,  50 => 29,  48 => 28,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>Авторизация</title>

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

\t<div class=\"container\">
\t\t<form class=\"form-signin\" method=\"post\">
\t\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{error}}</div>
\t\t\t{% endif %}
\t\t\t<h4 class=\"form-signin-heading text-center\">Авторизация</h4>
\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Имя пользователя:</label>
\t\t\t<input type=\"text\" id=\"userUsername\" class=\"form-control\" placeholder=\"Имя пользователя\" {{name ? '' : 'autofocus'}}  name=\"name\" value=\"{{name}}\">
\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Пароль</label>
\t\t\t<input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Пароль\" name=\"password\">
\t\t\t<button name=\"auth\" class=\"btn btn-md btn-primary btn-block\" type=\"submit\">Войти</button>
\t\t</form>
\t</div>

\t<!-- Latest compiled and minified JavaScript -->
\t<script
  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t</body>
</html>", "admin/authForm.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\authForm.twig");
    }
}
