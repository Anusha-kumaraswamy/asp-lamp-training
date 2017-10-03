<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ea71483a7867bbfd3266c55bad7c36b86623d293f4557ff4b6d0d791952594cc extends Twig_Template
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
        $__internal_196176221fbe82a8c99874119e247f3fc15022fb1ef7c8b81e56fb5335a3a4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196176221fbe82a8c99874119e247f3fc15022fb1ef7c8b81e56fb5335a3a4f4->enter($__internal_196176221fbe82a8c99874119e247f3fc15022fb1ef7c8b81e56fb5335a3a4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_44b576871160a67ff61886299c1911cdc4b85bea3a2d714ba9e4b88f0c34f331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b576871160a67ff61886299c1911cdc4b85bea3a2d714ba9e4b88f0c34f331->enter($__internal_44b576871160a67ff61886299c1911cdc4b85bea3a2d714ba9e4b88f0c34f331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_196176221fbe82a8c99874119e247f3fc15022fb1ef7c8b81e56fb5335a3a4f4->leave($__internal_196176221fbe82a8c99874119e247f3fc15022fb1ef7c8b81e56fb5335a3a4f4_prof);

        
        $__internal_44b576871160a67ff61886299c1911cdc4b85bea3a2d714ba9e4b88f0c34f331->leave($__internal_44b576871160a67ff61886299c1911cdc4b85bea3a2d714ba9e4b88f0c34f331_prof);

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
