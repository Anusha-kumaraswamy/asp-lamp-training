<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1d05f98fdfaa043e8ab489ffde644be9df0d792bd9faea595ccb3ac8ea4f9f78 extends Twig_Template
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
        $__internal_70a9399ec06650a00d0c96b56089cda02347edd227f3d9a8b6ae885259c1e6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a9399ec06650a00d0c96b56089cda02347edd227f3d9a8b6ae885259c1e6ee->enter($__internal_70a9399ec06650a00d0c96b56089cda02347edd227f3d9a8b6ae885259c1e6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ea71712748af2a2b13a3fc796edf55ca37ecc938d9f5cf1fe6e05e81ab32f698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea71712748af2a2b13a3fc796edf55ca37ecc938d9f5cf1fe6e05e81ab32f698->enter($__internal_ea71712748af2a2b13a3fc796edf55ca37ecc938d9f5cf1fe6e05e81ab32f698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_70a9399ec06650a00d0c96b56089cda02347edd227f3d9a8b6ae885259c1e6ee->leave($__internal_70a9399ec06650a00d0c96b56089cda02347edd227f3d9a8b6ae885259c1e6ee_prof);

        
        $__internal_ea71712748af2a2b13a3fc796edf55ca37ecc938d9f5cf1fe6e05e81ab32f698->leave($__internal_ea71712748af2a2b13a3fc796edf55ca37ecc938d9f5cf1fe6e05e81ab32f698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
