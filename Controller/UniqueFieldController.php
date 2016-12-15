<?php
namespace Blast\UtilsBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UniqueFieldController extends Controller
{
    /**
     * 
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function checkAvailabilityAction(Request $request)
    {   
        $repo = $this->getDoctrine()->getManager()->getRepository($request->get('className'));
        
        $result = $repo->findBy([$request->get('fieldName') => $request->get('fieldValue')]);
        
        return new JsonResponse(!count($result) > 0, 200);
    }
}