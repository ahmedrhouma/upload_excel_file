<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_76852d643d9d3e39453462b3b8700737f4430fc2259a48154fb41a1e5245712f extends Twig_Template
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
        $__internal_692e1caf23038ef92af36f6ecd94df4d104a7502f3d57ad66e59389b36a78017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692e1caf23038ef92af36f6ecd94df4d104a7502f3d57ad66e59389b36a78017->enter($__internal_692e1caf23038ef92af36f6ecd94df4d104a7502f3d57ad66e59389b36a78017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b0ea051aaa7c42e2409af278232c7ae4a19f6941beaacb7ddadf8336fe52baa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ea051aaa7c42e2409af278232c7ae4a19f6941beaacb7ddadf8336fe52baa8->enter($__internal_b0ea051aaa7c42e2409af278232c7ae4a19f6941beaacb7ddadf8336fe52baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_692e1caf23038ef92af36f6ecd94df4d104a7502f3d57ad66e59389b36a78017->leave($__internal_692e1caf23038ef92af36f6ecd94df4d104a7502f3d57ad66e59389b36a78017_prof);

        
        $__internal_b0ea051aaa7c42e2409af278232c7ae4a19f6941beaacb7ddadf8336fe52baa8->leave($__internal_b0ea051aaa7c42e2409af278232c7ae4a19f6941beaacb7ddadf8336fe52baa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
