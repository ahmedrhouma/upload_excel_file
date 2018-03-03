<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_0a88c6fc518f4bd2c8952fad4687a588dde1175098c12f47ff8a857ae095f837 extends Twig_Template
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
        $__internal_c6b988121fe163f54bec680bc0d21ed40b69057b057fd25d7058aac3a729a157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b988121fe163f54bec680bc0d21ed40b69057b057fd25d7058aac3a729a157->enter($__internal_c6b988121fe163f54bec680bc0d21ed40b69057b057fd25d7058aac3a729a157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_f96c0d07610d9c9d33041fc722d52eb0197126083c9075144eca2069ce8d9139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96c0d07610d9c9d33041fc722d52eb0197126083c9075144eca2069ce8d9139->enter($__internal_f96c0d07610d9c9d33041fc722d52eb0197126083c9075144eca2069ce8d9139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c6b988121fe163f54bec680bc0d21ed40b69057b057fd25d7058aac3a729a157->leave($__internal_c6b988121fe163f54bec680bc0d21ed40b69057b057fd25d7058aac3a729a157_prof);

        
        $__internal_f96c0d07610d9c9d33041fc722d52eb0197126083c9075144eca2069ce8d9139->leave($__internal_f96c0d07610d9c9d33041fc722d52eb0197126083c9075144eca2069ce8d9139_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
