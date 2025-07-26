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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_1f81a6c6faa5bc341d0bf109010b14ba extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            if (($context["error_warning"] ?? null)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "  ";
            if (($context["error_stock"] ?? null)) {
                // line 6
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 8
            yield "  ";
            if (($context["success"] ?? null)) {
                // line 9
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 11
            yield "  ";
            if (($context["attention"] ?? null)) {
                // line 12
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 14
            yield "  <h1>";
            yield ($context["heading_title"] ?? null);
            if (($context["weight"] ?? null)) {
                yield " (";
                yield ($context["weight"] ?? null);
                yield ")";
            }
            yield "</h1>
  <div id=\"output-cart\" class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\">";
            // line 19
            yield ($context["column_image"] ?? null);
            yield "</th>
          <th>";
            // line 20
            yield ($context["column_name"] ?? null);
            yield "</th>
          <th>";
            // line 21
            yield ($context["column_quantity"] ?? null);
            yield "</th>
          <th class=\"text-end\">";
            // line 22
            yield ($context["column_price"] ?? null);
            yield "</th>
          <th class=\"text-end\">";
            // line 23
            yield ($context["column_total"] ?? null);
            yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 28
                yield "          <tr>
            <td class=\"text-center\">";
                // line 29
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                    yield "\" class=\"img-thumbnail\"/></a>";
                }
                yield "</td>
            <td class=\"text-start text-wrap\"><a href=\"";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 30)) {
                    yield " <span class=\"text-danger\">***</span>";
                }
                // line 31
                yield "              <ul class=\"list-unstyled mb-0\">
                <li>
                  <small> - ";
                // line 33
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 33);
                yield "</small>
                </li>
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 36
                    yield "                  <li>
                    <small> - ";
                    // line 37
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 37);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 37);
                    yield "</small>
                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 40)) {
                    // line 41
                    yield "                  <li>
                    <small> - ";
                    // line 42
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 42);
                    yield "</small>
                  </li>
                ";
                }
                // line 45
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 45)) {
                    // line 46
                    yield "                  <li>
                    <small> - ";
                    // line 47
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 47);
                    yield "</small>
                  </li>
                ";
                }
                // line 50
                yield "              </ul>
            </td>
            <td>
              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55);
                yield "\" size=\"1\" class=\"form-control";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 55)) {
                    yield " is-invalid";
                }
                yield "\"/>
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 56);
                yield "\"/>
                  <button type=\"submit\" formaction=\"";
                // line 57
                yield ($context["edit"] ?? null);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_update"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 58);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>
              ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 61)) {
                    // line 62
                    yield "                <small class=\"invalid-feedback d-block\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 62);
                    yield "</small>
              ";
                }
                // line 63
                yield "</td>
            <td class=\"text-end\">";
                // line 64
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                yield "</td>
            <td class=\"text-end\">";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 65);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "      </tbody>
      <tfoot id=\"checkout-total\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 71
                yield "          <tr>
            <td colspan=\"4\" class=\"text-end\"><strong>";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 72);
                yield "</strong></td>
            <td class=\"text-end\">";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 73);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "      </tfoot>
    </table>
  </div>

  ";
            // line 80
            if (($context["modules"] ?? null)) {
                // line 81
                yield "    <h2>";
                yield ($context["text_next"] ?? null);
                yield "</h2>
    <p>";
                // line 82
                yield ($context["text_next_choice"] ?? null);
                yield "</p>
    <div id=\"accordion\" class=\"accordion\">
      ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 85
                    yield "        ";
                    yield $context["module"];
                    yield "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "    </div>
  ";
            }
            // line 89
            yield "
  <br/>
  <div class=\"row\">
    <div class=\"col\"><a href=\"";
            // line 92
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-light\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a></div>
    <div class=\"col text-end\"><a href=\"";
            // line 93
            yield ($context["checkout"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a></div>
  </div>
";
        } else {
            // line 96
            yield "  <h1>";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
  <p>";
            // line 97
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  <div class=\"text-end\"><a href=\"";
            // line 98
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  347 => 98,  343 => 97,  338 => 96,  330 => 93,  324 => 92,  319 => 89,  315 => 87,  306 => 85,  302 => 84,  297 => 82,  292 => 81,  290 => 80,  284 => 76,  275 => 73,  271 => 72,  268 => 71,  264 => 70,  260 => 68,  251 => 65,  247 => 64,  244 => 63,  238 => 62,  236 => 61,  228 => 58,  222 => 57,  218 => 56,  210 => 55,  203 => 50,  195 => 47,  192 => 46,  189 => 45,  181 => 42,  178 => 41,  175 => 40,  164 => 37,  161 => 36,  157 => 35,  150 => 33,  146 => 31,  138 => 30,  124 => 29,  121 => 28,  117 => 27,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  <h1>{{ heading_title }}{% if weight %} ({{ weight }}){% endif %}</h1>
  <div id=\"output-cart\" class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\">{{ column_image }}</th>
          <th>{{ column_name }}</th>
          <th>{{ column_quantity }}</th>
          <th class=\"text-end\">{{ column_price }}</th>
          <th class=\"text-end\">{{ column_total }}</th>
        </tr>
      </thead>
      <tbody>
        {% for product in products %}
          <tr>
            <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/></a>{% endif %}</td>
            <td class=\"text-start text-wrap\"><a href=\"{{ product.href }}\">{{ product.name }}</a>{% if not product.stock %} <span class=\"text-danger\">***</span>{% endif %}
              <ul class=\"list-unstyled mb-0\">
                <li>
                  <small> - {{ text_model }}: {{ product.model }}</small>
                </li>
                {% for option in product.option %}
                  <li>
                    <small> - {{ option.name }}: {{ option.value }}</small>
                  </li>
                {% endfor %}
                {% if product.subscription %}
                  <li>
                    <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                  </li>
                {% endif %}
                {% if product.reward %}
                  <li>
                    <small> - {{ text_points }}: {{ product.reward }}</small>
                  </li>
                {% endif %}
              </ul>
            </td>
            <td>
              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\"/>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
                  <button type=\"submit\" formaction=\"{{ edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"{{ product.remove }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>
              {% if product.minimum %}
                <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
              {% endif %}</td>
            <td class=\"text-end\">{{ product.price }}</td>
            <td class=\"text-end\">{{ product.total }}</td>
          </tr>
        {% endfor %}
      </tbody>
      <tfoot id=\"checkout-total\">
        {% for total in totals %}
          <tr>
            <td colspan=\"4\" class=\"text-end\"><strong>{{ total.title }}</strong></td>
            <td class=\"text-end\">{{ total.text }}</td>
          </tr>
        {% endfor %}
      </tfoot>
    </table>
  </div>

  {% if modules %}
    <h2>{{ text_next }}</h2>
    <p>{{ text_next_choice }}</p>
    <div id=\"accordion\" class=\"accordion\">
      {% for module in modules %}
        {{ module }}
      {% endfor %}
    </div>
  {% endif %}

  <br/>
  <div class=\"row\">
    <div class=\"col\"><a href=\"{{ continue }}\" class=\"btn btn-light\">{{ button_shopping }}</a></div>
    <div class=\"col text-end\"><a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ button_checkout }}</a></div>
  </div>
{% else %}
  <h1>{{ heading_title }}</h1>
  <p>{{ text_no_results }}</p>
  <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
{% endif %}
", "catalog/view/template/checkout/cart_list.twig", "/var/www/html/catalog/view/template/checkout/cart_list.twig");
    }
}
