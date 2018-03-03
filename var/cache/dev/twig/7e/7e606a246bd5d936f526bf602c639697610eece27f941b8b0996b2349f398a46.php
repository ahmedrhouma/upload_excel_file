<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c0f22ddf826890995c19beac597d7b00b016908833b85e2e330d2b31c404d2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_332e5bc5c6fb8e1e6b5813b577da3535a3a7f74da7cefbb3e55932631005f151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332e5bc5c6fb8e1e6b5813b577da3535a3a7f74da7cefbb3e55932631005f151->enter($__internal_332e5bc5c6fb8e1e6b5813b577da3535a3a7f74da7cefbb3e55932631005f151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b9d5995d6a0aa31ff183c2adcbc014dfde7558f4dbcbe5182e3e6684fe461cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d5995d6a0aa31ff183c2adcbc014dfde7558f4dbcbe5182e3e6684fe461cbd->enter($__internal_b9d5995d6a0aa31ff183c2adcbc014dfde7558f4dbcbe5182e3e6684fe461cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332e5bc5c6fb8e1e6b5813b577da3535a3a7f74da7cefbb3e55932631005f151->leave($__internal_332e5bc5c6fb8e1e6b5813b577da3535a3a7f74da7cefbb3e55932631005f151_prof);

        
        $__internal_b9d5995d6a0aa31ff183c2adcbc014dfde7558f4dbcbe5182e3e6684fe461cbd->leave($__internal_b9d5995d6a0aa31ff183c2adcbc014dfde7558f4dbcbe5182e3e6684fe461cbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_122b2666a84b32a720237fc565a6787581f57ba19f64074b07c6b509cfb31fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122b2666a84b32a720237fc565a6787581f57ba19f64074b07c6b509cfb31fc0->enter($__internal_122b2666a84b32a720237fc565a6787581f57ba19f64074b07c6b509cfb31fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86ac368d9524be9da43ad436d2de95a4702b4ded847294c94b44f304cc0a14ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ac368d9524be9da43ad436d2de95a4702b4ded847294c94b44f304cc0a14ea->enter($__internal_86ac368d9524be9da43ad436d2de95a4702b4ded847294c94b44f304cc0a14ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_86ac368d9524be9da43ad436d2de95a4702b4ded847294c94b44f304cc0a14ea->leave($__internal_86ac368d9524be9da43ad436d2de95a4702b4ded847294c94b44f304cc0a14ea_prof);

        
        $__internal_122b2666a84b32a720237fc565a6787581f57ba19f64074b07c6b509cfb31fc0->leave($__internal_122b2666a84b32a720237fc565a6787581f57ba19f64074b07c6b509cfb31fc0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c08256443e063fb22b00b3178ef494f8183759fc469d26a27e7eb8c799f58a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08256443e063fb22b00b3178ef494f8183759fc469d26a27e7eb8c799f58a7e->enter($__internal_c08256443e063fb22b00b3178ef494f8183759fc469d26a27e7eb8c799f58a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7585b8041280d50750b1d6ecc8cba0d97b575c662f6f05c73d237a6100c7fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7585b8041280d50750b1d6ecc8cba0d97b575c662f6f05c73d237a6100c7fe6->enter($__internal_b7585b8041280d50750b1d6ecc8cba0d97b575c662f6f05c73d237a6100c7fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b7585b8041280d50750b1d6ecc8cba0d97b575c662f6f05c73d237a6100c7fe6->leave($__internal_b7585b8041280d50750b1d6ecc8cba0d97b575c662f6f05c73d237a6100c7fe6_prof);

        
        $__internal_c08256443e063fb22b00b3178ef494f8183759fc469d26a27e7eb8c799f58a7e->leave($__internal_c08256443e063fb22b00b3178ef494f8183759fc469d26a27e7eb8c799f58a7e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df69c001da45bd2c204a9a00e752a7229e112853e40321d967ac2a5e51c3d3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df69c001da45bd2c204a9a00e752a7229e112853e40321d967ac2a5e51c3d3de->enter($__internal_df69c001da45bd2c204a9a00e752a7229e112853e40321d967ac2a5e51c3d3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0b393f996b8ce5cf2f21a9819b0a8ecf4d14969e20b6ec778934723ed41933f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b393f996b8ce5cf2f21a9819b0a8ecf4d14969e20b6ec778934723ed41933f->enter($__internal_d0b393f996b8ce5cf2f21a9819b0a8ecf4d14969e20b6ec778934723ed41933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0b393f996b8ce5cf2f21a9819b0a8ecf4d14969e20b6ec778934723ed41933f->leave($__internal_d0b393f996b8ce5cf2f21a9819b0a8ecf4d14969e20b6ec778934723ed41933f_prof);

        
        $__internal_df69c001da45bd2c204a9a00e752a7229e112853e40321d967ac2a5e51c3d3de->leave($__internal_df69c001da45bd2c204a9a00e752a7229e112853e40321d967ac2a5e51c3d3de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
