# Blast UtilsBundle

[![Build Status](https://travis-ci.org/blast-project/UtilsBundle.svg?branch=master)](https://travis-ci.org/blast-project/UtilsBundle)
[![Coverage Status](https://coveralls.io/repos/github/blast-project/UtilsBundle/badge.svg?branch=master)](https://coveralls.io/github/blast-project/UtilsBundle?branch=master)
[![License](https://img.shields.io/github/license/blast-project/UtilsBundle.svg?style=flat-square)](./LICENCE.md)

[![Latest Stable Version](https://poser.pugx.org/blast-project/utils-bundle/v/stable)](https://packagist.org/packages/blast-project/utils-bundle)
[![Latest Unstable Version](https://poser.pugx.org/blast-project/utils-bundle/v/unstable)](https://packagist.org/packages/blast-project/utils-bundle)
[![Total Downloads](https://poser.pugx.org/blast-project/utils-bundle/downloads)](https://packagist.org/packages/blast-project/utils-bundle)

## Features

### Blast Choices

Documentation to be writen

### Blast Hooks

This bundle introduce a hook feature that is really basic hook management.

You can define in your views any hook you want.

#### Declare the hook target location in a view

```html
{# myTemplate.html.twig #}

<div>
    <h1>Here my custom hook</h1>
    {{ blast_hook('my.custom.hook', {'someParameters': _context}) }}
</div>
```

#### Declare your Hook class

This class will manage rendering of the hook content by setting `hook name`, `template` and `view parameters`

```php
<?php

namespace MyBundle\Hook\MyCustomHook;

use Blast\UtilsBundle\Hook\AbstractHook;

class MyCustomHookExample extends AbstractHook
{
    protected $hookName = 'my.custom.hook';
    protected $template = 'MyBundle:Hook:my_custom_hook_example.html.twig';

    public function handleParameters($hookParameters)
    {
        $this->templateParameters = [
            'someViewParameter' => 'a value that will be passed to the twig view'
        ];
    }
}

```

#### Register the hook class as service

```yml
    my_bundle.hook.my_custom_hook_example:
        class: MyBundle\Hook\MyCustomHook\MyCustomHookExample
        tags:
            - { name: blast.hook }
```

*Please don't forget the tag `blast.hook` in order to register your service as a hook*

#### Create your hook template

```html
{# MyBundle:Hook:my_custom_hook_example.html.twig #}

<p>
    Here's my first custom hook,  with a view var : {{ someViewParameter }} !
</p>
```

And voila, you should have this rendered content :

```html
<div>
    <h1>Here my custom hook</h1>
    <p>
        Here's my first custom hook,  with a view var : a value that will be passed to the twig view !
    </p>
</div>
```
