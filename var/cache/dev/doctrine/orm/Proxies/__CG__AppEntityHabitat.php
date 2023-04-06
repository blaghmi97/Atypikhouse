<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Habitat extends \App\Entity\Habitat implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'nombreCouchage', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'codepostale', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'datePub', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'photos', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'reservations'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'nombreCouchage', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'codepostale', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'datePub', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'photos', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Habitat' . "\0" . 'reservations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Habitat $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreCouchage(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreCouchage', []);

        return parent::getNombreCouchage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface(int $surface): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', [$surface]);

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', []);

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreCouchage(int $nombreCouchage): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreCouchage', [$nombreCouchage]);

        return parent::setNombreCouchage($nombreCouchage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodepostale(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodepostale', []);

        return parent::getCodepostale();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodepostale(string $codepostale): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodepostale', [$codepostale]);

        return parent::setCodepostale($codepostale);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(string $pays): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePub(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePub', []);

        return parent::getDatePub();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePub(?\DateTimeInterface $datePub): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePub', [$datePub]);

        return parent::setDatePub($datePub);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Habitat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\App\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addPhoto(\App\Entity\Photo $photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhoto', [$photo]);

        return parent::addPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhoto(\App\Entity\Photo $photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhoto', [$photo]);

        return parent::removePhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotos', []);

        return parent::getPhotos();
    }

    /**
     * {@inheritDoc}
     */
    public function addMessage(\App\Entity\Message $message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMessage', [$message]);

        return parent::addMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMessage(\App\Entity\Message $message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMessage', [$message]);

        return parent::removeMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessages', []);

        return parent::getMessages();
    }

}
