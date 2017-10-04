<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7aa501ad6b0a0d7e7655522c03c5daa8398ca3e05320f682231e133fec82c448 extends Twig_Template
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
        $__internal_0ab07c1bda268450db1e50fe7c1e396c69e3ab87d847428a209c8deef656dd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab07c1bda268450db1e50fe7c1e396c69e3ab87d847428a209c8deef656dd71->enter($__internal_0ab07c1bda268450db1e50fe7c1e396c69e3ab87d847428a209c8deef656dd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_bd4991042f065bc88910fcffdc4973328bafdcfb975263cbd1af157f78402a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4991042f065bc88910fcffdc4973328bafdcfb975263cbd1af157f78402a30->enter($__internal_bd4991042f065bc88910fcffdc4973328bafdcfb975263cbd1af157f78402a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0ab07c1bda268450db1e50fe7c1e396c69e3ab87d847428a209c8deef656dd71->leave($__internal_0ab07c1bda268450db1e50fe7c1e396c69e3ab87d847428a209c8deef656dd71_prof);

        
        $__internal_bd4991042f065bc88910fcffdc4973328bafdcfb975263cbd1af157f78402a30->leave($__internal_bd4991042f065bc88910fcffdc4973328bafdcfb975263cbd1af157f78402a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
