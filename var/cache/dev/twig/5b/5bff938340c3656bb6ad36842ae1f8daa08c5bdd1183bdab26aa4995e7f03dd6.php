<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0e46d1b8e73c0d1a2176e49724e968ec977879d272c768edb9b404eb5bce9471 extends Twig_Template
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
        $__internal_f89771e23a02e87643412c8f7f02c0fbe1d9f725009f6635245d95c1cbc3b1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89771e23a02e87643412c8f7f02c0fbe1d9f725009f6635245d95c1cbc3b1c0->enter($__internal_f89771e23a02e87643412c8f7f02c0fbe1d9f725009f6635245d95c1cbc3b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_420664d88a3f57b1cdbd41a9be712b47934de25444008e0aabf75968bdea5100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420664d88a3f57b1cdbd41a9be712b47934de25444008e0aabf75968bdea5100->enter($__internal_420664d88a3f57b1cdbd41a9be712b47934de25444008e0aabf75968bdea5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f89771e23a02e87643412c8f7f02c0fbe1d9f725009f6635245d95c1cbc3b1c0->leave($__internal_f89771e23a02e87643412c8f7f02c0fbe1d9f725009f6635245d95c1cbc3b1c0_prof);

        
        $__internal_420664d88a3f57b1cdbd41a9be712b47934de25444008e0aabf75968bdea5100->leave($__internal_420664d88a3f57b1cdbd41a9be712b47934de25444008e0aabf75968bdea5100_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
