<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d67e5279056f2429ca5ee9b553a3ecc0d4fb22a986150299bc65132a0051eddf extends Twig_Template
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
        $__internal_542fc808cd0ab43c4c561e929e2780705da3f7a2905de7074e01d5ca3867fc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542fc808cd0ab43c4c561e929e2780705da3f7a2905de7074e01d5ca3867fc26->enter($__internal_542fc808cd0ab43c4c561e929e2780705da3f7a2905de7074e01d5ca3867fc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ac49ae63c7213954aaac0c9ff4de892ced9f0f03301b0b62b3d791819a8392ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac49ae63c7213954aaac0c9ff4de892ced9f0f03301b0b62b3d791819a8392ef->enter($__internal_ac49ae63c7213954aaac0c9ff4de892ced9f0f03301b0b62b3d791819a8392ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_542fc808cd0ab43c4c561e929e2780705da3f7a2905de7074e01d5ca3867fc26->leave($__internal_542fc808cd0ab43c4c561e929e2780705da3f7a2905de7074e01d5ca3867fc26_prof);

        
        $__internal_ac49ae63c7213954aaac0c9ff4de892ced9f0f03301b0b62b3d791819a8392ef->leave($__internal_ac49ae63c7213954aaac0c9ff4de892ced9f0f03301b0b62b3d791819a8392ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
