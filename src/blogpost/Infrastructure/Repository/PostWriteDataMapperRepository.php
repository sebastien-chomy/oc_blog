<?php
/**
 * This file is part of oc_blog project
 *
 * @author: Sébastien CHOMY <sebastien.chomy@gmail.com>
 * @since 2017/12
 */

namespace Blogpost\Infrastructure\Repository;

use Blogpost\Domain\Model\Post;
use Blogpost\Domain\Repository\PostWriteRepositoryInterface;
use Blogpost\Infrastructure\Repository\TableGateway\PostTableGateway;
use Lib\Db\AbstractRepository;

/**
 * Class PostWriteDataMapperRepository
 * @package Blogpost\Infrastructure\Repository
 */
class PostWriteDataMapperRepository extends AbstractRepository implements PostWriteRepositoryInterface

{
    /** *******************************
     *  PROPERTIES
     */

    /** @var string  */
    protected $gatewayName = PostTableGateway::class;

    /** *******************************
     *  METHODS
     */

    /**
     * Persist Header
     *
     * @param Post $post
     *
     * @throws \Exception
     */
    public function add(Post $post): void
    {
        $data['postID'] = $post->getPostID()->getValue();
        $data['bloggerID'] = $post->getBloggerID()->getValue();
        $data['create_at'] = $post->getCreateAt()->format('Y-m-d H:i:s');
        $data['update_at'] = $post->getUpdateAt()->format('Y-m-d H:i:s');

        if ($post->getIdPost() === null) {
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, $post->getIdPost());
        }
    }
}