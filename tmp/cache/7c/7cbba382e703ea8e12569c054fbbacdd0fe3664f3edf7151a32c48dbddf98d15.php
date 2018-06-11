<?php

/* admin/questions.twig */
class __TwigTemplate_79627a0838485ccfbf475425f456a36df4f08d95c642dd03e718090e46cc6d62 extends Twig_Template
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
        $this->loadTemplate("admin/header.twig", "admin/questions.twig", 1)->display($context);
        // line 2
        echo "
\t<article class=\"wrapper\">

\t\t";
        // line 5
        $this->loadTemplate("admin/sidebar.twig", "admin/questions.twig", 5)->display($context);
        // line 6
        echo "\t\t<section class=\"content\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"pull-left\">Управление вопросами</h4>
\t\t\t\t\t<form action=\"/admin/questions/";
        // line 10
        if (($context["page"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo "/";
        }
        echo "\" method=\"get\" class=\"form-inline pull-right\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"orderBy\">Сортировка по</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"orderBy\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t<option value=\"date\">Дате</option>
\t\t\t\t\t\t\t\t<optgroup label=\"Состоянию\">
\t\t\t\t\t\t\t\t\t<option ";
        // line 16
        echo (((($context["activeHasAnswer"] ?? null) == "1")) ? ("selected") : (""));
        echo " value=\"has_answer1\">С ответом</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 17
        echo (((($context["activeHasAnswer"] ?? null) == "0")) ? ("selected") : (""));
        echo " value=\"has_answer0\">Без ответа</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Статусу\">
\t\t\t\t\t\t\t\t\t<option ";
        // line 20
        echo (((($context["activeStatus"] ?? null) == "pending")) ? ("selected") : (""));
        echo " value=\"pending\">В ожидании</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 21
        echo (((($context["activeStatus"] ?? null) == "published")) ? ("selected") : (""));
        echo " value=\"published\">Опубликован</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 22
        echo (((($context["activeStatus"] ?? null) == "hidden")) ? ("selected") : (""));
        echo " value=\"hidden\">Скрыт</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Категории\">
\t\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t<option ";
            echo (((($context["activeCategory"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))) ? ("selected") : (""));
            echo " value=\"category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button name=\"order\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["order"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 41
            echo "\t\t\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t\t\t<h2 class=\"question-title\"><a href=\"/admin/questions/question/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "title", array()), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "user_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "date", array()), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "category_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"/admin/questions/question/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "/\" class=\"btn btn-primary btn-xs manage\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Управлять</a>
\t\t\t\t\t\t\t<form method=\"post\"><button type=\"submit\" class=\"btn btn-danger btn-xs remove\" name=\"remove\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button></form>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tСтатус: 
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t";
            // line 60
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "status", array()) == "pending")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\tВ ожидании
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 62
$context["question"], "status", array()) == "published")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\tОпубликован
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\tСкрыт
\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"label label-info\">
\t\t\t\t\t\t\t\t\t";
            // line 69
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "has_answer", array())) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\tС ответом
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\tБез ответа
\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t";
        // line 83
        $this->loadTemplate("admin/paginate.twig", "admin/questions.twig", 83)->display($context);
        // line 84
        echo "
\t\t</section>

\t</article>

";
        // line 89
        $this->loadTemplate("admin/footer.twig", "admin/questions.twig", 89)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/questions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 89,  199 => 84,  197 => 83,  191 => 79,  181 => 74,  177 => 72,  173 => 70,  171 => 69,  167 => 67,  163 => 65,  159 => 63,  157 => 62,  154 => 61,  152 => 60,  145 => 56,  141 => 55,  137 => 54,  131 => 51,  125 => 48,  120 => 46,  111 => 42,  108 => 41,  104 => 40,  93 => 32,  87 => 28,  74 => 26,  70 => 25,  64 => 22,  60 => 21,  56 => 20,  50 => 17,  46 => 16,  34 => 10,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"admin/header.twig\" %}

\t<article class=\"wrapper\">

\t\t{% include \"admin/sidebar.twig\" %}
\t\t<section class=\"content\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"pull-left\">Управление вопросами</h4>
\t\t\t\t\t<form action=\"/admin/questions/{% if page %}{{page}}/{% endif %}\" method=\"get\" class=\"form-inline pull-right\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"orderBy\">Сортировка по</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"orderBy\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t<option value=\"date\">Дате</option>
\t\t\t\t\t\t\t\t<optgroup label=\"Состоянию\">
\t\t\t\t\t\t\t\t\t<option {{activeHasAnswer == '1' ? 'selected' : ''}} value=\"has_answer1\">С ответом</option>
\t\t\t\t\t\t\t\t\t<option {{activeHasAnswer == '0' ? 'selected' : ''}} value=\"has_answer0\">Без ответа</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Статусу\">
\t\t\t\t\t\t\t\t\t<option {{activeStatus == 'pending' ? 'selected' : ''}} value=\"pending\">В ожидании</option>
\t\t\t\t\t\t\t\t\t<option {{activeStatus == 'published' ? 'selected' : ''}} value=\"published\">Опубликован</option>
\t\t\t\t\t\t\t\t\t<option {{activeStatus == 'hidden' ? 'selected' : ''}} value=\"hidden\">Скрыт</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Категории\">
\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t<option {{activeCategory == category.id ? 'selected' : ''}} value=\"category-{{category.id}}\">{{category.name}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button name=\"order\" value=\"{{order}}\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for question in questions %}
\t\t\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t\t\t<h2 class=\"question-title\"><a href=\"/admin/questions/question/{{question.id}}/\">{{question.title}}</a></h2>
\t\t\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t\t\t<i>
\t\t\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.user_name}}</span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.date}}</span>

\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.category_name}}</span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>{{question.content}}</p>
\t\t\t\t\t\t\t<a href=\"/admin/questions/question/{{question.id}}/\" class=\"btn btn-primary btn-xs manage\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Управлять</a>
\t\t\t\t\t\t\t<form method=\"post\"><button type=\"submit\" class=\"btn btn-danger btn-xs remove\" name=\"remove\" value=\"{{question.id}}\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button></form>
\t\t\t\t\t\t\t<p>
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
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t{% include \"admin/paginate.twig\" %}

\t\t</section>

\t</article>

{% include \"admin/footer.twig\" %}", "admin/questions.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\questions.twig");
    }
}
