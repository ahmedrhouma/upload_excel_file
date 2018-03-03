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
        $__internal_4daae43b348d88fa1dd5c431f413d6ea90e599edc60fd1a8de46d85ffa315282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4daae43b348d88fa1dd5c431f413d6ea90e599edc60fd1a8de46d85ffa315282->enter($__internal_4daae43b348d88fa1dd5c431f413d6ea90e599edc60fd1a8de46d85ffa315282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_863d394acc8e80998dc80c864190e341e6389452aecdab59a7d1c9abce296ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863d394acc8e80998dc80c864190e341e6389452aecdab59a7d1c9abce296ac6->enter($__internal_863d394acc8e80998dc80c864190e341e6389452aecdab59a7d1c9abce296ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4daae43b348d88fa1dd5c431f413d6ea90e599edc60fd1a8de46d85ffa315282->leave($__internal_4daae43b348d88fa1dd5c431f413d6ea90e599edc60fd1a8de46d85ffa315282_prof);

        
        $__internal_863d394acc8e80998dc80c864190e341e6389452aecdab59a7d1c9abce296ac6->leave($__internal_863d394acc8e80998dc80c864190e341e6389452aecdab59a7d1c9abce296ac6_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1c0cb988a8aa92501c59c4c88182cd41e34120fd6dd0f0800112069858c1d9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0cb988a8aa92501c59c4c88182cd41e34120fd6dd0f0800112069858c1d9a5->enter($__internal_1c0cb988a8aa92501c59c4c88182cd41e34120fd6dd0f0800112069858c1d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8633167c4fdbe764922ea0727fb7c5344b5e0e2de750c069ef589276dcd3535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8633167c4fdbe764922ea0727fb7c5344b5e0e2de750c069ef589276dcd3535e->enter($__internal_8633167c4fdbe764922ea0727fb7c5344b5e0e2de750c069ef589276dcd3535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8633167c4fdbe764922ea0727fb7c5344b5e0e2de750c069ef589276dcd3535e->leave($__internal_8633167c4fdbe764922ea0727fb7c5344b5e0e2de750c069ef589276dcd3535e_prof);

        
        $__internal_1c0cb988a8aa92501c59c4c88182cd41e34120fd6dd0f0800112069858c1d9a5->leave($__internal_1c0cb988a8aa92501c59c4c88182cd41e34120fd6dd0f0800112069858c1d9a5_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6fa7a4b0c722c174e7e47ae180f5015c4bd6487c04bcfb516a6f2c12dc8b0714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa7a4b0c722c174e7e47ae180f5015c4bd6487c04bcfb516a6f2c12dc8b0714->enter($__internal_6fa7a4b0c722c174e7e47ae180f5015c4bd6487c04bcfb516a6f2c12dc8b0714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_47b7f02e6aed599752e821866ca7f9bb315fc28aac91b380305f34fc03e16ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b7f02e6aed599752e821866ca7f9bb315fc28aac91b380305f34fc03e16ee5->enter($__internal_47b7f02e6aed599752e821866ca7f9bb315fc28aac91b380305f34fc03e16ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_47b7f02e6aed599752e821866ca7f9bb315fc28aac91b380305f34fc03e16ee5->leave($__internal_47b7f02e6aed599752e821866ca7f9bb315fc28aac91b380305f34fc03e16ee5_prof);

        
        $__internal_6fa7a4b0c722c174e7e47ae180f5015c4bd6487c04bcfb516a6f2c12dc8b0714->leave($__internal_6fa7a4b0c722c174e7e47ae180f5015c4bd6487c04bcfb516a6f2c12dc8b0714_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0f89b648d6447f7f03bec6c97ce9dcbfdf06a9b0612bba0b5cae82c43faff25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f89b648d6447f7f03bec6c97ce9dcbfdf06a9b0612bba0b5cae82c43faff25e->enter($__internal_0f89b648d6447f7f03bec6c97ce9dcbfdf06a9b0612bba0b5cae82c43faff25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4d4baa0b052d9bd00b57049f05b8656725f01e38580c7f467bf71f493d93bffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4baa0b052d9bd00b57049f05b8656725f01e38580c7f467bf71f493d93bffb->enter($__internal_4d4baa0b052d9bd00b57049f05b8656725f01e38580c7f467bf71f493d93bffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4d4baa0b052d9bd00b57049f05b8656725f01e38580c7f467bf71f493d93bffb->leave($__internal_4d4baa0b052d9bd00b57049f05b8656725f01e38580c7f467bf71f493d93bffb_prof);

        
        $__internal_0f89b648d6447f7f03bec6c97ce9dcbfdf06a9b0612bba0b5cae82c43faff25e->leave($__internal_0f89b648d6447f7f03bec6c97ce9dcbfdf06a9b0612bba0b5cae82c43faff25e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_790f4ba85b2205d25bbec47e5202919b4480d740cbd11629888b7912224db2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790f4ba85b2205d25bbec47e5202919b4480d740cbd11629888b7912224db2df->enter($__internal_790f4ba85b2205d25bbec47e5202919b4480d740cbd11629888b7912224db2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_f06996200244f8820ef4bb2604a3c65c0b968d45d45bfb2285b7f2c41ea694e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06996200244f8820ef4bb2604a3c65c0b968d45d45bfb2285b7f2c41ea694e4->enter($__internal_f06996200244f8820ef4bb2604a3c65c0b968d45d45bfb2285b7f2c41ea694e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_f06996200244f8820ef4bb2604a3c65c0b968d45d45bfb2285b7f2c41ea694e4->leave($__internal_f06996200244f8820ef4bb2604a3c65c0b968d45d45bfb2285b7f2c41ea694e4_prof);

        
        $__internal_790f4ba85b2205d25bbec47e5202919b4480d740cbd11629888b7912224db2df->leave($__internal_790f4ba85b2205d25bbec47e5202919b4480d740cbd11629888b7912224db2df_prof);

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
