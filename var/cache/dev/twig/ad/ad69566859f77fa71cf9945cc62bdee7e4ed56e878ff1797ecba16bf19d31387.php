<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_fd766481420ea15c1e850ecb2e6abb14af5eadfa224f9b99fe83c472fcd6f1cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22673ab7d498134542e7aaf31a34f6766d77b84009ff08b617e2633c884ceb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22673ab7d498134542e7aaf31a34f6766d77b84009ff08b617e2633c884ceb60->enter($__internal_22673ab7d498134542e7aaf31a34f6766d77b84009ff08b617e2633c884ceb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_0327bef9238fbbc62325762f7f64036762890aa9c43ca05a052662c8c76282ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0327bef9238fbbc62325762f7f64036762890aa9c43ca05a052662c8c76282ac->enter($__internal_0327bef9238fbbc62325762f7f64036762890aa9c43ca05a052662c8c76282ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_22673ab7d498134542e7aaf31a34f6766d77b84009ff08b617e2633c884ceb60->leave($__internal_22673ab7d498134542e7aaf31a34f6766d77b84009ff08b617e2633c884ceb60_prof);

        
        $__internal_0327bef9238fbbc62325762f7f64036762890aa9c43ca05a052662c8c76282ac->leave($__internal_0327bef9238fbbc62325762f7f64036762890aa9c43ca05a052662c8c76282ac_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2ece05258a27a5c0610f926a012fe98ab5e5dd2b29d51fa1c601a0dd9ff44a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ece05258a27a5c0610f926a012fe98ab5e5dd2b29d51fa1c601a0dd9ff44a50->enter($__internal_2ece05258a27a5c0610f926a012fe98ab5e5dd2b29d51fa1c601a0dd9ff44a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_91f9d4ffee876528b6c5340abc58d2a6951ac47811819f9e0e564ddca9a3a495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f9d4ffee876528b6c5340abc58d2a6951ac47811819f9e0e564ddca9a3a495->enter($__internal_91f9d4ffee876528b6c5340abc58d2a6951ac47811819f9e0e564ddca9a3a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_91f9d4ffee876528b6c5340abc58d2a6951ac47811819f9e0e564ddca9a3a495->leave($__internal_91f9d4ffee876528b6c5340abc58d2a6951ac47811819f9e0e564ddca9a3a495_prof);

        
        $__internal_2ece05258a27a5c0610f926a012fe98ab5e5dd2b29d51fa1c601a0dd9ff44a50->leave($__internal_2ece05258a27a5c0610f926a012fe98ab5e5dd2b29d51fa1c601a0dd9ff44a50_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_71711c5659028cc091c30d263ae304f83e3d5d8ff3a8f9096b3c7d7fade8082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71711c5659028cc091c30d263ae304f83e3d5d8ff3a8f9096b3c7d7fade8082b->enter($__internal_71711c5659028cc091c30d263ae304f83e3d5d8ff3a8f9096b3c7d7fade8082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b005eecddce0b5ca34962c2aab7c2b300c1bd51b9d205ea3368a96944a62861e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b005eecddce0b5ca34962c2aab7c2b300c1bd51b9d205ea3368a96944a62861e->enter($__internal_b005eecddce0b5ca34962c2aab7c2b300c1bd51b9d205ea3368a96944a62861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b005eecddce0b5ca34962c2aab7c2b300c1bd51b9d205ea3368a96944a62861e->leave($__internal_b005eecddce0b5ca34962c2aab7c2b300c1bd51b9d205ea3368a96944a62861e_prof);

        
        $__internal_71711c5659028cc091c30d263ae304f83e3d5d8ff3a8f9096b3c7d7fade8082b->leave($__internal_71711c5659028cc091c30d263ae304f83e3d5d8ff3a8f9096b3c7d7fade8082b_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5bda7454acc75d6e8698c6160982aa652f8074f2f17cff1417f0dc77ad1e6df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bda7454acc75d6e8698c6160982aa652f8074f2f17cff1417f0dc77ad1e6df5->enter($__internal_5bda7454acc75d6e8698c6160982aa652f8074f2f17cff1417f0dc77ad1e6df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c637a9b946b5589054b4fe2bf99a3e4bf897f09206ed6120d608226fa5fa8406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c637a9b946b5589054b4fe2bf99a3e4bf897f09206ed6120d608226fa5fa8406->enter($__internal_c637a9b946b5589054b4fe2bf99a3e4bf897f09206ed6120d608226fa5fa8406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_c637a9b946b5589054b4fe2bf99a3e4bf897f09206ed6120d608226fa5fa8406->leave($__internal_c637a9b946b5589054b4fe2bf99a3e4bf897f09206ed6120d608226fa5fa8406_prof);

        
        $__internal_5bda7454acc75d6e8698c6160982aa652f8074f2f17cff1417f0dc77ad1e6df5->leave($__internal_5bda7454acc75d6e8698c6160982aa652f8074f2f17cff1417f0dc77ad1e6df5_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e9e47582ac5641519f06c6494c3f9dc0bf5896c59d4a4b3c7e17597f7be9b164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e47582ac5641519f06c6494c3f9dc0bf5896c59d4a4b3c7e17597f7be9b164->enter($__internal_e9e47582ac5641519f06c6494c3f9dc0bf5896c59d4a4b3c7e17597f7be9b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_43896a40ebc918ea5e7897aca6777c190d82e30b2b7a4a232456c494aa2b2967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43896a40ebc918ea5e7897aca6777c190d82e30b2b7a4a232456c494aa2b2967->enter($__internal_43896a40ebc918ea5e7897aca6777c190d82e30b2b7a4a232456c494aa2b2967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_43896a40ebc918ea5e7897aca6777c190d82e30b2b7a4a232456c494aa2b2967->leave($__internal_43896a40ebc918ea5e7897aca6777c190d82e30b2b7a4a232456c494aa2b2967_prof);

        
        $__internal_e9e47582ac5641519f06c6494c3f9dc0bf5896c59d4a4b3c7e17597f7be9b164->leave($__internal_e9e47582ac5641519f06c6494c3f9dc0bf5896c59d4a4b3c7e17597f7be9b164_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fe06f60d9ce95884f04e2e7aab2bd1849e7313bbd2b5c19bab1c68fd204bc123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe06f60d9ce95884f04e2e7aab2bd1849e7313bbd2b5c19bab1c68fd204bc123->enter($__internal_fe06f60d9ce95884f04e2e7aab2bd1849e7313bbd2b5c19bab1c68fd204bc123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_04dd44aa93f1de4217ffca451c8c539b1d764df43c9fabeef3f229caffc812f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dd44aa93f1de4217ffca451c8c539b1d764df43c9fabeef3f229caffc812f9->enter($__internal_04dd44aa93f1de4217ffca451c8c539b1d764df43c9fabeef3f229caffc812f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_04dd44aa93f1de4217ffca451c8c539b1d764df43c9fabeef3f229caffc812f9->leave($__internal_04dd44aa93f1de4217ffca451c8c539b1d764df43c9fabeef3f229caffc812f9_prof);

        
        $__internal_fe06f60d9ce95884f04e2e7aab2bd1849e7313bbd2b5c19bab1c68fd204bc123->leave($__internal_fe06f60d9ce95884f04e2e7aab2bd1849e7313bbd2b5c19bab1c68fd204bc123_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0ebc9ad40ac8bc03c31935c14c441a871fc0bd2abab854cecd67cdc048a78b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebc9ad40ac8bc03c31935c14c441a871fc0bd2abab854cecd67cdc048a78b9e->enter($__internal_0ebc9ad40ac8bc03c31935c14c441a871fc0bd2abab854cecd67cdc048a78b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0f46e0d83451334f69d4b05927527aa46aad2dde324d544b1cbd95cb9f6e37f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f46e0d83451334f69d4b05927527aa46aad2dde324d544b1cbd95cb9f6e37f1->enter($__internal_0f46e0d83451334f69d4b05927527aa46aad2dde324d544b1cbd95cb9f6e37f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0f46e0d83451334f69d4b05927527aa46aad2dde324d544b1cbd95cb9f6e37f1->leave($__internal_0f46e0d83451334f69d4b05927527aa46aad2dde324d544b1cbd95cb9f6e37f1_prof);

        
        $__internal_0ebc9ad40ac8bc03c31935c14c441a871fc0bd2abab854cecd67cdc048a78b9e->leave($__internal_0ebc9ad40ac8bc03c31935c14c441a871fc0bd2abab854cecd67cdc048a78b9e_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e4b90bdf21698b62d32f2dfafcd7dfa164417eb5a47bbec92effcf1a07186546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b90bdf21698b62d32f2dfafcd7dfa164417eb5a47bbec92effcf1a07186546->enter($__internal_e4b90bdf21698b62d32f2dfafcd7dfa164417eb5a47bbec92effcf1a07186546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_77a07d3a6f46e28c92ea2406a225f4741e91bc6d05cb42bdff1cb2b41f8db639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a07d3a6f46e28c92ea2406a225f4741e91bc6d05cb42bdff1cb2b41f8db639->enter($__internal_77a07d3a6f46e28c92ea2406a225f4741e91bc6d05cb42bdff1cb2b41f8db639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_77a07d3a6f46e28c92ea2406a225f4741e91bc6d05cb42bdff1cb2b41f8db639->leave($__internal_77a07d3a6f46e28c92ea2406a225f4741e91bc6d05cb42bdff1cb2b41f8db639_prof);

        
        $__internal_e4b90bdf21698b62d32f2dfafcd7dfa164417eb5a47bbec92effcf1a07186546->leave($__internal_e4b90bdf21698b62d32f2dfafcd7dfa164417eb5a47bbec92effcf1a07186546_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7f2d1bb39fc09fbc3624b1229d95b1779387d6764b17d86178b3b7e560e2bd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2d1bb39fc09fbc3624b1229d95b1779387d6764b17d86178b3b7e560e2bd70->enter($__internal_7f2d1bb39fc09fbc3624b1229d95b1779387d6764b17d86178b3b7e560e2bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2835b0f4c64e8fa976384938b319c82316d5da23863e375165ab3184461d9d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2835b0f4c64e8fa976384938b319c82316d5da23863e375165ab3184461d9d90->enter($__internal_2835b0f4c64e8fa976384938b319c82316d5da23863e375165ab3184461d9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2835b0f4c64e8fa976384938b319c82316d5da23863e375165ab3184461d9d90->leave($__internal_2835b0f4c64e8fa976384938b319c82316d5da23863e375165ab3184461d9d90_prof);

        
        $__internal_7f2d1bb39fc09fbc3624b1229d95b1779387d6764b17d86178b3b7e560e2bd70->leave($__internal_7f2d1bb39fc09fbc3624b1229d95b1779387d6764b17d86178b3b7e560e2bd70_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7c4b5b57cc8929367f4c663db2d1e6075e192b7a69982465e7778cf4df18b85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4b5b57cc8929367f4c663db2d1e6075e192b7a69982465e7778cf4df18b85a->enter($__internal_7c4b5b57cc8929367f4c663db2d1e6075e192b7a69982465e7778cf4df18b85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f2f85ef5c31d3a463f39402cb1555850807c18204e4caf0e0dec1a464eb53a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f85ef5c31d3a463f39402cb1555850807c18204e4caf0e0dec1a464eb53a9d->enter($__internal_f2f85ef5c31d3a463f39402cb1555850807c18204e4caf0e0dec1a464eb53a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_f2f85ef5c31d3a463f39402cb1555850807c18204e4caf0e0dec1a464eb53a9d->leave($__internal_f2f85ef5c31d3a463f39402cb1555850807c18204e4caf0e0dec1a464eb53a9d_prof);

        
        $__internal_7c4b5b57cc8929367f4c663db2d1e6075e192b7a69982465e7778cf4df18b85a->leave($__internal_7c4b5b57cc8929367f4c663db2d1e6075e192b7a69982465e7778cf4df18b85a_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4495edb099d22667492612399b4bb6042d0f5e50f101e5ff7767f078bb12cc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4495edb099d22667492612399b4bb6042d0f5e50f101e5ff7767f078bb12cc65->enter($__internal_4495edb099d22667492612399b4bb6042d0f5e50f101e5ff7767f078bb12cc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_57d4d41632d4c5dd9a9c117695e005a3a66358376cf76e10ded3f095b59a8fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d4d41632d4c5dd9a9c117695e005a3a66358376cf76e10ded3f095b59a8fc6->enter($__internal_57d4d41632d4c5dd9a9c117695e005a3a66358376cf76e10ded3f095b59a8fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_57d4d41632d4c5dd9a9c117695e005a3a66358376cf76e10ded3f095b59a8fc6->leave($__internal_57d4d41632d4c5dd9a9c117695e005a3a66358376cf76e10ded3f095b59a8fc6_prof);

        
        $__internal_4495edb099d22667492612399b4bb6042d0f5e50f101e5ff7767f078bb12cc65->leave($__internal_4495edb099d22667492612399b4bb6042d0f5e50f101e5ff7767f078bb12cc65_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bb39ba688e23a18cf375c83755530ad2081e3c8b7738cc48f45a13d8677708ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb39ba688e23a18cf375c83755530ad2081e3c8b7738cc48f45a13d8677708ec->enter($__internal_bb39ba688e23a18cf375c83755530ad2081e3c8b7738cc48f45a13d8677708ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_073a80116a782dab0ca3b110f5b54116830b80969d85bd0b51e8b80a7c9e48a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073a80116a782dab0ca3b110f5b54116830b80969d85bd0b51e8b80a7c9e48a9->enter($__internal_073a80116a782dab0ca3b110f5b54116830b80969d85bd0b51e8b80a7c9e48a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_073a80116a782dab0ca3b110f5b54116830b80969d85bd0b51e8b80a7c9e48a9->leave($__internal_073a80116a782dab0ca3b110f5b54116830b80969d85bd0b51e8b80a7c9e48a9_prof);

        
        $__internal_bb39ba688e23a18cf375c83755530ad2081e3c8b7738cc48f45a13d8677708ec->leave($__internal_bb39ba688e23a18cf375c83755530ad2081e3c8b7738cc48f45a13d8677708ec_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_06e285c83011e29f0c9d839860c5f92f56a6330bdb9fd766a53e113ffc222a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e285c83011e29f0c9d839860c5f92f56a6330bdb9fd766a53e113ffc222a3d->enter($__internal_06e285c83011e29f0c9d839860c5f92f56a6330bdb9fd766a53e113ffc222a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5a950beeffeee68bcb304eaf7760b8bd934ab662ae6e8120aec5d8839b25154c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a950beeffeee68bcb304eaf7760b8bd934ab662ae6e8120aec5d8839b25154c->enter($__internal_5a950beeffeee68bcb304eaf7760b8bd934ab662ae6e8120aec5d8839b25154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a950beeffeee68bcb304eaf7760b8bd934ab662ae6e8120aec5d8839b25154c->leave($__internal_5a950beeffeee68bcb304eaf7760b8bd934ab662ae6e8120aec5d8839b25154c_prof);

        
        $__internal_06e285c83011e29f0c9d839860c5f92f56a6330bdb9fd766a53e113ffc222a3d->leave($__internal_06e285c83011e29f0c9d839860c5f92f56a6330bdb9fd766a53e113ffc222a3d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_07be47d4376efd20460f9ee60c7387b849bac28063aa6e942de871f47b1a1364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07be47d4376efd20460f9ee60c7387b849bac28063aa6e942de871f47b1a1364->enter($__internal_07be47d4376efd20460f9ee60c7387b849bac28063aa6e942de871f47b1a1364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3eca303c0568496c1146e704e00acdbaccab01ac2726abec49ae39ef7c9340b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eca303c0568496c1146e704e00acdbaccab01ac2726abec49ae39ef7c9340b4->enter($__internal_3eca303c0568496c1146e704e00acdbaccab01ac2726abec49ae39ef7c9340b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3eca303c0568496c1146e704e00acdbaccab01ac2726abec49ae39ef7c9340b4->leave($__internal_3eca303c0568496c1146e704e00acdbaccab01ac2726abec49ae39ef7c9340b4_prof);

        
        $__internal_07be47d4376efd20460f9ee60c7387b849bac28063aa6e942de871f47b1a1364->leave($__internal_07be47d4376efd20460f9ee60c7387b849bac28063aa6e942de871f47b1a1364_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8fa870935468f30cd1984e353b065dbe37438177ea3ce3b51557f372df6e2671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa870935468f30cd1984e353b065dbe37438177ea3ce3b51557f372df6e2671->enter($__internal_8fa870935468f30cd1984e353b065dbe37438177ea3ce3b51557f372df6e2671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7c78eec5d71c83380151f0d7d2ae77db92b57a73f09402f2f14c80d4d1bebf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c78eec5d71c83380151f0d7d2ae77db92b57a73f09402f2f14c80d4d1bebf06->enter($__internal_7c78eec5d71c83380151f0d7d2ae77db92b57a73f09402f2f14c80d4d1bebf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7c78eec5d71c83380151f0d7d2ae77db92b57a73f09402f2f14c80d4d1bebf06->leave($__internal_7c78eec5d71c83380151f0d7d2ae77db92b57a73f09402f2f14c80d4d1bebf06_prof);

        
        $__internal_8fa870935468f30cd1984e353b065dbe37438177ea3ce3b51557f372df6e2671->leave($__internal_8fa870935468f30cd1984e353b065dbe37438177ea3ce3b51557f372df6e2671_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_214d5fa3aee869e3207c0fb26b85f507b216e47c48325512e551db3a0968151a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214d5fa3aee869e3207c0fb26b85f507b216e47c48325512e551db3a0968151a->enter($__internal_214d5fa3aee869e3207c0fb26b85f507b216e47c48325512e551db3a0968151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_53fa77d3117352929bad366988736f7bdf7918b9738a802daae1017edf670ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fa77d3117352929bad366988736f7bdf7918b9738a802daae1017edf670ada->enter($__internal_53fa77d3117352929bad366988736f7bdf7918b9738a802daae1017edf670ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_53fa77d3117352929bad366988736f7bdf7918b9738a802daae1017edf670ada->leave($__internal_53fa77d3117352929bad366988736f7bdf7918b9738a802daae1017edf670ada_prof);

        
        $__internal_214d5fa3aee869e3207c0fb26b85f507b216e47c48325512e551db3a0968151a->leave($__internal_214d5fa3aee869e3207c0fb26b85f507b216e47c48325512e551db3a0968151a_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4800ee4d750793613796895706167c48616a60d1856d646955d4bab4228a1a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4800ee4d750793613796895706167c48616a60d1856d646955d4bab4228a1a75->enter($__internal_4800ee4d750793613796895706167c48616a60d1856d646955d4bab4228a1a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ed8446b22a84cc9ca9cc5c1114d2085cc50efc3ce792543450f856464fedb688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8446b22a84cc9ca9cc5c1114d2085cc50efc3ce792543450f856464fedb688->enter($__internal_ed8446b22a84cc9ca9cc5c1114d2085cc50efc3ce792543450f856464fedb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_ed8446b22a84cc9ca9cc5c1114d2085cc50efc3ce792543450f856464fedb688->leave($__internal_ed8446b22a84cc9ca9cc5c1114d2085cc50efc3ce792543450f856464fedb688_prof);

        
        $__internal_4800ee4d750793613796895706167c48616a60d1856d646955d4bab4228a1a75->leave($__internal_4800ee4d750793613796895706167c48616a60d1856d646955d4bab4228a1a75_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8d5887cd6ea29e606b8308c0cdface1074eda45035eb91e058f1f34029cee703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5887cd6ea29e606b8308c0cdface1074eda45035eb91e058f1f34029cee703->enter($__internal_8d5887cd6ea29e606b8308c0cdface1074eda45035eb91e058f1f34029cee703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_84553408db6588ab4883aa4e8827cb09067fe7d48573c58ab83ddfb7498de189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84553408db6588ab4883aa4e8827cb09067fe7d48573c58ab83ddfb7498de189->enter($__internal_84553408db6588ab4883aa4e8827cb09067fe7d48573c58ab83ddfb7498de189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_84553408db6588ab4883aa4e8827cb09067fe7d48573c58ab83ddfb7498de189->leave($__internal_84553408db6588ab4883aa4e8827cb09067fe7d48573c58ab83ddfb7498de189_prof);

        
        $__internal_8d5887cd6ea29e606b8308c0cdface1074eda45035eb91e058f1f34029cee703->leave($__internal_8d5887cd6ea29e606b8308c0cdface1074eda45035eb91e058f1f34029cee703_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7f954b7ff9c2d2633e03d8e8eade2bbaa6508be8420025477fa4322eae21c532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f954b7ff9c2d2633e03d8e8eade2bbaa6508be8420025477fa4322eae21c532->enter($__internal_7f954b7ff9c2d2633e03d8e8eade2bbaa6508be8420025477fa4322eae21c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_afeea08112cf000be50f0758a15ffb711630ecdf30a68801e7794476ec87434e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afeea08112cf000be50f0758a15ffb711630ecdf30a68801e7794476ec87434e->enter($__internal_afeea08112cf000be50f0758a15ffb711630ecdf30a68801e7794476ec87434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_afeea08112cf000be50f0758a15ffb711630ecdf30a68801e7794476ec87434e->leave($__internal_afeea08112cf000be50f0758a15ffb711630ecdf30a68801e7794476ec87434e_prof);

        
        $__internal_7f954b7ff9c2d2633e03d8e8eade2bbaa6508be8420025477fa4322eae21c532->leave($__internal_7f954b7ff9c2d2633e03d8e8eade2bbaa6508be8420025477fa4322eae21c532_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
