<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ea1fd72c2572bd45e9fd7d483f48c9227ec1e1ee402c231c7f333ae4526db741 extends Twig_Template
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
        $__internal_0bd746b4acd8c8e45ea23685c058b7a636a08a4aafa1abda4ec6ea4be414ec26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd746b4acd8c8e45ea23685c058b7a636a08a4aafa1abda4ec6ea4be414ec26->enter($__internal_0bd746b4acd8c8e45ea23685c058b7a636a08a4aafa1abda4ec6ea4be414ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5778eb242026708ed105cb984e7ae37e5192f46e06a738a47a80948303930aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5778eb242026708ed105cb984e7ae37e5192f46e06a738a47a80948303930aa7->enter($__internal_5778eb242026708ed105cb984e7ae37e5192f46e06a738a47a80948303930aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0bd746b4acd8c8e45ea23685c058b7a636a08a4aafa1abda4ec6ea4be414ec26->leave($__internal_0bd746b4acd8c8e45ea23685c058b7a636a08a4aafa1abda4ec6ea4be414ec26_prof);

        
        $__internal_5778eb242026708ed105cb984e7ae37e5192f46e06a738a47a80948303930aa7->leave($__internal_5778eb242026708ed105cb984e7ae37e5192f46e06a738a47a80948303930aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
