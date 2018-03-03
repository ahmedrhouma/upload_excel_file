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
        $__internal_c698da644e55c599362e977d275c87dedc5762e8d99427d6948432d4880d9f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c698da644e55c599362e977d275c87dedc5762e8d99427d6948432d4880d9f00->enter($__internal_c698da644e55c599362e977d275c87dedc5762e8d99427d6948432d4880d9f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_11a1545ab6b11141f68ad35429ec3cff1160f3c01d9d6eb810bcfd8d787cc293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a1545ab6b11141f68ad35429ec3cff1160f3c01d9d6eb810bcfd8d787cc293->enter($__internal_11a1545ab6b11141f68ad35429ec3cff1160f3c01d9d6eb810bcfd8d787cc293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c698da644e55c599362e977d275c87dedc5762e8d99427d6948432d4880d9f00->leave($__internal_c698da644e55c599362e977d275c87dedc5762e8d99427d6948432d4880d9f00_prof);

        
        $__internal_11a1545ab6b11141f68ad35429ec3cff1160f3c01d9d6eb810bcfd8d787cc293->leave($__internal_11a1545ab6b11141f68ad35429ec3cff1160f3c01d9d6eb810bcfd8d787cc293_prof);

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
