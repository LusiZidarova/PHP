<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use BlogBundle\Entity\Comment;
use BlogBundle\Form\CommentType;
use BlogBundle\Service\Articles\ArticleServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends Controller
{
    /**
     * @var ArticleServiceInterface
     */
    private $articleService;

    /**
     * CommentController constructor.
     * @param ArticleServiceInterface $articleService
     */
    public function __construct(ArticleServiceInterface $articleService)
    {
        $this->articleService = $articleService;
    }


    /**
     * @Route("/message/create/{id}",name="comment_create",methods={"POST"})
     * @param Request $request
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request,$id)
    {
        $article = $this->articleService->getOne($id);

       $comment = new Comment();

       $form = $this->createForm(CommentType::class,$comment);

       $form->handleRequest($request);

           if($form->isSubmitted()){
               $comment
                   ->setAuthor($this->getUser())
                   ->setArticle($article);

               $em = $this->getDoctrine()->getManager();
                $em ->persist($comment);
                $em->flush();

                return $this->redirectToRoute("article_view",
                    ['id'=>$article->getId()]);
           }

        return $this->render('articles/article.html.twig',['article'=>$article]);
     }
}
