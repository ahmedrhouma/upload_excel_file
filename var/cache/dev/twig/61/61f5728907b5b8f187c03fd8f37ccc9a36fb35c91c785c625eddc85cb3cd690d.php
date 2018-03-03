<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_996f432cea13a286459cae6c95f5a4eaca5d0d98d3e5039e9598825f41a8f15a extends Twig_Template
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
        $__internal_5c5d4f708248eb069c18e3cb152782632ffd5d9a976a3ad15527511b8dca839c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5d4f708248eb069c18e3cb152782632ffd5d9a976a3ad15527511b8dca839c->enter($__internal_5c5d4f708248eb069c18e3cb152782632ffd5d9a976a3ad15527511b8dca839c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c312650e32196436bb5d05810efffa6e697bf73887b3f76feb8d7991bdc24024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c312650e32196436bb5d05810efffa6e697bf73887b3f76feb8d7991bdc24024->enter($__internal_c312650e32196436bb5d05810efffa6e697bf73887b3f76feb8d7991bdc24024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5c5d4f708248eb069c18e3cb152782632ffd5d9a976a3ad15527511b8dca839c->leave($__internal_5c5d4f708248eb069c18e3cb152782632ffd5d9a976a3ad15527511b8dca839c_prof);

        
        $__internal_c312650e32196436bb5d05810efffa6e697bf73887b3f76feb8d7991bdc24024->leave($__internal_c312650e32196436bb5d05810efffa6e697bf73887b3f76feb8d7991bdc24024_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
