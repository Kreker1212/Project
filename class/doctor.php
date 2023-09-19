<?php

class Doctor
{

    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getDoctors(): array
    {
        $sql = "SELECT * FROM doctor";
        $doctor = $this->pdo->query($sql);
        return $doctor->fetchALL(PDO::FETCH_ASSOC);

    }


    public function getDoctorByID(int $doctorId): array
    {
        $sql = "SELECT * FROM doctor WHERE id = :doctorId";
        $doctor = $this->pdo->prepare($sql);
        $doctor->execute([
            'doctorId'=>$doctorId,
        ]);
        return $doctor->fetch(PDO::FETCH_ASSOC);
    }


    public function updateDoctor(string $name, string $surname, int $experience, int $id): void
    {
        $sql = "UPDATE doctor SET name = :name, surname = :surname, experience = :experience WHERE id = :id";
        $update = $this->pdo->prepare($sql);
        $update->execute([
            'name' => $name,
            'surname' => $surname,
            'experience' => $experience,
            'id' => $id
        ]);
    }


    public function addDoctor(string $name, string $surname, int $experience): void
    {
        $sql = "INSERT INTO doctor (id, name, surname, experience) VALUES (NULL, :name, :surname, :experience)";
        $add = $this->pdo->prepare($sql);
        $add->execute([
           'name' => $name,
            'surname' => $surname,
            'experience' => $experience,
        ]);
    }

    public function addDate(int $id, string $date, string $time): void
    {
        $sql = "INSERT INTO RECORD (id, doctor_id, date, time) VALUES (NULL, :id, :date, :time)";
        $add = $this->pdo->prepare($sql);
        $add->execute([
            'id' => $id,
            'date' => $date,
            'time' => $time
        ]);
    }

    public function deleteDate(int $id): void
    {
        $sql = "DELETE FROM RECORD WHERE id = :id";
        $add = $this->pdo->prepare($sql);
        $add->execute([
            'id' => $id
        ]);
    }

    public function deleteDoctor(int $id): void
    {
        $sql = "DELETE FROM doctor WHERE id = :id";
        $add = $this->pdo->prepare($sql);
        $add->execute([
            'id' => $id,
        ]);
    }

}