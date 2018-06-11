<?php

/* user/subheader.twig */
class __TwigTemplate_44b1f182f52f3c40738a50101c337fa8e69c37667fd194aa471eea370bba435a extends Twig_Template
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
        echo "<h1 class=\"main-title pull-left\">Сервис вопросов и ответов</h1>
<div class=\"pull-right\"><a href=\"/ask/\" class=\"btn btn-primary\">Задать вопрос</a></div>
<div class=\"clearfix\"></div>
<hr>
<ol class=\"breadcrumb\">
\t<li><a href=\"/\">Главная</a></li>
";
        // line 7
        if (($context["categoryMain"] ?? null)) {
            // line 8
            echo "\t<li class=\"active\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["categoryMain"] ?? null), "name", array()), "html", null, true);
            echo "</li>
";
        } elseif (        // line 9
($context["question"] ?? null)) {
            // line 10
            echo "\t<li><a href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "category_id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "category_name", array()), "html", null, true);
            echo "</a></li>
\t<li class=\"active\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "title", array()), "html", null, true);
            echo "</li>
";
        } elseif (        // line 12
($context["questions"] ?? null)) {
        } else {
            // line 14
            echo "\t<li class=\"active\">Задать вопрос</li>
";
        }
        // line 16
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "user/subheader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 14,  47 => 12,  43 => 11,  36 => 10,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"main-title pull-left\">Сервис вопросов и ответов</h1>
<div class=\"pull-right\"><a href=\"/ask/\" class=\"btn btn-primary\">Задать вопрос</a></div>
<div class=\"clearfix\"></div>
<hr>
<ol class=\"breadcrumb\">
\t<li><a href=\"/\">Главная</a></li>
{% if categoryMain %}
\t<li class=\"active\">{{categoryMain.name}}</li>
{% elseif question %}
\t<li><a href=\"/category/{{question.category_id}}/\">{{question.category_name}}</a></li>
\t<li class=\"active\">{{question.title}}</li>
{% elseif questions %}
{% else %}
\t<li class=\"active\">Задать вопрос</li>
{% endif %}
</ol>", "user/subheader.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\subheader.twig");
    }
}
