<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_996f432cea13a286459cae6c95f5a4eaca5d0d98d3e5039e9598825f41a8f15a extends Twig_Template
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
        $__internal_9e2a39a7112d6bbd41a4660f3c8e3e27b69e462ab829f9591a9f2c04070f43cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2a39a7112d6bbd41a4660f3c8e3e27b69e462ab829f9591a9f2c04070f43cc->enter($__internal_9e2a39a7112d6bbd41a4660f3c8e3e27b69e462ab829f9591a9f2c04070f43cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8e25e5de797015f63da6512f04c5041dff58f7333ecee5f072d169b1a6033fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e25e5de797015f63da6512f04c5041dff58f7333ecee5f072d169b1a6033fde->enter($__internal_8e25e5de797015f63da6512f04c5041dff58f7333ecee5f072d169b1a6033fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9e2a39a7112d6bbd41a4660f3c8e3e27b69e462ab829f9591a9f2c04070f43cc->leave($__internal_9e2a39a7112d6bbd41a4660f3c8e3e27b69e462ab829f9591a9f2c04070f43cc_prof);

        
        $__internal_8e25e5de797015f63da6512f04c5041dff58f7333ecee5f072d169b1a6033fde->leave($__internal_8e25e5de797015f63da6512f04c5041dff58f7333ecee5f072d169b1a6033fde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
