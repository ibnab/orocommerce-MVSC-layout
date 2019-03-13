<?php

namespace Ibnab\Bundle\TwigLayoutBundle\Controller\Frontend;

Use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;


class DefaultController extends Controller {


    /**
     * @AclAncestor("twiglayout_default_index")
     * @Route("/twiglayout/default/index", name="twiglayout_default_index")
     * @Layout()
     */
    public function indexAction() {
        
        return [];

    }
}
