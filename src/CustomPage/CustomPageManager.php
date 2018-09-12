<?php

namespace Railken\LaraOre\CustomPage;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class CustomPageManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = CustomPage::class;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\DeletedAt\DeletedAtAttribute::class,
        Attributes\Html\HtmlAttribute::class,
        Attributes\Url\UrlAttribute::class,
        Attributes\Label\LabelAttribute::class,
        Attributes\Description\DescriptionAttribute::class,
        Attributes\Category\CategoryAttribute::class,
        Attributes\Config\ConfigAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\CustomPageNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.custom-page.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.custom-page.attributes')));

        $classRepository = Config::get('ore.custom-page.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.custom-page.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.custom-page.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.custom-page.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
        parent::__construct($agent);
    }
}
