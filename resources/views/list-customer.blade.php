@extends('layout.app')
@section('content')
    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl">
            <div class="bg-gray-900">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-700">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                                #</th>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                                First Name</th>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                                Last Name</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                                Date Of Birth</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                                Phone Number</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                                Email</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                                BAN</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-sm font-semibold text-white text-center">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-800">
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                                1</td>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                                Lindsay</td>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                                Walton</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                7-7-2000</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                085736269587</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                lindsay.walton@example.com</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                123456789231</td>
                                            <td
                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                <div class="flex justify-between">
                                                    <a href="#" class="text-indigo-400 hover:text-indigo-300"><i
                                                            class="fa-regular fa-eye"></i></a>
                                                    <a href="#" class="text-indigo-400 hover:text-indigo-300"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                    <a href="#" class="text-indigo-400 hover:text-indigo-300"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
