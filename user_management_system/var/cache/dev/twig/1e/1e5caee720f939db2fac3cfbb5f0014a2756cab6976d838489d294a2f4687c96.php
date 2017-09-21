<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_251b5e9f29cbf8faf1c68be5af579b9924f7327c29e50c9cc69d8020a9e402f1 extends Twig_Template
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
        $__internal_d408d0ba21a665e141a1ff5ca8903e70d6d59a46e3def053b8ddd7ba0706d1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d408d0ba21a665e141a1ff5ca8903e70d6d59a46e3def053b8ddd7ba0706d1b1->enter($__internal_d408d0ba21a665e141a1ff5ca8903e70d6d59a46e3def053b8ddd7ba0706d1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_13b2e67c3c88f0b6f917cf47bbb41151dffcfe8e5ed33aaa4b5df6a65a707fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b2e67c3c88f0b6f917cf47bbb41151dffcfe8e5ed33aaa4b5df6a65a707fd3->enter($__internal_13b2e67c3c88f0b6f917cf47bbb41151dffcfe8e5ed33aaa4b5df6a65a707fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
";
        
        $__internal_d408d0ba21a665e141a1ff5ca8903e70d6d59a46e3def053b8ddd7ba0706d1b1->leave($__internal_d408d0ba21a665e141a1ff5ca8903e70d6d59a46e3def053b8ddd7ba0706d1b1_prof);

        
        $__internal_13b2e67c3c88f0b6f917cf47bbb41151dffcfe8e5ed33aaa4b5df6a65a707fd3->leave($__internal_13b2e67c3c88f0b6f917cf47bbb41151dffcfe8e5ed33aaa4b5df6a65a707fd3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{name}}
", "UserBundle:Default:index.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
