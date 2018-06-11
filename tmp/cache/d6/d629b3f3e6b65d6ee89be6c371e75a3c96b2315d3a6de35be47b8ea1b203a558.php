<?php

/* user/sidebar.twig */
class __TwigTemplate_1ae9e53b32a1e9be54446b69903d0cd8aa22c728903ee4f8a3dc2b00696f6721 extends Twig_Template
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
        echo "<div class=\"col-md-3\">
<h3>Категории</h3>
<hr>
\t<div class=\"list-group\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "\t\t<a href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "/\" class=\"list-group-item\">
\t\t\t<span class=\"badge\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "qCount", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "
\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "user/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3\">
<h3>Категории</h3>
<hr>
\t<div class=\"list-group\">
\t\t{% for category in categories %}
\t\t<a href=\"/category/{{category.id}}/\" class=\"list-group-item\">
\t\t\t<span class=\"badge\">{{category.qCount}}</span> {{category.name}}
\t\t</a>
\t\t{% endfor %}
\t</div>
</div>", "user/sidebar.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\sidebar.twig");
    }
}
