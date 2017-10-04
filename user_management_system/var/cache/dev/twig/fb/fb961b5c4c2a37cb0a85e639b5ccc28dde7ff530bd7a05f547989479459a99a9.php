<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d6d79c21fd6a2960f3561f0f88ad43ed9c7ca4979a74a1aadb7488cfe7c88615 extends Twig_Template
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
        $__internal_ef988b1062821b5de313142b67b0eecd504ec6d30ab3e7f2bb1050415bda9a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef988b1062821b5de313142b67b0eecd504ec6d30ab3e7f2bb1050415bda9a84->enter($__internal_ef988b1062821b5de313142b67b0eecd504ec6d30ab3e7f2bb1050415bda9a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f4d5e3833ada3684655d3abdfa062373e83fd752a50963e7cb732c203d406c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d5e3833ada3684655d3abdfa062373e83fd752a50963e7cb732c203d406c4b->enter($__internal_f4d5e3833ada3684655d3abdfa062373e83fd752a50963e7cb732c203d406c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ef988b1062821b5de313142b67b0eecd504ec6d30ab3e7f2bb1050415bda9a84->leave($__internal_ef988b1062821b5de313142b67b0eecd504ec6d30ab3e7f2bb1050415bda9a84_prof);

        
        $__internal_f4d5e3833ada3684655d3abdfa062373e83fd752a50963e7cb732c203d406c4b->leave($__internal_f4d5e3833ada3684655d3abdfa062373e83fd752a50963e7cb732c203d406c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
