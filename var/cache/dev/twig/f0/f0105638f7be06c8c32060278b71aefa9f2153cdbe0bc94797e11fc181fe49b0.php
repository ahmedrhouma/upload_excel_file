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
        $__internal_7dd95ebcf844759169d43286887fa41a59d4675bd27fb52555d39d8f6bead2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd95ebcf844759169d43286887fa41a59d4675bd27fb52555d39d8f6bead2f0->enter($__internal_7dd95ebcf844759169d43286887fa41a59d4675bd27fb52555d39d8f6bead2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_bb407601507291c69d527dd69f6785677fbd560d4aad723ccee74268832737bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb407601507291c69d527dd69f6785677fbd560d4aad723ccee74268832737bd->enter($__internal_bb407601507291c69d527dd69f6785677fbd560d4aad723ccee74268832737bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7dd95ebcf844759169d43286887fa41a59d4675bd27fb52555d39d8f6bead2f0->leave($__internal_7dd95ebcf844759169d43286887fa41a59d4675bd27fb52555d39d8f6bead2f0_prof);

        
        $__internal_bb407601507291c69d527dd69f6785677fbd560d4aad723ccee74268832737bd->leave($__internal_bb407601507291c69d527dd69f6785677fbd560d4aad723ccee74268832737bd_prof);

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
