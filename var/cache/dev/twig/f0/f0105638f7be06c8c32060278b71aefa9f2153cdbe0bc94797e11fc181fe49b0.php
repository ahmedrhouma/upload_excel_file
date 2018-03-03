<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fd237445d92ace0dbff9864fc7555e96e0dc725c4684b6a8506db3cc0c9479c8 extends Twig_Template
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
        $__internal_fd834200e5930b25f879e16f5c647efed8a169075c8b887f4a6c7a337974f601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd834200e5930b25f879e16f5c647efed8a169075c8b887f4a6c7a337974f601->enter($__internal_fd834200e5930b25f879e16f5c647efed8a169075c8b887f4a6c7a337974f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_cdfcaff2de164155eebcf9411b85fc03b739210d74b2f3a9a9f68ce178f6b729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfcaff2de164155eebcf9411b85fc03b739210d74b2f3a9a9f68ce178f6b729->enter($__internal_cdfcaff2de164155eebcf9411b85fc03b739210d74b2f3a9a9f68ce178f6b729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fd834200e5930b25f879e16f5c647efed8a169075c8b887f4a6c7a337974f601->leave($__internal_fd834200e5930b25f879e16f5c647efed8a169075c8b887f4a6c7a337974f601_prof);

        
        $__internal_cdfcaff2de164155eebcf9411b85fc03b739210d74b2f3a9a9f68ce178f6b729->leave($__internal_cdfcaff2de164155eebcf9411b85fc03b739210d74b2f3a9a9f68ce178f6b729_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
