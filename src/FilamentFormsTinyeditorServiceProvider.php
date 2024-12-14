<?php

namespace Mohamedsabil83\FilamentFormsTinyeditor;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFormsTinyeditorServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-forms-tinyeditor';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Js::make('tinymce', 'https://gcore.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js'),
            Js::make('tiny-editor', __DIR__.'/../resources/dist/js/tiny-editor.js'),
            Js::make('tinymce-lang-ar', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ar.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-az', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/az.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-bg_BG', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/bg_BG.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-bn_BD', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/bn_BD.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ca', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ca.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-cs', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/cs.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-cy', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/cy.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-da', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/da.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-de', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/de.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-dv', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/dv.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-el', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/el.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-eo', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/eo.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-es', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/es.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-es_ES', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/es_ES.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-et', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/et.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-es_MX', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/es_MX.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-eu', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/eu.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-fa', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/fa.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-fa_IR', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/fa_IR.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-fi', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/fi.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-fr_FR', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/fr_FR.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ga', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ga.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-gl', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/gl.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-he_IL', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/he_IL.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-hr', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/hr.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-hu_HU', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/hu_HU.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-hy', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/hy.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-id', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/id.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-is_IS', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/is_IS.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-it', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/it.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-it_IT', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/it_IT.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ja', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ja.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-kab', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/kab.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-kk', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/kk.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ko_KR', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ko_KR.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ku', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ku.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-lt', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/lt.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-lv', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/lv.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-nb_NO', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/nb_NO.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-nl', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/nl.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-nl_BE', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/nl_BE.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-oc', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/oc.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-pl', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/pl.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-pt_BR', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/pt_BR.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-pt_PT', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/pt_PT.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ro', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ro.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ro_RO', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ro_RO.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ru', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ru.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ru_RU', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ru_RU.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sk', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sk.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sl', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sl.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sl_SI', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sl_SI.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sq', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sq.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sr', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sr.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-sv_SE', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/sv_SE.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ta', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ta.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ta_IN', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ta_IN.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-tg', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/tg.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-th_TH', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/th_TH.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-tr', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/tr.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-tr_TR', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/tr_TR.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-ug', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/ug.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-uk', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/uk.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-vi', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/vi.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-zh_CN', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/zh_CN.min.js')->loadedOnRequest(),
            Js::make('tinymce-lang-zh_TW', 'https://gcore.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/zh_TW.min.js')->loadedOnRequest(),
        ], package: 'mohamedsabil83/filament-forms-tinyeditor');
    }
}
