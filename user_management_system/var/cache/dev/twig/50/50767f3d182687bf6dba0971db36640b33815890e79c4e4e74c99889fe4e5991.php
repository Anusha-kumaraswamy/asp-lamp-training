<?php

/* UserBundle:User:form.html.twig */
class __TwigTemplate_08f0ef584083aaf54e3000ce6db9d48bd74340a81a82b31bbb2cf4543de158f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:form.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a10aa60337ab5e667877922706dd6b4b516450809010a94ca7b40f79ea03d473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10aa60337ab5e667877922706dd6b4b516450809010a94ca7b40f79ea03d473->enter($__internal_a10aa60337ab5e667877922706dd6b4b516450809010a94ca7b40f79ea03d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $__internal_04a302e405e90ae27b757d58de5c6bcb9ed64547ee3389d9f6d9c78b3dcd538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a302e405e90ae27b757d58de5c6bcb9ed64547ee3389d9f6d9c78b3dcd538c->enter($__internal_04a302e405e90ae27b757d58de5c6bcb9ed64547ee3389d9f6d9c78b3dcd538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10aa60337ab5e667877922706dd6b4b516450809010a94ca7b40f79ea03d473->leave($__internal_a10aa60337ab5e667877922706dd6b4b516450809010a94ca7b40f79ea03d473_prof);

        
        $__internal_04a302e405e90ae27b757d58de5c6bcb9ed64547ee3389d9f6d9c78b3dcd538c->leave($__internal_04a302e405e90ae27b757d58de5c6bcb9ed64547ee3389d9f6d9c78b3dcd538c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68d7f03cc8d092b1541b66cd2a07a44a956aa8889bfde442ea4ddf11f7c3e5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d7f03cc8d092b1541b66cd2a07a44a956aa8889bfde442ea4ddf11f7c3e5e8->enter($__internal_68d7f03cc8d092b1541b66cd2a07a44a956aa8889bfde442ea4ddf11f7c3e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ee8fa3d59b2bb36d71ea15d3c5525904148d008a9b1bc555bb59ecd5f982f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee8fa3d59b2bb36d71ea15d3c5525904148d008a9b1bc555bb59ecd5f982f08->enter($__internal_4ee8fa3d59b2bb36d71ea15d3c5525904148d008a9b1bc555bb59ecd5f982f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_4ee8fa3d59b2bb36d71ea15d3c5525904148d008a9b1bc555bb59ecd5f982f08->leave($__internal_4ee8fa3d59b2bb36d71ea15d3c5525904148d008a9b1bc555bb59ecd5f982f08_prof);

        
        $__internal_68d7f03cc8d092b1541b66cd2a07a44a956aa8889bfde442ea4ddf11f7c3e5e8->leave($__internal_68d7f03cc8d092b1541b66cd2a07a44a956aa8889bfde442ea4ddf11f7c3e5e8_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98d3988458842b07a466c1d88712c5ccc1efa514e43317aeca2c1eeb66b7a057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d3988458842b07a466c1d88712c5ccc1efa514e43317aeca2c1eeb66b7a057->enter($__internal_98d3988458842b07a466c1d88712c5ccc1efa514e43317aeca2c1eeb66b7a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c97a9f59b1f7d063767e59a3e5f4bd5ac5a3f7ffa9b057c941c455e3cb0477e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97a9f59b1f7d063767e59a3e5f4bd5ac5a3f7ffa9b057c941c455e3cb0477e9->enter($__internal_c97a9f59b1f7d063767e59a3e5f4bd5ac5a3f7ffa9b057c941c455e3cb0477e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
    body {
        color : red;
    }
    ";
        
        $__internal_c97a9f59b1f7d063767e59a3e5f4bd5ac5a3f7ffa9b057c941c455e3cb0477e9->leave($__internal_c97a9f59b1f7d063767e59a3e5f4bd5ac5a3f7ffa9b057c941c455e3cb0477e9_prof);

        
        $__internal_98d3988458842b07a466c1d88712c5ccc1efa514e43317aeca2c1eeb66b7a057->leave($__internal_98d3988458842b07a466c1d88712c5ccc1efa514e43317aeca2c1eeb66b7a057_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b63d97f4c74b957749419cb59e86d7872f20b3548452da7b837edfa36aff7180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63d97f4c74b957749419cb59e86d7872f20b3548452da7b837edfa36aff7180->enter($__internal_b63d97f4c74b957749419cb59e86d7872f20b3548452da7b837edfa36aff7180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a216c6fde6b281253edf628a3414068b613ab534d1fc3eb28649c208ae9582f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a216c6fde6b281253edf628a3414068b613ab534d1fc3eb28649c208ae9582f9->enter($__internal_a216c6fde6b281253edf628a3414068b613ab534d1fc3eb28649c208ae9582f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 183
        echo "        
    ";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a216c6fde6b281253edf628a3414068b613ab534d1fc3eb28649c208ae9582f9->leave($__internal_a216c6fde6b281253edf628a3414068b613ab534d1fc3eb28649c208ae9582f9_prof);

        
        $__internal_b63d97f4c74b957749419cb59e86d7872f20b3548452da7b837edfa36aff7180->leave($__internal_b63d97f4c74b957749419cb59e86d7872f20b3548452da7b837edfa36aff7180_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_5592638213dacc14a2071da1a7c4313d7368b018eeb28aa4829caba46e6aa620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5592638213dacc14a2071da1a7c4313d7368b018eeb28aa4829caba46e6aa620->enter($__internal_5592638213dacc14a2071da1a7c4313d7368b018eeb28aa4829caba46e6aa620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_383ae33e1e8db533a56574f0cf58a588f2226b89716023ba12d0b5bafb49c924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383ae33e1e8db533a56574f0cf58a588f2226b89716023ba12d0b5bafb49c924->enter($__internal_383ae33e1e8db533a56574f0cf58a588f2226b89716023ba12d0b5bafb49c924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_383ae33e1e8db533a56574f0cf58a588f2226b89716023ba12d0b5bafb49c924->leave($__internal_383ae33e1e8db533a56574f0cf58a588f2226b89716023ba12d0b5bafb49c924_prof);

        
        $__internal_5592638213dacc14a2071da1a7c4313d7368b018eeb28aa4829caba46e6aa620->leave($__internal_5592638213dacc14a2071da1a7c4313d7368b018eeb28aa4829caba46e6aa620_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_cb2e55b990ee03dd724bd5b7e113e4b8e73bd7aa8f52666bdcddd0a7764c218a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2e55b990ee03dd724bd5b7e113e4b8e73bd7aa8f52666bdcddd0a7764c218a->enter($__internal_cb2e55b990ee03dd724bd5b7e113e4b8e73bd7aa8f52666bdcddd0a7764c218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_da5ce3b4c38c843ed7f0e533397429710df0f400c7e8083c2d4b5ba34d2f306e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5ce3b4c38c843ed7f0e533397429710df0f400c7e8083c2d4b5ba34d2f306e->enter($__internal_da5ce3b4c38c843ed7f0e533397429710df0f400c7e8083c2d4b5ba34d2f306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "        <table>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            <tr>
                <td>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loginName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'label');
        echo "
                </td>
                <td>
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'widget');
        echo "
                </td>
                <td>
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'errors');
        echo "
                </td>
            </tr>
            </table>
            
            <div>
                <table>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 90
            echo "                <tr>
                ";
            // line 94
            echo "                <td>
                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </table>
            </div>
            
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailIds", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            <div>
                <table>
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 111
            echo "                <tr>
                <td>
                ";
            // line 113
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'label');
            echo "
                </td>
                <td>
                ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["number"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </table>
            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobileNumbers", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">            
            
            <div>
                <table border=\"ridge\">
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduationLevel"]) {
            // line 131
            echo "                <tr>
                <td>
                ";
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'label');
            echo "
                </td>
                <td>
                ";
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'widget');
            echo "
                </td>
                <td>
                ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "graduation", array()), 'errors');
            echo "
                </td>
                </tr>
                <tr>
                <td>
                ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'label');
            echo "
                </td>
                <td>
                ";
            // line 147
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'widget');
            echo "
                </td>
                <td>
                ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["graduationLevel"], "instituteName", array()), 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduationLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </table>
            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">  
            
            <div>
                <table border=\"ridge\" >
            ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["areaOfInterest"]) {
            // line 162
            echo "                <tr>
                <td>
                ";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'label');
            echo "
                </td>
                <td>
                ";
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'widget');
            echo "
                </td>
                <td>
                ";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["areaOfInterest"], 'errors');
            echo "
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaOfInterest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                </table>
            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interests", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "register", array()), 'row');
        echo "
        ";
        // line 180
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
    ";
        
        $__internal_da5ce3b4c38c843ed7f0e533397429710df0f400c7e8083c2d4b5ba34d2f306e->leave($__internal_da5ce3b4c38c843ed7f0e533397429710df0f400c7e8083c2d4b5ba34d2f306e_prof);

        
        $__internal_cb2e55b990ee03dd724bd5b7e113e4b8e73bd7aa8f52666bdcddd0a7764c218a->leave($__internal_cb2e55b990ee03dd724bd5b7e113e4b8e73bd7aa8f52666bdcddd0a7764c218a_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3da52fc636ed2693878baa980d16325e94d857391a192807baab0306ab08cd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da52fc636ed2693878baa980d16325e94d857391a192807baab0306ab08cd9a->enter($__internal_3da52fc636ed2693878baa980d16325e94d857391a192807baab0306ab08cd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_029ec3e2838cd7831b0120f3c838f80927f58f8292de8b409bf5ef0f262ceac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029ec3e2838cd7831b0120f3c838f80927f58f8292de8b409bf5ef0f262ceac1->enter($__internal_029ec3e2838cd7831b0120f3c838f80927f58f8292de8b409bf5ef0f262ceac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">       
        </script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\">
        </script>
        <script>
            \$(document).ready(function() {
            var today = new Date();
            var currentYear = today.getFullYear();
            //var rangeLimit = currentYear-18;
            \$(\".js-datepicker\").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: '1980:'+currentYear,
            });
        </script>    
        <script>
            ";
        // line 209
        echo "            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                var prevElement = field.previousElementSibling;               
                var newFieldId = prevElement.querySelectorAll(\"p\").length;
                var removeButton = document.createElement(\"input\");
                removeButton.setAttribute(\"type\",\"button\");
                removeButton.setAttribute(\"onclick\",\"removeField(this)\");
                removeButton.setAttribute(\"value\", \"-\");
                newField = newField.replace(/__name__/g,newFieldId);                
                var newPTag = document.createElement(\"p\");        
                newPTag.innerHTML= newField;
                newPTag.appendChild(removeButton);
                prevElement.appendChild(newPTag);
            }
            function removeField(field)
            {
                if(field.parentElement.parentElement.querySelectorAll(\"p\").length>1) {
                    field.parentElement.remove();
                }
            }
        </script>   
    ";
        
        $__internal_029ec3e2838cd7831b0120f3c838f80927f58f8292de8b409bf5ef0f262ceac1->leave($__internal_029ec3e2838cd7831b0120f3c838f80927f58f8292de8b409bf5ef0f262ceac1_prof);

        
        $__internal_3da52fc636ed2693878baa980d16325e94d857391a192807baab0306ab08cd9a->leave($__internal_3da52fc636ed2693878baa980d16325e94d857391a192807baab0306ab08cd9a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 209,  486 => 185,  477 => 184,  464 => 180,  460 => 179,  455 => 177,  450 => 174,  440 => 170,  434 => 167,  428 => 164,  424 => 162,  420 => 161,  413 => 157,  408 => 154,  398 => 150,  392 => 147,  386 => 144,  378 => 139,  372 => 136,  366 => 133,  362 => 131,  358 => 130,  351 => 126,  346 => 123,  336 => 119,  330 => 116,  324 => 113,  320 => 111,  316 => 110,  309 => 106,  303 => 102,  293 => 98,  287 => 95,  284 => 94,  281 => 90,  277 => 89,  267 => 82,  261 => 79,  255 => 76,  247 => 71,  241 => 68,  235 => 65,  227 => 60,  221 => 57,  215 => 54,  207 => 49,  201 => 46,  195 => 43,  187 => 38,  181 => 35,  175 => 32,  167 => 27,  161 => 24,  155 => 21,  149 => 18,  146 => 17,  137 => 16,  124 => 14,  115 => 13,  105 => 184,  102 => 183,  99 => 16,  96 => 13,  87 => 12,  73 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block head %}
    {% block stylesheets %}
    
    body {
        color : red;
    }
    {% endblock %}
{% endblock %}

{% block body %}
    {% block navbar %}
        {{ parent() }}
    {% endblock %}
    {% block form %}
        <table>
        {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' }}) }}
            <tr>
                <td>
                {{ form_label(form.loginName)  }}
                </td>
                <td>
                {{ form_widget(form.loginName) }}
                </td>
                <td>
                {{ form_errors(form.loginName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.firstName)  }}
                </td>
                <td>
                {{ form_widget(form.firstName) }}
                </td>
                <td>
                {{ form_errors(form.firstName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.lastName)  }}
                </td>
                <td>
                {{ form_widget(form.lastName) }}
                </td>
                <td>
                {{ form_errors(form.lastName) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.dateOfBirth)  }}
                </td>
                <td>
                {{ form_widget(form.dateOfBirth) }}
                </td>
                <td>
                {{ form_errors(form.dateOfBirth) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.gender)  }}
                </td>
                <td>
                {{ form_widget(form.gender) }}
                </td>
                <td>
                {{ form_errors(form.gender) }}
                </td>
            </tr>
            <tr>
                <td>
                {{ form_label(form.bloodGroup)  }}
                </td>
                <td>
                {{ form_widget(form.bloodGroup) }}
                </td>
                <td>
                {{ form_errors(form.bloodGroup) }}
                </td>
            </tr>
            </table>
            
            <div>
                <table>
            {% for emailField in form.emailIds %}
                <tr>
                {#<td>
                {{ form_label(emailField)  }}
                </td>#}
                <td>
                {{ form_widget(emailField) }}
                </td>
                <td>
                {{ form_errors(emailField) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            
            <input type='button' id='addEmailId' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.emailIds.vars.prototype)|e}}\">
            
            <div>
                <table>
            {% for number in form.mobileNumbers %}
                <tr>
                <td>
                {{ form_label(number)  }}
                </td>
                <td>
                {{ form_widget(number) }}
                </td>
                <td>
                {{ form_errors(number) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            <input type='button' id='addMobileNumber' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.mobileNumbers.vars.prototype)|e}}\">            
            
            <div>
                <table border=\"ridge\">
            {% for graduationLevel in form.education %}
                <tr>
                <td>
                {{ form_label(graduationLevel.graduation)  }}
                </td>
                <td>
                {{ form_widget(graduationLevel.graduation) }}
                </td>
                <td>
                {{ form_errors(graduationLevel.graduation) }}
                </td>
                </tr>
                <tr>
                <td>
                {{ form_label(graduationLevel.instituteName)  }}
                </td>
                <td>
                {{ form_widget(graduationLevel.instituteName) }}
                </td>
                <td>
                {{ form_errors(graduationLevel.instituteName) }}
                </td>
                </tr>
            {% endfor %}
            </table>
            </div>
            <input type='button' id='addGraduation' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.education.vars.prototype)|e}}\">  
            
            <div>
                <table border=\"ridge\" >
            {% for areaOfInterest in form.interests %}
                <tr>
                <td>
                {{ form_label(areaOfInterest)  }}
                </td>
                <td>
                {{ form_widget(areaOfInterest) }}
                </td>
                <td>
                {{ form_errors(areaOfInterest) }}
                </td>
                </tr>
            {% endfor %}
                </table>
            </div>
            <input type='button' id='addAreaOfInterest' value='+' onclick='addField(this)'
               data-prototype=\"{{ form_widget(form.interests.vars.prototype)|e}}\">
            
            {{ form_row(form.register) }}
        {{ form_end(form) }}
        
    {% endblock %}
        
    {% block javascripts %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">       
        </script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\">
        </script>
        <script>
            \$(document).ready(function() {
            var today = new Date();
            var currentYear = today.getFullYear();
            //var rangeLimit = currentYear-18;
            \$(\".js-datepicker\").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: '1980:'+currentYear,
            });
        </script>    
        <script>
            {#window.onload = displayFields;
            function displayFields()
            {
                addField(document.getElementById(\"addEmailId\"));
                addField(document.getElementById(\"addMobileNumber\"));
                addField(document.getElementById(\"addGraduation\"));
                addField(document.getElementById(\"addAreaOfInterest\"));
            }#}
            function addField(field)
            {
                var newField = field.getAttribute('data-prototype');
                var prevElement = field.previousElementSibling;               
                var newFieldId = prevElement.querySelectorAll(\"p\").length;
                var removeButton = document.createElement(\"input\");
                removeButton.setAttribute(\"type\",\"button\");
                removeButton.setAttribute(\"onclick\",\"removeField(this)\");
                removeButton.setAttribute(\"value\", \"-\");
                newField = newField.replace(/__name__/g,newFieldId);                
                var newPTag = document.createElement(\"p\");        
                newPTag.innerHTML= newField;
                newPTag.appendChild(removeButton);
                prevElement.appendChild(newPTag);
            }
            function removeField(field)
            {
                if(field.parentElement.parentElement.querySelectorAll(\"p\").length>1) {
                    field.parentElement.remove();
                }
            }
        </script>   
    {% endblock %}
{% endblock %}", "UserBundle:User:form.html.twig", "/var/www/html/asp-lamp-training/user_management_system/src/UserBundle/Resources/views/User/form.html.twig");
    }
}
