<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 09.11.2017
 * Time: 20:14
 */

class CommentController extends CoreController
{


    public function actionIndex()
    {
    $commentModel=new CommentModel();
    $comments=$commentModel->getAllComments();

    }













}