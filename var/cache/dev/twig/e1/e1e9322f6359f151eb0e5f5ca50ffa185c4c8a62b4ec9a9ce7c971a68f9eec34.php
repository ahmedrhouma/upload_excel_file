<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_a345effac9ceaf8d48e1738f1fba82f0d3fe0634485f9992e32eca0ce49b06cc extends Twig_Template
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
        $__internal_252a0b473caddee37ea9c5da6d95a94ba8cec06c567c958f42417a0ee72a6bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252a0b473caddee37ea9c5da6d95a94ba8cec06c567c958f42417a0ee72a6bfd->enter($__internal_252a0b473caddee37ea9c5da6d95a94ba8cec06c567c958f42417a0ee72a6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_48c4b2922db65203618bad6f50c613c13dd2fea0419847b582e6e023ffa489ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c4b2922db65203618bad6f50c613c13dd2fea0419847b582e6e023ffa489ca->enter($__internal_48c4b2922db65203618bad6f50c613c13dd2fea0419847b582e6e023ffa489ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_252a0b473caddee37ea9c5da6d95a94ba8cec06c567c958f42417a0ee72a6bfd->leave($__internal_252a0b473caddee37ea9c5da6d95a94ba8cec06c567c958f42417a0ee72a6bfd_prof);

        
        $__internal_48c4b2922db65203618bad6f50c613c13dd2fea0419847b582e6e023ffa489ca->leave($__internal_48c4b2922db65203618bad6f50c613c13dd2fea0419847b582e6e023ffa489ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}
