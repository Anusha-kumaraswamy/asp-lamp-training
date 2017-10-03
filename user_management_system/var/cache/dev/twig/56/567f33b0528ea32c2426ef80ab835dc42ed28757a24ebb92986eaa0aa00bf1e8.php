<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_6214940f2e6e69f2e0a4883fdc9099a4d6e063b24d975ff9bb3b05797d467a3d extends Twig_Template
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
        $__internal_52819394387660b5d9acb48ac58981c60f95af7254fa7ab7e6a07f35bdcba8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52819394387660b5d9acb48ac58981c60f95af7254fa7ab7e6a07f35bdcba8ca->enter($__internal_52819394387660b5d9acb48ac58981c60f95af7254fa7ab7e6a07f35bdcba8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_9095b3f92426cae814b9e8e07ea17239ad2a24bc841348760854a89c86c2bfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9095b3f92426cae814b9e8e07ea17239ad2a24bc841348760854a89c86c2bfb7->enter($__internal_9095b3f92426cae814b9e8e07ea17239ad2a24bc841348760854a89c86c2bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_52819394387660b5d9acb48ac58981c60f95af7254fa7ab7e6a07f35bdcba8ca->leave($__internal_52819394387660b5d9acb48ac58981c60f95af7254fa7ab7e6a07f35bdcba8ca_prof);

        
        $__internal_9095b3f92426cae814b9e8e07ea17239ad2a24bc841348760854a89c86c2bfb7->leave($__internal_9095b3f92426cae814b9e8e07ea17239ad2a24bc841348760854a89c86c2bfb7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
