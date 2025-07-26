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

/* admin/view/template/customer/customer_list.twig */
class __TwigTemplate_4f942fc8969533762c93cb2511211783 extends Template
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
        yield "<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#customer\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_email"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "c.email")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_email"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 9
        yield ($context["sort_customer_group"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "customer_group")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_customer_group"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 10
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "c.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["customers"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 17
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 17)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 19);
                yield "</td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 20);
                yield "</td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 21);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">
                <div class=\"btn-group dropdown\">
                  <a href=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fa-solid fa-caret-down\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><h6 class=\"dropdown-header\">";
                // line 28
                yield ($context["text_option"] ?? null);
                yield "</h6></li>
                    ";
                // line 29
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 29)) {
                    // line 30
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 30);
                    yield "\" data-oc-toggle=\"unlock\" class=\"dropdown-item\"><i class=\"fa-solid fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                    ";
                } else {
                    // line 32
                    yield "                      <li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa-solid fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                    ";
                }
                // line 34
                yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><h6 class=\"dropdown-header\">";
                // line 35
                yield ($context["text_login"] ?? null);
                yield "</h6></li>
                    ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 37
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 37);
                    yield "\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-lock\"></i> ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 37);
                    yield "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                  </ul>
                </div></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "        ";
        } else {
            // line 44
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 45
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 48
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 52
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 53
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/customer/customer_list.twig";
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
        return array (  224 => 53,  220 => 52,  214 => 48,  208 => 45,  205 => 44,  202 => 43,  193 => 39,  182 => 37,  178 => 36,  174 => 35,  171 => 34,  165 => 32,  157 => 30,  155 => 29,  151 => 28,  143 => 25,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  114 => 17,  109 => 16,  107 => 15,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#customer\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th><a href=\"{{ sort_email }}\"{% if sort == 'c.email' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_email }}</a></th>
          <th><a href=\"{{ sort_customer_group }}\"{% if sort == 'customer_group' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_customer_group }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'c.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if customers %}
          {% for customer in customers %}
            <tr{% if not customer.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.customer_id }}\" class=\"form-check-input\"/></td>
              <td>{{ customer.name }}</td>
              <td>{{ customer.email }}</td>
              <td>{{ customer.customer_group }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ customer.date_added }}</td>
              <td class=\"text-end\">
                <div class=\"btn-group dropdown\">
                  <a href=\"{{ customer.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fa-solid fa-caret-down\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><h6 class=\"dropdown-header\">{{ text_option }}</h6></li>
                    {% if customer.unlock %}
                      <li><a href=\"{{ customer.unlock }}\" data-oc-toggle=\"unlock\" class=\"dropdown-item\"><i class=\"fa-solid fa-unlock\"></i> {{ text_unlock }}</a></li>
                    {% else %}
                      <li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa-solid fa-unlock\"></i> {{ text_unlock }}</a></li>
                    {% endif %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><h6 class=\"dropdown-header\">{{ text_login }}</h6></li>
                    {% for store in customer.store %}
                      <li><a href=\"{{ store.href }}\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-lock\"></i> {{ store.name }}</a></li>
                    {% endfor %}
                  </ul>
                </div></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "admin/view/template/customer/customer_list.twig", "/var/www/html/admin/view/template/customer/customer_list.twig");
    }
}
