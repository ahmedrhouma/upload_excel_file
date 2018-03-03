<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4e47453afb2bc701fc1166fc368c930d1a9676bf9226c46de278951efaf072bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cd9ade2a87066f9ab495388db43e583cf8dc9b8a0ad966e82bb21dc04e4bae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd9ade2a87066f9ab495388db43e583cf8dc9b8a0ad966e82bb21dc04e4bae8->enter($__internal_7cd9ade2a87066f9ab495388db43e583cf8dc9b8a0ad966e82bb21dc04e4bae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a5b5bf930305c28a6f6cb54037a3721507640778614b7f1aa3ec6d4f208aeb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b5bf930305c28a6f6cb54037a3721507640778614b7f1aa3ec6d4f208aeb5a->enter($__internal_a5b5bf930305c28a6f6cb54037a3721507640778614b7f1aa3ec6d4f208aeb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7cd9ade2a87066f9ab495388db43e583cf8dc9b8a0ad966e82bb21dc04e4bae8->leave($__internal_7cd9ade2a87066f9ab495388db43e583cf8dc9b8a0ad966e82bb21dc04e4bae8_prof);

        
        $__internal_a5b5bf930305c28a6f6cb54037a3721507640778614b7f1aa3ec6d4f208aeb5a->leave($__internal_a5b5bf930305c28a6f6cb54037a3721507640778614b7f1aa3ec6d4f208aeb5a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d603a2fadea7cff0333b5ce554e8224230095b43224e8a4ce35ef88a7c814214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d603a2fadea7cff0333b5ce554e8224230095b43224e8a4ce35ef88a7c814214->enter($__internal_d603a2fadea7cff0333b5ce554e8224230095b43224e8a4ce35ef88a7c814214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c13e55d183b437612c008c41cfa60076e4041a436a03c85b28fe05decc49a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c13e55d183b437612c008c41cfa60076e4041a436a03c85b28fe05decc49a0a->enter($__internal_5c13e55d183b437612c008c41cfa60076e4041a436a03c85b28fe05decc49a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c13e55d183b437612c008c41cfa60076e4041a436a03c85b28fe05decc49a0a->leave($__internal_5c13e55d183b437612c008c41cfa60076e4041a436a03c85b28fe05decc49a0a_prof);

        
        $__internal_d603a2fadea7cff0333b5ce554e8224230095b43224e8a4ce35ef88a7c814214->leave($__internal_d603a2fadea7cff0333b5ce554e8224230095b43224e8a4ce35ef88a7c814214_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
