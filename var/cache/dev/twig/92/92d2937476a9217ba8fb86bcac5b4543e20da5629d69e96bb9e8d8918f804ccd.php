<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e159499e5458c07f96c90101a164af9ebf6cefa947f666ffd6616a486bf8047f extends Twig_Template
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
        $__internal_f4ba5e8f196dda7113b075d5281448059e5d50d5f9607f86c4ee174f5cfb2ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ba5e8f196dda7113b075d5281448059e5d50d5f9607f86c4ee174f5cfb2ba5->enter($__internal_f4ba5e8f196dda7113b075d5281448059e5d50d5f9607f86c4ee174f5cfb2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_aba82b8ff1b1e947cb36167396bd7a5d0bc389ebf6466218a8d9dddc5f30a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba82b8ff1b1e947cb36167396bd7a5d0bc389ebf6466218a8d9dddc5f30a5e6->enter($__internal_aba82b8ff1b1e947cb36167396bd7a5d0bc389ebf6466218a8d9dddc5f30a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f4ba5e8f196dda7113b075d5281448059e5d50d5f9607f86c4ee174f5cfb2ba5->leave($__internal_f4ba5e8f196dda7113b075d5281448059e5d50d5f9607f86c4ee174f5cfb2ba5_prof);

        
        $__internal_aba82b8ff1b1e947cb36167396bd7a5d0bc389ebf6466218a8d9dddc5f30a5e6->leave($__internal_aba82b8ff1b1e947cb36167396bd7a5d0bc389ebf6466218a8d9dddc5f30a5e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
