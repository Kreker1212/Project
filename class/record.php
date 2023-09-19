<?php

class Record {

    public PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getRecordByUserId(int $id): array
{
    $sql = "SELECT * FROM RECORD WHERE user_id = :id";
    $records = $this->pdo->prepare($sql);
    $records->execute([
        'id' => $id
    ]);
    return $records->fetchALL(PDO::FETCH_ASSOC);
}
    public function updateRecord(int $userId, int $id): void
    {
        $sql = "UPDATE RECORD SET record = :number, user_id = :userId WHERE id = :id";
        $update = $this->pdo->prepare($sql);
        $update->execute([
            'number' => 1,
            'userId' => $userId,
            'id' => $id
            ]);
    }

    public function getRecordByDoctorId(int $id): array
    {
        $sql = "SELECT * FROM RECORD WHERE doctor_id = :id AND record is NULL";
        $records = $this->pdo->prepare($sql);
        $records->execute([
            'id' => $id,
        ]);
        return $records->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getRecordsById(int $id): array
    {
        $sql = "SELECT * FROM RECORD WHERE doctor_id = :id";
        $doctorDate = $this->pdo->prepare($sql);
        $doctorDate->execute([
            'id' => $id,
        ]);
        return $doctorDate->fetchALL(PDO::FETCH_ASSOC);
    }
}