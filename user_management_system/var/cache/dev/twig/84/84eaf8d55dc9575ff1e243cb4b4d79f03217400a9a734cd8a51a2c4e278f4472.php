<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a5456c6a287359874175753b1a43fdf18dd3a807325259c6e93c0095ef60214 extends Twig_Template
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
        $__internal_8992f1f550e1fc18d5add5f316ddf8952f117baddaad74cf4eadc2213e73b7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8992f1f550e1fc18d5add5f316ddf8952f117baddaad74cf4eadc2213e73b7c1->enter($__internal_8992f1f550e1fc18d5add5f316ddf8952f117baddaad74cf4eadc2213e73b7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_54e9607a3fbb04da3cb27d4ad32acfc2ff3f535fd92cd195c2fcf06712a349fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e9607a3fbb04da3cb27d4ad32acfc2ff3f535fd92cd195c2fcf06712a349fc->enter($__internal_54e9607a3fbb04da3cb27d4ad32acfc2ff3f535fd92cd195c2fcf06712a349fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8992f1f550e1fc18d5add5f316ddf8952f117baddaad74cf4eadc2213e73b7c1->leave($__internal_8992f1f550e1fc18d5add5f316ddf8952f117baddaad74cf4eadc2213e73b7c1_prof);

        
        $__internal_54e9607a3fbb04da3cb27d4ad32acfc2ff3f535fd92cd195c2fcf06712a349fc->leave($__internal_54e9607a3fbb04da3cb27d4ad32acfc2ff3f535fd92cd195c2fcf06712a349fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
