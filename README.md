
# Zend Framwork 2 FlashMessenger 

![alt tag](https://raw.githubusercontent.com/jenzri-nizar/Zf2-FlashMessenger/master/asset/screen-shot.png)




Le module doit être enregistré dans **config/application.config.php**

```javascript
'modules' => array(
    '...',
    'FlashMessenger'
),
```

## Installer

dans fichier layout.phtml il faut ajouter 
```php
 <?php $this->FlashMsg(); ?>
 <?php echo $this->inlineScript() ?>
```
## **Utilisation**

Utilisez-le dans un contrôleur. <br/>
Ajouter des messages dans votre contrôleur et les messages seront affichés

```php
<?php
$this->flashMessenger()->addSuccessMessage('Un message de réussite');
$this->flashMessenger()->addErrorMessage('Erreur avec le système.');
$this->flashMessenger()->addInfoMessage('Info message');
$this->flashMessenger()->addWarningMessage("Message d'avertissement.");
```