<?php

/* user/faqForm.twig */
class __TwigTemplate_78d5065fe62a776f44b0616a96609b1770513ece170638e9cf379bbe8df9f87d extends Twig_Template
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
        $this->loadTemplate("user/header.twig", "user/faqForm.twig", 1)->display($context);
        // line 2
        echo "\t<div class=\"container\">
\t\t";
        // line 3
        $this->loadTemplate("user/subheader.twig", "user/faqForm.twig", 3)->display($context);
        // line 4
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t
\t\t\t\t";
        // line 7
        if (((($context["errorFields"] ?? null) || ($context["errorEmail"] ?? null)) || ($context["errorCategory"] ?? null))) {
            // line 8
            echo "\t\t\t\t<div class=\"alert alert-dismissible alert-warning\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t<h4><span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span> Ошибка!</h4>
\t\t\t\t\t\t<p>";
            // line 11
            echo ((($context["errorCategory"] ?? null)) ? ("<strong>Категория</strong> должна быть выбрана") : (""));
            echo "</p>
\t\t\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorFields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 13
                echo "\t\t\t\t\t\t\t<p>Поле <strong>";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "</strong> должно быть заполнено</p>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t\t\t<p>";
            echo ((($context["errorEmail"] ?? null)) ? ("<strong>Email</strong> должен быть введен корректно") : (""));
            echo "</p>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 18
        echo "
\t\t\t\t";
        // line 19
        if (($context["succes"] ?? null)) {
            // line 20
            echo "\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span> Вопрос успешно отправлен.
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t<h2 class=\"question-title\">Задать вопрос</h2>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"category\">
\t\t\t\t\t\t\t\t\t<option value=\"default\">Выбрать категорию</option>
\t\t\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t<option ";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fieldData"] ?? null), "category", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))) ? ("selected") : (""));
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
            // line 34
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p><input placeholder=\"Имя\" class=\"form-control\" type=\"text\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["fieldData"] ?? null), "name", array()), "html", null, true);
            echo "\" name=\"name\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p><input placeholder=\"Email\" class=\"form-control\" type=\"text\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["fieldData"] ?? null), "email", array()), "html", null, true);
            echo "\" name=\"email\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p><input placeholder=\"Заголовок\" class=\"form-control\" type=\"text\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["fieldData"] ?? null), "title", array()), "html", null, true);
            echo "\" name=\"title\"></p>
\t\t\t\t\t<p><textarea placeholder=\"Текст вопроса\" class=\"form-control\" rows=\"7\" name=\"text\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["fieldData"] ?? null), "text", array()), "html", null, true);
            echo "</textarea></p>
\t\t\t\t\t<p class=\"text-right\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Отправить\">
\t\t\t\t\t</p>
\t\t\t\t</form>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</div>
\t\t\t";
        // line 52
        $this->loadTemplate("user/sidebar.twig", "user/faqForm.twig", 52)->display($context);
        // line 53
        echo "\t\t</div>
\t</div>
";
        // line 55
        $this->loadTemplate("user/footer.twig", "user/faqForm.twig", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "user/faqForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  135 => 53,  133 => 52,  130 => 51,  121 => 45,  117 => 44,  111 => 41,  105 => 38,  99 => 34,  86 => 32,  82 => 31,  73 => 24,  67 => 20,  65 => 19,  62 => 18,  55 => 15,  46 => 13,  42 => 12,  38 => 11,  33 => 8,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"user/header.twig\" %}
\t<div class=\"container\">
\t\t{% include \"user/subheader.twig\" %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t
\t\t\t\t{% if errorFields or errorEmail or errorCategory %}
\t\t\t\t<div class=\"alert alert-dismissible alert-warning\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t<h4><span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span> Ошибка!</h4>
\t\t\t\t\t\t<p>{{errorCategory ? '<strong>Категория</strong> должна быть выбрана'}}</p>
\t\t\t\t\t\t{% for field in errorFields %}
\t\t\t\t\t\t\t<p>Поле <strong>{{field}}</strong> должно быть заполнено</p>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<p>{{errorEmail ? '<strong>Email</strong> должен быть введен корректно'}}</p>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if succes %}
\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span> Вопрос успешно отправлен.
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t<h2 class=\"question-title\">Задать вопрос</h2>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"category\">
\t\t\t\t\t\t\t\t\t<option value=\"default\">Выбрать категорию</option>
\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t<option {{fieldData.category == category.id ? 'selected'}} value=\"{{category.id}}\">{{category.name}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p><input placeholder=\"Имя\" class=\"form-control\" type=\"text\" value=\"{{fieldData.name}}\" name=\"name\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p><input placeholder=\"Email\" class=\"form-control\" type=\"text\" value=\"{{fieldData.email}}\" name=\"email\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p><input placeholder=\"Заголовок\" class=\"form-control\" type=\"text\" value=\"{{fieldData.title}}\" name=\"title\"></p>
\t\t\t\t\t<p><textarea placeholder=\"Текст вопроса\" class=\"form-control\" rows=\"7\" name=\"text\">{{fieldData.text}}</textarea></p>
\t\t\t\t\t<p class=\"text-right\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Отправить\">
\t\t\t\t\t</p>
\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t{% include \"user/sidebar.twig\" %}
\t\t</div>
\t</div>
{% include \"user/footer.twig\" %}", "user/faqForm.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\faqForm.twig");
    }
}
