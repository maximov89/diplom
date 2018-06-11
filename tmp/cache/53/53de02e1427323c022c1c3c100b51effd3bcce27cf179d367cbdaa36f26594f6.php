<?php

/* admin/sidebar.twig */
class __TwigTemplate_757ca94756371eb51730c6ad39d84a7184b215aa7278d4fdcaa1fa76f9f94427 extends Twig_Template
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
        echo "<aside class=\"sidebar\">
\t<ul class=\"sidebar-nav\">
\t\t<li class=\"";
        // line 3
        echo (((($context["nav"] ?? null) == "")) ? ("active") : (""));
        echo "\">
\t\t\t<a href=\"/admin/\">
\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\" aria-hidden=\"true\"></span> Консоль
\t\t\t</a>
\t\t</li>
\t\t<li class=\"";
        // line 8
        echo (((($context["nav"] ?? null) == "questions")) ? ("active") : (""));
        echo "\">
\t\t\t<a href=\"/admin/questions/\">
\t\t\t\t<span class=\"glyphicon glyphicon-question-sign\" aria-hidden=\"true\"></span> Вопросы
\t\t\t</a>
\t\t</li>
\t\t<li class=\"";
        // line 13
        echo (((($context["nav"] ?? null) == "categories")) ? ("active") : (""));
        echo "\">
\t\t\t<a href=\"/admin/categories/\">
\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span> Категории
\t\t\t</a>
\t\t</li>
\t\t<li class=\"";
        // line 18
        echo (((($context["nav"] ?? null) == "users")) ? ("active") : (""));
        echo "\">
\t\t\t<a href=\"/admin/users/\">
\t\t\t\t<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Пользователи
\t\t\t</a>
\t\t</li>
\t</ul>
</aside>";
    }

    public function getTemplateName()
    {
        return "admin/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  39 => 13,  31 => 8,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"sidebar\">
\t<ul class=\"sidebar-nav\">
\t\t<li class=\"{{nav == '' ? 'active'}}\">
\t\t\t<a href=\"/admin/\">
\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\" aria-hidden=\"true\"></span> Консоль
\t\t\t</a>
\t\t</li>
\t\t<li class=\"{{nav == 'questions' ? 'active'}}\">
\t\t\t<a href=\"/admin/questions/\">
\t\t\t\t<span class=\"glyphicon glyphicon-question-sign\" aria-hidden=\"true\"></span> Вопросы
\t\t\t</a>
\t\t</li>
\t\t<li class=\"{{nav == 'categories' ? 'active'}}\">
\t\t\t<a href=\"/admin/categories/\">
\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span> Категории
\t\t\t</a>
\t\t</li>
\t\t<li class=\"{{nav == 'users' ? 'active'}}\">
\t\t\t<a href=\"/admin/users/\">
\t\t\t\t<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Пользователи
\t\t\t</a>
\t\t</li>
\t</ul>
</aside>", "admin/sidebar.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\sidebar.twig");
    }
}
