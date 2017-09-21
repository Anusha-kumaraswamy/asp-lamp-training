<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_3e1c9b2d3843e5f2a6330531a024c422673732c55f7e18aa338c7c4cb6a49592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1c9b2d3843e5f2a6330531a024c422673732c55f7e18aa338c7c4cb6a49592->enter($__internal_3e1c9b2d3843e5f2a6330531a024c422673732c55f7e18aa338c7c4cb6a49592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bc3b02279265ed4e069f792beb2699fd14f3281bf6b1bc9a1c05cc1851f2dedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3b02279265ed4e069f792beb2699fd14f3281bf6b1bc9a1c05cc1851f2dedf->enter($__internal_bc3b02279265ed4e069f792beb2699fd14f3281bf6b1bc9a1c05cc1851f2dedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3e1c9b2d3843e5f2a6330531a024c422673732c55f7e18aa338c7c4cb6a49592->leave($__internal_3e1c9b2d3843e5f2a6330531a024c422673732c55f7e18aa338c7c4cb6a49592_prof);

        
        $__internal_bc3b02279265ed4e069f792beb2699fd14f3281bf6b1bc9a1c05cc1851f2dedf->leave($__internal_bc3b02279265ed4e069f792beb2699fd14f3281bf6b1bc9a1c05cc1851f2dedf_prof);

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
