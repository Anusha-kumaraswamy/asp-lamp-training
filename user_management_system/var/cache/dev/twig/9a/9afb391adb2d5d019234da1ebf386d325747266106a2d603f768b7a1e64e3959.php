<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_4d9f7a3569d4d9d55c9a708d75000759e785ead1e3173024e2e26eb0facf940b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9f7a3569d4d9d55c9a708d75000759e785ead1e3173024e2e26eb0facf940b->enter($__internal_4d9f7a3569d4d9d55c9a708d75000759e785ead1e3173024e2e26eb0facf940b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a76ff9861c7331912392bee2b5a49e89d0ecf2ecf058adbc6cd6bd861a094dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76ff9861c7331912392bee2b5a49e89d0ecf2ecf058adbc6cd6bd861a094dc6->enter($__internal_a76ff9861c7331912392bee2b5a49e89d0ecf2ecf058adbc6cd6bd861a094dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4d9f7a3569d4d9d55c9a708d75000759e785ead1e3173024e2e26eb0facf940b->leave($__internal_4d9f7a3569d4d9d55c9a708d75000759e785ead1e3173024e2e26eb0facf940b_prof);

        
        $__internal_a76ff9861c7331912392bee2b5a49e89d0ecf2ecf058adbc6cd6bd861a094dc6->leave($__internal_a76ff9861c7331912392bee2b5a49e89d0ecf2ecf058adbc6cd6bd861a094dc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
