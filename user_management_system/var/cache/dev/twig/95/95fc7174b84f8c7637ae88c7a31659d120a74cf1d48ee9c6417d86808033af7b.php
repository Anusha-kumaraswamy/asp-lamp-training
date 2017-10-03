<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8976e6556a08a83311db40379eaf336c5da770eba0b4bc6fe7e33efbc01e3da6 extends Twig_Template
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
        $__internal_f11ad89f5479235fae559c742aaeb636bcacc4b90ae3ba1e9205cf3b9a968d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11ad89f5479235fae559c742aaeb636bcacc4b90ae3ba1e9205cf3b9a968d9d->enter($__internal_f11ad89f5479235fae559c742aaeb636bcacc4b90ae3ba1e9205cf3b9a968d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_19130d27cff5abc20e639b71d8f22c6432c3685400aea16d6f585ff1e3777509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19130d27cff5abc20e639b71d8f22c6432c3685400aea16d6f585ff1e3777509->enter($__internal_19130d27cff5abc20e639b71d8f22c6432c3685400aea16d6f585ff1e3777509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f11ad89f5479235fae559c742aaeb636bcacc4b90ae3ba1e9205cf3b9a968d9d->leave($__internal_f11ad89f5479235fae559c742aaeb636bcacc4b90ae3ba1e9205cf3b9a968d9d_prof);

        
        $__internal_19130d27cff5abc20e639b71d8f22c6432c3685400aea16d6f585ff1e3777509->leave($__internal_19130d27cff5abc20e639b71d8f22c6432c3685400aea16d6f585ff1e3777509_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
