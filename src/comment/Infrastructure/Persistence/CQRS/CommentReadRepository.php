<?php
/**
 * This file is part of oc_blog project
 *
 * @author: Sébastien CHOMY <sebastien.chomy@gmail.com>
 * @since 2017/12
 */

namespace Comment\Infrastructure\Persistence\CQRS;

use Comment\Domain\Model\Comment;
use Comment\Domain\Repository\CommentReadRepositoryInterface;
use Comment\Domain\ValueObject\CommentID;
use Comment\Domain\ValueObject\ThreadID;

/**
 * Class CommentReadRepository
 * @package Comment\Infrastructure\Persistence\CQRS
 */
class CommentReadRepository implements CommentReadRepositoryInterface
{

    /** @var CommentReadRepositoryInterface */
    protected $repository;

    /**
     * CommentReadRepository constructor.
     *
     * @param CommentReadRepositoryInterface $repository
     */
    public function __construct(CommentReadRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Find all comments by ThreadID value object
     *
     * @param ThreadID $threadID
     *
     * @return array
     */
    public function findAllByThreadID(ThreadID $threadID): array
    {
        return $this->repository->findAllByThreadID($threadID);
    }

    /**
     * Get a comment by CommentID Value object
     *
     * @param CommentID $commentID
     *
     * @return null|Comment
     */
    public function getByCommentID(CommentID $commentID): ?Comment
    {
        return $this->repository->getByCommentID($commentID);
    }

    /**
     * Find all comments
     *
     * @return array
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }
}
