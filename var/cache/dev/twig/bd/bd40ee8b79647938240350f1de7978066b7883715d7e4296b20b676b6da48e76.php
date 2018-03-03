<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_df1fd99b43e5296481d877e949cb736ca8a1792686b6769a4f3f312aea246bee extends Twig_Template
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
        $__internal_893209bcb80eb3e9a60bd9acf933bda811b1533b04f4324c318ea1e0e78c53c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893209bcb80eb3e9a60bd9acf933bda811b1533b04f4324c318ea1e0e78c53c9->enter($__internal_893209bcb80eb3e9a60bd9acf933bda811b1533b04f4324c318ea1e0e78c53c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_915f38c5f23b8f84cb8c21201331a3375eb5e8fb03c7f7b37f87b8f7b60c30d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915f38c5f23b8f84cb8c21201331a3375eb5e8fb03c7f7b37f87b8f7b60c30d6->enter($__internal_915f38c5f23b8f84cb8c21201331a3375eb5e8fb03c7f7b37f87b8f7b60c30d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_893209bcb80eb3e9a60bd9acf933bda811b1533b04f4324c318ea1e0e78c53c9->leave($__internal_893209bcb80eb3e9a60bd9acf933bda811b1533b04f4324c318ea1e0e78c53c9_prof);

        
        $__internal_915f38c5f23b8f84cb8c21201331a3375eb5e8fb03c7f7b37f87b8f7b60c30d6->leave($__internal_915f38c5f23b8f84cb8c21201331a3375eb5e8fb03c7f7b37f87b8f7b60c30d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
