# Changelog

## [1.10.1](https://github.com/rectitude-open/filament-info-pages/compare/v1.10.0...v1.10.1) (2025-07-09)


### Bug Fixes

* retrieve all latest published pages in getAllLatestPublishedPages method ([79b3d73](https://github.com/rectitude-open/filament-info-pages/commit/79b3d7366e671a9ef0d5147da15d2d63d484f1ca))

## [1.10.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.9.1...v1.10.0) (2025-07-09)


### Features

* add getAllLatestPublishedPages method and unify model retrieval method name to getModel ([5aaf181](https://github.com/rectitude-open/filament-info-pages/commit/5aaf181d0dc9225ec903001c7c9fe0c0322c1ebf))

## [1.9.1](https://github.com/rectitude-open/filament-info-pages/compare/v1.9.0...v1.9.1) (2025-07-01)


### Bug Fixes

* change visibility of query scope methods to protected ([12f26f6](https://github.com/rectitude-open/filament-info-pages/commit/12f26f6b58a7491f9813385a2dc070cb0bcbc8fb))

## [1.9.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.8.0...v1.9.0) (2025-06-27)


### Features

* implement methods for retrieving and filtering published pages by slug ([8af975a](https://github.com/rectitude-open/filament-info-pages/commit/8af975a93533d991e7790d6d834b9a2dfc998001))


### Bug Fixes

* reorder use statements for consistency and clarity in FilamentInfoPages and Page models ([b5993be](https://github.com/rectitude-open/filament-info-pages/commit/b5993becdcb5e57fca1fab4c405aac509bd627f0))

## [1.8.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.7.0...v1.8.0) (2025-06-24)


### Features

* add scope for filtering by slug in Page model ([66c0664](https://github.com/rectitude-open/filament-info-pages/commit/66c066413eb25bfbfcfa1bfe3ea9818ba7729839))
* update dev dependencies in composer.json and phpstan.neon.dist ([9c461ec](https://github.com/rectitude-open/filament-info-pages/commit/9c461ece665de99fd60089edc0fdc2747bdc943b))
* update pages table schema with increments for id and unique slug ([fb90525](https://github.com/rectitude-open/filament-info-pages/commit/fb9052593d349d2c4adcc96747da3d2772291917))

## [1.7.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.6.0...v1.7.0) (2025-06-21)


### Features

* add more translation files ([e8a41e7](https://github.com/rectitude-open/filament-info-pages/commit/e8a41e700ec71211b5a35ab48033acde8dc15974))
* enhance Page model with factory integration and model definition ([e0109e1](https://github.com/rectitude-open/filament-info-pages/commit/e0109e17c136c237c0c47a45e4ee56a35d17ed4d))

## [1.6.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.5.0...v1.6.0) (2025-06-19)


### Features

* add localization support for PageResource fields and navigation ([3553b77](https://github.com/rectitude-open/filament-info-pages/commit/3553b77b49a31b531b0b08d55015d60ec75ae81d))
* implement header actions for EditPage with revisions and delete options ([aec2b3f](https://github.com/rectitude-open/filament-info-pages/commit/aec2b3fbd6fe00da79ab195f7b9cc4f835191c49))
* replace TinyEditor with configurable editor component in PageResource ([eff6976](https://github.com/rectitude-open/filament-info-pages/commit/eff6976a03ba7c0652fb19895a44cab1110d39fd))
* update README to include dependency notes and translation publishing instructions ([542f8b8](https://github.com/rectitude-open/filament-info-pages/commit/542f8b8eb3f6401a8b5829d2468d41f84c9b497c))

## [1.5.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.4.1...v1.5.0) (2025-06-15)


### Features

* add CuratorColumn for featured image in PageResource ([4d21857](https://github.com/rectitude-open/filament-info-pages/commit/4d218578c511c4551e628616f13a0c09754c3c0a))
* enable list display for featured image relationship ([2e3be44](https://github.com/rectitude-open/filament-info-pages/commit/2e3be44a9c733fbe631c88aba6f4700793d591ed))

## [1.4.1](https://github.com/rectitude-open/filament-info-pages/compare/v1.4.0...v1.4.1) (2025-06-14)


### Bug Fixes

* rename featuredImage method to featured_image for consistency ([b5458cf](https://github.com/rectitude-open/filament-info-pages/commit/b5458cfa1084fe1e797b3d0acbee037bfa4cdf13))

## [1.4.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.3.0...v1.4.0) (2025-06-14)


### Features

* add featured image support to Page resource and migration ([61a2409](https://github.com/rectitude-open/filament-info-pages/commit/61a24097d3f85c8df6b6ac2a47d4fcf49699a40c))

## [1.3.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.2.0...v1.3.0) (2025-06-14)


### Features

* use Filament Curator instead of media manager ([b8680d3](https://github.com/rectitude-open/filament-info-pages/commit/b8680d3855e66df20ba67bb80e9a8156ca0d262f))

## [1.2.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.1.0...v1.2.0) (2025-06-05)


### Features

* add SEO support to Page model and resource, and update composer dependencies ([77da09d](https://github.com/rectitude-open/filament-info-pages/commit/77da09df445e828f61354b0c5dc87650ddd695fb))


### Bug Fixes

* update credits in README to reflect current contributor ([1974b3f](https://github.com/rectitude-open/filament-info-pages/commit/1974b3f14402fe35e77002b69dfac1be657a9ee0))
* update migration name for clarity in FilamentInfoPagesServiceProvider ([b99d1b3](https://github.com/rectitude-open/filament-info-pages/commit/b99d1b3efa5a95e58a85053db7ea262338abc3bc))

## [1.1.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.0.1...v1.1.0) (2025-05-29)


### Features

* add create action to header in ListPages ([62e2307](https://github.com/rectitude-open/filament-info-pages/commit/62e2307b77e43cad1b2b388e2d7a401451d93cf0))
* update README and composer.json for improved clarity and new features ([079f07d](https://github.com/rectitude-open/filament-info-pages/commit/079f07d0a7bdbbdd7cbf715d4e40466d3793df3d))


### Bug Fixes

* correct document root path in nginx configuration ([79a33da](https://github.com/rectitude-open/filament-info-pages/commit/79a33da65e1458dacc4848f21a291a0be1082b62))

## [1.0.1](https://github.com/rectitude-open/filament-info-pages/compare/v1.0.0...v1.0.1) (2025-05-16)


### Bug Fixes

* update cviebrock/eloquent-sluggable version constraint to support multiple versions ([3cb4439](https://github.com/rectitude-open/filament-info-pages/commit/3cb4439da0cde5963ef367b74a98cef956d0467d))

## 1.0.0 (2025-05-16)


### Features

* add core feature ([88c6488](https://github.com/rectitude-open/filament-info-pages/commit/88c64887d261f8812c06462dd0a4fc16a8031c18))
