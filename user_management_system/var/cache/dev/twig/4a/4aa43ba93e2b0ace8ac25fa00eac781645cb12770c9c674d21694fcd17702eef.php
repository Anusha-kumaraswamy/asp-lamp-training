<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_19b0e8aa9b47b633ab2322c88962a48aef479eb417dc878805e992500c07af51 extends Twig_Template
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
        $__internal_de275a092f895112d80ef67acc1ed5067763395518886583b8d1a86cd67efe7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de275a092f895112d80ef67acc1ed5067763395518886583b8d1a86cd67efe7e->enter($__internal_de275a092f895112d80ef67acc1ed5067763395518886583b8d1a86cd67efe7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0a7c61e686c7b763d0f7ac260ad1236378403e44f7fa137e52086ba5f44b074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7c61e686c7b763d0f7ac260ad1236378403e44f7fa137e52086ba5f44b074c->enter($__internal_0a7c61e686c7b763d0f7ac260ad1236378403e44f7fa137e52086ba5f44b074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_de275a092f895112d80ef67acc1ed5067763395518886583b8d1a86cd67efe7e->leave($__internal_de275a092f895112d80ef67acc1ed5067763395518886583b8d1a86cd67efe7e_prof);

        
        $__internal_0a7c61e686c7b763d0f7ac260ad1236378403e44f7fa137e52086ba5f44b074c->leave($__internal_0a7c61e686c7b763d0f7ac260ad1236378403e44f7fa137e52086ba5f44b074c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
