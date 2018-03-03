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
        $__internal_1c0da4e54a355461164b1968b57e37590e67ee4a28291952304b9e4f9b89a453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0da4e54a355461164b1968b57e37590e67ee4a28291952304b9e4f9b89a453->enter($__internal_1c0da4e54a355461164b1968b57e37590e67ee4a28291952304b9e4f9b89a453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_48428f110adc37528d941828a84efd3d3627eaa32d6a06a070cdff5f6e6cc790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48428f110adc37528d941828a84efd3d3627eaa32d6a06a070cdff5f6e6cc790->enter($__internal_48428f110adc37528d941828a84efd3d3627eaa32d6a06a070cdff5f6e6cc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1c0da4e54a355461164b1968b57e37590e67ee4a28291952304b9e4f9b89a453->leave($__internal_1c0da4e54a355461164b1968b57e37590e67ee4a28291952304b9e4f9b89a453_prof);

        
        $__internal_48428f110adc37528d941828a84efd3d3627eaa32d6a06a070cdff5f6e6cc790->leave($__internal_48428f110adc37528d941828a84efd3d3627eaa32d6a06a070cdff5f6e6cc790_prof);

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
