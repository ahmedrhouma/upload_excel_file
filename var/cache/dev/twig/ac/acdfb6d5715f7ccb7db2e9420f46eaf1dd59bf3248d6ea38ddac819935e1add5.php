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
        $__internal_b249ad3ff9d7d1143e1abe0f8a2db97de03e86ad74da29f5fbc630de743172fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b249ad3ff9d7d1143e1abe0f8a2db97de03e86ad74da29f5fbc630de743172fe->enter($__internal_b249ad3ff9d7d1143e1abe0f8a2db97de03e86ad74da29f5fbc630de743172fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_eae0e764647b1d802c8adf49f4a208b4f270f453e6ba5dbe8db9b66f22983ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae0e764647b1d802c8adf49f4a208b4f270f453e6ba5dbe8db9b66f22983ab4->enter($__internal_eae0e764647b1d802c8adf49f4a208b4f270f453e6ba5dbe8db9b66f22983ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_b249ad3ff9d7d1143e1abe0f8a2db97de03e86ad74da29f5fbc630de743172fe->leave($__internal_b249ad3ff9d7d1143e1abe0f8a2db97de03e86ad74da29f5fbc630de743172fe_prof);

        
        $__internal_eae0e764647b1d802c8adf49f4a208b4f270f453e6ba5dbe8db9b66f22983ab4->leave($__internal_eae0e764647b1d802c8adf49f4a208b4f270f453e6ba5dbe8db9b66f22983ab4_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_4b60e73bc06b676edd1354465f593eb082f1d43b7ccee43dffc15f0ac2b69514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b60e73bc06b676edd1354465f593eb082f1d43b7ccee43dffc15f0ac2b69514->enter($__internal_4b60e73bc06b676edd1354465f593eb082f1d43b7ccee43dffc15f0ac2b69514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e6b766ddf501e64c3d47026bf8a4f62e1e881be790db8aea8012115b4f733b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b766ddf501e64c3d47026bf8a4f62e1e881be790db8aea8012115b4f733b40->enter($__internal_e6b766ddf501e64c3d47026bf8a4f62e1e881be790db8aea8012115b4f733b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e6b766ddf501e64c3d47026bf8a4f62e1e881be790db8aea8012115b4f733b40->leave($__internal_e6b766ddf501e64c3d47026bf8a4f62e1e881be790db8aea8012115b4f733b40_prof);

        
        $__internal_4b60e73bc06b676edd1354465f593eb082f1d43b7ccee43dffc15f0ac2b69514->leave($__internal_4b60e73bc06b676edd1354465f593eb082f1d43b7ccee43dffc15f0ac2b69514_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dc287a6aaef370b25413f56bfb16703af5bab17e4422cd1a09ed378e6fa632d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc287a6aaef370b25413f56bfb16703af5bab17e4422cd1a09ed378e6fa632d4->enter($__internal_dc287a6aaef370b25413f56bfb16703af5bab17e4422cd1a09ed378e6fa632d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_59953f871ad573256b11b7040370789501b245243b92ebb4e3c9ca31b4f1d872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59953f871ad573256b11b7040370789501b245243b92ebb4e3c9ca31b4f1d872->enter($__internal_59953f871ad573256b11b7040370789501b245243b92ebb4e3c9ca31b4f1d872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_59953f871ad573256b11b7040370789501b245243b92ebb4e3c9ca31b4f1d872->leave($__internal_59953f871ad573256b11b7040370789501b245243b92ebb4e3c9ca31b4f1d872_prof);

        
        $__internal_dc287a6aaef370b25413f56bfb16703af5bab17e4422cd1a09ed378e6fa632d4->leave($__internal_dc287a6aaef370b25413f56bfb16703af5bab17e4422cd1a09ed378e6fa632d4_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8b1bec8c73ac90f3883b397f8b0c8bdc63652808bb03419e03e30397a0b8051a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1bec8c73ac90f3883b397f8b0c8bdc63652808bb03419e03e30397a0b8051a->enter($__internal_8b1bec8c73ac90f3883b397f8b0c8bdc63652808bb03419e03e30397a0b8051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_457dd7a879e1c11473b606171d698fc5b6665c467c7577e575100d9466bf9c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457dd7a879e1c11473b606171d698fc5b6665c467c7577e575100d9466bf9c32->enter($__internal_457dd7a879e1c11473b606171d698fc5b6665c467c7577e575100d9466bf9c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_457dd7a879e1c11473b606171d698fc5b6665c467c7577e575100d9466bf9c32->leave($__internal_457dd7a879e1c11473b606171d698fc5b6665c467c7577e575100d9466bf9c32_prof);

        
        $__internal_8b1bec8c73ac90f3883b397f8b0c8bdc63652808bb03419e03e30397a0b8051a->leave($__internal_8b1bec8c73ac90f3883b397f8b0c8bdc63652808bb03419e03e30397a0b8051a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1d466a840d6e3a4ab3deac91db3e6f2d51d34cf09413284a7d13a386907b61e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d466a840d6e3a4ab3deac91db3e6f2d51d34cf09413284a7d13a386907b61e7->enter($__internal_1d466a840d6e3a4ab3deac91db3e6f2d51d34cf09413284a7d13a386907b61e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dc54ffb34c6a02c547060857df45fa7bfe73aae9652e8b9f0bc59c105d731f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc54ffb34c6a02c547060857df45fa7bfe73aae9652e8b9f0bc59c105d731f49->enter($__internal_dc54ffb34c6a02c547060857df45fa7bfe73aae9652e8b9f0bc59c105d731f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_dc54ffb34c6a02c547060857df45fa7bfe73aae9652e8b9f0bc59c105d731f49->leave($__internal_dc54ffb34c6a02c547060857df45fa7bfe73aae9652e8b9f0bc59c105d731f49_prof);

        
        $__internal_1d466a840d6e3a4ab3deac91db3e6f2d51d34cf09413284a7d13a386907b61e7->leave($__internal_1d466a840d6e3a4ab3deac91db3e6f2d51d34cf09413284a7d13a386907b61e7_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_57a5840179c928123eed0cbe8bf855e5752cbeefe5effe4cc4deab1a629f0d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a5840179c928123eed0cbe8bf855e5752cbeefe5effe4cc4deab1a629f0d74->enter($__internal_57a5840179c928123eed0cbe8bf855e5752cbeefe5effe4cc4deab1a629f0d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_cef073aaa5a7361edce297543fcb09fe422c27059178168d1e411f8340df790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef073aaa5a7361edce297543fcb09fe422c27059178168d1e411f8340df790e->enter($__internal_cef073aaa5a7361edce297543fcb09fe422c27059178168d1e411f8340df790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_cef073aaa5a7361edce297543fcb09fe422c27059178168d1e411f8340df790e->leave($__internal_cef073aaa5a7361edce297543fcb09fe422c27059178168d1e411f8340df790e_prof);

        
        $__internal_57a5840179c928123eed0cbe8bf855e5752cbeefe5effe4cc4deab1a629f0d74->leave($__internal_57a5840179c928123eed0cbe8bf855e5752cbeefe5effe4cc4deab1a629f0d74_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3b9b5847c53debab5316c3c058aeaeb33b4440f166f721bc2cfc23f486f05c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9b5847c53debab5316c3c058aeaeb33b4440f166f721bc2cfc23f486f05c8e->enter($__internal_3b9b5847c53debab5316c3c058aeaeb33b4440f166f721bc2cfc23f486f05c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_339694522edf9ac99bdb4b4b49a7eb22e25d98bd3e63e4309d44c66009ad727f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339694522edf9ac99bdb4b4b49a7eb22e25d98bd3e63e4309d44c66009ad727f->enter($__internal_339694522edf9ac99bdb4b4b49a7eb22e25d98bd3e63e4309d44c66009ad727f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_339694522edf9ac99bdb4b4b49a7eb22e25d98bd3e63e4309d44c66009ad727f->leave($__internal_339694522edf9ac99bdb4b4b49a7eb22e25d98bd3e63e4309d44c66009ad727f_prof);

        
        $__internal_3b9b5847c53debab5316c3c058aeaeb33b4440f166f721bc2cfc23f486f05c8e->leave($__internal_3b9b5847c53debab5316c3c058aeaeb33b4440f166f721bc2cfc23f486f05c8e_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_21d553d610068b45f198f30cb0caad4f2fa5bd671827b7f5f5cc8d966c2aa223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d553d610068b45f198f30cb0caad4f2fa5bd671827b7f5f5cc8d966c2aa223->enter($__internal_21d553d610068b45f198f30cb0caad4f2fa5bd671827b7f5f5cc8d966c2aa223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_bb0ab743686e4aced29f426b1b471fa5e424c7842b294dedc027557117d7309c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0ab743686e4aced29f426b1b471fa5e424c7842b294dedc027557117d7309c->enter($__internal_bb0ab743686e4aced29f426b1b471fa5e424c7842b294dedc027557117d7309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_bb0ab743686e4aced29f426b1b471fa5e424c7842b294dedc027557117d7309c->leave($__internal_bb0ab743686e4aced29f426b1b471fa5e424c7842b294dedc027557117d7309c_prof);

        
        $__internal_21d553d610068b45f198f30cb0caad4f2fa5bd671827b7f5f5cc8d966c2aa223->leave($__internal_21d553d610068b45f198f30cb0caad4f2fa5bd671827b7f5f5cc8d966c2aa223_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d043cb0bde0e1ad3a9925282ef7ba8069bde8c3cfb0ed0af27eb94b49383bbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d043cb0bde0e1ad3a9925282ef7ba8069bde8c3cfb0ed0af27eb94b49383bbf5->enter($__internal_d043cb0bde0e1ad3a9925282ef7ba8069bde8c3cfb0ed0af27eb94b49383bbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a2f229a84a0c33ed55b27710fdb4e496ae58ba5a6f34cb43eab97d106501b784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f229a84a0c33ed55b27710fdb4e496ae58ba5a6f34cb43eab97d106501b784->enter($__internal_a2f229a84a0c33ed55b27710fdb4e496ae58ba5a6f34cb43eab97d106501b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a2f229a84a0c33ed55b27710fdb4e496ae58ba5a6f34cb43eab97d106501b784->leave($__internal_a2f229a84a0c33ed55b27710fdb4e496ae58ba5a6f34cb43eab97d106501b784_prof);

        
        $__internal_d043cb0bde0e1ad3a9925282ef7ba8069bde8c3cfb0ed0af27eb94b49383bbf5->leave($__internal_d043cb0bde0e1ad3a9925282ef7ba8069bde8c3cfb0ed0af27eb94b49383bbf5_prof);

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
