@extends('layouts.app')
@section('content')
    <div class="position-relative">
        <img class="img-fluid" src="{{ url('asset/bg-top.png') }}" alt="" style="width: 100%">
        <div class="d-flex justify-content-center position-absolute top-50 ">
            <div class="card p-4 rounded-4 shadow-lg p-3 mb-5 bg-white" style="width:75%">
                <div class="p-3 row">
                    <div class="col-6 pe-5">
                        <h6 class="fw-bold mb-4" style="color: #28A0F6">CONTACT US</h6>
                        <h1 class="fw-bold mb-4">You have a new project?</h1>
                        <p class="mt-4 mb-4" style="font-size: 18px">Come tell us what you need! Fill out this form and our solution team will response to your email by maximum of 2×24 workday. Please be patient and wait for us.</p>
                        <img src="{{ url('asset/map.png') }}" alt="" style="width: 100%">
                        <div class="d-flex justify-content-between mt-5">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                                </svg>
                                <h6 class="fw-bold mt-3">Head Office</h6>
                                <p class="fw-light">Jl. Mars Barat I No 9, Bandung 40295</p>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                                <h6 class="fw-bold mt-3">Email</h6>
                                <p class="fw-light">connect@gits.id</p>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                                <h6 class="fw-bold mt-3 mb-0">Whatsapp</h6>
                                <h6 class="fw-bold mt-0">(chat-only)</h6>
                                <p class="fw-light">0811-1309-991</p>
                            </div>
                        </div>
                    </div>
                    <div class="col ms-4 d-flex align-items-center">
                        <div class="row">
                            <div class="col m-0 p-0 ">
                                <div class="mt-3">
                                    <label for="inputName" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="inputEmail1">
                                </div>
                                <div class="mt-4">
                                    <label for="inputphone" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="inputPhone">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mt-3">
                                    <label for="inputEmail1" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="inputEmail1">
                                </div>
                                <div class="mt-4">
                                    <label for="inputCompany" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="inputCompany">
                                </div>
                            </div>
                            <div class="mt-4 m-0 p-0 ">
                                <label for="inputMessage" class="form-label">Message</label>
                                <textarea type="textarea" class="form-control" id="inputMessage" rows="10``"></textarea>
                            </div>
                            <div class="mt-4 my-3 form-check">
                                <input type="checkbox" class="form-check-input" id="notRobotCheck" required>
                                <label class="form-check-label" for="notRobotCheck">Saya bukan robot</label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                            <button type="submit" class="btn py-3 fw-bold mt-4" style="width: 200px; background: #FF8B49;color: white; font-size: 14px;">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    @endsection