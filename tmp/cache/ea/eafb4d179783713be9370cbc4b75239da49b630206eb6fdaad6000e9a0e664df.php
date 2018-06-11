<?php

/* admin/users.twig */
class __TwigTemplate_f2bf459f0bdb6d65a375980d92f2d629cee41bfd1b8453d41d77590fec6d0898 extends Twig_Template
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
        $this->loadTemplate("admin/header.twig", "admin/users.twig", 1)->display($context);
        // line 2
        echo "
\t<article class=\"wrapper\">

\t\t";
        // line 5
        $this->loadTemplate("admin/sidebar.twig", "admin/users.twig", 5)->display($context);
        // line 6
        echo "
\t\t<section class=\"content\">
\t\t<h4>Управление администраторами</h4>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span>Добавить нового</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Имя\" name=\"name\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"email\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Пароль\" name=\"password\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "\t\t\t\t\t<form method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Имя</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\" name=\"name\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Email</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "\" name=\"email\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Пароль</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "password", array()), "html", null, true);
            echo "\" name=\"password\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"save\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Сохранить</button>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</article>

";
        // line 74
        $this->loadTemplate("admin/footer.twig", "admin/users.twig", 74)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 74,  115 => 68,  103 => 62,  99 => 61,  91 => 56,  84 => 52,  77 => 48,  69 => 42,  65 => 41,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"admin/header.twig\" %}

\t<article class=\"wrapper\">

\t\t{% include \"admin/sidebar.twig\" %}

\t\t<section class=\"content\">
\t\t<h4>Управление администраторами</h4>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span>Добавить нового</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Имя\" name=\"name\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"email\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" class=\"form-control\" placeholder=\"Пароль\" name=\"password\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t{%for user in users%}
\t\t\t\t\t<form method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Имя</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"{{user.name}}\" name=\"name\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Email</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"{{user.email}}\" name=\"email\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4 col-lg-1\">Пароль</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"text\" value=\"{{user.password}}\" name=\"password\" class=\"form-control\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"save\" value=\"{{user.id}}\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Сохранить</button>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove\" value=\"{{user.id}}\" class=\"btn btn-xs btn-danger\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Удалить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</form>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</article>

{% include \"admin/footer.twig\" %}", "admin/users.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\users.twig");
    }
}
