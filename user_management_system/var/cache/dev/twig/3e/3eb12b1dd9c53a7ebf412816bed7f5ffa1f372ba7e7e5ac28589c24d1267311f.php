<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b26ff2a8b5712270aef9ab7da8e1a7fafa15880aa5274d59ab932670db94ef75 extends Twig_Template
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
        $__internal_629b514732a76b381b32db564a7764f2ba87e512f4f333c41048d9eb5035ec8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629b514732a76b381b32db564a7764f2ba87e512f4f333c41048d9eb5035ec8c->enter($__internal_629b514732a76b381b32db564a7764f2ba87e512f4f333c41048d9eb5035ec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b0c18be1cbb2f6b8cc7e648ecf59606598a9c9cb8b82ce56f0b25790922f092a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c18be1cbb2f6b8cc7e648ecf59606598a9c9cb8b82ce56f0b25790922f092a->enter($__internal_b0c18be1cbb2f6b8cc7e648ecf59606598a9c9cb8b82ce56f0b25790922f092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_629b514732a76b381b32db564a7764f2ba87e512f4f333c41048d9eb5035ec8c->leave($__internal_629b514732a76b381b32db564a7764f2ba87e512f4f333c41048d9eb5035ec8c_prof);

        
        $__internal_b0c18be1cbb2f6b8cc7e648ecf59606598a9c9cb8b82ce56f0b25790922f092a->leave($__internal_b0c18be1cbb2f6b8cc7e648ecf59606598a9c9cb8b82ce56f0b25790922f092a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
