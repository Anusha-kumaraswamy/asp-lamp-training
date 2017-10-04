<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_62dfe2879eea605e9372f4ef27eacebc1322ce1d74fd5ab49e07d8a55f114c9d extends Twig_Template
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
        $__internal_4b694bd6ba84098c6597f38a8068abb30e15c20e1d1f1515d3a930a8fd0dfb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b694bd6ba84098c6597f38a8068abb30e15c20e1d1f1515d3a930a8fd0dfb1c->enter($__internal_4b694bd6ba84098c6597f38a8068abb30e15c20e1d1f1515d3a930a8fd0dfb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dfaf54fcece3318963d12bc4a130f16b7e9d78ab3d78ce602374caf708bd646b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaf54fcece3318963d12bc4a130f16b7e9d78ab3d78ce602374caf708bd646b->enter($__internal_dfaf54fcece3318963d12bc4a130f16b7e9d78ab3d78ce602374caf708bd646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4b694bd6ba84098c6597f38a8068abb30e15c20e1d1f1515d3a930a8fd0dfb1c->leave($__internal_4b694bd6ba84098c6597f38a8068abb30e15c20e1d1f1515d3a930a8fd0dfb1c_prof);

        
        $__internal_dfaf54fcece3318963d12bc4a130f16b7e9d78ab3d78ce602374caf708bd646b->leave($__internal_dfaf54fcece3318963d12bc4a130f16b7e9d78ab3d78ce602374caf708bd646b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
