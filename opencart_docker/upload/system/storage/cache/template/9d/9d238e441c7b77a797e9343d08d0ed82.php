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

/* catalog/view/template/product/review.twig */
class __TwigTemplate_ace4702e43800d84ae8bcc5f47f26b91 extends Template
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
        yield "<form id=\"form-review\">
  <div id=\"review\">";
        // line 2
        yield ($context["list"] ?? null);
        yield "</div>
  <h2>";
        // line 3
        yield ($context["text_write"] ?? null);
        yield "</h2>
  ";
        // line 4
        if (($context["review_guest"] ?? null)) {
            // line 5
            yield "    <div class=\"mb-3 required\">
      <label for=\"input-author\" class=\"form-label\">";
            // line 6
            yield ($context["entry_author"] ?? null);
            yield "</label> <input type=\"text\" name=\"author\" value=\"";
            yield ($context["customer"] ?? null);
            yield "\" id=\"input-author\" class=\"form-control\"/>
      <div id=\"error-author\" class=\"invalid-feedback\"></div>
    </div>
    <div class=\"mb-3 required\">
      <label for=\"input-text\" class=\"form-label\">";
            // line 10
            yield ($context["entry_review"] ?? null);
            yield "</label> <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\"></textarea>
      <div id=\"error-text\" class=\"invalid-feedback\"></div>
      <div class=\"invalid-feedback\">";
            // line 12
            yield ($context["text_note"] ?? null);
            yield "</div>
    </div>
    <div class=\"row mb-3 required\">
      <label class=\"form-label\">";
            // line 15
            yield ($context["entry_rating"] ?? null);
            yield "</label>
      <div id=\"input-rating\">
        ";
            // line 17
            yield ($context["entry_bad"] ?? null);
            yield "&nbsp;
        <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
        &nbsp;";
            // line 27
            yield ($context["entry_good"] ?? null);
            yield "
      </div>
      <div id=\"error-rating\" class=\"invalid-feedback\"></div>
    </div>
    ";
            // line 31
            yield ($context["captcha"] ?? null);
            yield "
    <div class=\"text-end\">
      <button type=\"submit\" id=\"button-review\" class=\"btn btn-primary\">";
            // line 33
            yield ($context["button_continue"] ?? null);
            yield "</button>
    </div>
  ";
        } else {
            // line 36
            yield "    ";
            yield ($context["text_login"] ?? null);
            yield "
  ";
        }
        // line 38
        yield "</form>
<script type=\"text/javascript\"><!--
\$('#review').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#review').load(this.href);
});

// Forms
\$('#form-review').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=product/review.write&language=";
        // line 53
        yield ($context["language"] ?? null);
        yield "&review_token=";
        yield ($context["review_token"] ?? null);
        yield "&product_id=";
        yield ($context["product_id"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-review').serialize(),
        dataType: 'json',
        cache: false,
        contentType: 'application/x-www-form-urlencoded',
        processData: false,
        beforeSend: function() {
            \$('#button-review').button('loading');
        },
        complete: function() {
            \$('#button-review').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('#form-review').find('.is-invalid').removeClass('is-invalid');
            \$('#form-review').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-text').val('');
                \$('#input-rating input[type=\\'radio\\']').prop('checked', false);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/review.twig";
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
        return array (  137 => 53,  120 => 38,  114 => 36,  108 => 33,  103 => 31,  96 => 27,  83 => 17,  78 => 15,  72 => 12,  67 => 10,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-review\">
  <div id=\"review\">{{ list }}</div>
  <h2>{{ text_write }}</h2>
  {% if review_guest %}
    <div class=\"mb-3 required\">
      <label for=\"input-author\" class=\"form-label\">{{ entry_author }}</label> <input type=\"text\" name=\"author\" value=\"{{ customer }}\" id=\"input-author\" class=\"form-control\"/>
      <div id=\"error-author\" class=\"invalid-feedback\"></div>
    </div>
    <div class=\"mb-3 required\">
      <label for=\"input-text\" class=\"form-label\">{{ entry_review }}</label> <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\"></textarea>
      <div id=\"error-text\" class=\"invalid-feedback\"></div>
      <div class=\"invalid-feedback\">{{ text_note }}</div>
    </div>
    <div class=\"row mb-3 required\">
      <label class=\"form-label\">{{ entry_rating }}</label>
      <div id=\"input-rating\">
        {{ entry_bad }}&nbsp;
        <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
        &nbsp;{{ entry_good }}
      </div>
      <div id=\"error-rating\" class=\"invalid-feedback\"></div>
    </div>
    {{ captcha }}
    <div class=\"text-end\">
      <button type=\"submit\" id=\"button-review\" class=\"btn btn-primary\">{{ button_continue }}</button>
    </div>
  {% else %}
    {{ text_login }}
  {% endif %}
</form>
<script type=\"text/javascript\"><!--
\$('#review').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#review').load(this.href);
});

// Forms
\$('#form-review').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=product/review.write&language={{ language }}&review_token={{ review_token }}&product_id={{ product_id }}',
        type: 'post',
        data: \$('#form-review').serialize(),
        dataType: 'json',
        cache: false,
        contentType: 'application/x-www-form-urlencoded',
        processData: false,
        beforeSend: function() {
            \$('#button-review').button('loading');
        },
        complete: function() {
            \$('#button-review').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('#form-review').find('.is-invalid').removeClass('is-invalid');
            \$('#form-review').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-text').val('');
                \$('#input-rating input[type=\\'radio\\']').prop('checked', false);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>", "catalog/view/template/product/review.twig", "/var/www/html/catalog/view/template/product/review.twig");
    }
}
