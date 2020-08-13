# Taxonomy Carbon Field

Carbon Fields extension, adding "rich_input" field type. This is ordinary text input, but with buttons allowing inserting special Unicode characters (buttons list is set with field class methods, see Usage). Buttons will be shown when input gets focus, and they will be hidden when input looses focus. 

### Requirements

* [Carbon Fields 3](https://github.com/htmlburger/carbon-fields)


## Installation

Add the following to composer.json:

```
"repositories": [
   {
      "type": "vcs",
      "url": "https://github.com/leurdo/carbon-rich-input-field.git"
   }
],
"require": {
  "php": ">=5.3.2",
  "htmlburger/carbon-fields": "^3.0.0",
  "leurdo/carbon-field-rich-input": "dev-master",
  "composer/installers": "^1.3.0"
}
```

## Usage

```
Field::make( 'rich_input', 'field_name', 'Field Label' )
    ->set_buttons( ['♠', '♥', '♦', '♣'] )
```


