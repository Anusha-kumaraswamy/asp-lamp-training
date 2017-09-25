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
        $__internal_62d8c4948f6392ffb624de73209858bf3740807eafb8ca4a00defbb33397c389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d8c4948f6392ffb624de73209858bf3740807eafb8ca4a00defbb33397c389->enter($__internal_62d8c4948f6392ffb624de73209858bf3740807eafb8ca4a00defbb33397c389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $__internal_9ee64c6b30177ac6d2e98ef0e625bb299d1ba4ad4b64221731807af79f2558b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee64c6b30177ac6d2e98ef0e625bb299d1ba4ad4b64221731807af79f2558b6->enter($__internal_9ee64c6b30177ac6d2e98ef0e625bb299d1ba4ad4b64221731807af79f2558b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), "name", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), "name", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "register", array()), 'row');
        echo "
";
        // line 16
        echo "       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_62d8c4948f6392ffb624de73209858bf3740807eafb8ca4a00defbb33397c389->leave($__internal_62d8c4948f6392ffb624de73209858bf3740807eafb8ca4a00defbb33397c389_prof);

        
        $__internal_9ee64c6b30177ac6d2e98ef0e625bb299d1ba4ad4b64221731807af79f2558b6->leave($__internal_9ee64c6b30177ac6d2e98ef0e625bb299d1ba4ad4b64221731807af79f2558b6_prof);

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
        return array (  60 => 21,  58 => 16,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  29 => 4,  25 => 2,);
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
{{ form_start(form) }}
    {# render the task's only field: description #}
    {{ form_row(form.loginName) }}
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
    {{ form_row(form.dateOfBirth) }}
    {{ form_row(form.gender.name) }}
    {{ form_row(form.bloodGroup.name) }}
    {{ form_row(form.register) }}
{#

    <h3>Tags</h3>
    <ul class=\"tags\">
        {# iterate over each existing tag and render its only field: name #}
       {# {% for tag in form.tags %}
            <li>{{ form_row(tag.name) }}</li>
        {% endfor %}
    </ul>
#}
{{ form_end(form) }}
", "UserBundle:User:form.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/form.html.twig");
    }
}
