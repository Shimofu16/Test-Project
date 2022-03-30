<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\HealthDeclaration;
use DateTime;
use Livewire\Component;

class Multistepform extends Component
{
    public $first_name, $middle_name, $last_name;
    public $age;
    public $gender;
    public $email;
    public $address;
    public $date;
    public $prisoner_name, $prisoner_relationship, $phone_number;
    public $health_poll;

    public $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9;
    public $eq2, $eq3, $eq4, $eq5, $eq6, $eq7, $eq8, $eq9;

    public $totalSteps = 3;
    public $currentStep = 1;
    public function mount()
    {
        $this->currentStep = 1;
    }
    public function increaseStep()
    {
        $this->validateData();
        $this->resetErrorBag();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }
    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
    protected  $validationAttributes  = [
        'first_name' => 'First Name',
        'middle_name' => 'Middle Name',
        'last_name' => 'Last Name',
        'gender' => 'Gender',
        'age' => 'Age',
        'email' => 'Email Address',
        'date' => 'Date',
        'prisoner_name' => 'Prisoner Name',
        'prisoner_relationship' => 'Relation ship to the Prisoner',
        'phone_number' => 'Phone Number',
        'address' => 'Address',

        'q1' => 'Quesion No. 1',
        'q2' => 'Quesion No. 2',
        'q3' => 'Quesion No. 3',
        'q4' => 'Quesion No. 4',
        'q5' => 'Quesion No. 5',
        'q6' => 'Quesion No. 6',
        'q7' => 'Quesion No. 7',
        'q8' => 'Quesion No. 8',
        'q9' => 'Quesion No. 9',
        'eq2' => 'Quesion No. 2',
        'eq3' => 'Quesion No. 3',
        'eq4' => 'Quesion No. 4',
        'eq5' => 'Quesion No. 5',
        'eq6' => 'Quesion No. 6',
        'eq7' => 'Quesion No. 7',
        'eq8' => 'Quesion No. 8',
        'eq9' => 'Quesion No. 9',

    ];
    protected $messages = [
        'eq2.required_if' => 'Please Fill up this field.',
        'eq3.required_if' => 'Please Fill up this field.',
        'eq4.required_if' => 'Please Fill up this field.',
        'eq5.required_if' => 'Please Fill up this field.',
        'eq6.required_if' => 'Please Fill up this field.',
        'eq7.required_if' => 'Please Fill up this field.',
        'eq8.required_if' => 'Please Fill up this field.',
        'eq9.required_if' => 'Please Fill up this field.',
    ];
    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string',
                'middle_name' => 'required|string',
                'last_name' => 'required|string',
                'age' => 'required|numeric|digits_between:1,2',
                'gender' => 'required|string',
                'email' => 'required',
                'address' => 'required|string',
                'date' => 'required',
                'prisoner_name' => 'required|string',
                'prisoner_relationship' => 'required|string',
                'phone_number' => 'required|numeric|digits:11',
                'health_poll' => 'required',
            ]);
        }
        if ($this->currentStep == 2) {
            $this->validate([
                'q1' => 'required',
                'q2' => 'required',
                'q3' => 'required',
                'q4' => 'required',
                'q5' => 'required',
                'q6' => 'required',
                'q7' => 'required',
                'q8' => 'required',
                'q9' => 'required',

                'eq2' => 'required_if:q2,',
                'eq3' => 'required_if:q3,Yes',
                'eq5' => 'required_if:q5,Yes',
                'eq6' => 'required_if:q6,Yes',
                'eq8' => 'required_if:q8,Yes',
                'eq9' => 'required_if:q9,Yes',

            ]);
        }
    }
    public function updated($propertyName)
    {
        if ($this->currentStep == 1) {
            $this->validateOnly($propertyName, [
                'first_name' => 'required|string',
                'middle_name' => 'required|string',
                'last_name' => 'required|string',
                'age' => 'required|numeric|digits_between:1,2',
                'gender' => 'required|string',
                'email' => 'required',
                'address' => 'required|string',
                'date' => 'required',
                'prisoner_name' => 'required|string',
                'prisoner_relationship' => 'required|string',
                'phone_number' => 'required|numeric|digits:11',
                'health_poll' => 'required',
            ]);
        }
        if ($this->currentStep == 2) {
            $this->validateOnly($propertyName, [
                'q1' => 'required',
                'q2' => 'required',
                'q3' => 'required',
                'q4' => 'required',
                'q5' => 'required',
                'q6' => 'required',
                'q7' => 'required',
                'q8' => 'required',
                'q9' => 'required',
                'eq2' => 'required_if:q2,',
                'eq3' => 'required_if:q3,Yes',
                'eq5' => 'required_if:q5,Yes',
                'eq6' => 'required_if:q6,Yes',
                'eq8' => 'required_if:q8,Yes',
                'eq9' => 'required_if:q9,Yes',
            ]);
        }
    }
    public function appointment()
    {
        $this->validateData();
        $this->resetErrorBag();
        $appointment = [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'gender' => $this->gender,
            'email' => $this->email,
            'address' => $this->address,
            'date' => $this->date,
            'prisoner_name' => $this->prisoner_name,
            'prisoner_relationship' => $this->prisoner_relationship,
            'phone_number' => $this->phone_number,
            'health_poll' => $this->health_poll,
        ];
        $health_poll = [
            'temp' => $this->q1,
            'resp' => $this->q2,
            'eq_resp' => $this->q2 === "None" ? null : $this->eq2,
            'travel' => $this->q3,
            'eq_travel' => $this->q3 === "No" ? null : $this->eq3,
            'history' => $this->q4,
            'eq_history' => $this->q4 === "No" ? null : $this->eq4,
            'hospital' => $this->q5,
            'eq_hospital' => $this->q5 === "No" ? null : $this->eq5,
            'public' => $this->q6,
            'eq_public' => $this->q6 === "No" ? null : $this->eq6,
            'close' => $this->q7,
            'front' => $this->q8,
            'eq_front' => $this->q8 === "No" ? null : $this->eq8,
            'place' => $this->q9,
            'eq_place' => $this->q9 === "No" ? null : $this->eq9,
        ];
        try {
            Appointment::create($appointment);
            HealthDeclaration::create($health_poll);
            /* $appointment = new Appointment();
            $appointment->first_name = $this->first_name;
            $appointment->middle_name = $this->middle_name;
            $appointment->last_name = $this->last_name;
            $appointment->age = $this->age;
            $appointment->gender = $this->gender;
            $appointment->email = $this->email;
            $appointment->address = $this->address;
            $appointment->date = $this->date;
            $appointment->prisoner_name = $this->prisoner_name;
            $appointment->prisoner_relationship = $this->prisoner_relationship;
            $appointment->phone_number = $this->phone_number;
            $appointment->health_poll = $this->health_poll;
            $appointment->save();
            $health_poll = new HealthDeclaration();
            $health_poll->temp = $this->q1;
            $health_poll->resp = $this->q2;
            $health_poll->eq_resp = $this->q2 === "None" ? null : $this->eq2;
            $health_poll->travel = $this->q3;
            $health_poll->eq_travel = $this->q3 === "No" ? null : $this->eq3;
            $health_poll->history = $this->q4;
            $health_poll->eq_history = $this->q4 === "No" ? null : $this->eq4;
            $health_poll->hospital = $this->q5;
            $health_poll->eq_hospital = $this->q5 === "No" ? null : $this->eq5;
            $health_poll->public = $this->q6;
            $health_poll->eq_public = $this->q4 === "No" ? null : $this->eq4;
            $health_poll->close = $this->q7;
            $health_poll->front = $this->q8;
            $health_poll->eq_front = $this->q8 === "No" ? null : $this->eq8;
            $health_poll->place = $this->q9;
            $health_poll->eq_place = $this->q9 === "No" ? null : $this->eq9;
            $health_poll->save(); */
            $this->currentStep = 3;
            dd($appointment,$health_poll);
        } catch (\Throwable $th) {
            if ($th == null) {
                # code...
            }
        }

    }
    public function render()
    {
        return view('livewire.multistepform');
    }
}
