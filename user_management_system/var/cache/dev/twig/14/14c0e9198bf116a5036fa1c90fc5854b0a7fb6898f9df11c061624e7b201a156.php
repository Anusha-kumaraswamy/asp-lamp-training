<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e8a53a8f3573c2d38fd49424dca2e1b2edc4036dd887b1721d2fe5a9fb4938f extends Twig_Template
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
        $__internal_302b2f8f74c1caea0f4ff4fb940fe11dcc60828a9ac5e60eaf56e77d5a6f71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302b2f8f74c1caea0f4ff4fb940fe11dcc60828a9ac5e60eaf56e77d5a6f71a2->enter($__internal_302b2f8f74c1caea0f4ff4fb940fe11dcc60828a9ac5e60eaf56e77d5a6f71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ad285d32191fc47e7e586ef985158134d3197b3fd71729e4a063248432163930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad285d32191fc47e7e586ef985158134d3197b3fd71729e4a063248432163930->enter($__internal_ad285d32191fc47e7e586ef985158134d3197b3fd71729e4a063248432163930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_302b2f8f74c1caea0f4ff4fb940fe11dcc60828a9ac5e60eaf56e77d5a6f71a2->leave($__internal_302b2f8f74c1caea0f4ff4fb940fe11dcc60828a9ac5e60eaf56e77d5a6f71a2_prof);

        
        $__internal_ad285d32191fc47e7e586ef985158134d3197b3fd71729e4a063248432163930->leave($__internal_ad285d32191fc47e7e586ef985158134d3197b3fd71729e4a063248432163930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
