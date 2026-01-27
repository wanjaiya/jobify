<?php
namespace App\Services;
use App\Models\Education;
use App\Models\User;

class EducationService
{
    public function store(User $user, array $data): Education
    {
        $this->normalizeDates($data);

        return $user->education()->create($data);
    }

     public function update(User $user, int $educationId, array $data): Education
    {
        $data = $this->normalizeDates($data);

        $education = $user->education()->where('id', $educationId)->firstOrFail();
        $education->update($data);

        return $education->fresh();
    }

    public function delete(User $user, Education $education): void
    {
        abort_unless($education->user_id === $user->id, 403);

        $education->delete();
    }


    private function normalizeDates(array $data): array
    {
        $data['present'] = $data['present'] ?? false;
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        return $data;
    }
}