@extends('layout.app')
@section('content')
    <div class="overflow-hidden rounded-lg bg-white shadow">
        <div class="px-4 py-5 sm:p-6">
            <!-- Content goes here -->
            <div class="flex justify-center">
                <div class="mr-4 flex-shrink-0 self-center">
                    <img src="{{ asset('img/people1.jpg') }}" alt="John Doe" class="h-16 w-16">
                </div>
                <div>
                    <h4 class="text-lg font-bold">John Doe</h4>
                    <p>john.dow@test.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 lg:px-8 mt-10">
        <div class="flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table>
                        <tr>
                            <th>First Name</th>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>Deo</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>Jhon@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>8819283612</td>
                        </tr>
                        <tr>
                            <th>Account Number</th>
                            <td>1238819283612</td>
                        </tr>
                        <tr>
                            <th>About</th>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam labore hic reprehenderit
                                cum!</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <button type="submit"
        class="rounded-md bg-gray-400 mt-10 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Back
    </button>
@endsection
