<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b909b1165f2020547625d4f70ee8e14a525afbfa3c7c4e1177966305db8977c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25eff08792269a6b47e268d178d28495e347153c2ecc4b7aea3250ada14442b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25eff08792269a6b47e268d178d28495e347153c2ecc4b7aea3250ada14442b2->enter($__internal_25eff08792269a6b47e268d178d28495e347153c2ecc4b7aea3250ada14442b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b066513bcc231f8dd7ed2ed6f13410fb68f0a82cca901bf2e527385d9e641364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b066513bcc231f8dd7ed2ed6f13410fb68f0a82cca901bf2e527385d9e641364->enter($__internal_b066513bcc231f8dd7ed2ed6f13410fb68f0a82cca901bf2e527385d9e641364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_25eff08792269a6b47e268d178d28495e347153c2ecc4b7aea3250ada14442b2->leave($__internal_25eff08792269a6b47e268d178d28495e347153c2ecc4b7aea3250ada14442b2_prof);

        
        $__internal_b066513bcc231f8dd7ed2ed6f13410fb68f0a82cca901bf2e527385d9e641364->leave($__internal_b066513bcc231f8dd7ed2ed6f13410fb68f0a82cca901bf2e527385d9e641364_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a66d53f6323a5128a09543033a20cc549da5747e0a0a0d620d6533c8f83e4e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66d53f6323a5128a09543033a20cc549da5747e0a0a0d620d6533c8f83e4e10->enter($__internal_a66d53f6323a5128a09543033a20cc549da5747e0a0a0d620d6533c8f83e4e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b9fb98b4a5d36dfe03de1e8726556e674f707dc25c148be8d4f3342065277a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fb98b4a5d36dfe03de1e8726556e674f707dc25c148be8d4f3342065277a6f->enter($__internal_b9fb98b4a5d36dfe03de1e8726556e674f707dc25c148be8d4f3342065277a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b9fb98b4a5d36dfe03de1e8726556e674f707dc25c148be8d4f3342065277a6f->leave($__internal_b9fb98b4a5d36dfe03de1e8726556e674f707dc25c148be8d4f3342065277a6f_prof);

        
        $__internal_a66d53f6323a5128a09543033a20cc549da5747e0a0a0d620d6533c8f83e4e10->leave($__internal_a66d53f6323a5128a09543033a20cc549da5747e0a0a0d620d6533c8f83e4e10_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_024df777591b955e44ceaf7cb1394b60cdc3ee7974b0156e8e50f0dad2b62961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024df777591b955e44ceaf7cb1394b60cdc3ee7974b0156e8e50f0dad2b62961->enter($__internal_024df777591b955e44ceaf7cb1394b60cdc3ee7974b0156e8e50f0dad2b62961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_41060824e340f59867e40f121ebeb4498a6ed0537d4748da98caa51b4001f14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41060824e340f59867e40f121ebeb4498a6ed0537d4748da98caa51b4001f14b->enter($__internal_41060824e340f59867e40f121ebeb4498a6ed0537d4748da98caa51b4001f14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_41060824e340f59867e40f121ebeb4498a6ed0537d4748da98caa51b4001f14b->leave($__internal_41060824e340f59867e40f121ebeb4498a6ed0537d4748da98caa51b4001f14b_prof);

        
        $__internal_024df777591b955e44ceaf7cb1394b60cdc3ee7974b0156e8e50f0dad2b62961->leave($__internal_024df777591b955e44ceaf7cb1394b60cdc3ee7974b0156e8e50f0dad2b62961_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_01446a8248e57a5f0c840b008c37314b9f662f2907a302050e73b0062c708bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01446a8248e57a5f0c840b008c37314b9f662f2907a302050e73b0062c708bac->enter($__internal_01446a8248e57a5f0c840b008c37314b9f662f2907a302050e73b0062c708bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_db1db23de27d90ada497bec65c596d9860d33380d4057674ed15c10cfa71f374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1db23de27d90ada497bec65c596d9860d33380d4057674ed15c10cfa71f374->enter($__internal_db1db23de27d90ada497bec65c596d9860d33380d4057674ed15c10cfa71f374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_db1db23de27d90ada497bec65c596d9860d33380d4057674ed15c10cfa71f374->leave($__internal_db1db23de27d90ada497bec65c596d9860d33380d4057674ed15c10cfa71f374_prof);

        
        $__internal_01446a8248e57a5f0c840b008c37314b9f662f2907a302050e73b0062c708bac->leave($__internal_01446a8248e57a5f0c840b008c37314b9f662f2907a302050e73b0062c708bac_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7c21bf7be39fa1ca3f3cf662a7af4ca88ffda155b87d2544429ba13e29cff8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c21bf7be39fa1ca3f3cf662a7af4ca88ffda155b87d2544429ba13e29cff8dc->enter($__internal_7c21bf7be39fa1ca3f3cf662a7af4ca88ffda155b87d2544429ba13e29cff8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6d8d66c33712afebb088b9f8d666b89bcf1d4cf5f4461b1c2c83c76371be3c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8d66c33712afebb088b9f8d666b89bcf1d4cf5f4461b1c2c83c76371be3c6b->enter($__internal_6d8d66c33712afebb088b9f8d666b89bcf1d4cf5f4461b1c2c83c76371be3c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_6d8d66c33712afebb088b9f8d666b89bcf1d4cf5f4461b1c2c83c76371be3c6b->leave($__internal_6d8d66c33712afebb088b9f8d666b89bcf1d4cf5f4461b1c2c83c76371be3c6b_prof);

        
        $__internal_7c21bf7be39fa1ca3f3cf662a7af4ca88ffda155b87d2544429ba13e29cff8dc->leave($__internal_7c21bf7be39fa1ca3f3cf662a7af4ca88ffda155b87d2544429ba13e29cff8dc_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_206366ee9f05777a160ce32c3e800804af285ca55905d0724528bbac483b8d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206366ee9f05777a160ce32c3e800804af285ca55905d0724528bbac483b8d84->enter($__internal_206366ee9f05777a160ce32c3e800804af285ca55905d0724528bbac483b8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d53529e498adef521526f940a6e33264c4139a99913f7f3018344609ed45ea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53529e498adef521526f940a6e33264c4139a99913f7f3018344609ed45ea34->enter($__internal_d53529e498adef521526f940a6e33264c4139a99913f7f3018344609ed45ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_d53529e498adef521526f940a6e33264c4139a99913f7f3018344609ed45ea34->leave($__internal_d53529e498adef521526f940a6e33264c4139a99913f7f3018344609ed45ea34_prof);

        
        $__internal_206366ee9f05777a160ce32c3e800804af285ca55905d0724528bbac483b8d84->leave($__internal_206366ee9f05777a160ce32c3e800804af285ca55905d0724528bbac483b8d84_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_86e88a8cf0398ae90d4971f806e3964a9bd8eebcf61262437362a38222a6a998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e88a8cf0398ae90d4971f806e3964a9bd8eebcf61262437362a38222a6a998->enter($__internal_86e88a8cf0398ae90d4971f806e3964a9bd8eebcf61262437362a38222a6a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8bc97fb368514f80f57e845d61e8e7e5b8c50c7a108afd83dc6bbb4d05b1a706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc97fb368514f80f57e845d61e8e7e5b8c50c7a108afd83dc6bbb4d05b1a706->enter($__internal_8bc97fb368514f80f57e845d61e8e7e5b8c50c7a108afd83dc6bbb4d05b1a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_8bc97fb368514f80f57e845d61e8e7e5b8c50c7a108afd83dc6bbb4d05b1a706->leave($__internal_8bc97fb368514f80f57e845d61e8e7e5b8c50c7a108afd83dc6bbb4d05b1a706_prof);

        
        $__internal_86e88a8cf0398ae90d4971f806e3964a9bd8eebcf61262437362a38222a6a998->leave($__internal_86e88a8cf0398ae90d4971f806e3964a9bd8eebcf61262437362a38222a6a998_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5f40b00bc65ecfa14ca9894fcadfd1ff346d7d68ce680e8db041f8ebe792a6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f40b00bc65ecfa14ca9894fcadfd1ff346d7d68ce680e8db041f8ebe792a6de->enter($__internal_5f40b00bc65ecfa14ca9894fcadfd1ff346d7d68ce680e8db041f8ebe792a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b213cd9e9efe880fe10bd00e25c976af164159d80e04e670c74ae1b7efb9e71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b213cd9e9efe880fe10bd00e25c976af164159d80e04e670c74ae1b7efb9e71a->enter($__internal_b213cd9e9efe880fe10bd00e25c976af164159d80e04e670c74ae1b7efb9e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_b213cd9e9efe880fe10bd00e25c976af164159d80e04e670c74ae1b7efb9e71a->leave($__internal_b213cd9e9efe880fe10bd00e25c976af164159d80e04e670c74ae1b7efb9e71a_prof);

        
        $__internal_5f40b00bc65ecfa14ca9894fcadfd1ff346d7d68ce680e8db041f8ebe792a6de->leave($__internal_5f40b00bc65ecfa14ca9894fcadfd1ff346d7d68ce680e8db041f8ebe792a6de_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a7d40131a14e913f672aa4024091f4e032431c4461de3c7cd5f29496e5b71767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d40131a14e913f672aa4024091f4e032431c4461de3c7cd5f29496e5b71767->enter($__internal_a7d40131a14e913f672aa4024091f4e032431c4461de3c7cd5f29496e5b71767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5394186824408eff44363516d80ea743db16d94914f1b5f0ee1664d4bb23d061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5394186824408eff44363516d80ea743db16d94914f1b5f0ee1664d4bb23d061->enter($__internal_5394186824408eff44363516d80ea743db16d94914f1b5f0ee1664d4bb23d061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_5394186824408eff44363516d80ea743db16d94914f1b5f0ee1664d4bb23d061->leave($__internal_5394186824408eff44363516d80ea743db16d94914f1b5f0ee1664d4bb23d061_prof);

        
        $__internal_a7d40131a14e913f672aa4024091f4e032431c4461de3c7cd5f29496e5b71767->leave($__internal_a7d40131a14e913f672aa4024091f4e032431c4461de3c7cd5f29496e5b71767_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
