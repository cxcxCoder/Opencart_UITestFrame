<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/account/register.twig */
class __TwigTemplate_c19e73f146d88637579db17f973b741b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">
    ";
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 10
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <p>";
        // line 12
        yield ($context["text_account_already"] ?? null);
        yield "</p>
      <form id=\"form-register\" action=\"";
        // line 13
        yield ($context["register"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset id=\"account\">
          <legend>";
        // line 15
        yield ($context["text_your_details"] ?? null);
        yield "</legend>
          ";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) > 1)) {
            // line 17
            yield "            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
            // line 18
            yield ($context["entry_customer_group"] ?? null);
            yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 22
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                yield "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                </select>
              </div>
            </div>
          ";
        }
        // line 28
        yield "          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 31
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 38
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 43
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 45
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 50
        if (($context["config_telephone_display"] ?? null)) {
            // line 51
            yield "            <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 52
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 54
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        // line 59
        yield "
          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 61
            yield "
            ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 62) == "select")) {
                // line 63
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                yield "\">
                <label for=\"input-custom-field-";
                // line 64
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 64);
                yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 66
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                yield "]\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                yield "\" class=\"form-select\">
                    <option value=\"\">";
                // line 67
                yield ($context["text_select"] ?? null);
                yield "</option>
                    ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 69
                    yield "                      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                  </select>
                  <div id=\"error-custom-field-";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 76
            yield "
            ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "radio")) {
                // line 78
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 79);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                yield "\">
                    ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 83
                    yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 84
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    yield "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 88
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 92
            yield "
            ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "checkbox")) {
                // line 94
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                yield "\">
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 108
            yield "
            ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "text")) {
                // line 110
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                yield "\">
                <label for=\"input-custom-field-";
                // line 111
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 113
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 113);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 118
            yield "
            ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "textarea")) {
                // line 120
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\">
                <label for=\"input-custom-field-";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                yield "</textarea>
                  <div id=\"error-custom-field-";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 128
            yield "
            ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "file")) {
                // line 130
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 131
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 134
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 135
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "]\" value=\"\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 137
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 141
            yield "
            ";
            // line 142
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "date")) {
                // line 143
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                yield "\">
                <label for=\"input-custom-field-";
                // line 144
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[";
                // line 146
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 146);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 151
            yield "
            ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "time")) {
                // line 153
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                yield "\">
                <label for=\"input-custom-field-";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 156);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 161
            yield "
            ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "datetime")) {
                // line 163
                yield "              <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                yield "\">
                <label for=\"input-custom-field-";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[";
                // line 166
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 166);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 171
            yield "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "        </fieldset>

        <fieldset>
          <legend>";
        // line 176
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 178
        yield ($context["entry_password"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 180
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>";
        // line 187
        yield ($context["text_newsletter"] ?? null);
        yield "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 189
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
              </div>
            </div>
          </div>
        </fieldset>
        ";
        // line 198
        yield ($context["captcha"] ?? null);
        yield "
        <div class=\"text-end\">
          ";
        // line 200
        if (($context["text_agree"] ?? null)) {
            // line 201
            yield "            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">";
            // line 202
            yield ($context["text_agree"] ?? null);
            yield "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          ";
        }
        // line 205
        yield "          <button type=\"submit\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</button>
        </div>
      </form>
      ";
        // line 208
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 210
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 216
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 240
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/register.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  682 => 240,  655 => 216,  646 => 210,  641 => 208,  634 => 205,  628 => 202,  625 => 201,  623 => 200,  618 => 198,  606 => 189,  601 => 187,  591 => 180,  586 => 178,  581 => 176,  576 => 173,  569 => 171,  562 => 167,  552 => 166,  545 => 164,  540 => 163,  538 => 162,  535 => 161,  528 => 157,  518 => 156,  511 => 154,  506 => 153,  504 => 152,  501 => 151,  494 => 147,  484 => 146,  477 => 144,  472 => 143,  470 => 142,  467 => 141,  460 => 137,  453 => 135,  441 => 134,  435 => 131,  430 => 130,  428 => 129,  425 => 128,  418 => 124,  408 => 123,  401 => 121,  396 => 120,  394 => 119,  391 => 118,  384 => 114,  374 => 113,  367 => 111,  362 => 110,  360 => 109,  357 => 108,  350 => 104,  347 => 103,  330 => 100,  327 => 99,  323 => 98,  319 => 97,  314 => 95,  309 => 94,  307 => 93,  304 => 92,  297 => 88,  294 => 87,  277 => 84,  274 => 83,  270 => 82,  266 => 81,  261 => 79,  256 => 78,  254 => 77,  251 => 76,  244 => 72,  241 => 71,  230 => 69,  226 => 68,  222 => 67,  216 => 66,  209 => 64,  204 => 63,  202 => 62,  199 => 61,  195 => 60,  192 => 59,  184 => 54,  179 => 52,  172 => 51,  170 => 50,  162 => 45,  157 => 43,  149 => 38,  144 => 36,  136 => 31,  131 => 29,  128 => 28,  122 => 24,  107 => 22,  103 => 21,  97 => 18,  94 => 17,  92 => 16,  88 => 15,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">
    {{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <p>{{ text_account_already }}</p>
      <form id=\"form-register\" action=\"{{ register }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset id=\"account\">
          <legend>{{ text_your_details }}</legend>
          {% if customer_groups|length > 1 %}
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
              <div class=\"col-sm-10\">
                <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                  {% for customer_group in customer_groups %}
                    <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                  {% endfor %}
                </select>
              </div>
            </div>
          {% endif %}
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          {% if config_telephone_display %}
            <div class=\"row mb-3{% if config_telephone_required %} required{% endif %}\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% for custom_field in custom_fields %}

            {% if custom_field.type == 'select' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'checkbox' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'text' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'textarea' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'file' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'date' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'time' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

          {% endfor %}
        </fieldset>

        <fieldset>
          <legend>{{ text_your_password }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>{{ text_newsletter }}</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_newsletter }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
              </div>
            </div>
          </div>
        </fieldset>
        {{ captcha }}
        <div class=\"text-end\">
          {% if text_agree %}
            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">{{ text_agree }}</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          {% endif %}
          <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
        </div>
      </form>
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language={{ language }}',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
{{ footer }}
", "catalog/view/template/account/register.twig", "/var/www/html/catalog/view/template/account/register.twig");
    }
}
