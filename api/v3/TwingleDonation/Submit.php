<?php
/*------------------------------------------------------------+
| SYSTOPIA Twingle Integration                                |
| Copyright (C) 2018 SYSTOPIA                                 |
| Author: J. Schuppe (schuppe@systopia.de)                    |
+-------------------------------------------------------------+
| This program is released as free software under the         |
| Affero GPL license. You can redistribute it and/or          |
| modify it under the terms of this license which you         |
| can read by viewing the included agpl.txt or online         |
| at www.gnu.org/licenses/agpl.html. Removal of this          |
| copyright header is strictly prohibited without             |
| written permission from the original author(s).             |
+-------------------------------------------------------------*/

use CRM_Twingle_ExtensionUtil as E;

/**
 * TwingleDonation.Submit API specification
 * This is used for documentation and validation.
 *
 * @param array $params
 *   Description of fields supported by this API call.
 *
 * @return void
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_twingle_donation_Submit_spec(&$params) {
  $params['project_id'] = array(
    'name' => 'project_id',
    'title' => E::ts('Project ID'),
    'type' => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description' => E::ts('The Twingle project ID.'),
  );
  $params['trx_id'] = array(
    'name' => 'trx_id',
    'title' => E::ts('Transaction ID'),
    'type' => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description' => E::ts('The unique transaction ID of the donation'),
  );
  $params['confirmed_at'] = array(
    'name'         => 'confirmed_at',
    'title'        => E::ts('Confirmed at'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description'  => E::ts('The date when the donation was issued, format: YmdHis.'),
  );
  $params['purpose'] = array(
    'name'         => 'purpose',
    'title'        => E::ts('Purpose'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The purpose of the donation.'),
  );
  $params['amount'] = array(
    'name'         => 'amount',
    'title'        => E::ts('Amount'),
    'type'         => CRM_Utils_Type::T_INT,
    'api.required' => 1,
    'description'  => E::ts('The donation amount in minor currency unit.'),
  );
  $params['currency'] = array(
    'name'         => 'currency',
    'title'        => E::ts('Currency'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description'  => E::ts('The ISO-4217 currency code of the donation.'),
  );
  $params['newsletter'] = array(
    'name'         => 'newsletter',
    'title'        => E::ts('Newsletter'),
    'type'         => CRM_Utils_Type::T_BOOLEAN,
    'api.required' => 0,
    'description'  => E::ts('Whether to subscribe the contact to the newsletter group defined in the profile.'),
  );
  $params['postinfo'] = array(
    'name'         => 'postinfo',
    'title'        => E::ts('Postal mailing'),
    'type'         => CRM_Utils_Type::T_BOOLEAN,
    'api.required' => 0,
    'description'  => E::ts('Whether to subscribe the contact to the postal mailing group defined in the profile.'),
  );
  $params['donation_receipt'] = array(
    'name'         => 'donation_receipt',
    'title'        => E::ts('Donation receipt'),
    'type'         => CRM_Utils_Type::T_BOOLEAN,
    'api.required' => 0,
    'description'  => E::ts('Whether the contact requested a donation receipt.'),
  );
  $params['payment_method'] = array(
    'name'         => 'payment_method',
    'title'        => E::ts('Payment method'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description'  => E::ts('The Twingle payment method used for the donation.'),
  );
  $params['donation_rhythm'] = array(
    'name'         => 'donation_rhythm',
    'title'        => E::ts('Donation rhythm'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
    'description'  => E::ts('The interval which the donation is recurring in.'),
  );
  $params['debit_iban'] = array(
    'name'         => 'debit_iban',
    'title'        => E::ts('SEPA IBAN'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The IBAN for SEPA Direct Debit payments, conforming with ISO 13616-1:2007.'),
  );
  $params['debit_bic'] = array(
    'name'         => 'debit_bic',
    'title'        => E::ts('SEPA BIC'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The BIC for SEPA Direct Debit payments, conforming with ISO 9362.'),
  );
  $params['debit_mandate_reference'] = array(
    'name'         => 'debit_mandate_reference',
    'title'        => E::ts('SEPA Direct Debit Mandate reference'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The mandate reference for SEPA Direct Debit payments.'),
  );
  $params['debit_account_holder'] = array(
    'name'         => 'debit_account_holder',
    'title'        => E::ts('SEPA Direct Debit Account holder'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The account holder for SEPA Direct Debit payments.'),
  );
  $params['is_anonymous'] = array(
    'name'         => 'is_anonymous',
    'title'        => E::ts('Anonymous donation'),
    'type'         => CRM_Utils_Type::T_BOOLEAN,
    'api.required' => 0,
    'api.default'  => 0,
    'description'  => E::ts('Whether the donation is submitted anonymously.'),
  );
  $params['user_gender'] = array(
    'name'         => 'user_gender',
    'title'        => E::ts('Gender'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The gender of the contact.'),
  );
  $params['user_birthdate'] = array(
    'name'         => 'user_birthdate',
    'title'        => E::ts('Date of birth'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The date of birth of the contact, format: Ymd.'),
  );
  $params['user_title'] = array(
    'name'         => 'user_title',
    'title'        => E::ts('Formal title'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The formal title of the contact.'),
  );
  $params['user_email'] = array(
    'name'         => 'user_email',
    'title'        => E::ts('Email address'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The e-mail address of the contact.'),
  );
  $params['user_firstname'] = array(
    'name'         => 'user_firstname',
    'title'        => E::ts('First name'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The first name of the contact.'),
  );
  $params['user_lastname'] = array(
    'name'         => 'user_lastname',
    'title'        => E::ts('Last name'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The last name of the contact.'),
  );
  $params['user_street'] = array(
    'name'         => 'user_street',
    'title'        => E::ts('Street address'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The street address of the contact.'),
  );
  $params['user_postal_code'] = array(
    'name'         => 'user_postal_code',
    'title'        => E::ts('Postal code'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The postal code of the contact.'),
  );
  $params['user_city'] = array(
    'name'         => 'user_city',
    'title'        => E::ts('City'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The city of the contact.'),
  );
  $params['user_country'] = array(
    'name'         => 'user_country',
    'title'        => E::ts('Country'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The country of the contact.'),
  );
  $params['user_telephone'] = array(
    'name'         => 'user_telephone',
    'title'        => E::ts('Telephone'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The telephone number of the contact.'),
  );
  $params['user_company'] = array(
    'name'         => 'user_company',
    'title'        => E::ts('Company'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('The company of the contact.'),
  );
  $params['user_extrafield'] = array(
    'name'         => 'user_extrafield',
    'title'        => E::ts('User extra field'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('Additional information of the contact.'),
  );
  $params['campaign_id'] = array(
    'name' => 'campaign_id',
    'title' => E::ts('Campaign ID'),
    'type' => CRM_Utils_Type::T_INT,
    'api.required' => 0,
    'description' => E::ts('The CiviCRM ID of a campaign to assign the contribution.'),
  );
  $params['custom_fields'] = array(
    'name'         => 'custom_fields',
    'title'        => E::ts('Custom fields'),
    'type'         => CRM_Utils_Type::T_STRING,
    'api.required' => 0,
    'description'  => E::ts('Additional information for either the contact or the (recurring) contribution.'),
  );
}

/**
 * TwingleDonation.Submit API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 */
function civicrm_api3_twingle_donation_Submit($params) {
  // Log call if debugging is enabled within civicrm.settings.php.
  if (defined('TWINGLE_API_LOGGING') && TWINGLE_API_LOGGING) {
    CRM_Core_Error::debug_log_message('TwingleDonation.Submit: ' . json_encode($params, JSON_PRETTY_PRINT));
  }

  try {
    // Copy submitted parameters.
    $original_params = $params;

    // Prepare results array.
    $result_values = array();

    // Get the profile defined for the given form ID, or the default profile
    // if none matches.
    $profile = CRM_Twingle_Profile::getProfileForProject($params['project_id']);

    // Validate submitted parameters
    CRM_Twingle_Submission::validateSubmission($params, $profile);

    // Do not process an already existing contribution with the given
    // transaction ID.
    $existing_contribution = civicrm_api3('Contribution', 'get', array(
      'trxn_id' => $profile->getTransactionID($params['trx_id'])
    ));
    $existing_contribution_recur = civicrm_api3('ContributionRecur', 'get', array(
      'trxn_id' => $profile->getTransactionID($params['trx_id'])
    ));
    if ($existing_contribution['count'] > 0 || $existing_contribution_recur['count'] > 0) {
      throw new CiviCRM_API3_Exception(
        E::ts('Contribution with the given transaction ID already exists.'),
        'api_error'
      );
    }

    // Extract custom field values using the profile's mapping of Twingle fields
    // to CiviCRM custom fields.
    $custom_fields = array();
    if (!empty($params['custom_fields'])) {
      $custom_field_mapping = $profile->getCustomFieldMapping();

      foreach (json_decode($params['custom_fields']) as $twingle_field => $value) {
        if (isset($custom_field_mapping[$twingle_field])) {
          // Get custom field definition to store values by entity the field
          // extends.
          $custom_field_id = substr($custom_field_mapping[$twingle_field], strlen('custom_'));
          $custom_field = civicrm_api3('CustomField', 'getsingle', array(
            'id' => $custom_field_id,
            // Chain a CustomGroup.getsingle API call.
            'api.CustomGroup.getsingle' => array(),
          ));
          $custom_fields[$custom_field['api.CustomGroup.getsingle']['extends']][$custom_field_mapping[$twingle_field]] = $value;
        }
      }
    }

    // Create contact(s).
    if ($params['is_anonymous']) {
      // Retrieve the ID of the contact to use for anonymous donations defined
      // within the profile
      $contact_id = civicrm_api3('Contact', 'getsingle', array(
        'id' => $profile->getAttribute('anonymous_contact_id'),
      ))['id'];
    }
    else {
      // Prepare parameter mapping for address.
      foreach (array(
                 'user_street' => 'street_address',
                 'user_postal_code' => 'postal_code',
                 'user_city' => 'city',
                 'user_country' => 'country',
               ) as $address_param => $address_component) {
        if (!empty($params[$address_param])) {
          $params[$address_component] = $params[$address_param];
          if ($address_param != $address_component) {
            unset($params[$address_param]);
          }
        }
      }

      // Prepare parameter mapping for organisation.
      if (!empty($params['user_company'])) {
        $params['organization_name'] = $params['user_company'];
        unset($params['user_company']);
      }

      // Remove parameter "id".
      if (!empty($params['id'])) {
        unset($params['id']);
      }

      // Add configured location type to parameters.
      $params['location_type_id'] = (int) $profile->getAttribute('location_type_id');

      // Exclude address for now when retrieving/creating the individual contact
      // as we are checking organisation address first and share it with the
      // individual.
      $submitted_address = array();
      foreach (array(
                 'street_address',
                 'postal_code',
                 'city',
                 'country',
                 'location_type_id',
               ) as $address_component) {
        if (!empty($params[$address_component])) {
          $submitted_address[$address_component] = $params[$address_component];
          unset($params[$address_component]);
        }
      }

      // Get the ID of the contact matching the given contact data, or create a
      // new contact if none exists for the given contact data.
      $contact_data = array();
      foreach (array(
                 'user_firstname' => 'first_name',
                 'user_lastname' => 'last_name',
                 'gender_id' => 'gender_id',
                 'user_birthdate' => 'birth_date',
                 'user_email' => 'email',
                 'user_telephone' => 'phone',
                 'user_title' => 'formal_title',
                 'debit_iban' => 'iban',
               ) as $contact_param => $contact_component) {
        if (!empty($params[$contact_param])) {
          $contact_data[$contact_component] = $params[$contact_param];
        }
      }

      // Get the prefix ID defined within the profile
      if (!empty($params['user_gender'])) {
        $prefix_id = (int) $profile->getAttribute('prefix_' . $params['user_gender']);
        if ($prefix_id) {
          $contact_data['prefix_id'] = $prefix_id;
        }
      }

      // Add custom field values.
      if (!empty($custom_fields['Contact'])) {
        $contact_data += $custom_fields['Contact'];
      }
      if (!empty($custom_fields['Individual'])) {
        $contact_data += $custom_fields['Individual'];
      }

      if (!$contact_id = CRM_Twingle_Submission::getContact(
        'Individual',
        $contact_data,
        $profile
      )) {
        throw new CiviCRM_API3_Exception(
          E::ts('Individual contact could not be found or created.'),
          'api_error'
        );
      }

      // Save user_extrafield as contact note.
      if (!empty($params['user_extrafield'])) {
        civicrm_api3('Note', 'create', array(
          'entity_table' => 'civicrm_contact',
          'entity_id' => $contact_id,
          'note' => $params['user_extrafield'],
        ));
      }

      // Organisation lookup.
      if (!empty($params['organization_name'])) {
        $organisation_data = array(
          'organization_name' => $params['organization_name'],
        );

        // Add custom field values.
        if (!empty($custom_fields['Organization'])) {
          $organisation_data += $custom_fields['Organization'];
        }

        if (!empty($submitted_address)) {
          $organisation_data += $submitted_address;
          // Use configured location type for organisation address.
          $organisation_data['location_type_id'] = (int) $profile->getAttribute('location_type_id_organisation');
        }
        if (!$organisation_id = CRM_Twingle_Submission::getContact(
          'Organization',
          $organisation_data,
          $profile
        )) {
          throw new CiviCRM_API3_Exception(
            E::ts('Organisation contact could not be found or created.'),
            'api_error'
          );
        }
      }
      // Share organisation address with individual contact, using configured
      // location type for organisation address.
      $address_shared = (
        isset($organisation_id)
        && CRM_Twingle_Submission::shareWorkAddress(
          $contact_id,
          $organisation_id,
          (int) $profile->getAttribute('location_type_id_organisation')
        )
      );

      // Address is not shared, use submitted address with
      // configured location type.
      if (!$address_shared && !empty($submitted_address)) {
        // Do not use `Address.create` API action, let XCM decide
        // whether to create an address.
        CRM_Twingle_Submission::getContact(
            'Individual',
            array('id' => $contact_id) + $submitted_address,
            $profile);
      }

      // Create employer relationship between organization and individual.
      if (isset($organisation_id)) {
        CRM_Twingle_Submission::updateEmployerRelation($contact_id, $organisation_id);
      }
    }

    $result_values['contact'] = $contact_id;
    if (isset($organisation_id)) {
      $result_values['organization'] = $organisation_id;
    }

    // If requested, add contact to newsletter groups defined in the profile.
    if (!empty($params['newsletter']) && !empty($groups = $profile->getAttribute('newsletter_groups'))) {
      foreach ($groups as $group_id) {
        civicrm_api3('GroupContact', 'create', array(
          'group_id' => $group_id,
          'contact_id' => $contact_id,
        ));

        $result_values['newsletter'][] = $group_id;
      }
    }

    // If requested, add contact to postinfo groups defined in the profile.
    if (!empty($params['postinfo']) && !empty($groups = $profile->getAttribute('postinfo_groups'))) {
      foreach ($groups as $group_id) {
        civicrm_api3('GroupContact', 'create', array(
          'group_id' => $group_id,
          'contact_id' => $contact_id,
        ));

        $result_values['postinfo'][] = $group_id;
      }
    }

    // If requested, add contact to donation_receipt groups defined in the
    // profile.
    if (!empty($params['donation_receipt']) && !empty($groups = $profile->getAttribute('donation_receipt_groups'))) {
      foreach ($groups as $group_id) {
        civicrm_api3('GroupContact', 'create', array(
          'group_id' => $group_id,
          'contact_id' => $contact_id,
        ));

        $result_values['donation_receipt'][] = $group_id;
      }
    }

    // Create contribution or SEPA mandate. Those attributes are valid for both,
    // single and recurring contributions.
    $contribution_data = array(
      'contact_id' => (isset($organisation_id) ? $organisation_id : $contact_id),
      'currency' => $params['currency'],
      'trxn_id' => $profile->getTransactionID($params['trx_id']),
      'payment_instrument_id' => $params['payment_instrument_id'],
      'amount' => $params['amount'] / 100,
      'total_amount' => $params['amount'] / 100,
    );

    // Add custom field values.
    if (!empty($custom_fields['Contribution'])) {
      $contribution_data += $custom_fields['Contribution'];
    }

    if (!empty($params['purpose'])) {
      $contribution_data['note'] = $params['purpose'];
    }

    if (!empty($params['campaign_id'])) {
      $contribution_data['campaign_id'] = $params['campaign_id'];
    }
    elseif (!empty($campaign = $profile->getAttribute('campaign'))) {
      $contribution_data['campaign_id'] = $campaign;
    }

    if (!empty($contribution_source = $profile->getAttribute('contribution_source'))) {
      $contribution_data['source'] = $contribution_source;
    }

    if (
      CRM_Twingle_Submission::civiSepaEnabled()
      && $contribution_data['payment_instrument_id'] == 'sepa'
    ) {
      // If CiviSEPA is installed and the financial type is a CiviSEPA-one,
      // create SEPA mandate (and recurring contribution, using "createfull" API
      // action).
      foreach (array(
        'debit_iban',
        'debit_bic',
               ) as $sepa_attribute) {
        if (empty($params[$sepa_attribute])) {
          throw new CiviCRM_API3_Exception(
            E::ts('Missing attribute %1 for SEPA mandate', array(
              1 => $sepa_attribute,
            )),
            'invalid_format'
          );
        }
      }

      $creditor_id = $profile->getAttribute('sepa_creditor_id');

      // Compose mandate data from contribution data, ...
      $mandate_data =
        $contribution_data
        // ... CiviSEPA mandate attributes, ...
        + array(
          'type' => ($params['donation_rhythm'] == 'one_time' ? 'OOFF' : 'RCUR'),
          'iban' => $params['debit_iban'],
          'bic' => $params['debit_bic'],
          'reference' => $params['debit_mandate_reference'],
          'date' => $params['confirmed_at'], // Signature date
          'start_date' => $params['confirmed_at'], // Earliest collection date.
          'creditor_id' => $creditor_id,
        )
      // ... and frequency unit and interval from a static mapping.
      + CRM_Twingle_Submission::getFrequencyMapping($params['donation_rhythm']);
      // Add custom field values.
      if (!empty($custom_fields['ContributionRecur'])) {
        $mandate_data += $custom_fields['ContributionRecur'];
      }

      // Add cycle day for recurring contributions.
      if ($params['donation_rhythm'] != 'one_time') {
        $mandate_data['cycle_day'] = CRM_Twingle_Submission::getSEPACycleDay($params['confirmed_at'], $creditor_id);
        $mandate_data['financial_type_id'] = $profile->getAttribute('financial_type_id_recur');
      }
      else {
        $mandate_data['financial_type_id'] = $profile->getAttribute('financial_type_id');
      }

      // Let CiviSEPA set the correct payment instrument depending on the
      // mandate type.
      unset($mandate_data['payment_instrument_id']);

      // Create the mandate.
      $mandate = civicrm_api3('SepaMandate', 'createfull', $mandate_data);

      $result_values['sepa_mandate'] = $mandate['values'];
    }
    else {
      // Create (recurring) contribution.
      if ($params['donation_rhythm'] != 'one_time') {
        // Create recurring contribution first.
        $contribution_recur_data =
          $contribution_data
          + array(
            'contribution_status_id' => 'Pending',
            'start_date' => $params['confirmed_at'],
            'financial_type_id' => $profile->getAttribute('financial_type_id_recur'),
          )
          + CRM_Twingle_Submission::getFrequencyMapping($params['donation_rhythm']);

        // Add custom field values.
        if (!empty($custom_fields['ContributionRecur'])) {
          $contribution_recur_data += $custom_fields['ContributionRecur'];
          $contribution_data += $custom_fields['ContributionRecur'];
        }

        $contribution_recur = civicrm_api3('contributionRecur', 'create', $contribution_recur_data);
        if ($contribution_recur['is_error']) {
          throw new CiviCRM_API3_Exception(
            E::ts('Could not create recurring contribution.'),
            'api_error'
          );
        }
        $contribution_data['contribution_recur_id'] = $contribution_recur['id'];
        $contribution_data['financial_type_id'] = $contribution_recur_data['financial_type_id'];
      }
      else {
        $contribution_data['financial_type_id'] = $profile->getAttribute('financial_type_id');
      }

      // Create contribution.
      $contribution_data += array(
        'contribution_status_id' => $profile->getAttribute("pi_{$params['payment_method']}_status", CRM_Twingle_Submission::CONTRIBUTION_STATUS_COMPLETED),
        'receive_date' => $params['confirmed_at'],
      );
      $contribution = civicrm_api3('Contribution', 'create', $contribution_data);
      if ($contribution['is_error']) {
        throw new CiviCRM_API3_Exception(
          E::ts('Could not create contribution'),
          'api_error'
        );
      }

      $result_values['contribution'] = $contribution['values'];
    }

    // Create membership if a membership type is configured within the profile.
    if ($params['donation_rhythm'] != 'one_time') {
      $membership_type_id = $profile->getAttribute('membership_type_id_recur');
    }
    else {
      $membership_type_id = $profile->getAttribute('membership_type_id');
    }
    if (!empty($membership_type_id)) {
      $membership = civicrm_api3('Membership', 'create', array(
        'contact_id' => $contact_id,
        'membership_type_id' => $membership_type_id,
      ));

      $result_values['membership'] = $membership;
    }

    $result = civicrm_api3_create_success($result_values);
  }
  catch (CiviCRM_API3_Exception $exception) {
    $result = civicrm_api3_create_error($exception->getMessage());
  }

  return $result;
}
