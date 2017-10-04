<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c19a277e8e9fd1b50cf222ce8c39a117397440c72d4aee62e1e4da7180087228 extends Twig_Template
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
        $__internal_8d5a4c1bafb7e0d656fb8c020b80b71cea3cfe42749ccb220b7b16863fade1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5a4c1bafb7e0d656fb8c020b80b71cea3cfe42749ccb220b7b16863fade1d9->enter($__internal_8d5a4c1bafb7e0d656fb8c020b80b71cea3cfe42749ccb220b7b16863fade1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6e010da18df1796fc4be240c21bc867dd0715bd33615f944c662b7851a475b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e010da18df1796fc4be240c21bc867dd0715bd33615f944c662b7851a475b3f->enter($__internal_6e010da18df1796fc4be240c21bc867dd0715bd33615f944c662b7851a475b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8d5a4c1bafb7e0d656fb8c020b80b71cea3cfe42749ccb220b7b16863fade1d9->leave($__internal_8d5a4c1bafb7e0d656fb8c020b80b71cea3cfe42749ccb220b7b16863fade1d9_prof);

        
        $__internal_6e010da18df1796fc4be240c21bc867dd0715bd33615f944c662b7851a475b3f->leave($__internal_6e010da18df1796fc4be240c21bc867dd0715bd33615f944c662b7851a475b3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
