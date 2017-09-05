<?php

/*
 * This file is part of the Blast Project package.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blast\UtilsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blast\UtilsBundle\Entity\CustomFilter;

class CustomFiltersController extends Controller
{
    public function saveFilterAction(Request $request)
    {
        $filterName = $request->request->get('filterName');
        $routeName = $request->request->get('routeName');
        $routeParameters = json_decode($request->request->get('routeParameters'));
        $filterParameters = json_decode($request->request->get('filterParameters'));
        // @TODO: Manage user property on CustomFilter
        // $user = $this->getUser();

        if (!$filterName) {
            $this->addFlash('error', $this->container->get('translator')->trans('Please define a name for your filter', [], 'messages'));
        } else {
            $existingCustomFilter = $this->getDoctrine()->getRepository('BlastUtilsBundle:CustomFilter')->findOneBy([
                'routeName' => $routeName,
                'name'      => $filterName,
                // 'user'      => $user
            ]);

            if ($existingCustomFilter) {
                $this->addFlash('error', $this->container->get('translator')->trans('Custom filter with this name already exists', [], 'messages'));
            } else {
                $newFilter = new CustomFilter();
                $newFilter
                    ->setName($filterName)
                    ->setRouteName($routeName)
                    ->setRouteParameters(json_encode($routeParameters))
                    ->setFilterParameters(json_encode($filterParameters))
                ;

                $this->getDoctrine()->getManager()->persist($newFilter);
                $this->getDoctrine()->getManager()->flush($newFilter);

                $this->addFlash('success', $this->container->get('translator')->trans('Custom filter successfully saved', [], 'messages'));
            }
        }

        return new RedirectResponse($request->headers->get('referer'));
    }
}
