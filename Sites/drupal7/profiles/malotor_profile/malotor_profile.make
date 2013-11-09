; This file was auto-generated by drush make
core = 7.x

api = 2


defaults[projects][subdir] = "contrib"

; Modules

projects[] = ctools

projects[] = ckeditor

projects[] = entity

projects[] = features_extra

projects[] = features

projects[] = filefield_sources

projects[] = globalredirect

projects[] = google_analytics

projects[] = i18n


projects[] = imce

projects[] = l10n_client

projects[] = l10n_update

projects[] = linkit

projects[] = metatag

projects[] = nodequeue

projects[] = pathauto

projects[] = redirect

projects[] = rules


projects[] = strongarm

projects[] = token
projects[] = variable

projects[] = views
projects[] = views_linkarea
projects[] = views_bulk_operations
projects[] = better_exposed_filters

projects[] = xmlsitemap

projects[] = i18nviews

projects[] = sharethis

projects[] = devel
 
projects[] = lightbox2

projects[] = backup_migrate

projects[] = pathauto_i18n_taxonomy

projects[] = taxonomy_menu

projects[] = taxonomy_menu_trails

projects[] = context

projects[] = menu_firstchild

projects[] = menu_block


projects[] = libraries

projects[] = module_filter

projects[] = scheduler

projects[] = breakpoints
projects[] = captcha
projects[] = date
projects[] = geshifilter
projects[] = oauth
projects[] = publication_date
projects[] = robotstxt
projects[] = search404
projects[] = transliteration
projects[] = twitter


;Fields
projects[] = field_group
projects[] = field_validation

;Location
projects[] = location
projects[] = gmap

;Mailchimp
projects[] = mailchimp

;Campos de usuarios
;projects[] = user_role_field
;projects[] = field_permissions

;Signup
projects[] = signup


;Admin improvement

projects[] = admin_menu


;Omega

projects[] = omega
projects[] = context_omega

;Carrusel
projects[] = field_slideshow
; flexsldier es responsive
projects[] = flexslider
projects[] = field_collection



; Sandbox module
projects[author_hcard][type] = module
projects[author_hcard][download][type] = git
projects[author_hcard][download][branch] = "master"
projects[author_hcard][download][url] = http://git.drupal.org/sandbox/malotor/2042979.git 
; projects[author_hcard][download][revision] = a1cc04da3c1dd957e6808b7e6a381c5970904863
projects[author_hcard][subdir] = "custom"


; Admin theme
projects[] = ember
projects[] = navbar
projects[] = responsive_bartik

; Libraries
libraries[ckeditor][download][type] = "file"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%204.1/ckeditor_4.1_standard.zip"


libraries[jquery.cycle][download][type] = "file"
libraries[jquery.cycle][download][url] = "http://malsup.github.com/jquery.cycle.all.js"


libraries[json2][download][type] = "file"
libraries[json2][download][url] = "https://github.com/douglascrockford/JSON-js/archive/master.zip"


libraries[mailchimp][download][type] = "file"
libraries[mailchimp][download][url] = "http://apidocs.mailchimp.com/api/downloads/mailchimp-api-class.zip"