<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1e9cc9eb85b8b3738f6c62193fd5af475ef48e8417993a0dbcc7278cb6fdb117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89009c4e8f7d5c9197e54d1b147b740278719e76657071850fe0d88124d23541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89009c4e8f7d5c9197e54d1b147b740278719e76657071850fe0d88124d23541->enter($__internal_89009c4e8f7d5c9197e54d1b147b740278719e76657071850fe0d88124d23541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f997a10ae66a7c8cfaa6fcbebdab1d48aaf5968abe5b13348a4b64c304a38e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f997a10ae66a7c8cfaa6fcbebdab1d48aaf5968abe5b13348a4b64c304a38e72->enter($__internal_f997a10ae66a7c8cfaa6fcbebdab1d48aaf5968abe5b13348a4b64c304a38e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89009c4e8f7d5c9197e54d1b147b740278719e76657071850fe0d88124d23541->leave($__internal_89009c4e8f7d5c9197e54d1b147b740278719e76657071850fe0d88124d23541_prof);

        
        $__internal_f997a10ae66a7c8cfaa6fcbebdab1d48aaf5968abe5b13348a4b64c304a38e72->leave($__internal_f997a10ae66a7c8cfaa6fcbebdab1d48aaf5968abe5b13348a4b64c304a38e72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6c478681f12e969d660c2e4dce86d76a4be0ffd58d00d36c642c90bdb95197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6c478681f12e969d660c2e4dce86d76a4be0ffd58d00d36c642c90bdb95197->enter($__internal_3e6c478681f12e969d660c2e4dce86d76a4be0ffd58d00d36c642c90bdb95197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_159009a72666bfcc28e87294a8f00aae8a6128c2056920845a57c5903a07e7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159009a72666bfcc28e87294a8f00aae8a6128c2056920845a57c5903a07e7ca->enter($__internal_159009a72666bfcc28e87294a8f00aae8a6128c2056920845a57c5903a07e7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_159009a72666bfcc28e87294a8f00aae8a6128c2056920845a57c5903a07e7ca->leave($__internal_159009a72666bfcc28e87294a8f00aae8a6128c2056920845a57c5903a07e7ca_prof);

        
        $__internal_3e6c478681f12e969d660c2e4dce86d76a4be0ffd58d00d36c642c90bdb95197->leave($__internal_3e6c478681f12e969d660c2e4dce86d76a4be0ffd58d00d36c642c90bdb95197_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3e04e0163a903049bee6a022ed1459098c71157ed60ebf849acc1fadb13252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3e04e0163a903049bee6a022ed1459098c71157ed60ebf849acc1fadb13252->enter($__internal_ff3e04e0163a903049bee6a022ed1459098c71157ed60ebf849acc1fadb13252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50d8609117a8f0082fab38b7630d7d4170b1931a0b33b8823c82b10646ca9a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d8609117a8f0082fab38b7630d7d4170b1931a0b33b8823c82b10646ca9a35->enter($__internal_50d8609117a8f0082fab38b7630d7d4170b1931a0b33b8823c82b10646ca9a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_50d8609117a8f0082fab38b7630d7d4170b1931a0b33b8823c82b10646ca9a35->leave($__internal_50d8609117a8f0082fab38b7630d7d4170b1931a0b33b8823c82b10646ca9a35_prof);

        
        $__internal_ff3e04e0163a903049bee6a022ed1459098c71157ed60ebf849acc1fadb13252->leave($__internal_ff3e04e0163a903049bee6a022ed1459098c71157ed60ebf849acc1fadb13252_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
