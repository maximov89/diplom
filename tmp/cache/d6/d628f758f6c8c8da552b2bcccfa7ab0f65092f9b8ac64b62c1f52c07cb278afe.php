<?php

/* admin/paginate.twig */
class __TwigTemplate_e2f8d73aad6f2a87aaeaf8d89096d787fbae874e3027966da68c89d32542e333 extends Twig_Template
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
        return "admin/paginate.twig";
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
</nav>", "admin/paginate.twig", "E:\\OpenServer\\domains\\diplom\\views\\admin\\paginate.twig");
    }
}
