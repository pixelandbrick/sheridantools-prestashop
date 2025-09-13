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

/* @PrestaShop/Admin/Component/Layout/multistore_header.html.twig */
class __TwigTemplate_de8129bf6f9f7ca3a680cc017077605b extends Template
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
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield from $this->unwrap()->yieldBlock('multistore_header', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multistore_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isMultistoreUsed", [], "any", false, false, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26)))) {
            // line 27
            yield "    <div
      id=\"header-multishop\"
      class=\"header-multishop";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isAllShopContext", [], "any", false, false, false, 29)) {
                yield " header-multishop-allshops";
            } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 29))) {
                yield " header-multishop-default";
            }
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 29)) {
                yield " header-multishop-dark";
            } else {
                yield " header-multishop-bright";
            }
            yield "\"
      ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 30)) {
                yield "data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 30), "html", null, true);
                yield "\"";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 30)) {
                yield "data-group-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 30), "html", null, true);
                yield "\"";
            } else {
                yield "data-all-shops=\"1\"";
            }
            // line 31
            yield "      ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "colorConfigLink", [], "any", false, false, false, 31))) {
                yield "data-header-color-notification=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "colorConfigLink", [], "any", false, false, false, 31)) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                yield "\"";
            }
            // line 32
            yield "      data-checkbox-notification=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            yield "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 34
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 34))) {
                yield " style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 34), "html", null, true);
                yield ";\"";
            }
            yield ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 36)) {
                // line 37
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 37)]);
                yield "
          ";
            } else {
                // line 39
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 39)]);
                yield "
          ";
            }
            // line 41
            yield "
          <h2 class=\"header-multishop-title\">
            ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 43)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                yield " ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextName", [], "any", false, false, false, 43), "html", null, true);
            yield "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 52)) {
                // line 53
                yield "        <div class=\"header-multishop-right\">
          ";
                // line 54
                yield from $this->unwrap()->yieldBlock('multishop_header_right', $context, $blocks);
                // line 57
                yield "        </div>
      ";
            }
            // line 59
            yield "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 63
            yield from $this->unwrap()->yieldBlock('search_shops', $context, $blocks);
            // line 71
            yield "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              ";
            // line 73
            yield from $this->unwrap()->yieldBlock('all_shops_item', $context, $blocks);
            // line 87
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "groupList", [], "any", false, false, false, 87));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 88
                yield "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 88)) {
                    yield " first-group-item";
                }
                yield "\">
                  ";
                // line 89
                yield from $this->unwrap()->yieldBlock('shop_group_item', $context, $blocks);
                // line 96
                yield "                </li>

                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 98));
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
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 99
                    yield "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 100
                    yield from $this->unwrap()->yieldBlock('shop_item', $context, $blocks);
                    // line 114
                    yield "                  </li>
                ";
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
                unset($context['_seq'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
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
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            yield "\"></script>
  ";
        }
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multishop_header_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "            <a class=\"header-multishop-view-action\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "link", [], "any", false, false, false, 55), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
        yield "\" target=\"_blank\" rel=\"nofollow\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">visibility</i></a>
          ";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isLockedToAllShopContext", [], "any", false, false, false, 64) == false)) {
            // line 65
            yield "                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\" data-no-results=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            yield "\" data-searching=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            yield "\">
                </div>
              ";
        }
        // line 70
        yield "            ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_shops_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "allShopsAllowed", [], "any", false, false, false, 74)) {
            // line 75
            yield "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isAllShopContext", [], "any", false, false, false, 76)) {
                // line 77
                yield "                    <i class=\"material-icons\">check</i>
                  ";
            } else {
                // line 79
                yield "                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  ";
            }
            // line 81
            yield "                  <a class=\"multishop-modal-all-name\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
            yield "\">
                    <span>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All stores", [], "Admin.Global"), "html", null, true);
            yield "</span>
                  </a>
                </li>
                ";
        }
        // line 86
        yield "              ";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_group_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "                    <span class=\"multishop-modal-color-container";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 90) == CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 90)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"";
        // line 92
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 92))) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 92), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 92), "updateshop_group" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl(($context["group"] ?? null)), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 94)), "html", null, true);
        yield "</a>
                  ";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 102) == CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 102)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 104
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 104))) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 104), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 104), "updateshop" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 106) == false)) {
            yield " multishop-modal-no-url\"";
        } else {
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            yield "\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 106), "html", null, true);
        yield "</a>
                      </div>
                      ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 108)) {
            // line 109
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "link", [], "any", false, false, false, 109), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 109)], "method", false, false, false, 109), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        } else {
            // line 111
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 111), "addshop_url" => 1]), "html", null, true);
            yield "\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        }
        // line 113
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  454 => 113,  446 => 111,  438 => 109,  436 => 108,  423 => 106,  410 => 104,  403 => 102,  400 => 101,  393 => 100,  384 => 94,  371 => 92,  363 => 90,  356 => 89,  351 => 86,  344 => 82,  339 => 81,  335 => 79,  331 => 77,  329 => 76,  326 => 75,  323 => 74,  316 => 73,  311 => 70,  301 => 67,  297 => 65,  294 => 64,  287 => 63,  277 => 55,  270 => 54,  262 => 123,  254 => 117,  240 => 116,  225 => 114,  223 => 100,  220 => 99,  203 => 98,  199 => 96,  197 => 89,  190 => 88,  172 => 87,  170 => 73,  166 => 71,  164 => 63,  158 => 59,  154 => 57,  152 => 54,  149 => 53,  147 => 52,  131 => 43,  127 => 41,  121 => 39,  115 => 37,  113 => 36,  104 => 34,  98 => 32,  91 => 31,  79 => 30,  66 => 29,  62 => 27,  59 => 26,  48 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/multistore_header.html.twig");
    }
}
