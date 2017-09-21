<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_3a8c30fc9f2cefce1290b8ed17837dee65fb6c302857f344bc82ac160bb0b153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8c30fc9f2cefce1290b8ed17837dee65fb6c302857f344bc82ac160bb0b153->enter($__internal_3a8c30fc9f2cefce1290b8ed17837dee65fb6c302857f344bc82ac160bb0b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_81b7d9373ec0b592bdd296b807cecc8b26ec0185d1484926287eb3a0f519aec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b7d9373ec0b592bdd296b807cecc8b26ec0185d1484926287eb3a0f519aec8->enter($__internal_81b7d9373ec0b592bdd296b807cecc8b26ec0185d1484926287eb3a0f519aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a8c30fc9f2cefce1290b8ed17837dee65fb6c302857f344bc82ac160bb0b153->leave($__internal_3a8c30fc9f2cefce1290b8ed17837dee65fb6c302857f344bc82ac160bb0b153_prof);

        
        $__internal_81b7d9373ec0b592bdd296b807cecc8b26ec0185d1484926287eb3a0f519aec8->leave($__internal_81b7d9373ec0b592bdd296b807cecc8b26ec0185d1484926287eb3a0f519aec8_prof);

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
