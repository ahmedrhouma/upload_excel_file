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
        $__internal_af8cee6949dde8104afa41abaff877cc7518f842510397f9e4e2be4b8bf1e880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8cee6949dde8104afa41abaff877cc7518f842510397f9e4e2be4b8bf1e880->enter($__internal_af8cee6949dde8104afa41abaff877cc7518f842510397f9e4e2be4b8bf1e880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_aa07bce7d2ca4a3c8e1342527dbcfb406fae5d7094267e06f7517c29806bf16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa07bce7d2ca4a3c8e1342527dbcfb406fae5d7094267e06f7517c29806bf16c->enter($__internal_aa07bce7d2ca4a3c8e1342527dbcfb406fae5d7094267e06f7517c29806bf16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

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
        
        $__internal_af8cee6949dde8104afa41abaff877cc7518f842510397f9e4e2be4b8bf1e880->leave($__internal_af8cee6949dde8104afa41abaff877cc7518f842510397f9e4e2be4b8bf1e880_prof);

        
        $__internal_aa07bce7d2ca4a3c8e1342527dbcfb406fae5d7094267e06f7517c29806bf16c->leave($__internal_aa07bce7d2ca4a3c8e1342527dbcfb406fae5d7094267e06f7517c29806bf16c_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_11b05625f2bedfb29b3ec4e6f4a22224b3b24b2df5b04dbbdedd4bc0b583134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b05625f2bedfb29b3ec4e6f4a22224b3b24b2df5b04dbbdedd4bc0b583134f->enter($__internal_11b05625f2bedfb29b3ec4e6f4a22224b3b24b2df5b04dbbdedd4bc0b583134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_29e13fab83e9e306fb40f2f63e15f13b79c405ae5e13d47c5c487f4e2cb77f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e13fab83e9e306fb40f2f63e15f13b79c405ae5e13d47c5c487f4e2cb77f57->enter($__internal_29e13fab83e9e306fb40f2f63e15f13b79c405ae5e13d47c5c487f4e2cb77f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_29e13fab83e9e306fb40f2f63e15f13b79c405ae5e13d47c5c487f4e2cb77f57->leave($__internal_29e13fab83e9e306fb40f2f63e15f13b79c405ae5e13d47c5c487f4e2cb77f57_prof);

        
        $__internal_11b05625f2bedfb29b3ec4e6f4a22224b3b24b2df5b04dbbdedd4bc0b583134f->leave($__internal_11b05625f2bedfb29b3ec4e6f4a22224b3b24b2df5b04dbbdedd4bc0b583134f_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f4f5f61a063b73896d47bb602397fb3edaa5eda81406057efe08d203bce2e1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f5f61a063b73896d47bb602397fb3edaa5eda81406057efe08d203bce2e1c5->enter($__internal_f4f5f61a063b73896d47bb602397fb3edaa5eda81406057efe08d203bce2e1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_fe78b95a384d167573a1cfb081b8168d82994f738693c088b567f22c85251bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe78b95a384d167573a1cfb081b8168d82994f738693c088b567f22c85251bfa->enter($__internal_fe78b95a384d167573a1cfb081b8168d82994f738693c088b567f22c85251bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_fe78b95a384d167573a1cfb081b8168d82994f738693c088b567f22c85251bfa->leave($__internal_fe78b95a384d167573a1cfb081b8168d82994f738693c088b567f22c85251bfa_prof);

        
        $__internal_f4f5f61a063b73896d47bb602397fb3edaa5eda81406057efe08d203bce2e1c5->leave($__internal_f4f5f61a063b73896d47bb602397fb3edaa5eda81406057efe08d203bce2e1c5_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_404786214921013188bdac1e1d0db5979e63fc2a6608408c99d17c859fc6f676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404786214921013188bdac1e1d0db5979e63fc2a6608408c99d17c859fc6f676->enter($__internal_404786214921013188bdac1e1d0db5979e63fc2a6608408c99d17c859fc6f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0aeaf0a1040cd17096831cb2fd15a769fb3702795d39e901c11bb642b570910f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeaf0a1040cd17096831cb2fd15a769fb3702795d39e901c11bb642b570910f->enter($__internal_0aeaf0a1040cd17096831cb2fd15a769fb3702795d39e901c11bb642b570910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_0aeaf0a1040cd17096831cb2fd15a769fb3702795d39e901c11bb642b570910f->leave($__internal_0aeaf0a1040cd17096831cb2fd15a769fb3702795d39e901c11bb642b570910f_prof);

        
        $__internal_404786214921013188bdac1e1d0db5979e63fc2a6608408c99d17c859fc6f676->leave($__internal_404786214921013188bdac1e1d0db5979e63fc2a6608408c99d17c859fc6f676_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3632c2e919fea9de19a078b36951b9cb1e625926c92e458279259f3a41db8f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3632c2e919fea9de19a078b36951b9cb1e625926c92e458279259f3a41db8f9a->enter($__internal_3632c2e919fea9de19a078b36951b9cb1e625926c92e458279259f3a41db8f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7487e1ddfb40602150e50f6c722b76d94d36c8f8d1ef74357fa49aab8845170f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7487e1ddfb40602150e50f6c722b76d94d36c8f8d1ef74357fa49aab8845170f->enter($__internal_7487e1ddfb40602150e50f6c722b76d94d36c8f8d1ef74357fa49aab8845170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_7487e1ddfb40602150e50f6c722b76d94d36c8f8d1ef74357fa49aab8845170f->leave($__internal_7487e1ddfb40602150e50f6c722b76d94d36c8f8d1ef74357fa49aab8845170f_prof);

        
        $__internal_3632c2e919fea9de19a078b36951b9cb1e625926c92e458279259f3a41db8f9a->leave($__internal_3632c2e919fea9de19a078b36951b9cb1e625926c92e458279259f3a41db8f9a_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a3c8267aa81570e50e3072dc2632fbbe75ddd8779af04aefd921269d9947431b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c8267aa81570e50e3072dc2632fbbe75ddd8779af04aefd921269d9947431b->enter($__internal_a3c8267aa81570e50e3072dc2632fbbe75ddd8779af04aefd921269d9947431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_2f8f063b3e20183a95fd4fc5ac4a01de8a2712d44b79a6f06ed1f24bbdf3387a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8f063b3e20183a95fd4fc5ac4a01de8a2712d44b79a6f06ed1f24bbdf3387a->enter($__internal_2f8f063b3e20183a95fd4fc5ac4a01de8a2712d44b79a6f06ed1f24bbdf3387a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_2f8f063b3e20183a95fd4fc5ac4a01de8a2712d44b79a6f06ed1f24bbdf3387a->leave($__internal_2f8f063b3e20183a95fd4fc5ac4a01de8a2712d44b79a6f06ed1f24bbdf3387a_prof);

        
        $__internal_a3c8267aa81570e50e3072dc2632fbbe75ddd8779af04aefd921269d9947431b->leave($__internal_a3c8267aa81570e50e3072dc2632fbbe75ddd8779af04aefd921269d9947431b_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a629db5884821c691d1e95a55e1971565b59edb026b84a94fc88ddd91989e7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a629db5884821c691d1e95a55e1971565b59edb026b84a94fc88ddd91989e7f3->enter($__internal_a629db5884821c691d1e95a55e1971565b59edb026b84a94fc88ddd91989e7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_66f61069e3c717e365b96885a9c8bb57f34003a8430a76da1fa04dd393dd2184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f61069e3c717e365b96885a9c8bb57f34003a8430a76da1fa04dd393dd2184->enter($__internal_66f61069e3c717e365b96885a9c8bb57f34003a8430a76da1fa04dd393dd2184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_66f61069e3c717e365b96885a9c8bb57f34003a8430a76da1fa04dd393dd2184->leave($__internal_66f61069e3c717e365b96885a9c8bb57f34003a8430a76da1fa04dd393dd2184_prof);

        
        $__internal_a629db5884821c691d1e95a55e1971565b59edb026b84a94fc88ddd91989e7f3->leave($__internal_a629db5884821c691d1e95a55e1971565b59edb026b84a94fc88ddd91989e7f3_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ab377fcdfadceb271ac06597c7a324ea0b26fac33500e35474fb5ce580615dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab377fcdfadceb271ac06597c7a324ea0b26fac33500e35474fb5ce580615dcc->enter($__internal_ab377fcdfadceb271ac06597c7a324ea0b26fac33500e35474fb5ce580615dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b48c2ee3aa5d277d7371358583bb99c56791c9d8642a10de48965f20da6b3906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48c2ee3aa5d277d7371358583bb99c56791c9d8642a10de48965f20da6b3906->enter($__internal_b48c2ee3aa5d277d7371358583bb99c56791c9d8642a10de48965f20da6b3906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b48c2ee3aa5d277d7371358583bb99c56791c9d8642a10de48965f20da6b3906->leave($__internal_b48c2ee3aa5d277d7371358583bb99c56791c9d8642a10de48965f20da6b3906_prof);

        
        $__internal_ab377fcdfadceb271ac06597c7a324ea0b26fac33500e35474fb5ce580615dcc->leave($__internal_ab377fcdfadceb271ac06597c7a324ea0b26fac33500e35474fb5ce580615dcc_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f5cc54cf0aee9d425fd96b58cdabed86cdb54ca7120100a80be14bb9892b8a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cc54cf0aee9d425fd96b58cdabed86cdb54ca7120100a80be14bb9892b8a57->enter($__internal_f5cc54cf0aee9d425fd96b58cdabed86cdb54ca7120100a80be14bb9892b8a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_d5aa25c0d35c5400e3a61140b9288d4d936902175cd77b3dbca83fa88e1745b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5aa25c0d35c5400e3a61140b9288d4d936902175cd77b3dbca83fa88e1745b4->enter($__internal_d5aa25c0d35c5400e3a61140b9288d4d936902175cd77b3dbca83fa88e1745b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_d5aa25c0d35c5400e3a61140b9288d4d936902175cd77b3dbca83fa88e1745b4->leave($__internal_d5aa25c0d35c5400e3a61140b9288d4d936902175cd77b3dbca83fa88e1745b4_prof);

        
        $__internal_f5cc54cf0aee9d425fd96b58cdabed86cdb54ca7120100a80be14bb9892b8a57->leave($__internal_f5cc54cf0aee9d425fd96b58cdabed86cdb54ca7120100a80be14bb9892b8a57_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a966d4c51dde2e50ac3a205487156d30e82a04658723c9d2742fea80d3f072b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a966d4c51dde2e50ac3a205487156d30e82a04658723c9d2742fea80d3f072b2->enter($__internal_a966d4c51dde2e50ac3a205487156d30e82a04658723c9d2742fea80d3f072b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2573dfc0d0e5b98ca6853fabda45123994080f83b0209d33eb45ff17354ce60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2573dfc0d0e5b98ca6853fabda45123994080f83b0209d33eb45ff17354ce60b->enter($__internal_2573dfc0d0e5b98ca6853fabda45123994080f83b0209d33eb45ff17354ce60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2573dfc0d0e5b98ca6853fabda45123994080f83b0209d33eb45ff17354ce60b->leave($__internal_2573dfc0d0e5b98ca6853fabda45123994080f83b0209d33eb45ff17354ce60b_prof);

        
        $__internal_a966d4c51dde2e50ac3a205487156d30e82a04658723c9d2742fea80d3f072b2->leave($__internal_a966d4c51dde2e50ac3a205487156d30e82a04658723c9d2742fea80d3f072b2_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d05e54d1d58a0173883dc28962b16af60df57880d44b1178f07eaf61a029a300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05e54d1d58a0173883dc28962b16af60df57880d44b1178f07eaf61a029a300->enter($__internal_d05e54d1d58a0173883dc28962b16af60df57880d44b1178f07eaf61a029a300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_eae4643dfbcdb7a50e103f39401cae3cf1540c9c849740c9326dd49cf348168b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae4643dfbcdb7a50e103f39401cae3cf1540c9c849740c9326dd49cf348168b->enter($__internal_eae4643dfbcdb7a50e103f39401cae3cf1540c9c849740c9326dd49cf348168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_eae4643dfbcdb7a50e103f39401cae3cf1540c9c849740c9326dd49cf348168b->leave($__internal_eae4643dfbcdb7a50e103f39401cae3cf1540c9c849740c9326dd49cf348168b_prof);

        
        $__internal_d05e54d1d58a0173883dc28962b16af60df57880d44b1178f07eaf61a029a300->leave($__internal_d05e54d1d58a0173883dc28962b16af60df57880d44b1178f07eaf61a029a300_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c18053181e46d2dfce52027afd57b580b0fb322bde4755d0285e0e8afd7fb0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18053181e46d2dfce52027afd57b580b0fb322bde4755d0285e0e8afd7fb0ca->enter($__internal_c18053181e46d2dfce52027afd57b580b0fb322bde4755d0285e0e8afd7fb0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6b6f9f3e910fd6a5e04057015b347b2baf54632eca2104e84b9d32f89ded943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f9f3e910fd6a5e04057015b347b2baf54632eca2104e84b9d32f89ded943d->enter($__internal_6b6f9f3e910fd6a5e04057015b347b2baf54632eca2104e84b9d32f89ded943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_6b6f9f3e910fd6a5e04057015b347b2baf54632eca2104e84b9d32f89ded943d->leave($__internal_6b6f9f3e910fd6a5e04057015b347b2baf54632eca2104e84b9d32f89ded943d_prof);

        
        $__internal_c18053181e46d2dfce52027afd57b580b0fb322bde4755d0285e0e8afd7fb0ca->leave($__internal_c18053181e46d2dfce52027afd57b580b0fb322bde4755d0285e0e8afd7fb0ca_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b3aa60e4fc6900d41f35177ceb2ccf7176ca2ada741be2b18fba5eecae3147cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aa60e4fc6900d41f35177ceb2ccf7176ca2ada741be2b18fba5eecae3147cf->enter($__internal_b3aa60e4fc6900d41f35177ceb2ccf7176ca2ada741be2b18fba5eecae3147cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_dd8411acbed6448234f5823645525f4ea888b3146aaf8f9d6fd85997fc02b82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8411acbed6448234f5823645525f4ea888b3146aaf8f9d6fd85997fc02b82d->enter($__internal_dd8411acbed6448234f5823645525f4ea888b3146aaf8f9d6fd85997fc02b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_dd8411acbed6448234f5823645525f4ea888b3146aaf8f9d6fd85997fc02b82d->leave($__internal_dd8411acbed6448234f5823645525f4ea888b3146aaf8f9d6fd85997fc02b82d_prof);

        
        $__internal_b3aa60e4fc6900d41f35177ceb2ccf7176ca2ada741be2b18fba5eecae3147cf->leave($__internal_b3aa60e4fc6900d41f35177ceb2ccf7176ca2ada741be2b18fba5eecae3147cf_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_20da483ee055238cd67eafba0f033929aa65037caf48f62a85bfe38ab6ff2aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20da483ee055238cd67eafba0f033929aa65037caf48f62a85bfe38ab6ff2aad->enter($__internal_20da483ee055238cd67eafba0f033929aa65037caf48f62a85bfe38ab6ff2aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_890dd0491628ce73656d2c2b9ebe73a0f87ca9efd144def36af07e8e2bff7a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890dd0491628ce73656d2c2b9ebe73a0f87ca9efd144def36af07e8e2bff7a80->enter($__internal_890dd0491628ce73656d2c2b9ebe73a0f87ca9efd144def36af07e8e2bff7a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_890dd0491628ce73656d2c2b9ebe73a0f87ca9efd144def36af07e8e2bff7a80->leave($__internal_890dd0491628ce73656d2c2b9ebe73a0f87ca9efd144def36af07e8e2bff7a80_prof);

        
        $__internal_20da483ee055238cd67eafba0f033929aa65037caf48f62a85bfe38ab6ff2aad->leave($__internal_20da483ee055238cd67eafba0f033929aa65037caf48f62a85bfe38ab6ff2aad_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_69841ade554a32cf8f1d2218cbe2d2b4665379ced8db76ce44c9afe078967362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69841ade554a32cf8f1d2218cbe2d2b4665379ced8db76ce44c9afe078967362->enter($__internal_69841ade554a32cf8f1d2218cbe2d2b4665379ced8db76ce44c9afe078967362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_fe355c38a95a5d885fad6c3b5a7a6687457476e06fa15b664c8a761a367b65e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe355c38a95a5d885fad6c3b5a7a6687457476e06fa15b664c8a761a367b65e3->enter($__internal_fe355c38a95a5d885fad6c3b5a7a6687457476e06fa15b664c8a761a367b65e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_fe355c38a95a5d885fad6c3b5a7a6687457476e06fa15b664c8a761a367b65e3->leave($__internal_fe355c38a95a5d885fad6c3b5a7a6687457476e06fa15b664c8a761a367b65e3_prof);

        
        $__internal_69841ade554a32cf8f1d2218cbe2d2b4665379ced8db76ce44c9afe078967362->leave($__internal_69841ade554a32cf8f1d2218cbe2d2b4665379ced8db76ce44c9afe078967362_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e0824d1b37e3109214997f1bd5c5b52274e4465bf513ff4164e95cd532ece84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0824d1b37e3109214997f1bd5c5b52274e4465bf513ff4164e95cd532ece84->enter($__internal_7e0824d1b37e3109214997f1bd5c5b52274e4465bf513ff4164e95cd532ece84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f4193ecf6e71b26513f50546a44ac9d26d4d0214a4bd3f4e57ac8dcf2a48c475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4193ecf6e71b26513f50546a44ac9d26d4d0214a4bd3f4e57ac8dcf2a48c475->enter($__internal_f4193ecf6e71b26513f50546a44ac9d26d4d0214a4bd3f4e57ac8dcf2a48c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f4193ecf6e71b26513f50546a44ac9d26d4d0214a4bd3f4e57ac8dcf2a48c475->leave($__internal_f4193ecf6e71b26513f50546a44ac9d26d4d0214a4bd3f4e57ac8dcf2a48c475_prof);

        
        $__internal_7e0824d1b37e3109214997f1bd5c5b52274e4465bf513ff4164e95cd532ece84->leave($__internal_7e0824d1b37e3109214997f1bd5c5b52274e4465bf513ff4164e95cd532ece84_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_22568dc39c7918cf0fdc518d26cf0908c28969f1389a73f672f93cdb4248b98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22568dc39c7918cf0fdc518d26cf0908c28969f1389a73f672f93cdb4248b98c->enter($__internal_22568dc39c7918cf0fdc518d26cf0908c28969f1389a73f672f93cdb4248b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2a57f6bc85e90b8d51ef42ed8b749bc0f710ba654d96201f82ce8e389f337f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a57f6bc85e90b8d51ef42ed8b749bc0f710ba654d96201f82ce8e389f337f3a->enter($__internal_2a57f6bc85e90b8d51ef42ed8b749bc0f710ba654d96201f82ce8e389f337f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2a57f6bc85e90b8d51ef42ed8b749bc0f710ba654d96201f82ce8e389f337f3a->leave($__internal_2a57f6bc85e90b8d51ef42ed8b749bc0f710ba654d96201f82ce8e389f337f3a_prof);

        
        $__internal_22568dc39c7918cf0fdc518d26cf0908c28969f1389a73f672f93cdb4248b98c->leave($__internal_22568dc39c7918cf0fdc518d26cf0908c28969f1389a73f672f93cdb4248b98c_prof);

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
