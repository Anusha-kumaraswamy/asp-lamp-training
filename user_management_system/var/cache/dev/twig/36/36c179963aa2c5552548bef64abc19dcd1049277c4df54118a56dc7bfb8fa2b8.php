<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_4270eef71f39cd29a7d415f724e89cf38d5f889189f3b84052bdbbf01af7d93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4270eef71f39cd29a7d415f724e89cf38d5f889189f3b84052bdbbf01af7d93b->enter($__internal_4270eef71f39cd29a7d415f724e89cf38d5f889189f3b84052bdbbf01af7d93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_04971c6190f0009802545c120531f1ef45cef725725a068eba1704fed965191f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04971c6190f0009802545c120531f1ef45cef725725a068eba1704fed965191f->enter($__internal_04971c6190f0009802545c120531f1ef45cef725725a068eba1704fed965191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4270eef71f39cd29a7d415f724e89cf38d5f889189f3b84052bdbbf01af7d93b->leave($__internal_4270eef71f39cd29a7d415f724e89cf38d5f889189f3b84052bdbbf01af7d93b_prof);

        
        $__internal_04971c6190f0009802545c120531f1ef45cef725725a068eba1704fed965191f->leave($__internal_04971c6190f0009802545c120531f1ef45cef725725a068eba1704fed965191f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
