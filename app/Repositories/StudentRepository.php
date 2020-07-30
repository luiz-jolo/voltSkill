<?php

namespace App\Repositories;

use App\Http\Requests\StudentRequest;
use App\StudentModel;
use http\Env\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class StudentRepository.
 */
class StudentRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return StudentModel::class;
    }


    /**
     * @param StudentRequest $studentRequest
     * @return string
     */
    public function saveRecord(StudentRequest $studentRequest)
    {
        return $this->saveStudent(
          new StudentModel(),
          $studentRequest
        );
//        $studentData = $studentRequest->all();

    }

    public function saveStudent(StudentModel $studentModel, StudentRequest $studentRequest)
    {
        $studentData = $studentRequest->all();

//        $studentModel->create([
//            'stud_name' => $studentData['name'],
//            'stud_email' => $studentData['email'],
//            'stud_registration' => rand(300,3000),
//            'stud_document' => $studentData['cpf'],
//            'stud_birth_date' => $studentData['data_nascimento']
//        ]);

        $studentModel->stud_name = $studentData['name'];
        $studentModel->stud_email = $studentData['email'];
        $studentModel->stud_registration = rand(300,3000);
        $studentModel->stud_document = $studentData['cpf'];
        $studentModel->stud_birth_date = $studentData['data_nascimento'];

        $studentModel->save();
        return $studentModel;

    }

}
