<?php
namespace App\Services;
use App\Models\Certification;
use App\Models\User;

class CertificationService
{
    public function store(User $user, array $data): Certification
    {
        $this->normalizeDates($data);

        return $user->certifications()->create($data);
    }

     public function update(User $user, int $certificationId, array $data): Certification
    {
        $data = $this->normalizeDates($data);

        $certification = $user->certifications()->where('id', $certificationId)->firstOrFail();
        $certification->update($data);

        return $certification->fresh();
    }

    public function delete(User $user, Certification $certification): void
    {
        abort_unless($certification->user_id === $user->id, 403);

        $certification->delete();
    }
    private function normalizeDates(array $data): array
    {
        $data['present'] = $data['present'] ?? false;
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        return $data;
    }
}