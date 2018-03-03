<?php

/* form_table_layout.html.twig */
class __TwigTemplate_2a5d77b9141ff22308b0669d30143387c4fd68dae8e8c9efdfe7a421013e6a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c60d455e130bba9c47989ba764cfd9b92a9c83c9d94c0f55e2b4ac64c020a77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60d455e130bba9c47989ba764cfd9b92a9c83c9d94c0f55e2b4ac64c020a77f->enter($__internal_c60d455e130bba9c47989ba764cfd9b92a9c83c9d94c0f55e2b4ac64c020a77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_5decceaf356d9bcd257f869b73030b362078f2f5921a4d7800a0ae83cec7a012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5decceaf356d9bcd257f869b73030b362078f2f5921a4d7800a0ae83cec7a012->enter($__internal_5decceaf356d9bcd257f869b73030b362078f2f5921a4d7800a0ae83cec7a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c60d455e130bba9c47989ba764cfd9b92a9c83c9d94c0f55e2b4ac64c020a77f->leave($__internal_c60d455e130bba9c47989ba764cfd9b92a9c83c9d94c0f55e2b4ac64c020a77f_prof);

        
        $__internal_5decceaf356d9bcd257f869b73030b362078f2f5921a4d7800a0ae83cec7a012->leave($__internal_5decceaf356d9bcd257f869b73030b362078f2f5921a4d7800a0ae83cec7a012_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_df73a2098eb8c1963ead82d6131c9fd60af86cf67a1cd21faa56abf3c01b7ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df73a2098eb8c1963ead82d6131c9fd60af86cf67a1cd21faa56abf3c01b7ffe->enter($__internal_df73a2098eb8c1963ead82d6131c9fd60af86cf67a1cd21faa56abf3c01b7ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9f2058055a67ce838f2716948a29c3e0bdbe4ef75b0a6e7f14ab6395c6b4f729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2058055a67ce838f2716948a29c3e0bdbe4ef75b0a6e7f14ab6395c6b4f729->enter($__internal_9f2058055a67ce838f2716948a29c3e0bdbe4ef75b0a6e7f14ab6395c6b4f729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_9f2058055a67ce838f2716948a29c3e0bdbe4ef75b0a6e7f14ab6395c6b4f729->leave($__internal_9f2058055a67ce838f2716948a29c3e0bdbe4ef75b0a6e7f14ab6395c6b4f729_prof);

        
        $__internal_df73a2098eb8c1963ead82d6131c9fd60af86cf67a1cd21faa56abf3c01b7ffe->leave($__internal_df73a2098eb8c1963ead82d6131c9fd60af86cf67a1cd21faa56abf3c01b7ffe_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ed1515cdcaeb02039c58a789b180cd7c3ae284cbb066803a185e74998ed534ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1515cdcaeb02039c58a789b180cd7c3ae284cbb066803a185e74998ed534ce->enter($__internal_ed1515cdcaeb02039c58a789b180cd7c3ae284cbb066803a185e74998ed534ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f7045edc789ee36866f4ef889561b77a6e127d77ab0cf2c7a50dc9e79b4ffd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7045edc789ee36866f4ef889561b77a6e127d77ab0cf2c7a50dc9e79b4ffd84->enter($__internal_f7045edc789ee36866f4ef889561b77a6e127d77ab0cf2c7a50dc9e79b4ffd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_f7045edc789ee36866f4ef889561b77a6e127d77ab0cf2c7a50dc9e79b4ffd84->leave($__internal_f7045edc789ee36866f4ef889561b77a6e127d77ab0cf2c7a50dc9e79b4ffd84_prof);

        
        $__internal_ed1515cdcaeb02039c58a789b180cd7c3ae284cbb066803a185e74998ed534ce->leave($__internal_ed1515cdcaeb02039c58a789b180cd7c3ae284cbb066803a185e74998ed534ce_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9004d59ce3d545381db9f9e3e054295376a64901941575caa6007b810ce29120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004d59ce3d545381db9f9e3e054295376a64901941575caa6007b810ce29120->enter($__internal_9004d59ce3d545381db9f9e3e054295376a64901941575caa6007b810ce29120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_1b9ecc57df8f23ead6d8a307cf9e020fde93eda709226529eee0d5e7e7942425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9ecc57df8f23ead6d8a307cf9e020fde93eda709226529eee0d5e7e7942425->enter($__internal_1b9ecc57df8f23ead6d8a307cf9e020fde93eda709226529eee0d5e7e7942425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_1b9ecc57df8f23ead6d8a307cf9e020fde93eda709226529eee0d5e7e7942425->leave($__internal_1b9ecc57df8f23ead6d8a307cf9e020fde93eda709226529eee0d5e7e7942425_prof);

        
        $__internal_9004d59ce3d545381db9f9e3e054295376a64901941575caa6007b810ce29120->leave($__internal_9004d59ce3d545381db9f9e3e054295376a64901941575caa6007b810ce29120_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e33a5ff522fa43a520b9dc1c233dcb46ad76d7d0a21b307974059e07a090a83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33a5ff522fa43a520b9dc1c233dcb46ad76d7d0a21b307974059e07a090a83b->enter($__internal_e33a5ff522fa43a520b9dc1c233dcb46ad76d7d0a21b307974059e07a090a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_0bd2fd06fb79789287f6a8d3070ddc7434fb5d31464fb7e4886f2e20068d6f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd2fd06fb79789287f6a8d3070ddc7434fb5d31464fb7e4886f2e20068d6f53->enter($__internal_0bd2fd06fb79789287f6a8d3070ddc7434fb5d31464fb7e4886f2e20068d6f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_0bd2fd06fb79789287f6a8d3070ddc7434fb5d31464fb7e4886f2e20068d6f53->leave($__internal_0bd2fd06fb79789287f6a8d3070ddc7434fb5d31464fb7e4886f2e20068d6f53_prof);

        
        $__internal_e33a5ff522fa43a520b9dc1c233dcb46ad76d7d0a21b307974059e07a090a83b->leave($__internal_e33a5ff522fa43a520b9dc1c233dcb46ad76d7d0a21b307974059e07a090a83b_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
