<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9dc4ab1c639887871af2fe9b769dd0e1233e18070e265322add2a00a1f9984c5 extends Twig_Template
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
        $__internal_476e6bca6095e4ffea81cdeaf053148f3821b86e1f5b4c5f70131530122a68f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476e6bca6095e4ffea81cdeaf053148f3821b86e1f5b4c5f70131530122a68f7->enter($__internal_476e6bca6095e4ffea81cdeaf053148f3821b86e1f5b4c5f70131530122a68f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_33592a6dc129b69c051b32ac66689b3f81ae93d5d57d8ae3eb97def04a6270d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33592a6dc129b69c051b32ac66689b3f81ae93d5d57d8ae3eb97def04a6270d0->enter($__internal_33592a6dc129b69c051b32ac66689b3f81ae93d5d57d8ae3eb97def04a6270d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_476e6bca6095e4ffea81cdeaf053148f3821b86e1f5b4c5f70131530122a68f7->leave($__internal_476e6bca6095e4ffea81cdeaf053148f3821b86e1f5b4c5f70131530122a68f7_prof);

        
        $__internal_33592a6dc129b69c051b32ac66689b3f81ae93d5d57d8ae3eb97def04a6270d0->leave($__internal_33592a6dc129b69c051b32ac66689b3f81ae93d5d57d8ae3eb97def04a6270d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
