<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1e9cc9eb85b8b3738f6c62193fd5af475ef48e8417993a0dbcc7278cb6fdb117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06f64cf17a83d169694c1c5d7446c4debedd1a31906bf93ace7843e6324a811c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f64cf17a83d169694c1c5d7446c4debedd1a31906bf93ace7843e6324a811c->enter($__internal_06f64cf17a83d169694c1c5d7446c4debedd1a31906bf93ace7843e6324a811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_41877b1356f26009c9269849eb5930c4b749630da66eb9a89435f1097b259a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41877b1356f26009c9269849eb5930c4b749630da66eb9a89435f1097b259a1e->enter($__internal_41877b1356f26009c9269849eb5930c4b749630da66eb9a89435f1097b259a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f64cf17a83d169694c1c5d7446c4debedd1a31906bf93ace7843e6324a811c->leave($__internal_06f64cf17a83d169694c1c5d7446c4debedd1a31906bf93ace7843e6324a811c_prof);

        
        $__internal_41877b1356f26009c9269849eb5930c4b749630da66eb9a89435f1097b259a1e->leave($__internal_41877b1356f26009c9269849eb5930c4b749630da66eb9a89435f1097b259a1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b9c99d3ee275369b1ed55bd87cbdea61c875c573e38aaaa2adebcfa849fd329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9c99d3ee275369b1ed55bd87cbdea61c875c573e38aaaa2adebcfa849fd329->enter($__internal_4b9c99d3ee275369b1ed55bd87cbdea61c875c573e38aaaa2adebcfa849fd329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77785742b3dbc19e30422a8e697c9bbaccaae1d0283ab1a5f1f5bcc92e1b286a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77785742b3dbc19e30422a8e697c9bbaccaae1d0283ab1a5f1f5bcc92e1b286a->enter($__internal_77785742b3dbc19e30422a8e697c9bbaccaae1d0283ab1a5f1f5bcc92e1b286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77785742b3dbc19e30422a8e697c9bbaccaae1d0283ab1a5f1f5bcc92e1b286a->leave($__internal_77785742b3dbc19e30422a8e697c9bbaccaae1d0283ab1a5f1f5bcc92e1b286a_prof);

        
        $__internal_4b9c99d3ee275369b1ed55bd87cbdea61c875c573e38aaaa2adebcfa849fd329->leave($__internal_4b9c99d3ee275369b1ed55bd87cbdea61c875c573e38aaaa2adebcfa849fd329_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6edcff3ec6d4714646bb596e09a03bafebfd5d8d4f2f90a1cbcd193edec07d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edcff3ec6d4714646bb596e09a03bafebfd5d8d4f2f90a1cbcd193edec07d5d->enter($__internal_6edcff3ec6d4714646bb596e09a03bafebfd5d8d4f2f90a1cbcd193edec07d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a844d3aa24928fb3972bdcd9bfef1bc287a122c60114f3e4d3df2fffafdee0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a844d3aa24928fb3972bdcd9bfef1bc287a122c60114f3e4d3df2fffafdee0f0->enter($__internal_a844d3aa24928fb3972bdcd9bfef1bc287a122c60114f3e4d3df2fffafdee0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a844d3aa24928fb3972bdcd9bfef1bc287a122c60114f3e4d3df2fffafdee0f0->leave($__internal_a844d3aa24928fb3972bdcd9bfef1bc287a122c60114f3e4d3df2fffafdee0f0_prof);

        
        $__internal_6edcff3ec6d4714646bb596e09a03bafebfd5d8d4f2f90a1cbcd193edec07d5d->leave($__internal_6edcff3ec6d4714646bb596e09a03bafebfd5d8d4f2f90a1cbcd193edec07d5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
