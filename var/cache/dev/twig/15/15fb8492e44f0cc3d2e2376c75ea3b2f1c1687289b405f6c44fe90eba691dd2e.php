<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_46633ba74875e42abae74fbe3f2fe1e9f612c5cd52fe68ef667294d62f7e0fb2 extends Twig_Template
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
        $__internal_7510bb3578c832b0b880f02ee2487786879a3bf1449b5fae9df29128cd02a4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7510bb3578c832b0b880f02ee2487786879a3bf1449b5fae9df29128cd02a4ea->enter($__internal_7510bb3578c832b0b880f02ee2487786879a3bf1449b5fae9df29128cd02a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_e53b536145a2dc1e10db83b38d4f08ca92eff4ba375e43751cbe7d7147825542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53b536145a2dc1e10db83b38d4f08ca92eff4ba375e43751cbe7d7147825542->enter($__internal_e53b536145a2dc1e10db83b38d4f08ca92eff4ba375e43751cbe7d7147825542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7510bb3578c832b0b880f02ee2487786879a3bf1449b5fae9df29128cd02a4ea->leave($__internal_7510bb3578c832b0b880f02ee2487786879a3bf1449b5fae9df29128cd02a4ea_prof);

        
        $__internal_e53b536145a2dc1e10db83b38d4f08ca92eff4ba375e43751cbe7d7147825542->leave($__internal_e53b536145a2dc1e10db83b38d4f08ca92eff4ba375e43751cbe7d7147825542_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
