<?php

/* admin/dashboard.twig */
class __TwigTemplate_167aa88bfafb875a350e0cbb193f5e045fd9e3c40a7532da31a032c28305bed1 extends Twig_Template
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
        $this->loadTemplate("admin/header.twig", "admin/dashboard.twig", 1)->display($context);
        // line 2
        echo "
\t<article class=\"wrapper\">

\t\t";
        // line 5
        $this->loadTemplate("admin/sidebar.twig", "admin/dashboard.twig", 5)->display($context);
        // line 6
        echo "
\t\t<section class=\"content\">
\t\t\t<div class=\"row statistics\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Задано вопросов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-fire text-danger\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qFull", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Получено ответов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-sign text-success\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qHasAnswer", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Без ответа</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus-sign text-info\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qNoAnswer", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Опубликовано ответов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-check text-success\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qPublic", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>В ожидании</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-info\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qPending", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Скрыто</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ban-circle text-muted\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["stats"] ?? null), "qHidden", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Новые вопросы</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 82
            echo "\t\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t\t<h2 class=\"question-title\"><a href=\"/admin/questions/question/";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "title", array()), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "user_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "date", array()), "html", null, true);
            echo "</span>
\t\t
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "category_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a href=\"/admin/questions/question/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "/\" class=\"btn btn-primary btn-xs manage\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Управлять</a>
\t\t\t\t\t\t<form method=\"post\"><button type=\"submit\" class=\"btn btn-danger btn-xs remove\" name=\"remove\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button></form>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tСтатус: 
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t";
            // line 101
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "status", array()) == "pending")) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\tВ ожидании
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 103
$context["question"], "status", array()) == "published")) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\tОпубликован
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\tСкрыт
\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t";
            // line 110
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "has_answer", array())) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\tС ответом
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\tБез ответа
\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</section>

\t</article>

";
        // line 127
        $this->loadTemplate("admin/footer.twig", "admin/dashboard.twig", 127)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 127,  210 => 120,  200 => 115,  196 => 113,  192 => 111,  190 => 110,  186 => 108,  182 => 106,  178 => 104,  176 => 103,  173 => 102,  171 => 101,  164 => 97,  160 => 96,  156 => 95,  150 => 92,  144 => 89,  139 => 87,  130 => 83,  127 => 82,  123 => 81,  110 => 71,  96 => 60,  82 => 49,  68 => 38,  54 => 27,  40 => 16,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"admin/header.twig\" %}

\t<article class=\"wrapper\">

\t\t{% include \"admin/sidebar.twig\" %}

\t\t<section class=\"content\">
\t\t\t<div class=\"row statistics\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Задано вопросов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-fire text-danger\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qFull}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Получено ответов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-sign text-success\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qHasAnswer}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Без ответа</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus-sign text-info\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qNoAnswer}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Опубликовано ответов</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-check text-success\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qPublic}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>В ожидании</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-info\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qPending}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Скрыто</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ban-circle text-muted\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"stat-text\">{{stats.qHidden}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Новые вопросы</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for question in questions %}
\t\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t\t<h2 class=\"question-title\"><a href=\"/admin/questions/question/{{question.id}}/\">{{question.title}}</a></h2>
\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.user_name}}</span>
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.date}}</span>
\t\t
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.category_name}}</span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>{{question.content}}</p>
\t\t\t\t\t\t<a href=\"/admin/questions/question/{{question.id}}/\" class=\"btn btn-primary btn-xs manage\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Управлять</a>
\t\t\t\t\t\t<form method=\"post\"><button type=\"submit\" class=\"btn btn-danger btn-xs remove\" name=\"remove\" value=\"{{question.id}}\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button></form>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tСтатус: 
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t{% if question.status == 'pending' %}
\t\t\t\t\t\t\t\t\t\tВ ожидании
\t\t\t\t\t\t\t\t\t{% elseif question.status == 'published' %}
\t\t\t\t\t\t\t\t\t\tОпубликован
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tСкрыт
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t{% if question.has_answer %}
\t\t\t\t\t\t\t\t\t\tС ответом
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tБез ответа
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</section>

\t</article>

{% include \"admin/footer.twig\" %}", "admin/dashboard.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\dashboard.twig");
    }
}
