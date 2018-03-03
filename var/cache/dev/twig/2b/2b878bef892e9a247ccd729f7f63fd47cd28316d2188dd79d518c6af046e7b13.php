<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_162b75f44439cd1a0cc6021ec044e282e31ec3311ec38d9a999238fd00546597 extends Twig_Template
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
        $__internal_faa939259ab1e6dafb8c6de98ae55d853d4357105254f2d557974740e41face6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa939259ab1e6dafb8c6de98ae55d853d4357105254f2d557974740e41face6->enter($__internal_faa939259ab1e6dafb8c6de98ae55d853d4357105254f2d557974740e41face6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2094889536b9ce4700d3a53fd1739a57708cf5d93ff964b87d1be67d0d361e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2094889536b9ce4700d3a53fd1739a57708cf5d93ff964b87d1be67d0d361e40->enter($__internal_2094889536b9ce4700d3a53fd1739a57708cf5d93ff964b87d1be67d0d361e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_faa939259ab1e6dafb8c6de98ae55d853d4357105254f2d557974740e41face6->leave($__internal_faa939259ab1e6dafb8c6de98ae55d853d4357105254f2d557974740e41face6_prof);

        
        $__internal_2094889536b9ce4700d3a53fd1739a57708cf5d93ff964b87d1be67d0d361e40->leave($__internal_2094889536b9ce4700d3a53fd1739a57708cf5d93ff964b87d1be67d0d361e40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
