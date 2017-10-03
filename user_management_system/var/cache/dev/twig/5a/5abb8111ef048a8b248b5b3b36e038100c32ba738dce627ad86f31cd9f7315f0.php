<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5d59ded531e4f01cc70d5cbddfeba14b1b0a78a037632e1b869ac36ce5bef2d9 extends Twig_Template
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
        $__internal_9d257db30d6d7fb697068d60ef60f873f886f50ba49bdc77df63a616ce17361e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d257db30d6d7fb697068d60ef60f873f886f50ba49bdc77df63a616ce17361e->enter($__internal_9d257db30d6d7fb697068d60ef60f873f886f50ba49bdc77df63a616ce17361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0f7f7fb580818eda76200447c92dceec1e1a4cdb3331bb61d0582927e02c4bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7f7fb580818eda76200447c92dceec1e1a4cdb3331bb61d0582927e02c4bbe->enter($__internal_0f7f7fb580818eda76200447c92dceec1e1a4cdb3331bb61d0582927e02c4bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9d257db30d6d7fb697068d60ef60f873f886f50ba49bdc77df63a616ce17361e->leave($__internal_9d257db30d6d7fb697068d60ef60f873f886f50ba49bdc77df63a616ce17361e_prof);

        
        $__internal_0f7f7fb580818eda76200447c92dceec1e1a4cdb3331bb61d0582927e02c4bbe->leave($__internal_0f7f7fb580818eda76200447c92dceec1e1a4cdb3331bb61d0582927e02c4bbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
