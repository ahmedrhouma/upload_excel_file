<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_0eb57e45a040e3f3ee011c60372561a1c1ebb923330e27547b3fa15b7d01d36a extends Twig_Template
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
        $__internal_72def2f544949baa5bb89ea0bac79b0fe47b4f5d035f4a36b90e44b819141530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72def2f544949baa5bb89ea0bac79b0fe47b4f5d035f4a36b90e44b819141530->enter($__internal_72def2f544949baa5bb89ea0bac79b0fe47b4f5d035f4a36b90e44b819141530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_bf2415f2c2a5822987f7d00de11b8f0978dfc9597dba6fd6a216701fc40db48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2415f2c2a5822987f7d00de11b8f0978dfc9597dba6fd6a216701fc40db48e->enter($__internal_bf2415f2c2a5822987f7d00de11b8f0978dfc9597dba6fd6a216701fc40db48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_72def2f544949baa5bb89ea0bac79b0fe47b4f5d035f4a36b90e44b819141530->leave($__internal_72def2f544949baa5bb89ea0bac79b0fe47b4f5d035f4a36b90e44b819141530_prof);

        
        $__internal_bf2415f2c2a5822987f7d00de11b8f0978dfc9597dba6fd6a216701fc40db48e->leave($__internal_bf2415f2c2a5822987f7d00de11b8f0978dfc9597dba6fd6a216701fc40db48e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
