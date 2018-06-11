<?php

/* user/paginate.twig */
class __TwigTemplate_1c04dc843202fac97d6c7c3714db193f1852a9515184ecd48caed92b99f0e9db extends Twig_Template
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
        echo "<nav aria-label=\"Page navigation\">
\t<ul class=\"pagination\">
\t\t";
        // line 4
        echo "\t\t\t";
        echo ($context["pagination"] ?? null);
        echo "
\t\t";
        // line 6
        echo "\t</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "user/paginate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  23 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav aria-label=\"Page navigation\">
\t<ul class=\"pagination\">
\t\t{% autoescape false %}
\t\t\t{{pagination}}
\t\t{% endautoescape %}
\t</ul>
</nav>", "user/paginate.twig", "E:\\OpenServer\\domains\\diplom\\views\\user\\paginate.twig");
    }
}
