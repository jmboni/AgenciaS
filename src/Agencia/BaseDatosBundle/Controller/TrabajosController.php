<?php

namespace Agencia\BaseDatosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agencia\BaseDatosBundle\Entity\Trabajos;
use Agencia\BaseDatosBundle\Form\TrabajosType;

/**
 * Trabajos controller.
 *
 */
class TrabajosController extends Controller
{

    /**
     * Lists all Trabajos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('AgenciaBaseDatosBundle:Trabajos')->findAll();

        $query = $em->createQuery(
            'SELECT j FROM AgenciaBaseDatosBundle:Trabajos j WHERE j.creado > :date'
        )->setParameter('date', date('Y-m-d H:i:s', time() - 86400 * 30));
        $entities = $query->getResult();

        return $this->render('AgenciaBaseDatosBundle:Trabajos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Trabajos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Trabajos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agencia_trabajos_show', array('id' => $entity->getId())));
        }

        return $this->render('AgenciaBaseDatosBundle:Trabajos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Trabajos entity.
     *
     * @param Trabajos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trabajos $entity)
    {
        $form = $this->createForm(new TrabajosType(), $entity, array(
            'action' => $this->generateUrl('agencia_trabajos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Trabajos entity.
     *
     */
    public function newAction()
    {
        $entity = new Trabajos();
        $form   = $this->createCreateForm($entity);

        return $this->render('AgenciaBaseDatosBundle:Trabajos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Trabajos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenciaBaseDatosBundle:Trabajos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenciaBaseDatosBundle:Trabajos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Trabajos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenciaBaseDatosBundle:Trabajos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenciaBaseDatosBundle:Trabajos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Trabajos entity.
    *
    * @param Trabajos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Trabajos $entity)
    {
        $form = $this->createForm(new TrabajosType(), $entity, array(
            'action' => $this->generateUrl('agencia_trabajos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Trabajos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenciaBaseDatosBundle:Trabajos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agencia_trabajos_edit', array('id' => $id)));
        }

        return $this->render('AgenciaBaseDatosBundle:Trabajos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Trabajos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgenciaBaseDatosBundle:Trabajos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Trabajos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agencia_trabajos'));
    }

    /**
     * Creates a form to delete a Trabajos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agencia_trabajos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
