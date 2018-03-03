<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_2e17b6fd180e1813a8734960921620a8f8e51329635cf07b02bda48e87db1626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1346aa087cf4ba45b15fda3659bf3f8d70be85f3b8a25be883cceb451b3a369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1346aa087cf4ba45b15fda3659bf3f8d70be85f3b8a25be883cceb451b3a369->enter($__internal_a1346aa087cf4ba45b15fda3659bf3f8d70be85f3b8a25be883cceb451b3a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_af37e8c1984e47c0b6ab4d1e643d6065bd6a09bd92b4f57fc596afcbb324fc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af37e8c1984e47c0b6ab4d1e643d6065bd6a09bd92b4f57fc596afcbb324fc1e->enter($__internal_af37e8c1984e47c0b6ab4d1e643d6065bd6a09bd92b4f57fc596afcbb324fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1346aa087cf4ba45b15fda3659bf3f8d70be85f3b8a25be883cceb451b3a369->leave($__internal_a1346aa087cf4ba45b15fda3659bf3f8d70be85f3b8a25be883cceb451b3a369_prof);

        
        $__internal_af37e8c1984e47c0b6ab4d1e643d6065bd6a09bd92b4f57fc596afcbb324fc1e->leave($__internal_af37e8c1984e47c0b6ab4d1e643d6065bd6a09bd92b4f57fc596afcbb324fc1e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_75751363cad25a30bc91c72d8a191b32794aa3306a125d75a6435d57f4216942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75751363cad25a30bc91c72d8a191b32794aa3306a125d75a6435d57f4216942->enter($__internal_75751363cad25a30bc91c72d8a191b32794aa3306a125d75a6435d57f4216942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d283ecffebc39d0981edda9bf0ca61c3919c98cadb72b2ef11f3c6bdb0a2639a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d283ecffebc39d0981edda9bf0ca61c3919c98cadb72b2ef11f3c6bdb0a2639a->enter($__internal_d283ecffebc39d0981edda9bf0ca61c3919c98cadb72b2ef11f3c6bdb0a2639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d283ecffebc39d0981edda9bf0ca61c3919c98cadb72b2ef11f3c6bdb0a2639a->leave($__internal_d283ecffebc39d0981edda9bf0ca61c3919c98cadb72b2ef11f3c6bdb0a2639a_prof);

        
        $__internal_75751363cad25a30bc91c72d8a191b32794aa3306a125d75a6435d57f4216942->leave($__internal_75751363cad25a30bc91c72d8a191b32794aa3306a125d75a6435d57f4216942_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbe876a640adfac8d480a07322aedde6692431cc7e0d22edca6ae65aa11d731b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe876a640adfac8d480a07322aedde6692431cc7e0d22edca6ae65aa11d731b->enter($__internal_dbe876a640adfac8d480a07322aedde6692431cc7e0d22edca6ae65aa11d731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a6f56dcb83e8e896b67a6df5846410fd45194ce4a8cd37954f6f99ecf9c5085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6f56dcb83e8e896b67a6df5846410fd45194ce4a8cd37954f6f99ecf9c5085->enter($__internal_2a6f56dcb83e8e896b67a6df5846410fd45194ce4a8cd37954f6f99ecf9c5085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2a6f56dcb83e8e896b67a6df5846410fd45194ce4a8cd37954f6f99ecf9c5085->leave($__internal_2a6f56dcb83e8e896b67a6df5846410fd45194ce4a8cd37954f6f99ecf9c5085_prof);

        
        $__internal_dbe876a640adfac8d480a07322aedde6692431cc7e0d22edca6ae65aa11d731b->leave($__internal_dbe876a640adfac8d480a07322aedde6692431cc7e0d22edca6ae65aa11d731b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
