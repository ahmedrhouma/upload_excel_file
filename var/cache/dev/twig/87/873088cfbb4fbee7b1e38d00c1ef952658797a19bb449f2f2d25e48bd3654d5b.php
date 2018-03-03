<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_e25d36a859ab94640a7450dc3e3611cead103fb3793de393700c462c4ddb7641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12959c0c3e2ae2ca0910c78343718563aa09af4d96c3f7764b5937f8c1e84c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12959c0c3e2ae2ca0910c78343718563aa09af4d96c3f7764b5937f8c1e84c94->enter($__internal_12959c0c3e2ae2ca0910c78343718563aa09af4d96c3f7764b5937f8c1e84c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_10a67cc783e8736a808c2830192bc8282ddbf9750485380f56e205b7891e8536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a67cc783e8736a808c2830192bc8282ddbf9750485380f56e205b7891e8536->enter($__internal_10a67cc783e8736a808c2830192bc8282ddbf9750485380f56e205b7891e8536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_12959c0c3e2ae2ca0910c78343718563aa09af4d96c3f7764b5937f8c1e84c94->leave($__internal_12959c0c3e2ae2ca0910c78343718563aa09af4d96c3f7764b5937f8c1e84c94_prof);

        
        $__internal_10a67cc783e8736a808c2830192bc8282ddbf9750485380f56e205b7891e8536->leave($__internal_10a67cc783e8736a808c2830192bc8282ddbf9750485380f56e205b7891e8536_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_695293f6de8361dd88ca13efd7da7ef54ffd99c369adb8101605d6dceec3f9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695293f6de8361dd88ca13efd7da7ef54ffd99c369adb8101605d6dceec3f9c7->enter($__internal_695293f6de8361dd88ca13efd7da7ef54ffd99c369adb8101605d6dceec3f9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9717e1a0dc97c8e72ade3e179abcae97c955735bdb5f7f464f08e54b117fcf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9717e1a0dc97c8e72ade3e179abcae97c955735bdb5f7f464f08e54b117fcf11->enter($__internal_9717e1a0dc97c8e72ade3e179abcae97c955735bdb5f7f464f08e54b117fcf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_9717e1a0dc97c8e72ade3e179abcae97c955735bdb5f7f464f08e54b117fcf11->leave($__internal_9717e1a0dc97c8e72ade3e179abcae97c955735bdb5f7f464f08e54b117fcf11_prof);

        
        $__internal_695293f6de8361dd88ca13efd7da7ef54ffd99c369adb8101605d6dceec3f9c7->leave($__internal_695293f6de8361dd88ca13efd7da7ef54ffd99c369adb8101605d6dceec3f9c7_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_50b586f0b9666f9fbfd7a95f0ca14fa9b9d82d4da0a711c0af7de3b01673f3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b586f0b9666f9fbfd7a95f0ca14fa9b9d82d4da0a711c0af7de3b01673f3b6->enter($__internal_50b586f0b9666f9fbfd7a95f0ca14fa9b9d82d4da0a711c0af7de3b01673f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6a09ff11a29bc668473658d5afe01f94811d1cb64628b851d410def7175a0dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a09ff11a29bc668473658d5afe01f94811d1cb64628b851d410def7175a0dfd->enter($__internal_6a09ff11a29bc668473658d5afe01f94811d1cb64628b851d410def7175a0dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_6a09ff11a29bc668473658d5afe01f94811d1cb64628b851d410def7175a0dfd->leave($__internal_6a09ff11a29bc668473658d5afe01f94811d1cb64628b851d410def7175a0dfd_prof);

        
        $__internal_50b586f0b9666f9fbfd7a95f0ca14fa9b9d82d4da0a711c0af7de3b01673f3b6->leave($__internal_50b586f0b9666f9fbfd7a95f0ca14fa9b9d82d4da0a711c0af7de3b01673f3b6_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_dc8543f1b06a093ef3e3475d5683be3316d747e22b8369181d8bbebc3dc88073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8543f1b06a093ef3e3475d5683be3316d747e22b8369181d8bbebc3dc88073->enter($__internal_dc8543f1b06a093ef3e3475d5683be3316d747e22b8369181d8bbebc3dc88073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4845675a75c84c021a4e0271dd6816a7c670eb43ac9c09395070029b4a38eba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4845675a75c84c021a4e0271dd6816a7c670eb43ac9c09395070029b4a38eba3->enter($__internal_4845675a75c84c021a4e0271dd6816a7c670eb43ac9c09395070029b4a38eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_4845675a75c84c021a4e0271dd6816a7c670eb43ac9c09395070029b4a38eba3->leave($__internal_4845675a75c84c021a4e0271dd6816a7c670eb43ac9c09395070029b4a38eba3_prof);

        
        $__internal_dc8543f1b06a093ef3e3475d5683be3316d747e22b8369181d8bbebc3dc88073->leave($__internal_dc8543f1b06a093ef3e3475d5683be3316d747e22b8369181d8bbebc3dc88073_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ab45f8107a5f853cbc2e5f12ce8911f49c1ca7c9d7a20edcb985f220bc97583d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab45f8107a5f853cbc2e5f12ce8911f49c1ca7c9d7a20edcb985f220bc97583d->enter($__internal_ab45f8107a5f853cbc2e5f12ce8911f49c1ca7c9d7a20edcb985f220bc97583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2111543c89838b6da8ba06065ed01d04ac85b1bf810c189062f48ce0461770b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2111543c89838b6da8ba06065ed01d04ac85b1bf810c189062f48ce0461770b5->enter($__internal_2111543c89838b6da8ba06065ed01d04ac85b1bf810c189062f48ce0461770b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_2111543c89838b6da8ba06065ed01d04ac85b1bf810c189062f48ce0461770b5->leave($__internal_2111543c89838b6da8ba06065ed01d04ac85b1bf810c189062f48ce0461770b5_prof);

        
        $__internal_ab45f8107a5f853cbc2e5f12ce8911f49c1ca7c9d7a20edcb985f220bc97583d->leave($__internal_ab45f8107a5f853cbc2e5f12ce8911f49c1ca7c9d7a20edcb985f220bc97583d_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_908abfc930c7ab32b58325f2e1af4d7d32113f3445d1701e941229d4beb93965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908abfc930c7ab32b58325f2e1af4d7d32113f3445d1701e941229d4beb93965->enter($__internal_908abfc930c7ab32b58325f2e1af4d7d32113f3445d1701e941229d4beb93965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_db8d4e88700e0cc5b8bd3e5708432f20e8c91de01b061846fb17221436f6ff14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8d4e88700e0cc5b8bd3e5708432f20e8c91de01b061846fb17221436f6ff14->enter($__internal_db8d4e88700e0cc5b8bd3e5708432f20e8c91de01b061846fb17221436f6ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_db8d4e88700e0cc5b8bd3e5708432f20e8c91de01b061846fb17221436f6ff14->leave($__internal_db8d4e88700e0cc5b8bd3e5708432f20e8c91de01b061846fb17221436f6ff14_prof);

        
        $__internal_908abfc930c7ab32b58325f2e1af4d7d32113f3445d1701e941229d4beb93965->leave($__internal_908abfc930c7ab32b58325f2e1af4d7d32113f3445d1701e941229d4beb93965_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bdf3fb30d98dbd653dc778878e8418c0ff3f9276eb73a86ed2430094eeed10c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf3fb30d98dbd653dc778878e8418c0ff3f9276eb73a86ed2430094eeed10c2->enter($__internal_bdf3fb30d98dbd653dc778878e8418c0ff3f9276eb73a86ed2430094eeed10c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6df98cfdcda14f788105ad33a95f788de79f4a21ecc0813e25b3280c27f29014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df98cfdcda14f788105ad33a95f788de79f4a21ecc0813e25b3280c27f29014->enter($__internal_6df98cfdcda14f788105ad33a95f788de79f4a21ecc0813e25b3280c27f29014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6df98cfdcda14f788105ad33a95f788de79f4a21ecc0813e25b3280c27f29014->leave($__internal_6df98cfdcda14f788105ad33a95f788de79f4a21ecc0813e25b3280c27f29014_prof);

        
        $__internal_bdf3fb30d98dbd653dc778878e8418c0ff3f9276eb73a86ed2430094eeed10c2->leave($__internal_bdf3fb30d98dbd653dc778878e8418c0ff3f9276eb73a86ed2430094eeed10c2_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_99db0f2674c204139bfdf0efa2d75698426161fcc327b8386e0a9df7f94ad158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99db0f2674c204139bfdf0efa2d75698426161fcc327b8386e0a9df7f94ad158->enter($__internal_99db0f2674c204139bfdf0efa2d75698426161fcc327b8386e0a9df7f94ad158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_601cf8ef4c51ee64373c2e56b82365d726da6f9a1c262ff1f439d31888a32c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601cf8ef4c51ee64373c2e56b82365d726da6f9a1c262ff1f439d31888a32c42->enter($__internal_601cf8ef4c51ee64373c2e56b82365d726da6f9a1c262ff1f439d31888a32c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_601cf8ef4c51ee64373c2e56b82365d726da6f9a1c262ff1f439d31888a32c42->leave($__internal_601cf8ef4c51ee64373c2e56b82365d726da6f9a1c262ff1f439d31888a32c42_prof);

        
        $__internal_99db0f2674c204139bfdf0efa2d75698426161fcc327b8386e0a9df7f94ad158->leave($__internal_99db0f2674c204139bfdf0efa2d75698426161fcc327b8386e0a9df7f94ad158_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_37d4c8255d7f89b213d16cf303b1730941a13ca2e62fe019eeccd9206772d5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d4c8255d7f89b213d16cf303b1730941a13ca2e62fe019eeccd9206772d5dd->enter($__internal_37d4c8255d7f89b213d16cf303b1730941a13ca2e62fe019eeccd9206772d5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_23b1ae8f5bcdb24206249d8d7b2ac848d99214bc1c1f7697e52afb80c6db8eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b1ae8f5bcdb24206249d8d7b2ac848d99214bc1c1f7697e52afb80c6db8eec->enter($__internal_23b1ae8f5bcdb24206249d8d7b2ac848d99214bc1c1f7697e52afb80c6db8eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_23b1ae8f5bcdb24206249d8d7b2ac848d99214bc1c1f7697e52afb80c6db8eec->leave($__internal_23b1ae8f5bcdb24206249d8d7b2ac848d99214bc1c1f7697e52afb80c6db8eec_prof);

        
        $__internal_37d4c8255d7f89b213d16cf303b1730941a13ca2e62fe019eeccd9206772d5dd->leave($__internal_37d4c8255d7f89b213d16cf303b1730941a13ca2e62fe019eeccd9206772d5dd_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_557c5981bf5f0a472a809b9fac9c24629c12c4555708bc3c1c07108ec3cc9f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557c5981bf5f0a472a809b9fac9c24629c12c4555708bc3c1c07108ec3cc9f3a->enter($__internal_557c5981bf5f0a472a809b9fac9c24629c12c4555708bc3c1c07108ec3cc9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_33e503cd48e1dd13a9104c7ad06753a9aa6486adf7e1944addc3cadc926a72ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e503cd48e1dd13a9104c7ad06753a9aa6486adf7e1944addc3cadc926a72ae->enter($__internal_33e503cd48e1dd13a9104c7ad06753a9aa6486adf7e1944addc3cadc926a72ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_33e503cd48e1dd13a9104c7ad06753a9aa6486adf7e1944addc3cadc926a72ae->leave($__internal_33e503cd48e1dd13a9104c7ad06753a9aa6486adf7e1944addc3cadc926a72ae_prof);

        
        $__internal_557c5981bf5f0a472a809b9fac9c24629c12c4555708bc3c1c07108ec3cc9f3a->leave($__internal_557c5981bf5f0a472a809b9fac9c24629c12c4555708bc3c1c07108ec3cc9f3a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b13c165ae56b4fe686fa30f3c656f6dd4a61bab88ddb662e2d4702c46e0d0063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13c165ae56b4fe686fa30f3c656f6dd4a61bab88ddb662e2d4702c46e0d0063->enter($__internal_b13c165ae56b4fe686fa30f3c656f6dd4a61bab88ddb662e2d4702c46e0d0063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ab58133f30b17ef40ce33e23de6ee4caa2875169dcc4779aac6207a280b73f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab58133f30b17ef40ce33e23de6ee4caa2875169dcc4779aac6207a280b73f41->enter($__internal_ab58133f30b17ef40ce33e23de6ee4caa2875169dcc4779aac6207a280b73f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_ab58133f30b17ef40ce33e23de6ee4caa2875169dcc4779aac6207a280b73f41->leave($__internal_ab58133f30b17ef40ce33e23de6ee4caa2875169dcc4779aac6207a280b73f41_prof);

        
        $__internal_b13c165ae56b4fe686fa30f3c656f6dd4a61bab88ddb662e2d4702c46e0d0063->leave($__internal_b13c165ae56b4fe686fa30f3c656f6dd4a61bab88ddb662e2d4702c46e0d0063_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_344480294414bf30ad75ed3f178bab0c0b44a55360bc79fdcebb07ca5536c99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344480294414bf30ad75ed3f178bab0c0b44a55360bc79fdcebb07ca5536c99a->enter($__internal_344480294414bf30ad75ed3f178bab0c0b44a55360bc79fdcebb07ca5536c99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_552013d2b9f2e59595fa8064823f16341a247b5ed8dee5f3edbee4d412e7fa38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552013d2b9f2e59595fa8064823f16341a247b5ed8dee5f3edbee4d412e7fa38->enter($__internal_552013d2b9f2e59595fa8064823f16341a247b5ed8dee5f3edbee4d412e7fa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_552013d2b9f2e59595fa8064823f16341a247b5ed8dee5f3edbee4d412e7fa38->leave($__internal_552013d2b9f2e59595fa8064823f16341a247b5ed8dee5f3edbee4d412e7fa38_prof);

        
        $__internal_344480294414bf30ad75ed3f178bab0c0b44a55360bc79fdcebb07ca5536c99a->leave($__internal_344480294414bf30ad75ed3f178bab0c0b44a55360bc79fdcebb07ca5536c99a_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6fec5b301681c461026889f37ca6fb75aa43fc913aba598361399d332a13f76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fec5b301681c461026889f37ca6fb75aa43fc913aba598361399d332a13f76d->enter($__internal_6fec5b301681c461026889f37ca6fb75aa43fc913aba598361399d332a13f76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_58bce49dceb1e786fe97be4fb8c336b93ccf807e4a435b46fd9ed82246462ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bce49dceb1e786fe97be4fb8c336b93ccf807e4a435b46fd9ed82246462ec8->enter($__internal_58bce49dceb1e786fe97be4fb8c336b93ccf807e4a435b46fd9ed82246462ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_58bce49dceb1e786fe97be4fb8c336b93ccf807e4a435b46fd9ed82246462ec8->leave($__internal_58bce49dceb1e786fe97be4fb8c336b93ccf807e4a435b46fd9ed82246462ec8_prof);

        
        $__internal_6fec5b301681c461026889f37ca6fb75aa43fc913aba598361399d332a13f76d->leave($__internal_6fec5b301681c461026889f37ca6fb75aa43fc913aba598361399d332a13f76d_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_589068a78b386a8a4aafe5ee7af932532ae9e54f9e37d63bf2083f921638f819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589068a78b386a8a4aafe5ee7af932532ae9e54f9e37d63bf2083f921638f819->enter($__internal_589068a78b386a8a4aafe5ee7af932532ae9e54f9e37d63bf2083f921638f819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8f699f0d2f4d8162cb14886321c460b77fc6f28678ee12c76db552816afafd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f699f0d2f4d8162cb14886321c460b77fc6f28678ee12c76db552816afafd80->enter($__internal_8f699f0d2f4d8162cb14886321c460b77fc6f28678ee12c76db552816afafd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8f699f0d2f4d8162cb14886321c460b77fc6f28678ee12c76db552816afafd80->leave($__internal_8f699f0d2f4d8162cb14886321c460b77fc6f28678ee12c76db552816afafd80_prof);

        
        $__internal_589068a78b386a8a4aafe5ee7af932532ae9e54f9e37d63bf2083f921638f819->leave($__internal_589068a78b386a8a4aafe5ee7af932532ae9e54f9e37d63bf2083f921638f819_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a19336d8312273e7d54be6829eeb53a1f914d9cbcac4fa94c9724e5e9e3b9ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19336d8312273e7d54be6829eeb53a1f914d9cbcac4fa94c9724e5e9e3b9ee0->enter($__internal_a19336d8312273e7d54be6829eeb53a1f914d9cbcac4fa94c9724e5e9e3b9ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2149aad090e3c0250b0946e8c07372cf4c9837682b69ac9fa568237dd0706eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2149aad090e3c0250b0946e8c07372cf4c9837682b69ac9fa568237dd0706eb6->enter($__internal_2149aad090e3c0250b0946e8c07372cf4c9837682b69ac9fa568237dd0706eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
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
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_2149aad090e3c0250b0946e8c07372cf4c9837682b69ac9fa568237dd0706eb6->leave($__internal_2149aad090e3c0250b0946e8c07372cf4c9837682b69ac9fa568237dd0706eb6_prof);

        
        $__internal_a19336d8312273e7d54be6829eeb53a1f914d9cbcac4fa94c9724e5e9e3b9ee0->leave($__internal_a19336d8312273e7d54be6829eeb53a1f914d9cbcac4fa94c9724e5e9e3b9ee0_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3346b682f2a6aae180dfacdf2eff3dca47d7a4d83dad8c8d9963ef17d3f7857a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3346b682f2a6aae180dfacdf2eff3dca47d7a4d83dad8c8d9963ef17d3f7857a->enter($__internal_3346b682f2a6aae180dfacdf2eff3dca47d7a4d83dad8c8d9963ef17d3f7857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a111600e86524a83ccddee71abe4d9fb66fc7732ac613588bf76c41607f14fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a111600e86524a83ccddee71abe4d9fb66fc7732ac613588bf76c41607f14fe4->enter($__internal_a111600e86524a83ccddee71abe4d9fb66fc7732ac613588bf76c41607f14fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_a111600e86524a83ccddee71abe4d9fb66fc7732ac613588bf76c41607f14fe4->leave($__internal_a111600e86524a83ccddee71abe4d9fb66fc7732ac613588bf76c41607f14fe4_prof);

        
        $__internal_3346b682f2a6aae180dfacdf2eff3dca47d7a4d83dad8c8d9963ef17d3f7857a->leave($__internal_3346b682f2a6aae180dfacdf2eff3dca47d7a4d83dad8c8d9963ef17d3f7857a_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a3bdec17773036dacea4f5404702d3664616fa3a7ca036e44171485b84b6babe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3bdec17773036dacea4f5404702d3664616fa3a7ca036e44171485b84b6babe->enter($__internal_a3bdec17773036dacea4f5404702d3664616fa3a7ca036e44171485b84b6babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6af5757deec58708b94b3efdc624e90b9879d24f6d12ae7d75d5caa4f6090743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af5757deec58708b94b3efdc624e90b9879d24f6d12ae7d75d5caa4f6090743->enter($__internal_6af5757deec58708b94b3efdc624e90b9879d24f6d12ae7d75d5caa4f6090743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_6af5757deec58708b94b3efdc624e90b9879d24f6d12ae7d75d5caa4f6090743->leave($__internal_6af5757deec58708b94b3efdc624e90b9879d24f6d12ae7d75d5caa4f6090743_prof);

        
        $__internal_a3bdec17773036dacea4f5404702d3664616fa3a7ca036e44171485b84b6babe->leave($__internal_a3bdec17773036dacea4f5404702d3664616fa3a7ca036e44171485b84b6babe_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
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

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
