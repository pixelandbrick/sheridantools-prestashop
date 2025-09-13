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

/* @PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig */
class __TwigTemplate_045a3ac8cdee460c2cd156adc91262a6 extends Template
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
        // line 25
        yield "<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 34
            yield "        <li class=\"quick-row-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                yield " active";
            }
            yield "\">
          <a ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 35)) {
                yield "class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 35), "html", null, true);
                yield "\"";
            }
            // line 36
            yield "          href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 36), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                yield "target=\"_blank\"";
            }
            // line 37
            yield "          data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
          >
            ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
      <li class=\"divider\"></li>
      ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 45)) {
            // line 46
            yield "      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 48), "id_quick_access", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
          <i class=\"material-icons\">remove_circle</i>
          ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        } else {
            // line 54
            yield "      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        }
        // line 61
        yield "      <li>
        <a id=\"quick-manage-link\" href=\"";
        // line 62
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
        <i class=\"material-icons\">settings</i>
          ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$('.ajax-quick-link').on('click', function(e){
      e.preventDefault();

      var method = \$(this).data('method');

      if(method == 'add')
        var name = prompt('";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
        yield "', '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 79), "html", null, true);
        yield "');

      if(method == 'add' && name || method == 'remove')
      {
        \$.ajax({
          type: 'POST',
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"";
        // line 87
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses", ["action" => "GetUrl", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "ajax" => 1]);
        yield "\" + \"&method=\" + method + ( \$(this).data('quicklink-id') ? \"&id_quick_access=\" + \$(this).data('quicklink-id') : \"\"),
          data: {
            \"url\": \"";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 89);
        yield "\",
            \"name\": name,
            \"icon\": \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 91), "html", null, true);
        yield "\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list ='';
            \$.each(data, function(index,value){
              if (typeof data[index]['name'] !== 'undefined')
                quicklink_list += '<li><a href=\"' + data[index]['link'] + '\">' + data[index]['name'] + '</a></li>';
            });

            if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == 'string')
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$('#header_quick ul.dropdown-menu .divider').prevAll().remove();
              \$('#header_quick ul.dropdown-menu').prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig";
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
        return array (  178 => 91,  173 => 89,  168 => 87,  155 => 79,  137 => 64,  132 => 62,  129 => 61,  122 => 57,  117 => 54,  110 => 50,  105 => 48,  101 => 46,  99 => 45,  95 => 43,  85 => 39,  79 => 37,  72 => 36,  66 => 35,  59 => 34,  55 => 33,  50 => 31,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/quick_access.html.twig");
    }
}
