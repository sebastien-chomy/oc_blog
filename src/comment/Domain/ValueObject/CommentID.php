<?php
/**
 * This file is part of oc_blog project
 *
 * @author: Sébastien CHOMY <sebastien.chomy@gmail.com>
 * @since 2017/12
 */

namespace Comment\Domain\ValueObject;

use Ramsey\Uuid\Uuid;

/**
 * Class CommentID
 * @package Comment\Domain\ValueObject
 */
class CommentID
{
    /**
     * @var string $Uuid
     */
    protected $Uuid;

    /**
     * CommentID constructor.
     *
     * @param string $Uuid
     *
     * @return CommentID
     */
    public function __construct(string $Uuid = null)
    {
        if ($Uuid === null) {
            $Uuid = Uuid::uuid4()->toString();
        }
        $this->Uuid = $Uuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->Uuid;
    }
}
