<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_89ae4e426b87417cfa08d37488f02c7a96f2bf9549ffefd6a41469211889c67c extends Twig_Template
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
        $__internal_597b04b376df9d23fae5a995209d8c7e827ebf9d863fde9aae2a0e5e04e01add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597b04b376df9d23fae5a995209d8c7e827ebf9d863fde9aae2a0e5e04e01add->enter($__internal_597b04b376df9d23fae5a995209d8c7e827ebf9d863fde9aae2a0e5e04e01add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_703aed2e7a2f5d462b5ee4720cecd957d2faf77885e9cd750910bd5c638e4828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703aed2e7a2f5d462b5ee4720cecd957d2faf77885e9cd750910bd5c638e4828->enter($__internal_703aed2e7a2f5d462b5ee4720cecd957d2faf77885e9cd750910bd5c638e4828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_597b04b376df9d23fae5a995209d8c7e827ebf9d863fde9aae2a0e5e04e01add->leave($__internal_597b04b376df9d23fae5a995209d8c7e827ebf9d863fde9aae2a0e5e04e01add_prof);

        
        $__internal_703aed2e7a2f5d462b5ee4720cecd957d2faf77885e9cd750910bd5c638e4828->leave($__internal_703aed2e7a2f5d462b5ee4720cecd957d2faf77885e9cd750910bd5c638e4828_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
