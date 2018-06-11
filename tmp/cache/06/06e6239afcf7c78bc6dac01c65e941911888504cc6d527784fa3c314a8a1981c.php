<?php

/* admin/question.twig */
class __TwigTemplate_26d25469db6ecbf61c2cf5b5cef3e45b5a8b31ba226b9015e0b2b7d622a352ef extends Twig_Template
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
        $this->loadTemplate("admin/header.twig", "admin/question.twig", 1)->display($context);
        // line 2
        echo "
\t<article class=\"wrapper\">

\t\t";
        // line 5
        $this->loadTemplate("admin/sidebar.twig", "admin/question.twig", 5)->display($context);
        // line 6
        echo "
\t\t<section class=\"content\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"/admin/questions/\">Управление вопросами</a></li>
\t\t\t\t<li class=\"active\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "title", array()), "html", null, true);
        echo "</li>
\t\t\t</ol>
\t\t\t<h4 class=\"pull-left\">Вопрос</h4>
\t\t\t<form method=\"post\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" name=\"save\" value=\"\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Сохранить</button>
\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Заголовок</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "title", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Вопрос</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"question-content\" id=\"field-question\" rows=\"7\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "content", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<span class=\"pull-left\">Ответ</span>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove-save\" class=\"btn btn-xs btn-warning pull-right\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить ответ</button>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"answer-content\" id=\"field-answer\" rows=\"7\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["answer"] ?? null), "content", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Категория</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"category\">
\t\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t<option ";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "category_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Статус</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option ";
        // line 59
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "status", array()) == "pending")) ? ("selected") : (""));
        echo " value=\"pending\">В ожидании</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 60
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "status", array()) == "published")) ? ("selected") : (""));
        echo " value=\"published\">Опубликован</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 61
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "status", array()) == "hidden")) ? ("selected") : (""));
        echo " value=\"hidden\">Скрыт</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Имя</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "user_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Email</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["question"] ?? null), "user_email", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t
\t\t</section>

\t</article>

";
        // line 85
        $this->loadTemplate("admin/footer.twig", "admin/question.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 85,  138 => 74,  129 => 68,  119 => 61,  115 => 60,  111 => 59,  102 => 52,  89 => 50,  85 => 49,  73 => 40,  60 => 30,  51 => 24,  34 => 10,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"admin/header.twig\" %}

\t<article class=\"wrapper\">

\t\t{% include \"admin/sidebar.twig\" %}

\t\t<section class=\"content\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"/admin/questions/\">Управление вопросами</a></li>
\t\t\t\t<li class=\"active\">{{question.title}}</li>
\t\t\t</ol>
\t\t\t<h4 class=\"pull-left\">Вопрос</h4>
\t\t\t<form method=\"post\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" name=\"save\" value=\"\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Сохранить</button>
\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Заголовок</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{question.title}}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Вопрос</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"question-content\" id=\"field-question\" rows=\"7\">{{question.content}}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<span class=\"pull-left\">Ответ</span>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove-save\" class=\"btn btn-xs btn-warning pull-right\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить ответ</button>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"answer-content\" id=\"field-answer\" rows=\"7\">{{answer.content}}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Категория</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"category\">
\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t<option {{question.category_id == category.id ? 'selected'}} value=\"{{category.id}}\">{{category.name}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Статус</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option {{question.status == 'pending' ? 'selected'}} value=\"pending\">В ожидании</option>
\t\t\t\t\t\t\t\t\t<option {{question.status == 'published' ? 'selected'}} value=\"published\">Опубликован</option>
\t\t\t\t\t\t\t\t\t<option {{question.status == 'hidden' ? 'selected'}} value=\"hidden\">Скрыт</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Имя</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{question.user_name}}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">Email</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" value=\"{{question.user_email}}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t
\t\t</section>

\t</article>

{% include \"admin/footer.twig\" %}", "admin/question.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\question.twig");
    }
}
