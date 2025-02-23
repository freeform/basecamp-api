<?php
namespace Basecamp\Api;

/**
 * Accesses API.
 *
 * @link https://github.com/basecamp/bcx-api/blob/master/sections/accesses.md
 */
class Accesses extends AbstractApi
{
    /**
     * Get accesses to project.
     *
     * @param integer $projectId
     *
     * @return array
     */
    public function project($projectId)
    {
        $data = $this->get('projects/' . $projectId . '/accesses.json');

        return $data;
    }

    /**
     * Grant access to project.
     *
     * @param integer $projectId
     * @param array $userIds
     *
     * @return object
     */
    public function grantProject($projectId, array $userIds)
    {
        $data = $this->post('projects/' . $projectId . '/accesses.json', $userIds);

        return $data;
    }

    /**
     * Revoke access from project.
     *
     * @param integer $projectId
     * @param integer $userId
     *
     * @return object
     */
    public function revokeProject($projectId, $userId)
    {
        $data = $this->delete('projects/' . $projectId . '/accesses/' . $userId . '.json');

        return $data;
    }

    /**
     * Get accesses to calendar.
     *
     * @param integer $calendarId
     *
     * @return array
     */
    public function calendar($calendarId)
    {
        $data = $this->get('calendars/' . $calendarId . '/accesses.json');

        return $data;
    }

    /**
     * Grant access to calendar.
     *
     * @param integer $calendarId
     * @param array $userIds
     *
     * @return object
     */
    public function grantCalendar($calendarId, array $userIds)
    {
        $data = $this->post('calendars/' . $calendarId . '/accesses.json', $userIds);

        return $data;
    }

    /**
     * Revoke access from calendar.
     *
     * @param integer $calendarId
     * @param integer $userId
     *
     * @return object
     */
    public function revokeCalendar($calendarId, $userId)
    {
        $data = $this->delete('projects/' . $calendarId . '/accesses/' . $userId . '.json');

        return $data;
    }
}
