<?php

/* UserBundle:User:form.html.twig */
class __TwigTemplate_a3fd0e709bc63a6697fa701fc6a1e680f5ddf2d9ea8101bf148581ab6ea5f7b7 extends Twig_Template
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
        $__internal_aaa649973af842af1c12b828b736b1abf8ef604cdb1fc334d63f20d9a70b1ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa649973af842af1c12b828b736b1abf8ef604cdb1fc334d63f20d9a70b1ddc->enter($__internal_aaa649973af842af1c12b828b736b1abf8ef604cdb1fc334d63f20d9a70b1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $__internal_b9e498574a06e14101a7b6284e5eb487de6623129cb77fdc3feaee4eb8b9106e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e498574a06e14101a7b6284e5eb487de6623129cb77fdc3feaee4eb8b9106e->enter($__internal_b9e498574a06e14101a7b6284e5eb487de6623129cb77fdc3feaee4eb8b9106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        // line 2
        echo "<table border = \"2\">
    <tr>
        <th>UserName</th>
        <th>FirstName</th>
        <th>LastName</th>                
    </tr>
";
        // line 9
        echo "    <tr>    
        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "loginName", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "firstName", array()), "html", null, true);
        echo "</td>   
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "lastName", array()), "html", null, true);
        echo "</td>
    </tr>
     ";
        // line 18
        echo "</table>";
        
        $__internal_aaa649973af842af1c12b828b736b1abf8ef604cdb1fc334d63f20d9a70b1ddc->leave($__internal_aaa649973af842af1c12b828b736b1abf8ef604cdb1fc334d63f20d9a70b1ddc_prof);

        
        $__internal_b9e498574a06e14101a7b6284e5eb487de6623129cb77fdc3feaee4eb8b9106e->leave($__internal_b9e498574a06e14101a7b6284e5eb487de6623129cb77fdc3feaee4eb8b9106e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  44 => 12,  40 => 11,  36 => 10,  33 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<table border = \"2\">
    <tr>
        <th>UserName</th>
        <th>FirstName</th>
        <th>LastName</th>                
    </tr>
{#{% for user in entities %}#}
    <tr>    
        <td>{{ entities.loginName}}</td>
        <td>{{ entities.firstName }}</td>   
        <td>{{ entities.lastName }}</td>
    </tr>
     {#    {{ user.dob }}#}
{#    {{ user.blood }}#}
{#    {{ user.gender }}#}
{#{% endfor %}#}
</table>", "UserBundle:User:form.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/form.html.twig");
    }
}
