<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_72bd94fea95cbdefcd8add0b556bc90c11f423047d90b0dc40a0bc8c6fd021d1 extends Twig_Template
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
        $__internal_7971c846fd68195b20226c190504cd2b6cbac14e321a81b5605c4617a174292f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7971c846fd68195b20226c190504cd2b6cbac14e321a81b5605c4617a174292f->enter($__internal_7971c846fd68195b20226c190504cd2b6cbac14e321a81b5605c4617a174292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_cd1636b03f4729697b0e574b2ca90fbcbc1bbf582ad3da905fa7bee7fff1221e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1636b03f4729697b0e574b2ca90fbcbc1bbf582ad3da905fa7bee7fff1221e->enter($__internal_cd1636b03f4729697b0e574b2ca90fbcbc1bbf582ad3da905fa7bee7fff1221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7971c846fd68195b20226c190504cd2b6cbac14e321a81b5605c4617a174292f->leave($__internal_7971c846fd68195b20226c190504cd2b6cbac14e321a81b5605c4617a174292f_prof);

        
        $__internal_cd1636b03f4729697b0e574b2ca90fbcbc1bbf582ad3da905fa7bee7fff1221e->leave($__internal_cd1636b03f4729697b0e574b2ca90fbcbc1bbf582ad3da905fa7bee7fff1221e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
