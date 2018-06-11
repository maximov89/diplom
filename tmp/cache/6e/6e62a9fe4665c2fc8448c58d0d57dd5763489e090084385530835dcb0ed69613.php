<?php

/* user/archive.twig */
class __TwigTemplate_e1dbdd7acf2417192e771eb38cdfaf413442f6ccfc709b1e49dca20f1f3269fe extends Twig_Template
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
        $this->loadTemplate("user/header.twig", "user/archive.twig", 1)->display($context);
        // line 2
        echo "\t<div class=\"container\">
\t\t";
        // line 3
        $this->loadTemplate("user/subheader.twig", "user/archive.twig", 3)->display($context);
        // line 4
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 7
            echo "\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t<h2><a href=\"/question/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "title", array()), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t<i>
\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "user_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "date", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"meta-data\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "category_name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</p>
\t\t\t\t\t<p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t";
        $this->loadTemplate("user/paginate.twig", "user/archive.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</div>
\t\t\t";
        // line 26
        $this->loadTemplate("user/sidebar.twig", "user/archive.twig", 26)->display($context);
        // line 27
        echo "\t\t</div>
\t</div>
";
        // line 29
        $this->loadTemplate("user/footer.twig", "user/archive.twig", 29)->display($context);
    }

    public function getTemplateName()
    {
        return "user/archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  81 => 27,  79 => 26,  76 => 25,  73 => 24,  63 => 20,  57 => 17,  51 => 14,  46 => 12,  37 => 8,  34 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"user/header.twig\" %}
\t<div class=\"container\">
\t\t{% include \"user/subheader.twig\" %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{% for question in questions %}
\t\t\t\t<div class=\"question-item\">
\t\t\t\t\t<h2><a href=\"/question/{{question.id}}/\">{{question.title}}</a></h2>
\t\t\t\t\t<p class=\"text-muted meta\">
\t\t\t\t\t\t<i>
\t\t\t\t\t\t\tСпросил:
\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.user_name}}</span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.date}}</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"meta-data\">{{question.category_name}}</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</p>
\t\t\t\t\t<p>{{question.content}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t{% endfor %}
\t\t\t\t{% include \"user/paginate.twig\" %}
\t\t\t</div>
\t\t\t{% include \"user/sidebar.twig\" %}
\t\t</div>
\t</div>
{% include \"user/footer.twig\" %}", "user/archive.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\archive.twig");
    }
}
