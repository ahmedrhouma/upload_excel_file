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
        $__internal_40a5245e2127994cebbb754f0e8b87192f1e999c945d2432ff8cdf461c51a278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a5245e2127994cebbb754f0e8b87192f1e999c945d2432ff8cdf461c51a278->enter($__internal_40a5245e2127994cebbb754f0e8b87192f1e999c945d2432ff8cdf461c51a278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d65d8b2abed0ae772fb717deacae810925aa52537d838dbf5678be3e7a40f04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65d8b2abed0ae772fb717deacae810925aa52537d838dbf5678be3e7a40f04e->enter($__internal_d65d8b2abed0ae772fb717deacae810925aa52537d838dbf5678be3e7a40f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_40a5245e2127994cebbb754f0e8b87192f1e999c945d2432ff8cdf461c51a278->leave($__internal_40a5245e2127994cebbb754f0e8b87192f1e999c945d2432ff8cdf461c51a278_prof);

        
        $__internal_d65d8b2abed0ae772fb717deacae810925aa52537d838dbf5678be3e7a40f04e->leave($__internal_d65d8b2abed0ae772fb717deacae810925aa52537d838dbf5678be3e7a40f04e_prof);

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
