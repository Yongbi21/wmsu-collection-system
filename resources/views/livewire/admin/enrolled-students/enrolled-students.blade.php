<div>
    <x-loading-indicator/>
    <main class="p-9 sm:ml-64 pt-20 sm:pt-8 h-auto">
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-1">
            <div class="mx-5 px-3 ">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <!-- Breadcrumb -->
                    <nav class="flex px-5 py-3 text-gray-700" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <span class="inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Home
                                </span>
                            </li>
                            <li aria-current="page">
                                <a href="{{route('admin-enrolledstudents')}}" class="flex items-center">
                                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span
                                        class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400">Enrolled Students</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <!--End Breadcrumb -->


                    <!--Table Header -->
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 -mb-8">
                        <div class="flex">
                            <div class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" wire:model.live.debounce.500ms="filters.search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search " required="">
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                    <select id="filterFee" name="filterFee" wire:model.live="filters.search_by" wire:change="updateSearchDefault()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        @foreach ($search_by as $key=> $value)
                                            <option  value="{{$value}}" >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button style="display:none" id="addcsv-modalToggler" data-modal-target="addcsv-modal" data-modal-toggle="addcsv-modal">asdf</button>
                        <button style="display:none" id="activateEnrolledStudentModalToggler" data-modal-target="activateEnrolledStudentModal" data-modal-toggle="activateEnrolledStudentModal">asdf</button>
                        <button style="display:none" id="deleteEnrolledStudentModalToggler" data-modal-target="deleteEnrolledStudentModal" data-modal-toggle="deleteEnrolledStudentModal">asdf</button>
                        <button style="display:none" id="viewEnrolledStudentModalToggler" data-modal-target="viewEnrolledStudentModal" data-modal-toggle="viewEnrolledStudentModal">asdf</button>
                        <button style="display:none" id="editEnrolledStudentModalToggler" data-modal-target="editEnrolledStudentModal" data-modal-toggle="editEnrolledStudentModal">asdf</button>
                        <button style="display:none" id="addEnrolledStudentModalToggler" data-modal-target="addEnrolledStudentModal" data-modal-toggle="addEnrolledStudentModal">asdf</button>
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button wire:click="addEnrolledStudents('addEnrolledStudentModalToggler')"
                                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add Enrolled Students
                                </button>
                            </div>
                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button wire:click="ImportEnrolledStudents('addcsv-modalToggler')"
                                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Import Enrolled Students CSV
                                </button>
                            </div>
                        </div>
    
                        
                
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.college_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter College</option>
                                @foreach ( $colleges_data as $key =>$value) 
                                    <option value="{{ $value->id }}">{{ $value->code }}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.year_level_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter Year</option>
                                @foreach($year_levels as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->year_level}}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.semester_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Select semester</option>
                                @foreach($semesters as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                @endforeach
                            </select>
                        </div>    

                    </div>
                    <!--End Table Header -->
                    <!--Table-->
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Student Code</th>
                                    <th scope="col" class="px-4 py-3">Student Name</th>
                                    <th scope="col" class="px-4 py-3">Student Email</th>
                                    <th scope="col" class="px-4 py-3">College</th>
                                    <th scope="col" class="px-4 py-3">Course</th>
                                    <th scope="col" class="px-4 py-3">S.Y.</th>
                                    <th scope="col" class="px-4 py-3">Semester</th>
                                    <th scope="col" class="px-4 py-3">Yr. Level</th>
                                    <th scope="col" class="px-4 py-3 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>         
                                @foreach ($enrolled_students_data as $key =>$value)              
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$value->student_code}}</th>
                                        <td class="px-4 py-3">{{ $value->first_name. ' ' .$value->middle_name.' ' .$value->last_name }}</td>
                                        <td class="px-4 py-3">{{ $value->email}}</td>
                                        <td class="px-4 py-3">{{ $value->college_code}}</td>
                                        <td class="px-4 py-3">{{ $value->department_code}}</td>
                                        <td class="px-4 py-3">{{ $value->year_start.' - '.$value->year_end}}</td>
                                        <td class="px-4 py-3">{{ $value->semester}}</td>
                                        <td class="px-4 py-3">{{ $value->year_level}}</td>
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex justify-center items-center space-x-4">
                                                
                                                <button type="button" wire:click="editEnrolledStudents({{$value->id}},'viewEnrolledStudentModalToggler')"
                                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                        fill="currentColor" class="w-4 h-4 mr-2 -ml-0.5">
                                                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                                    </svg>
                                                    Preview
                                                </button>
                                                <button type="button" wire:click="editEnrolledStudents({{$value->id}},'editEnrolledStudentModalToggler')"
                                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none
                                                     focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button type="button" wire:click="editEnrolledStudents({{$value->id}},'deleteEnrolledStudentModalToggler')"
                                                    class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div wire:ignore.self id="addEnrolledStudentModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100% - 1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add Enrolled Student
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="addEnrolledStudentModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-7 md:p-5" wire:submit.prevent="saveAddEnrolledStudent('addEnrolledStudentModal')">
                                        @csrf
                                        <div class="grid gap-4 mb-12 grid-cols-2">
                                            <div class="col-span-6">
                                                <label for="snumber"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student Code</label>
                                                <input type="text" wire:model.defer="enrolledStudent.student_code" wire:change="updateStudentName()"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Student Code" required="" value="{{ old('snumber') }}">
                                                @error('snumber')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                                <label for="snumber" class="block  mt-2 my-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Name: {{$enrolledStudent['student_name']}}
                                                </label>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Year</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.school_year_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select School Year</option>
                                                    @foreach ( $school_years as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_start.' - '.$value->year_end}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year Level</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.year_level_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select Year Level</option>
                                                    @foreach ( $year_levels as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_level }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.semester_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select semester</option>
                                                    @foreach($semesters as $key =>$value)
                                                            <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="college"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College</label>
                                                <select id="college" required wire:model="enrolledStudent.college_id" wire:change="updateDepartments()" name="college"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    @foreach ( $colleges_data as $college)
                                                        <option selected value="{{ $college->id }}">{{ $college->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('college')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.department_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select your course</option>
                                                    @foreach ( $department_data as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2">
                                            <button type="button" data-modal-toggle="addEnrolledStudentModal"
                                                class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                                                Back
                                            </button>
                                            <button type="submit"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                                                Add
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div wire:ignore.self id="editEnrolledStudentModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100% - 1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Edit Enrolled Student
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="editEnrolledStudentModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-7 md:p-5" wire:submit.prevent="saveEditEnrolledStudent({{$enrolledStudent['id']}},'editEnrolledStudentModal')">
                                        @csrf
                                        <div class="grid gap-4 mb-12 grid-cols-2">
                                            <div class="col-span-6">
                                                <label for="snumber"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student Code</label>
                                                <input type="text"  wire:model.defer="enrolledStudent.student_code" wire:change="updateStudentName()"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Student Code" required="" value="{{ old('snumber') }}">
                                                @error('snumber')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                                <label for="snumber" class="block  mt-2 my-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Name: {{$enrolledStudent['student_name']}}
                                                </label>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Year</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.school_year_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select School Year</option>
                                                    @foreach ( $school_years as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_start.' - '.$value->year_end}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year Level</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.year_level_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select Year Level</option>
                                                    @foreach ( $year_levels as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_level }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.semester_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select semester</option>
                                                    @foreach($semesters as $key =>$value)
                                                            <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="college"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College</label>
                                                <select id="college" required wire:model="enrolledStudent.college_id" wire:change="updateDepartments()" name="college"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    @foreach ( $colleges_data as $college)
                                                        <option selected value="{{ $college->id }}">{{ $college->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('college')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                                <select id="course" name="course" wire:model.defer="enrolledStudent.department_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select your course</option>
                                                    @foreach ( $department_data as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2">
                                            <button type="button" data-modal-toggle="addEnrolledStudentModal"
                                                class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                                                Back
                                            </button>
                                            <button type="submit"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div wire:ignore.self id="viewEnrolledStudentModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100% - 1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            View Enrolled Student
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="viewEnrolledStudentModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-7 md:p-5" >
                                        @csrf
                                        <div class="grid gap-4 mb-12 grid-cols-2">
                                            <div class="col-span-6">
                                                <label for="snumber"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student Code</label>
                                                <input type="text" disabled wire:model.defer="enrolledStudent.student_code" wire:change="updateStudentName()"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Student Code" required="" value="{{ old('snumber') }}">
                                                @error('snumber')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                                <label for="snumber" class="block  mt-2 my-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Name: {{$enrolledStudent['student_name']}}
                                                </label>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Year</label>
                                                <select id="course" disabled name="course" wire:model.defer="enrolledStudent.school_year_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select School Year</option>
                                                    @foreach ( $school_years as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_start.' - '.$value->year_end}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year Level</label>
                                                <select id="course" disabled name="course" wire:model.defer="enrolledStudent.year_level_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select Year Level</option>
                                                    @foreach ( $year_levels as $key =>$value )
                                                        <option value="{{ $value->id }}">{{ $value->year_level }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                                <select id="course" disabled name="course" wire:model.defer="enrolledStudent.semester_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select semester</option>
                                                    @foreach($semesters as $key =>$value)
                                                            <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="college"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College</label>
                                                <select id="college" disabled required wire:model="enrolledStudent.college_id" wire:change="updateDepartments()" name="college"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    @foreach ( $colleges_data as $college)
                                                        <option selected value="{{ $college->id }}">{{ $college->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('college')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-span-6">
                                                <label for="course"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                                <select id="course" disabled name="course" wire:model.defer="enrolledStudent.department_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected value='' >Select your course</option>
                                                    @foreach ( $department_data as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2">
                                            <button type="button" data-modal-toggle="addEnrolledStudentModal"
                                                class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                                                Back
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div wire:ignore.self id="deleteEnrolledStudentModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100% - 1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Edit Enrolled Student
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="deleteEnrolledStudentModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-7 md:p-5" wire:submit.prevent="saveDeleteEnrolledStudent({{$enrolledStudent['id']}},'deleteEnrolledStudentModal')">
                                        @csrf
                                        <div class="grid gap-4 mb-12 grid-cols-2">
                                            <p> Are you sure you want to delete this enrolled students?</p>
                                        </div>
                                        <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2">
                                            <button type="button" data-modal-toggle="deleteEnrolledStudentModal"
                                                class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                                                Back
                                            </button>
                                            <button type="submit"
                                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                                                Delete
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div wire:ignore.self id="addcsv-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto p-4 md:p-5 overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center md:inset-0">
                            <div class="relative w-9/11 max-w-full max-h-full p-4 md:p-5">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Import Enrolled Students CSV
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="addcsv-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    
                                    <!-- Table for CSV content -->
                                    @if($enrolledstudents_csv['content'])
                                    <div class="p-4 md:p-5">
                                        <div class="flex justify-end py-2 px-2">
                                                <button type="button" wire:click="downloadTemplate()"class="text-white inline-flex items-center bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-3 dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-800">
                                                        Download Template
                                                </button>
                                            </div>
                                        <table class="w-full border-collapse border border-gray-200 dark:border-gray-600">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-4 py-3">#</th>
                                                    @foreach ($enrolledstudents_csv['default_header'] as $item_key => $item_value) 
                                                        <th scope="col" class="px-4 py-3">{{$item_value}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @foreach($enrolledstudents_csv['content'] as $key => $value)
                                                <tr class="border-b dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$key+1}}</th>
                                                    @foreach ($value as $item_key => $item_value) 
                                                    <td class="px-4 py-3">{{$item_value}}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="flex justify-end gap-2 mt-6">
                                            <button type="button" data-modal-toggle="addcsv-modal" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-5 rounded"> Back </button> 
                                            <button type="submit" wire:click="importEnrolledStudentCSV('addcsv-modal')" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
                                                Import
                                            </button>
                                        </div>
                                    </div>
                                    @else
                                        <div class="p-4 md:p-5">
                                            <div class="flex justify-end py-2 px-2">
                                                <button type="button" wire:click="downloadTemplate()"class="text-white inline-flex items-center bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-3 dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-800">
                                                        Download Template
                                                </button>
                                            </div>
                                            <form  class="p-7 md:p-5" wire:submit.prevent="importStudentCSV('addcsv-modal')">
                                                <div class="grid gap-4 mb-5 grid-cols-1">
                                                    <div class="flex items-center justify-center w-full">
                                                        <label for="importCSV" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                                </svg>
                                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                                <p class="text-xs text-gray-500 dark:text-gray-400" >CSV files only</p>
                                                            </div>
                                                            <input id="importCSV" type="file" class="hidden" accept="" required wire:change="checkUpload()" />
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- <input id="csv" type="file" accept="" required wire:model.defer="import.file" /> -->
                                                <div class="flex justify-center flex-col ">
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">1. All required (*) columns should be filled. Do not modify or remove column headers.</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">2. Student Code must be the student code inserted in the {Students Module}.</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">3. School Year must be in this format "XXXX-XXXX"</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">4. Year Level must be 1 - 5 only, it refers to 1st year - 5th year</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">5. Semester must be 1 - 2 only, it refers to 1st semester - 2nd semester</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">6. College code must be from the college module.</p>
                                                    <p class="text-bold text-lg text-red-500 dark:text-red-400">7. Department code must be from the department module.</p>
                                                </div>
                                                <div class="flex justify-end gap-2 mt-6">
                                                    <button type="button" data-modal-toggle="addcsv-modal" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-5 rounded"> Back </button> 
                                                </div>
                                            </form>
                                            <script>
                                                $('#importCSV').on("change", function(){ 
                                                    var formData = new FormData();
                                                    formData.append("file", document.getElementById("importCSV").files[0]);
                                                    console.log( formData)
                                                    $.ajax({
                                                        url: '/admin/upload/enrolledstudents',
                                                        type: 'POST',
                                                        data: formData ,
                                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                        contentType: false, 
                                                        processData: false,
                                                        success: function(data){
                                                        }
                                                    });
                                                
                                                    
                                                });
                                            </script>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2"></div>
                {{ $enrolled_students_data->links() }}
            </div>
        </section>
    </main>
</div>
