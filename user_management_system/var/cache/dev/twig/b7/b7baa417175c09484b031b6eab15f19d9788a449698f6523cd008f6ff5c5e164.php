<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_56fea0f240053b948459b3ea2f7a97ab875796877d2bb1015db3fea3b3d71a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56fea0f240053b948459b3ea2f7a97ab875796877d2bb1015db3fea3b3d71a54->enter($__internal_56fea0f240053b948459b3ea2f7a97ab875796877d2bb1015db3fea3b3d71a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_97e76ddb776102f831161380a1e6ebdd152195f796b9e9d59a239e9224c1e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e76ddb776102f831161380a1e6ebdd152195f796b9e9d59a239e9224c1e6a2->enter($__internal_97e76ddb776102f831161380a1e6ebdd152195f796b9e9d59a239e9224c1e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_56fea0f240053b948459b3ea2f7a97ab875796877d2bb1015db3fea3b3d71a54->leave($__internal_56fea0f240053b948459b3ea2f7a97ab875796877d2bb1015db3fea3b3d71a54_prof);

        
        $__internal_97e76ddb776102f831161380a1e6ebdd152195f796b9e9d59a239e9224c1e6a2->leave($__internal_97e76ddb776102f831161380a1e6ebdd152195f796b9e9d59a239e9224c1e6a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
