<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_05882937450fb65fa1796bf3245532a7fd498497ae390efbf9e92af247c4f353 extends Twig_Template
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
        $__internal_fc7cd677eafcd496582112d0a4ad0ef60fe70e3eac9f50281efe5b3ddd478188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7cd677eafcd496582112d0a4ad0ef60fe70e3eac9f50281efe5b3ddd478188->enter($__internal_fc7cd677eafcd496582112d0a4ad0ef60fe70e3eac9f50281efe5b3ddd478188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_2609217b865898dd5d3f49232d97a3eeb30a16e9c782a7ec9b73d4b1df3ba61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2609217b865898dd5d3f49232d97a3eeb30a16e9c782a7ec9b73d4b1df3ba61a->enter($__internal_2609217b865898dd5d3f49232d97a3eeb30a16e9c782a7ec9b73d4b1df3ba61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fc7cd677eafcd496582112d0a4ad0ef60fe70e3eac9f50281efe5b3ddd478188->leave($__internal_fc7cd677eafcd496582112d0a4ad0ef60fe70e3eac9f50281efe5b3ddd478188_prof);

        
        $__internal_2609217b865898dd5d3f49232d97a3eeb30a16e9c782a7ec9b73d4b1df3ba61a->leave($__internal_2609217b865898dd5d3f49232d97a3eeb30a16e9c782a7ec9b73d4b1df3ba61a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
