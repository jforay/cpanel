<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'destinationboatclubsnc@gmail.com',
    'to' => 'destinationboatclubsnc@gmail.com',
    'toCopy' => 'john@intergraphic.com',
    'toHiddenCopy' => 'happy@destinationboatclubscarolinas.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'street' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Street',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Street\' is required.'
    )
    ),
    'city' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'City',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'City\' is required.'
    )
    ),
    'State' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'State',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'State\' is required.'
    )
    ),
    'city' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Zip',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Zip\' is required.'
    )
    ),
    'phone' => array(
    'order' => 7,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'Experience' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'Describe Any Boating Experience you may have',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Describe Any Boating Experience you may have\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('6Lcaa5gpAAAAAEMpEFmWC4wLoE5L7nTYjTGYFtwh ');
    $processor->process($form);

    ?>