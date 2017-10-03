<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a5064726d41d06ca221318eef53d7932fef31e2e7fb8fb79fa534dcb2f3af0de extends Twig_Template
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
        $__internal_6c7820dbd7b22012a76fde792dc04d05ea0d3e7ed88ea52e5ab28c1de0abd50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7820dbd7b22012a76fde792dc04d05ea0d3e7ed88ea52e5ab28c1de0abd50b->enter($__internal_6c7820dbd7b22012a76fde792dc04d05ea0d3e7ed88ea52e5ab28c1de0abd50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_81fde71ad421d5bfe739ad9eac14b2d8efe10d3c0e892c451139f22b14e636bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fde71ad421d5bfe739ad9eac14b2d8efe10d3c0e892c451139f22b14e636bc->enter($__internal_81fde71ad421d5bfe739ad9eac14b2d8efe10d3c0e892c451139f22b14e636bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6c7820dbd7b22012a76fde792dc04d05ea0d3e7ed88ea52e5ab28c1de0abd50b->leave($__internal_6c7820dbd7b22012a76fde792dc04d05ea0d3e7ed88ea52e5ab28c1de0abd50b_prof);

        
        $__internal_81fde71ad421d5bfe739ad9eac14b2d8efe10d3c0e892c451139f22b14e636bc->leave($__internal_81fde71ad421d5bfe739ad9eac14b2d8efe10d3c0e892c451139f22b14e636bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
