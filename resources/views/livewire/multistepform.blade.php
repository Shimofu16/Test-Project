<div>
    @if ($currentStep== 3)
        <div class="card text-white bg-primary">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
    @endif
    <form wire:submit.prevent="appointment" method="post">
        @if ($currentStep == 1)
            <div class="step-one">
                <div class="card">
                    <div
                        class="card-header h5 bg-secondary text-white d-flex justify-content-between align-items-center">
                        <div class="text-left border rounded p-2">1/2</div>
                        <div class="w-100">
                            <span class="d-flex justify-content-center ">Appointment Request </span>
                        </div>
                    </div>
                    <div class="card-body text-start">
                        {{-- <div class="row">
                    <div class="col-md-9 col-lg-12 mb-3 me-lg-2">
                        <label for="first_name" class="text-dark h5 fw-normal form-title">First name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                            name="first_name" id="first_name" placeholder="Ex. Juan"
                            wire:model="first_name">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-lg-12 mb-3 me-lg-2">
                        <label for="middle_name" class="text-dark h5 fw-normal form-title">Middle name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('middle_name') is-invalid @enderror" type="text"
                            name="middle_name" id="middle_name" placeholder="Ex. Santos"
                            wire:model="middle_name">
                        @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-lg-12 mb-3 me-lg-2">
                        <label for="last_name" class="text-dark h5 fw-normal form-title">Last name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                            name="last_name" id="last_name" placeholder="Ex. Dela Cruz"
                            wire:model="last_name">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                        {{-- <hr>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-3 ">
                        <label for="first_name" class="text-dark h5 fw-normal form-title">First name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                            name="first_name" id="first_name" placeholder="Ex. Juan"
                            wire:model="first_name">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 ">
                        <label for="middle_name" class="text-dark h5 fw-normal form-title">Middle name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('middle_name') is-invalid @enderror" type="text"
                            name="middle_name" id="middle_name" placeholder="Ex. Santos"
                            wire:model="middle_name">
                        @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 ">
                        <label for="last_name" class="text-dark h5 fw-normal form-title">Last name <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                            name="last_name" id="last_name" placeholder="Ex. Dela Cruz"
                            wire:model="last_name">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="first_name" class="text-dark h5 fw-normal form-title">First name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                                    name="first_name" id="first_name" placeholder="Ex. Juan" wire:model="first_name">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="middle_name" class="text-dark h5 fw-normal form-title">Middle name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('middle_name') is-invalid @enderror" type="text"
                                    name="middle_name" id="middle_name" placeholder="Ex. Santos"
                                    wire:model="middle_name">
                                @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="last_name" class="text-dark h5 fw-normal form-title">Last name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                                    name="last_name" id="last_name" placeholder="Ex. Dela Cruz" wire:model="last_name">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-lg-3 mb-3 me-lg-2">
                                <label for="gender" class="text-dark h5 fw-normal form-title">Gender <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('gender') is-invalid @enderror"
                                    aria-label="Default select example" wire:model="gender">
                                    <option selected>Select Menu</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3 col-lg-2 mb-3 me-lg-2">
                                <label for="age" class="text-dark h5 fw-normal form-title">Age <span
                                        class="text-danger">*</span></label>
                                <input class="form-control        @error('age') is-invalid @enderror" type="number"
                                    name="age" id="age" placeholder="Age" wire:model="age">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="email" class="text-dark h5 fw-normal form-title">Email <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    name="email" id="email" placeholder="" wire:model="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 ">
                                <label for="date" class="text-dark h5 fw-normal form-title">Date <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('date') is-invalid @enderror" type="date" name="date"
                                    id="date" placeholder="" wire:model="date">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="address" class="text-dark h5 fw-normal form-title">Address <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    name="address" id="address" placeholder="" wire:model="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="prisoner_name" class="text-dark h5 fw-normal form-title">Prisnoer name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('prisoner_name') is-invalid @enderror" type="text"
                                    name="prisoner_name" id="prisoner_name" placeholder="" wire:model="prisoner_name">
                                @error('prisoner_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="prisoner_relationship"
                                    class="text-dark h5 fw-normal form-title">Relationship to
                                    the
                                    prisoner <span class="text-danger">*</span></label>
                                <input class="form-control @error('prisoner_relationship') is-invalid @enderror"
                                    type="text" name="prisoner_relationship" id="prisoner_relationship" placeholder=""
                                    wire:model="prisoner_relationship">
                                @error('prisoner_relationship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="phone_number" class="text-dark h5 fw-normal form-title">Phone No. <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('phone_number') is-invalid @enderror" type="text"
                                    name="phone_number" id="phone_number" placeholder="" wire:model="phone_number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-8 mb-3 ">
                                <label for="health_poll" class="text-dark h5 fw-normal form-title">Health Poll <span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <label for="poll 1"
                                        class="radio-inline py-2 me-1 gender @error('health_poll') is-invalid @enderror"><input
                                            type="radio" class="" name="health_poll" id="poll 1"
                                            value="poll 1" wire:model="health_poll">
                                        poll 1</label>
                                    <label for="poll 2"
                                        class="radio-inline py-2 me-1 gender @error('health_poll') is-invalid @enderror"><input
                                            type="radio" class="" name="health_poll" id="poll 2"
                                            value="poll 2" wire:model="health_poll">
                                        poll 2</label>
                                    <label for="poll 3"
                                        class="radio-inline py-2 me-1 gender @error('health_poll') is-invalid @enderror"><input
                                            type="radio" class="" name="health_poll" id="poll 3"
                                            value="poll 3" wire:model="health_poll">
                                        poll 3</label>
                                    <label for="poll 4"
                                        class="radio-inline py-2 me-1 gender @error('health_poll') is-invalid @enderror"><input
                                            type="radio" class="" name="health_poll" id="poll 4"
                                            value="poll 4" wire:model="health_poll">
                                        poll 4</label>

                                    @error('health_poll')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 2)
            <div class="step-two">
                <div class="card">
                    <div
                        class="card-header h5 bg-secondary text-white d-flex justify-content-between align-items-center">
                        <div class="text-left border rounded p-2">1/2</div>
                        <div class="w-100">
                            <span class="d-flex justify-content-center ">Health Declaration </span>
                        </div>
                    </div>
                    <div class="card-body text-start px-lg-5">
                        <div class="row mb-2">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <h5 class="fw-bold">TEMPERATURE</h5>
                                <label for="q1" class="text-dark h5 fw-normal form-title">1. Q1 <span
                                        class="text-danger">*</span></label>
                                <div class=" ms-2">
                                    <label for="yes" class="d-flex align-items-center @error('q1') is-invalid @enderror"> <input
                                            class="radio-col" type="radio" name="q1"
                                            id="yes" value="Yes" wire:model="q1">&nbspYes</label>
                                    <label for="no" class="d-flex align-items-center @error('q1') is-invalid @enderror"><input
                                            class="radio-col " type="radio" name="q1"
                                            id="no" value="No" wire:model="q1">&nbspNo
                                    </label>
                                    @error('q1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <h5 class="fw-bold">RESPERATORY SYMPTOMS</h5>
                                <label for="q1" class="text-dark h5 fw-normal form-title">2. Q2 <span
                                        class="text-danger">*</span></label>
                                <div class="mb-2 ms-2">
                                    <label for="cough" class="@error('q2') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q2"
                                            id="cough" value="Cough" wire:model="q2">&nbspCough</label>
                                    <label for="colds" class="@error('q2') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q2"
                                            id="colds" value="Colds" wire:model="q2">&nbspColds
                                    </label>
                                    <label for="sore" class="@error('q2') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q2"
                                            id="sore" value="Sore Throat" wire:model="q2">&nbspSore Throat
                                    </label>
                                    <label for="runny" class="@error('q2') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q2"
                                            id="runny" value="Runny Noset" wire:model="q2">&nbspRunny Noset
                                    </label>
                                    <label for="shrotness" class="@error('q2') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q2"
                                            id="shrotness" value="Shrotness of Breath" wire:model="q2">&nbspShrotness of
                                        Breath
                                    </label>
                                    <label for="None" class="@error('q2') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q2"
                                            id="None" value="None" wire:model="q2">&nbspNone
                                    </label>
                                    {{-- @error('q2', 'eq2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                    @error('q2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq2" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq2') is-invalid @enderror"
                                            type="text" name="eq2" id="eq2" placeholder="" wire:model="eq2">
                                        @error('eq2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <h5 class="fw-bold">TRAVEL and HISTORY </h5>
                                <label for="q3" class="text-dark h5 fw-normal form-title">3. Q3 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes3" class="@error('q3') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col" type="radio" name="q3"
                                            id="yes3" value="Yes" wire:model="q3">&nbspYes</label>
                                    <label for="no3" class="@error('q3') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col" type="radio" name="q3"
                                            id="no3" value="No" wire:model="q3">&nbspNo
                                    </label>
                                    @error('q3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq3" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq3') is-invalid @enderror"
                                            type="text" name="eq3" id="eq3" placeholder="" wire:model="eq3">
                                        @error('eq3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q4" class="text-dark h5 fw-normal form-title">4. Q4 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes4" class="@error('q4') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q4"
                                            id="yes4" value="Yes" wire:model="q4">&nbspYes</label>
                                    <label for="no4" class="@error('q4') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q4"
                                            id="no4" value="No" wire:model="q4">&nbspNo
                                    </label>
                                    @error('q4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq4" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq4') is-invalid @enderror"
                                            type="text" name="eq4" id="eq4" placeholder="" wire:model="eq4">
                                        @error('eq4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q5" class="text-dark h5 fw-normal form-title">5. Q5 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes5" class="@error('q5') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q5"
                                            id="yes5" value="Yes" wire:model="q5">&nbspYes</label>
                                    <label for="no5" class="@error('q5') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q5"
                                            id="no5" value="No" wire:model="q5">&nbspNo
                                    </label>
                                    @error('q5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq5" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq5') is-invalid @enderror"
                                            type="text" name="eq5" id="eq5" placeholder="" wire:model="eq5">
                                        @error('eq5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q6" class="text-dark h5 fw-normal form-title">6. Q6 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes6" class="@error('q6') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col" type="radio" name="q6"
                                            id="yes6" value="Yes" wire:model="q6">&nbspYes</label>
                                    <label for="no6" class="@error('q6') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col" type="radio" name="q6"
                                            id="no6" value="No" wire:model="q6">&nbspNo
                                    </label>
                                    @error('q6')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq6" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq6') is-invalid @enderror"
                                            type="text" name="eq6" id="eq6" placeholder="" wire:model="eq6">
                                        @error('eq6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q7" class="text-dark h5 fw-normal form-title">7. Q7 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes7" class="@error('q7') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q7"
                                            id="yes7" value="Yes" wire:model="q7">&nbspYes</label>
                                    <label for="no7" class="@error('q7') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q7"
                                            id="no7" value="No" wire:model="q7">&nbspNo
                                    </label>
                                    @error('q7')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q8" class="text-dark h5 fw-normal form-title">8. Q8 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes8" class="@error('q8') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q8"
                                            id="yes8" value="Yes" wire:model="q8">&nbspYes</label>
                                    <label for="no8" class="@error('q8') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q8"
                                            id="no8" value="No" wire:model="q8">&nbspNo
                                    </label>
                                    @error('q8')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq8" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq8') is-invalid @enderror"
                                            type="text" name="eq8" id="eq8" placeholder="" wire:model="eq8">
                                        @error('eq8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 col-lg-12 mb-3 ">
                                <label for="q9" class="text-dark h5 fw-normal form-title">9. Q9 <span
                                        class="text-danger">*</span></label>
                                <div class="ms-2">
                                    <label for="yes9" class="@error('q9') is-invalid @enderror d-flex align-items-center"> <input
                                            class="radio-col " type="radio" name="q9"
                                            id="yes9" value="Yes" wire:model="q9">&nbspYes</label>
                                    <label for="no9" class="@error('q9') is-invalid @enderror d-flex align-items-center"><input
                                            class="radio-col " type="radio" name="q9"
                                            id="no9" value="No" wire:model="q9">&nbspNo
                                    </label>
                                    @error('q9')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 ms-2">
                                        <label for="eq9" class="text-dark gender h5 fw-normal form-title">OR if
                                            identified
                                            with....</label>
                                        <input class="form-control-border-bottom @error('eq9') is-invalid @enderror"
                                            type="text" name="eq9" id="eq9" placeholder="" wire:model="eq9">
                                        @error('eq9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mb-2">
                            <h6 class="fw-bold">
                                Declaration: Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ex qui
                                illo vel, eos sed facilis quo neque. Maiores doloremque ipsa illum. Nam facilis
                                eligendi, dolorum aperiam omnis aspernatur maxime?
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="action-buttons d-flex justify-content-between align-items-center bg-white pt-2 pb-2 px-3">
            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            @if ($currentStep == 1)
                <button type="button" class="btn btn-md btn-primary" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep == 2)
                <button type="submit" class="btn btn-md btn-primary d-flex align-items-center">
                    Submit
                </button>
            @endif
        </div>
    </form>

</div>
