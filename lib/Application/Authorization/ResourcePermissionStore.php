<?php
/**
Copyright 2020 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
*/


require_once(ROOT_DIR . 'Domain/Access/namespace.php');

interface IResourcePermissionStore
{
    /**
     * @param $userId int
     * @return array[]int
     */
    function GetAllResources($userId);

    /**
     * @param $userId int
     * @return array[]int
     */
    function GetBookableResources($userId);

    /**
     * @param $userId int
     * @return array[]int
     */
    function GetViewOnlyResources($userId);
}

class ResourcePermissionStore implements IResourcePermissionStore
{
	/**
	 * @var IScheduleUserRepository
	 */
	private $_scheduleUserRepository;

	/**
	 * @param IScheduleUserRepository $scheduleUserRepository
	 */
	public function __construct(IScheduleUserRepository $scheduleUserRepository)
	{
		$this->_scheduleUserRepository = $scheduleUserRepository;
	}

	public function GetAllResources($userId)
	{
		$permittedResourceIds = array();

		$user = $this->_scheduleUserRepository->GetUser($userId);

		$resources = $user->GetAllResources();
		foreach ($resources as $resource)
		{
			$permittedResourceIds[] = $resource->Id();
		}

		return $permittedResourceIds;
	}

    public function GetBookableResources($userId)
    {
        $resourceIds = array();

        $user = $this->_scheduleUserRepository->GetUser($userId);

        $resources = $user->GetBookableResources();

        foreach ($resources as $resource)
        {
            $resourceIds[] = $resource->Id();
        }

        return $resourceIds;
    }

    public function GetViewOnlyResources($userId)
    {
        $resourceIds = array();

        $user = $this->_scheduleUserRepository->GetUser($userId);

        $resources = $user->GetViewOnlyResources();

        foreach ($resources as $resource)
        {
            $resourceIds[] = $resource->Id();
        }

        return $resourceIds;
    }
}