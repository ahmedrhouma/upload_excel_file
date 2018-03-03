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
        $__internal_498279bd9139372832be1e90d1fd99ac8f130fccd4076d1131175f2c12514f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498279bd9139372832be1e90d1fd99ac8f130fccd4076d1131175f2c12514f61->enter($__internal_498279bd9139372832be1e90d1fd99ac8f130fccd4076d1131175f2c12514f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bd6dc338a18666fca8d288edc01a1e433618579f233b23c3898d1e5c54fd4822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6dc338a18666fca8d288edc01a1e433618579f233b23c3898d1e5c54fd4822->enter($__internal_bd6dc338a18666fca8d288edc01a1e433618579f233b23c3898d1e5c54fd4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_498279bd9139372832be1e90d1fd99ac8f130fccd4076d1131175f2c12514f61->leave($__internal_498279bd9139372832be1e90d1fd99ac8f130fccd4076d1131175f2c12514f61_prof);

        
        $__internal_bd6dc338a18666fca8d288edc01a1e433618579f233b23c3898d1e5c54fd4822->leave($__internal_bd6dc338a18666fca8d288edc01a1e433618579f233b23c3898d1e5c54fd4822_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c45332e21c8a7eb76621e3194a01581e9f7d7925a894a7571b0abf26c6a91efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45332e21c8a7eb76621e3194a01581e9f7d7925a894a7571b0abf26c6a91efd->enter($__internal_c45332e21c8a7eb76621e3194a01581e9f7d7925a894a7571b0abf26c6a91efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_642138094f68ae75b2b86bb597a090aae767cd809937591e462f2efade4e64b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642138094f68ae75b2b86bb597a090aae767cd809937591e462f2efade4e64b5->enter($__internal_642138094f68ae75b2b86bb597a090aae767cd809937591e462f2efade4e64b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_642138094f68ae75b2b86bb597a090aae767cd809937591e462f2efade4e64b5->leave($__internal_642138094f68ae75b2b86bb597a090aae767cd809937591e462f2efade4e64b5_prof);

        
        $__internal_c45332e21c8a7eb76621e3194a01581e9f7d7925a894a7571b0abf26c6a91efd->leave($__internal_c45332e21c8a7eb76621e3194a01581e9f7d7925a894a7571b0abf26c6a91efd_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a367fcb2b7f38ba4c1b805018e2bbb4f4a8a84a86cd8209474a5cc9b3b0f23ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a367fcb2b7f38ba4c1b805018e2bbb4f4a8a84a86cd8209474a5cc9b3b0f23ea->enter($__internal_a367fcb2b7f38ba4c1b805018e2bbb4f4a8a84a86cd8209474a5cc9b3b0f23ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a066b780c6c30e47511c8407192b367e720c170990a0b2bc60f568db3d0bc6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a066b780c6c30e47511c8407192b367e720c170990a0b2bc60f568db3d0bc6a0->enter($__internal_a066b780c6c30e47511c8407192b367e720c170990a0b2bc60f568db3d0bc6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a066b780c6c30e47511c8407192b367e720c170990a0b2bc60f568db3d0bc6a0->leave($__internal_a066b780c6c30e47511c8407192b367e720c170990a0b2bc60f568db3d0bc6a0_prof);

        
        $__internal_a367fcb2b7f38ba4c1b805018e2bbb4f4a8a84a86cd8209474a5cc9b3b0f23ea->leave($__internal_a367fcb2b7f38ba4c1b805018e2bbb4f4a8a84a86cd8209474a5cc9b3b0f23ea_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_29afee89b9e70a67f69964bbf71a719789d5758587990eb38b45670792506525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29afee89b9e70a67f69964bbf71a719789d5758587990eb38b45670792506525->enter($__internal_29afee89b9e70a67f69964bbf71a719789d5758587990eb38b45670792506525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7292a3ed5232bf8c16bcb1912896584b78f955aeb6e5a3086763ad6c3c5e5298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7292a3ed5232bf8c16bcb1912896584b78f955aeb6e5a3086763ad6c3c5e5298->enter($__internal_7292a3ed5232bf8c16bcb1912896584b78f955aeb6e5a3086763ad6c3c5e5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_7292a3ed5232bf8c16bcb1912896584b78f955aeb6e5a3086763ad6c3c5e5298->leave($__internal_7292a3ed5232bf8c16bcb1912896584b78f955aeb6e5a3086763ad6c3c5e5298_prof);

        
        $__internal_29afee89b9e70a67f69964bbf71a719789d5758587990eb38b45670792506525->leave($__internal_29afee89b9e70a67f69964bbf71a719789d5758587990eb38b45670792506525_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c0428e08c165771028c8a2be0cfac7546bbaf65ff55a228d32c3535f86be2902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0428e08c165771028c8a2be0cfac7546bbaf65ff55a228d32c3535f86be2902->enter($__internal_c0428e08c165771028c8a2be0cfac7546bbaf65ff55a228d32c3535f86be2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cc7274e4eba91e521746788708f5b87036363a29473ca122acf228c42ced0ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7274e4eba91e521746788708f5b87036363a29473ca122acf228c42ced0ffb->enter($__internal_cc7274e4eba91e521746788708f5b87036363a29473ca122acf228c42ced0ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_cc7274e4eba91e521746788708f5b87036363a29473ca122acf228c42ced0ffb->leave($__internal_cc7274e4eba91e521746788708f5b87036363a29473ca122acf228c42ced0ffb_prof);

        
        $__internal_c0428e08c165771028c8a2be0cfac7546bbaf65ff55a228d32c3535f86be2902->leave($__internal_c0428e08c165771028c8a2be0cfac7546bbaf65ff55a228d32c3535f86be2902_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_feed8e84c403287324b09de0bca2c3782e0eb50f31a8829015a6b16409d82c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feed8e84c403287324b09de0bca2c3782e0eb50f31a8829015a6b16409d82c0f->enter($__internal_feed8e84c403287324b09de0bca2c3782e0eb50f31a8829015a6b16409d82c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_512dc0a2a16b7cea8b140958309c4f7f83c07047f954b7709ed0fed1ebfa33b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512dc0a2a16b7cea8b140958309c4f7f83c07047f954b7709ed0fed1ebfa33b5->enter($__internal_512dc0a2a16b7cea8b140958309c4f7f83c07047f954b7709ed0fed1ebfa33b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_512dc0a2a16b7cea8b140958309c4f7f83c07047f954b7709ed0fed1ebfa33b5->leave($__internal_512dc0a2a16b7cea8b140958309c4f7f83c07047f954b7709ed0fed1ebfa33b5_prof);

        
        $__internal_feed8e84c403287324b09de0bca2c3782e0eb50f31a8829015a6b16409d82c0f->leave($__internal_feed8e84c403287324b09de0bca2c3782e0eb50f31a8829015a6b16409d82c0f_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_27c81cc2dfe3fdd58547e523e823b7f6a64ab6027316585dcffd2298cb16a947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c81cc2dfe3fdd58547e523e823b7f6a64ab6027316585dcffd2298cb16a947->enter($__internal_27c81cc2dfe3fdd58547e523e823b7f6a64ab6027316585dcffd2298cb16a947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_927861c36b6d0d52c26f658a54a4954f2b62579b961640d6a83df5800220edf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927861c36b6d0d52c26f658a54a4954f2b62579b961640d6a83df5800220edf6->enter($__internal_927861c36b6d0d52c26f658a54a4954f2b62579b961640d6a83df5800220edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_927861c36b6d0d52c26f658a54a4954f2b62579b961640d6a83df5800220edf6->leave($__internal_927861c36b6d0d52c26f658a54a4954f2b62579b961640d6a83df5800220edf6_prof);

        
        $__internal_27c81cc2dfe3fdd58547e523e823b7f6a64ab6027316585dcffd2298cb16a947->leave($__internal_27c81cc2dfe3fdd58547e523e823b7f6a64ab6027316585dcffd2298cb16a947_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ede07aaf9f2d8696a851fbd50174552813520fcbb460a2bfd721c649446dae22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede07aaf9f2d8696a851fbd50174552813520fcbb460a2bfd721c649446dae22->enter($__internal_ede07aaf9f2d8696a851fbd50174552813520fcbb460a2bfd721c649446dae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5655c52fd5ddff6d7c2950b0a6a409a51accf6791d13e27119c824a48a355fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5655c52fd5ddff6d7c2950b0a6a409a51accf6791d13e27119c824a48a355fed->enter($__internal_5655c52fd5ddff6d7c2950b0a6a409a51accf6791d13e27119c824a48a355fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5655c52fd5ddff6d7c2950b0a6a409a51accf6791d13e27119c824a48a355fed->leave($__internal_5655c52fd5ddff6d7c2950b0a6a409a51accf6791d13e27119c824a48a355fed_prof);

        
        $__internal_ede07aaf9f2d8696a851fbd50174552813520fcbb460a2bfd721c649446dae22->leave($__internal_ede07aaf9f2d8696a851fbd50174552813520fcbb460a2bfd721c649446dae22_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b499a3a9ac30e75b973c39b9dd937fd65769fc65b85f8384bbbd660b5fca374b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b499a3a9ac30e75b973c39b9dd937fd65769fc65b85f8384bbbd660b5fca374b->enter($__internal_b499a3a9ac30e75b973c39b9dd937fd65769fc65b85f8384bbbd660b5fca374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d619d8733d0102d5f8167634ca51221f56cc502104051e2a37ed1262a970a312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d619d8733d0102d5f8167634ca51221f56cc502104051e2a37ed1262a970a312->enter($__internal_d619d8733d0102d5f8167634ca51221f56cc502104051e2a37ed1262a970a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d619d8733d0102d5f8167634ca51221f56cc502104051e2a37ed1262a970a312->leave($__internal_d619d8733d0102d5f8167634ca51221f56cc502104051e2a37ed1262a970a312_prof);

        
        $__internal_b499a3a9ac30e75b973c39b9dd937fd65769fc65b85f8384bbbd660b5fca374b->leave($__internal_b499a3a9ac30e75b973c39b9dd937fd65769fc65b85f8384bbbd660b5fca374b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_73937210fa1ffabb4af61a7da4e2004947c391405f85754bd9fb354be39e23c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73937210fa1ffabb4af61a7da4e2004947c391405f85754bd9fb354be39e23c5->enter($__internal_73937210fa1ffabb4af61a7da4e2004947c391405f85754bd9fb354be39e23c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f471e3e4cef98c068b13296876c05f0097c4dff91254522e76d34bf7f0691f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f471e3e4cef98c068b13296876c05f0097c4dff91254522e76d34bf7f0691f11->enter($__internal_f471e3e4cef98c068b13296876c05f0097c4dff91254522e76d34bf7f0691f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f471e3e4cef98c068b13296876c05f0097c4dff91254522e76d34bf7f0691f11->leave($__internal_f471e3e4cef98c068b13296876c05f0097c4dff91254522e76d34bf7f0691f11_prof);

        
        $__internal_73937210fa1ffabb4af61a7da4e2004947c391405f85754bd9fb354be39e23c5->leave($__internal_73937210fa1ffabb4af61a7da4e2004947c391405f85754bd9fb354be39e23c5_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_79b0b516f15b7e7fbed9341a9de495dd86d96dff567d5727842cb18d12bf8e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b0b516f15b7e7fbed9341a9de495dd86d96dff567d5727842cb18d12bf8e5d->enter($__internal_79b0b516f15b7e7fbed9341a9de495dd86d96dff567d5727842cb18d12bf8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9fc61aab0a760bd099ad8e5fc766c75bb329f171907b522612c2285f07e3aada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc61aab0a760bd099ad8e5fc766c75bb329f171907b522612c2285f07e3aada->enter($__internal_9fc61aab0a760bd099ad8e5fc766c75bb329f171907b522612c2285f07e3aada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9fc61aab0a760bd099ad8e5fc766c75bb329f171907b522612c2285f07e3aada->leave($__internal_9fc61aab0a760bd099ad8e5fc766c75bb329f171907b522612c2285f07e3aada_prof);

        
        $__internal_79b0b516f15b7e7fbed9341a9de495dd86d96dff567d5727842cb18d12bf8e5d->leave($__internal_79b0b516f15b7e7fbed9341a9de495dd86d96dff567d5727842cb18d12bf8e5d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_aced5fde562eac334ec66eaa16be94c97ab359dd8f035f0afeedf09d01c6ca67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aced5fde562eac334ec66eaa16be94c97ab359dd8f035f0afeedf09d01c6ca67->enter($__internal_aced5fde562eac334ec66eaa16be94c97ab359dd8f035f0afeedf09d01c6ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_49e2d2cb5d4b282287775efaa2f0e8a3d9f2fbc5f96026701a7f166c8552bd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e2d2cb5d4b282287775efaa2f0e8a3d9f2fbc5f96026701a7f166c8552bd46->enter($__internal_49e2d2cb5d4b282287775efaa2f0e8a3d9f2fbc5f96026701a7f166c8552bd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_49e2d2cb5d4b282287775efaa2f0e8a3d9f2fbc5f96026701a7f166c8552bd46->leave($__internal_49e2d2cb5d4b282287775efaa2f0e8a3d9f2fbc5f96026701a7f166c8552bd46_prof);

        
        $__internal_aced5fde562eac334ec66eaa16be94c97ab359dd8f035f0afeedf09d01c6ca67->leave($__internal_aced5fde562eac334ec66eaa16be94c97ab359dd8f035f0afeedf09d01c6ca67_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8474b98d368f35baf87afb55f956c28fdd4c00a82049d3b9ec62ddd4ec02f89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8474b98d368f35baf87afb55f956c28fdd4c00a82049d3b9ec62ddd4ec02f89a->enter($__internal_8474b98d368f35baf87afb55f956c28fdd4c00a82049d3b9ec62ddd4ec02f89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_90b1801f290a64d16f5441b253ff23236b47c594fd4481be1f54e1adc21ad030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b1801f290a64d16f5441b253ff23236b47c594fd4481be1f54e1adc21ad030->enter($__internal_90b1801f290a64d16f5441b253ff23236b47c594fd4481be1f54e1adc21ad030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_90b1801f290a64d16f5441b253ff23236b47c594fd4481be1f54e1adc21ad030->leave($__internal_90b1801f290a64d16f5441b253ff23236b47c594fd4481be1f54e1adc21ad030_prof);

        
        $__internal_8474b98d368f35baf87afb55f956c28fdd4c00a82049d3b9ec62ddd4ec02f89a->leave($__internal_8474b98d368f35baf87afb55f956c28fdd4c00a82049d3b9ec62ddd4ec02f89a_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a7aaf355defee803edc19ec80e20a2392ef2c8d8b46aab44b2e67e4be754ef1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aaf355defee803edc19ec80e20a2392ef2c8d8b46aab44b2e67e4be754ef1d->enter($__internal_a7aaf355defee803edc19ec80e20a2392ef2c8d8b46aab44b2e67e4be754ef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7ccec198cbfa0f755c716f85a5ebafbfa4371ebf3f18bd213fc62e568a395f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccec198cbfa0f755c716f85a5ebafbfa4371ebf3f18bd213fc62e568a395f9e->enter($__internal_7ccec198cbfa0f755c716f85a5ebafbfa4371ebf3f18bd213fc62e568a395f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7ccec198cbfa0f755c716f85a5ebafbfa4371ebf3f18bd213fc62e568a395f9e->leave($__internal_7ccec198cbfa0f755c716f85a5ebafbfa4371ebf3f18bd213fc62e568a395f9e_prof);

        
        $__internal_a7aaf355defee803edc19ec80e20a2392ef2c8d8b46aab44b2e67e4be754ef1d->leave($__internal_a7aaf355defee803edc19ec80e20a2392ef2c8d8b46aab44b2e67e4be754ef1d_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_53fedd4c4872dd6e71695d144744b853078054ebf7d17cfa73fdc5646162e777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fedd4c4872dd6e71695d144744b853078054ebf7d17cfa73fdc5646162e777->enter($__internal_53fedd4c4872dd6e71695d144744b853078054ebf7d17cfa73fdc5646162e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8053852217cd6d8196ac61457af609adf78bf259c3fc4692bfe42ce0cdf2fee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8053852217cd6d8196ac61457af609adf78bf259c3fc4692bfe42ce0cdf2fee8->enter($__internal_8053852217cd6d8196ac61457af609adf78bf259c3fc4692bfe42ce0cdf2fee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8053852217cd6d8196ac61457af609adf78bf259c3fc4692bfe42ce0cdf2fee8->leave($__internal_8053852217cd6d8196ac61457af609adf78bf259c3fc4692bfe42ce0cdf2fee8_prof);

        
        $__internal_53fedd4c4872dd6e71695d144744b853078054ebf7d17cfa73fdc5646162e777->leave($__internal_53fedd4c4872dd6e71695d144744b853078054ebf7d17cfa73fdc5646162e777_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9385e164a241da2b10c4e386df159dd6e1c2a0dafd42316cf5c5133ca9640e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9385e164a241da2b10c4e386df159dd6e1c2a0dafd42316cf5c5133ca9640e69->enter($__internal_9385e164a241da2b10c4e386df159dd6e1c2a0dafd42316cf5c5133ca9640e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0066893d54bd0e90ff3dfd4518281cb1c732ea1dd8301e25d56945a03053ab45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0066893d54bd0e90ff3dfd4518281cb1c732ea1dd8301e25d56945a03053ab45->enter($__internal_0066893d54bd0e90ff3dfd4518281cb1c732ea1dd8301e25d56945a03053ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0066893d54bd0e90ff3dfd4518281cb1c732ea1dd8301e25d56945a03053ab45->leave($__internal_0066893d54bd0e90ff3dfd4518281cb1c732ea1dd8301e25d56945a03053ab45_prof);

        
        $__internal_9385e164a241da2b10c4e386df159dd6e1c2a0dafd42316cf5c5133ca9640e69->leave($__internal_9385e164a241da2b10c4e386df159dd6e1c2a0dafd42316cf5c5133ca9640e69_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_01915be9c98f8226789d7ddcf7e9b03813eb90158ccc44b01e94e38c38e70510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01915be9c98f8226789d7ddcf7e9b03813eb90158ccc44b01e94e38c38e70510->enter($__internal_01915be9c98f8226789d7ddcf7e9b03813eb90158ccc44b01e94e38c38e70510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_900744c64230b881307dadcea79423fbc7248a9b014597241538913ae726cbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900744c64230b881307dadcea79423fbc7248a9b014597241538913ae726cbda->enter($__internal_900744c64230b881307dadcea79423fbc7248a9b014597241538913ae726cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_900744c64230b881307dadcea79423fbc7248a9b014597241538913ae726cbda->leave($__internal_900744c64230b881307dadcea79423fbc7248a9b014597241538913ae726cbda_prof);

        
        $__internal_01915be9c98f8226789d7ddcf7e9b03813eb90158ccc44b01e94e38c38e70510->leave($__internal_01915be9c98f8226789d7ddcf7e9b03813eb90158ccc44b01e94e38c38e70510_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5d52400558ffde78c4483a1458ef6102e4f102357d82b4871bff3ad2aa87b40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d52400558ffde78c4483a1458ef6102e4f102357d82b4871bff3ad2aa87b40e->enter($__internal_5d52400558ffde78c4483a1458ef6102e4f102357d82b4871bff3ad2aa87b40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_75c21c77286c63e25df61b6139953daefe3182fef94e138a7186ee0fba93a117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c21c77286c63e25df61b6139953daefe3182fef94e138a7186ee0fba93a117->enter($__internal_75c21c77286c63e25df61b6139953daefe3182fef94e138a7186ee0fba93a117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_75c21c77286c63e25df61b6139953daefe3182fef94e138a7186ee0fba93a117->leave($__internal_75c21c77286c63e25df61b6139953daefe3182fef94e138a7186ee0fba93a117_prof);

        
        $__internal_5d52400558ffde78c4483a1458ef6102e4f102357d82b4871bff3ad2aa87b40e->leave($__internal_5d52400558ffde78c4483a1458ef6102e4f102357d82b4871bff3ad2aa87b40e_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1be26d470c2a8111a249baef11a7ae5ffc94615e87fd8cb214b4b4ba88000569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be26d470c2a8111a249baef11a7ae5ffc94615e87fd8cb214b4b4ba88000569->enter($__internal_1be26d470c2a8111a249baef11a7ae5ffc94615e87fd8cb214b4b4ba88000569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_eb52405bdfffc6b42b63d10a3e2a91c99bc4a2ad9b90b495f051ab9e250b25a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb52405bdfffc6b42b63d10a3e2a91c99bc4a2ad9b90b495f051ab9e250b25a3->enter($__internal_eb52405bdfffc6b42b63d10a3e2a91c99bc4a2ad9b90b495f051ab9e250b25a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_eb52405bdfffc6b42b63d10a3e2a91c99bc4a2ad9b90b495f051ab9e250b25a3->leave($__internal_eb52405bdfffc6b42b63d10a3e2a91c99bc4a2ad9b90b495f051ab9e250b25a3_prof);

        
        $__internal_1be26d470c2a8111a249baef11a7ae5ffc94615e87fd8cb214b4b4ba88000569->leave($__internal_1be26d470c2a8111a249baef11a7ae5ffc94615e87fd8cb214b4b4ba88000569_prof);

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
