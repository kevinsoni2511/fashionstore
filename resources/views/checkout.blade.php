@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Checkout</h1>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4 bg-white rounded">
                    <form action="/submit-form" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number:</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City:</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="">Select City</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                                <option value="Bhavnagar">Bhavnagar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label">State:</label>
                            <select class="form-select" id="state" name="state" required>
                                <option value="">Select State</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
