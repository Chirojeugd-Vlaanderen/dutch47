<?php
/*
    be.chiro.civi.dutch47 - Temporary fix Dutch translation for CiviCRM 4.7.
    Copyright (C) 2016  Chirojeugd-Vlaanderen vzw

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Collection of upgrade steps.
 */
class CRM_Dutch47_Upgrader extends CRM_Dutch47_Upgrader_Base {
  /**
   * An array of translations that we might want to put into Transifex once
   * CRM-17737 is fixed.
   * 
   * This is work in progress.
   *
   * I translate the verbs as infinitives in Dutch. In CiviCRM 4.6 some
   * were translated as infinitive, some as imperative, but most as
   * infinitive.
   * I also put the subject in front of the infinitive, since that seems
   * to be more sensible in Dutch.
   *
   * @var array
   */
  protected $translations = array (
    // Contact actions
    'Add activity' => 'Activiteit toevoegen',
    // Organization and household is not translated within the string
    // below, but I think that's a bug in Core CiviCRM.
    'Add relationship - to %1' => 'Relatie toevoegen - aan %1',
    'Communication preferences - alter' => 'Communicatievoorkeuren - wijzigen',
    'Delete contacts' => 'Contacten verwijderen',
    'Delete permanently' => 'Definitief verwijderen',
    'Email - send now (to 50 or less)' => 'E-mail - nu verzenden (naar 50 of minder)',
    'Email - unhold addresses' => 'E-mail - adressen vrijgeven',
    'Export contacts' => 'Contacten exporteren',
    'Group - add contacts' => 'Groep - contacten toevoegen',
    // CiviCRM 4.6 translates 'smart group' as 'smart groep', which is certainly
    // not correct. Because I don't want to introduce a totally new translation
    // (like 'slimme groep'), I will use 'smargroep', which complies to the
    // general rules of compounds in Dutch.
    'Group - create smart group' => 'Groep - smartgroep maken',
    'Group - remove contacts' => 'Groep - contacten verwijderen',
    // I think 'verzendetiketten' is a strange word, but it is used as a
    // translation in CiviCRM 4.6 as well.
    'Mailing labels - print' => 'Verzendetiketten - afdrukken',
    'Merge contacts' => 'Contacten samenvoegen',
    'PDF letters - print' => 'PDF-brieven - afdrukken',
    'Print selected rows' => 'Geselecteerde rijen afdrukken',
    'Register participants for event' => 'Deelnemers inschrijven voor evenement',
    'Restore contacts from trash' => 'Contacten terughalen uit prullenbak',
    // I also think 'kenmerk' is a strange translation, but it was used
    // before.
    'Tag - add to contacts' => 'Kenmerk - toekennen aan contacten',
    'Tag - remove from contacts' => 'Kenmerk - verwijderen van contacten',
    'Update multiple contacts' => 'Meerdere contacten bijwerken',

    // Search contributions
    'Date Received' => 'Ontvangstdatum',
    
    // Translate addresses. The below covers 99% of our contacts ;-)
    'BELGIUM' => 'België',
    
    // Find participants
    'Cancel registration' => 'Inschrijving annuleren',
    'Delete participants from event' => 'Deelnemers uitschrijven voor evenement',
    'Email - send now' => 'E-mail - nu verzenden',
    'Export participants' => 'Deelnemers exporteren',
    'Name badges - print' => 'Naambadges - afdrukken',
    'PDF letter - print for participants' => 'PDF-brief - afdrukken voor deelnemers',
    'Participant status - change (emails sent)' => 'Deelnemersstatus - wijzigen (e-mails verzonden)',
    'Update multiple participants' => 'Meerdere deelnemers bijwerken',
  );
  
  // These are the translated option values of the option group
  // 'relative date filters'.
  protected $option_value_translations = array (
    'This week' => 'Deze week',
    // 'Kalendermaand' sounds strange in Dutch.
    'This calendar month' => 'Deze maand',
    'This quarter' => 'Dit kwartaal',
    'This calendar year' => 'Dit kalenderjaar',
    'Previous week' => 'Vorige week',
    'Previous calendar month' => 'Vorige maand',
    'Previous quarter' => 'Vorig kwartaal',
    'Previous calendar year' => 'Vorig kalenderjaar',
    'Last 7 days including today' => 'Afgelopen 7 dagen, vandaag inbegrepen',
    'Last 30 days including today' => 'Afgelopen 30 dagen, vandaag inbegrepen',
    'Last 60 days including today' => 'Afgelopen 60 dagen, vandaag inbegrepen',
    'Last 90 days including today' => 'Afgelopen 90 dagen, vandaag inbegrepen', 
    'Last 12 months including today' => 'Afgelopen 12 maanden, vandaag inbegrepen',
    'Last 2 years including today' => 'Afgelopen 2 jaar, vandaag inbegrepen',
    'Last 3 years including today' => 'Afgelopen 3 jaar, vandaag inbegrepen',
    'Next week' => 'Volgende week',
    'Next calendar month' => 'Volgende maand',
    'Next quarter' => 'Volgend kwartaal',
    'Next fiscal year' => 'Volgend fiscaal jaar',
    'Next calendar year' => 'Volgend kalenderjaar',
    'Next 7 days including today' => 'Komende 7 dagen, vandaag inbegrepen',
    'Next 30 days including today' => 'Komende 30 dagen, vandaag inbegrepen',
    'Next 60 days including today' => 'Komende 60 dagen, vandaag inbegrepen',
    'Next 90 days including today' => 'Komende 90 dagen, vandaag inbegrepen',
    'Next 12 months including today' => 'Komende 12 maanden, vandaag inbegrepen',
    // I have no clue what the below even mean:
    // 'current week to-date', 'current calendar month to-date',
    // 'current quarter to-date', 'current calendar year to-date'
    
    // All the below might be wrong; I am tu dumb for this. X-S
    'To end of yesterday' => 'Voor vandaag',
    'To end of previous week' => 'Voor deze week',
    'To end of previous calendar month' => 'Voor deze maand',
    'To end of previous quarter' => 'Voor dit kwartaal',
    'To end of previous calendar year' => 'Voor dit kalenderjaar',
    'From start of current day' => 'Vanaf vandaag',
    'From start of current week' => 'Vanaf deze week',
    'From start of current calendar month' => 'Vanaf deze maand',
    'From start of current quarter' => 'Vanaf dit kwartaal',
    'From start of current calendar year' => 'Vanaf dit kalenderjaar',
    'To end of current week' => 'Tot eind deze week',
    'To end of current calendar month' => 'Tot eind deze maand',
    'To end of current quarter' => 'Tot eind dit kwartaal',
    'To end of current calendar year' => 'Tot eind dit kalenderjaar',
    'Previous 2 days' => 'Vorige 2 dagen',
    'Previous 2 weeks' => 'Vorige 2 weken',
    'Previous 2 calendar months' => 'Vorige 2 maanden',
    'Previous 2 quarters' => 'Vorige half jaar',
    'Previous 2 calendar years' => 'Vorige 2 kalenderjaren',
    'Day prior to yesterday' => 'Eergisteren',
    'Week prior to previous week' => 'Week voor vorige week',
    'Month prior to previous calendar month' => 'Maand voor vorige maand',
    'Quarter prior to previous quarter' => 'Kwartaal voor vorig kwartaal',
    'Year prior to previous calendar year' => 'Jaar voor vorig kalenderjaar',
    'From end of previous week' => 'Vanaf deze week',
    'From end of previous calendar month' => 'Vanaf deze maand',
    'From end of previous quarter' => 'Vanaf dit kwartaal',
    'From end of previous calendar year' => 'Vanaf dit jaar',    
  );

  /**
   * Installs word replacements.
   */
  public function enable() {
    $result = TRUE;
    
    // word replacement translations
    foreach ($this->translations as $key => $value) {
      // Only replace words if there are no existing replacements
      $get_result = civicrm_api3('WordReplacement', 'get', array(
        'find_word' => $key,
      ));
      $result &= !$get_result['is_error'];

      if (!$get_result['is_error'] && $get_result['count'] == 0) {
        $create_result = civicrm_api3('WordReplacement', 'create', array(
          'find_word' => $key,
          'replace_word' => $value,
          'is_active' => 1,
          'match_type' => 'wildcardMatch',
          // I assume there is only one, unique domain.
          'domain_id' => 1,
        ));
        $result &= !$create_result['is_error'];
      }
    }
    
    // translate option values for relative_date_filters
    $option_group_result = civicrm_api3('OptionGroup', 'get', array(
      'name' => 'relative_date_filters'
    ));
    if (!$option_group_result['is_error'] && $option_group_result['count'] == 1) {
      $option_group_id = $option_group_result['id'];
      foreach ($this->option_value_translations as $key => $value) {
        $update_result = civicrm_api3('OptionValue', 'get', array(
          'option_group_id' => $option_group_id,
          'label' => $key,
          'api.OptionValue.create' => array(
            'id' => '$value.id',
            'label' => $value,
          )
        ));
        $result &= !$update_result['is_error'];
      }
    }
    
    return $result;
  }

  /**
   * Removes the translations that have not been changed.
   */
  public function disable() {
    $result = TRUE;
    
    // remove unchanged word replacements.
    foreach ($this->translations as $key => $value) {
      $delete_result = civicrm_api3('WordReplacement', 'get', array(
        'find_word' => $key,
        'replace_word' => $value,
        'api.WordReplacement.delete' => array('id' => '$value.id'),
      ));
      $result &= !$delete_result['is_error'];
    }
    
    // Revert unchanged option values for relative_date_filters
    $option_group_result = civicrm_api3('OptionGroup', 'get', array(
      'name' => 'relative_date_filters'
    ));
    if (!$option_group_result['is_error'] && $option_group_result['count'] == 1) {
      $option_group_id = $option_group_result['id'];
      foreach ($this->option_value_translations as $key => $value) {
        $update_result = civicrm_api3('OptionValue', 'get', array(
          'option_group_id' => $option_group_id,
          'label' => $value,
          'api.OptionValue.create' => array(
            'id' => '$value.id',
            'label' => $key,
          )
        ));
        $result &= !$update_result['is_error'];
      }
    }
    
    return $result;
  }
}
