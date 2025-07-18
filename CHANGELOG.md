# Changelog

## [1.11.1](https://github.com/rectitude-open/filament-info-pages/compare/v1.11.0...v1.11.1) (2025-07-18)


### Bug Fixes

* use config for featured image model in Page model ([5cfcbf6](https://github.com/rectitude-open/filament-info-pages/commit/5cfcbf6245352ddb7c0e49c32d02c58da5b1ac3f))

## [1.11.0](https://github.com/rectitude-open/filament-info-pages/compare/v1.10.1...v1.11.0) (2025-07-16)


### Features

* add core feature ([88c6488](https://github.com/rectitude-open/filament-info-pages/commit/88c64887d261f8812c06462dd0a4fc16a8031c18))
* add create action to header in ListPages ([62e2307](https://github.com/rectitude-open/filament-info-pages/commit/62e2307b77e43cad1b2b388e2d7a401451d93cf0))
* add CuratorColumn for featured image in PageResource ([4d21857](https://github.com/rectitude-open/filament-info-pages/commit/4d218578c511c4551e628616f13a0c09754c3c0a))
* add featured image support to Page resource and migration ([61a2409](https://github.com/rectitude-open/filament-info-pages/commit/61a24097d3f85c8df6b6ac2a47d4fcf49699a40c))
* add getAllLatestPublishedPages method and unify model retrieval method name to getModel ([5aaf181](https://github.com/rectitude-open/filament-info-pages/commit/5aaf181d0dc9225ec903001c7c9fe0c0322c1ebf))
* add helper function to retrieve page by identifier ([c9f9fa6](https://github.com/rectitude-open/filament-info-pages/commit/c9f9fa6e2448fa106bcd5d131fec80866bb11e2f))
* add localization support for PageResource fields and navigation ([3553b77](https://github.com/rectitude-open/filament-info-pages/commit/3553b77b49a31b531b0b08d55015d60ec75ae81d))
* add more translation files ([e8a41e7](https://github.com/rectitude-open/filament-info-pages/commit/e8a41e700ec71211b5a35ab48033acde8dc15974))
* add scope for filtering by slug in Page model ([66c0664](https://github.com/rectitude-open/filament-info-pages/commit/66c066413eb25bfbfcfa1bfe3ea9818ba7729839))
* add SEO support to Page model and resource, and update composer dependencies ([77da09d](https://github.com/rectitude-open/filament-info-pages/commit/77da09df445e828f61354b0c5dc87650ddd695fb))
* add slug column to PageResource table with copyable option ([186f66c](https://github.com/rectitude-open/filament-info-pages/commit/186f66cf3a0778379f2025f328b9a39f2125c7f7))
* change content column type from text to longText in pages table migration ([34af187](https://github.com/rectitude-open/filament-info-pages/commit/34af1875dc154ccb0aa70f7f5406014100c2ac39))
* enable list display for featured image relationship ([2e3be44](https://github.com/rectitude-open/filament-info-pages/commit/2e3be44a9c733fbe631c88aba6f4700793d591ed))
* enhance Page model with factory integration and model definition ([e0109e1](https://github.com/rectitude-open/filament-info-pages/commit/e0109e17c136c237c0c47a45e4ee56a35d17ed4d))
* implement getPage method to retrieve a page by ID or slug ([cddd96d](https://github.com/rectitude-open/filament-info-pages/commit/cddd96df4d407de342f87717d9f66f20847f2096))
* implement header actions for EditPage with revisions and delete options ([aec2b3f](https://github.com/rectitude-open/filament-info-pages/commit/aec2b3fbd6fe00da79ab195f7b9cc4f835191c49))
* implement methods for retrieving and filtering published pages by slug ([8af975a](https://github.com/rectitude-open/filament-info-pages/commit/8af975a93533d991e7790d6d834b9a2dfc998001))
* replace TinyEditor with configurable editor component in PageResource ([eff6976](https://github.com/rectitude-open/filament-info-pages/commit/eff6976a03ba7c0652fb19895a44cab1110d39fd))
* update dev dependencies in composer.json and phpstan.neon.dist ([9c461ec](https://github.com/rectitude-open/filament-info-pages/commit/9c461ece665de99fd60089edc0fdc2747bdc943b))
* update pages table schema with increments for id and unique slug ([fb90525](https://github.com/rectitude-open/filament-info-pages/commit/fb9052593d349d2c4adcc96747da3d2772291917))
* update README and composer.json for improved clarity and new features ([079f07d](https://github.com/rectitude-open/filament-info-pages/commit/079f07d0a7bdbbdd7cbf715d4e40466d3793df3d))
* update README to include dependency notes and translation publishing instructions ([542f8b8](https://github.com/rectitude-open/filament-info-pages/commit/542f8b8eb3f6401a8b5829d2468d41f84c9b497c))
* use Filament Curator instead of media manager ([b8680d3](https://github.com/rectitude-open/filament-info-pages/commit/b8680d3855e66df20ba67bb80e9a8156ca0d262f))


### Bug Fixes

* change visibility of query scope methods to protected ([12f26f6](https://github.com/rectitude-open/filament-info-pages/commit/12f26f6b58a7491f9813385a2dc070cb0bcbc8fb))
* correct document root path in nginx configuration ([79a33da](https://github.com/rectitude-open/filament-info-pages/commit/79a33da65e1458dacc4848f21a291a0be1082b62))
* rename featuredImage method to featured_image for consistency ([b5458cf](https://github.com/rectitude-open/filament-info-pages/commit/b5458cfa1084fe1e797b3d0acbee037bfa4cdf13))
* reorder use statements for consistency and clarity in FilamentInfoPages and Page models ([b5993be](https://github.com/rectitude-open/filament-info-pages/commit/b5993becdcb5e57fca1fab4c405aac509bd627f0))
* retrieve all latest published pages in getAllLatestPublishedPages method ([79b3d73](https://github.com/rectitude-open/filament-info-pages/commit/79b3d7366e671a9ef0d5147da15d2d63d484f1ca))
* update credits in README to reflect current contributor ([1974b3f](https://github.com/rectitude-open/filament-info-pages/commit/1974b3f14402fe35e77002b69dfac1be657a9ee0))
* update cviebrock/eloquent-sluggable version constraint to support multiple versions ([3cb4439](https://github.com/rectitude-open/filament-info-pages/commit/3cb4439da0cde5963ef367b74a98cef956d0467d))
* update migration name for clarity in FilamentInfoPagesServiceProvider ([b99d1b3](https://github.com/rectitude-open/filament-info-pages/commit/b99d1b3efa5a95e58a85053db7ea262338abc3bc))


### Miscellaneous Chores

* **main:** release 1.0.0 ([f438a59](https://github.com/rectitude-open/filament-info-pages/commit/f438a5906654e6a5a77e9830a84e72833410e1ea))
* **main:** release 1.0.0 ([ef6774a](https://github.com/rectitude-open/filament-info-pages/commit/ef6774a50cb52202c943c815d4fee61197fb3562))
* **main:** release 1.0.1 ([985aac9](https://github.com/rectitude-open/filament-info-pages/commit/985aac928058bd6444b5cd9deb786bc02dc35f05))
* **main:** release 1.0.1 ([8407c5a](https://github.com/rectitude-open/filament-info-pages/commit/8407c5a2ae51ec8801ac96eead2c562eedb83e6b))
* **main:** release 1.1.0 ([d78d03f](https://github.com/rectitude-open/filament-info-pages/commit/d78d03fc232f097c2f43690106f4cc2605cfafd7))
* **main:** release 1.1.0 ([5836162](https://github.com/rectitude-open/filament-info-pages/commit/58361629e37a97ed0302698f4a614aba5982be49))
* **main:** release 1.10.0 ([24c9471](https://github.com/rectitude-open/filament-info-pages/commit/24c9471f92101c5dfb9d8b0cb11c1abd594aa971))
* **main:** release 1.10.0 ([4ce8ef2](https://github.com/rectitude-open/filament-info-pages/commit/4ce8ef279ce32f9edd08160f5c8bdfeaa2148680))
* **main:** release 1.10.1 ([f352d86](https://github.com/rectitude-open/filament-info-pages/commit/f352d8658ecfac2bb42dff82192a5b682bbc8dee))
* **main:** release 1.10.1 ([f33a21f](https://github.com/rectitude-open/filament-info-pages/commit/f33a21f54d392a74487a60789457aaa60a5c7920))
* **main:** release 1.2.0 ([535390a](https://github.com/rectitude-open/filament-info-pages/commit/535390ab0973eaf2f050e3e8b3474b3506d707b1))
* **main:** release 1.2.0 ([ca9e727](https://github.com/rectitude-open/filament-info-pages/commit/ca9e7272b115ef63127447121f890904b43ad7aa))
* **main:** release 1.3.0 ([5f9afea](https://github.com/rectitude-open/filament-info-pages/commit/5f9afea5ae82b5a83b751047ccbc42f5107f59b7))
* **main:** release 1.3.0 ([4b7737d](https://github.com/rectitude-open/filament-info-pages/commit/4b7737d04c55e11ff8b391270dc5fce2ac3fde52))
* **main:** release 1.4.0 ([2d7b651](https://github.com/rectitude-open/filament-info-pages/commit/2d7b6519f6eff43f6fbfb4f554296420657a3906))
* **main:** release 1.4.0 ([be561e9](https://github.com/rectitude-open/filament-info-pages/commit/be561e92ea10247955efede5d0f96ca263f67c48))
* **main:** release 1.4.1 ([22ce6cb](https://github.com/rectitude-open/filament-info-pages/commit/22ce6cbf96d85fc5b6205c70321645da03bf3d13))
* **main:** release 1.4.1 ([71d75c4](https://github.com/rectitude-open/filament-info-pages/commit/71d75c413e574eb07f8b9a0b22db7f4bedb09ddd))
* **main:** release 1.5.0 ([32b7950](https://github.com/rectitude-open/filament-info-pages/commit/32b79501957a1ab2b917286a1b1d59a5e9635385))
* **main:** release 1.5.0 ([dac5e8f](https://github.com/rectitude-open/filament-info-pages/commit/dac5e8f6c0da5caca9daf6bd9a8ac1445e57d421))
* **main:** release 1.6.0 ([09357b1](https://github.com/rectitude-open/filament-info-pages/commit/09357b190f7cc4fcb45179ec9a0fd6b00b733a07))
* **main:** release 1.6.0 ([cf0c592](https://github.com/rectitude-open/filament-info-pages/commit/cf0c592aec89f32a8ada872a0ef46ab538cee3ec))
* **main:** release 1.7.0 ([5c6ff5c](https://github.com/rectitude-open/filament-info-pages/commit/5c6ff5c657fb75d139e6b65700cd3c1133d06e59))
* **main:** release 1.7.0 ([bfae87a](https://github.com/rectitude-open/filament-info-pages/commit/bfae87a815b7cdf78c362da2f137cff21b3cf5af))
* **main:** release 1.8.0 ([c4248e5](https://github.com/rectitude-open/filament-info-pages/commit/c4248e5574f01a894db534c03853fa5dd1b2cacb))
* **main:** release 1.8.0 ([dddd34e](https://github.com/rectitude-open/filament-info-pages/commit/dddd34e5068ca855d34dab543af85fc7dd00ac7a))
* **main:** release 1.9.0 ([793c250](https://github.com/rectitude-open/filament-info-pages/commit/793c2506ba05bddd45d9a2b8fa15da81d4d49861))
* **main:** release 1.9.0 ([3a25dae](https://github.com/rectitude-open/filament-info-pages/commit/3a25daec3e575df56a5e9f0196d6988fc47023e9))
* **main:** release 1.9.1 ([b9c22fb](https://github.com/rectitude-open/filament-info-pages/commit/b9c22fbdb312f2f86333c36962da7d34c9f7b74b))
* **main:** release 1.9.1 ([d0b5824](https://github.com/rectitude-open/filament-info-pages/commit/d0b58243271b0f4d00aa8ca92f30f4711045e080))

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
