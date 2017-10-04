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
        $__internal_51666819367aa236fc8a67ffd9f90537df2ca9cd5b14c1bbd7645534391dbb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51666819367aa236fc8a67ffd9f90537df2ca9cd5b14c1bbd7645534391dbb10->enter($__internal_51666819367aa236fc8a67ffd9f90537df2ca9cd5b14c1bbd7645534391dbb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_323f568ead4015e782e9b201c8632818a4e6f86e6c2a8b384479e57b0fa029af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f568ead4015e782e9b201c8632818a4e6f86e6c2a8b384479e57b0fa029af->enter($__internal_323f568ead4015e782e9b201c8632818a4e6f86e6c2a8b384479e57b0fa029af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_51666819367aa236fc8a67ffd9f90537df2ca9cd5b14c1bbd7645534391dbb10->leave($__internal_51666819367aa236fc8a67ffd9f90537df2ca9cd5b14c1bbd7645534391dbb10_prof);

        
        $__internal_323f568ead4015e782e9b201c8632818a4e6f86e6c2a8b384479e57b0fa029af->leave($__internal_323f568ead4015e782e9b201c8632818a4e6f86e6c2a8b384479e57b0fa029af_prof);

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
