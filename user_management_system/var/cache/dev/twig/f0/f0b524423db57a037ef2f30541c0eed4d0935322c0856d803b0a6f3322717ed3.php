<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_c4ba98b3ad35436a2102dfbda186dc55d03d8be6151a98429293461ecdca26c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ba98b3ad35436a2102dfbda186dc55d03d8be6151a98429293461ecdca26c0->enter($__internal_c4ba98b3ad35436a2102dfbda186dc55d03d8be6151a98429293461ecdca26c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6c277a3fde01b8e396e47b2bb6e94484c631cc8a5108335158d115ce0cbbcde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c277a3fde01b8e396e47b2bb6e94484c631cc8a5108335158d115ce0cbbcde1->enter($__internal_6c277a3fde01b8e396e47b2bb6e94484c631cc8a5108335158d115ce0cbbcde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c4ba98b3ad35436a2102dfbda186dc55d03d8be6151a98429293461ecdca26c0->leave($__internal_c4ba98b3ad35436a2102dfbda186dc55d03d8be6151a98429293461ecdca26c0_prof);

        
        $__internal_6c277a3fde01b8e396e47b2bb6e94484c631cc8a5108335158d115ce0cbbcde1->leave($__internal_6c277a3fde01b8e396e47b2bb6e94484c631cc8a5108335158d115ce0cbbcde1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
