<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_9fabaa763806b02a4268abbd985e700376b52c7c4005a4e199b7562dffb40518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fabaa763806b02a4268abbd985e700376b52c7c4005a4e199b7562dffb40518->enter($__internal_9fabaa763806b02a4268abbd985e700376b52c7c4005a4e199b7562dffb40518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2376025464c299edb8d568ed84fce83f7418dbef62f5a40b5273bca3b8651f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2376025464c299edb8d568ed84fce83f7418dbef62f5a40b5273bca3b8651f42->enter($__internal_2376025464c299edb8d568ed84fce83f7418dbef62f5a40b5273bca3b8651f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9fabaa763806b02a4268abbd985e700376b52c7c4005a4e199b7562dffb40518->leave($__internal_9fabaa763806b02a4268abbd985e700376b52c7c4005a4e199b7562dffb40518_prof);

        
        $__internal_2376025464c299edb8d568ed84fce83f7418dbef62f5a40b5273bca3b8651f42->leave($__internal_2376025464c299edb8d568ed84fce83f7418dbef62f5a40b5273bca3b8651f42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
