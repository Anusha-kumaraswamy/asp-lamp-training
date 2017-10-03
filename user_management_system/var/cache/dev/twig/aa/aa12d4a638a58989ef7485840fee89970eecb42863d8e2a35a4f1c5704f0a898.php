<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_022d3d56e1c2d7ff58fcfe9a68992ac1f957cc61b214a0c1ea9a4b968827a793 extends Twig_Template
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
        $__internal_4f121f4dfafd27c5744ccda1b56ab46a580aaa7794d15eed742d6ab9b3c995fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f121f4dfafd27c5744ccda1b56ab46a580aaa7794d15eed742d6ab9b3c995fa->enter($__internal_4f121f4dfafd27c5744ccda1b56ab46a580aaa7794d15eed742d6ab9b3c995fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        $__internal_330f5cf14d696f5ded5120240cfaf0ed84bd8a18ec018b7aca5fdd2c4905fa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330f5cf14d696f5ded5120240cfaf0ed84bd8a18ec018b7aca5fdd2c4905fa8d->enter($__internal_330f5cf14d696f5ded5120240cfaf0ed84bd8a18ec018b7aca5fdd2c4905fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) ? $context["filterFieldName"] : $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) ? $context["selectedField"] : $this->getContext($context, "selectedField")) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) ? $context["selectedValue"] : $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) ? $context["filterValueName"] : $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_4f121f4dfafd27c5744ccda1b56ab46a580aaa7794d15eed742d6ab9b3c995fa->leave($__internal_4f121f4dfafd27c5744ccda1b56ab46a580aaa7794d15eed742d6ab9b3c995fa_prof);

        
        $__internal_330f5cf14d696f5ded5120240cfaf0ed84bd8a18ec018b7aca5fdd2c4905fa8d->leave($__internal_330f5cf14d696f5ded5120240cfaf0ed84bd8a18ec018b7aca5fdd2c4905fa8d_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  39 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"{{ filterFieldName }}\">
        {% for field, label in fields %}
            <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
        {% endfor %}
    </select>

    <input type=\"text\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" />

    <button>{{ options.button }}</button>

</form>
", "KnpPaginatorBundle:Pagination:filtration.html.twig", "/var/www/html/asp-lamp-training/user_management_system/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/filtration.html.twig");
    }
}
