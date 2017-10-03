<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_637cd189c4f81492ba914f97fcb353ec105564bd2cebbb42663286e5b1c938f3 extends Twig_Template
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
        $__internal_aea0b8ead4df731ecb2373e87a84cde65a19ad60c8393ae61a7727e63aac8d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea0b8ead4df731ecb2373e87a84cde65a19ad60c8393ae61a7727e63aac8d3d->enter($__internal_aea0b8ead4df731ecb2373e87a84cde65a19ad60c8393ae61a7727e63aac8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ad203db1379be8e57de9d2cd8dff1a73dd7594066597c94e191219bfed53af97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad203db1379be8e57de9d2cd8dff1a73dd7594066597c94e191219bfed53af97->enter($__internal_ad203db1379be8e57de9d2cd8dff1a73dd7594066597c94e191219bfed53af97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aea0b8ead4df731ecb2373e87a84cde65a19ad60c8393ae61a7727e63aac8d3d->leave($__internal_aea0b8ead4df731ecb2373e87a84cde65a19ad60c8393ae61a7727e63aac8d3d_prof);

        
        $__internal_ad203db1379be8e57de9d2cd8dff1a73dd7594066597c94e191219bfed53af97->leave($__internal_ad203db1379be8e57de9d2cd8dff1a73dd7594066597c94e191219bfed53af97_prof);

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
