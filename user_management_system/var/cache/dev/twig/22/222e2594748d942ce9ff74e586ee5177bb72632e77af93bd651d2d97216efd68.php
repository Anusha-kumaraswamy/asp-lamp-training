<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_7ba14c12ea3983f851d26df36a7adf6322c023cded8891ad3d131e77f8bb6fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba14c12ea3983f851d26df36a7adf6322c023cded8891ad3d131e77f8bb6fa4->enter($__internal_7ba14c12ea3983f851d26df36a7adf6322c023cded8891ad3d131e77f8bb6fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e0cbd02a8ad7cc19830598e1843351d5a7d6299f2d1c5a94a48ea28ccb114b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cbd02a8ad7cc19830598e1843351d5a7d6299f2d1c5a94a48ea28ccb114b46->enter($__internal_e0cbd02a8ad7cc19830598e1843351d5a7d6299f2d1c5a94a48ea28ccb114b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7ba14c12ea3983f851d26df36a7adf6322c023cded8891ad3d131e77f8bb6fa4->leave($__internal_7ba14c12ea3983f851d26df36a7adf6322c023cded8891ad3d131e77f8bb6fa4_prof);

        
        $__internal_e0cbd02a8ad7cc19830598e1843351d5a7d6299f2d1c5a94a48ea28ccb114b46->leave($__internal_e0cbd02a8ad7cc19830598e1843351d5a7d6299f2d1c5a94a48ea28ccb114b46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
