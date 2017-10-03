<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dc0993de0a0535b80f9aec7faafcf8af3815a20cb988c97658c1b6f70e621930 extends Twig_Template
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
        $__internal_9da02bfda369365d89824feec6985c5d0c3298622c6b7db1b734967ef48a13e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da02bfda369365d89824feec6985c5d0c3298622c6b7db1b734967ef48a13e0->enter($__internal_9da02bfda369365d89824feec6985c5d0c3298622c6b7db1b734967ef48a13e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c36840c5ecc2e4ca03e4f7b5d9af5dc1e4be647d2bb6accfa867770683b848c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36840c5ecc2e4ca03e4f7b5d9af5dc1e4be647d2bb6accfa867770683b848c4->enter($__internal_c36840c5ecc2e4ca03e4f7b5d9af5dc1e4be647d2bb6accfa867770683b848c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9da02bfda369365d89824feec6985c5d0c3298622c6b7db1b734967ef48a13e0->leave($__internal_9da02bfda369365d89824feec6985c5d0c3298622c6b7db1b734967ef48a13e0_prof);

        
        $__internal_c36840c5ecc2e4ca03e4f7b5d9af5dc1e4be647d2bb6accfa867770683b848c4->leave($__internal_c36840c5ecc2e4ca03e4f7b5d9af5dc1e4be647d2bb6accfa867770683b848c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
