<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_02ea6ad1e7a7a508ccdd3ae29872dd87871307a5245335d70e7e84f846e7532f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea6ad1e7a7a508ccdd3ae29872dd87871307a5245335d70e7e84f846e7532f->enter($__internal_02ea6ad1e7a7a508ccdd3ae29872dd87871307a5245335d70e7e84f846e7532f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd19c07aede1cb0156c3ff31af56790464c84e1de102ff36d329b8820ad407f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd19c07aede1cb0156c3ff31af56790464c84e1de102ff36d329b8820ad407f0->enter($__internal_cd19c07aede1cb0156c3ff31af56790464c84e1de102ff36d329b8820ad407f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ea6ad1e7a7a508ccdd3ae29872dd87871307a5245335d70e7e84f846e7532f->leave($__internal_02ea6ad1e7a7a508ccdd3ae29872dd87871307a5245335d70e7e84f846e7532f_prof);

        
        $__internal_cd19c07aede1cb0156c3ff31af56790464c84e1de102ff36d329b8820ad407f0->leave($__internal_cd19c07aede1cb0156c3ff31af56790464c84e1de102ff36d329b8820ad407f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab24d9cec80ba1b45ac8354a77eca5b2baf85ae919ddef109ed89d1725d5e183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab24d9cec80ba1b45ac8354a77eca5b2baf85ae919ddef109ed89d1725d5e183->enter($__internal_ab24d9cec80ba1b45ac8354a77eca5b2baf85ae919ddef109ed89d1725d5e183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9bc9f88bb3f3122f423c14d464d27cd2ab2f1256966a53ffd8b6112ac1d2e2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc9f88bb3f3122f423c14d464d27cd2ab2f1256966a53ffd8b6112ac1d2e2a3->enter($__internal_9bc9f88bb3f3122f423c14d464d27cd2ab2f1256966a53ffd8b6112ac1d2e2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9bc9f88bb3f3122f423c14d464d27cd2ab2f1256966a53ffd8b6112ac1d2e2a3->leave($__internal_9bc9f88bb3f3122f423c14d464d27cd2ab2f1256966a53ffd8b6112ac1d2e2a3_prof);

        
        $__internal_ab24d9cec80ba1b45ac8354a77eca5b2baf85ae919ddef109ed89d1725d5e183->leave($__internal_ab24d9cec80ba1b45ac8354a77eca5b2baf85ae919ddef109ed89d1725d5e183_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96abb305dbc97345f63219655810be47cdc128d320a3f30dd01b752607488c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96abb305dbc97345f63219655810be47cdc128d320a3f30dd01b752607488c5b->enter($__internal_96abb305dbc97345f63219655810be47cdc128d320a3f30dd01b752607488c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b2608e65a5147440d86bd57e2e597b1f0886cafba95961fce205894855283c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2608e65a5147440d86bd57e2e597b1f0886cafba95961fce205894855283c4->enter($__internal_9b2608e65a5147440d86bd57e2e597b1f0886cafba95961fce205894855283c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b2608e65a5147440d86bd57e2e597b1f0886cafba95961fce205894855283c4->leave($__internal_9b2608e65a5147440d86bd57e2e597b1f0886cafba95961fce205894855283c4_prof);

        
        $__internal_96abb305dbc97345f63219655810be47cdc128d320a3f30dd01b752607488c5b->leave($__internal_96abb305dbc97345f63219655810be47cdc128d320a3f30dd01b752607488c5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18d749307fec7c6a08c5698598488bb3a1b3f9051f07111d0d8df42b78c076d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d749307fec7c6a08c5698598488bb3a1b3f9051f07111d0d8df42b78c076d1->enter($__internal_18d749307fec7c6a08c5698598488bb3a1b3f9051f07111d0d8df42b78c076d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ab90086fd090076b71dc999b39daeba281220e0c16b478a413ddc79afc7b485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab90086fd090076b71dc999b39daeba281220e0c16b478a413ddc79afc7b485->enter($__internal_0ab90086fd090076b71dc999b39daeba281220e0c16b478a413ddc79afc7b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ab90086fd090076b71dc999b39daeba281220e0c16b478a413ddc79afc7b485->leave($__internal_0ab90086fd090076b71dc999b39daeba281220e0c16b478a413ddc79afc7b485_prof);

        
        $__internal_18d749307fec7c6a08c5698598488bb3a1b3f9051f07111d0d8df42b78c076d1->leave($__internal_18d749307fec7c6a08c5698598488bb3a1b3f9051f07111d0d8df42b78c076d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
