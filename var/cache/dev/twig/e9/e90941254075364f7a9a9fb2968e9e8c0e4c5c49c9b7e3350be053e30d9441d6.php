<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b8e379b69d12cc72b2b22984e0dea784620252126f63db6ec8b7973f906ccd06 extends Twig_Template
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
        $__internal_729503ffa1d50370065391afa8b13510a89f8205a9cc024bee9650b6d32f41a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729503ffa1d50370065391afa8b13510a89f8205a9cc024bee9650b6d32f41a4->enter($__internal_729503ffa1d50370065391afa8b13510a89f8205a9cc024bee9650b6d32f41a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2b04a57d21c1b02adeafdf2adee9031a64f08ed5b1026dba5089edf86a2bae3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b04a57d21c1b02adeafdf2adee9031a64f08ed5b1026dba5089edf86a2bae3d->enter($__internal_2b04a57d21c1b02adeafdf2adee9031a64f08ed5b1026dba5089edf86a2bae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_729503ffa1d50370065391afa8b13510a89f8205a9cc024bee9650b6d32f41a4->leave($__internal_729503ffa1d50370065391afa8b13510a89f8205a9cc024bee9650b6d32f41a4_prof);

        
        $__internal_2b04a57d21c1b02adeafdf2adee9031a64f08ed5b1026dba5089edf86a2bae3d->leave($__internal_2b04a57d21c1b02adeafdf2adee9031a64f08ed5b1026dba5089edf86a2bae3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
