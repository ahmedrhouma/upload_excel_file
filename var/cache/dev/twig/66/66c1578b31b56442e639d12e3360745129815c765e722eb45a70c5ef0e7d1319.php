<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f9691b9214c46e6771c06bdac24581b3ab7715c06447c2b04a5e25d59b8cf6ad extends Twig_Template
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
        $__internal_ab3c62b1917829d3bed48932f54bffb78cb6156a78147b4f0bc1356d06d81541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3c62b1917829d3bed48932f54bffb78cb6156a78147b4f0bc1356d06d81541->enter($__internal_ab3c62b1917829d3bed48932f54bffb78cb6156a78147b4f0bc1356d06d81541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dae3e23e971028db544f9fbc752bfa2c0dab7e3add6b6692d806f089ce2a9234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae3e23e971028db544f9fbc752bfa2c0dab7e3add6b6692d806f089ce2a9234->enter($__internal_dae3e23e971028db544f9fbc752bfa2c0dab7e3add6b6692d806f089ce2a9234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ab3c62b1917829d3bed48932f54bffb78cb6156a78147b4f0bc1356d06d81541->leave($__internal_ab3c62b1917829d3bed48932f54bffb78cb6156a78147b4f0bc1356d06d81541_prof);

        
        $__internal_dae3e23e971028db544f9fbc752bfa2c0dab7e3add6b6692d806f089ce2a9234->leave($__internal_dae3e23e971028db544f9fbc752bfa2c0dab7e3add6b6692d806f089ce2a9234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
