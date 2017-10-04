<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8c541c304c422916d6b116b854deae4e714d832c84bab9a00aa18381b24f4f4a extends Twig_Template
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
        $__internal_6fd801870ef6eb222c2e415abf9a457e3ff7d774318409486cd67538fd23f648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd801870ef6eb222c2e415abf9a457e3ff7d774318409486cd67538fd23f648->enter($__internal_6fd801870ef6eb222c2e415abf9a457e3ff7d774318409486cd67538fd23f648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3df11e88dd63de430eaeaf6014eceebb9dc1cb71fab3c3086fe136d97fea5d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df11e88dd63de430eaeaf6014eceebb9dc1cb71fab3c3086fe136d97fea5d6d->enter($__internal_3df11e88dd63de430eaeaf6014eceebb9dc1cb71fab3c3086fe136d97fea5d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6fd801870ef6eb222c2e415abf9a457e3ff7d774318409486cd67538fd23f648->leave($__internal_6fd801870ef6eb222c2e415abf9a457e3ff7d774318409486cd67538fd23f648_prof);

        
        $__internal_3df11e88dd63de430eaeaf6014eceebb9dc1cb71fab3c3086fe136d97fea5d6d->leave($__internal_3df11e88dd63de430eaeaf6014eceebb9dc1cb71fab3c3086fe136d97fea5d6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
