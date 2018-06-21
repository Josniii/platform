<?php declare(strict_types=1);

namespace Shopware\Core\System\Snippet;

use Shopware\Core\System\Language\LanguageDefinition;
use Shopware\Core\Framework\ORM\EntityDefinition;
use Shopware\Core\Framework\ORM\EntityExtensionInterface;
use Shopware\Core\Framework\ORM\Field\DateField;
use Shopware\Core\Framework\ORM\Field\FkField;
use Shopware\Core\Framework\ORM\Field\IdField;
use Shopware\Core\Framework\ORM\Field\LongTextField;
use Shopware\Core\Framework\ORM\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\ORM\Field\StringField;
use Shopware\Core\Framework\ORM\Field\TenantIdField;
use Shopware\Core\Framework\ORM\FieldCollection;
use Shopware\Core\Framework\ORM\Write\Flag\PrimaryKey;
use Shopware\Core\Framework\ORM\Write\Flag\Required;
use Shopware\Core\System\Snippet\Collection\SnippetBasicCollection;
use Shopware\Core\System\Snippet\Collection\SnippetDetailCollection;
use Shopware\Core\System\Snippet\Event\SnippetDeletedEvent;
use Shopware\Core\System\Snippet\Event\SnippetWrittenEvent;
use Shopware\Core\System\Snippet\Struct\SnippetBasicStruct;
use Shopware\Core\System\Snippet\Struct\SnippetDetailStruct;

class SnippetDefinition extends EntityDefinition
{
    /**
     * @var FieldCollection
     */
    protected static $primaryKeys;

    /**
     * @var FieldCollection
     */
    protected static $fields;

    /**
     * @var EntityExtensionInterface[]
     */
    protected static $extensions = [];

    public static function getEntityName(): string
    {
        return 'snippet';
    }

    public static function getFields(): FieldCollection
    {
        if (self::$fields) {
            return self::$fields;
        }

        self::$fields = new FieldCollection([
            new TenantIdField(),
            (new IdField('id', 'id'))->setFlags(new PrimaryKey(), new Required()),
            (new FkField('language_id', 'languageId', LanguageDefinition::class))->setFlags(new PrimaryKey(), new Required()),
            (new StringField('translation_key', 'translationKey'))->setFlags(new PrimaryKey(), new Required()),
            (new LongTextField('value', 'value'))->setFlags(new Required()),
            new DateField('created_at', 'createdAt'),
            new DateField('updated_at', 'updatedAt'),
            new ManyToOneAssociationField('language', 'languageId', LanguageDefinition::class, true),
        ]);

        foreach (self::$extensions as $extension) {
            $extension->extendFields(self::$fields);
        }

        return self::$fields;
    }

    public static function getRepositoryClass(): string
    {
        return SnippetRepository::class;
    }

    public static function getBasicCollectionClass(): string
    {
        return SnippetBasicCollection::class;
    }

    public static function getDeletedEventClass(): string
    {
        return SnippetDeletedEvent::class;
    }

    public static function getWrittenEventClass(): string
    {
        return SnippetWrittenEvent::class;
    }

    public static function getBasicStructClass(): string
    {
        return SnippetBasicStruct::class;
    }

    public static function getTranslationDefinitionClass(): ?string
    {
        return null;
    }

    public static function getDetailStructClass(): string
    {
        return SnippetDetailStruct::class;
    }

    public static function getDetailCollectionClass(): string
    {
        return SnippetDetailCollection::class;
    }
}
