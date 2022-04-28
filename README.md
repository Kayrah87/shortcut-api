# shortcut-api
A library for accessing the Shortcut.com V3 API

## Installation
You can install this library using composer:
```
composer require kayrah87/shortcut-api
```

## Usage
To use this library, you need to create a new instance of the ShortcutApi class:
```
$api = new kayrah87\Shortcut('YOUR_SHORTCUT_TOKEN');
```

You can then utilise this as follows:
### Get
Gets a list of all of the selected objects:
```
$api->get('object-name');
```

Gets a specific object:
```
$api->get('object-name', OBJECT_ID);
```

The list of objects can be found on the [Shortcut.com API documentation](https://developers.shortcut.com/docs/api/v3/).
However, you may be able to guess most of them.
* stories
* epics
* iterations
* etc etc

### Create
Creates a new object:
```
$api->create('object-name', [
    // object fields
    ]);
```

Again, the specific object fields can be found on the [Shortcut.com API documentation](https://developers.shortcut.com/docs/api/v3/).
### Update
Updates an existing object:
```
$api->update('object-name', OBJECT_ID, [
    // object fields
    ]);
```

### Delete
Deletes an existing object:
```
$api->delete('object-name', OBJECT_ID);
```

## License
This library is licensed under the MIT license. Please see the [LICENSE](LICENSE.md) file for more information.
Feel free to use this library in your own projects or to fork it. Thanks!

## Contributing
This library is open source. You can contribute by opening a pull request on [Github](https://github.com/Kayrah87/shortcut-api/pulls).

## Bugs
Please report any bugs or issues to [Github](https://github.com/Kayrah87/shortcut-api/issues).
 


