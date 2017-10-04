<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dee62bd724d7f3a7ef34105e9468f726e14e6a8d683f9b922e42846b799ca2e4 extends Twig_Template
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
        $__internal_af5f6c4e5ee8c9bd17591e84150905cbe093a0976a966720477c1bfb281b1828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5f6c4e5ee8c9bd17591e84150905cbe093a0976a966720477c1bfb281b1828->enter($__internal_af5f6c4e5ee8c9bd17591e84150905cbe093a0976a966720477c1bfb281b1828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1442544a863edcbe2ca5aee797e9d0d470e9f012543d85ab7e5350c4b81e6d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1442544a863edcbe2ca5aee797e9d0d470e9f012543d85ab7e5350c4b81e6d57->enter($__internal_1442544a863edcbe2ca5aee797e9d0d470e9f012543d85ab7e5350c4b81e6d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_af5f6c4e5ee8c9bd17591e84150905cbe093a0976a966720477c1bfb281b1828->leave($__internal_af5f6c4e5ee8c9bd17591e84150905cbe093a0976a966720477c1bfb281b1828_prof);

        
        $__internal_1442544a863edcbe2ca5aee797e9d0d470e9f012543d85ab7e5350c4b81e6d57->leave($__internal_1442544a863edcbe2ca5aee797e9d0d470e9f012543d85ab7e5350c4b81e6d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
