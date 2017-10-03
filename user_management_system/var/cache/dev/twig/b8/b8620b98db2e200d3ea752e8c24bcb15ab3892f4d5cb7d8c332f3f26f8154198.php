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
        $__internal_f1bd0f6142dabe246c6b934a07a8b2d06e69c265f4dd0781bcd13b457409998e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bd0f6142dabe246c6b934a07a8b2d06e69c265f4dd0781bcd13b457409998e->enter($__internal_f1bd0f6142dabe246c6b934a07a8b2d06e69c265f4dd0781bcd13b457409998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_11f4d95bd97b091c983bb32835c0eb79ef66455b42f093e31bdd49a338d949a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f4d95bd97b091c983bb32835c0eb79ef66455b42f093e31bdd49a338d949a3->enter($__internal_11f4d95bd97b091c983bb32835c0eb79ef66455b42f093e31bdd49a338d949a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f1bd0f6142dabe246c6b934a07a8b2d06e69c265f4dd0781bcd13b457409998e->leave($__internal_f1bd0f6142dabe246c6b934a07a8b2d06e69c265f4dd0781bcd13b457409998e_prof);

        
        $__internal_11f4d95bd97b091c983bb32835c0eb79ef66455b42f093e31bdd49a338d949a3->leave($__internal_11f4d95bd97b091c983bb32835c0eb79ef66455b42f093e31bdd49a338d949a3_prof);

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
