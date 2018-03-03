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
        $__internal_2ae37612bfee6b96ba16a4cd1061b6aa6fbf48b8e3f7441c42ba3bf5fec230f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae37612bfee6b96ba16a4cd1061b6aa6fbf48b8e3f7441c42ba3bf5fec230f0->enter($__internal_2ae37612bfee6b96ba16a4cd1061b6aa6fbf48b8e3f7441c42ba3bf5fec230f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6bfdbf8c477d4b417a16c1cb165d9980b07dcb34d8ee90bb4238fc35d59a73dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfdbf8c477d4b417a16c1cb165d9980b07dcb34d8ee90bb4238fc35d59a73dd->enter($__internal_6bfdbf8c477d4b417a16c1cb165d9980b07dcb34d8ee90bb4238fc35d59a73dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2ae37612bfee6b96ba16a4cd1061b6aa6fbf48b8e3f7441c42ba3bf5fec230f0->leave($__internal_2ae37612bfee6b96ba16a4cd1061b6aa6fbf48b8e3f7441c42ba3bf5fec230f0_prof);

        
        $__internal_6bfdbf8c477d4b417a16c1cb165d9980b07dcb34d8ee90bb4238fc35d59a73dd->leave($__internal_6bfdbf8c477d4b417a16c1cb165d9980b07dcb34d8ee90bb4238fc35d59a73dd_prof);

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
