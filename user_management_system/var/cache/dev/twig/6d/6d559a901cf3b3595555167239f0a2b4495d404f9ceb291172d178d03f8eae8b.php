<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_cfde94a80533b88920c744d8a797a8701c6d6543a69c60d662a20035039ee0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfde94a80533b88920c744d8a797a8701c6d6543a69c60d662a20035039ee0c4->enter($__internal_cfde94a80533b88920c744d8a797a8701c6d6543a69c60d662a20035039ee0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0450465b338d0f41bd0f1e41a128e1343c77c4bfcc771323eaf54dfde3b89382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0450465b338d0f41bd0f1e41a128e1343c77c4bfcc771323eaf54dfde3b89382->enter($__internal_0450465b338d0f41bd0f1e41a128e1343c77c4bfcc771323eaf54dfde3b89382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cfde94a80533b88920c744d8a797a8701c6d6543a69c60d662a20035039ee0c4->leave($__internal_cfde94a80533b88920c744d8a797a8701c6d6543a69c60d662a20035039ee0c4_prof);

        
        $__internal_0450465b338d0f41bd0f1e41a128e1343c77c4bfcc771323eaf54dfde3b89382->leave($__internal_0450465b338d0f41bd0f1e41a128e1343c77c4bfcc771323eaf54dfde3b89382_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/asp-lamp-training/user_management_system/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
