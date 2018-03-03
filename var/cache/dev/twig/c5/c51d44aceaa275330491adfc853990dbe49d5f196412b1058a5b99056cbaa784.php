<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_bac681a9bd4e316c00f0d629e72c5c036300e3ee5eddeacc43e66737fefcaf75 extends Twig_Template
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
        $__internal_cbbe988c8f5f43669730db1b021a64751001a8215e826b1193ea4b8f4db88507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbe988c8f5f43669730db1b021a64751001a8215e826b1193ea4b8f4db88507->enter($__internal_cbbe988c8f5f43669730db1b021a64751001a8215e826b1193ea4b8f4db88507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2f9c1027bb0da93c1b71094cc48334d7040c8f53b356f21269c6157ce2e0bfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9c1027bb0da93c1b71094cc48334d7040c8f53b356f21269c6157ce2e0bfc1->enter($__internal_2f9c1027bb0da93c1b71094cc48334d7040c8f53b356f21269c6157ce2e0bfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cbbe988c8f5f43669730db1b021a64751001a8215e826b1193ea4b8f4db88507->leave($__internal_cbbe988c8f5f43669730db1b021a64751001a8215e826b1193ea4b8f4db88507_prof);

        
        $__internal_2f9c1027bb0da93c1b71094cc48334d7040c8f53b356f21269c6157ce2e0bfc1->leave($__internal_2f9c1027bb0da93c1b71094cc48334d7040c8f53b356f21269c6157ce2e0bfc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
