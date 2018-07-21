<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventController extends Controller

{

    /**

     * @Route("/", name="event_list")

     */

    public function listAction(){

        $event = $this->getDoctrine()->getRepository('AppBundle:Event')->findAll();

        // replace this example code with whatever you need

        return $this->render('event/index.html.twig', array('event'=>$event));

    }

     /**

     * @Route("/event/create", name="event_create")

     */

    public function createAction(Request $request){

        $event = new Event;

        $form = $this->createFormBuilder($event)

        ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'placeholder'=>'EventName', 'style'=>'margin-bottom:15px')))
        ->add('title', TextType::class, array('attr' => array('class'=> 'form-control', 'placeholder'=>'EventTitle', 'style'=>'margin-bottom:15px')))
        ->add('startDate', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('endDate', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'placeholder'=>'max 255 Characters','style'=>'margin-bottom:15px')))
        ->add('image', UrlType::class, array('attr' => array('class'=> 'form-control','placeholder'=>'http://', 'style'=>'margin-bottom:15px')))
        ->add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'placeholder'=>'Pax', 'style'=>'margin-bottom:15px')))
        ->add('email', EmailType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('tel', TelType::class, array('attr' => array('class'=> 'form-control','placeholder'=>'telefon number', 'style'=>'margin-bottom:15px')))
        ->add('locationName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('address', TelType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('nr', TextType::class, array('attr' => array('class'=> 'form-control','placeholder'=>'address number', 'style'=>'margin-bottom:15px')))
        ->add('postcode', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('country', CountryType::class, array('attr' => array('class'=> 'form-control','placeholder'=>'choose...', 'style'=>'margin-bottom:15px')))
        ->add('eventUrl', UrlType::class, array('attr' => array('class'=> 'form-control', 'placeholder'=>'http://', 'style'=>'margin-bottom:15px')))
        ->add('type', ChoiceType::class, array('choices'=>array('Concert'=>'Concert', 'Movie'=>'Movie', 'Theatre'=>'Theatre', 'Show'=>'Show'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn btn-primary', 'style'=>'margin:15px 0')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            //fetching data

            $name = $form['name']->getData();
            $title = $form['title']->getData();
            $startDate = $form['startDate']->getData();
            $endDate = $form['endDate']->getData();
            $description = $form['description']->getData();
            $image = $form['image']->getData();
            $cap = $form['capacity']->getData();
            $email = $form['email']->getData();
            $tel = $form['tel']->getData();
            $locName = $form['locationName']->getData();
            $address = $form['address']->getData();
            $nr = $form['nr']->getData();
            $postcode = $form['postcode']->getData();
            $city = $form['city']->getData();
            $country = $form['country']->getData();
            $eventUrl = $form['eventUrl']->getData();
            $type = $form['type']->getData();

            $now = new\DateTime('now');

            $event->setName($name);
            $event->setTitle($title);
            $event->setStartDate($startDate);
            $event->setEndDate($endDate);
            $event->setDescription($description);
            $event->setImage($image);
            $event->setCapacity($cap);
            $event->setEmail($email);
            $event->setTel($tel);
            $event->setLocationName($locName);
            $event->setAddress($address);
            $event->setNr($nr);
            $event->setPostcode($postcode);
            $event->setCity($city);
            $event->setCountry($country);
            $event->setEventUrl($eventUrl);
            $event->setType($type);

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash(

                    'notice',

                    'Event Added'

                    );

            return $this->redirectToRoute('event_list');

        }

        // replace this example code with whatever you need

        return $this->render('event/create.html.twig', array('form' => $form->createView()));

    }

     /**

     * @Route("/event/edit/{id}", name="event_edit")

     */

    public function editAction( $id, Request $request){

    $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);

            $now = new\DateTime('now');

            $event->setName($event->getName());
            $event->setTitle($event->getTitle());
            $event->setStartDate($event->getStartDate());
            $event->setEndDate($event->getEndDate());
            $event->setDescription($event->getDescription());
            $event->setImage($event->getImage());
            $event->setCapacity($event->getCapacity());
            $event->setEmail($event->getEmail());
            $event->setTel($event->getTel());
            $event->setLocationName($event->getLocationName());
            $event->setAddress($event->getAddress());
            $event->setNr($event->getNr());
            $event->setPostcode($event->getPostcode());
            $event->setCity($event->getCity());
            $event->setCountry($event->getCountry());
            $event->setEventUrl($event->getEventUrl());
            $event->setType($event->getType());

        $form = $this->createFormBuilder($event)
        ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('title', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('startDate', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('endDate', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('image', UrlType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('email', EmailType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('tel', TelType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('locationName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('address', TelType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('nr', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('postcode', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('country', CountryType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('eventUrl', UrlType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('type', ChoiceType::class, array('choices'=>array('Concert'=>'Concert', 'Movie'=>'Movie', 'Theatre'=>'Theatre', 'Show'=>'Show'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn btn-primary', 'style'=>'margin:15px 0')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

          //fetching data

          $name = $form['name']->getData();
          $title = $form['title']->getData();
          $startDate = $form['startDate']->getData();
          $endDate = $form['endDate']->getData();
          $description = $form['description']->getData();
          $image = $form['image']->getData();
          $cap = $form['capacity']->getData();
          $email = $form['email']->getData();
          $tel = $form['tel']->getData();
          $locName = $form['locationName']->getData();
          $address = $form['address']->getData();
          $nr = $form['nr']->getData();
          $postcode = $form['postcode']->getData();
          $city = $form['city']->getData();
          $country = $form['country']->getData();
          $eventUrl = $form['eventUrl']->getData();
          $type = $form['type']->getData();

          $now = new\DateTime('now');

          $event->setName($name);
          $event->setTitle($title);
          $event->setStartDate($startDate);
          $event->setEndDate($endDate);
          $event->setDescription($description);
          $event->setImage($image);
          $event->setCapacity($cap);
          $event->setEmail($email);
          $event->setTel($tel);
          $event->setLocationName($locName);
          $event->setAddress($address);
          $event->setNr($nr);
          $event->setPostcode($postcode);
          $event->setCity($city);
          $event->setCountry($country);
          $event->setEventUrl($eventUrl);
          $event->setType($type);

          $em = $this->getDoctrine()->getManager();
          $em->persist($event);
          $em->flush();
          $this->addFlash(
            	'notice',
              'Event Updated'
          );
          return $this->redirectToRoute('event_list');
        }
        return $this->render('event/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
    }

     /**

     * @Route("/event/details/{id}", name="event_details")

     */


   public function detailsAction($id){

   $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);

   return $this->render('event/details.html.twig', array('event' => $event));

       }


    /**

     * @Route("/event/delete/{id}", name="event_delete")

     */

    public function deleteAction($id){

                 $em = $this->getDoctrine()->getManager();

            $event = $em->getRepository('AppBundle:Event')->find($id);

            $em->remove($event);

             $em->flush();

            $this->addFlash(

                    'notice',

                    'Event Removed'

                    );

             return $this->redirectToRoute('event_list');

    }

}
