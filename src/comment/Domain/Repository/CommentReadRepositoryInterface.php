<?php
/**
 * This file is part of oc_blog project
 *
 * @author: Sébastien CHOMY <sebastien.chomy@gmail.com>
 * @since 2017/12
 */

namespace Comment\Domain\Repository;

use Comment\Domain\Model\Comment;
use Comment\Domain\ValueObject\CommentID;
use Comment\Domain\ValueObject\ThreadID;

/**
 * Interface CommentReadRepositoryInterface
 * @package Comment\Domain\Repository
 */
interface CommentReadRepositoryInterface
{
    /**
     * Find all comments by ThreadID value object
     *
     * @param ThreadID $threadID
     *
     * @return array
     */
    public function findAllByThreadID(ThreadID $threadID): array;

    /**
     * Find all comments
     *
     * @return array
     */
    public function findAll(): array;

    /**
     * Get a comment by CommentID Value object
     *
     * @param CommentID $commentID
     *
     * @return null|Comment
     */
    public function getByCommentID(CommentID $commentID): ?Comment;
}
