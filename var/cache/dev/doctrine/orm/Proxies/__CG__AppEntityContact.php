<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contact extends \App\Entity\Contact implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'licencie' => [parent::class, 'licencie', null],
        "\0".parent::class."\0".'mailContacts' => [parent::class, 'mailContacts', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'numeroTel' => [parent::class, 'numeroTel', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'licencie' => [parent::class, 'licencie', null],
        'mailContacts' => [parent::class, 'mailContacts', null],
        'nom' => [parent::class, 'nom', null],
        'numeroTel' => [parent::class, 'numeroTel', null],
        'prenom' => [parent::class, 'prenom', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
