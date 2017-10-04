<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1f67c4614a28c3358029898a25a6b0b412de591e5d9498f80549f16a3b04d62d extends Twig_Template
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
        $__internal_228fd838bc8feb63db1c2ff4f8290b440358c82ca22c2d5ee9fea75bd97bdb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228fd838bc8feb63db1c2ff4f8290b440358c82ca22c2d5ee9fea75bd97bdb8a->enter($__internal_228fd838bc8feb63db1c2ff4f8290b440358c82ca22c2d5ee9fea75bd97bdb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6fa82734c6d99b2e1f86f066d3aa2a0767c055f37bfd6ab2ce894282c14cc2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa82734c6d99b2e1f86f066d3aa2a0767c055f37bfd6ab2ce894282c14cc2e2->enter($__internal_6fa82734c6d99b2e1f86f066d3aa2a0767c055f37bfd6ab2ce894282c14cc2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_228fd838bc8feb63db1c2ff4f8290b440358c82ca22c2d5ee9fea75bd97bdb8a->leave($__internal_228fd838bc8feb63db1c2ff4f8290b440358c82ca22c2d5ee9fea75bd97bdb8a_prof);

        
        $__internal_6fa82734c6d99b2e1f86f066d3aa2a0767c055f37bfd6ab2ce894282c14cc2e2->leave($__internal_6fa82734c6d99b2e1f86f066d3aa2a0767c055f37bfd6ab2ce894282c14cc2e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
