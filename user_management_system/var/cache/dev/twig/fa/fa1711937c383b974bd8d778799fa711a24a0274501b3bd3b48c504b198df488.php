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
        $__internal_c8b1b263c93a380250af217960ff9cd87b661a04abcd68318e02ad52e71b3258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b1b263c93a380250af217960ff9cd87b661a04abcd68318e02ad52e71b3258->enter($__internal_c8b1b263c93a380250af217960ff9cd87b661a04abcd68318e02ad52e71b3258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e27112014d3d751891a484f9e1d6ca890e4fab9955b90524c9bac1d2975ce7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27112014d3d751891a484f9e1d6ca890e4fab9955b90524c9bac1d2975ce7de->enter($__internal_e27112014d3d751891a484f9e1d6ca890e4fab9955b90524c9bac1d2975ce7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c8b1b263c93a380250af217960ff9cd87b661a04abcd68318e02ad52e71b3258->leave($__internal_c8b1b263c93a380250af217960ff9cd87b661a04abcd68318e02ad52e71b3258_prof);

        
        $__internal_e27112014d3d751891a484f9e1d6ca890e4fab9955b90524c9bac1d2975ce7de->leave($__internal_e27112014d3d751891a484f9e1d6ca890e4fab9955b90524c9bac1d2975ce7de_prof);

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
