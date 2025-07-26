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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_61ac92533d5a9bb38f0763cd612322b4 extends Template
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
<div id=\"product-info\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row mb-3\">
        ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 13
            yield "          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                yield "                <a href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 18
            yield "              ";
            if (($context["images"] ?? null)) {
                // line 19
                yield "                <div>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </div>
              ";
            }
            // line 25
            yield "            </div>
          </div>
        ";
        }
        // line 28
        yield "        <div class=\"col-sm\">
          <h1>";
        // line 29
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 31
        if (($context["manufacturer"] ?? null)) {
            // line 32
            yield "              <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
            ";
        }
        // line 34
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 36
            yield "              <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 36);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 36);
            yield "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            ";
        if (($context["reward"] ?? null)) {
            // line 39
            yield "              <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
            ";
        }
        // line 41
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
          </ul>
          ";
        // line 43
        if (($context["review_status"] ?? null)) {
            // line 44
            yield "            <div class=\"rating\">
              <p>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                yield "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 48
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                } else {
                    // line 50
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                }
                // line 52
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a></p>
            </div>
          ";
        }
        // line 56
        yield "          ";
        if (($context["price"] ?? null)) {
            // line 57
            yield "            <ul class=\"list-unstyled\">
              ";
            // line 58
            if ( !($context["special"] ?? null)) {
                // line 59
                yield "                <li><h2><span class=\"price-new\">";
                yield ($context["price"] ?? null);
                yield "</span></h2></li>
              ";
            } else {
                // line 61
                yield "                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 62
                yield ($context["special"] ?? null);
                yield "</span></h2></li>
              ";
            }
            // line 64
            yield "              ";
            if (($context["tax"] ?? null)) {
                // line 65
                yield "                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
              ";
            }
            // line 67
            yield "              ";
            if (($context["points"] ?? null)) {
                // line 68
                yield "                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
              ";
            }
            // line 70
            yield "              ";
            if (($context["discounts"] ?? null)) {
                // line 71
                yield "                <li>
                  <hr>
                </li>
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 75
                    yield "                  <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 75);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 75);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "              ";
            }
            // line 78
            yield "            </ul>
          ";
        }
        // line 80
        yield "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 82
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 83
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 85
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 90
        if (($context["options"] ?? null)) {
            // line 91
            yield "                <hr>
                <h3>";
            // line 92
            yield ($context["text_option"] ?? null);
            yield "</h3>
                <div>
                  ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 95
                yield "
                    ";
                // line 96
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 96) == "select")) {
                    // line 97
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 97)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 98);
                    yield "</label>
                        <select name=\"option[";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    yield "\" class=\"form-select\">
                          <option value=\"\">";
                    // line 100
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                          ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 102
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 102);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 102);
                        yield "
                              ";
                        // line 103
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 103)) {
                            // line 104
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 104);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104);
                            yield ")
                              ";
                        }
                        // line 105
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    yield "                        </select>
                        <div id=\"error-option-";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 111
                yield "
                    ";
                // line 112
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 112) == "radio")) {
                    // line 113
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 113)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 115);
                    yield "\">
                          ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 116));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 117
                        yield "                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[";
                        // line 118
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                        yield "\" class=\"form-check-input\"/>
                              <label for=\"input-option-value-";
                        // line 119
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 120
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 120)) {
                            // line 121
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 121);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 121);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 122
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                        yield "
                                ";
                        // line 123
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 123)) {
                            // line 124
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 124);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124);
                            yield ")
                                ";
                        }
                        // line 125
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 129
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 129);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 132
                yield "
                    ";
                // line 133
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 134)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 136
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    yield "\">
                          ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 138
                        yield "                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[";
                        // line 139
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        yield "\" class=\"form-check-input\"/> 
\t\t\t\t\t\t\t                <label for=\"input-option-value-";
                        // line 140
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 141
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141)) {
                            // line 142
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 143
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        yield "
                                ";
                        // line 144
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                            // line 145
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                            yield ")
                                ";
                        }
                        // line 146
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 150
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 153
                yield "
                    ";
                // line 154
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 154) == "text")) {
                    // line 155
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 155)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 156
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 156);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 157
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 160
                yield "
                    ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "textarea")) {
                    // line 162
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    yield "</label> <textarea name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163);
                    yield "</textarea>
                        <div id=\"error-option-";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 167
                yield "
                    ";
                // line 168
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "file")) {
                    // line 169
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"button-upload-";
                    // line 170
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    yield "</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                          <input type=\"hidden\" name=\"option[";
                    // line 173
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    yield "\"/>
                        </div>
                        <div id=\"error-option-";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 178
                yield "
                    ";
                // line 179
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 179) == "date")) {
                    // line 180
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 180)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 181
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 181);
                    yield "</label>
                        <input type=\"date\" name=\"option[";
                    // line 182
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 182);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 186
                yield "
                    ";
                // line 187
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 187) == "time")) {
                    // line 188
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 188)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 189);
                    yield "</label>
                        <input type=\"time\" name=\"option[";
                    // line 190
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 190);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 191
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 191);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 194
                yield "
                    ";
                // line 195
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 195) == "datetime")) {
                    // line 196
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 196)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    yield "</label>
                        <input type=\"datetime-local\" name=\"option[";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 202
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "                </div>
              ";
        }
        // line 205
        yield "
              ";
        // line 206
        if (($context["subscription_plans"] ?? null)) {
            // line 207
            yield "                <hr/>
                <h3>";
            // line 208
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                <div class=\"mb-3 required\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                    <option value=\"\">";
            // line 211
            yield ($context["text_select"] ?? null);
            yield "</option>
                    ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 213
                yield "                      <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 213);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 213);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "                  </select>
                  ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 217
                yield "                    <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 217);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 217);
                yield "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        // line 222
        yield "              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">";
        // line 224
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 225
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 226
        yield ($context["button_cart"] ?? null);
        yield "</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 228
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              ";
        // line 231
        if ((($context["minimum"] ?? null) > 1)) {
            // line 232
            yield "                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
              ";
        }
        // line 234
        yield "            </form>
          </div>
        </div>
      </div>
      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 239
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
        ";
        // line 240
        if (($context["attribute_groups"] ?? null)) {
            // line 241
            yield "          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
        ";
        }
        // line 243
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 244
            yield "          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
        ";
        }
        // line 246
        yield "      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 248
        yield ($context["description"] ?? null);
        yield "
          ";
        // line 249
        if (($context["tags"] ?? null)) {
            // line 250
            yield "            <p>";
            yield ($context["text_tags"] ?? null);
            yield "
              ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 252
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 252);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 252);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 252)) {
                    yield ",";
                }
                // line 253
                yield "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            yield "            </p>
          ";
        }
        // line 256
        yield "        </div>
        ";
        // line 257
        if (($context["attribute_groups"] ?? null)) {
            // line 258
            yield "          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 262
                yield "                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>";
                // line 264
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 264);
                yield "</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
                // line 268
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 268));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 269
                    yield "                      <tr>
                        <td>";
                    // line 270
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 270);
                    yield "</td>
                        <td>";
                    // line 271
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 271);
                    yield "</td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            yield "              </table>
            </div>
          </div>
        ";
        }
        // line 280
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 281
            yield "          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
        ";
        }
        // line 283
        yield "      </div>
      ";
        // line 284
        yield ($context["related"] ?? null);
        yield "
      ";
        // line 285
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 287
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 303
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 332
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 351
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
        return "catalog/view/template/product/product.twig";
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
        return array (  1122 => 351,  1100 => 332,  1068 => 303,  1049 => 287,  1044 => 285,  1040 => 284,  1037 => 283,  1031 => 281,  1028 => 280,  1022 => 276,  1015 => 274,  1006 => 271,  1002 => 270,  999 => 269,  995 => 268,  988 => 264,  984 => 262,  980 => 261,  975 => 258,  973 => 257,  970 => 256,  966 => 254,  952 => 253,  943 => 252,  926 => 251,  921 => 250,  919 => 249,  915 => 248,  911 => 246,  905 => 244,  902 => 243,  896 => 241,  894 => 240,  890 => 239,  883 => 234,  877 => 232,  875 => 231,  869 => 228,  864 => 226,  860 => 225,  856 => 224,  852 => 222,  847 => 219,  836 => 217,  832 => 216,  829 => 215,  818 => 213,  814 => 212,  810 => 211,  804 => 208,  801 => 207,  799 => 206,  796 => 205,  792 => 203,  786 => 202,  780 => 199,  772 => 198,  766 => 197,  759 => 196,  757 => 195,  754 => 194,  748 => 191,  740 => 190,  734 => 189,  727 => 188,  725 => 187,  722 => 186,  716 => 183,  708 => 182,  702 => 181,  695 => 180,  693 => 179,  690 => 178,  684 => 175,  677 => 173,  663 => 172,  656 => 170,  649 => 169,  647 => 168,  644 => 167,  638 => 164,  624 => 163,  617 => 162,  615 => 161,  612 => 160,  606 => 157,  592 => 156,  585 => 155,  583 => 154,  580 => 153,  574 => 150,  571 => 149,  563 => 146,  556 => 145,  554 => 144,  549 => 143,  536 => 142,  534 => 141,  530 => 140,  522 => 139,  519 => 138,  515 => 137,  511 => 136,  507 => 135,  500 => 134,  498 => 133,  495 => 132,  489 => 129,  486 => 128,  478 => 125,  471 => 124,  469 => 123,  464 => 122,  451 => 121,  449 => 120,  445 => 119,  437 => 118,  434 => 117,  430 => 116,  426 => 115,  422 => 114,  415 => 113,  413 => 112,  410 => 111,  404 => 108,  401 => 107,  394 => 105,  387 => 104,  385 => 103,  378 => 102,  374 => 101,  370 => 100,  364 => 99,  358 => 98,  351 => 97,  349 => 96,  346 => 95,  342 => 94,  337 => 92,  334 => 91,  332 => 90,  324 => 85,  317 => 83,  311 => 82,  307 => 80,  303 => 78,  300 => 77,  289 => 75,  285 => 74,  280 => 71,  277 => 70,  269 => 68,  266 => 67,  258 => 65,  255 => 64,  250 => 62,  245 => 61,  239 => 59,  237 => 58,  234 => 57,  231 => 56,  222 => 53,  216 => 52,  212 => 50,  208 => 48,  205 => 47,  201 => 46,  197 => 44,  195 => 43,  187 => 41,  179 => 39,  176 => 38,  165 => 36,  161 => 35,  154 => 34,  144 => 32,  142 => 31,  137 => 29,  134 => 28,  129 => 25,  125 => 23,  108 => 21,  104 => 20,  101 => 19,  98 => 18,  84 => 16,  82 => 15,  78 => 13,  76 => 12,  71 => 10,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <div class=\"row mb-3\">
        {% if thumb or images %}
          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              {% if thumb %}
                <a href=\"{{ popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail mb-3\"/></a>
              {% endif %}
              {% if images %}
                <div>
                  {% for image in images %}
                    <a href=\"{{ image.popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ image.thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail\"/></a>&nbsp;
                  {% endfor %}
                </div>
              {% endif %}
            </div>
          </div>
        {% endif %}
        <div class=\"col-sm\">
          <h1>{{ heading_title }}</h1>
          <ul class=\"list-unstyled\">
            {% if manufacturer %}
              <li>{{ text_manufacturer }} <a href=\"{{ manufacturers }}\">{{ manufacturer }}</a></li>
            {% endif %}
            <li>{{ text_model }} {{ model }}</li>
            {% for product_code in product_codes %}
              <li>{{ product_code.code }}: {{ product_code.value }}</li>
            {% endfor %}
            {% if reward %}
              <li>{{ text_reward }} {{ reward }}</li>
            {% endif %}
            <li>{{ text_stock }} {{ stock }}</li>
          </ul>
          {% if review_status %}
            <div class=\"rating\">
              <p>
                {% for i in 1..5 %}
                  {% if rating < i %}
                    <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  {% else %}
                    <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  {% endif %}
                {% endfor %}
                <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_reviews }}</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_write }}</a></p>
            </div>
          {% endif %}
          {% if price %}
            <ul class=\"list-unstyled\">
              {% if not special %}
                <li><h2><span class=\"price-new\">{{ price }}</span></h2></li>
              {% else %}
                <li><span class=\"price-old\">{{ price }}</span></li>
                <li><h2><span class=\"price-new\">{{ special }}</span></h2></li>
              {% endif %}
              {% if tax %}
                <li>{{ text_tax }} {{ tax }}</li>
              {% endif %}
              {% if points %}
                <li>{{ text_points }} {{ points }}</li>
              {% endif %}
              {% if discounts %}
                <li>
                  <hr>
                </li>
                {% for discount in discounts %}
                  <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>
                {% endfor %}
              {% endif %}
            </ul>
          {% endif %}
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_wishlist }}\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              {% if options %}
                <hr>
                <h3>{{ text_option }}</h3>
                <div>
                  {% for option in options %}

                    {% if option.type == 'select' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                          <option value=\"\">{{ text_select }}</option>
                          {% for option_value in option.product_option_value %}
                            <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                              {% if option_value.price %}
                                ({{ option_value.price_prefix }}{{ option_value.price }})
                              {% endif %}</option>
                          {% endfor %}
                        </select>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                              <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                {% if option_value.image %}
                                  <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}{{ option_value.price }})
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> 
\t\t\t\t\t\t\t                <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                {% if option_value.image %}
                                  <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}{{ option_value.price }})
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"button-upload-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                          <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"\" id=\"input-option-{{ option.product_option_id }}\"/>
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"date\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"time\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"datetime-local\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}
                  {% endfor %}
                </div>
              {% endif %}

              {% if subscription_plans %}
                <hr/>
                <h3>{{ text_subscription }}</h3>
                <div class=\"mb-3 required\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for subscription_plan in subscription_plans %}
                      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                    {% endfor %}
                  </select>
                  {% for subscription_plan in subscription_plans %}
                    <div id=\"subscription-description-{{ subscription_plan.subscription_plan_id }}\" class=\"form-text subscription d-none\">{{ subscription_plan.description }}</div>
                  {% endfor %}
                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}
              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">{{ entry_qty }}</div>
                  <input type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">{{ button_cart }}</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              {% if minimum > 1 %}
                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
              {% endif %}
            </form>
          </div>
        </div>
      </div>
      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_description }}</a></li>
        {% if attribute_groups %}
          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
        {% endif %}
        {% if review_status %}
          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_review }}</a></li>
        {% endif %}
      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">{{ description }}
          {% if tags %}
            <p>{{ text_tags }}
              {% for tag in tags %}
                <a href=\"{{ tag.href }}\">{{ tag.tag }}</a>{% if not loop.last %},{% endif %}
              {% endfor %}
            </p>
          {% endif %}
        </div>
        {% if attribute_groups %}
          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                {% for attribute_group in attribute_groups %}
                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>{{ attribute_group.name }}</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for attribute in attribute_group.attribute %}
                      <tr>
                        <td>{{ attribute.name }}</td>
                        <td>{{ attribute.text }}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                {% endfor %}
              </table>
            </div>
          </div>
        {% endif %}
        {% if review_status %}
          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">{{ review }}</div>
        {% endif %}
      </div>
      {{ related }}
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/product/product.twig", "/var/www/html/catalog/view/template/product/product.twig");
    }
}
