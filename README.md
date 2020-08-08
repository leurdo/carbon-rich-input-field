# Taxonomy Carbon Field

Carbon Fields extension, adding "taxonomy" field type. This is select with ajax load and creation of new term.
Now multiselect is also supported (see Usage).

### Requirements

* [Carbon Fields 3](https://github.com/htmlburger/carbon-fields)


## Installation

Add the following to composer.json:

```
"repositories": [
   {
      "type": "vcs",
      "url": "https://github.com/leurdo/carbon-taxonomy-field.git"
   }
],
"require": {
  "php": ">=5.3.2",
  "htmlburger/carbon-fields": "^3.0.0",
  "leurdo/carbon-field-taxonomy": "dev-master",
  "composer/installers": "^1.3.0"
}
```

## Usage

```
Field::make( 'taxonomy', 'field_name', 'Field Label' )
    ->set_taxonomy( 'mytax' )
    ->set_placeholder( 'Select...' )
    ->set_create( 'Create' )
    ->set_loading( 'Loading...' )
    ->set_multiple( true )
```


