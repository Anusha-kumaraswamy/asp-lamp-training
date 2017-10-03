<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6b5064b0a423a6e36e639da805cab6e3eac3ee22bc296d51346a65f4cbca1cf5 extends Twig_Template
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
        $__internal_00e1046f780ad42051ddb01d813d89f48588efe06f8434f61e716227f986224a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e1046f780ad42051ddb01d813d89f48588efe06f8434f61e716227f986224a->enter($__internal_00e1046f780ad42051ddb01d813d89f48588efe06f8434f61e716227f986224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ccb03e34791f48a4f23c446591ebe6036bf5eb250459b38d7ba9de38c4e43bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb03e34791f48a4f23c446591ebe6036bf5eb250459b38d7ba9de38c4e43bfd->enter($__internal_ccb03e34791f48a4f23c446591ebe6036bf5eb250459b38d7ba9de38c4e43bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00e1046f780ad42051ddb01d813d89f48588efe06f8434f61e716227f986224a->leave($__internal_00e1046f780ad42051ddb01d813d89f48588efe06f8434f61e716227f986224a_prof);

        
        $__internal_ccb03e34791f48a4f23c446591ebe6036bf5eb250459b38d7ba9de38c4e43bfd->leave($__internal_ccb03e34791f48a4f23c446591ebe6036bf5eb250459b38d7ba9de38c4e43bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
