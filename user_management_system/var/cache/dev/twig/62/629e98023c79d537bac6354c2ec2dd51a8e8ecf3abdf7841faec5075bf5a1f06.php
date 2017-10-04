<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f2c09b2fd4c86a95dbd42f8552d70bceb3dea7b74086d19ac9b3ddbd6c11a78b extends Twig_Template
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
        $__internal_0fc6b193848b3c61483c36c09cb39f6ecd3585489b203bb32f6d31f7808a2869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc6b193848b3c61483c36c09cb39f6ecd3585489b203bb32f6d31f7808a2869->enter($__internal_0fc6b193848b3c61483c36c09cb39f6ecd3585489b203bb32f6d31f7808a2869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0174160f69dcd9cce89b4af19da03fb52df127d80dd8c022f0bba84d067df1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0174160f69dcd9cce89b4af19da03fb52df127d80dd8c022f0bba84d067df1a0->enter($__internal_0174160f69dcd9cce89b4af19da03fb52df127d80dd8c022f0bba84d067df1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0fc6b193848b3c61483c36c09cb39f6ecd3585489b203bb32f6d31f7808a2869->leave($__internal_0fc6b193848b3c61483c36c09cb39f6ecd3585489b203bb32f6d31f7808a2869_prof);

        
        $__internal_0174160f69dcd9cce89b4af19da03fb52df127d80dd8c022f0bba84d067df1a0->leave($__internal_0174160f69dcd9cce89b4af19da03fb52df127d80dd8c022f0bba84d067df1a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
