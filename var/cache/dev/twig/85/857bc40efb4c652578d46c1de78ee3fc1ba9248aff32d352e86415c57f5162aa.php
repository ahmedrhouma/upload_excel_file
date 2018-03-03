<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_143ab5b8eff0cf1781097d7d53f783e6aea95b131ee01bb9893df9a3a236d60a extends Twig_Template
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
        $__internal_cb22c2d98815bf293498b289aadfa537148c52ad6849a026ef9964ada8586b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb22c2d98815bf293498b289aadfa537148c52ad6849a026ef9964ada8586b78->enter($__internal_cb22c2d98815bf293498b289aadfa537148c52ad6849a026ef9964ada8586b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_105dada5f233e36ca6714b683ca551f05af03485dbc2a1d48c7d50b9615be467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105dada5f233e36ca6714b683ca551f05af03485dbc2a1d48c7d50b9615be467->enter($__internal_105dada5f233e36ca6714b683ca551f05af03485dbc2a1d48c7d50b9615be467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cb22c2d98815bf293498b289aadfa537148c52ad6849a026ef9964ada8586b78->leave($__internal_cb22c2d98815bf293498b289aadfa537148c52ad6849a026ef9964ada8586b78_prof);

        
        $__internal_105dada5f233e36ca6714b683ca551f05af03485dbc2a1d48c7d50b9615be467->leave($__internal_105dada5f233e36ca6714b683ca551f05af03485dbc2a1d48c7d50b9615be467_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
