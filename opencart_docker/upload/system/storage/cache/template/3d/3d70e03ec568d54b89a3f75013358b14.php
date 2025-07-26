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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_1143e7543f7a9efb88281cb6f5370c4a extends Template
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
<div id=\"product-category\" class=\"container\">
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
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 11
        if ((($context["image"] ?? null) || ($context["description"] ?? null))) {
            // line 12
            yield "        <div class=\"row\">
          ";
            // line 13
            if (($context["image"] ?? null)) {
                // line 14
                yield "            <div class=\"col-3\"><img src=\"";
                yield ($context["image"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail\"/></div>
          ";
            }
            // line 16
            yield "          ";
            if (($context["description"] ?? null)) {
                // line 17
                yield "            <div class=\"col-9\">";
                yield ($context["description"] ?? null);
                yield "</div>
          ";
            }
            // line 19
            yield "        </div>
        <hr/>
      ";
        }
        // line 22
        yield "
      ";
        // line 23
        if (($context["categories"] ?? null)) {
            // line 24
            yield "        <h3>";
            yield ($context["text_refine"] ?? null);
            yield "</h3>
        ";
            // line 25
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) <= 5)) {
                // line 26
                yield "          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 30
                    yield "                  <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    yield "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "              </ul>
            </div>
          </div>
        ";
            } else {
                // line 36
                yield "          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            ";
                // line 37
                $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 37));
                // line 38
                yield "            ";
                if ((($context["total"] ?? null) > 20)) {
                    // line 39
                    yield "              ";
                    $context["batch"] = Twig\Extension\CoreExtension::round((($context["total"] ?? null) / 4), 0, "ceil");
                    // line 40
                    yield "            ";
                } else {
                    // line 41
                    yield "              ";
                    $context["batch"] = 5;
                    // line 42
                    yield "            ";
                }
                // line 43
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["categories"] ?? null), ($context["batch"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    yield "              <div class=\"col\">
                <ul>
                  ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 47
                        yield "                    <li><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 47);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 47);
                        yield "</a></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    yield "                </ul>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "          </div>
          <br/>
        ";
            }
            // line 55
            yield "      ";
        }
        // line 56
        yield "
      ";
        // line 57
        if (($context["products"] ?? null)) {
            // line 58
            yield "        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 61
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">";
            yield ($context["text_compare"] ?? null);
            yield "</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 66
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 67
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">";
            // line 72
            yield ($context["text_sort"] ?? null);
            yield "</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 75
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 75);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 75) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 75);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">";
            // line 82
            yield ($context["text_limit"] ?? null);
            yield "</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 85
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 85);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 85) == ($context["limit"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 85);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "              </select>
            </div>
          </div>
        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                yield "            <div class=\"col mb-3\">";
                yield $context["product"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 99
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 100
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        }
        // line 103
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 104
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 105
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 107
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 108
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 110
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
        return "catalog/view/template/product/category.twig";
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
        return array (  355 => 110,  350 => 108,  345 => 107,  338 => 105,  333 => 104,  330 => 103,  324 => 100,  320 => 99,  315 => 96,  306 => 94,  302 => 93,  294 => 87,  279 => 85,  275 => 84,  270 => 82,  263 => 77,  248 => 75,  244 => 74,  239 => 72,  231 => 67,  227 => 66,  217 => 61,  212 => 58,  210 => 57,  207 => 56,  204 => 55,  199 => 52,  191 => 49,  180 => 47,  176 => 46,  172 => 44,  167 => 43,  164 => 42,  161 => 41,  158 => 40,  155 => 39,  152 => 38,  150 => 37,  147 => 36,  141 => 32,  130 => 30,  126 => 29,  121 => 26,  119 => 25,  114 => 24,  112 => 23,  109 => 22,  104 => 19,  98 => 17,  95 => 16,  85 => 14,  83 => 13,  80 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if image or description %}
        <div class=\"row\">
          {% if image %}
            <div class=\"col-3\"><img src=\"{{ image }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\"/></div>
          {% endif %}
          {% if description %}
            <div class=\"col-9\">{{ description }}</div>
          {% endif %}
        </div>
        <hr/>
      {% endif %}

      {% if categories %}
        <h3>{{ text_refine }}</h3>
        {% if categories|length <= 5 %}
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                {% for category in categories %}
                  <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                {% endfor %}
              </ul>
            </div>
          </div>
        {% else %}
          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            {% set total = category.children|length %}
            {% if total > 20 %}
              {% set batch = (total / 4)|round(0, 'ceil') %}
            {% else %}
              {% set batch = 5 %}
            {% endif %}
            {% for category in categories|batch(batch) %}
              <div class=\"col\">
                <ul>
                  {% for child in category %}
                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                  {% endfor %}
                </ul>
              </div>
            {% endfor %}
          </div>
          <br/>
        {% endif %}
      {% endif %}

      {% if products %}
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">{{ text_compare }}</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">{{ text_sort }}</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for sorts in sorts %}
                  <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">{{ text_limit }}</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for limits in limits %}
                  <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          {% for product in products %}
            <div class=\"col mb-3\">{{ product }}</div>
          {% endfor %}
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-end\">{{ results }}</div>
        </div>
      {% endif %}
      {% if not categories and not products %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/product/category.twig", "/var/www/html/catalog/view/template/product/category.twig");
    }
}
