<?php

namespace App\Services;

use App\Models\WorkExperience;
use App\Models\User;

class WorkExperienceService
{
    /**
     * Create a new work experience entry for a user.
     *
     * @param User $user
     * @param array $data
     * @return WorkExperience
     */
    public function createWorkExperience(User $user, array $data): WorkExperience
    {
        $this->normalizeDates($data);

        return $user->experiences()->create($data);
    }

    /**
     * Update an existing work experience entry.
     *
     * @param WorkExperience $workExperience
     * @param array $data
     * @return WorkExperience
     */
    public function updateWorkExperience(User $user , int $workExperienceId, array $data): WorkExperience
    {
        $data = $this->normalizeDates($data);

        $workExperience = $user->experiences()->where('id', $workExperienceId)->firstOrFail();

        $workExperience->update($data);

        return $workExperience;
    }

    /**
     * Delete a work experience entry.
     *
     * @param WorkExperience $workExperience
     * @return void
     */
    public function deleteWorkExperience(WorkExperience $workExperience, User $user): void
    {
         abort_unless($workExperience->user_id === $user->id, 403);

        $workExperience->delete();
    }


    private function normalizeDates(array $data): array
    {
        $data['present'] = $data['present'] ?? false;
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        return $data;
    }
}