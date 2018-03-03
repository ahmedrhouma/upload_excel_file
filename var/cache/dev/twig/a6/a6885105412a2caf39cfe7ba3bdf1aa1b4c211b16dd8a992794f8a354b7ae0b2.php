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
        $__internal_67456909b3b1c42d53547ac39fe5a7078ec767262434fc919a31a94a5f073981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67456909b3b1c42d53547ac39fe5a7078ec767262434fc919a31a94a5f073981->enter($__internal_67456909b3b1c42d53547ac39fe5a7078ec767262434fc919a31a94a5f073981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_85612c103e1af1cf6700ac5fa4180296625227f88e13ca534b1061cab7d240fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85612c103e1af1cf6700ac5fa4180296625227f88e13ca534b1061cab7d240fa->enter($__internal_85612c103e1af1cf6700ac5fa4180296625227f88e13ca534b1061cab7d240fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_67456909b3b1c42d53547ac39fe5a7078ec767262434fc919a31a94a5f073981->leave($__internal_67456909b3b1c42d53547ac39fe5a7078ec767262434fc919a31a94a5f073981_prof);

        
        $__internal_85612c103e1af1cf6700ac5fa4180296625227f88e13ca534b1061cab7d240fa->leave($__internal_85612c103e1af1cf6700ac5fa4180296625227f88e13ca534b1061cab7d240fa_prof);

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
