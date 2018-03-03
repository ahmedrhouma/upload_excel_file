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
        $__internal_8dc8300d3cd6f3e159db2c3f88bc7b6cbac634732eb1fdd14a44d2534727344a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc8300d3cd6f3e159db2c3f88bc7b6cbac634732eb1fdd14a44d2534727344a->enter($__internal_8dc8300d3cd6f3e159db2c3f88bc7b6cbac634732eb1fdd14a44d2534727344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_acfe0dc11e8be869c50476f0eb7921d8b9caa955f65f61e9e338d4892453c4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfe0dc11e8be869c50476f0eb7921d8b9caa955f65f61e9e338d4892453c4a2->enter($__internal_acfe0dc11e8be869c50476f0eb7921d8b9caa955f65f61e9e338d4892453c4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8dc8300d3cd6f3e159db2c3f88bc7b6cbac634732eb1fdd14a44d2534727344a->leave($__internal_8dc8300d3cd6f3e159db2c3f88bc7b6cbac634732eb1fdd14a44d2534727344a_prof);

        
        $__internal_acfe0dc11e8be869c50476f0eb7921d8b9caa955f65f61e9e338d4892453c4a2->leave($__internal_acfe0dc11e8be869c50476f0eb7921d8b9caa955f65f61e9e338d4892453c4a2_prof);

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
