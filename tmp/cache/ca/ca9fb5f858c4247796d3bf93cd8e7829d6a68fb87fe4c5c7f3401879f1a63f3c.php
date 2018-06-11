<?php

/* admin/categories.twig */
class __TwigTemplate_b3f8d0f130bfcc34517e3a6cb1ae6e213f1c96438d537637fa454d00e476dfc2 extends Twig_Template
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
        $this->loadTemplate("admin/header.twig", "admin/categories.twig", 1)->display($context);
        // line 2
        echo "
\t<article class=\"wrapper\">

\t\t";
        // line 5
        $this->loadTemplate("admin/sidebar.twig", "admin/categories.twig", 5)->display($context);
        // line 6
        echo "
\t\t<section class=\"content\">
\t\t<h4>Управление категориями</h4>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">Добавить новую</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Заголовок\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"add\" class=\"btn btn-primary btn-xs pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Добавить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tРедактировать
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "\t\t\t\t\t<form method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-2\">Заголовок</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "\" name=\"name\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 questions-count\">
\t\t\t\t\t\t\t\t\t\tВопросов в категории <span class=\"badge\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "qFull", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"save\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span> Сохранить</button>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Удалить</button> <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Удаление категории также удалит все привязанные к ней вопросы, ответы и данные гостей\" class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</article>

";
        // line 57
        $this->loadTemplate("admin/footer.twig", "admin/categories.twig", 57)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  95 => 51,  83 => 45,  79 => 44,  71 => 39,  65 => 36,  57 => 30,  53 => 29,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"admin/header.twig\" %}

\t<article class=\"wrapper\">

\t\t{% include \"admin/sidebar.twig\" %}

\t\t<section class=\"content\">
\t\t<h4>Управление категориями</h4>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">Добавить новую</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Заголовок\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"add\" class=\"btn btn-primary btn-xs pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Добавить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tРедактировать
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t<form method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-2\">Заголовок</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{category.name}}\" name=\"name\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 questions-count\">
\t\t\t\t\t\t\t\t\t\tВопросов в категории <span class=\"badge\">{{category.qFull}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"save\" value=\"{{category.id}}\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span> Сохранить</button>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"{{category.id}}\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Удалить</button> <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Удаление категории также удалит все привязанные к ней вопросы, ответы и данные гостей\" class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</form>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</article>

{% include \"admin/footer.twig\" %}", "admin/categories.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\categories.twig");
    }
}
