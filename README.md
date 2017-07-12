# Drupal Console Generate

Drupal Console Generate contains Drupal Console code generation commands.

### Commands:
```
* yaml:diff                               Compare two YAML files in order to find differences between them.
* generate:authentication:provider (gap)  Generate an Authentication Provider
* generate:breakpoint                     Generate breakpoint
* generate:cache:context                  Generate a cache context
  generate:command (gcm)                  Generate commands for the console.
* generate:controller (gcn)               Generate & Register a controller
  generate:doc:cheatsheet (gdc)           Generate a printable cheatsheet for Commands
* generate:doc:dash (gdd)                 Generate the DrupalConsole.docset package for Dash
* generate:doc:data (gdda)                Generate documentations for Commands.
* generate:doc:gitbook (gdg)              Generate documentations for Commands
* generate:entity:bundle (geb)            Generate a new content type (node / entity bundle)
* generate:entity:config (gecg)           Generate a new config entity
* generate:entity:content (gect)          Generate a new content entity
* generate:event:subscriber (ges)         Generate an event subscriber
* generate:form:alter (gfa)               Generate an implementation of hook_form_alter() or hook_form_FORM_ID_alter
* generate:form:config (gfc)              commands.generate.form.description
* generate:help                           Generate an implementation of hook_help()
* generate:module (gm,)                   Generate a module.
* generate:module:file                    Generate a .module file
* generate:permissions (gp)               Generate permissions
* generate:plugin:block (gpb)             Generate a plugin block
* generate:plugin:ckeditorbutton          Generate CKEditor button plugin.
* generate:plugin:condition (gpc)         Generate a plugin condition.
* generate:plugin:field (gpf)             Generate field type, widget and formatter plugins.
* generate:plugin:fieldformatter (gpff)   Generate field formatter plugin.
* generate:plugin:fieldtype (gpft)        Generate field type plugin.
* generate:plugin:fieldwidget (gpfw)      Generate field widget plugin.
* generate:plugin:imageeffect (gpie)      Generate image effect plugin.
* generate:plugin:imageformatter (gpif)   Generate image formatter plugin.
* generate:plugin:mail                    Generate a plugin mail
* generate:plugin:migrate:process         Generate a migrate process plugin
* generate:plugin:migrate:source          Generate a migrate source plugin
* generate:plugin:rest:resource (gprr)    Generate plugin rest resource
* generate:plugin:rulesaction (gpra)      Generate a plugin rule action
* generate:plugin:skeleton                Generate an implementation of a skeleton plugin
* generate:plugin:type:annotation (gpta)  Generate a plugin type with annotation discovery
* generate:plugin:type:yaml (gpty)        Generate a plugin type with Yaml discovery
* generate:plugin:views:field (gpvf)      Generate a custom plugin view field.
* generate:post:update                    Generate a post update
* generate:profile                        Generate a profile.
* generate:routesubscriber                Generate a RouteSubscriber
* generate:service (gs,gs)                Generate service
* generate:theme (gt,gt)                  Generate a theme.
* generate:twig:extension                 Generate a Twig extension.
* generate:update                         Generate an implementation of hook_update_N()
```

### Install on a site:
```
cd /path/to/drupal/

composer require drupal/console-generate
```

### Install globally:
```
cd cd ~/.console/extend/

composer require drupal/console-generate

```
* For more information about adding commands globally [Drupal Console Extend](https://github.com/hechoendrupal/drupal-console-extend#drupal-console-extend)