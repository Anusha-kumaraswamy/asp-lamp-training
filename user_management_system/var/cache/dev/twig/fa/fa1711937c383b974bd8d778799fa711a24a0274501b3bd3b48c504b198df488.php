<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_dc07612cbb72f102e6ebe6d90d34df7a9589c8a7a0ca09b6011629e6c25dc910 extends Twig_Template
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
        $__internal_36c91794231e8eb2dd89c38d548e39993907d74de042f68dd770f5af082d482d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c91794231e8eb2dd89c38d548e39993907d74de042f68dd770f5af082d482d->enter($__internal_36c91794231e8eb2dd89c38d548e39993907d74de042f68dd770f5af082d482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ac499d82c0cab06d8fbd5d6f4269365b3dabb1d26eebb3041e7e477ff623c0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac499d82c0cab06d8fbd5d6f4269365b3dabb1d26eebb3041e7e477ff623c0d0->enter($__internal_ac499d82c0cab06d8fbd5d6f4269365b3dabb1d26eebb3041e7e477ff623c0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_36c91794231e8eb2dd89c38d548e39993907d74de042f68dd770f5af082d482d->leave($__internal_36c91794231e8eb2dd89c38d548e39993907d74de042f68dd770f5af082d482d_prof);

        
        $__internal_ac499d82c0cab06d8fbd5d6f4269365b3dabb1d26eebb3041e7e477ff623c0d0->leave($__internal_ac499d82c0cab06d8fbd5d6f4269365b3dabb1d26eebb3041e7e477ff623c0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
