<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_934560b0375711eb1e847faeb146bebac50f419a17101cced1f7bea531a1ad80 extends Twig_Template
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
        $__internal_5e8fa4e684dfb10a2d5e321c497e9ab93bafa2c43c863d17b46f98d1c624d7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8fa4e684dfb10a2d5e321c497e9ab93bafa2c43c863d17b46f98d1c624d7f4->enter($__internal_5e8fa4e684dfb10a2d5e321c497e9ab93bafa2c43c863d17b46f98d1c624d7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_306aa820e5dbfc93c54ab1fc554a6132ace4fbbdae3c2346b387ae89f0844d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306aa820e5dbfc93c54ab1fc554a6132ace4fbbdae3c2346b387ae89f0844d10->enter($__internal_306aa820e5dbfc93c54ab1fc554a6132ace4fbbdae3c2346b387ae89f0844d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5e8fa4e684dfb10a2d5e321c497e9ab93bafa2c43c863d17b46f98d1c624d7f4->leave($__internal_5e8fa4e684dfb10a2d5e321c497e9ab93bafa2c43c863d17b46f98d1c624d7f4_prof);

        
        $__internal_306aa820e5dbfc93c54ab1fc554a6132ace4fbbdae3c2346b387ae89f0844d10->leave($__internal_306aa820e5dbfc93c54ab1fc554a6132ace4fbbdae3c2346b387ae89f0844d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
