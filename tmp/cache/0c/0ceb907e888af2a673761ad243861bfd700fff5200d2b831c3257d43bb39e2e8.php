<?php

/* user/single.twig */
class __TwigTemplate_6935d44a4ec8f71377478fbed18b237322c1dd99aa2cc19af68a21061097949e extends Twig_Template
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
        $this->loadTemplate("user/header.twig", "user/single.twig", 1)->display($context);
        // line 2
        echo "\t<div class=\"container\">
\t\t";
        // line 3
        $this->loadTemplate("user/subheader.twig", "user/single.twig", 3)->display($context);
        // line 4
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t<i>
\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t<span class=\"meta-data\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "user_name", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"meta-data\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "date", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"meta-data\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "category_name", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t</i>
\t\t\t\t</p>
\t\t\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "content", array()), "html", null, true);
        echo "</p>
\t\t\t\t<hr>
\t\t\t\t";
        // line 20
        if (($context["answer"] ?? null)) {
            // line 21
            echo "\t\t\t\t<div class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h4 class=\"media-heading\">Ответ</h4>
\t\t\t\t\t\t<p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["answer"] ?? null), "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\tОтветил:
\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["answer"] ?? null), "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["answer"] ?? null), "date", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>
\t\t\t";
        // line 37
        $this->loadTemplate("user/sidebar.twig", "user/single.twig", 37)->display($context);
        // line 38
        echo "\t\t</div>
\t</div>
";
        // line 40
        $this->loadTemplate("user/footer.twig", "user/single.twig", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "user/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  92 => 38,  90 => 37,  87 => 36,  78 => 30,  73 => 28,  66 => 24,  61 => 21,  59 => 20,  54 => 18,  48 => 15,  42 => 12,  37 => 10,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"user/header.twig\" %}
\t<div class=\"container\">
\t\t{% include \"user/subheader.twig\" %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<h1>{{question.title}}</h1>
\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t<i>
\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t<span class=\"meta-data\">{{question.user_name}}</span>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"meta-data\">{{question.date}}</span>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"meta-data\">{{question.category_name}}</span>
\t\t\t\t\t</i>
\t\t\t\t</p>
\t\t\t\t<p>{{question.content}}</p>
\t\t\t\t<hr>
\t\t\t\t{% if answer %}
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h4 class=\"media-heading\">Ответ</h4>
\t\t\t\t\t\t<p>{{answer.content}}</p>
\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\tОтветил:
\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{answer.name}}</span>
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{answer.date}}</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t{% include \"user/sidebar.twig\" %}
\t\t</div>
\t</div>
{% include \"user/footer.twig\" %}", "user/single.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\single.twig");
    }
}
