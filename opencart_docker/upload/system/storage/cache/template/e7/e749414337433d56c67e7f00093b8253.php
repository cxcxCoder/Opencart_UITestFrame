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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_e39f555a444dc54899103dac79d9beec extends Template
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
<div id=\"account-account\" class=\"container\">
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 12
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 13
        yield ($context["text_my_account"] ?? null);
        yield "</h1>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 15
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 16
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 17
        yield ($context["payment_method"] ?? null);
        yield "\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 18
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 19
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
      </ul>
      <h2>";
        // line 21
        yield ($context["text_my_orders"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 23
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 24
        yield ($context["subscription"] ?? null);
        yield "\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 25
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
        ";
        // line 26
        if (($context["reward"] ?? null)) {
            // line 27
            yield "          <li><a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a></li>
        ";
        }
        // line 29
        yield "        <li><a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 30
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a></li>
      </ul>
      ";
        // line 32
        if (($context["affiliate"] ?? null)) {
            // line 33
            yield "        <h2>";
            yield ($context["text_my_affiliate"] ?? null);
            yield "</h2>
        <ul class=\"list-unstyled\">
          ";
            // line 35
            if ( !($context["tracking"] ?? null)) {
                // line 36
                yield "            <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_add"] ?? null);
                yield "</a></li>
          ";
            } else {
                // line 38
                yield "            <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_edit"] ?? null);
                yield "</a></li>
            <li><a href=\"";
                // line 39
                yield ($context["tracking"] ?? null);
                yield "\">";
                yield ($context["text_tracking"] ?? null);
                yield "</a></li>
          ";
            }
            // line 41
            yield "        </ul>
      ";
        }
        // line 43
        yield "      <h2>";
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 45
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
      </ul>
      ";
        // line 47
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 48
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 50
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
        return "catalog/view/template/account/account.twig";
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
        return array (  224 => 50,  219 => 48,  215 => 47,  208 => 45,  202 => 43,  198 => 41,  191 => 39,  184 => 38,  176 => 36,  174 => 35,  168 => 33,  166 => 32,  159 => 30,  152 => 29,  144 => 27,  142 => 26,  136 => 25,  130 => 24,  124 => 23,  119 => 21,  112 => 19,  106 => 18,  100 => 17,  94 => 16,  88 => 15,  83 => 13,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
       {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ text_my_account }}</h1>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
        <li><a href=\"{{ payment_method }}\">{{ text_payment_method }}</a></li>
        <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
        <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
      </ul>
      <h2>{{ text_my_orders }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
        <li><a href=\"{{ subscription }}\">{{ text_subscription }}</a></li>
        <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
        {% if reward %}
          <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
        {% endif %}
        <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
        <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
      </ul>
      {% if affiliate %}
        <h2>{{ text_my_affiliate }}</h2>
        <ul class=\"list-unstyled\">
          {% if not tracking %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
          {% else %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
            <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
          {% endif %}
        </ul>
      {% endif %}
      <h2>{{ text_my_newsletter }}</h2>
      <ul class=\"list-unstyled\">
          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
      </ul>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "/var/www/html/catalog/view/template/account/account.twig");
    }
}
