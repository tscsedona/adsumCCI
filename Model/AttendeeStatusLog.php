<?php
App::uses('AppModel', 'Model');

/**
 * Attendee Status Logs Model
 *
 * CakePHP 2.x.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright The Sedona Conference® (https://thesedonaconference.org)
 * @author Chris Vogt <CJV@sedonaconference.org>
 */
class AttendeeStatusLog extends AppModel {
    
    public $belongsTo = array(
        'Attendee',
        'AttendanceStatusState',
        'Event',
        'User' => array(
            'className'   => 'User',
            'foreignKey'  => 'logged_by'
        )
    );
    
}