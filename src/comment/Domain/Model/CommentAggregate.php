<?php
/**
 * This file is part of oc_blog project
 *
 * @author: Sébastien CHOMY <sebastien.chomy@gmail.com>
 * @since 2017/12
 */

namespace Comment\Domain\Model;

use User\Domain\Model\User;

/**
 * Class CommentAggregate
 * @package Comment\Domain\Model
 */
class CommentAggregate
{

    /** @var Comment $comment */
    protected $comment;

    /** @var User $author */
    protected $author;

    /**
     * @return Comment
     */
    public function getComment(): Comment
    {
        return $this->comment;
    }

    /**
     * @param Comment $comment
     *
     * @return CommentAggregate
     */
    public function setComment(Comment $comment): CommentAggregate
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     *
     * @return CommentAggregate
     */
    public function setAuthor(User $author): CommentAggregate
    {
        $this->author = $author;
        return $this;
    }
}
