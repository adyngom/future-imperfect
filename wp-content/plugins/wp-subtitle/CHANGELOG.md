# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [2.6] - 2015-12-08

### Security
- Sanitize `$_REQUEST` and `$_GET` when establishing post type in the admin.

### Added
- Added quick edit support for subtitle. Props [Fabian Marz](https://github.com/fabianmarz) and [sun](https://github.com/sun).
- Allow subtitle post meta key to be filtered using `wps_subtitle_key`.
- Add German translation. Props [hatsumatsu](https://github.com/hatsumatsu).

## [2.5] - 2015-08-19

### Added
- Add [wp_subtitle] shortcode.

### Fixed
- Do not use variable for textdomain - causes issues for parsers.

### Changed
- Declare methods as public or private.

## [2.4.1] - 2015-06-09

### Fixed
- Fix PHP notice warning on 404 error page. Props Jay Williams.

### Changed
- Add a little space above subtitle field when below title field in admin.

## [2.4] - 2015-04-28

### Added
- Add subtitle admin column.

## [2.3.2] - 2015-02-10

### Fixed
- Show subtitle admin field when adding new post. Props Gabriel Doty.

## [2.3.1] - 2014-10-03

### Security
- Ensure subtitles are sanitized when saving.

## [2.3] - 2014-09-05

### Fixed
- Prevent subtitle fields from displaying on post types for which support has not been added using add_post_type_support(). Previously the fields were displayed but the subtitle would not be saved.
- Escape subtitle admin field value - fixes issues with subtitles with quotes.

## [2.2] - 2014-07-02

### Added
- Added 'wps_subtitle_use_meta_box' filter to allow the edit field to be displayed in a meta box (the old way).

### Changed
- Moved subtitle field from meta box to below title field in WordPress 3.5+ (props Tor Morten)

## [2.1] - 2014-03-12

### Added
- Ready for translation - .pot file added.
- Added deprecated function warnings if WP_DEBUG enabled.

### Fixed
- Fix static method warnings.

### Changed
- Only include admin functionality when needed.

## [2.0.1] - 2013-09-18

### Fixed
- Use `<?php` instead of just `<?`.

### Changed
- Break out some of the code into separate functions.

## [2.0] - 2013-07-29

### Added
- Added custom post type support - use add_post_type_support( '{post_type}', 'wps_subtitle' ).
- Added 'wps_meta_box_title' filter.
- Added 'wps_subtitle' filter.
- Added 'wps_subtitle_field_description' filter.

### Fixed
- Fixed bug in more recent versions of WordPress.

## [1.0] - 2013-07-27

### Added
- First version.

[Unreleased]: https://github.com/benhuson/wp-subtitle/compare/2.6...HEAD
[2.6]: https://github.com/benhuson/wp-subtitle/compare/2.5...2.6
[2.5]: https://github.com/benhuson/wp-subtitle/compare/2.4.1...2.5
[2.4.1]: https://github.com/benhuson/wp-subtitle/compare/2.4...2.4.1
[2.4]: https://github.com/benhuson/wp-subtitle/compare/2.3.2...2.4
[2.3.2]: https://github.com/benhuson/wp-subtitle/compare/2.3.1...2.3.2
[2.3.1]: https://github.com/benhuson/wp-subtitle/compare/2.3...2.3.1
[2.3]: https://github.com/benhuson/wp-subtitle/compare/2.2...2.3
[2.2]: https://github.com/benhuson/wp-subtitle/compare/2.1...2.2
[2.1]: https://github.com/benhuson/wp-subtitle/compare/2.0.1...2.1
[2.0.1]: https://github.com/benhuson/wp-subtitle/compare/2.0...2.0.1
[2.0]: https://github.com/benhuson/wp-subtitle/compare/1.0...2.0
[1.0]: https://github.com/benhuson/wp-subtitle/tree/1.0
