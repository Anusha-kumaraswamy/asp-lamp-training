<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_62dfe2879eea605e9372f4ef27eacebc1322ce1d74fd5ab49e07d8a55f114c9d extends Twig_Template
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
        $__internal_f956ea4305bd0ce89af2bedec129e279deb288fd27afbab6b2c9f695585b7763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f956ea4305bd0ce89af2bedec129e279deb288fd27afbab6b2c9f695585b7763->enter($__internal_f956ea4305bd0ce89af2bedec129e279deb288fd27afbab6b2c9f695585b7763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_874b9817d91641dd4b2bcd769b4ce8c5d6dacbd1bd6e287311438a7285ab778c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874b9817d91641dd4b2bcd769b4ce8c5d6dacbd1bd6e287311438a7285ab778c->enter($__internal_874b9817d91641dd4b2bcd769b4ce8c5d6dacbd1bd6e287311438a7285ab778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f956ea4305bd0ce89af2bedec129e279deb288fd27afbab6b2c9f695585b7763->leave($__internal_f956ea4305bd0ce89af2bedec129e279deb288fd27afbab6b2c9f695585b7763_prof);

        
        $__internal_874b9817d91641dd4b2bcd769b4ce8c5d6dacbd1bd6e287311438a7285ab778c->leave($__internal_874b9817d91641dd4b2bcd769b4ce8c5d6dacbd1bd6e287311438a7285ab778c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
